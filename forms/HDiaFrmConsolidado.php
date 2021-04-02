<!-- FORMULARIO PRINCIPAL -->
<div id="Cita" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">CONSOLIDADO HOSPITAL DE DÍA</h3>
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
                            onclick="nuevaTabla();" > Mostrar Agenda <i class="fas fa-list"></i>
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


        <table id="tbHDiaAgenda" class="table table-hover table-striped" >
            <thead class="stylish-color text-white">
            <tr>
                <th scope="col">Turno </th>
                <th scope="col">Registro Medico</th>
                <th scope="col">Nombre</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Quirófano</th>
                <th scope="col">Procedimiento</th>
                <th scope="col">Estado</th>
            </tr>
            </thead>
            <tbody id="tbodyAgenda">
            </tbody>
        </table>

    </div>
</div>


<!-- Modal muestra menú al seleccionar paciente -->
<div class="modal" id="modalConBotones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modalConBotones').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="col col-sm-10">
                    <form id="frmPaciente">
                        <div class="row" style="margin-left: 3px">
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

                        <div class="row" style="margin-left: 3px">
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

                        <div class="row" style="margin-left: 3px">
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
                <div class="card-columns">
                    <div class="card text-center text-white" type="button" data-toggle="modal" data-target="" onclick="abrirModalEnfermeria()">
                        <div class="card-body bg-primary">
                     <span style="font-size: 7em; color: white;">
                        <i class="fas fa-user-nurse"></i>
                    </span>
                            <h5 class="card-title">ENFERMERÍA</h5>
                        </div>
                    </div>
                    <div class="card text-white text-center" type="button" data-toggle="modal" data-target="" onclick=" abrirModalCirujano()">
                        <div class="card-body bg-primary" >
                 <span style="font-size: 7em; color: white;">
                    <i class="fas fa-user-md"></i>
                </span>
                            <h5 class="card-title">CIRUJANO</h5>
                        </div>
                    </div>
                    <div class="card text-center text-white" type="button" data-toggle="modal" data-target="" onclick="abrirModalAnestesia()">
                        <div class="card-body bg-primary">
                            <span style="font-size: 7em; color: white;"><i class="fas fa-syringe"></i></span>
                            <h5 class="card-title">ANESTESIÓLOGO</h5>
                        </div>
                    </div>
                    <!--    <div class="card text-center text-white" type="submit" data-toggle="modal" data-target="#exampleModal">
                             <div class="card-body bg-primary">
                <span style="font-size: 7em; color: white;">
                 <i class="fas fa-baby"></i>
             </span>
                                 <h5 class="card-title">PEDIATRA</h5>
                             </div>
                         </div>
-->
                </div>
            </div>

        </div>
    </div>
</div>




<!-- Modal datos del paciente
<div class="modal fade" id="modalPaciente" tabindex="-1" role="dialog" aria-labelledby="modalLabelPaciente" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelPaciente">DATOS DEL PACIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>-->

