<div id="EncVistaCamas" class="card">
    <div class="card" id="Card">
        <div class="modal-header text-center text-white blue-gradient">
            <h3 class="modal-title w-100 font-weight-bold">ENCAMAMIENTO POR SERVICIO</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#EncVistaCamas').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            <div class="row">
                <div class="input-group mb-sm-auto col-sm-4">
                    <div class="input-group-prepend">
                        <label for="selectServi" class="input-group-text mb-sm-auto col-sm-auto" style="align-content: normal">Servicio de Encamamiento: </label>
                    </div>
                    <select id="selectServi" class="custom-select"></select>
                    <div class="btn-group">
                        <button type="button" id="btnMostrarEnc" class="btn btn-outline-blue btn-circle waves-effect; btn btn-secondary btn-default" style="margin-left: 25px" onclick="mostrarDatosCamas();">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" id="btnRegistro" class=" btn btn-outline-yellow btn-circle waves-effect; btn btn-secondary btn-default" style="margin-left: 25px" onclick="mostrarLista();"><i class="fas fa-chart-bar"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!--Modal vista Camas-->
            <div class="modal" id="modalCamasVista" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true" style="overflow: auto">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center text-white blue-gradient">
                            <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">ENCAMAMIENTO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalCamasVista').fadeOut();">
                                <span aria-hidden="true" style="color: #ffffff">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">

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


            <!--Modal estadistica pacientes-->
            <div class="modal" id="modalCamaLista" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true" style="overflow: auto">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center text-white blue-gradient">
                            <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">Encamamiento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarModalLista();">
                                <span aria-hidden="true" style="color: #ffffff">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <input type="text" class="form-control" id="inputServicioNombre" hidden>
                                <input type="text" class="form-control" id="inputRegistroMed" hidden>
                                <input type="text" class="form-control" id="inputNombre" hidden>
                                <input type="text" class="form-control" id="inputCamaPaciente" hidden>
                                <input type="text" class="form-control" id="inputEmergenciaC" hidden>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <table id="TblPaciente" class="table table-hover text-center table-striped" style="text-align-all: center ">
                                        <thead class="stylish-color text-white text-center">
                                        <tr>
                                            <th>Registro médico</th>
                                            <th width="30%">Nombre</th>
                                            <th>Edad</th>
                                            <th>Número de cama</th>
                                            <th>Ventilatorio</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tbodyLista"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-danger" id="btnCerrar" onclick="cerrarModalLista();">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>


<script src="./js/js_EncamVistaCamas.js"></script>