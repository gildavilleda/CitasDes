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
            <div class="input-group mb-sm-auto col-sm-4">
                <div class="input-group-prepend">
                    <label for="SelectEnc" class="input-group-text mb-sm-auto col-sm-auto" style="align-content: normal">Servicio de Encamamiento: </label>
                </div>
                <select id="SelectEnc" class="custom-select"></select>
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
                    <th>Datos evolución</th>
                    <th>Datos traslado</th>
                    <th>Datos egreso</th>
                </tr>
                </thead>
                <tbody id="tbodyEvEncamamiento"></tbody>
            </table>
        </div>
    </div>
</div>

    <!--Modal ver datos de evolución-->
    <div class="modal fade bd-example-modal-lg" id="modalEvolucion" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header text-center text-white red">
                    <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">EVOLUCIÓN PACIENTE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #ffffff">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="input-group input-group-md mb-3 col-md-8">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputRegMed">Registro Médico</label>
                            </div>
                            <input  class="form-control" id="inputRegMed" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNomPac">Nombre paciente</label>
                            </div>
                            <input type="text" class="form-control" id="inputNomPac" type="text" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputMedicoTratante">Médico tratante</label>
                            </div>
                            <input type="text" class="form-control" id="inputMedicoTratante">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Diagnóstico</span>
                            </div>
                            <textarea class="form-control" rows="3" id="TxtDiagnostico"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Observaciones</span>
                            </div>
                            <textarea class="form-control" id="TxtObservaciones" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputFechaRevision">Fecha revisión</label>
                            </div>
                            <input type="text" class="form-control" id="inputFechaRevision" type="text">
                        </div>
                        <div class="input-group input-group-md mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputHoraIngresoAV">Hora de ingreso</label>
                            </div>
                            <input type="time" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary btn-sm" id="btnAgregarEvol2">GUARDAR
                    </button>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <h2>Seguimientos Anteriores</h2>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-auto te">
                        <table class="table" id="tblEvolucion">
                            <thead>
                            <th>No.</th>
                            <th>Reg. Medico</th>
                            <th width="50%">Diagnostico</th>
                            </thead>
                            <tbody id="tbodyEvolucion"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin de modal datos de evolución-->

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

                <div class="modal-body" style="text-align: center">
                    <h1><i class="fas fa-info" style="color: darkorange" style="text-align: center"></i></h1>
                    <div class="row">
                        <input type="text" class="form-control" id="inputIngresoEmer" hidden>
                        <input type="text" class="form-control" id="inputServ" hidden>
                        <input type="text" class="form-control" id="inputReg" hidden>
                        <input type="text" class="form-control" id="inputName" hidden>
                        <input type="text" class="form-control" id="inputBed" hidden>
                    </div>
                    <h5>Elija el tipo de traslado que requiere:</h5>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <button type="button" class="btn btn-primary"  style="text-align: right"onclick="trasladoEncam()"><i class="fas fa-spinner" style="margin-right: 5px"></i>Encamamiento</button>
                        <button type="button" class="btn btn-warning"  style="text-align: right" onclick="mostrartrasladoCama()"><i class="fas fa-bed" style="margin-right: 5px"></i>Cama</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin modal Traslado Paciente-->

    <!--Traslado encamamiento-->
    <div class="modal" id="modTrasEncam" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center text-white blue-gradient">
                    <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">TRASLADO PACIENTE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modTrasEncam').fadeOut(); ">
                        <span aria-hidden="true" style="color: #ffffff">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <input type="text" class="form-control" id="inputIngresoEmerTras" hidden>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-3 col-md-8">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputRegMedTraslado">Registro Médico</label>
                            </div>
                            <input class="custom-select" id="inputRegMedTraslado" DISABLED>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNombreTraslado">Nombre Paciente</label>
                            </div>
                            <input type="text" class="form-control" id="inputNombreTraslado" type="text" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputFechaTraslado">Fecha</label>
                            </div>
                            <input  class="form-control" id="inputFechaTraslado" type="date">
                        </div>
                        <div class="input-group input-group-md mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputHoraTraslado">Hora de ingreso</label>
                            </div>
                            <input type="time" class="form-control" id="inputHoraTraslado">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="SlctServicioTraslado" class="input-group-text mb-sm-auto col-sm-auto" style="align-content: normal">Servicio de Encamamiento </label>
                                </div>
                                <select id="SlctServicioTraslado" class="custom-select">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="text" class="form-control" id="inputEstadoTraslado" value="Encamamiento" hidden>
                        <input type="text" class="form-control" id="inputTipoTraslado" value="Encamamiento" hidden>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnTraslado" style="text-align: right" onclick="enviarTraslado()">Trasladar</button>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin modal Traslado Paciente-->

    <!--Traslado cama-->
    <div class="modal" id="modalCama" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center text-white blue-gradient">
                    <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">TRASLADO PACIENTE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalCama').fadeOut(); ">
                        <span aria-hidden="true" style="color: #ffffff">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <input type="text" class="form-control" id="inputIngEmerTrasCama" hidden>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-3 col-md-8">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputRegTrasCama">Registro Médico</label>
                            </div>
                            <input class="custom-select" id="inputRegTrasCama" DISABLED>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNombreTrasCama">Nombre Paciente</label>
                            </div>
                            <input type="text" class="form-control" id="inputNombreTrasCama" type="text" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-md mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputFechaTrasCama">Fecha</label>
                            </div>
                            <input  class="form-control" id="inputFechaTrasCama" type="date">
                        </div>
                        <div class="input-group input-group-md mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputHoraTrasCama">Hora de ingreso</label>
                            </div>
                            <input type="time" class="form-control" id="inputHoraTrasCama">
                        </div>
                    </div>
                    <div class="row">
                        <input type="text" class="form-control" id="inputServTrasCama" hidden>
                        <input type="text" class="form-control" id="inputEstadoTrasCama" value="SI" hidden>
                        <input type="text" class="form-control" id="inputTipoTrasCama" value="Cama" hidden>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnTrasladoCama" style="text-align: right" onclick="enviarTrasladoCama()">Realizar solicitud de traslado</button>
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
                <div class="modal-header text-center text-white red">
                    <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">Egreso Hospitalario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="$('#modalEgreso').fadeOut();">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
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
                        <div class="input-group input-group-sm mb-sm-4 col-sm-3">
                            <button class="btn btn-success" onclick="abrirCie10()">CIE 10
                            </button>
                        </div>
                        <div class="input-group input-group-sm mb-sm-5 col-sm-4">

                            <input class="form-control" id="ImpresionClinica3" hidden>
                        </div>

                    </div>
                    <div class="input-group-sm mb-sm-4 col-sm-11">
                        <div class="input-group-prepend">
                            <input class="form-control" id="txtImpresionClinica3" hidden>
                        </div>
                    </div>

                    <table class="table table-striped table-bordered" id="tbCantidadCie10">
                        <thead class="success-color text-white">
                        <tr align="center" class="active">
                            <td width="100">Código CIE10</td>
                            <td width="380">Descripcion </td>


                        </tr>
                        </thead>
                        <tbody id="tblbodyCantidadCie10_3">
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="input-group mb-4 col-sm">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="txtDiagnostico">Diagnóstico</label>
                            </div>
                            <textarea class="form-control" id="txtDiagnostico" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-4 col-sm">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="txtObservaciones">Observaciones</label>
                            </div>
                            <textarea class="form-control" id="txtObservaciones" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3 col-sm">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selTipoEgreso">Tipo egreso</label>
                            </div>
                            <select class="custom-select" id="selTipoEgreso">
                                <option value="Egreso">Egreso</option>
                                <option value="Traslado">Traslado</option>
                                <option value="Fuga">Fuga</option>
                                <option value="Fallecimiento">Fallecimiento</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <input type="text" class="form-control" id="inputNoServicio" hidden>
                        <input type="text" class="form-control" id="inputCamaNum" hidden>
                        <input type="text" class="form-control" id="inputidIngreso" hidden>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="btnEgreso" style="text-align: right" onclick="EnviarEgresoHosp()"><i class="fas fa-sign-out-alt"></i>Egreso Hospitalario</button>
                        <div class="row"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal ver datos de egreso (Fin de modificación)-->


