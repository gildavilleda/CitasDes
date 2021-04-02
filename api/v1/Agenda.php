<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 5/15/2019
 * Time: 2:40 PM
 */


require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
require_once '../../functions/WhereDinamic.php';
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
    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        $Wh = "";

        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if (isset($_GET['CitNumClinica'])) {
            $Fecha = $_GET['fecha'];
            $Clinica = $_GET['CitNumClinica'];
            $data = $Db->GetData("SELECT * FROM cita.vw_InfoAgenda WHERE FechaInicio = '$Fecha' AND CitNumClinica = '$Clinica' ORDER BY hora", $_SESSION['dbUser'], $_SESSION['dbPass']);
        } else if (isset($_GET['regMedico'])) {
            $RegMedico = $_GET['regMedico'];
            $data = $Db->GetData("SELECT * FROM cita.vw_HistorialCitas WHERE CitStrRegMedico = '$RegMedico'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        } else if (isset($_GET['CitNumEspecialidad'])) {
            $CitNumEspecialidad = $_GET['CitNumEspecialidad'];
            $data = $Db->GetData("SELECT * FROM cita.wv_MostrarClinicasEnfermeria WHERE CitNumEspecialidad = '$CitNumEspecialidad'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else {
            $data = $Db->GetData("SELECT * FROM cita.vw_MostrarClinicas", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        /*
        if (isset($_REQUEST['CitDatInicio']) && isset($_REQUEST['CitDatFin'])){
            $Wh = "WHERE CAST(CitDatInicio as date) BETWEEN '" . $_REQUEST['CitDatInicio'] . "' AND '" . $_REQUEST['CitDatFin'] . "' ";
        }else{
            $Wh = "WHERE CAST(CitDatInicio as date) = cast(getdate() as date) ";
        }*/




        echo $ObjectJson->Json('1', 'Ejecucion de Consulta ' . $Wh, $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}