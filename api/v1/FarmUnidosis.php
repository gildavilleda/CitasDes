<?php

/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 04/04/2020
 * Time: 01:12 A.M.
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
            if (isset ($_REQUEST["CitNumIngresoEmer"])){
                $stmt = $Db->Sentencia("EXEC Farm.sp_AgEncabezadoUnidosis ?, ?, ?, ?");
                $stmt->bindParam(1, $_REQUEST{'CitNumIngresoEmer'});
                $stmt->bindParam(2, $_REQUEST{'EncNumIdServEncam'});
                $stmt->bindParam(3, $_REQUEST{'EncNumCama'});
                $stmt->bindParam(4, $_REQUEST{'HdiaNumEvoPacienteEmer'});


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

        break;

    case 'PUT':
        //Procedimiento para modificar
        try {
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
        break;
    case 'DELETE':
//Procedimiento para Eliminar
        try {
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

        if(isset($_REQUEST['Encabezado'])){
            $IdEmergencia= $_REQUEST['emergenciaId'];
            $data = $Db->GetData("SELECT * from Farm.vw_mostraEncabezado where CitNumIngresoEmer = $IdEmergencia", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['Detalle'])){
            $FarmNumEncUnidosis = $_REQUEST['FarmNumEncUnidosis'];
            $data = $Db->GetData("SELECT * from Farm.vw_mostrarDetalleUni where FarmNumEncUnidosis = $FarmNumEncUnidosis", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['EncabezadoIngreso'])){
            $IdEmergencia= $_REQUEST['emergenciaId'];
            $data = $Db->GetData("SELECT EU.FarmNumEncUnidosis, (P.CitStrNombre+' '+ ISNULL(p.CitStrNombre2, '')+' '+ P.CitStrApellido+' '+ ISNULL(P.CitStrApellido2, ' ')) Nombre, 
                                        I.CitStrRegMedico, I.CitNumIngresoEmer 
                                        from Farm.EncabezadoUnidosis EU 
                                        JOIN Hdia.IngresoHdiaEmer I ON I.CitNumIngresoEmer = EU.CitNumIngresoEmer
                                        JOIN Cita.Paciente P ON P.CitStrRegMedico = I.CitStrRegMedico where I.CitNumIngresoEmer = $IdEmergencia AND HdiaNumEvoPacienteEmer = 0", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['Evolucion'])){
            $HdiaNumEvoPacienteEmer = $_REQUEST['Evolucion'];
            $data = $Db->GetData("SELECT ('Medicamento: '+I.AlmacStrNomInsumo+' Dosis: '+ CAST(DU.FarmNumCantDosis AS varchar)+' Medida: '+ DU.FarmStrDosisMedida+' Frecuencia: '+ DU.FarmStrVia+' Frecuencia: '+ CAST(DU.FarmNumFrecuencia AS varchar)+' '+ DU.FarmStrUnidadTiempo+' Día: '+
                        DU.FarmDateDiaDar) unidosis
                FROM Farm.EncabezadoUnidosis EU
                JOIN Farm.DetalleUnidosis DU ON EU.FarmNumEncUnidosis = DU.FarmNumEncUnidosis
                JOIN Almac.Insumos I ON I.AlmacNumCodPresentInsu = DU.AlmacNumCodPresentInsu
                WHERE EU.HdiaNumEvoPacienteEmer = $HdiaNumEvoPacienteEmer", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['Emergencia'])){
            $CitNumIngresoEmer = $_REQUEST['Emergencia'];
            $data = $Db->GetData("SELECT ('Medicamento: '+I.AlmacStrNomInsumo+' Dosis: '+ CAST(DU.FarmNumCantDosis AS varchar)+' Medida: '+ DU.FarmStrDosisMedida+' Frecuencia: '+ DU.FarmStrVia+' Frecuencia: '+ CAST(DU.FarmNumFrecuencia AS varchar)+' '+ DU.FarmStrUnidadTiempo+' Día: '+
                        DU.FarmDateDiaDar) unidosis
                FROM Farm.EncabezadoUnidosis EU
                JOIN Farm.DetalleUnidosis DU ON EU.FarmNumEncUnidosis = DU.FarmNumEncUnidosis
                JOIN Almac.Insumos I ON I.AlmacNumCodPresentInsu = DU.AlmacNumCodPresentInsu
                WHERE EU.CitNumIngresoEmer = $CitNumIngresoEmer and EU.HdiaNumEvoPacienteEmer = 0", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['Intensivo'])){
            $CitNumIngresoEmer = $_REQUEST['EmergenciaInten'];
            $IntenNumIdEvoChequeo = $_REQUEST['Intensivo'];
            $data = $Db->GetData("SELECT ('Medicamento: '+I.AlmacStrNomInsumo+' Dosis: '+ CAST(DU.FarmNumCantDosis AS varchar)+' Medida: '+ DU.FarmStrDosisMedida+' Frecuencia: '+ DU.FarmStrVia+' Frecuencia: '+ CAST(DU.FarmNumFrecuencia AS varchar)+' '+ DU.FarmStrUnidadTiempo+' Día: '+
                        DU.FarmDateDiaDar) unidosis
                FROM Farm.EncabezadoUnidosis EU
                JOIN Farm.DetalleUnidosis DU ON EU.FarmNumEncUnidosis = DU.FarmNumEncUnidosis
                JOIN Almac.Insumos I ON I.AlmacNumCodPresentInsu = DU.AlmacNumCodPresentInsu
                WHERE EU.CitNumIngresoEmer = $CitNumIngresoEmer and EU.HdiaNumEvoPacienteEmer = $IntenNumIdEvoChequeo", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }






        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}


