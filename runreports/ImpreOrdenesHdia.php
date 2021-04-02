<?php
error_reporting(0);
session_start();
require_once '../functions/Database.php';
require_once '../functions/FnImpreOrdenesHdia.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FnImpreOrdenesHdia();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


$HdiaNumProgQuirg = $_REQUEST['HdiaNumProgQuirg'];
$RegMedico = $_REQUEST['RegMedico'];




$data = $Db->GetData("SELECT * FROM Hdia.vw_EncabezadosHdia WHERE CitStrRegMedico = '" . $RegMedico . "'", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayOrdenes'] = $Db->GetData("SELECT * FROM Hdia.vw_mostrarOrdenesHdia WHERE numProgQuirurgica = '" . $HdiaNumProgQuirg . "'", $_SESSION['dbUser'], $_SESSION['dbPass']);



$rep->InfoOrdenesHdia($data);
try {
    //ob_start();
    $rep->RenderOrdenesHdia();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
