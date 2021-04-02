<?php
/**
 * Created by PhpStorm.
 * User: Marisol
 * Date: 06/03/2019
 * Time: 13:32
 */
?>


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

<div id="Clinica" class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Clinicas</h3>
    <div class="card-body">
        <div id="table" class="table-editable">
            <div class="card-body">
                <div class="">
                    <form id="frmClinica">
                        <input id="inputIdClinicaP" type="hidden">
                        <div class="row">
                            <div class="input-group mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputNombres">Nombres Clinica</label>
                                </div>
                                <input type="text" class="form-control" id="inputNombreClinicaP"
                                       placeholder="Ingrese Nombres de la clinica">
                            </div>
                    </form>
                    <button type="button" class="btn btn-primary" onclick="guardarClinica();" id="btnGuardar">
                        Agregar
                    </button>
                    <button type="button" id="btnModificarClinica" class="btn btn-success"
                            onclick="modificarClinica();">
                        Modificar
                    </button>
                    <button type="button" id="btnEliminarClinica" class="btn btn-danger"
                            onclick="eliminarClinica($('#inputIdClinicaP').val());">
                        Eliminar
                    </button>
                </div>

                <div id="table" class="table-responsive">

                    <table id="tbClinica" class="table table-sm table-hover w3-border table-striped" width="100%">
                        <thead class="stylish-color text-white">
                        <tr>
                            <th class="">Id</th>
                            <th class="">Clinica</th>

                        </tr>
                        </thead>
                        <tbody id="tbodyClinica">

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="./js/js_Clinica.js"></script>

