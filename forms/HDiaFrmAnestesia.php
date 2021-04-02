<!-- FORMULARIO PRINCIPAL -->
<div id="Cita" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">ANESTESIA</h3>
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

                <br>
                <div class="input-group mb-sm3 col-sm-5 row offset-md-1">

                    <button type="button" id="btnGenerar" class="btn btn-primary"
                            onclick="mostrarAgenda();" > Mostrar Agenda <i class="fas fa-list"></i>
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
                </div>

            </div>

        </div>
        <br><br>

        <div id="contBotones" class="col col-sm-8">

        </div>

        <br><br>

        <table id="tbHDiaAnestesia" class="table table-hover table-striped" >
            <thead class="stylish-color text-white">
            <tr>
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
            <tbody id="tbodyDiaAnestesia">
            </tbody>
        </table>
    </div>
    <!-- Inicio modal ver Programacion -->
    <div class="modal" id="verProgramacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center text-white blue-gradient">
                    <h4 class="modal-title w-100 font-weight-bold">INFORMACION PROGRAMACIÓN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="$('#verProgramacion').fadeOut();">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formularioProgQui">
                        <div class="row">

                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputCUI">Registro Médico</label>
                                </div>
                                <input type="text" class="form-control" id="inputRegistroMed" disabled>

                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputNombre">Nombre Paciente</label>
                                </div>
                                <input type="text" class="form-control" id="inputNombre" disabled>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputNombre">Quirofano</label>
                                </div>
                                <input type="text" class="form-control" id="inputQuirofano" disabled>
                            </div>

                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputEdad">Especialidad</label>
                                </div>
                                <input type="text" class="form-control" id="inputEspecialidad" disabled>
                            </div>
                        </div>

                        <div class="row">

                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputProcedimiento">Procedimiento</label>
                                </div>
                                <input type="text" class="form-control" id="inputProcedimiento" disabled>
                            </div>
                        </div>
                        <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputEstado">Estado</label>
                                </div>
                                <select id="selEstado" class="form-control">
                                    <option>Seleccione un estado</option>
                                </select>
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputEstado">Observación</label>
                                </div>
                                <input type="text" class="form-control" id="inputObservacion">
                        </div>


                            <input type="hidden" id="inputNumProgramacion">
                            <input type="hidden" id="inputNumQuirofano">
                            <input type="hidden" id="inputNumEspecialidad">
                    </form>

                       <center><button class="btn btn-success btn-sm-8" type="button" onclick="cambioEstado();" id="btnActualizar">ACTUALIZAR ESTADO  <i class="far fa-edit"></i></button></center>

                </div>
            </div>
        </div>
    </div>
    <!-- Fin modal ver Programacion -->
</div>


<script src="./js/js_AgendaAnestesia.js" type="text/javascript" defer></script>