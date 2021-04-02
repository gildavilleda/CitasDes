<style>
    body {
        font-family: "Roboto", "Helvetica", "Arial", "Sans-serif";
    }
</style>

<!-- IMAGEN DE CARGA -->
<div class="d-flex justify-content-center">
    <div id="xload" class="spinner-grow text-primary" role="status" style="width: 45rem; height: 45rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- FIN IMGAGEN CARGA -->

<div id="modalAlertas" style="display: none">
    <div class="card" id="Pacientes">
        <div class="modal-header text-center text-white blue-gradient">
            <button type="button" class="btn primary-color-dark btn-circle float-left" onclick="fn_NuevoPaciente();">
                <i class="fas fa-user-plus"></i>
            </button>
            <h3 class="modal-title w-100 font-weight-bold">ALERTAS CIRUGIAS SUSPENDIDAS</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#modalAlertas').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <div id="table" class="table-responsive">
                <table id="tblAlertas" class="table table-sm table-hover table-striped" width="100%">
                    <thead class="stylish-color text-white">
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Fecha </th>
                        <th scope="col">Turno </th>
                        <th scope="col">Registro Medico</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Quirófano</th>
                        <th scope="col">Procedimiento</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Observacion Anestesia</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal muestra menú al seleccionar paciente -->
<div class="modal" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modalInfo').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="col col-sm-10">
                    <form id="frmPaciente">
                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputFecha">Programacion No.</label>
                                </div>
                                <input class="form-control col col-sm-6" type='text' disabled id="inputNumProgramacion">
                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputFecha">Fecha</label>
                                </div>
                                <input class="form-control col col-sm-6" type='text' disabled id="fechaProgramacion">
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputNombre">Nombre Paciente</label>
                                </div>
                                <input type="text" class="form-control" id="inputNombre" disabled >
                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputRegistroMedico">Registro Médico</label>
                                </div>
                                <input type="text" class="form-control" id="inputRegistroMed" disabled>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputSexo">Genero</label>
                                </div>
                                <select id="inputSexo" disabled class="form-control">
                                    <option>Selecciones Genero</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>

                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputEdad">Edad</label>
                                </div>
                                <input type="text" class="form-control" id="inputEdad" disabled>
                            </div>

                        </div>
                        <div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputProcedimento">Procedimiento</label>
                                </div>
                                <input type="text" class="form-control" id="inputProcedimiento" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputProcedimento">Estado</label>
                                </div>
                                <input type="text" class="form-control" id="inputEstado" disabled>
                            </div>
                        </div>

                        <div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputProcedimento">Observacion Anestesia</label>
                                </div>
                                <textarea rows="3" type="text" class="form-control" id="inputObservacion" disabled></textarea>

                            </div>
                        </div>

                    </form>
                </div>

                </div>
            </div>

        </div>
    </div>
</div>



<script src="./js/js_AlertaCirugiasSuspendidas.js" type="text/javascript" defer></script>