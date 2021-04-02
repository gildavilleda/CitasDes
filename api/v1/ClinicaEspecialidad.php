<?php
/**
 * Created by PhpStorm.
 * User: Jasson R.
 * Date: 7/12/2019
 * Time: 1:50 PM
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
//Procedimiento para agregar
        if (isset($_REQUEST['CitNumClinica']) != "") {
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC cita.sp_AgClinicaEspecialidad ?, ?");

                $stmt->bindParam(1, $_REQUEST{'CitNumClinica'});
                $stmt->bindParam(2, $_REQUEST{'CitNumEspecialidad'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
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

            $stmt = $Db->Sentencia("EXEC cita.sp_ModClinicaEspecialidad ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumRelClinicaEspecialidad'});
            $stmt->bindParam(2, $_REQUEST{'CitNumClinica'});
            $stmt->bindParam(3, $_REQUEST{'CitNumEspecialidad'});

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

            $stmt = $Db->Sentencia("EXEC cita.sp_elimClinicaEspecialidad ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumRelClinicaEspecialidad'});

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

        if (isset($_REQUEST['CitNumEspecialidad'])){
            $CitNumEspecialidad = $_REQUEST['CitNumEspecialidad'];
            $data = $Db->GetData("SELECT * FROM cita.vw_ClinicaEspecialidad WHERE CitNumEspecialidad = '$CitNumEspecialidad'", $_SESSION['dbUser'], $_SESSION['dbPass']);

        } else if(isset($_REQUEST['CitNumEspecialidadbtn'])){
            $CitNumEspecialidad = $_REQUEST['CitNumEspecialidadbtn'];
            $data = $Db->GetData("SELECT * FROM cita.vw_ClinicaEspecialidad WHERE CitNumEspecialidad = '$CitNumEspecialidad'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        } else if(isset($_REQUEST['CitNumClinica'])){
            $CitNumClinica = $_REQUEST['CitNumClinica'];
            $data = $Db->GetData("SELECT * FROM cita.vw_ClinicaEspecialidad WHERE CitNumEspecialidad = '$CitNumClinica'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        } else{
            //si no se manda ninguna variable
            $data = $Db->GetData("SELECT * FROM cita.vw_ClinicaEspecialidad", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }



        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}