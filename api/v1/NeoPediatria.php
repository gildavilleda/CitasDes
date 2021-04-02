<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 3/11/2020
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

            $stmt = $Db->Sentencia("EXEC  Neo.Sp_AgPediatria   ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,? ");

            $stmt->bindParam(1, $_REQUEST{'StrEdadGes'});
            $stmt->bindParam(2, $_REQUEST{'StrGesBc'});
            $stmt->bindParam(3, $_REQUEST{'StrAdecuacion'});
            $stmt->bindParam(4, $_REQUEST{'StrGesUno'});
            $stmt->bindParam(5, $_REQUEST{'StrCinco'});
            $stmt->bindParam(6, $_REQUEST{'StrDiez'});
            $stmt->bindParam(7, $_REQUEST{'NumAlcanzoSiete'});
            $stmt->bindParam(8, $_REQUEST{'StrReanimacion'});
            $stmt->bindParam(9, $_REQUEST{'StrAspira'});
            $stmt->bindParam(10, $_REQUEST{'StrAspiraCc'});
            $stmt->bindParam(11, $_REQUEST{'StrTipo'});
            $stmt->bindParam(12, $_REQUEST{'StrLavadoGas'});
            $stmt->bindParam(13, $_REQUEST{'StrLavadoCc'});
            $stmt->bindParam(14, $_REQUEST{'StrLavadoTipo'});
            $stmt->bindParam(15, $_REQUEST{'StrPlacenta'});
            $stmt->bindParam(16, $_REQUEST{'StrPeso'});
            $stmt->bindParam(17, $_REQUEST{'StrTamano'});
            $stmt->bindParam(18, $_REQUEST{'StrLongitu'});
            $stmt->bindParam(19, $_REQUEST{'StrNoArterias'});
            $stmt->bindParam(20, $_REQUEST{'StrCordon'});
            $stmt->bindParam(21, $_REQUEST{'StrNacimiento'});
            $stmt->bindParam(22, $_REQUEST{'StrNiAnl'});
            $stmt->bindParam(23, $_REQUEST{'StrLugar'});
            $stmt->bindParam(24, $_REQUEST{'IdNumHospitaliz'});




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

            $stmt = $Db->Sentencia("EXEC  [Neo].[Sp_ModPediatria] ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?");

            $stmt->bindParam(1, $_REQUEST{'StrEdadGes'});
            $stmt->bindParam(2, $_REQUEST{'StrGesBc'});
            $stmt->bindParam(3, $_REQUEST{'StrAdecuacion'});
            $stmt->bindParam(4, $_REQUEST{'StrGesUno'});
            $stmt->bindParam(5, $_REQUEST{'StrCinco'});
            $stmt->bindParam(6, $_REQUEST{'StrDiez'});
            $stmt->bindParam(7, $_REQUEST{'NumAlcanzoSiete'});
            $stmt->bindParam(8, $_REQUEST{'StrReanimacion'});
            $stmt->bindParam(9, $_REQUEST{'StrAspira'});
            $stmt->bindParam(10, $_REQUEST{'StrAspiraCc'});
            $stmt->bindParam(11, $_REQUEST{'StrTipo'});
            $stmt->bindParam(12, $_REQUEST{'StrLavadoGas'});
            $stmt->bindParam(13, $_REQUEST{'StrLavadoCc'});
            $stmt->bindParam(14, $_REQUEST{'StrLavadoTipo'});
            $stmt->bindParam(15, $_REQUEST{'StrPlacenta'});
            $stmt->bindParam(16, $_REQUEST{'StrPeso'});
            $stmt->bindParam(17, $_REQUEST{'StrTamano'});
            $stmt->bindParam(18, $_REQUEST{'StrLongitu'});
            $stmt->bindParam(19, $_REQUEST{'StrNoArterias'});
            $stmt->bindParam(20, $_REQUEST{'StrCordon'});
            $stmt->bindParam(21, $_REQUEST{'StrNacimiento'});
            $stmt->bindParam(22, $_REQUEST{'StrNiAnl'});
            $stmt->bindParam(23, $_REQUEST{'StrLugar'});
            $stmt->bindParam(24, $_REQUEST{'IdNumPediatria'});



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


    /*
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
    */
    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}




