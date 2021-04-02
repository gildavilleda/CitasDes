<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 5/14/2019
 * Time: 2:16 PM
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
    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        $FechaI = $_GET['FechaI'];
        $FechaF = $_GET['FechaF'];
        $Clinica = $_GET['Clinica'];


        $data = $Db->GetData("SELECT Nombre, CitStrRegMedico, CitStrEspecialidad,FechaEntrada, FechaSalida FROM cita.vw_ListadoExpedientes WHERE CitNumClinica = '$Clinica' AND FechaEntrada BETWEEN '$FechaI' AND '$FechaF' ORDER BY FechaEntrada", $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}