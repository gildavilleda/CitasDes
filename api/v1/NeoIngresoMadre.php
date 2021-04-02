<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 03/11/2020
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

            $stmt = $Db->Sentencia("EXEC Neo.sp_AgIngresoMadre   ?, ?, ?, ?, ?, ?,?,?,?,?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?");

            $stmt->bindParam(1, $_REQUEST{'NumEdadMadre'});
            $stmt->bindParam(2, $_REQUEST{'StrG'});
            $stmt->bindParam(3, $_REQUEST{'StrP'});
            $stmt->bindParam(4, $_REQUEST{'StrAb'});
            $stmt->bindParam(5, $_REQUEST{'StrC'});
            $stmt->bindParam(6, $_REQUEST{'StrHv'});
            $stmt->bindParam(7, $_REQUEST{'StrHm'});
            $stmt->bindParam(8, $_REQUEST{'StrFur'});
            $stmt->bindParam(9, $_REQUEST{'StrFpp'});
            $stmt->bindParam(10, $_REQUEST{'StrGrupoRh'});
            $stmt->bindParam(11, $_REQUEST{'StrCoombs'});
            $stmt->bindParam(12, $_REQUEST{'StrPatologEmb'});
            $stmt->bindParam(13, $_REQUEST{'StrPatologUno'});
            $stmt->bindParam(14, $_REQUEST{'StrPatologDos'});
            $stmt->bindParam(15, $_REQUEST{'StrPatologTres'});
            $stmt->bindParam(16, $_REQUEST{'StrPatologCuatro'});
            $stmt->bindParam(17, $_REQUEST{'StrPatologEmbAnt'});
            $stmt->bindParam(18, $_REQUEST{'StrUltrasonObst'});
            $stmt->bindParam(19, $_REQUEST{'StrSerologPosit'});
            $stmt->bindParam(20, $_REQUEST{'StrNl'});
            $stmt->bindParam(21, $_REQUEST{'StrRciu'});
            $stmt->bindParam(22, $_REQUEST{'StrMalformacion'});
            $stmt->bindParam(23, $_REQUEST{'StrOtro'});
            $stmt->bindParam(24, $_REQUEST{'StrComentario'});
            $stmt->bindParam(25, $_REQUEST{'IdNumHospitaliz'});



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

            $stmt = $Db->Sentencia("Exec Neo.sp_AgIngresoMadre  ?,?,?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?");

            $stmt->bindParam(1, $_REQUEST{'NumEdadMadre'});
            $stmt->bindParam(2, $_REQUEST{'StrG'});
            $stmt->bindParam(3, $_REQUEST{'StrP'});
            $stmt->bindParam(4, $_REQUEST{'StrAb'});
            $stmt->bindParam(5, $_REQUEST{'StrC'});
            $stmt->bindParam(6, $_REQUEST{'StrHv'});
            $stmt->bindParam(7, $_REQUEST{'StrHm'});
            $stmt->bindParam(8, $_REQUEST{'StrFur'});
            $stmt->bindParam(9, $_REQUEST{'StrFpp'});
            $stmt->bindParam(10, $_REQUEST{'StrGrupoRh'});
            $stmt->bindParam(11, $_REQUEST{'StrCoombs'});
            $stmt->bindParam(12, $_REQUEST{'StrPatologEmb'});
            $stmt->bindParam(13, $_REQUEST{'StrPatologUno'});
            $stmt->bindParam(14, $_REQUEST{'StrPatologDos'});
            $stmt->bindParam(15, $_REQUEST{'StrPatologTres'});
            $stmt->bindParam(16, $_REQUEST{'StrPatologCuatro'});
            $stmt->bindParam(17, $_REQUEST{'StrPatologEmbAnt'});
            $stmt->bindParam(18, $_REQUEST{'StrUltrasonObst'});
            $stmt->bindParam(19, $_REQUEST{'StrSerologPosit'});
            $stmt->bindParam(20, $_REQUEST{'StrNl'});
            $stmt->bindParam(21, $_REQUEST{'StrRciu'});
            $stmt->bindParam(22, $_REQUEST{'StrMalformacion'});
            $stmt->bindParam(23, $_REQUEST{'StrOtro'});
            $stmt->bindParam(24, $_REQUEST{'StrComentario'});
            $stmt->bindParam(25, $_REQUEST{'IdNumIngreMadre'});



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
            $data = $Db->GetData("SELECT * FROM Neo.IngresoMadre where IdNumHospitaliz = $IdNumHospitaliz", $_SESSION['dbUser'], $_SESSION['dbPass']);


            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
            break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}






