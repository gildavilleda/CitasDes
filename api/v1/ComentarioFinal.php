<?php
/**
 * Created by PhpStorm.
 * User: Jasson Rodríguez
 * Date: 7/25/2019
 * Time: 9:16 AM
 */

require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
require_once '../../functions/WhereDinamic.php';
//error_reporting(0);
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
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_agComentarioFinal ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST['CitStrComentarioFinal']);
            $stmt->bindParam(2, $_REQUEST['CitCharAsistenciaPaciente']);
            $stmt->bindParam(3, $_REQUEST['CitNumCita']);

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }

        break;
    /*case 'DELETE': //No se esta utilizando, por eso se comenta, con opcion de volver a utilizarlo
        //Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_elimCita ?");
            $stmt->bindParam(1, $_REQUEST['CitNumCita']);

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, " " . $p->getMessage(), null);
        }
        break;
    case 'PUT':
        parse_str(file_get_contents("php://input"), $wsinput);
        $Db = new Database();
        if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['Comenzar'])){
            $stmt = $Db->Sentencia("EXEC cita.sp_ModCitaInicioAtencion ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumClita'});
            $stmt->bindParam(2, $_REQUEST{'CitStrPaciTarde'});
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
        }else if(isset($_REQUEST['Terminar'])){
            $stmt = $Db->Sentencia("EXEC cita.sp_ModCitaFinAtencion ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumClita'});
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
        }
        else{
            $stmt = $Db->Sentencia("EXEC cita.sp_ModCita ?, ?, ?, ?, ?, ?, ?, ?");
            $stmt->bindParam(1, $wsinput['CitNumCita']);
            $stmt->bindParam(2, $wsinput['CitNumMedico']);
            $stmt->bindParam(3, $wsinput['CitStrRegMedico']);
            $stmt->bindParam(4, $wsinput['fechaInicioCita']);
            $stmt->bindParam(5, $wsinput['fechaFinCita']);
            $stmt->bindParam(6, $wsinput['Observacion']);
            $stmt->bindParam(7, $wsinput['clinica']);
            $stmt->bindParam(8, $wsinput['especialidad']);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
        }



        echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
        $stmt->closeCursor();
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        $Wh = new WhereDinamic();

        if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if (isset($_REQUEST['CitNumCita']))
            $Wh->addAtributos('CitNumCita', " = ", $_REQUEST['CitNumCita']);
        if (isset($_REQUEST['CitDatInicio']))
            $Wh->addAtributos('cast(CitDatInicio as date)', " BETWEEN ", $_REQUEST['CitDatInicio'] . "' AND '" . $_REQUEST['CitDatInicio']);
        if (isset($_REQUEST['CitDatFin']))
            $Wh->addAtributos('cast(CitDatFin as date)', " = ", $_REQUEST['CitDatFin']);
        if (isset($_REQUEST['CitStrObservacion']))
            $Wh->addAtributos('CitStrObservacion', " LIKE ", "%" . $_REQUEST['CitStrObservacion'] . "%");
        if (isset($_REQUEST['CitNumClinica']))
            $Wh->addAtributos('CitNumClinica', " = ", $_REQUEST['CitNumClinica']);
        if (isset($_REQUEST['CitNumEspecialidad']))
            $Wh->addAtributos('CitNumEspecialidad', " = ", $_REQUEST['CitNumEspecialidad'], true);
        if (isset($_REQUEST['CitStrRegMedico']))
            $Wh->addAtributos('CitStrRegMedico', " = ", $_REQUEST['CitStrRegMedico']);
        if (isset($_REQUEST['CitNumMedico']))
            $Wh->addAtributos('CitNumMedico', " = ", $_REQUEST['CitNumMedico']);

        $data = $Db->GetData("SELECT CitNumCita, CitStrRegMedico, cita.fn_strnompaciente(CitStrRegMedico) 'CitStrPaciente',CitDatInicio, CitDatFin, CitStrObservacion, CitNumClinica, CitNumEspecialidad, CitNumMedico, CitTimeIniAtencion, CitTimeFinAtencion FROM cita.Core " . $Wh->strWhere(), $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta ', $data);
        break;*/

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}