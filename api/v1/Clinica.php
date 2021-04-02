<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 1/03/2019
 * Time: 09:51 AM
 */
require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Content-Type: application/json; charset=UTF-8");

$ObjectJson = new JsonObject();


if (!isset($_SESSION['dbUser'])) {
    echo $ObjectJson->Json('0', 'Usuario no autenticado', null);
    http_response_code(403);
    exit(0);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
//Procedimiento para agregar Clinica


        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }


            $stmt = $Db->Sentencia("EXEC cita.sp_AgClinica ?");

            $stmt->bindParam(1, $_REQUEST{'CitStrNomClinica'});


            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }


        break;

    case 'PUT':
        //Procedimiento para modificar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_ModClinica ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumClinica'});
            $stmt->bindParam(2, $_REQUEST{'CitStrNomClinica'});


            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;

    case 'DELETE':
//Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_elimClinica ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumClinica'});

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        /**/
       if (isset($_REQUEST['CitNumEspecialidadbtn'])) {
            $CitNumEspecialidad = $_REQUEST['CitNumEspecialidadbtn'];
            $data = $Db->GetData("SELECT * FROM cita.vw_ClinicaEspecialidad WHERE CitNumEspecialidad = '$CitNumEspecialidad'", $_SESSION['dbUser'], $_SESSION['dbPass']);

        } else if(isset($_REQUEST['CitNumClinica'])){
            $clinica = $_REQUEST['CitNumClinica'];
            $data = $Db->GetData("SELECT * FROM cita.Clinica WHERE CitNumClinica = '$clinica'", $_SESSION['dbUser'], $_SESSION['dbPass']);

        }else if(isset($_REQUEST['cant'])){
            $Clinica = $_REQUEST['CitNumClinicaH'];//cambie especialidad por clinica
            $fechaInicio = $_REQUEST['fechaInicio'];
            $fechaFin = $_REQUEST['fechaFin'];
            $data = $Db->GetData("SELECT CitNumClinica, count(*) Cantidad FROM cita.Core
            where CitDatInicio between '$fechaInicio' and '$fechaFin'
            AND CitNumClinica = '".$Clinica."'
            group by CitNumClinica", $_SESSION['dbUser'], $_SESSION['dbPass']);
        } else {
            //mostrar datos clinica
            $data = $Db->GetData("SELECT * FROM cita.Clinica", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }



        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}