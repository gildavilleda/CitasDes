<?php

/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 10/03/2020
 * Time: 12:32 PM
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

            $stmt = $Db->Sentencia("EXEC Hdia.sp_AgIngresoHdiaEmer ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitStrIngA'});
            $stmt->bindParam(2, $_REQUEST{'CitStrImpreClinica'});
            $stmt->bindParam(3, $_REQUEST{'CitStrJustIngreso'});
            $stmt->bindParam(4, $_REQUEST{'CitStrRegMedico'});
            $stmt->bindParam(5, $_REQUEST{'HdiaStrProcedencia'});
            $stmt->bindParam(6, $_REQUEST{'HdiaNumEstatusActual'});


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

            if(isset($_REQUEST['EstatusEgreso'])){
                $stmt = $Db->Sentencia("EXEC Hdia.Sp_ModStatusIngresoEmer ?, ?");

                $stmt->bindParam(1, $_REQUEST{'CitNumIngresoEmer'});
                $stmt->bindParam(2, $_REQUEST{'HdiaNumEstatusActual'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];

            }else{
                $stmt = $Db->Sentencia("EXEC Hdia.sp_ModIngresoHdiaEmer ?, ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?");

                $stmt->bindParam(1, $_REQUEST{'CitNumIngresoEmer'});
                $stmt->bindParam(2, $_REQUEST{'HdiaSigViStrTemperatura'});
                $stmt->bindParam(3, $_REQUEST{'HdiaSigViStrGrados'});
                $stmt->bindParam(4, $_REQUEST{'HdiaSigViStrPresionArt'});
                $stmt->bindParam(5, $_REQUEST{'HdiaSigViStrFrecCardiaca'});
                $stmt->bindParam(6, $_REQUEST{'HdiaSigViStrFrecResp'});
                $stmt->bindParam(7, $_REQUEST{'HdiaSigViStrSatOxigeno'});
                $stmt->bindParam(8, $_REQUEST{'HdiaSigViNumPeso'});
                $stmt->bindParam(9, $_REQUEST{'HdiaSigViStrMedida'});
                $stmt->bindParam(10, $_REQUEST{'HdiaGenStrPiel'});
                $stmt->bindParam(11, $_REQUEST{'HdiaGenStrCabeza'});
                $stmt->bindParam(12, $_REQUEST{'HdiaGenStrCuello'});
                $stmt->bindParam(13, $_REQUEST{'HdiaGenStrTorax'});
                $stmt->bindParam(14, $_REQUEST{'HdiaGenStrCorazon'});
                $stmt->bindParam(15, $_REQUEST{'HdiaGenStrPulmones'});
                $stmt->bindParam(16, $_REQUEST{'HdiaGenStrAbdomen'});
                $stmt->bindParam(17, $_REQUEST{'HdiaGenStrGenitales'});
                $stmt->bindParam(18, $_REQUEST{'HdiaGenStrExtremidades'});
                $stmt->bindParam(19, $_REQUEST{'HdiaGenStrNeorologico'});
                $stmt->bindParam(20, $_REQUEST{'HdiaAntStrMedicos'});
                $stmt->bindParam(21, $_REQUEST{'HdiaAntStrQuirurgicos'});
                $stmt->bindParam(22, $_REQUEST{'HdiaAntStrTrauma'});
                $stmt->bindParam(23, $_REQUEST{'HdiaAntStrAlergicos'});
                $stmt->bindParam(24, $_REQUEST{'HdiaAntDateUltimaMens'});
                $stmt->bindParam(25, $_REQUEST{'HdiaAntNumEmbarazos'});
                $stmt->bindParam(26, $_REQUEST{'HdiaAntNumHijos'});
                $stmt->bindParam(27, $_REQUEST{'HdiaAntNumPartoNatural'});
                $stmt->bindParam(28, $_REQUEST{'HdiaAntNumCesarea'});
                $stmt->bindParam(29, $_REQUEST{'HdiaAntNumAbortos'});
                $stmt->bindParam(30, $_REQUEST{'HdiaAntStrCancer'});
                $stmt->bindParam(31, $_REQUEST{'HdiaAntStrDiabetes'});
                $stmt->bindParam(32, $_REQUEST{'HdiaAntStrTiroides'});
                $stmt->bindParam(33, $_REQUEST{'HdiaManStrFuma'});
                $stmt->bindParam(34, $_REQUEST{'HdiaManStrBebe'});
                $stmt->bindParam(35, $_REQUEST{'HdiaManStrOtros'});
                $stmt->bindParam(36, $_REQUEST{'HdiaStrEstadoConciencia'});
                $stmt->bindParam(37, $_REQUEST{'HdiaStrExamenFisico'});
                $stmt->bindParam(38, $_REQUEST{'HdiaStrTratamiento'});
                $stmt->bindParam(39, $_REQUEST{'HdiaStrJustClinica'});
                $stmt->bindParam(40, $_REQUEST{'CitStrImpreClinica'});
                $stmt->bindParam(41, $_REQUEST{'HdiaNumLaboratorio'});
                $stmt->bindParam(42, $_REQUEST{'HdiaStrOtroCie'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
            }
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
        if(isset($_REQUEST['CitStrRegMedico'])){
            $CitStrRegMedico = $_REQUEST['CitStrRegMedico'];
            $data = $Db->GetData("SELECT IE.CitNumIngresoEmer, IE.CitStrIngA, IE.CitStrJustIngreso,IE.CitStrRegMedico, IE.CitNumNoAdmision,
			IE.CitNumEdad, IE.CitNumNoAdmision, IE.HdiaStrProcedencia, IE.HdiaNumEstatusActual,
			IE.CitStrImpreClinica, P.CitStrNombre + ' ' + ISNULL(P.CitStrNombre2, '') + ' ' + P.CitStrApellido + ' ' + ISNULL(P.CitStrApellido2, '')
            AS Nombre, P.CitStrRegMedico, IE.CitNumEdad, P.CitBitGenero,  CAST(IE.CitDateIngreso AS DATE) AS FechaIngreso,
			ISNULL (CAST(CAST(E.HdiaDatFechaEgreso AS DATE)as varchar), 'No Egresado') AS FechaEgreso
            FROM Hdia.IngresoHdiaEmer IE INNER JOIN
                            cita.Paciente  P ON IE.CitStrRegMedico = P.CitStrRegMedico LEFT JOIN
							Hdia.HdiaEgresoHdiaEmer E on IE.CitNumIngresoEmer = E.CitNumIngresoEmer
            WHERE P.CitStrRegMedico = '$CitStrRegMedico'", $_SESSION['dbUser'], $_SESSION['dbPass']);
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
        if(isset($_REQUEST['censo'])){
            $fInicio = $_REQUEST['fInicio'];
            $fFin =     $_REQUEST['fFin'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_censo WHERE CitDateIngreso between '$fInicio' and '$fFin'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['EvolPaciente'])){
            $data = $Db->GetData("SELECT * FROM Hdia.vw_mostrarEvolucion where HdiaNumEgreso is null", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['NumEmergencia'])){
            $NumEmergencia = $_REQUEST['NumEmergencia'];
            $data = $Db->GetData("SELECT * FROM Hdia.vw_MostrarIngresoEvoEmer WHERE CitNumIngresoEmer = $NumEmergencia", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['regMedico'])){
            $regMedico = $_REQUEST['regMedico'];
            $data = $Db->GetData("SELECT * FROM Neo.vw_mostHospNeo WHERE StrNumHistoriaClin = '".$regMedico."'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }



        if(isset($_REQUEST['FECHA'])){
            $fInicio = $_REQUEST['fInicio'];
            $fFin =     $_REQUEST['fFin'];
            $data = $Db->GetData("
            WITH	CONTADORFILAS AS(

SELECT DISTINCT
    
    p.CitStrRegMedico,
	ROW_NUMBER () 
        OVER(PARTITION BY  p.CitStrRegMedico ORDER BY p.CitStrRegMedico) AS contador,

		ISNULL(p.CitStrNombre, '') + ' ' + ISNULL(p.CitStrNombre2, '') + ' ' + 
ISNULL(p.CitStrApellido, '') + ' ' + ISNULL(p.CitStrApellido2, '') AS Nombre, 
ISNULL(CONVERT(varchar(20), IE.CitDateIngreso, 103), '')  AS FechaIngreso,
ISNULL(CAST(IE.CitDateIngreso AS time(0)), '') AS HoraIngreso, 
ISNULL(IE.HdiaStrProcedencia, '') AS HdiaStrProcedencia,
IE.HdiaNumEstatusActual, 
ISNULL(CONVERT(varchar(20), EE.HdiaDatFechaEgreso, 103), '') AS FechaEgreso, 
ISNULL(CAST(EE.HdiaDatFechaEgreso AS time(0)), ' ') AS HoraEgreso,
EE.HdiaNumEgresoEstus,
ISNULL(EE.HdiaStrObs, ' ') AS HdiaStrObs,
ISNULL(EE.HdiaStrReferido,' ') AS HdiaStrReferido, IE.CitNumEdad,
ISNULL(EE.HdiaStrDiagnostico, '') AS HdiaStrDiagnostico, 
ISNULL(EE.HdiaStrResultados, '') AS HdiaStrResultados, IE.CitDateIngreso, p.CitBitGenero

 FROM cita.Paciente AS p INNER JOIN
	Hdia.IngresoHdiaEmer AS IE ON p.CitStrRegMedico = IE.CitStrRegMedico LEFT OUTER JOIN
	Hdia.HdiaEgresoHdiaEmer AS EE ON p.CitStrRegMedico = EE.CitStrRegMedico

	 WHERE CitDateIngreso between '$fInicio' and '$fFin'
	
	 )

	 select * from CONTADORFILAS  where contador=1
            
            ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['EDAD'])){
            $selEdadI = $_REQUEST['selEdadI'];
            $selEdadF =     $_REQUEST['selEdadF'];
            $data = $Db->GetData("
            
            WITH	CONTADORFILAS AS(

SELECT DISTINCT
    
    p.CitStrRegMedico,
	ROW_NUMBER () 
        OVER(PARTITION BY  p.CitStrRegMedico ORDER BY p.CitStrRegMedico) AS contador,

		ISNULL(p.CitStrNombre, '') + ' ' + ISNULL(p.CitStrNombre2, '') + ' ' + 
ISNULL(p.CitStrApellido, '') + ' ' + ISNULL(p.CitStrApellido2, '') AS Nombre, 
ISNULL(CONVERT(varchar(20), IE.CitDateIngreso, 103), '')  AS FechaIngreso,
ISNULL(CAST(IE.CitDateIngreso AS time(0)), '') AS HoraIngreso, 
ISNULL(IE.HdiaStrProcedencia, '') AS HdiaStrProcedencia,
IE.HdiaNumEstatusActual, 
ISNULL(CONVERT(varchar(20), EE.HdiaDatFechaEgreso, 103), '') AS FechaEgreso, 
ISNULL(CAST(EE.HdiaDatFechaEgreso AS time(0)), ' ') AS HoraEgreso,
EE.HdiaNumEgresoEstus,
ISNULL(EE.HdiaStrObs, ' ') AS HdiaStrObs,
ISNULL(EE.HdiaStrReferido,' ') AS HdiaStrReferido, IE.CitNumEdad,
ISNULL(EE.HdiaStrDiagnostico, '') AS HdiaStrDiagnostico, 
ISNULL(EE.HdiaStrResultados, '') AS HdiaStrResultados, IE.CitDateIngreso, p.CitBitGenero

 FROM cita.Paciente AS p INNER JOIN
	Hdia.IngresoHdiaEmer AS IE ON p.CitStrRegMedico = IE.CitStrRegMedico LEFT OUTER JOIN
	Hdia.HdiaEgresoHdiaEmer AS EE ON p.CitStrRegMedico = EE.CitStrRegMedico

	 WHERE CitNumEdad between '$selEdadI' and '$selEdadF' and IE.HdiaNumEstatusActual=1 )

	 select * from CONTADORFILAS  where contador=1
            
            
            
            
            ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['GENERO'])){
            $genero = $_REQUEST['genero'];

            $data = $Db->GetData("
            
            WITH	CONTADORFILAS AS(

SELECT DISTINCT
    
    p.CitStrRegMedico,
	ROW_NUMBER () 
        OVER(PARTITION BY  p.CitStrRegMedico ORDER BY p.CitStrRegMedico) AS contador,

		ISNULL(p.CitStrNombre, '') + ' ' + ISNULL(p.CitStrNombre2, '') + ' ' + 
ISNULL(p.CitStrApellido, '') + ' ' + ISNULL(p.CitStrApellido2, '') AS Nombre, 
ISNULL(CONVERT(varchar(20), IE.CitDateIngreso, 103), '')  AS FechaIngreso,
ISNULL(CAST(IE.CitDateIngreso AS time(0)), '') AS HoraIngreso, 
ISNULL(IE.HdiaStrProcedencia, '') AS HdiaStrProcedencia,
IE.HdiaNumEstatusActual, 
ISNULL(CONVERT(varchar(20), EE.HdiaDatFechaEgreso, 103), '') AS FechaEgreso, 
ISNULL(CAST(EE.HdiaDatFechaEgreso AS time(0)), ' ') AS HoraEgreso,
EE.HdiaNumEgresoEstus,
ISNULL(EE.HdiaStrObs, ' ') AS HdiaStrObs,
ISNULL(EE.HdiaStrReferido,' ') AS HdiaStrReferido, IE.CitNumEdad,
ISNULL(EE.HdiaStrDiagnostico, '') AS HdiaStrDiagnostico, 
ISNULL(EE.HdiaStrResultados, '') AS HdiaStrResultados, IE.CitDateIngreso, p.CitBitGenero

 FROM cita.Paciente AS p INNER JOIN
	Hdia.IngresoHdiaEmer AS IE ON p.CitStrRegMedico = IE.CitStrRegMedico LEFT OUTER JOIN
	Hdia.HdiaEgresoHdiaEmer AS EE ON p.CitStrRegMedico = EE.CitStrRegMedico

	 WHERE CitBitGenero = '$genero' )

	 select * from CONTADORFILAS  where contador=1
            
            ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['ESTATUS'])){
            $estatusNum = $_REQUEST['estatus'];

            $data = $Db->GetData("
            
            WITH	CONTADORFILAS AS(

SELECT DISTINCT
    
    p.CitStrRegMedico,
	ROW_NUMBER () 
        OVER(PARTITION BY  p.CitStrRegMedico ORDER BY p.CitStrRegMedico) AS contador,

		ISNULL(p.CitStrNombre, '') + ' ' + ISNULL(p.CitStrNombre2, '') + ' ' + 
ISNULL(p.CitStrApellido, '') + ' ' + ISNULL(p.CitStrApellido2, '') AS Nombre, 
ISNULL(CONVERT(varchar(20), IE.CitDateIngreso, 103), '')  AS FechaIngreso,
ISNULL(CAST(IE.CitDateIngreso AS time(0)), '') AS HoraIngreso, 
ISNULL(IE.HdiaStrProcedencia, '') AS HdiaStrProcedencia,
IE.HdiaNumEstatusActual, 
ISNULL(CONVERT(varchar(20), EE.HdiaDatFechaEgreso, 103), '') AS FechaEgreso, 
ISNULL(CAST(EE.HdiaDatFechaEgreso AS time(0)), ' ') AS HoraEgreso,
EE.HdiaNumEgresoEstus,
ISNULL(EE.HdiaStrObs, ' ') AS HdiaStrObs,
ISNULL(EE.HdiaStrReferido,' ') AS HdiaStrReferido, IE.CitNumEdad,
ISNULL(EE.HdiaStrDiagnostico, '') AS HdiaStrDiagnostico, 
ISNULL(EE.HdiaStrResultados, '') AS HdiaStrResultados, IE.CitDateIngreso, p.CitBitGenero

 FROM cita.Paciente AS p INNER JOIN
	Hdia.IngresoHdiaEmer AS IE ON p.CitStrRegMedico = IE.CitStrRegMedico LEFT OUTER JOIN
	Hdia.HdiaEgresoHdiaEmer AS EE ON p.CitStrRegMedico = EE.CitStrRegMedico

	 WHERE  IE.HdiaNumEstatusActual = $estatusNum )

	 select * from CONTADORFILAS  where contador=1
            
            
            
            ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }



        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}

