<?php
/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 30/10/2019
 * Time: 14:35 PM
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

            $stmt = $Db->Sentencia("EXEC Hdia.sp_agProgramacion ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumEspecialidad'});
            $stmt->bindParam(2, $_REQUEST{'HdiaDatFecha'});
            $stmt->bindParam(3, $_REQUEST{'HdiaDatHora'});
            $stmt->bindParam(4, $_REQUEST{'CitStrRegMedico'});
            $stmt->bindParam(5, $_REQUEST{'HdiaProcedimiento'});
            $stmt->bindParam(6, $_REQUEST{'HdiaNumTurno'});
            $stmt->bindParam(7, $_REQUEST{'HdiaNumQuirofano'});
            $stmt->bindParam(8, $_REQUEST{'HdiaDiagIngreso'});
            $stmt->bindParam(9, $_REQUEST{'HdiaTiemEstimado'});
            $stmt->bindParam(10, $_REQUEST{'HdiaObsCirujano'});
            $stmt->bindParam(11, $_REQUEST{'HdiaCharValoracion'});
            $stmt->bindParam(12, $_REQUEST{'Estado'});
            $stmt->bindParam(13, $_REQUEST{'Edad'});


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

            if(isset($_REQUEST['HdiaObsAnestesia'])){
                $stmt = $Db->Sentencia("EXEC Hdia.sp_ModEstadoProgramacion ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'HdiaNumProgQuirg'});
                $stmt->bindParam(2, $_REQUEST{'HdiaNumEstados'});
                $stmt->bindParam(3, $_REQUEST{'HdiaObsAnestesia'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            }

            if(isset($_REQUEST['HdiaObsFinal'])){
                $stmt = $Db->Sentencia("EXEC Hdia.sp_ModEstadoProgramacionFinal ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'HdiaNumProgQuirg'});
                $stmt->bindParam(2, $_REQUEST{'HdiaNumEstados'});
                $stmt->bindParam(3, $_REQUEST{'HdiaObsFinal'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            }



            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;
    case 'DELETE':
//Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Hdia.Sp_ElimProgQuirurg ?");

            $stmt->bindParam(1, $_REQUEST{'HdiaNumProgQuirg'});

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

        if (isset($_REQUEST['mostQ'])){
            $data = $Db->GetData("SELECT * FROM Hdia.vw_MostrarQuirofanos", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if (isset($_REQUEST['HdiaNumQuirofano'])){
            $Quirofano = $_REQUEST['HdiaNumQuirofano'];
            $Especialidad = $_REQUEST['CitNumEspecialidad'];
            $data = $Db->GetData("SELECT [HdiaNumDiasQuirofanos]
                                                  ,[HdiaNumDiaBloqueado]
                                                  ,[HdiaNumQuirofano]
                                                  ,[CitNumEspecialidad]
                                              FROM [Hdia].[DiasQuirofanos]  WHERE HdiaNumQuirofano = $Quirofano AND CitNumEspecialidad = $Especialidad", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if (isset($_REQUEST['mostTurno'])){
            $Quirofano = $_REQUEST['HdiaNumQuirofano'];
            $Especialidad = $_REQUEST['CitNumEspecialidad'];
            $Fecha = $_REQUEST['HdiaDatFecha'];
            $data = $Db->GetData("SELECT HdiaNumProgQuirg
                                              ,CitNumEspecialidad
                                              ,HdiaDatFecha
                                              ,HdiaDatHora
                                              ,CitStrRegMedico
                                              ,HdiaProcedimiento
                                              ,HdiaNumTurno
                                              ,HdiaNumQuirofano
                                              ,HdiaNumEstados
                                              ,HdiaDatCreacion
                                              ,HdiaObsAnestesia
                                              , ISNULL(HdiaDiagIngreso, '') HdiaDiagIngreso
                                              ,ISNULL(HdiaTiemEstimado, '') HdiaTiemEstimado
                                              ,ISNULL(HdiaObsCirujano , '') HdiaObsCirujano
                                              ,ISNULL(HdiaCharValoracion, 0) HdiaCharValoracion
                                              ,HdiaEstatus
                                               FROM Hdia.programacionQuirurgica WHERE HdiaNumQuirofano = $Quirofano and  
                                      CitNumEspecialidad= $Especialidad and  HdiaDatFecha = '$Fecha' and HdiaEstatus = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['mostProg'])){
            $Quirofano = $_REQUEST['HdiaNumQuirofano'];
            $Especialidad = $_REQUEST['CitNumEspecialidad'];
            $Fecha = $_REQUEST['HdiaDatFecha'];
            $data = $Db->GetData("SELECT * FROM  Hdia.vw_MostProgramaciones WHERE HdiaNumQuirofanos = $Quirofano and  
                                      CitNumEspecialidad= $Especialidad and  HdiaDatFecha = '$Fecha' and (HdiaNumEstado = 3 or HdiaNumEstado = 4 or HdiaNumEstado = 5) and HdiaEstatus = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['mostSuspendidas'])){

            $data = $Db->GetData("SELECT * FROM  Hdia.vw_MostProgramaciones WHERE HdiaNumEstado = 2 AND HdiaEstatus = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        if(isset($_REQUEST['mostEnf'])){
            $Fecha = $_REQUEST['HdiaDatFecha'];
            $data = $Db->GetData("SELECT * FROM  Hdia.vw_MostProgramaciones WHERE HdiaDatFecha = '$Fecha' and HdiaEstatus = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['consolidado'])){
            $Fecha = $_REQUEST['HdiaDatFecha'];
            $data = $Db->GetData("SELECT * FROM  Hdia.vw_MostProgramaciones WHERE HdiaDatFecha = '$Fecha' and HdiaEstatus = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['mostAgeAnestesia'])){
            $Fecha = $_REQUEST['HdiaDatFecha'];
            $data = $Db->GetData("SELECT * FROM  Hdia.vw_MostProgramaciones WHERE HdiaDatFecha = '$Fecha' and HdiaEstatus = 1", $_SESSION['dbUser'], $_SESSION['dbPass']); //Se solicito que solo mostrara los quenecesitaban anestecia pero despues se cambio por lo que se deja separado de mostProg por si lo vuleven a pedir
        }


        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}