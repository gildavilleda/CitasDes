<div id="EncAlertaSolicitudTraslado" class="card">
    <div class="card" id="Card">
        <div class="modal-header text-center text-white blue-gradient">
            <h3 class="modal-title w-100 font-weight-bold">SOLICITUD TRASLADO</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#EncAlertaSolicitudTraslado').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <!--Tabla de solicitudes encamamiento-->
            <div class="container" id="contenedorTraslado" style="align-content: center">

            </div>
            <!--Fin tabla de solicitudes encamamiento-->

            <!--Modal camas traslado-->
            <div class="modal" id="modalCamaEnc" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true" style="overflow: auto">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center text-white blue-gradient">
                            <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">INGRESO PACIENTE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalCamaEnc').fadeOut();">
                                <span aria-hidden="true" style="color: #ffffff">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <input type="text" class="form-control" id="inputEncNumServicio" type="text" hidden>
                                <input type="text" class="form-control" id="inputRegMedTras" type="text" hidden>
                                <input type="text" class="form-control" id="inputNombresTras" type="text" hidden>
                                <input type="text" class="form-control" id="inputGeneroTras" type="text" hidden>
                                <input type="text" class="form-control" id="inputEdadPacTras" type="text" hidden>
                                <input type="text" class="form-control" id="inputEmergenciaTras" type="text" hidden>
                                <input type="text" class="form-control" id="inputEncEstadoTras" type="text" hidden>
                                <input type="text" class="form-control" id="inputEstadoTras" type="text" hidden>
                                <input type="text" class="form-control" id="inputEncTipoTras" type="text" hidden>
                                <input type="text" class="form-control" id="inputEncIngreso" type="text" hidden>
                                <input type="text" class="form-control" id="inputEncIdTraslado" type="text" hidden>
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
            <!--Fin modal traslado-->

            <!--Comienzo modal Traslado Paciente-->
            <div class="modal" id="modalTraslado" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center text-white blue-gradient">
                            <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">TRASLADO PACIENTE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalTraslado').fadeOut(); ">
                                <span aria-hidden="true" style="color: #ffffff">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="input-group input-group-md mb-3 col-md-8">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputRegMed">Registro Médico</label>
                                    </div>
                                    <input class="custom-select" id="inputRegMed" DISABLED>
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
                                <input type="text" class="form-control" id="inputServicioTraslado" hidden>
                                <input type="text" class="form-control" id="inputCamasTraslado" hidden>
                                <input type="text" class="form-control" id="inputIngresoEmer" hidden>
                                <input type="text" class="form-control" id="inputEstadoTraslado" hidden>
                                <input type="text" class="form-control" id="inputIngresoTraslado" hidden>
                                <input type="text" class="form-control" id="inputEstadoT" hidden>
                                <input type="text" class="form-control" id="inputTipoT" hidden>
                                <input type="text" class="form-control" id="inputSolTras" hidden>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btnEncTras" style="text-align: right" onclick="modificarEncam()" >Realizar traslado</button>
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin modal Traslado Paciente-->

        </div>

    </div>
</div>


<script src="./js/js_EncamSolTraslado.js"></script>


