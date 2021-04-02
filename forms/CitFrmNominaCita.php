<?php
/**
 * Created by PhpStorm.
 * User: Marisol
 * Date: 07/03/2019
 * Time: 9:28
 */
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nomina</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/EstilosFormatoNomina.css" rel="stylesheet">

    <style>

    </style>
</head>
<body>
<!-- Editable table -->
<div class="card" id="Agenda">
    <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Nómina de Citas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#Agenda').fadeOut();">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


    <div class="card-body">
        <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"></a></span>

            <!-- Example single danger button -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="input-group mb-sm-3 col-sm-3">
                        <!-- <div class="input-group-prepend">
                             <label for="fechaCalendario" class="input-group-text">Fecha:</label>
                         </div>
                         <input type="date" class="form-control" name="fechaCalendario" id="fechaCalendario"> -->

                        <div id="inputFecha"></div>
                        <div id="datos">
                            <!-- Campo de texto que recibira el valor seleccionado en el datepicker
                            le he puesto el atributo readonly para no poder escribir directamente -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="input-group mb-sm-3 col-sm-7">
                        <div class="input-group-prepend">
                            <label for="SelEspecialidad" class="input-group-text">Clinica:</label>
                        </div>
                        <select id="selClinica" class="custom-select col-sm-12">
                        </select>
                    </div>



                    <div class="input-group mb-sm-3 col-sm-7">
                        <div class="input-group-prepend">
                            <label for="sel" class="input-group-text">REPORTE:</label>
                        </div>
                        <select id="selNominaArchivo" class="custom-select col-sm-12">
                            <option value="TiempoEntrada">ENFERMERÍA</option>
                            <option value="orden">ARCHIVO</option>
                        </select>
                    </div>
                    <br>
                    <div class="input-group mb-sm3 col-sm-3 row offset-md-2">

                        <button type="button" id="btnGenerar" class="btn btn-outline-blue btn-circle waves-effect"
                                onclick="fecha($('#fechaCalendario').val());">
                            <i class="fas fa-play"></i>
                        </button>
                        <div id="loading" class="spinner-border float-right text-primary" role="status"
                             style="width: 3rem; height: 3rem; display: none;">
                            <span class="sr-only align-middle">Loading...</span>
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="input-group mb-sm-3 col-sm-9 offset-md-1">
                        <div class="input-group-prepend">
                            <label for="fecha" class="input-group-text">Fecha:</label>
                        </div>
                        <input class="form-control col col-sm-4" type='text' name='fechaCalendario' id='fechaCalendario'
                               readonly>
                        <input type="hidden" id="fechaCalendario2">
                    </div>

                </div>
            </div>

            <form id="contenedorNomina">



            </form>

        </div>
    </div>



    <!--tabla nomina archivo -->
    <table id="tbNominaArchivo" class="table table-sm table-hover w3-border display table-striped" width="99%">
        <thead class="stylish-color text-white">
        <tr>


            <th class="text-center">No. de Expediente</th>
            <th class="text-center">Hora de consulta</th>
            <th class="text-center">Nombre y Apellido del Paciente</th>

        </tr>
        </thead>
        <tbody id="tbodyResultados">

        </tbody>
        <tfoot>
        <tr>

            <th class="text-center">No. de Expediente</th>
            <th class="text-center">Hora de consulta</th>
            <th class="text-center">Nombre y Apellido del Paciente</th>
        </tr>
        </tfoot>
    </table>

    <button type="submit" class="btn btn-primary btn-sm"
            onclick="fn_RepNominaArchivo();"
            id="btnFormatoCoex">
        FORMATO COEX <i class="fa fa-file-pdf-o" style="font-size:20px;"></i>
    </button>


<!-- Editable table -->





<script src="./js/js_NominaCita.js"></script>
</body>
</html>

