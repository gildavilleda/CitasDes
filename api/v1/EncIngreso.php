<?php

/**
 * Created by PhpStorm.
 * User: saju
 * Date: 04/04/2020
 * Time: 04:42
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

             $stmt = $Db->Sentencia("EXEC  Encam.Sp_AddIngreso ?, ?, ?, ?, ?, ?, ?");


             $stmt->bindParam(1, $_REQUEST{'EncNumEdad'});
             $stmt->bindParam(2, $_REQUEST{'EncDateTime'});
             $stmt->bindParam(3, $_REQUEST{'EncNumCama'});
             $stmt->bindParam(4, $_REQUEST{'EncStrEstado'});
             $stmt->bindParam(5, $_REQUEST{'EncNumIdServEncam'});
             $stmt->bindParam(6, $_REQUEST{'CitStrRegMedico'});
             $stmt->bindParam(7, $_REQUEST{'CitNumIngresoEmer'});


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

              $stmt = $Db->Sentencia("EXEC Encam.sp_ModIngreso ?, ?, ?");


              $stmt->bindParam(1, $_REQUEST{'EncNumIdPaciente'});
              $stmt->bindParam(2, $_REQUEST{'EncNumCama'});
              $stmt->bindParam(3, $_REQUEST{'EncNumIdServEncam'});


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

    case 'GET':
        //Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        if(isset($_REQUEST['EncNumIdServEncam'])){
        $EncNumIdServEncam=$_REQUEST['EncNumIdServEncam'];
        $data = $Db->GetData("select * from Encam.vw_mostBotonesEnca where EncNumIdServEncam = $EncNumIdServEncam", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['EncNumIdPaciente'])){
            $EncNumIdPaciente=$_REQUEST['EncNumIdPaciente'];
            $data = $Db->GetData("select * from Encam.vw_mostBotonesEnca where EncNumIdPaciente = $EncNumIdPaciente", $_SESSION['dbUser'], $_SESSION['dbPass']);
       }
        if(isset($_REQUEST['EncNumIdServEncam'])){
            $EncNumIdServEncam=$_REQUEST['EncNumIdServEncam'];
            $data = $Db->GetData("select * from Encam.vw_mostrarIngreso where EncNumIdServEncam = $EncNumIdServEncam and EncNumIdEgreso is null", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['RegistroMedico'])){
            $CitStrRegMedico=$_REQUEST['RegistroMedico'];
            $data = $Db->GetData("select * from Encam.vw_mostrarIngreso where CitStrRegMedico = $CitStrRegMedico", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['IngresoEmergencia'])){
            $CitNumIngresoEmer=$_REQUEST['IngresoEmergencia'];
            $data = $Db->GetData("select * from Encam.vw_mostrarIngreso where CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['EncNumIdServEncamlista'])){
            $EncNumIdServEncam=$_REQUEST['EncNumIdServEncamlista'];
            $data = $Db->GetData("SELECT I.CitStrRegMedico, P.CitStrNombre + ' ' + ISNULL(P.CitStrNombre2, '') 
            + ' ' + P.CitStrApellido + ' ' + ISNULL(P.CitStrApellido2, '') + ' ' + ISNULL(P.CitStrApellidoCasada, '') AS Nombre, 
			I.CitNumEdad,EI.EncNumIdServEncam, EI.EncNumCama,ISNULL(EV.HdiaStrVentilacion, 'N/A') HdiaStrVentilacion, E.EncNumIdEgreso,
			EI.Estado
FROM Hdia.IngresoHdiaEmer I 
            JOIN cita.Paciente P ON P.CitStrRegMedico = I.CitStrRegMedico
            JOIN Encam.Ingreso EI ON EI.CitNumIngresoEmer = I.CitNumIngresoEmer
            JOIN Hdia.HdiaEvoPacienteEmer EV ON EV.CitNumIngresoEmer = I.CitNumIngresoEmer
            LEFT JOIN Hdia.HdiaEgresoHdiaEmer EE ON EE.CitNumIngresoEmer = I.CitNumIngresoEmer
            LEFT JOIN Encam.Egreso E ON E.EncNumIdPaciente = EI.EncNumIdPaciente
            
            where (EV.HdiaNumEvoPacienteEmer) in
            
            (select MAX (EvP.HdiaNumEvoPacienteEmer) from Hdia.HdiaEvoPacienteEmer as EvP join
            Encam.Ingreso EI ON EI.CitNumIngresoEmer = EvP.CitNumIngresoEmer join
            cita.Paciente P ON P.CitStrRegMedico = EI.CitStrRegMedico GROUP BY EI.CitStrRegMedico ) and EI.EncNumIdServEncam =$EncNumIdServEncam and E.EncNumIdEgreso is null AND EI.Estado = 1
            
            ORDER BY EI.CitStrRegMedico", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['CitNumIngresoEmer'])){
            $CitNumIngresoEmer=$_REQUEST['CitNumIngresoEmer'];
            $data = $Db->GetData("select * from Encam.vw_mostrarSolEncamamiento where CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['EncNumServVentilador'])){
            $EncNumServVentilador=$_REQUEST['EncNumServVentilador'];
            $data = $Db->GetData("SELECT IE.CitStrRegMedico, (ISNULL(P.CitStrNombre,'')+' '+ ISNULL(P.CitStrNombre2,'')+' '+ ISNULL(P.CitStrApellido,'')+' '+ ISNULL(P.CitStrApellido2,'')) Nombre, EncModoVentilacion FROM Encam.IngresoVentilador  I
JOIN Hdia.IngresoHdiaEmer IE ON IE.CitNumIngresoEmer = I.CitNumIngresoEmer
JOIN CITA.Paciente P ON P.CitStrRegMedico = IE.CitStrRegMedico
WHERE EncStrEstado = 'SI' AND EncNumServVentilador = $EncNumServVentilador", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }


        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}
