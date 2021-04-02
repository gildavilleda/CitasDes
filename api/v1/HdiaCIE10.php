<?php

/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 06/05/2020
 * Time: 11:14 A.M.
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
/*
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }
            if (isset ($_REQUEST["CitNumIngresoEmer"])){
                $stmt = $Db->Sentencia("EXEC Farm.sp_AgEncabezadoUnidosis ?, ?, ?");
                $stmt->bindParam(1, $_REQUEST{'CitNumIngresoEmer'});
                $stmt->bindParam(2, $_REQUEST{'EncNumIdServEncam'});
                $stmt->bindParam(3, $_REQUEST{'EncNumCama'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);

                $stmt->closeCursor();
            }

            if (isset ($_REQUEST["FarmNumEncUnidosis"])){
                $stmt = $Db->Sentencia("EXEC Farm.sp_AgDetalleUnidosis ?, ?, ?,?,?,?,?,?,?,?");
                $stmt->bindParam(1, $_REQUEST{'AlmacNumCodPresentInsu'});
                $stmt->bindParam(2, $_REQUEST{'FarmNumCantDosis'});
                $stmt->bindParam(3, $_REQUEST{'FarmStrDosisMedida'});
                $stmt->bindParam(4, $_REQUEST{'FarmStrVia'});
                $stmt->bindParam(5, $_REQUEST{'FarmNumFrecuencia'});
                $stmt->bindParam(6, $_REQUEST{'FarmStrUnidadTiempo'});
                $stmt->bindParam(7, $_REQUEST{'FarmDateDiaDar'});
                $stmt->bindParam(8, $_REQUEST{'FarmNumCantidadMedicamento'});
                $stmt->bindParam(9, $_REQUEST{'FarmNumEncUnidosis'});
                $stmt->bindParam(10, $_REQUEST{'AlmcNumCodInsumoo'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);

                $stmt->closeCursor();
            }


        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
*/
        break;

    case 'PUT':
        //Procedimiento para modificar
     /*   try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }
            if (isset($_REQUEST["FarmNumEncUnidosis"])){
                $stmt = $Db->Sentencia("EXEC Farm.sp_ModEncabezadoUnidosis ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'FarmNumEncUnidosis'});
                $stmt->bindParam(2, $_REQUEST{'CitNumIngresoEmer'});
                $stmt->bindParam(3, $_REQUEST{'EncNumIdServEncam'});
                $stmt->bindParam(4, $_REQUEST{'EncNumCama'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            }
            if (isset($_REQUEST["FarmNumDetUnidosis"])){
                $stmt = $Db->Sentencia("EXEC Farm.sp_ModDetalleUnidosis ?, ?, ?, ?,? ,?, ?, ?, ?,?");

                $stmt->bindParam(1, $_REQUEST{'FarmNumDetUnidosis'});
                $stmt->bindParam(2, $_REQUEST{'AlmacNumCodPresentInsu'});
                $stmt->bindParam(3, $_REQUEST{'FarmNumCantDosis'});
                $stmt->bindParam(4, $_REQUEST{'FarmStrDosisMedida'});
                $stmt->bindParam(5, $_REQUEST{'FarmStrVia'});
                $stmt->bindParam(6, $_REQUEST{'FarmNumFrecuencia'});
                $stmt->bindParam(7, $_REQUEST{'FarmStrUnidadTiempo'});
                $stmt->bindParam(8, $_REQUEST{'FarmDateDiaDar'});
                $stmt->bindParam(9, $_REQUEST{'FarmNumCantidadMedicamento'});
                $stmt->bindParam(10, $_REQUEST{'FarmNumEncUnidosis'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            }


        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
     */
        break;
    case 'DELETE':
//Procedimiento para Eliminar
   /*     try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC  ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumEncUnidosis'});

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
   */
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        if(isset($_REQUEST['MostEvol'])){
            $CitNumIngresoEmer = $_REQUEST['CitNumIngresoEmer'];
            $data = $Db->GetData("SELECT * FROM Hdia.HdiaEvoPacienteEmer WHERE CitNumIngresoEmer = $CitNumIngresoEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['CodigoCie'])){
            $HdiaCodigoCie = $_REQUEST['CodigoCie'];
            $data = $Db->GetData("SELECT * FROM Hdia.Cie10 WHERE HdiaStrCodCie = '$HdiaCodigoCie'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['GrupoCie'])){
            $HdiaGrupoCie = $_REQUEST['GrupoCie'];

            $data = $Db->GetData("SELECT * FROM Hdia.Cie10 WHERE HdiaStrGrupo ='$HdiaGrupoCie' ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['NumeroDiagnosticoCie'])){
            $HdiaNumDiagCie = $_REQUEST['NumeroDiagnosticoCie'];

            $data = $Db->GetData("SELECT * FROM  Hdia.Cie10 WHERE HdiaNumDiagnostico = '$HdiaNumDiagCie'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['DiagnosticoCie'])){
            $HdiaDiagnosticoCie = $_REQUEST['DiagnosticoCie'];

            $data = $Db->GetData("SELECT * FROM Hdia.Cie10 WHERE  upper(HdiaStrDiagnostico ) like '% $HdiaDiagnosticoCie%'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}


