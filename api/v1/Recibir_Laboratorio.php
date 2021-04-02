<?php
/**
 * Created by PhpStorm.
 * User: Marisol Camey
 * Date: 05/02/2020
 * Time: 09:51 AM
 */
require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
require_once '../../functions/WhereDinamic.php';
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
//Procedimiento para agregar o modificar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Sp_obtener_resultados_lab ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumCita'});




            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        }  catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }

        break;


    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        $Wh = new WhereDinamic();

        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
       // if (isset($_REQUEST['CitNumCita']))
            //$Wh->addAtributos('CitNumCita', ' = ',
                $CitNumCita = $_REQUEST['CitNumCita'];

        $data = $Db->GetData("SELECT Paci.CitStrRegMedico, Paci.CitStrNombre, Cor.CitNumCita,
 substring (LabRes.col3, charindex('^',col3)+1, len (LabRes.col3)),
 LabRes.col4,LabRes.col5



FROM cita.Paciente as Paci INNER JOIN 
cita.Core as Cor on Paci.CitStrRegMedico= Cor.CitStrRegMedico inner JOIN


--dbo.datos_prueba as Dpru on Cor.CitNumCita=Dpru.CitNumCita
dbo.Laboratorio_datos_res as LabRes on Cor.CitNumCita=LabRes.CitNumCita
where Cor.CitNumCita='$CitNumCita' and LabRes.col1='Inicia tira de resultados'" . $Wh->strWhere(), $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}