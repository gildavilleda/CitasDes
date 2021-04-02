<?php

/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 30/10/2019
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

                $stmt = $Db->Sentencia("EXEC Hdia.Sp_AgDatAnestesia ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'HdiaDatHorIniAnes'});
                $stmt->bindParam(2, $_REQUEST{'HdiaDatHorFinalAnes'});
                $stmt->bindParam(3, $_REQUEST{'HdiaDatHorIniProcQuir'});
                $stmt->bindParam(4, $_REQUEST{'HdiaDatHorFinalProcQuir'});
                $stmt->bindParam(5, $_REQUEST{'EvaluaBomege'});
                $stmt->bindParam(6, $_REQUEST{'TestAldrete'});
                $stmt->bindParam(7, $_REQUEST{'HdiaStrComAnesTranOper'});
                $stmt->bindParam(8, $_REQUEST{'HdiaStrComRecu'});
                $stmt->bindParam(9, $_REQUEST{'HdiaNomAnestesiologo'});
                $stmt->bindParam(10, $_REQUEST{'HdiaNumProgQuirg'});
                $stmt->bindParam(11, $_REQUEST{'SelTestAldreteP'});
                $stmt->bindParam(12, $_REQUEST{'SelEvBomageP'});


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

            $stmt = $Db->Sentencia("EXEC Hdia.sp_ModEstadoProgramacion ?, ?");


            $stmt->bindParam(1, $_REQUEST{'HdiaNumAnestesia'});
            $stmt->bindParam(2, $_REQUEST{'HdiaDatHorIniAnes'});



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

        if(isset($_REQUEST['CitNumEspecialidad'])){
            $CitNumEspecialidad = $_REQUEST['CitNumEspecialidad'];
            $data = $Db->GetData("SELECT * FROM  Hdia.vw_QuirofanoEspecialidad WHERE CitNumEspecialidad= $CitNumEspecialidad", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['mostEstados'])){
            $data = $Db->GetData("SELECT * FROM  Hdia.Estados", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['mostProg'])){
            $Quirofano = $_REQUEST['HdiaNumQuirofano'];
            $Especialidad = $_REQUEST['CitNumEspecialidad'];
            $Fecha = $_REQUEST['HdiaDatFecha'];
            $data = $Db->GetData("SELECT * FROM  Hdia.vw_MostrarAgendaAnestesia WHERE HdiaNumQuirofano = $Quirofano and  
                                      CitNumEspecialidad= $Especialidad and  HdiaDatFechaAnestecia = '$Fecha' ", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if (isset($_REQUEST['HdiaNumProgQui'])){
            $HdiaNumProgQui = $_REQUEST['HdiaNumProgQui'];
            $data = $Db->GetData("SELECT * FROM  Hdia.vw_mostrarAnesProg WHERE HdiaNumProgQuirg = $HdiaNumProgQui", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['mostProgNueva'])){
            $Fecha = $_REQUEST['HdiaDatFecha'];
            $data = $Db->GetData("SELECT * FROM  Hdia.vw_MostrarAgendaAnestesia WHERE HdiaDatFechaAnestecia = '$Fecha' AND  HdiaCharValoracion = 'S' AND HdiaEstatus = 1 ORDER BY HdiaNumTurno", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }




        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}
