<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 30/10/2020
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

            $stmt = $Db->Sentencia("EXEC Neo.sp_AgPatologia ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrPatolog'});
            $stmt->bindParam(2, $_REQUEST{'StrAsfixia'});
            $stmt->bindParam(3, $_REQUEST{'StrMembrana'});
            $stmt->bindParam(4, $_REQUEST{'StrSdr'});
            $stmt->bindParam(5, $_REQUEST{'StrHiperPulmo'});
            $stmt->bindParam(6, $_REQUEST{'StrDuctus'});
            $stmt->bindParam(7, $_REQUEST{'StrApneas'});
            $stmt->bindParam(8, $_REQUEST{'StrNeumo'});
            $stmt->bindParam(9, $_REQUEST{'StrDispBron'});

            $stmt->bindParam(10, $_REQUEST{'StrConfirmada'});
            $stmt->bindParam(11, $_REQUEST{'StrPerfIntest'});
            $stmt->bindParam(12, $_REQUEST{'StrSifilis'});
            $stmt->bindParam(13, $_REQUEST{'StrHivPerinatal'});
            
            $stmt->bindParam(14, $_REQUEST{'StrSepsisUno'});
            $stmt->bindParam(15, $_REQUEST{'DatFechaUno'});
            $stmt->bindParam(16, $_REQUEST{'StrSepsisDos'});
            $stmt->bindParam(17, $_REQUEST{'DatFechaDos'});
            $stmt->bindParam(18, $_REQUEST{'StrSepsisTres'});
            $stmt->bindParam(19, $_REQUEST{'DatFechaTres'});
            $stmt->bindParam(20, $_REQUEST{'StrSepsisCuatro'});
            $stmt->bindParam(21, $_REQUEST{'StrHemoPosUno'});
            $stmt->bindParam(22, $_REQUEST{'StrHemoPosDos'});
            $stmt->bindParam(23, $_REQUEST{'StrHemoPosTres'});
            $stmt->bindParam(24, $_REQUEST{'StrHemoPosCuat'});
            $stmt->bindParam(25, $_REQUEST{'StrCliniUno'});
            $stmt->bindParam(26, $_REQUEST{'StrCliniDos'});
            $stmt->bindParam(27, $_REQUEST{'StrCliniTres'});
            $stmt->bindParam(28, $_REQUEST{'StrCliniCuat'});
            $stmt->bindParam(29, $_REQUEST{'StrOftalnoscopia'});
            $stmt->bindParam(30, $_REQUEST{'StrRequiCirugia'});
            $stmt->bindParam(31, $_REQUEST{'StrEdadSem'});
            $stmt->bindParam(32, $_REQUEST{'StrEdadDias'});
            $stmt->bindParam(33, $_REQUEST{'StrGradoMax'});
            $stmt->bindParam(34, $_REQUEST{'StrEcografia'});
            $stmt->bindParam(35, $_REQUEST{'StrLeucomalacia'});
            $stmt->bindParam(36, $_REQUEST{'NumGradoM'});
            $stmt->bindParam(37, $_REQUEST{'StrHemorragia'});
            $stmt->bindParam(38, $_REQUEST{'StrAsictico'});
            $stmt->bindParam(39, $_REQUEST{'StrCieDiez'});
            $stmt->bindParam(40, $_REQUEST{'IdNumHospitaliz'});
            $stmt->bindParam(41, $_REQUEST{'DatFechaCuatro'});

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

            $stmt = $Db->Sentencia("EXEC Neo.Sp_ModPatologia ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrPatolog'});
            $stmt->bindParam(2, $_REQUEST{'StrAsfixia'});
            $stmt->bindParam(3, $_REQUEST{'StrMembrana'});
            $stmt->bindParam(4, $_REQUEST{'StrSdr'});
            $stmt->bindParam(5, $_REQUEST{'StrHiperPulmo'});
            $stmt->bindParam(6, $_REQUEST{'StrDuctus'});
            $stmt->bindParam(7, $_REQUEST{'StrApneas'});
            $stmt->bindParam(8, $_REQUEST{'StrNeumo'});
            $stmt->bindParam(9, $_REQUEST{'StrDispBron'});

            $stmt->bindParam(10, $_REQUEST{'StrConfirmada'});
            $stmt->bindParam(11, $_REQUEST{'StrPerfIntest'});
            $stmt->bindParam(12, $_REQUEST{'StrSifilis'});
            $stmt->bindParam(13, $_REQUEST{'StrHivPerinatal'});

            $stmt->bindParam(14, $_REQUEST{'StrSepsisUno'});
            $stmt->bindParam(15, $_REQUEST{'DatFechaUno'});
            $stmt->bindParam(16, $_REQUEST{'StrSepsisDos'});
            $stmt->bindParam(17, $_REQUEST{'DatFechaDos'});
            $stmt->bindParam(18, $_REQUEST{'StrSepsisTres'});
            $stmt->bindParam(19, $_REQUEST{'DatFechaTres'});
            $stmt->bindParam(20, $_REQUEST{'StrSepsisCuatro'});
            $stmt->bindParam(21, $_REQUEST{'DatFechaCuatro'});
            $stmt->bindParam(22, $_REQUEST{'StrHemoPosUno'});
            $stmt->bindParam(23, $_REQUEST{'StrHemoPosDos'});
            $stmt->bindParam(24, $_REQUEST{'StrHemoPosTres'});
            $stmt->bindParam(25, $_REQUEST{'StrHemoPosCuat'});
            $stmt->bindParam(26, $_REQUEST{'StrCliniUno'});
            $stmt->bindParam(27, $_REQUEST{'StrCliniDos'});
            $stmt->bindParam(28, $_REQUEST{'StrCliniTres'});
            $stmt->bindParam(29, $_REQUEST{'StrCliniCuat'});

            $stmt->bindParam(30, $_REQUEST{'StrOftalnoscopia'});
            $stmt->bindParam(31, $_REQUEST{'StrRequiCirugia'});
            $stmt->bindParam(32, $_REQUEST{'StrEdadSem'});
            $stmt->bindParam(33, $_REQUEST{'StrEdadDias'});
            $stmt->bindParam(34, $_REQUEST{'StrGradoMax'});
            
            $stmt->bindParam(35, $_REQUEST{'StrEcografia'});
            $stmt->bindParam(36, $_REQUEST{'StrLeucomalacia'});
            $stmt->bindParam(37, $_REQUEST{'NumGradoM'});
            $stmt->bindParam(38, $_REQUEST{'StrHemorragia'});
            $stmt->bindParam(39, $_REQUEST{'StrAsictico'});
            $stmt->bindParam(40, $_REQUEST{'StrCieDiez'});
            $stmt->bindParam(41, $_REQUEST{'IdNumHospitaliz'});
           



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
            $data = $Db->GetData("SELECT * FROM Neo.Patologia where IdNumHospitaliz = $IdNumHospitaliz", $_SESSION['dbUser'], $_SESSION['dbPass']);

            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
            break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}


