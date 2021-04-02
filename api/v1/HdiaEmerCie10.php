<?php

/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 10/03/2020
 * Time: 12:32 PM
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

            $stmt = $Db->Sentencia("EXEC Hdia.sp_AgIngresoHdiaEmer ?");

            $stmt->bindParam(1, $_REQUEST{'CitStrIngA'});



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

            $stmt = $Db->Sentencia("EXEC Hdia.sp_ModIngresoHdiaEmer  ?,?,?");

            $stmt->bindParam(1, $_REQUEST{'CitNumIngresoEmer'});
            $stmt->bindParam(2, $_REQUEST{'HdiaSigViStrTemperatura'});



            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;
    case 'DELETE':
//Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC  ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumEnferm'});

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
        if(isset($_REQUEST['CodigoCie'])){
            $HdiaCodigoCie = $_REQUEST['CodigoCie'];
            $data = $Db->GetData("SELECT * FROM Hdia.Cie10 WHERE HdiaStrCodCie = '$HdiaCodigoCie'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['GrupoCie'])){
            $HdiaEmerCie = $_REQUEST['GrupoCie'];

            $data = $Db->GetData("SELECT * FROM Hdia.Cie10 WHERE HdiaStrGrupo ='$HdiaEmerCie' ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['NumeroDiagnosticoCie'])){
            $HdiaNumDiagCie = $_REQUEST['NumeroDiagnosticoCie'];

            $data = $Db->GetData("SELECT * FROM  Hdia.Cie10 WHERE HdiaNumDiagnostico = '$HdiaNumDiagCie'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['DiagnosticoCie'])){
            $HdiaDiagnosticoCie = $_REQUEST['DiagnosticoCie'];

            $data = $Db->GetData("SELECT * FROM Hdia.Cie10 WHERE  upper(HdiaStrDiagnostico ) like '% $HdiaDiagnosticoCie%'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}


