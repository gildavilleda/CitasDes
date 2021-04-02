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
//Procedimiento para agregar o modificar

        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_AgFam ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST['CitStrContacto']);
            $stmt->bindParam(2, $_REQUEST['CitNumTelefono']);
            $stmt->bindParam(3, $_REQUEST['CitStrParentesco']);
            $stmt->bindParam(4, $_REQUEST['CitStrRegMedico']);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];

            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $e->getCode($p->getMessage()), null);
        }

        break;

    case 'PUT':
        /*Procedimiento para actualizar familiartes de pacientes*/
        try {
            parse_str(file_get_contents("php://input"), $wsinput);
            $Db = new Database();
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_ModFam ?, ?, ?, ?");

            $stmt->bindParam(1, $wsinput['CitNumFamiliar']);
            $stmt->bindParam(2, $wsinput['CitStrContacto']);
            $stmt->bindParam(3, $wsinput['CitNumTelefono']);
            $stmt->bindParam(4, $wsinput['CitStrParentesco']);
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

            $stmt = $Db->Sentencia("EXEC cita.sp_elimFam ?, ?, ?");
            $stmt->bindParam(1, $_REQUEST{'CitNumFamiliar'});
            $stmt->bindParam(2, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(3, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        $Wh = new WhereDinamic();
        try {
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }
            if (isset($_REQUEST['CitStrRegMedico']))
                $Wh->addAtributos('CitStrRegMedico', ' = ', $_REQUEST['CitStrRegMedico']);

            $data = $Db->GetData("SELECT * FROM cita.Familiares " . $Wh->strWhere(), $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, " " . $p->getMessage(), null);
        }
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
}