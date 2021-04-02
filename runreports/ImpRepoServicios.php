<?php
//error_reporting(0);
session_start();
require_once '../functions/Database.php';
require_once '../functions/FunRepoEnc.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FunRepoEnc();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}

$EncNumIdServEncam = $_REQUEST['EncNumIdServEncam'];
$Tipo = $_REQUEST['Tipo'];
if($Tipo == 'cama'){
    $data = $Db->GetData("SELECT *, (select count(*) Ocupadas  from Encam.Ingreso I
                               LEFT JOIN Encam.Egreso E ON I.EncNumIdPaciente = E.EncNumIdPaciente
                               JOIN Encam.ServicioEncamamiento SE ON SE.EncNumIdServEncam = I.EncNumIdServEncam 
                               WHERE E.EncNumIdEgreso is null AND I.EncNumIdServEncam = $EncNumIdServEncam and EncStrEstado = 'SI'
                                GROUP BY I.EncNumIdServEncam, SE.EncCantidadCamas, SE.EncStrNombre ) as ocupados
                                FROM Encam.ServicioEncamamiento SE WHERE  SE.EncNumIdServEncam = $EncNumIdServEncam", $_SESSION['dbUser'], $_SESSION['dbPass']);
    $data[0]['ArrayDatos'] = $Db->GetData("SELECT * FROM Encam.vw_mostAsignacionVentiladores WHERE EncNumIdEgreso IS NULL AND  EncNumIdServEncam = $EncNumIdServEncam", $_SESSION['dbUser'], $_SESSION['dbPass']);
}else{
    $data = $Db->GetData("	SELECT EncNumServVentilador EncNumIdServEncam, EncStrSerVentilador EncStrNombre, EncEstado, EncNumVentiladores EncCantidadCamas,(select count(*) Ocupadas  from Encam.IngresoVentilador I
                                                        LEFT JOIN Encam.Egreso E ON I.CitNumIngresoEmer = E.EncNumIdPaciente
                                                        JOIN Encam.Ventiladores SE ON SE.EncNumServVentilador = I.EncNumServVentilador 
                                                        WHERE E.EncNumIdEgreso is null AND I.EncNumServVentilador = $EncNumIdServEncam and EncStrEstado = 'SI'
                                                         GROUP BY I.EncNumServVentilador, SE.EncNumVentiladores, SE.EncStrSerVentilador 
                                                            ) as ocupados
                                                            FROM Encam.Ventiladores SE WHERE  SE.EncNumServVentilador = $EncNumIdServEncam", $_SESSION['dbUser'], $_SESSION['dbPass']);
    $data[0]['ArrayDatos'] = $Db->GetData("SELECT IE.CitStrRegMedico, IE.CitNumEdad EncNumEdad, (ISNULL(P.CitStrNombre,'')+' '+ ISNULL(P.CitStrNombre2,'')+' '+ ISNULL(P.CitStrApellido,'')+' '+ ISNULL(P.CitStrApellido2,'')) Nombre, EncModoVentilacion FROM Encam.IngresoVentilador  I
JOIN Hdia.IngresoHdiaEmer IE ON IE.CitNumIngresoEmer = I.CitNumIngresoEmer
JOIN CITA.Paciente P ON P.CitStrRegMedico = IE.CitStrRegMedico
WHERE EncStrEstado = 'SI' AND EncNumServVentilador=$EncNumIdServEncam", $_SESSION['dbUser'], $_SESSION['dbPass']);
}

$rep->InfoRepoEnc($data);
try {
    //ob_start();
    $rep->RenderRepoEnc();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    //$html2pdf- >clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}