<!-- Modal datos de Enfermeria -->
<div class="modal" id="modalEnfermeria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold">Datos Enfermeria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarmodalE()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <form id="datosEnfermeria">
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputServicio">Servicio que lo refiere</label>
                            </div>
                            <select class="custom-select" id="selServicio">
                                <option>Seleccione un servicio</option>
                                <option value="COEX">COEX</option>
                                <option value="Emergencia">Emergencia</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputTipoCirugia">Tipo de Cirugía</label>
                            </div>
                            <select class="form-control" id="selTipoCirugia">
                                <option value="Electiva">Electiva</option>
                                <option value="Urgencia">Urgencia</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputEspecialidad">Especialidad</label>
                            </div>
                            <input type="text" class="form-control" id="inputEspecialidad" disabled>
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputTipoCirugia">Patología</label>
                            </div>
                            <select class="form-control" id="selPatologia" onchange="mostrarPatoEnfermeria();">
                                <option value="N">No</option>
                                <option value="S">Si</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputHoraIngresoAV">Hora de ingreso al Área Verde</label>
                            </div>
                            <input type="time" class="form-control" id="timeAVerdeIngresoDe">
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputHoraIngresoQ">Hora de ingreso a Quirófano</label>
                            </div>
                            <input type="time" class="form-control" id="timeIngresoQuirofanoDe">

                        </div>

                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-auto col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNombreCirculante">Nombre Circulante</label>
                            </div>
                            <select class="form-control" id="selCirculante">

                            </select>
                        </div>

                        <div class="input-group input-group-sm mb-sm-auto col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNombreInstru">Nombre Instrumentista</label>
                            </div>
                            <select class="form-control" id="selInstrumentista">

                            </select>

                        </div>
                    </div>
                </form>
                <form id="datosEnfermeria2">
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputHoraEgresoAV">Hora de egreso Quirofano</label>
                            </div>
                            <input type="time" class="form-control" id="timeEgresoQuirofano">
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputHoraEgresoAV">Hora de egreso Área Verde</label>
                            </div>
                            <input type="time" class="form-control" id="timeEgresoAVerdeDe">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputRegistro">Traslado post operatorio</label>
                            </div>
                            <select class="custom-select" id="selTraslado">
                                <option value="0">Sala de recuperación</option>
                                <option value="1">Encamamiento</option>
                                <option value="2">Morgue</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputRegistro" id="labelPatoEnfermeria" hidden>Muestra Patolagía</label>
                            </div>
                            <input type="text" class="form-control" id="muestraPatoEnfermeria" hidden >
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputRegistro" id="labelPatoEstadoE" hidden>Estado Patolagía</label>
                            </div>
                            <input type="text" class="form-control" id="PatoEstadoE" hidden >
                        </div>
                    </div>
                    <input type="hidden" id="inputHdiaNumProgE">
                </form>
            </div>




            <div class="modal-footer">

                <!--<button type="button" class="btn btn-primary" id="btnActualizar">Actualizar</button>-->
            </div>
        </div>
    </div>
</div>



