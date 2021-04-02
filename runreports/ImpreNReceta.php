<?php
error_reporting(0);
session_start();
require_once '../functions/Database.php';
require_once '../functions/FunNReceta.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FunNReceta();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}

if(isset($_REQUEST['RecetaEmer'])){
	$FarmNumEncUnidosis = $_REQUEST['HdiaNumEvoPacienteEmer']; // numero de unidosis 
	$NumEmergenciaE = $_REQUEST['NumEmergencia']; 

	$data = $Db->GetData("SELECT EU.FarmNumEncUnidosis, (P.CitStrNombre+' '+ ISNULL(p.CitStrNombre2, '')+' '+ P.CitStrApellido+' '+ ISNULL(P.CitStrApellido2, ' ')) Nombre, 
                        I.CitStrRegMedico, I.CitNumIngresoEmer 
                        FROM Farm.EncabezadoUnidosis EU 
                        JOIN Hdia.IngresoHdiaEmer I ON I.CitNumIngresoEmer = EU.CitNumIngresoEmer
                        JOIN Cita.Paciente P ON P.CitStrRegMedico = I.CitStrRegMedico where EU.FarmNumEncUnidosis = $FarmNumEncUnidosis", $_SESSION['dbUser'], $_SESSION['dbPass']);

	$data[0]['ArrayDetalles'] = $Db->GetData("SELECT * FROM Farm.vw_mostrarDetalleUni WHERE FarmNumEncUnidosis = $FarmNumEncUnidosis", $_SESSION['dbUser'], $_SESSION['dbPass']);

	$data[0]['ArrayNombreMedico'] = $Db->GetData("SELECT I.HdiaStrTratamiento AS OrdenesMedicas, U.SegStrNomUsuario AS NombreMedico FROM Hdia.IngresoHdiaEmer I JOIN seguridad.Usuario U ON U.SegStrUsuario = I.SegStrUsuarioMed WHERE I.CitNumIngresoEmer = ".$NumEmergenciaE."",$_SESSION['dbUser'], $_SESSION['dbPass']);
	
}else if(isset($_REQUEST['UCI'])){
	//hacer consultas hacia evolucion de intensivos
	$HdiaNumEvoPacienteEmer = $_REQUEST['HdiaNumEvoPacienteEmer']; // numero de unidosis 
	$NumEmergencia = $_REQUEST['NumEmergencia']; 
	$NumEvolucion = $_REQUEST['NumEvolucion'];

	$data = $Db->GetData("SELECT * FROM Farm.vw_mostraEncabezado WHERE FarmNumEncUnidosis = $HdiaNumEvoPacienteEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);

	$data[0]['ArrayDetalles'] = $Db->GetData("SELECT * FROM Farm.vw_mostrarDetalleUni WHERE FarmNumEncUnidosis = $HdiaNumEvoPacienteEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);

	$data[0]['ArrayNombreMedico'] = $Db->GetData("SELECT CH.IntenStrTextoChequeo AS OrdenesMedicas, U.SegStrNomUsuario AS NombreMedico FROM Inten.ChequeoMedico CH
		JOIN Inten.EvolucionChequeo EC ON EC.IntenNumIngresoEmer = CH.IntenNumIngresoEmer
		JOIN seguridad.Usuario U ON U.SegStrUsuario = EC.IntenStrUsuario
		WHERE EC.IntenNumIdEvoChequeo = $NumEvolucion AND CH.IntenNumIdCampGrupoD = 58",
		$_SESSION['dbUser'], $_SESSION['dbPass']);

}else{
	//hacer consultas hacia evolucion encamamiento 
	$HdiaNumEvoPacienteEmer = $_REQUEST['HdiaNumEvoPacienteEmer']; // numeor de unidosis
	$NumEmergencia = $_REQUEST['NumEmergencia'];
	$NumEvolucion = $_REQUEST['NumEvolucion'];


	$data = $Db->GetData("SELECT * FROM Farm.vw_mostraEncabezado WHERE FarmNumEncUnidosis = $HdiaNumEvoPacienteEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);

	$data[0]['ArrayDetalles'] = $Db->GetData("SELECT * FROM Farm.vw_mostrarDetalleUni WHERE FarmNumEncUnidosis = $HdiaNumEvoPacienteEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);

	$data[0]['ArrayNombreMedico'] = $Db->GetData("SELECT Evol.HdiaStrOrdenesMedicas AS OrdenesMedicas, U.SegStrNomUsuario AS NombreMedico FROM Hdia.HdiaEvoPacienteEmer Evol
		JOIN seguridad.Usuario U ON U.SegStrUsuario = Evol.SegStrUsuario
		where HdiaNumEvoPacienteEmer = $NumEvolucion", 
		$_SESSION['dbUser'], $_SESSION['dbPass']);
}



//$data[0]['ArrayEntrada'] = $Db->GetData("SELECT * FROM Hdia.IngresoHdiaEmer WHERE CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['NoAdmision'] = $No;

$rep->InfoNReceta($data);
try {
    //ob_start();
    $rep->RenderNReceta();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

