<?php


/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 04/04/2020
 * Time: 01:12 A.M.
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

            if (isset($_REQUEST['AgEvoChequeo'])){

                $stmt = $Db->Sentencia("inten.sp_AgEvolucionChequeo ?, ?");
                $stmt->bindParam(1, $_REQUEST{'IntenNumIngresoEmer'});
                $stmt->bindParam(2, $_REQUEST{'IntenStrRegMedico'});
                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            }

            else {


                $stmt = $Db->Sentencia("EXEC Inten.sp_AgChequeoMedico ?, ?, ?,?,?");
                $stmt->bindParam(1, $_REQUEST{'IntenNumIngresoEmer'});
                $stmt->bindParam(2, $_REQUEST{'IntenNumIdCampGrupoD'});
                $stmt->bindParam(3, $_REQUEST{'IntenStrTextoChequeo'});
                $stmt->bindParam(4, $_REQUEST{'IntenNumIdEvoCheq'});
                $stmt->bindParam(5, $_REQUEST{'IntenDate'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();

            }


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

            $stmt = $Db->Sentencia("EXEC Hdia.SpModDatEnfermeria ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitStrImpreClinica'});
            $stmt->bindParam(2, $_REQUEST{'CitStrJustIngreso'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrMoConsulta'});
            $stmt->bindParam(4, $_REQUEST{'HdiaStrHisEnfermedad'});
            $stmt->bindParam(5, $_REQUEST{'HdiaStrAntecedentes'});
            $stmt->bindParam(6, $_REQUEST{'HdiaStrExaFisico'});
            $stmt->bindParam(7, $_REQUEST{'HdiaStrComentario'});
            $stmt->bindParam(8, $_REQUEST{'CitNumIngresoEmer'});

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

            $stmt = $Db->Sentencia("EXEC  ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumEnferm'});

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
        if (isset($_REQUEST['MostGrupoDiag'])) {
            $data = $Db->GetData("SELECT * FROM inten.CampoGrupoDiagnostico ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }


        if (isset($_REQUEST['MostEvoIntensivo'])) {
            $IntenStrRegMedico = $_REQUEST['IntenStrRegMedico'];
            $data = $Db->GetData("   select  	ROW_NUMBER () 
        OVER(PARTITION BY  IntenStrRegMedico ORDER BY IntenStrRegMedico) AS contadorChequeos, * from Inten.EvolucionChequeo where IntenStrRegMedico='$IntenStrRegMedico'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if (isset($_REQUEST['MostEvoChequeo'])) {
            $IntenNumIdEvoChequeo = $_REQUEST['IntenNumIdEvoChequeo'];
            $data = $Db->GetData(" select CG.IntenStrCampDescripcion, Ch.IntenStrTextoChequeo, GD.IntenStrDescripcion
from inten.ChequeoMedico as Ch left join
		inten.EvolucionChequeo as EC on EC.IntenNumIdEvoChequeo=Ch.IntenNumIdEvoCheq left join
		inten.CampoGrupoDiagnostico as CG on CG.IntenNumIdCampGrupoD=Ch.IntenNumIdCampGrupoD left join
		Inten.GrupoDiagnostico as GD on GD.IntenNumIdGrupo = CG.IntenNumIdGrupo
		where EC.IntenNumIdEvoChequeo=$IntenNumIdEvoChequeo ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}