<!-- modal Evolucion Paciente -->
<div class="modal" id="modalSegEvoPaciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center blue-gradient text-white">
                <h4 class="modal-title w-100 font-weight-bold">EVOLUCION PACIENTE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        id="cMSegEvo">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="inputNumEncamamiento">
                <input type="hidden" id="inputNumServicio">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputRegistro">No. Emergencia</label>
                        </div>
                        <input type="text" class="form-control" id="inputNoEmergencia"
                               disabled>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputRegistro">Registro Médico</label>
                        </div>
                        <input type="text" class="form-control" id="inputRegistroEmerEgre"
                               placeholder="285-2020-000000"  value="285-2020-0" disabled>
                        <input type="hidden" class="form-control" id="inputRegistroOld" value=""/>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputRegistro">Nombre</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombreEvo" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputApellidoCasada">Diagnostico</label>
                        </div>
                        <textarea class="form-control" rows="3" id="diagnosticoSeg"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputApellidoCasada">Datos Subjetivos</label>
                        </div>
                        <textarea class="form-control" rows="3" id="datSubjetivos">

                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputApellidoCasada">Datos Objetivos</label>
                        </div>
                        <textarea class="form-control" rows="3" id="datObjetivos">

                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputApellidoCasada">Ordenes Medicas</label>
                        </div>
                        <textarea class="form-control" rows="3" id="ordenesMedicas"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputApellidoCasada">Comentarios</label>
                        </div>
                        <textarea class="form-control" rows="3" id="comentarios"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group mb-3 col-sm-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text mb-4" for="inputPruebaIsopado">Ventilación</label>
                        </div>
                        <select class="form-control" id="selVentilacion">
                            <option value="Ninguno">Ninguno</option>
                            <option value="VMI">VMI</option>
                            <option value="VMNI">VMNI</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputApellidoCasada">Fecha Revisión</label>
                        </div>
                        <input class="form-control" id="fechaRevision" type="date">
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="inputApellidoCasada">Hora</label>
                        </div>
                        <input class="form-control" id="horaRevision" type="time">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group mb-3 col-sm-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text mb-4" for="inputPruebaIsopado">Prueba de Hisopado</label>
                        </div>
                        <select class="custom-select" id="selHisopado">
                            <option value="0">Seleccione</option>
                            <option value="NO">NO</option>
                            <option value="SI">SI</option>
                        </select>
                    </div>
                    <div class="input-group input-group mb-3 col-sm-4">
                        <div class="input-group-prepend">
                            <label class="form-label-group" for="inputPruebaIsopado"><h5>Laboratorios</h5> </label>
                        </div>
                        <button type="button" class="btn btn-outline-green btn-circle waves-effect" onclick="abirLaboratorio($('#inputRegistroEmerEgre').val(), $('#fechaRevision').val());">
                            <i class="fas fa-flask"></i>
                        </button>
                        <input type="text" id="idCita" class="form-control" disabled>
                    </div>
                    <div class="input-group input-group mb-3 col-sm-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text mb-4" for="inputPruebaIsopado">Antígeno</label>
                        </div>
                        <select class="form-control" id="selAntigeno">
                            <option value="Negativo">Negativo</option>
                            <option value="Positivo">Positivo</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" style="width: 130px" for="">Detalle Hisopado</label>
                        </div>
                        <textarea class="form-control" rows="3" id="detHisopado"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-4 col-sm-3">
                        <button class="btn btn-success" onclick="abrirCie10()">CIE 10
                        </button>
                    </div>
                    <div class="input-group input-group-sm mb-sm-5 col-sm-4">

                        <input class="form-control" id="ImpresionClinica" hidden>
                    </div>

                </div>
                <div class="input-group-sm mb-sm-4 col-sm-11">
                    <div class="input-group-prepend">
                        <input class="form-control" id="txtImpresionClinica" hidden>
                    </div>
                </div>

                <table class="table table-striped table-bordered" id="tbCantidadCie10">
                    <thead class="success-color text-white">
                    <tr align="center" class="active">
                        <td width="100">Código CIE10</td>
                        <td width="380">Descripcion </td>


                    </tr>
                    </thead>
                    <tbody id="tblbodyCantidadCie10">
                    </tbody>
                </table>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputOtroCieEvo">OTRO CIE 10</label>
                        </div>
                        <textarea class="form-control" rows="3" id="textOtroCieEvo">
                        </textarea>
                    </div>
                </div>



                <div class="row">
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm" onclick="agregarEvolucion()" id="btnAgregarEvol">GUARDAR
                        </button>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalResultadosLab"  onclick="validarREsultadosLab();">Buscar Resultados Laboratorio
                        </button>
                        <input type="text" id="ResLaboratorio" class="form-control">
                    </div>
                 <!--   <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-danger btn-sm" onclick="abrirReceta()" id="btnAgregarReceta"><i class="fas fa-notes-medical" style="margin-right: 7px"></i>Receta
                        </button>
                    </div>-->
                </div>
                <div class="row">
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-warning btn-sm" onclick="limpiarModal()" id="btnNuevoEvol">NUEVA EVOLUCION
                        </button>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <h2>Seguimientos Anteriores</h2>
                </div>
             <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                        <table class="table" id="tblEvoluciones2">
                            <thead>
                            <th>Diagnostico</th>
                            <th>Datos Subjetivos</th>
                            <th>Datos Objetivos</th>
                            <th>Ordenes Medicas</th>
                            <th>Comentarios</th>
                            <th>Hisopado</th>
                            <th>Laboratorios</th>
                            <th>Receta</th>
                            <th>Impresion</th>
                            </thead>
                            <tbody id="tblBodyEvoluciones">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fin modal Evolucion Paciente -->

