<?php
/**
 * Created by PhpStorm.
 * User: Jasson Rodríguez
 * Date: 7/24/2019
 * Time: 9:24 AM
 */
?>

<!-- FORMULARIO PRINCIPAL -->
<div id="HitorialCita" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">HISTORIAL CITAS</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#HitorialCita').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="row">
                <div class="input-group col-sm-12 mb-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRegistroMedico">Registro Médico</label>
                    </div>
                    <select id="SelRegMedico" class="form-control"></select>
                </div>
            </div>
            <div class="input-group mb-sm3 col-sm-2">
                <button id="btnGenerar" class="btn btn-outline-blue btn-circle waves-effect"
                        onclick="mostrarHistorial();">
                    <i class="fas fa-play"></i>
                </button>
                <div id="loading" class="spinner-border float-right text-primary" role="status"
                     style="width: 3rem; height: 3rem; display: none;">
                    <span class="sr-only align-middle">Loading...</span>
                </div>
            </div>
        </div>
        <div class="table-responsive text-center">
            <table id="tbAgendaCitas" class="table table-sm table-hover table-striped table-bordered" cellspacing="0"
                   width="100%">
                <thead id="head_citas" class="stylish-color text-white">
                </thead>
                <tbody id="body_citas">
                </tbody>
            </table>
        </div>

        <div class="table-responsive text-center">
            <table id="tblHistorialCitas" class="table table-sm table-hover table-striped table-bordered"
                   cellspacing="0"
                   width="100%" hidden>
                <thead class="stylish-color text-white">
                <th>Fecha:</th>
                <th>Hora Inicio:</th>
                <th>Hora Fin:</th>
                <th>Clinica:</th>
                <th>Especialidad:</th>
                <th>Asistencia Paciente S/N:</th>
                <th>Estado:</th>
                <th>Eliminar:</th>
                </thead>
                <tbody id="tbodyHistorialCitas">
                </tbody>
            </table>
        </div>

    </div>
</div>


<script src="./js/js_HistorialCitas.js" type="text/javascript" defer></script>
