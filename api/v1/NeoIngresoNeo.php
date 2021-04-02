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


            $stmt = $Db->Sentencia("EXEC Neo.sp_AgIngresoNeonatal  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrLugar'});
            $stmt->bindParam(2, $_REQUEST{'DatFecha'});
            $stmt->bindParam(3, $_REQUEST{'NumEdadDias'});
            $stmt->bindParam(4, $_REQUEST{'DatEdadHoras'});
            $stmt->bindParam(5, $_REQUEST{'StrTemperatura'});
            $stmt->bindParam(6, $_REQUEST{'StrTemUno'});
            $stmt->bindParam(7, $_REQUEST{'StrSa'});
            $stmt->bindParam(8, $_REQUEST{'StrFi'});
            $stmt->bindParam(9, $_REQUEST{'StrCianicis'});
            $stmt->bindParam(10, $_REQUEST{'StrSdr'});
            $stmt->bindParam(11, $_REQUEST{'StrPalidez'});
            $stmt->bindParam(12, $_REQUEST{'StrDiuresis'});
            $stmt->bindParam(13, $_REQUEST{'StrVigilia'});
            $stmt->bindParam(14, $_REQUEST{'StrConvulciones'});
            $stmt->bindParam(15, $_REQUEST{'StrEnfermeria'});
            $stmt->bindParam(16, $_REQUEST{'StrMedico'});
            $stmt->bindParam(17, $_REQUEST{'NumPesoGramos'});
            $stmt->bindParam(18, $_REQUEST{'NumLongitudCm'});
            $stmt->bindParam(19, $_REQUEST{'NumPerCraneoCm'});
            $stmt->bindParam(20, $_REQUEST{'StrNotasIngreso'});
            $stmt->bindParam(21, $_REQUEST{'StrInforInici'});
            $stmt->bindParam(22, $_REQUEST{'StrRespoEgre'});
            $stmt->bindParam(23, $_REQUEST{'IdNumHospitaliz'});
            $stmt->bindParam(24, $_REQUEST{'NumEgSem'});
            $stmt->bindParam(25, $_REQUEST{'NumEgDia'});

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

            $stmt = $Db->Sentencia("exec Neo.Sp_ModIngresoNeonatal ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ");

            $stmt->bindParam(1, $_REQUEST{'StrEnLugar'});
            $stmt->bindParam(2, $_REQUEST{'DatFecha'});
            $stmt->bindParam(3, $_REQUEST{'NumEdadDias'});
            $stmt->bindParam(4, $_REQUEST{'DatEdadHoras'});
            $stmt->bindParam(5, $_REQUEST{'StrTemperatura'});
            $stmt->bindParam(6, $_REQUEST{'StrTemUno'});
            $stmt->bindParam(7, $_REQUEST{'StrSa'});
            $stmt->bindParam(8, $_REQUEST{'StrFi'});
            $stmt->bindParam(9, $_REQUEST{'StrCianicis'});
            $stmt->bindParam(10, $_REQUEST{'StrSdr'});
            $stmt->bindParam(11, $_REQUEST{'StrPalidez'});
            $stmt->bindParam(12, $_REQUEST{'StrDiuresis'});
            $stmt->bindParam(13, $_REQUEST{'StrVigilia'});
            $stmt->bindParam(14, $_REQUEST{'StrConvulciones'});
            $stmt->bindParam(15, $_REQUEST{'StrEnfermeria'});
            $stmt->bindParam(16, $_REQUEST{'StrMedico'});
            $stmt->bindParam(17, $_REQUEST{'NumPesoGramos'});
            $stmt->bindParam(18, $_REQUEST{'NumLongitudCm'});
            $stmt->bindParam(19, $_REQUEST{'NumPerCraneoCm'});
            $stmt->bindParam(20, $_REQUEST{'StrNotasIngreso'});
            $stmt->bindParam(21, $_REQUEST{'StrInforInici'});
            $stmt->bindParam(22, $_REQUEST{'StrRespoEgreso'});
            $stmt->bindParam(23, $_REQUEST{'IdNumIngreNeonat'});


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
            $data = $Db->GetData("SELECT * FROM Neo.IngresoNeonatal where IdNumHospitaliz = $IdNumHospitaliz", $_SESSION['dbUser'], $_SESSION['dbPass']);


            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
            break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}






