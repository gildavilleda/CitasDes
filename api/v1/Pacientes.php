<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 1/03/2019
 * Time: 09:51 AM
 */
require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
require_once '../../functions/WhereDinamic.php';
//error_reporting(0);
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
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_AgPciente ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?");

            $stmt->bindParam(1, $_REQUEST['CitNumRegMedico']);
            $stmt->bindParam(2, $_REQUEST['CitStrNombre']);
            $stmt->bindParam(3, $_REQUEST['CitStrNombre2']);
            $stmt->bindParam(4, $_REQUEST['CitStrApellido']);
            $stmt->bindParam(5, $_REQUEST['CitStrApellido2']);
            $stmt->bindParam(6, $_REQUEST['CitStrApellidoCasada']);
            $stmt->bindParam(7, $_REQUEST['CitBitGenero']);
            $stmt->bindParam(8, $_REQUEST['CitDatNacimiento']);
            $stmt->bindParam(9, $_REQUEST['CitStrDireccion']);
            $stmt->bindParam(10, $_REQUEST['CitNumTelefono']);
            $stmt->bindParam(11, $_REQUEST['CitStrCorreoElec']);
            $stmt->bindParam(12, $_REQUEST['CitNumCUI']);
            $stmt->bindParam(13, $_REQUEST['CitStrReferido']);
            $stmt->bindParam(14, $_REQUEST['CitStrLugRef']);
            $stmt->bindParam(15, $_REQUEST['CitStrObservacion']);
            $stmt->bindParam(16, $_REQUEST['CitStrEtnia']);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];

            $data['strMensaje'] = str_replace("  ", "", $data['strMensaje']);
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, 0 . "Mensaje " . $p->getMessage(), null);
        }

        break;
    case 'DELETE':
//Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_ElimPaciente ?");

            $stmt->bindParam(1, $_REQUEST['CitNumRegMedico']);

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, "PDO " . $p->getMessage(), null);
        }
        break;

    case 'GET':
//Procedimiento para Mostrar

        $Db = new Database();
        $Wh = new WhereDinamic();

        if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        /*
        foreach ($_GET as $key => $value) {
            $Wh->addAtributos($key, " = ", $value);
        }*/

        if (isset($_REQUEST['CitStrRegMedico']))
            $Wh->addAtributos('CitStrRegMedico', " = ", $_REQUEST['CitStrRegMedico']);
        if (isset($_REQUEST['CitStrNombre']))
            $Wh->addAtributos('CitStrNombre', " LIKE ", $_REQUEST['CitStrNombre']);
        if (isset($_REQUEST['CitStrNombCompleto']))
            $Wh->addAtributos('CitStrNombCompleto', " LIKE ", "%" . $_REQUEST['CitStrNombCompleto'] . "%");
        if (isset($_REQUEST['CitBitGenero']))
            $Wh->addAtributos('CitBitGenero', " LIKE ", $_REQUEST['CitBitGenero']);
        if (isset($_REQUEST['FecNacimiento']))
            $Wh->addAtributos('FecNacimiento', " = ", $_REQUEST['FecNacimiento']);
        if (isset($_REQUEST['CitStrDireccion']))
            $Wh->addAtributos('CitStrDireccion', " LIKE ", $_REQUEST['CitStrDireccion']);
        if (isset($_REQUEST['CitNumTelefono']))
            $Wh->addAtributos('CitNumTelefono', " LIKE ", $_REQUEST['CitNumTelefono']);
        if (isset($_REQUEST['CitStrCorreoElec']))
            $Wh->addAtributos('CitStrCorreoElec', " LIKE ", $_REQUEST['CitStrCorreoElec']);
        if (isset($_REQUEST['CitNumCUI']))
            $Wh->addAtributos('CitNumCUI', " LIKE ", $_REQUEST['CitNumCUI']);
        if (isset($_REQUEST['CitStrReferido']))
            $Wh->addAtributos('CitStrReferido', " = ", $_REQUEST['CitStrReferido']);
        if (isset($_REQUEST['CitStrLugRef']))
            $Wh->addAtributos('CitStrLugRef', " LIKE ", $_REQUEST['CitStrLugRef']);
        if (isset($_REQUEST['CitStrObservacion']))
            $Wh->addAtributos('CitStrObservacion', " LIKE ", $_REQUEST['CitStrObservacion']);

        $data = $Db->GetData("SELECT * FROM cita.vw_Pacientes " . $Wh->strWhere(), $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta y ', $data);
        break;

    case 'PUT':
// Procedimiento para modificar
        try {
            $_PUT = array();
            parse_str(file_get_contents("php://input"), $_PUT);

            $Db = new Database();
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_UpPciente ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?");

            $stmt->bindParam(1, $_PUT['CitNumRegMedico']);
            $stmt->bindParam(2, $_PUT['CitStrNombre']);
            $stmt->bindParam(3, $_PUT['CitStrNombre2']);
            $stmt->bindParam(4, $_PUT['CitStrApellido']);
            $stmt->bindParam(5, $_PUT['CitStrApellido2']);
            $stmt->bindParam(6, $_PUT['CitStrApellidoCasada']);
            $stmt->bindParam(7, $_PUT['CitBitGenero']);
            $stmt->bindParam(8, $_PUT['CitDatNacimiento']);
            $stmt->bindParam(9, $_PUT['CitStrDireccion']);
            $stmt->bindParam(10, $_PUT['CitNumTelefono']);
            $stmt->bindParam(11, $_PUT['CitStrCorreoElec']);
            $stmt->bindParam(12, $_PUT['CitNumCUI']);
            $stmt->bindParam(13, $_PUT['CitStrReferido']);
            $stmt->bindParam(14, $_PUT['CitStrLugRef']);
            $stmt->bindParam(15, $_PUT['CitStrObservacion']);
            $stmt->bindParam(16, $_PUT['CitStrEtnia']);

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            if (isset($_REQUEST['CitStrNomFamiliar'])) {
                $NomFamiliar = $_REQUEST['CitStrNomFamiliar'];
                $TelFamiliar = $_REQUEST['CitNumTelFamiliar'];
                $RelFamiliar = $_REQUEST['CitStrRelFamiliar'];
                $IdFamiliar = $_REQUEST['CitStrId'];

            } else {
                $NomFamiliar = array();
            }


            for ($i = 0; $i < count($NomFamiliar); $i++) {
                if ($NomFamiliar[$i] != "") {
                    $stmt_fam = $Db->Sentencia("EXEC cita.sp_AgoModFam ?, ?, ?, ?, ?");
                    $stmt_fam->bindParam(1, $IdFamiliar[$i]);
                    $stmt_fam->bindParam(2, $NomFamiliar[$i]);
                    $stmt_fam->bindParam(3, $TelFamiliar[$i]);
                    $stmt_fam->bindParam(4, $RelFamiliar[$i]);
                    $stmt_fam->bindParam(5, $_PUT['CitNumRegMedico']);
                    $stmt_fam->execute();
                    $data2 = $stmt_fam->fetchAll();
                    $data2 = $data2[0];
                    $data['strMensaje'] = $data['strMensaje'] . "<br><br>" . $data2['strMensaje'];
                    $stmt_fam->closeCursor();
                }
            }
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);

            $stmt->closeCursor();

        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, "Descripcion: " . stripslashes($p->getMessage()) . " Traza: " . $p->getTraceAsString(), null);
        } catch (Exception $ex) {
            echo $ObjectJson->Json(0, " GetMessage: " . $ex->getMessage() . " Traza: " . $ex->getTraceAsString(), null);
        }

        break;


    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}
