<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 09/11/2020
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

            $stmt = $Db->Sentencia("EXEC  [Neo].[sp_AgGinecologia]  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrInicio'});
            $stmt->bindParam(2, $_REQUEST{'DatHoras'});
            $stmt->bindParam(3, $_REQUEST{'StrPresentacion'});
            $stmt->bindParam(4, $_REQUEST{'StrAmniorrexis'});
            $stmt->bindParam(5, $_REQUEST{'StrLiquidoAmniotico'});
            $stmt->bindParam(6, $_REQUEST{'StrTipoParto'});
            $stmt->bindParam(7, $_REQUEST{'StrIndicaciones'});
            $stmt->bindParam(8, $_REQUEST{'StrPatParto'});
            $stmt->bindParam(9, $_REQUEST{'StrSufriFetal'});
            $stmt->bindParam(10, $_REQUEST{'StrAnestecia'});
            $stmt->bindParam(11, $_REQUEST{'StrMedicaUsados'});
            $stmt->bindParam(12, $_REQUEST{'IdNumHospitaliz'});


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


            $stmt = $Db->Sentencia("Exec Neo.Sp_ModGinecologia ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrInicio'});
            $stmt->bindParam(2, $_REQUEST{'DatHoras'});
            $stmt->bindParam(3, $_REQUEST{'StrPresentacion'});
            $stmt->bindParam(4, $_REQUEST{'StrAmniorrexis'});
            $stmt->bindParam(5, $_REQUEST{'StrLiquidoAmniotico'});
            $stmt->bindParam(6, $_REQUEST{'StrTipoParto'});
            $stmt->bindParam(7, $_REQUEST{'StrIndicaciones'});
            $stmt->bindParam(8, $_REQUEST{'StrPatParto'});
            $stmt->bindParam(9, $_REQUEST{'StrSufriFetal'});
            $stmt->bindParam(10, $_REQUEST{'StrAnestecia'});
            $stmt->bindParam(11, $_REQUEST{'StrMedicaUsados'});
            $stmt->bindParam(12,$_REQUEST{'IdNumGinecologia'});



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
            $data = $Db->GetData("SELECT * FROM Neo.Ginecologia where IdNumHospitaliz = $IdNumHospitaliz", $_SESSION['dbUser'], $_SESSION['dbPass']);


            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
            break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}






