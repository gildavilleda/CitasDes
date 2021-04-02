<div id="EvolucionClinica" class="card">
    <div class="card-header text-center text-white blue-gradient">
        <h3 class="card-title w-100 font-weight-bold">Evolución</h3>
        <button type="button" class="close" aria-label="Close"
                onclick="$('#EvolucionClinica').collapse();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>

    <div class="card-body">
        <input class="form-control" id="modal" hidden>
        <input class="form-control" id="fechaHora" hidden>
        <div class="row">
            <div class="input-group mb-sm-auto col-sm-6">
                <div class="input-group-prepend">
                    <label for="selEncamamiento" class="input-group-text mb-sm-auto col-sm-auto" style="align-content: normal">Servicio de Encamamiento: </label>
                </div>
                <select id="selEncamamiento" class="custom-select"></select>
                <button type="button" id="btnMostrarEnc" class="btn btn-outline-blue btn-circle waves-effect; btn btn-secondary btn-default" style="margin-left: 25px" onclick="MostrarDatos()">
                    <i class="fas fa-play"></i>
                </button>
            </div>
        </div>
        <div class="row">
            <table id="TblPaciente" class="table table-hover text-center table-striped" style="text-align-all: center ">
                <thead class="stylish-color text-white text-center">
                <tr>
                    <th>Registro médico</th>
                    <th width="30%">Nombre</th>
                    <th >Número de cama</th>
                    <th>Datos traslado</th>
                    <th>Datos egreso</th>
                </tr>
                </thead>
                <tbody id="tbodyEvEncamamiento"></tbody>
            </table>
        </div>
    </div>
</div>


<!--Comienzo modal Traslado Paciente-->
<div class="modal modal-fade" id="modalTraslado" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
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
                    <input type="text" class="form-control" id="inputIngreEmer" hidden>
                    <input type="text" class="form-control" id="inputRegisMed" hidden>
                    <input type="text" class="form-control" id="inputNombrePaciente" hidden>
                    <input type="text" class="form-control" id="inputCama" hidden>
                    <input type="text" class="form-control" id="inputServicio" hidden>
                    <input type="text" class="form-control" id="inputEdad" hidden>
                    <input type="text" class="form-control" id="inputGenero" hidden>

                    <input type="text" class="form-control" id="idPaciente" hidden>
                </div>

                <div class="alert alert-warning" role="alert">
                    Escoja el tipo de traslado para el paciente:
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-sm" onclick="mostrarServiciosEnc();" style="text-align: right; margin-left: 50px"><i class="fas fa-project-diagram" style="margin-right: 5px"></i>Servicio</button>
                        <button type="button" class="btn btn-warning btn-sm" onclick="crearCamas();" style="text-align: right; margin-left: 10px"><i class="fas fa-bed" style="margin-right: 5px"></i>Cama</button>
                    </div>
                </div>

                <div class="input-group mb-sm-auto col-sm-auto" id="selectorServicio" hidden>
                    <div class="input-group-prepend">
                        <label for="sltEncServicio" class="input-group-text mb-sm-auto col-sm-auto" style="align-content: normal">Servicio: </label>
                    </div>
                    <select id="sltEncServicio" class="custom-select"></select>
                    <button type="button" id="btnMostrar" onclick="CrearCama();" class="btn btn-outline-blue btn-circle waves-effect; btn btn-secondary btn-default" style="margin-left: 25px">
                        <i class="fas fa-play"></i>
                    </button>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!--Fin modal Traslado Paciente-->

<!--Modal donde aparecen las camas según el servicio-->
<div class="modal" id="modalCamaEnc" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">TRASLADO DE PACIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalCamaEnc').fadeOut();">
                    <span aria-hidden="true" style="color: #ffffff">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="text" class="form-control" id="inputIngresoEmerTras" hidden>
                    <input type="text" class="form-control" id="inputRegMedTras" hidden>
                    <input type="text" class="form-control" id="inputNombresTras" hidden>
                    <input type="text" class="form-control" id="inputCamaAnterior" hidden>
                    <input type="text" class="form-control" id="inputServiAnterior" hidden>
                    <input type="text" class="form-control" id="inputServiNuevo" hidden>
                    <input type="text" class="form-control" id="inputEdadPac" hidden>
                    <input type="text" class="form-control" id="inputGeneroPac" hidden>

                    <input type="text" class="form-control" id="tipoTrasladoPrimero" hidden>
                    <input type="text" class="form-control" id="idPacienteServ" hidden>
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
<div class="modal" id="modalDatosTraslado" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">TRASLADO PACIENTE POR SERVICIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalDatosTraslado').fadeOut(); ">
                    <span aria-hidden="true" style="color: #ffffff">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row" hidden>
                    <input type="text" class="form-control" id="inIngresoEmerTras" hidden>
                    <input type="text" class="form-control" id="inCamaAnterior" hidden>
                    <input type="text" class="form-control" id="inServiAnterior" hidden>
                    <input type="text" class="form-control" id="inServiNuevo" hidden>

                    <input type="text" class="form-control" id="camaNueva" hidden>
                    <input type="text" class="form-control" id="ServicioNuevo" hidden>
                    <input type="text" class="form-control" id="tipoTrasladoSegundo" hidden>
                    <input type="text" class="form-control" id="idPacienteIngreso" hidden>
                    <input type="text" class="form-control" id="inputEstadoTraslado" hidden>
                </div>
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
                            <label class="input-group-text" for="inputEdadTras">Edad</label>
                        </div>
                        <input type="text" class="form-control" id="inputEdadTras" disabled>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnTrasladoServ" style="text-align: right" onclick="realizarTraslado()" >Realizar traslado</button>
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</div>
<!--Fin modal Traslado Paciente-->

