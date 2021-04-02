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
    if(isset($_REQUEST['receta'])){
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Hdia.sp_AgReceta ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumEgreso'});
            $stmt->bindParam(2, $_REQUEST{'HdiaDatFecha'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrRecet'});

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
    }else{
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Hdia.sp_AgEgresoHdiEmer ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumIngresoEmer'});
            $stmt->bindParam(2, $_REQUEST{'HdiaStrDiagnostico'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrResultados'});
            $stmt->bindParam(4, $_REQUEST{'CitStrRegMedico'});
            $stmt->bindParam(5, $_REQUEST{'HdiaDatFechaAlta'});



            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
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

            $stmt = $Db->Sentencia("EXEC Hdia.sp_ModEgresoHdiEmer ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumEstatusActual'});
            $stmt->bindParam(2, $_REQUEST{'HdiaStrReferido'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrObs'});
            $stmt->bindParam(4, $_REQUEST{'HdiaNumEgreso'});

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
        if(isset($_REQUEST['CitStrRegMedico'])){
            $CitStrRegMedico = $_REQUEST['CitStrRegMedico'];
            $data = $Db->GetData("SELECT * FROM Hdia.HdiaEgresoHdiaEmer WHERE CitStrRegMedico = '$CitStrRegMedico'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['NumEmergencia'])){
            $NumEmergencia= $_REQUEST['NumEmergencia'];
            $data = $Db->GetData("SELECT * FROM Hdia.HdiaEgresoHdiaEmer WHERE CitNumIngresoEmer = '$NumEmergencia'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['receta'])){
            $IdNumReceta= $_REQUEST['IdNumRecetaIngreso'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_MostReceta WHERE CitNumIngresoEmer = '$IdNumReceta'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }


        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}