<!-- Modal -->
<div class="modal" id="modalBuscar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buscar Medicamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="text" class="form-control" id="busMed" placeholder="Buscar">
                    </div>
                    <button type="button" class="btn btn-primary mb-2" onclick="buscarMed()">Buscar</button>
                </form>

                <table class="table table-bordered" id="tblMedicamentosBus">
                    <thead>
                    <tr>
                        <th scope="col">Nombre Medicamento</th>
                        <th scope="col">Presentacion</th>
                        <th scope="col">Averiguar</th>

                    </tr>
                    </thead>
                    <tbody id="tbodyMedicamentosBus">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>

        <!-- modal Evolucion intensivo  Paciente -->
        <div class="modal" id="modalSegEvoPacienteIntensivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center blue-gradient text-white">
                        <h4 class="modal-title w-100 font-weight-bold">EVOLUCION PACIENTE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                id="cMSegEvoInten">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="input-group mb-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="spanReMed">Registro Médico</span>
                                </div>
                                <input type="text" class="form-control" id="inputReMed" disabled>
                            </div>
                            <div class="input-group mb-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="spanNomPac">Nombre</span>
                                </div>
                                <input type="text" class="form-control" id="inputNomPacIn" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3 col-sm-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="spanEdadPac">Edad</span>
                                </div>
                                <input type="text" class="form-control" id="inputEdadPac" disabled>
                            </div>
                            <!--<div class="input-group mb-3 col-sm-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="spanGeneroPac">Género</span>
                                </div>
                                <input type="text" class="form-control" id="inputGeneroPac" disabled>
                            </div>-->
                            <div class="input-group mb-3 col-sm-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputRegistroEmer">No. Emergencia</span>
                                </div>
                                <input type="text" class="form-control" id="inputNoEmergenciaPac" disabled>
                            </div>
                            <div class="input-group mb-3 col-sm-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="spanNoChequeo">No. Chequeo</span>
                                </div>
                                <input type="text" class="form-control" id="inputNochequeo" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3 col-sm-auto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="spanConocido">Conocido por</span>
                                </div>
                                <textarea type="text" class="form-control" id="inputConocido" disabled></textarea>
                            </div>
                        </div>



                        <div class="card" style="margin-bottom: 17px">
                            <div class="card-header">
                                <h5>Datos Subjetivos</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group mb-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputRepEnfer">Reporte enfermería</span>
                                            </div>
                                            <textarea type="text" data-type="1" data-name="1" name="inputRepEnfer" class="form-control" rows="4" id="1"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group mb-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputRepTerapia">Reporte terapia respiratoria</span>
                                            </div>
                                            <textarea type="text"  data-name="2" name="inputRepTerapia" class="form-control" rows="4" id="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3 col-sm-auto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputDatObje">Datos Objetivos</span>
                                </div>
                                <textarea type="text" data-name="56" name="inputDatObje" class="form-control" id="56"></textarea>
                            </div>
                        </div>

                        <div id="accordion">
                            <div class="card" id="collapseHemodinamica">
                                <div class="card-header rgba-blue-light" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link font-weight-bold" style="font-size: medium; text" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fas fa-heartbeat" style="margin-right: 10px"></i> Hemodinamica
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputFrec">F.C.</span>
                                                </div>
                                                <input type="text" data-name="3" name="inputFrec" class="form-control" id="3">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPreArt">P/A</span>
                                                </div>
                                                <input type="text" data-name="4" name="inputPreArt" class="form-control" id="4">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPreArMed">PAM</span>
                                                </div>
                                                <input type="text" data-name="5" name="inputPreArMed" form-control" id="5">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputLact">Lactato</span>
                                                </div>
                                                <input type="text" data-name="6" name="inputLact" class="form-control" id="6">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputBicarbonato">HCO3</span>
                                                </div>
                                                <input type="text" data-name="7" name="inputBicarbonato" class="form-control" id="7">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPh">PH</span>
                                                </div>
                                                <input type="text" data-name="8" name="inputPh" class="form-control" id="8">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputDeltaC">Delta CO2</span>
                                                </div>
                                                <input type="text" data-name="9" name="inputDeltaC" class="form-control" id="9">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Nota</span>
                                                </div>
                                                <textarea class="form-control" name="txtNotaHemo" data-name="10"  rows="4" id="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="collapseVentilatorio">
                                <div class="card-header rgba-blue-light" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link font-weight-bold" style="font-size: medium; text" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <i class="fas fa-wind" style="margin-right: 10px"></i>Ventilatorio
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputResp">F.R.</span>
                                                </div>
                                                <input type="text" data-name="11" name="inputResp" class="form-control" id="11">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputSatResp">SO2</span>
                                                </div>
                                                <input type="text" data-name="59" name="inputSatResp" class="form-control" id="59">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPresArtOx">PaO2</span>
                                                </div>
                                                <input type="text" data-name="12" name="inputPresArtOx" class="form-control" id="12">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPc">PcO2</span>
                                                </div>
                                                <input type="text" data-name="13" name="inputPc" class="form-control" id="13">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPafi">PaFIO2</span>
                                                </div>
                                                <input type="text" data-name="14" name="inputPafi" class="form-control" id="14">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputTinsp">TINSP</span>
                                                </div>
                                                <input type="text" data-name="14" name="inputTinsp" class="form-control" id="63">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputDisp">DISP</span>
                                                </div>
                                                <input type="text" data-name="14" name="inputDisp" class="form-control" id="64">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputModVent">Modo ventilatorio</span>
                                                </div>
                                                <input type="text" data-name="15" name="inputModVent" class="form-control" id="15">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputProgra">Programación ventilador</span>
                                                </div>
                                                <input class="form-control" name="inputProgra" data-name="16" rows="4" id="16">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputVentilador">Ventilador</span>
                                                </div>
                                                <input class="form-control"  rows="4" id="inputVentilador">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputFi">FIO2</span>
                                                </div>
                                                <input type="text" data-name="17" class="form-control" id="17">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputFr">FR</span>
                                                </div>
                                                <input type="text" name="inputFr" data-name="18" class="form-control" id="18">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPi">PI</span>
                                                </div>
                                                <input type="text" name="inputPi" data-name="19" class="form-control" id="19">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPeep">Peep</span>
                                                </div>
                                                <input type="text" name="inputPeep" data-name="20" class="form-control" id="20">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputRelIE">Relación I/E</span>
                                                </div>
                                                <input type="text" name="inputRelIE" data-name="21" class="form-control" id="21">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputVol">Volumen</span>
                                                </div>
                                                <input type="text" name="inputVol" data-name="22" class="form-control" id="22">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Nota</span>
                                                </div>
                                                <textarea class="form-control" name="txtNotaVent" data-name="23"  rows="4" id="23"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="collapseInfeccioso">
                                <div class="card-header rgba-blue-light" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link font-weight-bold" style="font-size: medium; text" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <i class="fas fa-diagnoses" style="margin-right: 10px"></i>Infeccioso
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputFiebre">Fiebre</span>
                                                </div>
                                                <input type="text" name="inputFiebre" data-name="24" class="form-control" id="24">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputWBC">WBC</span>
                                                </div>
                                                <input type="text" name="inputWBC" data-name="25" class="form-control" id="25">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputNT">NT</span>
                                                </div>
                                                <input type="text" name="inputNT" data-name="26" class="form-control" id="26">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputCultivo">Cultivos</span>
                                                </div>
                                                <input type="text" name="inputCultivo" data-name="27" class="form-control" id="27">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputAntibiotico">Antibioticos</span>
                                                </div>
                                                <input type="text" name="inputAntibiotico" data-name="28" class="form-control" id="28">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputProcal">Procalcitonina</span>
                                                </div>
                                                <input type="text" name="inputProcal" data-name="29" class="form-control" id="29">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputInterlucina">Interlucina 6</span>
                                                </div>
                                                <input type="text" name="inputInterlucina" data-name="30" class="form-control" id="30">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPcr">PCR</span>
                                                </div>
                                                <input type="text" name="inputPcr" data-name="60" class="form-control" id="60">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputVS">V/S</span>
                                                </div>
                                                <input type="text" name="inputVS" data-name="31" class="form-control" id="31">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputSatResp">Nota</span>
                                                </div>
                                                <textarea type="text" name="inputSatResp" data-name="32" class="form-control" rows="4" id="32"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="collapseHematologia">
                                <div class="card-header rgba-blue-light" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link font-weight-bold" style="font-size: medium; text" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            <i class="fas fa-vials" style="margin-right: 10px"></i>Hematología
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputHB">HB</span>
                                                </div>
                                                <input type="text" name="inputHB" data-name="33" class="form-control" id="33">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputHT">HT</span>
                                                </div>
                                                <input type="text" name="inputHT" data-name="34" class="form-control" id="34">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPQ">P/Q</span>
                                                </div>
                                                <input type="text" name="inputPQ" data-name="61" class="form-control" id="61">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputTP">TP</span>
                                                </div>
                                                <input type="text" name="inputTP" data-name="35" class="form-control" id="35">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputTpT">TpT</span>
                                                </div>
                                                <input type="text" name="inputTpT" data-name="36" class="form-control" id="36">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputIWR">IWR</span>
                                                </div>
                                                <input type="text" name="inputIWR" data-name="62" class="form-control" id="62">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputNotaHematologia">Nota</span>
                                                </div>
                                                <textarea type="text" name="inputNotaHematologia" data-name="37" class="form-control" rows="4" id="37"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="collapseRenal">
                                <div class="card-header rgba-blue-light" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link font-weight-bold" style="font-size: medium; text" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            <i class="fas fa-user-md" style="margin-right: 10px"></i>Renal
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputEV">EU</span>
                                                </div>
                                                <input type="text" name="inputEV" data-name="38" class="form-control" id="38">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputCR">CR</span>
                                                </div>
                                                <input type="text" name="inputCR" data-name="39" class="form-control" id="39">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputBUN">BUN</span>
                                                </div>
                                                <input type="text" name="inputBUN" data-name="41" class="form-control" id="41">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputUsgRenal">USG RENAL</span>
                                                </div>
                                                <input type="text" name="inputUsgRenal" data-name="40" class="form-control" id="40">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputTfg">TFG</span>
                                                </div>
                                                <input type="text" name="inputTfg" data-name="65" class="form-control" id="65">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputNotaRenal">Nota</span>
                                                </div>
                                                <textarea type="text" name="inputNotaRenal" data-name="42" class="form-control" rows="4" id="42"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="collapseMetabolico">
                                <div class="card-header rgba-blue-light" id="headingSix">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link font-weight-bold" style="font-size: medium; text" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                            <i class="fas fa-prescription-bottle-alt" style="margin-right: 10px"></i>Metabolico
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGlucosa">Glucosa</span>
                                                </div>
                                                <input type="text" name="inputGlucosa" data-name="43" class="form-control" id="43">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputNa">Na</span>
                                                </div>
                                                <input type="text" name="inputNa" data-name="44" class="form-control" id="44">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPotasio">K</span>
                                                </div>
                                                <input type="text" name="inputPotasio" data-name="45" class="form-control" id="45">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputCa">Ca</span>
                                                </div>
                                                <input type="text" name="inputCa" data-name="46" class="form-control" id="46">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputMg">Mg</span>
                                                </div>
                                                <input type="text" name="inputMg" data-name="47" class="form-control" id="47">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputP">P</span>
                                                </div>
                                                <input type="text" name="inputP" data-name="48" class="form-control" id="48">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputC">C/</span>
                                                </div>
                                                <input type="text" name="inputC" data-name="49" class="form-control" id="49">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputBicarbonato">BICARBONATO HO3</span>
                                                </div>
                                                <input type="text" name="inputBicarbonato" data-name="66" class="form-control" id="66">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputPh">PH</span>
                                                </div>
                                                <input type="text" name="inputPh" data-name="67" class="form-control" id="67">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputEb">EB</span>
                                                </div>
                                                <input type="text" name="inputEb" data-name="68" class="form-control" id="68">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputNotaMetabolico">Nota</span>
                                                </div>
                                                <textarea type="text" name="inputNotaMetabolico" data-name="50" class="form-control" rows="4" id="50"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="collapseNeurologico">
                                <div class="card-header rgba-blue-light" id="headingSeven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link font-weight-bold" style="font-size: medium; text" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            <i class="fas fa-brain" style="margin-right: 10px"></i>Neurológico
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="row">
                                                <div class="input-group input-group-sm mb-sm-4 col-sm-3">
                                                    <button class="btn btn-success" onclick="abrirGlasgow()">GLASGOW
                                                    </button>
                                                </div>
                                                <div class="input-group input-group-sm mb-sm-5 col-sm-4">

                                                    <input class="form-control" id="idGrupoglasgow" hidden>
                                                </div>
                                            </div>

                                            <table class="table table-striped table-bordered" id="tbCantidadGlasgow">
                                                <thead class="success-color text-white">
                                                <tr align="center" class="active">
                                                    <td width="100">IdEscalaGlasgow</td>
                                                    <td width="380">Valor Glasgow </td>


                                                </tr>
                                                </thead>
                                                <tbody id="tblbodyCantidadGlasgow">
                                                </tbody>
                                            </table>


                                            <div class="input-group-sm mb-sm-4 col-sm-11">
                                                <div class="input-group-prepend">
                                                    <input class="form-control" id="Valorglasgow" hidden>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGlasgow">Glasgow</span>
                                                </div>
                                                <input type="text" name="inputGlasgow" data-name="51" class="form-control" id="51">
                                            </div>
                                            <div class="input-group mb-3 col-sm-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputRASS">RASS</span>
                                                </div>
                                                <input type="text" name="inputRASS" data-name="52" class="form-control" id="52">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputNotaNeuro">Nota</span>
                                                </div>
                                                <textarea type="text" name="inputNotaNeuro" data-name="53" class="form-control" rows="4" id="53"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="collapseNutricio">
                                <div class="card-header rgba-blue-light" id="headingEight">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link font-weight-bold" style="font-size: medium; text" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                            <i class="fas fa-apple-alt" style="margin-right: 10px"></i>Nutricio
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputDieta">Dieta</span>
                                                </div>
                                                <textarea type="text" name="inputDieta" data-name="54" class="form-control" rows="4" id="54"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputNotaNutricio">Nota</span>
                                                </div>
                                                <textarea type="text" name="inputNotaNutricio" data-name="55" class="form-control" id="55"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-4 col-sm-3">
                                <button class="btn btn-success" onclick="abrirCie10()">CIE 10
                                </button>
                            </div>
                            <div class="input-group input-group-sm mb-sm-5 col-sm-4">

                                <input class="form-control" id="ImpresionClinica2" hidden>
                            </div>

                        </div>
                        <div class="input-group-sm mb-sm-4 col-sm-11">
                            <div class="input-group-prepend">
                                <input class="form-control" id="txtImpresionClinica2" hidden>
                            </div>
                        </div>

                        <table class="table table-striped table-bordered" id="tbCantidadCie10">
                            <thead class="success-color text-white">
                            <tr align="center" class="active">
                                <td width="100">Código CIE10</td>
                                <td width="380">Descripcion </td>

                            </tr>
                            </thead>
                            <tbody id="tblbodyCantidadCie10_2">
                            </tbody>
                        </table>


                        <div class="row" style="margin-top: 17px">
                            <div class="input-group mb-3 col-sm-auto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputOtroCie">OTRO CIE10</span>
                                </div>
                                <textarea type="text" name="otroCie" class="form-control" rows="3" id="69"></textarea>
                            </div>
                        </div>
                        <div class="input-group input-group mb-3 col-sm-4">
                            <div class="input-group-prepend">
                                <label class="form-label-group" for="inputlaboratorios"><h5>Laboratorios</h5> </label>
                            </div>
                            <button type="button" class="btn btn-outline-green btn-circle waves-effect" onclick="abirLaboratorio($('#inputRegistroEmerEgre').val(), $('#fechaRevision').val());">
                                <i class="fas fa-flask"></i>
                            </button>
                            <input type="text" name="idCita2" id="70" class="form-control" disabled>
                        </div>



                        <div class="row" style="margin-top: 17px">
                            <div class="input-group mb-3 col-sm-auto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputPlan">Plan</span>
                                </div>
                                <textarea type="text" name="Plan" class="form-control" rows="5" id="57" ></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3 col-sm-auto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputComentario">Ordenes Medicas</span>
                                </div>
                                <textarea type="text" name="inputComentario" data-name="58" class="form-control" rows="5" id="58"></textarea>
                            </div>
                        </div>

                        <div class="card-footer">
                            <!--<div class="row" style="margin-top: 17px">
                                <div class="input-group mb-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputInternista">Internista</span>
                                    </div>
                                    <input type="text" class="form-control" rows="5" id="inputInternista">
                                </div>
                                <div class="input-group mb-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputIntensivista">Intensivista</span>
                                    </div>
                                    <input type="text" class="form-control" rows="5" id="inputIntensivista">
                                </div>
                            </div>-->

                            <div class="row">
                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-primary btn-sm" onclick="agregarEvolucionIntensivo()" id="btnAgregarEvolInten">GUARDAR
                                    </button>
                                </div>
                            </div>

                            <div class="modal-footer d-flex justify-content-center">
                                <h2>Seguimientos Anteriores</h2>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                                    <table class="table" id="tblEvolucionesIntensivo">
                                        <thead>
                                        <th>No. Chequeo</th>
                                        <th>Fecha de Chequeo</th>
                                        <th> idEvolucion Chequeo</th>
                                        <th>Receta</th>
                                        <th>Impresion</th>
                                        </thead>
                                        <tbody id="tblBodyEvolucionesIntensivo">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Fin modal intensivo Paciente -->
    </div>