<!--Comienzo modal Traslado Paciente-->
<div class="modal" id="modalDatosTrasladoCama" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">TRASLADO DE PACIENTE POR CAMA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalDatosTrasladoCama').fadeOut(); ">
                    <span aria-hidden="true" style="color: #ffffff">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="text" class="form-control" id="inIngresoEmerTrasCama"hidden>
                    <input type="text" class="form-control" id="inCamaAnteriorCama" hidden>
                    <input type="text" class="form-control" id="inServiAnteriorCama" hidden>
                    <input type="text" class="form-control" id="inServiNuevoCama" hidden>

                    <input type="text" class="form-control" id="camaNuevaCama" hidden>
                    <input type="text" class="form-control" id="ServicioNuevoCama" hidden>
                    <input type="text" class="form-control" id="tipoTrasladoSegundoCama" hidden>
                    <input type="text" class="form-control" id="idPacienteIngresoCama" hidden>
                    <input type="text" class="form-control" id="inputEstadoTrasladoCama"hidden>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-8">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegMedCama">Registro Médico</label>
                        </div>
                        <input class="custom-select" id="inputRegMedCama" DISABLED>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombreCama">Nombre Paciente</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombreCama" type="text" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputSexoCama">Sexo</label>
                        </div>
                        <input type="text" class="form-control" id="inputSexoCama" disabled>
                    </div>
                    <div class="input-group input-group-md mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputEdadTrasCama">Edad</label>
                        </div>
                        <input type="text" class="form-control" id="inputEdadTrasCama" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-5">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputFechaCama">Fecha</label>
                        </div>
                        <input  class="form-control" id="inputFechaCama" type="date">
                    </div>
                    <div class="input-group input-group-md mb-sm-3 col-sm-5">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="horaCama">Hora de ingreso</label>
                        </div>
                        <input type="time" class="form-control" id="horaCama">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnTrasladoCama" style="text-align: right" onclick="enviarTrasladoCama()" >Realizar traslado</button>
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</div>
<!--Fin modal Traslado Paciente-->

<!--Modal ver datos de egreso (Esto se modifico)-->
<div class="modal" id="modalEgreso" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">EGRESO HOSPITALARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modalEgreso').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="text" class="form-control" id="inputidIngreso" hidden>
                    <input type="text" class="form-control" id="inputNoServicio" hidden>
                    <input type="text" class="form-control" id="inputCie10" hidden>
                    <input type="text" class="form-control" id="inputDiagnostico" hidden>
                    <input type="text" class="form-control" id="inputObservaciones" hidden>
                    <input type="text" class="form-control" id="inputIngresoEmerg" hidden>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-8">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegMedEg">Registro Médico</label>
                        </div>
                        <input class="custom-select" id="inputRegMedEg" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombreEg">Nombre Paciente</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombreEg" type="text" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputFechaEg">Fecha</label>
                        </div>
                        <input  class="form-control" id="inputFechaEg" type="date">
                    </div>
                    <div class="input-group input-group-md mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputHoraEg">Hora de egreso</label>
                        </div>
                        <input type="time" class="form-control" id="inputHoraEg">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group mb-3 col-sm">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="selTipoEgreso">Tipo egreso</label>
                        </div>
                        <select class="custom-select" id="selTipoEgreso">
                            <option value="EGRESO">Egreso</option>
                            <option value="TRASLADO">Traslado</option>
                            <option value="FUGA">Fuga</option>
                            <option value="CONTRAINDICADO">Contraindicado</option>
                            <option value="FALLECIMIENTO">Fallecimiento</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="botonEgresoPaciente" onclick="realizarEgreso();" style="text-align: right"><i class="fas fa-sign-out-alt"></i>Egreso Hospitalario</button>
                    <div class="row"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal ver datos de egreso (Fin de modificación)-->


<script src="./js/js_EncTrasladoEgreso.js"></script>
