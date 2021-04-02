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

            $stmt = $Db->Sentencia("EXEC Hdia.sp_agEvoPacienteEmer ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaStrDiagnostico'});
            $stmt->bindParam(2, $_REQUEST{'HdiaStrDatSubjetivos'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrDatObjetivos'});
            $stmt->bindParam(4, $_REQUEST{'HdiaStrOrdenesMedicas'});
            $stmt->bindParam(5, $_REQUEST{'HdiaStrComentario'});
            $stmt->bindParam(6, $_REQUEST{'HdiaDatFechaRevision'});
            $stmt->bindParam(7, $_REQUEST{'HdiaStrHisopado'});
            $stmt->bindParam(8, $_REQUEST{'CitNumIngresoEmer'});
            $stmt->bindParam(9, $_REQUEST{'CitNumCitaLab'});
            $stmt->bindParam(10, $_REQUEST{'CitStrImpreClinica'});
            $stmt->bindParam(11, $_REQUEST{'HdiaStrDetalleHisopado'});
            $stmt->bindParam(12, $_REQUEST{'HdiaStrAntogeno'});
            $stmt->bindParam(13, $_REQUEST{'HdiaStrVentilacion'});
            $stmt->bindParam(14, $_REQUEST{'HdiaStrOtroCie'});


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

            $stmt = $Db->Sentencia("EXEC Hdia.SpModDatEnfermeria ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitStrImpreClinica'});
            $stmt->bindParam(2, $_REQUEST{'CitStrJustIngreso'});
            $stmt->bindParam(3, $_REQUEST{'HdiaStrMoConsulta'});
            $stmt->bindParam(4, $_REQUEST{'HdiaStrHisEnfermedad'});
            $stmt->bindParam(5, $_REQUEST{'HdiaStrAntecedentes'});
            $stmt->bindParam(6, $_REQUEST{'HdiaStrExaFisico'});
            $stmt->bindParam(7, $_REQUEST{'HdiaStrComentario'});
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
        if(isset($_REQUEST['MostEvol'])){
            $CitNumIngresoEmer = $_REQUEST['CitNumIngresoEmerMost'];
            $data = $Db->GetData("SELECT HdiaNumEvoPacienteEmer, HdiaStrDiagnostico, HdiaStrDatSubjetivos, HdiaStrDatObjetivos, HdiaStrOrdenesMedicas, HdiaStrComentario, 
HdiaDatFechaRevision, (select convert( date, HdiaDatFechaRevision, 111)) as fecha, (select convert( time(0), HdiaDatFechaRevision, 108)) as hora,
HdiaDatFechaIngreso,HdiaStrHisopado,CitNumIngresoEmer, CitNumCitaLab, CitStrImpreClinica, HdiaStrDetalleHisopado, HdiaStrAntogeno, HdiaStrVentilacion
FROM Hdia.HdiaEvoPacienteEmer WHERE CitNumIngresoEmer = $CitNumIngresoEmer AND HdiaDatFechaRevision IS NOT NULL order by HdiaNumEvoPacienteEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['RepTrabSocial'])){
            $fInicio = $_REQUEST['fInicio'];
            $fFin =     $_REQUEST['fFin'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_RepTrabSocial WHERE CitDateIngreso between '$fInicio' and '$fFin'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['RepTrabEpi'])){
            $fInicio = $_REQUEST['fInicio'];
            $fFin =     $_REQUEST['fFin'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_RepEpidemiologia WHERE CitDateIngreso between '$fInicio' and '$fFin'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['RepEstadistica'])){
            $fInicio = $_REQUEST['fInicio'];
            $fFin =     $_REQUEST['fFin'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_RepEstadisticaC19 WHERE CitDateIngreso between '$fInicio' and '$fFin'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['EvolPaciente'])){
            $data = $Db->GetData("SELECT * FROM Hdia.vw_mostrarEvolucion", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['NumEmergencia'])){
            $NumEmergencia = $_REQUEST['NumEmergencia'];
            $data = $Db->GetData("SELECT * FROM Hdia.IngresoHdiaEmer WHERE CitNumIngresoEmer = $NumEmergencia", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['CitNumIngresoEmerNota'])){
            $CitNumIngresoEmer = $_REQUEST['CitNumIngresoEmerNota'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_mostrarOrdenReceta WHERE CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['NumEmergenciaIngreso'])){
            $CitNumIngresoEmer = $_REQUEST['NumEmergenciaIngreso'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_mostrarOrdenRecetaEmer WHERE CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['EncNumIdPaciente'])){
            $EncNumIdPaciente = $_REQUEST['EncNumIdPaciente'];
            $data = $Db->GetData("SELECT	EncNumIdPaciente,p.CitStrRegMedico, p.CitStrNombre + ' ' + ISNULL(p.CitStrNombre2, '') + ' ' + p.CitStrApellido + ' ' + ISNULL(p.CitStrApellido2, '')
			AS Nombre, I.EncNumCama, CM.IntenStrTextoChequeo, CM.IntenNumIdCampGrupoD, EC.IntenNumIdEvoChequeo,
			EC.IntenNumIngresoEmer, NE.HdiaIdNotaEnfermeria, SERV.EncNumIdServEncam
FROM	Encam.Ingreso I  
			JOIN Inten.EvolucionChequeo EC ON EC.IntenNumIngresoEmer = I.CitNumIngresoEmer
			JOIN Inten.ChequeoMedico CM ON EC.IntenNumIdEvoChequeo = CM.IntenNumIdEvoCheq
			JOIN cita.Paciente P ON P.CitStrRegMedico = I.CitStrRegMedico
			left join Hdia.NotaEnfermeria NE ON NE.HdiaNumEvoPacienteEmer = EC.IntenNumIdEvoChequeo
			left join Encam.ServicioEncamamiento SERV on I.EncNumIdServEncam = SERV.EncNumIdServEncam
WHERE  CM.IntenNumIdCampGrupoD = 58 AND EncNumIdPaciente = $EncNumIdPaciente", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }


        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}