<!--Modal  para agregar glasgow-->
<div class="modal" id="modalGlasgow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center blue-gradient text-white">
                <h4 class="modal-title w-100 font-weight-bold">GLASGOW</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarGlasgow()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formGlasgow">


                    <table id="tbGlasgow" class="table table-sm table-hover w3-border display" width="99%">
                        <thead class="primary-color text-white">
                        <tr>
                            <th class="text-center">PARAMETRO</th>
                            <th class="text-center">IDESCALA</th>
                            <th class="text-center">DESCRIPCION</th>
                            <th class="text-center">VALOR</th>

                        </tr>
                        </thead>
                        <tbody id="tbodyGlasgow">

                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="text-center">PARAMETRO</th>
                            <th class="text-center">IDESCALA</th>
                            <th class="text-center">DESCRIPCION</th>
                            <th class="text-center">VALOR</th>
                        </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div><!--Fin del modal glasgow-->

<!--Modal evolucion Intensivo-->
<div class="modal" id="modalEvolucionIntensivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center blue-gradient text-white">
                <h4 class="modal-title w-100 font-weight-bold">CHEQUEO MEDICO INTENSIVO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarEvoInten()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="input-group mb-3 col-sm-3">
                    <div class="input-group-prepend">
                        <input type="text" id="ResLaboratorioInten" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalResultadosLab"  onclick="validarREsultadosLab();">Buscar Resultados Laboratorio
                    </button>
                </div>

                <form id="formEvoChequeo">
                    <div class="modal-footer d-flex justify-content-center">
                        <h4>EVOLUCION INTENSIVO</h4>
                    </div>
                    <table id="tbEvoChequeo" class="table table-sm table-hover w3-border display"  width="99%">
                        <thead class="primary-color text-white">
                        <tr>
                            <th class="text-center">TIPO CHEQUEO</th>
                            <th class="text-center">DESCRIPCION</th>
                            <th class="text-center">grupo</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyEvoChequeo">
                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="text-center">TIPO CHEQUEO</th>
                            <th class="text-center">DESCRIPCION</th>
                            <th class="text-center">grupo</th>

                        </tr>
                        </tfoot>
                    </table>

                    <div class="modal-footer d-flex justify-content-center">
                        <h4>CIE 10</h4>
                    </div>
                    <table id="tbCieInten" class="table table-sm table-hover w3-border " width="99%">
                        <thead class="primary-color text-white">
                        <tr>
                            <th class="text-center">CÓDIGO</th>
                            <th class="text-center">DESCRIPCION</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyCieInten">
                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="text-center">CÓDIGO</th>
                            <th class="text-center">DESCRIPCION</th>

                        </tr>
                        </tfoot>
                    </table>
                    <div class="modal-footer d-flex justify-content-center">
                        <h4>GLASGOW</h4>
                    </div>
                    <table id="tbGlasgowInten" class="table table-sm table-hover w3-border " width="99%">
                        <thead class="primary-color text-white">
                        <tr>
                            <th class="text-center">DESCRIPCION</th>
                            <th class="text-center">VALOR</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyGlasgowInten">
                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="text-center">DESCRIPCION</th>
                            <th class="text-center">VALOR</th>

                        </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!--Fin del modal chequeo intensivo-->
