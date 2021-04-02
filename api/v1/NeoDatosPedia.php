<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 05/11/2020
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

            $stmt = $Db->Sentencia("EXEC  Neo.Sp_AgDatosPedia ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'NumLibras'});
            $stmt->bindParam(2, $_REQUEST{'NumKgs'});
            $stmt->bindParam(3, $_REQUEST{'NumTalla'});
            $stmt->bindParam(4, $_REQUEST{'NumCc'});
            $stmt->bindParam(5, $_REQUEST{'NumCt'});
            $stmt->bindParam(6, $_REQUEST{'NumCabd'});
            $stmt->bindParam(7, $_REQUEST{'NumPb'});
            $stmt->bindParam(8, $_REQUEST{'NumFc'});
            $stmt->bindParam(9, $_REQUEST{'NumFr'});
            $stmt->bindParam(10, $_REQUEST{'NumSat'});
            $stmt->bindParam(11, $_REQUEST{'NumSilverman'});
            $stmt->bindParam(12, $_REQUEST{'StrPielMucosa'});
            $stmt->bindParam(13, $_REQUEST{'StrCabelloCuello'});
            $stmt->bindParam(14, $_REQUEST{'StrOjos'});
            $stmt->bindParam(15, $_REQUEST{'StrOidos'});
            $stmt->bindParam(16, $_REQUEST{'StrNarizBoca'});
            $stmt->bindParam(17, $_REQUEST{'StrCardivascular'});
            $stmt->bindParam(18, $_REQUEST{'StrToraxPulmones'});
            $stmt->bindParam(19, $_REQUEST{'StrAbdomen'});
            $stmt->bindParam(20, $_REQUEST{'StrGenitoAnal'});
            $stmt->bindParam(21, $_REQUEST{'StrNeurologico'});
            $stmt->bindParam(22, $_REQUEST{'StrMuscEsqueleti'});
            $stmt->bindParam(23, $_REQUEST{'StrEstadoGeneral'});
            $stmt->bindParam(24, $_REQUEST{'StrComentario'});
            $stmt->bindParam(25, $_REQUEST{'StrProblema'});
            $stmt->bindParam(26, $_REQUEST{'StrNombreMedico'});
            $stmt->bindParam(27, $_REQUEST{'IdNumHospitaliz'});





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

            $stmt = $Db->Sentencia("EXEC  [Neo].[Sp_ModDatosPedia] ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?, ?, ?, ?, ?,?");

            $stmt->bindParam(1, $_REQUEST{'NumLibras'});
            $stmt->bindParam(2, $_REQUEST{'NumKgs'});
            $stmt->bindParam(3, $_REQUEST{'NumTalla'});
            $stmt->bindParam(4, $_REQUEST{'NumCc'});
            $stmt->bindParam(5, $_REQUEST{'NumCt'});
            $stmt->bindParam(6, $_REQUEST{'NumCabd'});
            $stmt->bindParam(7, $_REQUEST{'NumPb'});
            $stmt->bindParam(8, $_REQUEST{'NumFc'});
            $stmt->bindParam(9, $_REQUEST{'NumFr'});
            $stmt->bindParam(10, $_REQUEST{'NumSat'});
            $stmt->bindParam(11, $_REQUEST{'NumSilverman'});
            $stmt->bindParam(12, $_REQUEST{'StrPielMucosa'});
            $stmt->bindParam(13, $_REQUEST{'StrCabelloCuello'});
            $stmt->bindParam(14, $_REQUEST{'StrOjos'});
            $stmt->bindParam(15, $_REQUEST{'StrOidos'});
            $stmt->bindParam(16, $_REQUEST{'StrNarizBoca'});
            $stmt->bindParam(17, $_REQUEST{'StrCardiovacular'});
            $stmt->bindParam(18, $_REQUEST{'StrToraxPulmones'});
            $stmt->bindParam(19, $_REQUEST{'StrAbdomen'});
            $stmt->bindParam(20, $_REQUEST{'StrGenitoAnal'});
            $stmt->bindParam(21, $_REQUEST{'StrNeurologico'});
            $stmt->bindParam(22, $_REQUEST{'StrMuscEsqueleti'});
            $stmt->bindParam(23, $_REQUEST{'StrEstadoGeneral'});
            $stmt->bindParam(24, $_REQUEST{'StrComentario'});
            $stmt->bindParam(25, $_REQUEST{'StrProblema'});
            $stmt->bindParam(26, $_REQUEST{'StrNombreMedico'});
            $stmt->bindParam(27, $_REQUEST{'IdNumPediaEvo'});




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

