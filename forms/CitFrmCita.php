<!-- Inicio Toast -->
<div class="ocultarToast">
    <div class="" aria-live="polite" aria-atomic="true" style="position: relative; min-height: 1px;">
        <div class="toast" data-autohide="false">
            <div class="toast-header" id="headerToast" style="color: #FFFFFF">
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

<!-- Inicio modal AgragarCita -->
<div class="modal" id="agregarCitaDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold">INFORMACION DE CITA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#agregarCitaDatos').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="input-group col-sm-12 mb-sm-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistroMedico">Registro Médico</label>
                        </div>
                        <select id="inputRegistroMedico" class="form-control"></select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="input-group-text" for="validationTooltip01">Fecha</label>
                        <input type="date" class="form-control" id="fechaModal">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="input-group-text" for="validationTooltip02">Hora Inicio</label>
                        <input type="time" class="form-control" id="horaInicio">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="input-group-text" for="validationTooltip02">Hora Fin</label>
                        <input type="time" class="form-control" id="horaFin">
                    </div>
                </div>
                <div class="form-group">
                    <label class="input-group-text" for="inputAddress3">Observación</label>
                    <input type="text" class="form-control" id="inputObservaciones"
                           placeholder="Ingrese observaciones">
                </div>
                <div>
                    <input type="hidden" id="numero_cita" value="">
                    <input type="hidden" id="numero_clinica" value="">
                </div>
                <button class="btn btn-primary float-left" onclick="fn_guardarCita();" id="btn_guardarCita">GUARDAR
                </button>
                <button class="btn btn-danger float-right" onclick="fn_eliminarCita();" id="btn_eliminarCita">ELIMINAR
                </button>
                <button class="btn btn-warning float-right" onclick=";" id="btn_Laboratorios" hidden>LABORATORIO
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Fin modal AgragarCita -->


<!-- FORMULARIO PRINCIPAL -->
<div id="Cita" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">CITAS</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#Cita').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <div class="input-group mb-sm-3 col-sm-3">
                    <!-- <div class="input-group-prepend">
                         <label for="fechaCalendario" class="input-group-text">Fecha:</label>
                     </div>
                     <input type="date" class="form-control" name="fechaCalendario" id="fechaCalendario"> -->

                    <div id="datepicker"></div>
                    <div id="datos">
                        <!-- Campo de texto que recibira el valor seleccionado en el datepicker
                        le he puesto el atributo readonly para no poder escribir directamente -->
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="input-group mb-sm-3 col-sm-7">
                    <div class="input-group-prepend">
                        <label for="SelEspecialidad" class="input-group-text">Especialidad:</label>
                    </div>
                    <select id="SelEspecialidad" class="custom-select col-sm-12">
                    </select>
                </div>
                <br>
                <div class="input-group mb-sm3 col-sm-3 row offset-md-2">
                    <button onclick="horarioDisponible()" class="btn btn-outline-yellow btn-circle waves-effect">
                        <i class="fas fa-question-circle"></i>
                    </button>
                    <button type="button" id="btnGenerar" class="btn btn-outline-blue btn-circle waves-effect"
                            onclick="btnclinicas();" disabled>
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
        <div id="horariosDispinibles">
        </div>
        <div id="botonesCitas">
        </div>
        <div class="table-responsive text-center">
            <table id="tbAgendaCitas" class="table table-sm table-hover table-bordered table-striped" cellspacing="0"
                   width="100%">
                <thead id="head_citas" class="stylish-color text-white">
                </thead>
                <tbody id="body_citas">
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="./js/js_Cita.js" type="text/javascript" defer></script>

