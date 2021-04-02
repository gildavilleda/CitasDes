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

            $stmt = $Db->Sentencia("EXEC  Hdia.sp_AgListadoCie ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitStrRegMedico'});
            $stmt->bindParam(2, $_REQUEST{'CitNumIngresoEmer'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrCodCie'});
            $stmt->bindParam(4, $_REQUEST{'HdiaStrEstado'});
            $stmt->bindParam(5, $_REQUEST{'IntenNumChequeo'});

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


        if (isset($_REQUEST['MosEvolCie'])) {
            $CitNumIngreso = $_REQUEST['CitNumIngresoEmer'];
            $data = $Db->GetData("select InEm.CitNumIngresoEmer , lcie.HdiaStrCodCie, cie.HdiaStrDiagnostico
 from Hdia.ListadoCie10 as Lcie left join  
Hdia.Cie10 as Cie on cie.HdiaStrCodCie=Lcie.HdiaStrCodCie left join 
Hdia.IngresoHdiaEmer as InEm on InEm.CitNumIngresoEmer=Lcie.CitNumIngresoEmer left join
Inten.EvolucionChequeo as EC on EC.IntenNumIdEvoChequeo = Lcie.IntenNumChequeo
where Lcie.IntenNumChequeo=$CitNumIngreso and Lcie.HdiaStrEstado='IngresoEnc' ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if (isset($_REQUEST['MostCie'])) {
            $CitNumIngresoEmer = $_REQUEST['CitNumIngresoEmer'];
            $data = $Db->GetData(" select InEm.CitNumIngresoEmer , lcie.HdiaStrCodCie, cie.HdiaStrDiagnostico
 from Hdia.ListadoCie10 as Lcie left join  
Hdia.Cie10 as Cie on cie.HdiaStrCodCie=Lcie.HdiaStrCodCie left join 
Hdia.IngresoHdiaEmer as InEm on InEm.CitNumIngresoEmer=Lcie.CitNumIngresoEmer where InEm.CitNumIngresoEmer=$CitNumIngresoEmer and lcie.HdiaStrEstado='Ingreso'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if (isset($_REQUEST['MostCieInten'])) {
            $NumChequeo = $_REQUEST['NumChequeo'];
            $data = $Db->GetData("select InEm.CitNumIngresoEmer , lcie.HdiaStrCodCie, cie.HdiaStrDiagnostico
 from Hdia.ListadoCie10 as Lcie left join  
Hdia.Cie10 as Cie on cie.HdiaStrCodCie=Lcie.HdiaStrCodCie left join 
Hdia.IngresoHdiaEmer as InEm on InEm.CitNumIngresoEmer=Lcie.CitNumIngresoEmer left join
Inten.EvolucionChequeo as EC on EC.IntenNumIdEvoChequeo = Lcie.IntenNumChequeo
where Lcie.IntenNumChequeo=$NumChequeo", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if (isset($_REQUEST['IngresoEmer'])) {
            $IngresoEmer = $_REQUEST['IngresoEmer'];
            $data = $Db->GetData("select inEm.CitNumIngresoEmer, Lcie.HdiaStrCodCie, cie.HdiaStrDiagnostico
from	Hdia.ListadoCie10 as Lcie left join
		Hdia.Cie10 as cie on cie.HdiaStrCodCie = Lcie.HdiaStrCodCie left join
		Hdia.IngresoHdiaEmer as inEm on inEm.CitNumIngresoEmer = Lcie.CitNumIngresoEmer left join
		Neo.Hospitalizacion as nHo on nHo.CitNumIngresoEmer = Lcie.CitNumIngresoEmer left join
		Neo.Patologia as Pat on nHo.IdNumHospitaliz = Pat.IdNumHospitaliz
where	Lcie.CitNumIngresoEmer = $IngresoEmer and Lcie.HdiaStrEstado = 'IngNeoPat'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if (isset($_REQUEST['ingEmergencia'])) {
            $ingEmergencia = $_REQUEST['ingEmergencia'];
            $data = $Db->GetData("select inEm.CitNumIngresoEmer, Lcie.HdiaStrCodCie, cie.HdiaStrDiagnostico
from	Hdia.ListadoCie10 as Lcie left join
		Hdia.Cie10 as cie on cie.HdiaStrCodCie = Lcie.HdiaStrCodCie left join
		Hdia.IngresoHdiaEmer as inEm on inEm.CitNumIngresoEmer = Lcie.CitNumIngresoEmer left join
		Neo.Hospitalizacion as nHo on nHo.CitNumIngresoEmer = Lcie.CitNumIngresoEmer left join
		Neo.Patologia as Pat on nHo.IdNumHospitaliz = Pat.IdNumHospitaliz
where	Lcie.CitNumIngresoEmer = $ingEmergencia and Lcie.HdiaStrEstado = 'IngNeoEgre'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if (isset($_REQUEST['emergenIngreso'])) {
            $emergenIngreso = $_REQUEST['emergenIngreso'];
            $data = $Db->GetData("select inEm.CitNumIngresoEmer, Lcie.HdiaStrCodCie, cie.HdiaStrDiagnostico
from	Hdia.ListadoCie10 as Lcie left join
		Hdia.Cie10 as cie on cie.HdiaStrCodCie = Lcie.HdiaStrCodCie left join
		Hdia.IngresoHdiaEmer as inEm on inEm.CitNumIngresoEmer = Lcie.CitNumIngresoEmer left join
		Neo.Hospitalizacion as nHo on nHo.CitNumIngresoEmer = Lcie.CitNumIngresoEmer left join
		Neo.Patologia as Pat on nHo.IdNumHospitaliz = Pat.IdNumHospitaliz
where	Lcie.CitNumIngresoEmer = $emergenIngreso and Lcie.HdiaStrEstado = 'IngNeoPedia'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }


        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}

