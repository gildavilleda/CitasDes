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
            $stmt = $Db->Sentencia("EXEC  Neo.Sp_Agtratamiento  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?");

            $stmt->bindParam(1, $_REQUEST{'DatEdadDosis'});
            $stmt->bindParam(2, $_REQUEST{'StrSurfacta'});
            $stmt->bindParam(3, $_REQUEST{'StrIndomet'});
            $stmt->bindParam(4, $_REQUEST{'StrIndulbup'});
            $stmt->bindParam(5, $_REQUEST{'StrAminof'});
            $stmt->bindParam(6, $_REQUEST{'StrAminifDias'});
            $stmt->bindParam(7, $_REQUEST{'StrAlimentParen'});
            $stmt->bindParam(8, $_REQUEST{'StrAlimentPDia'});
            $stmt->bindParam(9, $_REQUEST{'StrCpapVentil'});
            $stmt->bindParam(10, $_REQUEST{'StrVentilado'});
            $stmt->bindParam(11, $_REQUEST{'StrDurDias'});
            $stmt->bindParam(12, $_REQUEST{'StrDurHoras'});
            $stmt->bindParam(13, $_REQUEST{'StrCpap'});
            $stmt->bindParam(14, $_REQUEST{'StrCpapDias'});
            $stmt->bindParam(15, $_REQUEST{'StrOxigeno'});
            $stmt->bindParam(16, $_REQUEST{'StrOxigenoDes'});
            $stmt->bindParam(17, $_REQUEST{'StrOxigenoMayor'});
            $stmt->bindParam(18, $_REQUEST{'StrTransfuciones'});
            $stmt->bindParam(19, $_REQUEST{'StrVolTotal'});
            $stmt->bindParam(20, $_REQUEST{'StrDuctus'});
            $stmt->bindParam(21, $_REQUEST{'StrEcn'});
            $stmt->bindParam(22, $_REQUEST{'StrRcp'});
            $stmt->bindParam(23, $_REQUEST{'StrHidrocef'});
            $stmt->bindParam(24, $_REQUEST{'StrOtra'});
            $stmt->bindParam(25, $_REQUEST{'NumPesoMinimoG'});
            $stmt->bindParam(26, $_REQUEST{'NumEdadRecupCm'});
            $stmt->bindParam(27, $_REQUEST{'NumPesoSema'});
            $stmt->bindParam(28, $_REQUEST{'NumPesoG'});
            $stmt->bindParam(29, $_REQUEST{'NumLongituCm'});
            $stmt->bindParam(30, $_REQUEST{'NumPesCraneoCm'});
            $stmt->bindParam(31, $_REQUEST{'IdNumHospitaliz'});


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

            $stmt = $Db->Sentencia("EXEC Neo.sp_ModTratamiento   ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?");

            $stmt->bindParam(1, $_REQUEST{'DatEdadDosis'});
            $stmt->bindParam(2, $_REQUEST{'StrSurfacta'});
            $stmt->bindParam(3, $_REQUEST{'StrIndomet'});
            $stmt->bindParam(4, $_REQUEST{'StrIndulbup'});
            $stmt->bindParam(5, $_REQUEST{'StrAminof'});
            $stmt->bindParam(6, $_REQUEST{'StrAminifDias'});
            $stmt->bindParam(7, $_REQUEST{'StrAlimentParen'});
            $stmt->bindParam(8, $_REQUEST{'StrAlimentPDia'});
            $stmt->bindParam(9, $_REQUEST{'StrCpapVentil'});
            $stmt->bindParam(10, $_REQUEST{'StrVentilado'});
            $stmt->bindParam(11, $_REQUEST{'StrDurDias'});
            $stmt->bindParam(12, $_REQUEST{'StrDurHoras'});
            $stmt->bindParam(13, $_REQUEST{'StrCpap'});
            $stmt->bindParam(14, $_REQUEST{'StrCpapDias'});
            $stmt->bindParam(15, $_REQUEST{'StrOxigeno'});
            $stmt->bindParam(16, $_REQUEST{'StrOxigenoDes'});
            $stmt->bindParam(17, $_REQUEST{'StrOxigenoMayor'});
            $stmt->bindParam(18, $_REQUEST{'StrTransfuciones'});
            $stmt->bindParam(19, $_REQUEST{'StrVolTotal'});
            $stmt->bindParam(20, $_REQUEST{'StrDuctus'});
            $stmt->bindParam(21, $_REQUEST{'StrEcn'});
            $stmt->bindParam(22, $_REQUEST{'StrRcp'});
            $stmt->bindParam(23, $_REQUEST{'StrHidrocef'});
            $stmt->bindParam(24, $_REQUEST{'StrOtra'});
            $stmt->bindParam(25, $_REQUEST{'NumPesoMinimoG'});
            $stmt->bindParam(26, $_REQUEST{'NumEdadRecupCm'});
            $stmt->bindParam(27, $_REQUEST{'NumPesoSema'});
            $stmt->bindParam(28, $_REQUEST{'NumPesoG'});
            $stmt->bindParam(29, $_REQUEST{'NumLongituCm'});
            $stmt->bindParam(30, $_REQUEST{'NumPesCraneoCm'});
            $stmt->bindParam(31, $_REQUEST{'IdNumHospitaliz'});


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
        if(isset($_REQUEST['IdNumHospitaliz'])){
            $IdNumHospitaliz = $_REQUEST['IdNumHospitaliz'];
            $data = $Db->GetData("SELECT * FROM Neo.Tratamiento where IdNumHospitaliz = $IdNumHospitaliz", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}


