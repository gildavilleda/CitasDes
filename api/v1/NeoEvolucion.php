<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 04/11/2020
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

            $stmt = $Db->Sentencia("EXEC  Neo.Sp_AgEvolucion    ?, ?, ?, ?, ?, ?, ?,?,?");

            $stmt->bindParam(1, $_REQUEST{'StrRegistroMedico'});
            $stmt->bindParam(2, $_REQUEST{'StrNombrePaciente'});
            $stmt->bindParam(3, $_REQUEST{'NumEdad'});
            $stmt->bindParam(4, $_REQUEST{'NumPeso'});
            $stmt->bindParam(5, $_REQUEST{'NumTiempo'});
            $stmt->bindParam(6, $_REQUEST{'DatFechaHora'});
            $stmt->bindParam(7, $_REQUEST{'StrDiagnostico'});
            $stmt->bindParam(8, $_REQUEST{'StrComentario'});
            $stmt->bindParam(9, $_REQUEST{'IdNumHospitaliz'});





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

            $stmt = $Db->Sentencia("EXEC Neo.Sp_ModEvolucion   ?, ?, ?, ?, ?, ?, ?,?,?");

            $stmt->bindParam(1, $_REQUEST{'StrRegistroMedico'});
            $stmt->bindParam(2, $_REQUEST{'StrNombrePaciente'});
            $stmt->bindParam(3, $_REQUEST{'NumEdad'});
            $stmt->bindParam(4, $_REQUEST{'NumPeso'});
            $stmt->bindParam(5, $_REQUEST{'NumTiempo'});
            $stmt->bindParam(6, $_REQUEST{'DatFechaHora'});
            $stmt->bindParam(7, $_REQUEST{'StrDiagnostico'});
            $stmt->bindParam(8, $_REQUEST{'StrComentario'});
            $stmt->bindParam(9, $_REQUEST{'IdNumEvolucion'});



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


    /*
        case 'GET':

    //Procedimiento para Mostrar

            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }
            $CitNumEspecialidad = $_REQUEST['CitNumEspecialidad'];
            $data = $Db->GetData("SELECT * FROM Hdia.Pediatria", $_SESSION['dbUser'], $_SESSION['dbPass']);


            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
            break;
    */
    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}
