<?php
error_reporting(0);
session_start();
require_once '../functions/Database.php';
require_once '../functions/FunEvoIntensivo.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FunEvoIntensivo();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}


//$CitNumIngresoEmer = $_REQUEST['CitNumIngresoEmer'];
$IntenNumIdEvoChequeo = $_REQUEST['IntenNumIdEvoChequeo'];
$IntenIdGrupo = $_REQUEST['IntenNumIdGrupo'];

$data =  $Db->GetData("SELECT EC.IntenDate,EC.IntenNumIdEvoChequeo, EC.IntenNumIngresoEmer, EC.IntenStrRegMedico, US.SegStrNomUsuario, 
        (P.CitStrNombre +' '+ ISNULL(P.CitStrNombre2, '')+' '+ P.CitStrApellido +' '+ ISNULL(P.CitStrApellido2,'')+ ' ' + ISNULL(P.CitStrApellidoCasada, '')) Nombre 
		FROM Inten.EvolucionChequeo as EC INNER JOIN
        cita.Paciente AS P ON EC.IntenStrRegMedico=P.CitStrRegMedico inner join
		seguridad.Usuario as US ON US.SegStrUsuario=EC.IntenStrUsuario
        where IntenNumIdEvoChequeo=$IntenNumIdEvoChequeo", $_SESSION['dbUser'], $_SESSION['dbPass']);


$data[0]['ArrayInten'] = $Db->GetData("SELECT CG.IntenStrCampDescripcion,CH.IntenNumIdCampGrupoD, Ch.IntenStrTextoChequeo, GD.IntenStrDescripcion
from inten.ChequeoMedico as Ch left join
		inten.EvolucionChequeo as EC on EC.IntenNumIdEvoChequeo=Ch.IntenNumIdEvoCheq left join
		inten.CampoGrupoDiagnostico as CG on CG.IntenNumIdCampGrupoD=Ch.IntenNumIdCampGrupoD left join
		Inten.GrupoDiagnostico as GD on GD.IntenNumIdGrupo = CG.IntenNumIdGrupo
		where EC.IntenNumIdEvoChequeo=$IntenNumIdEvoChequeo ",
    $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayCIE'] = $Db->GetData("SELECT InEm.CitNumIngresoEmer , lcie.HdiaStrCodCie, cie.HdiaStrDiagnostico
 from Hdia.ListadoCie10 as Lcie left join  
Hdia.Cie10 as Cie on cie.HdiaStrCodCie=Lcie.HdiaStrCodCie left join 
Hdia.IngresoHdiaEmer as InEm on InEm.CitNumIngresoEmer=Lcie.CitNumIngresoEmer left join
Inten.EvolucionChequeo as EC on EC.IntenNumIdEvoChequeo = Lcie.IntenNumChequeo
where Lcie.IntenNumChequeo=$IntenNumIdEvoChequeo", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayGrupoDiag'] = $Db->GetData("  SELECT IntenNumIdGrupo,IntenStrDescripcion from Inten.GrupoDiagnostico", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayGlasgow'] = $Db->GetData("SELECT GG.IntenStrDescripcion, EG.IntenNumValorEscala from inten.EscalaGlasgow as EG left join
  inten.GrupoGlasgow as GG on GG.IntenNumGrupoGlasgow= EG.IntenNumGrupoGlasgow left join
  Inten.Glasgow as G on G.IntenIdEscala= EG.IntenIdEscala left join
  Inten.EvolucionChequeo as EC on EC.IntenNumIdEvoChequeo=G.IntenIdEvoChequeo
  where G.IntenIdEvoChequeo=$IntenNumIdEvoChequeo", $_SESSION['dbUser'], $_SESSION['dbPass']);





//$data[0]['NoAdmision'] = $No;

$rep->InfoEvolucionInten($data);
try {
    //ob_start();
    $rep->RenderEvolucionInten();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}


