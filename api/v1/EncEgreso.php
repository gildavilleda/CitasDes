<?php

/**
 * Created by PhpStorm.
 * User: saju
 * Date: 04/04/2020
 * Time: 04:42
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

            $stmt = $Db->Sentencia("EXEC Encam.sp_agEgreso  ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'EncDateTime'});
            $stmt->bindParam(2, $_REQUEST{'EncStrCie_10'});
            $stmt->bindParam(3, $_REQUEST{'EncStrDiagnositco'});
            $stmt->bindParam(4, $_REQUEST{'EncStrObservaciones'});
            $stmt->bindParam(5, $_REQUEST{'EncStrTipoEgreso'});
            $stmt->bindParam(6, $_REQUEST{'EncNumIdPaciente'});
            $stmt->bindParam(7, $_REQUEST{'CitNumIngresoEmer'});

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

         $stmt = $Db->Sentencia("EXEC Encam.sp_ModEgreso ?, ?, ?, ?, ?, ?, ?, ?");


         $stmt->bindParam(1, $_REQUEST{'EncNumIdEgreso'});
         $stmt->bindParam(2, $_REQUEST{'EncStrMedicoSalida'});
         $stmt->bindParam(3, $_REQUEST{'EncDateTime'});
         $stmt->bindParam(4, $_REQUEST{'EncStrCie_10'});
         $stmt->bindParam(5, $_REQUEST{'EncStrDiagnositco'});
         $stmt->bindParam(6, $_REQUEST{'EncStrObservaciones'});
         $stmt->bindParam(7, $_REQUEST{'EncStrTipoEgreso'});
         $stmt->bindParam(8, $_REQUEST{'EncNumIdPaciente'});



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
/*
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
*/
case 'GET':
//Procedimiento para Mostrar
   $Db = new Database();
   if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
       echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
       exit(0);
   }
        if(isset($_REQUEST['CitStrRegMedico'])){
            $registroMed = $_REQUEST['CitStrRegMedico'];
            $data = $Db->GetData("select count( *) as resultado from Hdia.IngresoHdiaEmer as IE left join
            hdia.HdiaEgresoHdiaEmer as EE on EE.CitNumIngresoEmer=IE.CitNumIngresoEmer
            where  IE.CitStrRegMedico= '$registroMed' and IE.HdiaNumEstatusActual not in (4,5,6,7)", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if (isset($_REQUEST['CitNumIngresoEmer'])){
            $CitNumIngresoEmer=$_REQUEST['CitNumIngresoEmer'];
            $data = $Db->GetData("select * from Encam.Egreso where CitNumIngresoEmer = '$CitNumIngresoEmer'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }



   echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
   break;

default:
   echo $ObjectJson->Json('0', 'Request no definido', null);
   break;

}

