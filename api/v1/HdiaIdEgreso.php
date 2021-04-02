<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 1/03/2019
 * Time: 09:51 AM
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




    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        else{
            //si no se manda ninguna variable
            $data = $Db->GetData(" select * from Hdia.HdiaEgresoHdiaEmer where HdiaNumEgreso =(select max  (HdiaNumEgreso) from Hdia.HdiaEgresoHdiaEmer)", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta ', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}

