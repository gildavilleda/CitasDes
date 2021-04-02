<?php
/**
 * Created by PhpStorm.
 * User: Marisol Rodríguez
 * Date: 07/06/2020
 * Time: 10:48 PM
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

            $stmt = $Db->Sentencia("EXEC Inten.sp_AgGlasgow ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'IntenNumIngresoEmer'});
            $stmt->bindParam(2, $_REQUEST{'IntenIdEscala'});
            $stmt->bindParam(3, $_REQUEST{'IntenIdEvoChequeo'});

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
    /* case 'DELETE':
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
         break;*/

    case 'GET':
        //Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }


        if (isset($_REQUEST['MostGrupoGlasgow'])) {
            $data = $Db->GetData("select GG.IntenStrDescripcion,EG.IntenIdEscala, EG.IntenStrCampDescripcion, EG.IntenNumValorEscala from inten.EscalaGlasgow as EG left join
  inten.GrupoGlasgow as GG on GG.IntenNumGrupoGlasgow= EG.IntenNumGrupoGlasgow ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
  if (isset($_REQUEST['MostGlasgow'])) {
      $IdEvoChequeo = $_REQUEST['IntenIdEvoChequeo'];
            $data = $Db->GetData("select GG.IntenStrDescripcion, EG.IntenNumValorEscala from inten.EscalaGlasgow as EG left join
  inten.GrupoGlasgow as GG on GG.IntenNumGrupoGlasgow= EG.IntenNumGrupoGlasgow left join
  Inten.Glasgow as G on G.IntenIdEscala= EG.IntenIdEscala left join
  Inten.EvolucionChequeo as EC on EC.IntenNumIdEvoChequeo=G.IntenIdEvoChequeo
  where G.IntenIdEvoChequeo=$IdEvoChequeo ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }





        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}


