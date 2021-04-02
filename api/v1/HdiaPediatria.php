<?php
/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 30/10/2019
 * Time: 14:35 PM
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

        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_Agpediatria ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaPedriatra'});
            $stmt->bindParam(2, $_REQUEST{'HdiaNumRecNacido'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrEdadCapurro'});
            $stmt->bindParam(4, $_REQUEST{'HdiaBitSexo'});
            $stmt->bindParam(5, $_REQUEST{'HdiaStrPeso'});
            $stmt->bindParam(6, $_REQUEST{'HdiaStrTalla'});
            $stmt->bindParam(7, $_REQUEST{'HdiaDatHoraNacimiento'});
            $stmt->bindParam(8, $_REQUEST{'HdiaStrCircunCefalica'});
            $stmt->bindParam(9, $_REQUEST{'HdiaStrApGar89'});
            $stmt->bindParam(10, $_REQUEST{'HdiaStrObservaciones'});
            $stmt->bindParam(11, $_REQUEST{'HdiaBitReanimacion'});
            $stmt->bindParam(12, $_REQUEST{'HdiaBitIngresoRN'});
            $stmt->bindParam(13, $_REQUEST{'HdiaStrMuertePrem'});
            $stmt->bindParam(14, $_REQUEST{'HdiaNumProgQuirg'});


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

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_ModPedriatria ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumPedia'});
            $stmt->bindParam(2, $_REQUEST{'HdiaPedriatra'});
            $stmt->bindParam(3, $_REQUEST{'HdiaNumRecNacido'});
            $stmt->bindParam(4, $_REQUEST{'HdiaStrEdadCapurro'});
            $stmt->bindParam(5, $_REQUEST{'HdiaBitSexo'});
            $stmt->bindParam(6, $_REQUEST{'HdiaStrPeso'});
            $stmt->bindParam(7, $_REQUEST{'HdiaStrTalla'});
            $stmt->bindParam(8, $_REQUEST{'HdiaDatHoraNacimiento'});
            $stmt->bindParam(9, $_REQUEST{'HdiaStrCircunCefalica'});
            $stmt->bindParam(10, $_REQUEST{'HdiaStrApGar89'});
            $stmt->bindParam(11, $_REQUEST{'HdiaStrObservaciones'});
            $stmt->bindParam(12, $_REQUEST{'HdiaBitReanimacion'});
            $stmt->bindParam(13, $_REQUEST{'HdiaBitIngresoRN'});
            $stmt->bindParam(14, $_REQUEST{'HdiaStrMuertePrem'});
            $stmt->bindParam(15, $_REQUEST{'HdiaNumProgQuirg'});

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

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_ElimPediatria ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumPedia'});

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
        $CitNumEspecialidad = $_REQUEST['CitNumEspecialidad'];
        $data = $Db->GetData("SELECT * FROM Hdia.Pediatria", $_SESSION['dbUser'], $_SESSION['dbPass']);


        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}

