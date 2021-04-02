<?php
error_reporting(0);
session_start();
require_once '../functions/Database.php';
require_once '../functions/FnImpreOperHdia.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FnImpreOperHdia();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$HdiaNumProgQuirg = $_REQUEST['HdiaNumProgQuirg'];





$data = $Db->GetData("SELECT PQ.HdiaNumProgQuirg,(ISNULL(P.CitStrNombre, '') +' '+ ISNULL(P.CitStrNombre2, '') +' '+ ISNULL(P.CitStrApellido, '') +' '+ ISNULL(P.CitStrApellido2, '') +' '+ ISNULL(P.CitStrApellidoCasada, '')) Nombre, 
                           P.CitStrRegMedico, PQ.HdiaNumEdad, PQ.HdiaDatFecha, PQ.HdiaDatHora, PQ.HdiaDiagIngreso,  HdiaProcedimiento,
                           DC.HdiaStrProcRealizado, U.SegStrNomUsuario, ISNULL(tAnestesia.SegStrNomUsuario, 'No Asignado') Anestesiologo,
                           ISNULL(tInstrumentista.SegStrNomUsuario, 'No Asignado') Instrumentista, ISNULL(tCirculante.SegStrNomUsuario, 'No Asignado') Circulante,
                           DC.HdiaStrDiagnostico
                           FROM cita.Paciente P
                           JOIN Hdia.programacionQuirurgica PQ ON P.CitStrRegMedico = PQ.CitStrRegMedico
                           JOIN Hdia.DatCirujano DC ON DC.HdiaNumProgQuirg = PQ.HdiaNumProgQuirg
                           JOIN seguridad.Usuario U ON U.SegStrUsuario = DC.HdiaStrCirujano 
                           LEFT JOIN Hdia.Anestesia A ON A.HdiaNumProgQuirg = PQ.HdiaNumProgQuirg
                           LEFT JOIN (SELECT SegStrUsuario, SegStrNomUsuario FROM seguridad.usuario) as tAnestesia ON tAnestesia.SegStrUsuario = A.HdiaNomAnestesiologo
                           LEFT JOIN Hdia.Enfermeria E ON E.HdiaNumProgQuirg = PQ.HdiaNumProgQuirg
                           LEFT JOIN (SELECT SegStrUsuario, SegStrNomUsuario, SegNumUsuario FROM seguridad.usuario) as tInstrumentista ON E.HdiaNumCirculante = tInstrumentista.SegNumUsuario
                           LEFT JOIN (SELECT SegStrUsuario, SegStrNomUsuario, SegNumUsuario FROM seguridad.usuario) as tCirculante ON E.HdiaNumInstrumentista = tCirculante.SegNumUsuario WHERE PQ.HdiaNumProgQuirg = '" . $HdiaNumProgQuirg . "'", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayAnestesia'] = $Db->GetData("SELECT * FROM Hdia.AnestasiaAplicada WHERE HdiaNumProgQuir = '" . $HdiaNumProgQuirg . "'", $_SESSION['dbUser'], $_SESSION['dbPass']);



$rep->InfoOperHdia($data);
try {
    //ob_start();
    $rep->RenderOperHdia();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