</div>

<!--Modal  para agregar CIE10-->
<div class="modal" id="modalCIE10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center blue-gradient text-white">
                <h4 class="modal-title w-100 font-weight-bold">CIE10</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarCie10()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formcie">
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputBuscarCie">BUSCAR POR</label>
                            </div>
                            <select class="form-control" id="selCie10">
                                <option value="" disabled selected>ELIGE UNA OPCION</option>
                                <option value="1">CODIGO CIE10</option>
                                <option value="2">GRUPO</option>
                                <option value="3">NUMERO DE DIAGNOSTICO</option>
                                <option value="4">DIAGNOSTICO</option>
                            </select>
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputCodigoCie" id="labelTexto" hidden>INGRESA CÓDIGO O TEXTO </label>
                            </div>
                            <input type="text" class="form-control" id="inputTexto" hidden>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col col-sm-5 offset-1">
                            <button class="btn btn-success" type="button" onclick="mostrarDatosCie10()" id="btnBuscarCie10">BUSCAR</button>
                        </div>
                    </div>
                    <table id="tbCIE10" class="table table-sm table-hover w3-border display" width="99%">
                        <thead class="primary-color text-white">
                        <tr>


                            <th class="text-center">CÓDIGO</th>
                            <th class="text-center">GRUPO</th>
                            <th class="text-center">NÚMERO DIAGNÓSTICO</th>
                            <th class="text-center"> DIAGNÓSTICO</th>

                        </tr>
                        </thead>
                        <tbody id="tbodyResultados">

                        </tbody>
                        <tfoot>
                        <tr>

                            <th class="text-center">CÓDIGO</th>
                            <th class="text-center">GRUPO</th>
                            <th class="text-center">NÚMERO DIAGNÓSTICO</th>
                            <th class="text-center"> DIAGNÓSTICO</th>
                        </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!--Fin del modal-->
