<?php
//error_reporting(0);
session_start();
require_once '../functions/Database.php';
require_once '../functions/FuncNotEnf.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FuncNotEnf();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}

if(isset($_REQUEST['VEmergencia'])) {
    $HdiaIdNotaEnfermeria = $_REQUEST['NotaEmergencia']; // numero de nota de enfermeria
    $NumEmergenciaEmer = $_REQUEST['NumEmergencia'];

    $data = $Db->GetData("select IE.CitStrRegMedico, (P.CitStrNombre +' '+ ISNULL(P.CitStrNombre2, '')+' '+ P.CitStrApellido +' '+ ISNULL(P.CitStrApellido2,'')+ ' ' +
		ISNULL(P.CitStrApellidoCasada, '')) as Nombre, CitStrIngA as Servicio, 
		NE.HdiaIdNotaEnfermeria, NE.HdiaNotaEnfermeria, CONVERT(varchar(20),
		NE.HdiaDateTimeNota, 103)as fecha, 
		(select convert( time(0), NE.HdiaDateTimeNota, 108)) as hora, U.SegNumUsuario,
		U.SegStrNomUsuario, IE.CitNumIngresoEmer, NE.HdiaNumEvoPacienteEmer, NE.CitNumIngresoEmer, IE.CitNumNoAdmision as Cama
from Hdia.NotaEnfermeria NE join
				Hdia.IngresoHdiaEmer IE ON NE.CitNumIngresoEmer = IE.CitNumIngresoEmer 
				and NE.HdiaNumEvoPacienteEmer = IE.CitNumIngresoEmer join
				cita.Paciente P ON P.CitStrRegMedico = IE.CitStrRegMedico join
				seguridad.Usuario U on U.SegStrUsuario = NE.HdiaStrEnfermero
where	NE.HdiaIdNotaEnfermeria = $HdiaIdNotaEnfermeria", $_SESSION['dbUser'], $_SESSION['dbPass']);

} else if(isset($_REQUEST['UCI'])){
    //hacer consultas hacia evolucion de intensivos
    $HdiaIdNotaEnfermeria = $_REQUEST['NotaEmergencia']; // numero de unidosis
    $NumEmergencia = $_REQUEST['NumEmergencia'];
    $NumEvolucionIn = $_REQUEST['NumEvolucion'];
    $data = $Db->GetData("SELECT NE.HdiaIdNotaEnfermeria, NE.HdiaNotaEnfermeria, P.CitStrRegMedico, (P.CitStrNombre
		+' '+ ISNULL(P.CitStrNombre2, '')+' '+ P.CitStrApellido +' '+ 
		ISNULL(P.CitStrApellido2,'')+ ' ' +ISNULL(P.CitStrApellidoCasada, '')) as Nombre, 
		EvoC.IntenNumIdEvoChequeo, NE.HdiaStrEnfermero, U.SegStrNomUsuario,
		CONVERT(varchar(20),NE.HdiaDateTimeNota, 103)as fecha, 
		(select convert( time(0), NE.HdiaDateTimeNota, 108)) as hora, IE.CitNumIngresoEmer,
		Serv.EncNumIdServEncam, Serv.EncStrNombre as Servicio, I.EncNumCama as Cama
from	Hdia.NotaEnfermeria NE join	
			Inten.EvolucionChequeo EvoC on NE.HdiaNumEvoPacienteEmer = EvoC.IntenNumIdEvoChequeo join
			cita.Paciente P on P.CitStrRegMedico = EvoC.IntenStrRegMedico 
			join seguridad.Usuario U on U.SegStrUsuario = NE.HdiaStrEnfermero 
			join Hdia.IngresoHdiaEmer IE on EvoC.IntenNumIngresoEmer = IE.CitNumIngresoEmer
			join Encam.Ingreso I on IE.CitNumIngresoEmer = I.CitNumIngresoEmer
			left join Encam.ServicioEncamamiento Serv on I.EncNumIdServEncam = Serv.EncNumIdServEncam
where	NE.HdiaIdNotaEnfermeria = $HdiaIdNotaEnfermeria and EvoC.IntenNumIdEvoChequeo = $NumEvolucionIn", $_SESSION['dbUser'], $_SESSION['dbPass']);

}else{
    //hacer consultas hacia evolucion de intensivos
    $HdiaIdNotaEnfermeria = $_REQUEST['HdiaNumEvoPacienteEmer']; // numero de unidosis
    $NumEmergencia = $_REQUEST['NumEmergencia'];
    $NumEvolucion = $_REQUEST['NumEvolucion'];
    $data = $Db->GetData("select  ne.HdiaNumEvoPacienteEmer, (P.CitStrNombre +' '+ ISNULL(P.CitStrNombre2, '')+' '+ P.CitStrApellido
		+' '+ ISNULL(P.CitStrApellido2,'')+ ' ' + ISNULL(P.CitStrApellidoCasada, '')) as Nombre,
		NE.HdiaIdNotaEnfermeria, NE.HdiaNotaEnfermeria, CONVERT(varchar(20),
		NE.HdiaDateTimeNota, 103)as fecha, 
		(select convert( time(0), NE.HdiaDateTimeNota, 108)) as hora, U.SegNumUsuario,
		U.SegStrNomUsuario, Serv.EncNumIdServEncam, Serv.EncStrNombre as Servicio, I.EncNumCama as Cama, P.CitStrRegMedico
from	Hdia.NotaEnfermeria ne inner join
				Hdia.HdiaEvoPacienteEmer evo on ne.HdiaNumEvoPacienteEmer = evo.HdiaNumEvoPacienteEmer
				join Hdia.IngresoHdiaEmer ie on ie.CitNumIngresoEmer = evo.CitNumIngresoEmer
				join cita.Paciente P on P.CitStrRegMedico = ie.CitStrRegMedico
				join Encam.Ingreso I on I.CitNumIngresoEmer = ie.CitNumIngresoEmer
				join Encam.ServicioEncamamiento Serv on I.EncNumIdServEncam = Serv.EncNumIdServEncam
				join seguridad.Usuario u on ne.HdiaStrEnfermero = u.SegStrUsuario
    where	NE.HdiaIdNotaEnfermeria = $HdiaIdNotaEnfermeria and evo.HdiaNumEvoPacienteEmer = $NumEvolucion", $_SESSION['dbUser'], $_SESSION['dbPass']);
}

$rep->InfoNotEnf($data);
try {
    //ob_start();
    $rep->RenderNotEnf();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    //$html2pdf- >clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

