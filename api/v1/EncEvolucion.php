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

            $stmt = $Db->Sentencia("EXEC Encam.sp_agEvolucion ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'EncStrMedicoTratante'});
            $stmt->bindParam(2, $_REQUEST{'EncStrDiagnostico'});
            $stmt->bindParam(3, $_REQUEST{'EncStrObser'});
            $stmt->bindParam(4, $_REQUEST{'EncDatetime'});
            $stmt->bindParam(5, $_REQUEST{'EncNumIdPaciente'});

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

         $stmt = $Db->Sentencia("EXEC Encam.sp_ModEvolucion ?, ?, ?, ?, ?, ?");

         $stmt->bindParam(1, $_REQUEST{'EncNumIdEvolucion'});
         $stmt->bindParam(2, $_REQUEST{'EncStrMedicoTratante'});
         $stmt->bindParam(3, $_REQUEST{'EncStrDiagnostico'});
         $stmt->bindParam(4, $_REQUEST{'EncStrObser'});
         $stmt->bindParam(5, $_REQUEST{'EncDatetime'});
         $stmt->bindParam(6, $_REQUEST{'EncNumIdPaciente'});



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

/*  case 'DELETE':
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
   $data = $Db->GetData("select * from Hdia.ServicioEncamamiento", $_SESSION['dbUser'], $_SESSION['dbPass']);


   echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
   break;

default:
   echo $ObjectJson->Json('0', 'Request no definido', null);
   break;*/

}