</div>

<!-- inicio modal agregar laboratorio medico -->
<div class="modal" id="modalLaboratorio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center blue-gradient text-white">
                <h4 class="modal-title w-100 font-weight-bold">Solicitud Laboratorio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modalLaboratorio').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-sm-6 offset-md-3">
                    <button id="btnGuardarLab" type="button" onclick="guardarLaboratorios($('#inputRegistroEmerEgre').val(), $('#fechaRevision').val());" class="btn btn-success btn-block">
                        Solicitar Examenes
                        <i class="fas fa-vial" style="size: 3px;"></i>
                    </button>
                </div>
                <BR>
                <form id="contentChecks">
                    <div class="row" id="contenerdorPrincipal">
                        <div id="contenedorPriCol" class="col-sm-4">
                            <div  class="tituloCenter col-sm-12"><label>Hematología</label></div>
                            <div id="contenedorHematologia" class="contornoDiv col-sm-12">


                            </div>

                            <div class="tituloCenter col-sm-12"><label>Coagulación</label></div>
                            <div id="contenedorCoagulacion" class="contornoDiv col-sm-12">


                            </div>

                            <div class="tituloCenter col-sm-12"><label>Heces y Orina</label></div>
                            <div id="contenedorHecesOrina" class="contornoDiv col-sm-12">


                            </div>

                            <div class="tituloCenter col-sm-12"><label>Marcadores Tumorales</label></div>
                            <div id="contenedorMarcadoresTumorales" class="contornoDiv col-sm-12">
                                <div class="container">
                                </div>
                            </div>

                            <div class="tituloCenter col-sm-12"><label>Orina 24 horas</label></div>
                            <div id="contenedorOrina24horas" class="contornoDiv col-sm-12">


                            </div>
                            <div class="tituloCenter col-sm-12"><label>Orina al Azar</label></div>
                            <div id="contenedorOrinaAzar" class="contornoDiv col-sm-12">
                            </div>
                            <div class="tituloCenter col-sm-12"><label>Bacteriología</label></div>
                            <div id="contenedorBacteriologia" class="contornoDiv col-sm-12">
                            </div>

                        </div>
                        <div id="contenedorSegCol" class="col-sm-4">
                            <div  class="tituloCenter col-sm-12"><label>Quimica Clínica</label></div>
                            <div id="contenedorQuimica" class="contornoDiv col-sm-12">


                            </div>
                        </div>
                        <div id="contenedorTerCol" class="col-sm-4">
                            <div  class="tituloCenter col-sm-12"><label>Inmunología</label></div>
                            <div id="contenedorInmunologia" class="contornoDiv col-sm-12">

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- Fin modal -->
    </div>
