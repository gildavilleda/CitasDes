<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 1/03/2019
 * Time: 09:51 AM
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


        if (isset($_REQUEST['CitNumMedico']) != "") {
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }


                $stmt = $Db->Sentencia("EXEC cita.sp_AgMedico ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'CitStrNombre'});
                $stmt->bindParam(2, $_REQUEST{'CitStrApellido'});
                $stmt->bindParam(3, $_REQUEST{'CitStrDireccion'});
                $stmt->bindParam(4, $_REQUEST{'CitStrTelefono'});
                $stmt->bindParam(5, $_REQUEST{'CitStrCorreoElec'});

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

            $stmt = $Db->Sentencia("EXEC cita.sp_ModMedico ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumMedico'});
            $stmt->bindParam(2, $_REQUEST{'CitStrNombre'});
            $stmt->bindParam(3, $_REQUEST{'CitStrApellido'});
            $stmt->bindParam(4, $_REQUEST{'CitStrDireccion'});
            $stmt->bindParam(5, $_REQUEST{'CitStrTelefono'});
            $stmt->bindParam(6, $_REQUEST{'CitStrCorreoElec'});

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
            $data = $Db->GetData("SELECT * FROM cita.vw_MedicoEspecialidad WHERE CitNumEspecialidad = '$CitNumEspecialidad'", $_SESSION['dbUser'], $_SESSION['dbPass']);

        } else if (isset($_REQUEST['CitNumMedico'])) {
            $CitNumMedico = $_REQUEST['CitNumMedico'];
            $data = $Db->GetData("SELECT * FROM cita.vw_MedicoEspecialidad WHERE CitNumMedico = '$CitNumMedico'", $_SESSION['dbUser'], $_SESSION['dbPass']);

        } else if(isset($_REQUEST['ayudantes'])){

            $data = $Db->GetData("SELECT SegNumUsuario as id,  SegStrNomUsuario + ' - ' +SegStrPuesto as text FROM Hdia.vw_AyudantesCirugia WHERE SegCharAutCirugia = 'S' ", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        //Enfermerios circulantes o instrumentistas se metio aqui por no haber ws para enfermeria y solo se necesita esta opcion
        else if(isset($_REQUEST['Enfermeria'])){

            $data = $Db->GetData("SELECT SegNumUsuario as id,  SegStrNomUsuario + ' - ' +SegStrPuesto as text FROM Hdia.vw_EnfermerosCI WHERE SegCharAutCirugia = 'S'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['Programacion'])){
            $idAyudante = $_REQUEST['Programacion'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_AyudantesCirugia WHERE SegNumUsuario = $idAyudante", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['ProgramacionEnf'])){
            $idEnf = $_REQUEST['ProgramacionEnf'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_EnfermerosCI WHERE SegNumUsuario = $idEnf", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else {
            //si no se manda ninguna variable
            $data = $Db->GetData("SELECT * FROM cita.Medico", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }





        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}