<?php

/**
 * Created by PhpStorm.
 * User: mcamey
 * Date: 28/04/2020
 * Time: 00:10
 */
require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
session_start([ 'cookie_lifetime' => 86400]);

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
    /*
    case 'POST':
        //Procedimiento para agregar

        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Encam.sp_agEgreso ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'EncStrMedicoSalida'});
            $stmt->bindParam(2, $_REQUEST{'EncDateTime'});
            $stmt->bindParam(3, $_REQUEST{'EncStrCie_10'});
            $stmt->bindParam(4, $_REQUEST{'EncStrDiagnositco'});
            $stmt->bindParam(5, $_REQUEST{'EncStrObservaciones'});
            $stmt->bindParam(6, $_REQUEST{'EncStrTipoEgreso'});
            $stmt->bindParam(7, $_REQUEST{'EncNumIdPaciente'});
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

            $stmt = $Db->Sentencia("EXEC Encam.sp_ModEgreso ?, ?, ?, ?, ?, ?, ?, ?");


            $stmt->bindParam(1, $_REQUEST{'EncNumIdEgreso'});
            $stmt->bindParam(2, $_REQUEST{'EncStrMedicoSalida'});
            $stmt->bindParam(3, $_REQUEST{'EncDateTime'});
            $stmt->bindParam(4, $_REQUEST{'EncStrCie_10'});
            $stmt->bindParam(5, $_REQUEST{'EncStrDiagnositco'});
            $stmt->bindParam(6, $_REQUEST{'EncStrObservaciones'});
            $stmt->bindParam(7, $_REQUEST{'EncStrTipoEgreso'});
            $stmt->bindParam(8, $_REQUEST{'EncNumIdPaciente'});



            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;
        {
        }

      case 'DELETE':
    //Procedimiento para Eliminar
         try {
             $Db = new Database();
             if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                 echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                 exit(0);
             }

             $stmt = $Db->Sentencia("EXEC Hdia.Sp_ElimDatAnestesia ?");

             $stmt->bindParam(1, $_REQUEST{'HdiaNumAnestesia'});

             $stmt->execute();
             $data = $stmt->fetchAll();
             $data = $data[0];
             echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
             $stmt->closeCursor();
         } catch (PDOException $p) {
             echo $ObjectJson->Json(0, $p->getMessage(), null);
         }
         break;
    */
    case 'GET':
        //Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['RepGeneral'])){
            $data = $Db->GetData("select * from Hdia.vw_EstadisticaPacientesCovid", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['RepEdad'])){
            $data = $Db->GetData("select * from Hdia.vw_EstadisticaEdadC19", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['RepEdadFallecido'])){
            $data = $Db->GetData("select * from Hdia.vw_EstadisticaEdadC19_Fallecido", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['RepEdadNegativo'])){
            $data = $Db->GetData("select * from Hdia.vw_EstadisticaEdadC19_Negativo", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['RepEdadRecuperado'])){
            $data = $Db->GetData("select * from Hdia.vw_EstadisticaEdadC19_Recuperado", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['RepEdadTraslado'])){
            $data = $Db->GetData("select * from Hdia.vw_EstadisticaEdadC19_Traslado", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['RepGenero'])){
            $data = $Db->GetData("select * from Hdia.vw_EstadisticaGeneroC19", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['RepEgresos'])){
            $data = $Db->GetData("select * from Hdia.vw_EstdisticaEgresos", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['cantOcupados'])){
                    $servicio = $_REQUEST['ServicioId'];
                    $data = $Db->GetData("SELECT *, (select count(*) Ocupadas  from Encam.Ingreso I
                                                        LEFT JOIN Encam.Egreso E ON I.EncNumIdPaciente = E.EncNumIdPaciente
                                                        JOIN Encam.ServicioEncamamiento SE ON SE.EncNumIdServEncam = I.EncNumIdServEncam 
                                                        WHERE E.EncNumIdEgreso is null AND I.EncNumIdServEncam = $servicio and EncStrEstado = 'SI' and Estado = 1
                                                         GROUP BY I.EncNumIdServEncam, SE.EncCantidadCamas, SE.EncStrNombre 
                                                            ) as ocupados
                                                            FROM Encam.ServicioEncamamiento SE WHERE  SE.EncNumIdServEncam = $servicio", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['infoEncam'])){
            $servicio = $_REQUEST['ServicioId'];
            $data = $Db->GetData("SELECT * FROM Encam.ServicioEncamamiento SE WHERE  SE.EncNumIdServEncam = $servicio", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['cantVentiladorOcupados'])){
                    $servicio = $_REQUEST['ServicioId'];
                    $data = $Db->GetData("SELECT *, (select count(*) Ocupadas  from Encam.IngresoVentilador I
                                                        LEFT JOIN Encam.Egreso E ON I.CitNumIngresoEmer = E.EncNumIdPaciente
                                                        JOIN Encam.Ventiladores SE ON SE.EncNumServVentilador = I.EncNumServVentilador 
                                                        WHERE E.EncNumIdEgreso is null AND I.EncNumServVentilador = $servicio and EncStrEstado = 'SI'
                                                         GROUP BY I.EncNumServVentilador, SE.EncNumVentiladores, SE.EncStrSerVentilador 
                                                            ) as ocupados
                                                            FROM Encam.Ventiladores SE WHERE  SE.EncNumServVentilador = $servicio", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }



        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}

