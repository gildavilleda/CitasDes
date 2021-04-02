<?php
error_reporting(0);
session_start();
require_once '../functions/Database.php';
require_once '../functions/FunEncEvolucion.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FunEncEvolucion();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


//$CitNumIngresoEmer = $_REQUEST['CitNumIngresoEmer'];
$HdiaNumEvoPacienteEmer = $_REQUEST['HdiaNumEvoPacienteEmer'];

$data = $Db->GetData("SELECT HdiaNumEvoPacienteEmer, HdiaStrDiagnostico, HdiaStrDatSubjetivos, HdiaStrDatObjetivos, HdiaStrOrdenesMedicas, EE.HdiaStrComentario, 
HdiaDatFechaRevision, CONVERT(varchar(20), HdiaDatFechaRevision, 103)as fecha, (select convert( time(0), HdiaDatFechaRevision, 108)) as hora,
HdiaDatFechaIngreso,HdiaStrHisopado,EE.CitNumIngresoEmer, CitNumCitaLab, EE.CitStrImpreClinica, HdiaStrDetalleHisopado, HdiaStrAntogeno, HdiaStrVentilacion, EE.SegStrUsuario, U.SegStrNomUsuario,
I.CitStrRegMedico, (P.CitStrNombre +' '+ ISNULL(P.CitStrNombre2, '')+' '+ P.CitStrApellido +' '+ ISNULL(P.CitStrApellido2,'')+ ' ' + ISNULL(P.CitStrApellidoCasada, '')) Nombre
FROM Hdia.HdiaEvoPacienteEmer  EE
JOIN seguridad.Usuario U ON U.SegStrUsuario = EE.SegStrUsuario
JOIN Hdia.IngresoHdiaEmer I ON I.CitNumIngresoEmer = EE.CitNumIngresoEmer
JOIN cita.Paciente P ON P.CitStrRegMedico = I.CitStrRegMedico

WHERE HdiaNumEvoPacienteEmer = $HdiaNumEvoPacienteEmer",
 $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayCIE'] = $Db->GetData("SELECT Evo.HdiaNumEvoPacienteEmer, lcie.HdiaStrCodCie, cie.HdiaStrDiagnostico, lcie.CitNumIngresoEmer
 from Hdia.ListadoCie10 as Lcie left join  
Hdia.Cie10 as Cie on cie.HdiaStrCodCie=Lcie.HdiaStrCodCie left join 
Hdia.HdiaEvoPacienteEmer as Evo on Evo.CitNumIngresoEmer=Lcie.CitNumIngresoEmer 
where Evo.HdiaNumEvoPacienteEmer= $HdiaNumEvoPacienteEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['ArrayEntrada'] = $Db->GetData("SELECT * FROM Hdia.IngresoHdiaEmer WHERE CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);

//$data[0]['NoAdmision'] = $No;

$rep->InfoEvolucion($data);
try {
    //ob_start();
    $rep->RenderEvolucion();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

