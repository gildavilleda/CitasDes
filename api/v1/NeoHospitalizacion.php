<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 29/10/2020
 * Time: 14:35 PM
 */
require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
require_once '../../functions/WhereDinamic.php';
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

            $stmt = $Db->Sentencia("EXEC Neo.sp_AgHospitalizacion ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrSip'});
            $stmt->bindParam(2, $_REQUEST{'StrInstitucion'});
            $stmt->bindParam(3, $_REQUEST{'StrNombreRecienNac'});
            $stmt->bindParam(4, $_REQUEST{'StrTienePulsera'});
            $stmt->bindParam(5, $_REQUEST{'StrSexo'});
            $stmt->bindParam(6, $_REQUEST{'StrNumHistoriaClin'});
            $stmt->bindParam(7, $_REQUEST{'StrRegistroRn'});
            $stmt->bindParam(8, $_REQUEST{'DatFechaHoraNac'});
            $stmt->bindParam(9, $_REQUEST{'StrNomMadre'});
            $stmt->bindParam(10, $_REQUEST{'StrNumHistClinica'});
            $stmt->bindParam(11, $_REQUEST{'StrSeEncuentra'});
            $stmt->bindParam(12, $_REQUEST{'StrCondicionSalud'});
            $stmt->bindParam(13, $_REQUEST{'StrConocioHijo'});
            $stmt->bindParam(14, $_REQUEST{'StrNombrePadre'});
            $stmt->bindParam(15, $_REQUEST{'NumTelPadre'});
            $stmt->bindParam(16, $_REQUEST{'StrDireccPadre'});
            $stmt->bindParam(17, $_REQUEST{'StrCorreoElecPadre'});
            $stmt->bindParam(18, $_REQUEST{'CitNumIngresoEmer'});

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

            $stmt = $Db->Sentencia("EXEC Neo.Sp_ModHospitalizacion ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrSip'});
            $stmt->bindParam(2, $_REQUEST{'StrInstitucion'});
            $stmt->bindParam(3, $_REQUEST{'StrNombreRecienNac'});
            $stmt->bindParam(4, $_REQUEST{'StrTienePulsera'});
            $stmt->bindParam(5, $_REQUEST{'StrSexo'});
            $stmt->bindParam(6, $_REQUEST{'StrNumHistoriaClin'});
            $stmt->bindParam(7, $_REQUEST{'StrRegistroRn'});
            $stmt->bindParam(8, $_REQUEST{'DatFechaNac'});
            $stmt->bindParam(9, $_REQUEST{'DatFechaHora'});
            $stmt->bindParam(10, $_REQUEST{'StrNomMadre'});
            $stmt->bindParam(11, $_REQUEST{'StrNumHistClinica'});
            $stmt->bindParam(12, $_REQUEST{'StrSeEncuentra'});
            $stmt->bindParam(13, $_REQUEST{'StrCondicionSalud'});
            $stmt->bindParam(14, $_REQUEST{'StrConocioHijo'});
            $stmt->bindParam(15, $_REQUEST{'StrNombrePadre'});
            $stmt->bindParam(16, $_REQUEST{'NumTelPadre'});
            $stmt->bindParam(17, $_REQUEST{'StrDireccPadre'});
            $stmt->bindParam(18, $_REQUEST{'StrCorreoElecPadre'});
            $stmt->bindParam(19, $_REQUEST{'IdNumHospitaliz'});



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
            $Wh = new WhereDinamic();

            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            if (isset($_REQUEST['CitStrRegMedico']))
                $Wh->addAtributos('CitStrRegMedico', " = ", $_REQUEST['CitStrRegMedico']);
            if (isset($_REQUEST['Nombre']))
                $Wh->addAtributos('Nombre', " LIKE ", $_REQUEST['Nombre']);
            if (isset($_REQUEST['CitNumIngresoEmer']))
                $Wh->addAtributos('CitNumIngresoEmer', " LIKE ", "%" . $_REQUEST['CitNumIngresoEmer'] . "%");
            if (isset($_REQUEST['EncNumIdServEncam']))
                $Wh->addAtributos('EncNumIdServEncam', " LIKE ", $_REQUEST['EncNumIdServEncam']);
            if (isset($_REQUEST['EncNumIdEgreso']))
                $Wh->addAtributos('EncNumIdEgreso', " = ", $_REQUEST['EncNumIdEgreso']);
            if (isset($_REQUEST['Estado']))
                $Wh->addAtributos('Estado', " LIKE ", $_REQUEST['Estado']);
            if (isset($_REQUEST['CitStrNombre']))
                $Wh->addAtributos('CitStrNombre', " LIKE ", $_REQUEST['CitStrNombre']);
            if (isset($_REQUEST['FecNacimiento']))
                $Wh->addAtributos('FecNacimiento', " LIKE ", $_REQUEST['FecNacimiento']);
            if (isset($_REQUEST['CitBitGenero']))
                $Wh->addAtributos('CitBitGenero', " LIKE ", $_REQUEST['CitBitGenero']);

            $data = $Db->GetData("SELECT * FROM Neo.vw_mostPacNeo " . $Wh->strWhere(), $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
            break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}




