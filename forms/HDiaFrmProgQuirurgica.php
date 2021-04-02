<!-- FORMULARIO PRINCIPAL -->
<div id="Cita" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">PROGRAMACIÓN QUIRÚRGICA</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="cerrarmodal()">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-sm-3" id="contenedorDiv">
                <div id="datepicker"></div>
            </div>
            <div class="col-sm-9">
                <div id="contBotones" class="col col-sm-6"></div>
            </div>
            <br>
            <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputRegistro">Fecha</label>
                </div>
                <input class="form-control col col-sm-6" type='text' name='fechaCalendario' id='fechaCalendario'
                       readonly>
            </div>
        </div>

        <br>
            <div id="botonesGuardar" hidden>
                <button class="btn col-sm-3" type="button" id="1" style="background: #3fa044;"  onclick="abirModalProg();">Turno No. 1</button>
                <button class="btn col-sm-3" type="button" id="2" style="background: #3fa044;"  onclick="abirModalProg();">Turno No. 2</button>
                <button class="btn col-sm-3" type="button" id="3" style="background: #3fa044;"  onclick="abirModalProg();">Turno No. 3</button>
                <button class="btn col-sm-3" type="button" id="4" style="background: #3fa044;"  onclick="abirModalProg();">Turno No. 4</button>
                <button class="btn col-sm-3" type="button" id="5" style="background: #3fa044;"  onclick="abirModalProg();">Turno No. 5  </button>

            </div>
            <!-- Inicio modal Agregar Programacion -->
            <div class="modal" id="agregarProgramacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center text-white blue-gradient">
                            <h4 class="modal-title w-100 font-weight-bold">INFORMACION PROGRAMACIÓN</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    onclick="$('#agregarProgramacion').fadeOut();">
                                <span aria-hidden="true" class="text-white">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formularioProgQui">
                                <div class="row">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputRegistro">Fecha</label>
                                        </div>
                                        <input class="form-control col col-sm-6" type='text' name='fechaModal' id='fechaModal'
                                               readonly>
                                    </div>
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputCUI">Registro Médico</label>
                                        </div>
                                        <select class="form-control" id="inputRegistroMed" onchange="cargarDatosForm(this.value);">
                                            <option>Seleccione paciente</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputNombre">Nombre Paciente</label>
                                        </div>
                                        <input type="text" class="form-control" id="inputNombre">
                                    </div>

                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputEdad">Edad</label>
                                        </div>
                                        <input type="text" class="form-control" id="inputEdad">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputSexo">Genero</label>
                                        </div>
                                        <select class="form-control"  id="inputSexo">
                                            <option>Seleccione un Genero</option>
                                            <option value="M">MASCULINO</option>
                                            <option value="F">FEMENINO</option>
                                        </select>
                                    </div>
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputProcedimiento">Tiempo Estimado</label>
                                        </div>

                                        <select class="form-control" id="tiempoEstimado">
                                            <option value="30">30 min.</option>
                                            <option value="60">60 min.</option>
                                            <option value="90">90 min.</option>
                                            <option value="120">120 min.</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="input-group input-group-sm mb-sm-auto-3 col-sm-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputProcedimiento">Diagnostico de ingreso</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputDiagIngresoC">
                                </div>

                                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputProcedimiento">Procedimiento a realizar</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputProcedimiento">
                                </div>

                                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputProcedimiento">Observacion</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputObservacionC">
                                </div>
                                <div>
                                    <input type="hidden" id="quirofano" value="">
                                    <input type="hidden" id="especialidad" value="">
                                    <input type="hidden" id="turno" value="">
                                    <input type="hidden" id="HdiaNumProgQuirg" value="">
                                </div>

                                <div class="row">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend mb-sm-3">
                                            <label class="input-group-text " for="inputValAnestesia">Valoración de Anestesia</label>
                                        </div>
                                        <select class="custom-select form-control" id="SelValAnestesia" class="form-control">
                                            <option value="0">Seleccione valoración</option>
                                            <option value="S">Si</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>

                            </form>
                            <button class="btn btn-primary float-left" onclick="regProgQuirurgica() ;" id="btnGuardar">GUARDAR
                            </button>
                            <button class="btn btn-danger float-right" onclick="eliminarProgramacion();" id="btnEliminar">ELIMINAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin modal Agregar Programacion -->

    </div>
    <script src="./js/js_ProgQuirurgica.js" type="text/javascript" defer></script>

