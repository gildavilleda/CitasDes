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

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_AgCirujano ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaStrDiagIngre'});
            $stmt->bindParam(2, $_REQUEST{'HdiaStrDiagnostico'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrProcRealizado'});
            $stmt->bindParam(4, $_REQUEST{'HdiaStrCirujano'});
            $stmt->bindParam(5, $_REQUEST{'HdiaStrAyudanteA'});
            $stmt->bindParam(6, $_REQUEST{'HdiaStrAyudanteB'});
            $stmt->bindParam(7, $_REQUEST{'HdiaStrComplicaciones'});
            $stmt->bindParam(8, $_REQUEST{'HdiaNumProgQuirg'});


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

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_ModCirujano ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumCirujano'});
            $stmt->bindParam(2, $_REQUEST{'HdiaStrDiagPreOper'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrDiagPostOper'});
            $stmt->bindParam(4, $_REQUEST{'HdiaStrProcedimient'});
            $stmt->bindParam(5, $_REQUEST{'HdiaStrQuirofano'});
            $stmt->bindParam(6, $_REQUEST{'HdiaSttCirujano'});
            $stmt->bindParam(7, $_REQUEST{'HdiaStrAyudante'});
            $stmt->bindParam(8, $_REQUEST{'HdiaStrAnestesiolog'});
            $stmt->bindParam(9, $_REQUEST{'HdiaStrComplicaciones'});
            $stmt->bindParam(10, $_REQUEST{'HdiaNumProgQuirg'});

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

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_ElimCirujano ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumCirujano'});

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

        $HdiaNumProgQui = $_REQUEST['HdiaNumProgQui'];
        $data = $Db->GetData("SELECT * FROM Hdia.vw_MostarDatosCirujano WHERE HdiaNumProgQuirg = $HdiaNumProgQui", $_SESSION['dbUser'], $_SESSION['dbPass']);


        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}