</div>

<!-- Modal resultados  laboratorio -->
<div class="modal fade container" id="modalResultadosLab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content text-center">
            <div class="modal-header blue-gradient text-center text-white">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align: center">Resultados de Laboratorio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="txtNoCita"># Cita</label>
                        </div>
                        <input type="text" class="form-control" id="txtNoCita"
                               placeholder="" disabled>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="txtRegistro">Registro Médico</label>
                        </div>
                        <input type="text" class="form-control" id="txtRegistro"
                               placeholder="285-2019-000000" ondblclick="EditarNumRegistro()" value="285-2019-0" disabled>
                        <input type="hidden" class="form-control" id="inputRegistroOld" value=""/ >
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="txtNombres">Nombres</label>
                        </div>
                        <input type="text" class="form-control" id="txtNombres" placeholder="Ingrese Nombres" disabled>
                    </div>
                </div>

                <!--tabla resultados -->
                <table id="tbResultados" class="table table-sm table-hover w3-border display" width="99%">
                    <thead class="primary-color text-white">
                    <tr>

                        <th class="text-center">PRUEBA</th>
                        <th class="text-center">RESULTADO</th>
                        <th class="text-center">UNIDADES</th>

                    </tr>
                    </thead>
                    <tbody id="tbodyResultados">

                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="text-center">PRUEBA</th>
                        <th class="text-center">RESULTADO</th>
                        <th class="text-center">UNIDADES</th>
                    </tr>
                    </tfoot>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">CERRAR</button>

            </div>
        </div>
    </div>
