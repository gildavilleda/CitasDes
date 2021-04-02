<?php
/**
 * Created by PhpStorm.
 * User: Jasson Rodríguez
 * Date: 7/31/2019
 * Time: 8:48 AM
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

        if (isset($_REQUEST['regMedico']) != "") {
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Laboratorio.sp_AgTipoExamen ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'tipoLaboratorio'});
                $stmt->bindParam(2, $_REQUEST{'regMedico'});
                $stmt->bindParam(3, $_REQUEST{'nombreLaboratorio'});

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

            $stmt = $Db->Sentencia("EXEC Laboratorio.sp_AsignarLaboratorio ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumCita'});
            $stmt->bindParam(2, $_REQUEST{'LabNumTipoExamen'});


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

            $stmt = $Db->Sentencia("EXEC cita.sp_elimMedico ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumMedico'});

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

        if(isset($_REQUEST['CitNumEspecialidad'])){
            $CitNumEspecialidad = $_REQUEST['CitNumEspecialidad'];
            $data = $Db->GetData("SELECT * FROM Laboratorio.vw_AgendaLaboratorio WHERE CitNumEspecialidad = '$CitNumEspecialidad'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['CitStrRegMedico'])){
            $CitStrRegMedico = $_REQUEST['CitStrRegMedico'];
            $data = $Db->GetData("SELECT * FROM Laboratorio.TipoExamen
                                      WHERE LabCitaAsignada is null AND CitStrRegMedico = '$CitStrRegMedico'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['CitNumCita'])){
            $CitNumCita = $_REQUEST['CitNumCita'];
            $data = $Db->GetData("SELECT * FROM Laboratorio.TipoExamen WHERE LabCitaAsignada = '$CitNumCita'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['CarteraLab'])){
            $data = $Db->GetData("SELECT * FROM Laboratorio.CarteraLaboratorios WHERE LabIntEstado = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}