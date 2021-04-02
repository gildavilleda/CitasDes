<?php
/**
 * Created by PhpStorm.
 * User: Jasson R.
 * Date: 7/12/2019
 * Time: 2:30 PM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Médicos</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

<!-- Inicio Toast -->
<div class="ocultarToast">
    <div class="" aria-live="polite" aria-atomic="true" style="position: relative; min-height: 1px;">
        <div class="toast" data-autohide="false">
            <div class="toast-header">
                <img src="./img/logo.png" class="rounded mr-2" alt="..." style="width: 20px">
                <strong class="mr-auto">Mensaje</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body" id="idMensaje">
            </div>
        </div>
    </div>
</div>
<!-- Fin Toast-->

<div id="MedicoEspecialidad" class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Asignar especialidad</h3>
    <div class="card-body">
        <div id="table" class="table-editable">
            <div class="card-body">
                <div id="table" class="table-responsive">
                    <button type="button" class="btn btn-primary" onclick="fn_abrirModal();">
                        <i class="fas fa-user-plus" style="color : white"></i>
                    </button>
                    <table id="tbClinicaEspecialidad" class="table table-sm table-hover w3-border table-striped" width="100%">
                        <thead class="stylish-color text-white">
                        <tr>
                            <th class="">Id</th>
                            <th class="">Clinica</th>
                            <th class="">Especialidad</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyClinicaEspecialidad">

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- inicio formulario agregar Medico -->
<div class="modal" id="modalClinicaEspecialidad" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Clinica / Especialidad</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modalClinicaEspecialidad').fadeOut();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="frmClinicaEspecialidad">
                    <input id="inputIdClinicaEspecialidad" type="hidden">
                    <div class="row">
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selMedico">Medico</label>

                            </div>
                            <select id="selClinica" class="browser-default custom-select selec2">
                                <option>Seleccione Clinica</option>
                            </select>
                        </div>
                        <div class="input-group mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputEspecialidad">Especialidad</label>
                            </div>
                            <select id="selEspecialidad" class="browser-default custom-select selec2">
                                <option>Seleccione Especialidad</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div>

                    <button id="btnGuardar" class="btn btn-primary" onclick="agregarRelClinicaEspecialidad();">Guardar
                    </button>
                    <button id="btnModificar" class="btn btn-success"
                            onclick="modificarRelClinicaEspecialidad($('#inputIdClinicaEspecialidad').val());">Modificar
                    </button>
                    <button id="btnEliminar" class="btn btn-danger"
                            onclick="eliminarRelClinicaEspecialidad($('#inputIdClinicaEspecialidad').val());">Eliminar
                    </button>

                </div>


            </div><!-- modal -->

        </div>
    </div>
</div>
<script src="./js/js_ClinicaEspecialidad.js"></script>
</body>
</html>
