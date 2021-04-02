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

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_AgDatEnfermeria ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaServRef'});
            $stmt->bindParam(2, $_REQUEST{'HdiaTipoCirugia'});
            $stmt->bindParam(3, $_REQUEST{'HdiaHorIngreAreaVerde'});
            $stmt->bindParam(4, $_REQUEST{'HdiaHorIngreQuirofano'});
            $stmt->bindParam(5, $_REQUEST{'HdiaNumCirculante'});
            $stmt->bindParam(6, $_REQUEST{'HdiaNumInstrumentista'});
            $stmt->bindParam(7, $_REQUEST{'HdiaTrasladoPostOper'});
            $stmt->bindParam(8, $_REQUEST{'HdiaHorEgreAreaVerde'});
            $stmt->bindParam(9, $_REQUEST{'HoraEgresoQuirofano'});
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

    case 'PUT':
        //Procedimiento para modificar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Hdia.SpModDatEnfermeria ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumEnferm'});
            $stmt->bindParam(2, $_REQUEST{'HdiaServRef'});
            $stmt->bindParam(3, $_REQUEST{'HdiaTipoCirugia'});
            $stmt->bindParam(4, $_REQUEST{'HdiaHoraIngServicio'});
            $stmt->bindParam(5, $_REQUEST{'HdiaHoraIngSalOper'});
            $stmt->bindParam(6, $_REQUEST{'HdiaInstrumentista'});
            $stmt->bindParam(7, $_REQUEST{'HdiaCirculante'});
            $stmt->bindParam(8, $_REQUEST{'HdiaTrasladoPostOper'});
            $stmt->bindParam(9, $_REQUEST{'HoradengresoaServicio'});
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

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_ElimDatEnfermeria ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumEnferm'});

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
        if(isset($_REQUEST['HdiaNumProgQui'])){
            $HdiaNumProgQui = $_REQUEST['HdiaNumProgQui'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_mostraDatEnfermeria WHERE HdiaNumProgQuirg = $HdiaNumProgQui", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else{
            $data = $Db->GetData("SELECT * FROM Hdia.Enfermeria", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }



        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}