<!-- Modal datos de Cirujano -->
<div class="modal" id="modalCirujano" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold">Datos Cirujano</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarmodalC();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmCirujano">
                    <div class="form-group">
                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputNombreDiag">Nombre diagnostico de ingreso</label>
                                </div>
                                <input type="text" class="form-control" id="inputNombreDiag">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-auto col-sm-auto">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputProPlanificado">Procedimiento planificado</label>
                                </div>
                                <input type="text" class="form-control" id="inputProPlanificado">
                            </div>
                        </div>
                        <!--<label for="exampleFormControlTextarea1">Diagnóstico</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>-->
                    </div>
                    <h5 class="modal-title" id="modalLabelPostoperatorio">POST OPERATORIO</h5>
                    <div class="modal-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputDiagnostico">Diagnostico</label>
                                    </div>
                                    <textarea rows="3"  class="form-control" id="inputMedicoDiagnostico"> </textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputNombreProRealizado">Nombre procedimiento realizado</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputNombreProRealizado">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-auto col-sm-6">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputCirujano">Cirujano</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputCirujano" disabled>
                                </div>
                                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputAyudante1">Ayudante 1</label>
                                    </div>
                                    <select class="form-control" id="inputAyudante1" style="width: 300px">
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-auto col-sm-6">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputAnestesiologo">Anestesiólogo </label>
                                    </div>

                                    <input type="text" class="form-control" id="inputAnestesiologo" disabled>
                                </div>
                                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputAyudante2">Ayudante 2</label>
                                    </div>
                                    <select class="form-control" id="inputAyudante2">

                                    </select>
                                </div>
                                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputComplicaciones">Complicaciones</label>
                                    </div>
                                    <select class="custom-select" id="selComplicacionC" onchange="mostrarComplicacion();">
                                        <option value="N">No</option>
                                        <option value="S">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label id="inputTComplicacionCL" class="input-group-text" for="inputTipoComplicacion" hidden>Tipo de complicación</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputTipoComplicacionC" hidden>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputPatologia"> Patología </label>
                                    </div>
                                    <select class="form-control" id="selPatologiaC" onchange="mostrarPatologia();">
                                        <option value="N">No</option>
                                        <option value="S">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label id="inputTMuestra" class="input-group-text" for="inputMuestar" hidden>Muestra Enviada</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputMuestar" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <input type="hidden" id="inputHdiaNumProgC">
            </form>
            <div class="modal-footer">

                <!--<button type="button" class="btn btn-primary">Actualizar</button>-->
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal datos de Anestesia -->
<div class="modal" id="modalAnestesia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold">Datos Anestesiologo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarmodalA()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmAnestesia">

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputNomAnestesiologo">Anestesiólogo </label>
                            </div>
                            <input type="text" class="form-control" id="inputNomAnestesiologo" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputInicioAnestesia">Hora inicio anestesia</label>
                            </div>
                            <input type="time" class="form-control" id="inputInicioAnestesia">
                        </div>

                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputInicioProQ">Hora inicio de proceso quirúrgico</label>
                            </div>
                            <input type="time" class="form-control" id="inputInicioProQ" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputFianlAnestesia">Hora final de anestesia </label>
                            </div>
                            <input type="time" class="form-control" id="inputFianlAnestesia">
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputFinalProQ">Hora final de proceso quirúrgico </label>
                            </div>
                            <input type="time" class="form-control" id="inputFinalProQ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="container; row">
                            <div class="sinborde">
                                <label class="sinborde mb-sm-12 col-sm-12" style="font-size: 14px; font-weight: bold; text-align: center">Anestesia local o sedasión </label>
                                <div class="row">
                                    <div class="col-sm col-md-auto">
                                        <div class="custom-control custom-checkbox">
                                            <label><input type="checkbox" id="aLoc1" value="Lidocaina"> Lidocaina </label><br>
                                            <input type="checkbox" id="aLoc2" value="Bupivacaina isobarica"><label for="aLoc2">Bupivacaina isobarica</label><br>
                                            <input type="checkbox" id="aLoc3" value="Bupivacaina raquideo"><label for="aLoc3">Bupivacaina raquideo</label><br>
                                            <input type="checkbox" id="aLoc4" value="Bupivacaina hiperbarica"><label for="aLoc4"> Bupivacaina hiperbarica </label><br>
                                            <input type="checkbox" id="aLoc5" value="Neuroaxial epidural"><label for="aLoc5"> Neuroaxial epidural </label><br>
                                            <input type="checkbox" id="aLoc6" value="Neuroaxial combinado"><label for="aLoc6"> Neuroaxial combinado </label><br>
                                        </div>
                                    </div>

                                    <div class="col-sm">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="aLoc7" value="Midazolam"><label for="aLoc7"> Midazolam </label><br>
                                            <input type="checkbox" id="aLoc8" value="Fentanyl"><label for="aLoc8"> Fentanyl </label><br>
                                            <input type="checkbox" id="aLoc9" value="Ketamina"><label for="aLoc9"> Ketamina </label><br>
                                            <input type="checkbox" id="aLoc10" value="Propofol"><label for="aLoc10"> Propofol </label><br>
                                            <input type="checkbox" id="aLoc11" value="Morfina"><label for="aLoc11"> Morfina </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container; row" style="margin-left: 120px">
                            <div class="col-sm">
                                <label class="sinborde mb-sm-12 col-sm-12" style="font-size: 14px; font-weight: bold; text-align: center">Anestesia General </label>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="aGen1" value="midazolam"><label for="aLoc8"> midazolam </label><br>
                                            <input type="checkbox" id="aGen2" value="fentanyl"><label for="aLoc9"> fentanyl </label><br>
                                            <input type="checkbox" id="aGen3" value="ketamina "><label for="aLoc10"> ketamina  </label><br>
                                            <input type="checkbox" id="aGen4" value="propofol"><label for="aLoc11"> propofol </label><br>
                                            <input type="checkbox" id="aGen5" value="lidocaina"><label for="aLoc12"> lidocaina </label><br>
                                            <input type="checkbox" id="aGen6" value="sevorane"><label for="aLoc13"> sevorane </label><br>
                                            <input type="checkbox" id="aGen7" value="isofluorane"><label for="aLoc14"> isofluorane </label>
                                        </div>
                                    </div>

                                    <div class="col-sm">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="aGen8" value="Succinilcolina"><label for="aLoc8"> Succinilcolina </label><br>
                                            <input type="checkbox" id="aGen9" value="Atracurio"><label for="aLoc9"> Atracurio </label><br>
                                            <input type="checkbox" id="aGen10" value="Vecuronio"><label for="aLoc10"> Vecurio </label><br>
                                            <input type="checkbox" id="aGen11" value="Neostigima"><label for="aLoc11"> Neostigima </label><br>
                                            <input type="checkbox" id="aGen12" value="Naloxona"><label for="aLoc12"> Naloxona </label><br>
                                            <input type="checkbox" id="aGen13" value="Flumazenil"><label for="aLoc13"> Flumazenil </label><br>
                                            <input type="checkbox" id="aGen14" value="Atropina"><label for="aLoc14"> Atropina </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend mb-sm-3">
                                <label class="input-group-text" for="inputTipoAnestesia">Complicación anestésica transoperatoria</label>
                            </div>
                            <select class="custom-select form-control" id="SelCompliTrans" onchange="mostrarCompliAnestesia()" class="form-control">
                                <option value="N">No</option>
                                <option value="S">Si</option>

                            </select>
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <textarea rows="1" class="form-control" id="TipCompliTrans" hidden></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend mb-sm-3">
                                <label class="input-group-text " for="inputTipoAnestesia">Complicación en recuperación</label>
                            </div>
                            <select class="custom-select form-control" id="SelCompliRecu" onchange="mostrarCompliRecuperacion()" class="form-control">
                                <option value="N">No</option>
                                <option value="S">Si</option>
                            </select>
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <textarea rows="1" class="form-control" id="compliRecu" hidden></textarea>
                        </div>
                    </div>

                    <div class="row">

                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend mb-sm-3">
                                <label class="input-group-text " for="inputTestAl">Test de Aldrete</label>
                            </div>
                            <select class="custom-select form-control" id="SelTestAldrete" class="form-control">
                                <option value="NA">No Aplica</option>
                                <option value="S">Si</option>
                                <option value="N">No</option>
                            </select>
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">

                            <select class="custom-select form-control" id="SelTestAldreteP" class="form-control">
                                <option value="0">Selecciones puntuacion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend mb-sm-3">
                                <label class="input-group-text " for="inputEvBomage">Evaluación de Bomage</label>
                            </div>
                            <select class="custom-select form-control" id="SelEvBomage" class="form-control">
                                <option value="NA">No Aplica</option>
                                <option value="S">Si</option>
                                <option value="N">No</option>
                            </select>
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">

                            <select class="custom-select form-control" id="SelEvBomageP" class="form-control">
                                <option value="0">Selecciones puntuacion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="inputHdiaNumProgA">
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <div class="input-group-prepend mb-sm-3">
                                <label class="input-group-text " for="inputEvBomage">Estado de Cirugia</label>
                            </div>
                            <select class="custom-select form-control" id="SelEstadoCiru" class="form-control">
                                <option>Seleccione Estado</option>
                            </select>
                        </div>
                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                            <textarea rows="1" class="form-control" id="inputObservacionFinal"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnGuardarA" onclick="guradarAnestesia()">Guardar</button>
                <!--<button type="button" class="btn btn-primary" onclick="actualizarAnestesia()">Actualizar</button>-->
            </div>
        </div>
    </div>
</div>


<script src="./js/js_Consolidado.js" type="text/javascript" defer></script>

