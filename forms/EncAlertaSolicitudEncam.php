<div id="EncAlertaSolicitudEncam" class="card">
    <div class="card" id="Card">
        <div class="modal-header text-center text-white blue-gradient">
            <h3 class="modal-title w-100 font-weight-bold">INGRESO A CAMA</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#EncAlertaSolicitudEncam').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <!--Tabla de solicitudes encamamiento-->
        <div class="card"  style="align-content: center">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tblPaciente" class="table table-hover text-center table-striped" style="text-align-all: center ">
                        <thead class="stylish-color text-white text-center">
                        <tr>
                            <th>Ingreso Emergencia</th>
                            <th>Registro médico</th>
                            <th width="30%">Nombre</th>
                            <th >Genero</th>
                            <th>Edad</th>
                            <th>Servicio</th>
                            <th hidden>id Encam</th>
                            <th hidden>id Egreso</th>
                            <th>Asignar</th>
                        </tr>
                        </thead>
                        <tbody id="ContenedorTabla">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--Modal camas-->
        <div class="modal" id="modalCamas" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true" style="overflow: auto">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center text-white blue-gradient">
                        <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">INGRESO PACIENTE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalCamas').fadeOut();">
                            <span aria-hidden="true" style="color: #ffffff">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <input type="text" class="form-control" id="inputRegMedico" hidden>
                            <input type="text" class="form-control" id="inputNombres" hidden>
                            <input type="text" class="form-control" id="inputGenero" hidden>
                            <input type="text" class="form-control" id="inputEdadPac" hidden>
                            <input type="text" class="form-control" id="inputEmergenciaC" hidden>
                            <input type="text" class="form-control" id="inputEncNumServicio" hidden>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body row" id="contentCamas">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Ingreso Paciente-->
        <div class="modal" id="modalIngresoDatos" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center text-white blue-gradient">
                        <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">INGRESO PACIENTE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalIngresoDatos').fadeOut();">
                            <span aria-hidden="true" style="color: #ffffff">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group input-group-md mb-3 col-md-8">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="SelRegistroMed">Registro Médico</label>
                                </div>
                                <input class="custom-select" id="SelRegistroMed" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group input-group-md mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputNombre">Nombre Paciente</label>
                                </div>
                                <input type="text" class="form-control" id="inputNombre" type="text" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group input-group-md mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputSexo">Sexo</label>
                                </div>
                                <input type="text" class="form-control" id="inputSexo" disabled>
                            </div>


                            <div class="input-group input-group-md mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputEdad">Edad</label>
                                </div>
                                <input type="text" class="form-control" id="inputEdad" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group input-group-md mb-3 col-md-5">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputFecha">Fecha</label>
                                </div>
                                <input  class="form-control" id="inputFecha" type="date">
                            </div>
                            <div class="input-group input-group-md mb-sm-3 col-sm-5">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="hora">Hora de ingreso</label>
                                </div>
                                <input type="time" class="form-control" id="hora">
                            </div>
                        </div>
                    </div>
                    <input type="text" id="servicio" hidden>
                    <input type="text" id="NoCama" hidden>
                    <input type="text" id="idPac" hidden>
                    <input type="text" id="inputEst" hidden>
                    <input type="text" id="inputEmer" hidden>
                    <input type="text" id="idIngreso" hidden>
                    <div class="modal-footer">
                        <button type="button" id="guardarEncamamiento" class="btn btn-primary" style="text-align: right" onclick="agregarIngreso()" >Guardar</button>
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin del modal Ingreso Paciente-->

    </div>
</div>


<script src="./js/js_EncamSolEncamamiento.js"></script>