<?php

/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 12/12/2019
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

            $stmt = $Db->Sentencia("EXEC Encam.Sp_AddServicioEncamamiento ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'EncNumIdServEncam'});
            $stmt->bindParam(2, $_REQUEST{'EncStrNombre'});
            $stmt->bindParam(3, $_REQUEST{'EncEstado'});
            $stmt->bindParam(4, $_REQUEST{'EncCantidadCamas'});

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

            $stmt = $Db->Sentencia("EXEC Encam.Sp_uPServicioEncamamiento ?, ?, ?, ?");


            $stmt->bindParam(1, $_REQUEST{'EncNumIdServEncam'});
            $stmt->bindParam(2, $_REQUEST{'EncStrNombre'});
            $stmt->bindParam(3, $_REQUEST{'EncEstado'});
            $stmt->bindParam(4, $_REQUEST{'EncCantidadCamas'});



            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;
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
        break;*/

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        if(isset($_REQUEST['EncNumSerVentilatorio'])){
            $EncNumSerVentilatorio = $_REQUEST['EncNumSerVentilatorio'];
            $data = $Db->GetData("select * from Encam.Ventiladores WHERE EncNumServVentilador = $EncNumSerVentilatorio", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        else if(isset($_REQUEST['EncNumIdServEncam'])){
            $EncNumIdServEncam = $_REQUEST['EncNumIdServEncam'];
            $data = $Db->GetData("select * from Encam.ServicioEncamamiento WHERE EncNumIdServEncam = $EncNumIdServEncam", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }else{
            $data = $Db->GetData("select * from Encam.ServicioEncamamiento where EncEstado = 'A'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }


        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}