</div><!-- fin Modal -->

<!--Modal  para agregar receta-->
<div class="modal" id="modalReceta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center blue-gradient text-white">
                <h4 class="modal-title w-100 font-weight-bold">Receta</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarReceta()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="Emergencia">
                <input type="hidden" id="ServEnc">
                <input type="hidden" id="Cama">
                <div class="row">

                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistroMed">Registro médico</label>
                        </div>
                        <input type="text" class="form-control" id="inputRegistroMedRec" disabled>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombrePaciente">Nombre paciente</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombrePaciente" disabled>
                    </div>

                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputFecha">Fecha</label>
                        </div>
                        <input type="date" class="form-control" id="inputFecha">
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputFecha">No. Evolucion</label>
                        </div>
                        <input type="text" class="form-control" id="inputNumEvolucion" disabled>
                    </div>
                </div>

                </select>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-10">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombrePaciente">Medicamentos</label>
                        </div>
                        <select class="form-control" id="selMedicamentos" onchange="InsertaNombre(this.value)">
                            <option>SELECCIONE UN MEDICAMENTO</option>
                    </div>
                    <div class="col col-sm-5">
                        <input class="form-control" id="MedInsert" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombrePaciente">Medida Medicamento</label>
                        </div>
                        <input type="text" class="form-control" id="medMedicamento">
                    </div>

                </div>
                <div class="row">
                    <div class="input-group col-sm-11">
                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" style="width: 109px" for="inputNombrePaciente">Dosis</label>
                                </div>
                                <input type="text" class="form-control" id="inputDosis">
                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" style="width: 109px" for="inputNombrePaciente">Medida</label>
                                </div>
                                <select class="form-control" id="selMedida">
                                    <option value="g">gramos</option>
                                    <option value="mg">mili gramos</option>
                                    <option value="ml">mililitros</option>
                                </select>
                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" style="width: 109px" for="inputNombrePaciente">Via</label>
                                </div>
                                <select class="form-control" id="selVia">
                                    <option value="PO">PO</option>
                                    <option value="IV">IV</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="input-group col-sm-11">
                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" style="width: 109px" for="inputNombrePaciente">Frecuencia</label>
                                </div>
                                <input type="text" class="form-control" id="inputFrecuencia">
                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                <div class="input-group-prepend">
                                    <label class="input-group-text"  style="width: 109px" for="inputNombrePaciente">Medida Tiempo</label>
                                </div>
                                <select class="form-control" id="selMedTiempo">
                                    <option value="hora(s)">Horas</option>
                                </select>
                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" style="width: 109px" for="inputNombrePaciente">Dia Semana</label>
                                </div>
                                <select class="form-control" id="selDia">
                                    <option value="L">Lunes</option>
                                    <option value="M">Martes</option>
                                    <option value="X">Miercoles</option>
                                    <option value="J">Jueves</option>
                                    <option value="V">Viernes</option>
                                    <option value="S">Sabado</option>
                                    <option value="D">Domingo</option>
                                </select>
                            </div>
                            <input type="hidden" id="codInsumoAlmacen">
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" onclick="agregarTabla()">Agregar <i class="fas fa-plus"></i></button>
                <input type="hidden" id="totalDMedicina">
                <input type="hidden" id="IdEnca">
                <br>
                <br>

                <h3 style="text-align: center">Medicamentos</h3>
                <table class="table table-hover" id="tblMedicamentos">
                    <thead>
                    <tr>
                        <th scope="col">Medicamento</th>
                        <th scope="col">Dosis</th>
                        <th scope="col">Medida</th>
                        <th scope="col">Via</th>
                        <th scope="col">Frecuencia</th>
                        <th scope="col">Lapso T.</th>
                        <th scope="col">Dia</th>
                        <th scope="col">Cantidad Medicamentos</th>
                    </tr>
                    </thead>
                    <tbody id="tbodyMedicamentos">
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col col-sm-5 offset-1">
                    <button class="btn btn-success" onclick="agregarUnidosis()" id="btnGReceta">GUARDAR</button>
                </div>
                <div class="col col-sm-5 offset-1">
                    <button class="btn btn-primary" onclick="abrirUnidosisAnterirores($('#inputNumEvolucion').val())" id="btnUni">Recetas anteriores</button>
                </div>
            </div>

            <!-- <button class="btn btn-success" onclick="abrirReceta()" id="btnGReceta">IMPRIMIR</button></center>-->
        </div>
        <!--Fin del modal-->
    </div>
</div>

<div class="modal" id="modalRecetasAnteriores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center blue-gradient text-white">
                <h4 class="modal-title w-100 font-weight-bold">Receta Anteriores</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarUnidosisAnteriores()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="contenedorUnidosis">

                </div>

            </div>
        <!--Fin del modal-->
    </div>
</div>
</div>


<script src="./js/js_EvolucionEncamamiento.js?v=1906"></script>
