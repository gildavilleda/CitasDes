<div id="EncAlertaSolicitudEgreso" class="card">
    <div class="card" id="Card">
        <div class="modal-header text-center text-white blue-gradient">
            <h3 class="modal-title w-100 font-weight-bold">SOLICITUD EGRESO</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#EncAlertaSolicitudEgreso').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <!--Tabla de solicitudes encamamiento-->
            <div class="container" id="contenedorEgreso" style="align-content: center">

            </div>
            <!--Fin tabla de solicitudes encamamiento-->

            <!--Modal Egreso-->
            <div class="modal" id="modalEgreso" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center text-white blue-gradient">
                            <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">EGRESO PACIENTE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalEgreso').fadeOut(); ">
                                <span aria-hidden="true" style="color: #ffffff">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="input-group input-group-md mb-3 col-md-8">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputRegMedEg">Registro Médico</label>
                                    </div>
                                    <input class="custom-select" id="inputRegMedEg" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-md mb-sm-3 col-sm-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputNombreEg">Nombre Paciente</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputNombreEg" type="text" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-md mb-sm-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputSexoEg">Sexo</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputSexoEg" readonly>
                                </div>


                                <div class="input-group input-group-md mb-sm-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputEdadEg">Edad</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputEdadEg" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-group input-group-md mb-3 col-md-5">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputFechaEg">Fecha</label>
                                    </div>
                                    <input  class="form-control" id="inputFechaEg" type="date">
                                </div>
                                <div class="input-group input-group-md mb-sm-3 col-sm-5">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputHoraEg">Hora de ingreso</label>
                                    </div>
                                    <input type="time" class="form-control" id="inputHoraEg">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group mb-4 col-sm">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="txtDiagnosticoEg">Diagnóstico</label>
                                    </div>
                                    <textarea class="form-control" id="txtDiagnosticoEg" rows="4" readonly></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group mb-4 col-sm">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="txtObservacionesEg">Observaciones</label>
                                    </div>
                                    <textarea class="form-control" id="txtObservacionesEg" rows="4" readonly></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group mb-3 col-sm">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputTipoEg">Tipo egreso</label>
                                    </div>
                                    <input class="form-control" id="inputTipoEg" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <input type="text" class="form-control" id="inputIngEmerEg" hidden>
                                <input type="text" class="form-control" id="inputIngEg" hidden>
                                <input type="text" class="form-control" id="inputSolEg" hidden>
                                <input type="text" class="form-control" id="inputMedicoSal" hidden>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btnGuardarEgre" style="text-align: right" onclick="guardarEgreso()" >Realizar Egreso</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<script src="./js/js_EncamSolEgreso.js"></script>