<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 29/10/2020
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

            $stmt = $Db->Sentencia("EXEC Neo.Sp_AgTransporte ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrMismoHos'});
            $stmt->bindParam(2, $_REQUEST{'StrMotivo'});
            $stmt->bindParam(3, $_REQUEST{'StrTipoTransp'});
            $stmt->bindParam(4, $_REQUEST{'StrDistancia'});
            $stmt->bindParam(5, $_REQUEST{'DatDuracion'});
            $stmt->bindParam(6, $_REQUEST{'StrIncubadora'});
            $stmt->bindParam(7, $_REQUEST{'StrVenoCli'});
            $stmt->bindParam(8, $_REQUEST{'StrMonitoreo'});
            $stmt->bindParam(9, $_REQUEST{'StrOxigeno'});
            $stmt->bindParam(10, $_REQUEST{'StrCpap'});
            $stmt->bindParam(11, $_REQUEST{'StrIntubado'});
            $stmt->bindParam(12, $_REQUEST{'StrDrogas'});
            $stmt->bindParam(13, $_REQUEST{'StrVol'});
            $stmt->bindParam(14, $_REQUEST{'StrTipo'});
            $stmt->bindParam(15, $_REQUEST{'StrComplicaciones'});
            $stmt->bindParam(16, $_REQUEST{'IdNumHospitaliz'});


            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }

        break;

    //Procedimiento para modificar
    case 'PUT':

        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Neo.Sp_ModTransporte ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrMismoHos'});
            $stmt->bindParam(2, $_REQUEST{'StrMotivo'});
            $stmt->bindParam(3, $_REQUEST{'StrTipoTransp'});
            $stmt->bindParam(4, $_REQUEST{'StrDistancia'});
            $stmt->bindParam(5, $_REQUEST{'DatDuracion'});
            $stmt->bindParam(6, $_REQUEST{'StrIncubadora'});
            $stmt->bindParam(7, $_REQUEST{'StrVenoCli'});
            $stmt->bindParam(8, $_REQUEST{'StrMonitoreo'});
            $stmt->bindParam(9, $_REQUEST{'StrOxigeno'});
            $stmt->bindParam(10, $_REQUEST{'StrCpap'});
            $stmt->bindParam(11, $_REQUEST{'StrIntubado'});
            $stmt->bindParam(12, $_REQUEST{'StrDrogas'});
            $stmt->bindParam(13, $_REQUEST{'StrVol'});
            $stmt->bindParam(14, $_REQUEST{'StrTipo'});
            $stmt->bindParam(15, $_REQUEST{'StrComplicaciones'});
            $stmt->bindParam(15, $_REQUEST{'[IdNumHospitaliz]'});



            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }

        break;



    /*Procedimiento para Eliminar
case 'DELETE':

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

 */

        case 'GET':

    //Procedimiento para Mostrar

            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }
            $IdNumHospitaliz = $_REQUEST['IdNumHospitaliz'];
            $data = $Db->GetData("SELECT * FROM Neo.Transporte where IdNumHospitaliz = $IdNumHospitaliz", $_SESSION['dbUser'], $_SESSION['dbPass']);


            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
            break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}





