<?php

/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 22/07/2020
 * Time: 11:53
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

            $stmt = $Db->Sentencia("EXEC  Encam.Sp_AgIngresoVentilador ?, ?, ?, ?, ?, ?, ?");


            $stmt->bindParam(1, $_REQUEST{'EncDatetime'});
            $stmt->bindParam(2, $_REQUEST{'EncNumEncNumVentilador'});
            $stmt->bindParam(3, $_REQUEST{'EncNumServVentilador'});
            $stmt->bindParam(4, $_REQUEST{'CitStrRegMedico'});
            $stmt->bindParam(5, $_REQUEST{'CitNumIngresoEmer'});
            $stmt->bindParam(6, $_REQUEST{'EncNumEdad'});
            $stmt->bindParam(7, $_REQUEST{'EncModoVentilacion'});




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

            $stmt = $Db->Sentencia("EXEC Encam.sp_ModIngresoVentilador ?");


            $stmt->bindParam(1, $_REQUEST{'IdIngresoVentilador'});



            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;
        {
        }

    case 'DELETE':
        //Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_ElimDatAnestesia ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumAnestesia'});

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
        if(isset($_REQUEST['servicioId'])){
            $EncNumServVentilador=$_REQUEST['servicioId'];
            $data = $Db->GetData("select * from Encam.vw_mostBotonesVentilador where EncNumServVentilador = $EncNumServVentilador", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['BtnServicio'])){
            $data = $Db->GetData("select * from Encam.Ventiladores", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['CitNumIngresoEmer'])){
        $CitNumIngresoEmer=$_REQUEST['CitNumIngresoEmer'];
        $data = $Db->GetData("select * from Encam.mostInfoInVentilador WHERE CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['EncNumIdServEncam'])){
            $EncNumIdServEncam=$_REQUEST['EncNumIdServEncam'];
            $data = $Db->GetData("select * from Encam.vw_mostAsignacionVentiladores where EncNumIdServEncam = $EncNumIdServEncam and EncNumIdEgreso is null", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }



        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}
