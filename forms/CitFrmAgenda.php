<!-- IMAGEN DE CARGA -->
<div class="d-flex justify-content-center">
    <div id="xload" class="spinner-grow text-primary" role="status" style="width: 45rem; height: 45rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- FIN IMGAGEN CARGA -->


<!-- fin formulario diagnostico paciente -->

<div id="vcontent" class="">
    <div class="card" id="Agenda">
        <div class="modal-header text-center text-white blue-gradient">
            <h3 class="modal-title w-100 font-weight-bold">AGENDA</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#Agenda').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="input-group mb-sm-3 col-sm-4">
                    <div class="align-self-xl-auto">
                        <label class="input-group-text" for="Fecha">Fecha:</label>
                    </div>
                    <!-- <input type="date" class="form-control" id="fecha" name="fecha"> -->
                    <input type="text" id="fecha" class="form-control">
                </div>
                <div class="input-group mb-sm-3 col-sm-4">
                    <div class="align-self-xl-auto">
                        <label class="input-group-text" for="ResLaboratorio">Laboratorios</label>
                    </div>
                    <!-- <input type="date" class="form-control" id="fecha" name="fecha"> -->
                    <input type="text" id="ResLaboratorio" class="form-control">
                    <button class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal"  onclick="BuscarResLaboratorio();">buscar</button>
                </div>
            </div>



            <!-- Modal resultados  laboratorio -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Resultados de Laboratorio</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
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
                            <table id="tbResultados" class="table table-sm table-hover w3-border display table-striped" width="99%">
                                <thead class="stylish-color text-white">
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>

                        </div>
                    </div>
                </div>
            </div><!-- fin Modal -->

            <div id="botonesCitas"></div>
        </div>
        <div id="contenedorTabla" class="col-sm-10 align-self-center">
            <table id="tbAgenda" class="table table-hover" hidden>
                <thead class="primary-color-dark text-white">
                <tr>
                    <th scope="col" hidden># Cita</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Registro Medico</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Observacion</th>
                </tr>
                </thead>
                <tbody id="tbodyAgenda">
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- inicio modal Info completa Agenda -->
<div class="modal" id="modalAgenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center blue-gradient text-white">
                <h4 class="modal-title w-100 font-weight-bold">Agenda</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modalAgenda').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <input type="button" class="btn btn-block" value="Comenzar" id="btnAtender"
                               onclick="atenderPaciente($('#btnAtender').val());" style="background: #FFBF00">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="llegadaTarde" value="N">
                        <label class="form-check-label" for="inlineCheckbox1">Paciente llego tarde</label>
                    </div>

                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputCUI"># Cita</label>
                        </div>
                        <input type="text" class="form-control" id="inputNoCita"
                               placeholder="" disabled>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">Registro Médico</label>
                        </div>
                        <input type="text" class="form-control" id="inputRegistro"
                               placeholder="285-2019-000000" ondblclick="EditarNumRegistro()" value="285-2019-0" disabled>
                        <input type="hidden" class="form-control" id="inputRegistroOld" value=""/ >
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombres">Nombres</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombres" placeholder="Ingrese Nombres" disabled>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="Especialidad">Especialidad</label>
                        </div>
                        <input type="text" class="form-control" id="inputEspecialidad"
                               placeholder="Ingrese Especialidad" disabled>
                    </div>

                </div>

                <div class="input-group input-group-sm mb-sm-3" id="referido">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputLugarReferido">Observacion Cita</label>
                    </div>
                    <input type="text" class="form-control" id="inputObservacionCita"
                           placeholder="Ingrese Observaciones" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputObservacion">Observación Medico</label>
                    </div>
                    <textarea rows="3" type="text" class="form-control" id="comentarioFinal"
                              placeholder="Ingrese observaciones de la cita, este especio puede ir vacio"></textarea>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <input type="button" class="btn btn-block btn-primary" value="Insertar Comentario"
                               id="btnComentario" onclick="insertarComentario($('#inputNoCita').val());">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="asistenciaPaciente" value="N">
                        <label class="form-check-label" for="inlineCheckbox1">Paciente no se presento</label>
                    </div>
                    <div>
                        <button type="button" class="btn btn-outline-green btn-circle waves-effect" onclick="abirLaboratorio($('#inputRegistro').val(), $('#fechaCita').val());">
                            <i class="fas fa-flask"></i>
                        </button>
                    </div>
                    <button hidden id="btnVendaje" type="button" class="btn btn-outline-yellow btn-circle waves-effect" onclick="modalCitasVendaje();">
                        <i class="fas fa-band-aid"></i>
                    </button>

                    <!--
                                                <button id="btnPatologia" type="button" class="btn btn-secondary btn-lg" onclick="abrirPatologia();">PATOLOGÍA
                                                   <i class="fas fa-tasks"></i>
                                                </button>

                                                <button type="button" class="btn btn-secondary btn-lg active" role="button"
                                                                    aria-pressed="true" data-toggle="modal" onclick="abrirCitologia();">CITOLOGÍA
                                                    <i class="fas fa-tasks"></i>
                                                </button>
                    -->

                    <input id="fechaCita" type="hidden">
                    <input id="inputAtencion" type="hidden">
                    <input id="inputAtencionFin" type="hidden">

                </div><!-- modal -->

                <!-- ----------------------------------------------------------------------------------------------------------------------------------- -->

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
                                    <button id="btnGuardarLab" type="button" onclick="guardarLaboratorios($('#inputRegistro').val(), $('#fechaCita').val());" class="btn btn-success btn-block">
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



                <!-- Inicio modal citas para vendaje -->
                <div class="modal" id="modalCitasVendaje" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">

                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center blue-gradient text-white">
                                <h4 class="modal-title w-100 font-weight-bold">CITAS</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                        onclick="$('#modalCitasVendaje').fadeOut();">
                                    <span aria-hidden="true" class="text-white">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="Cita" class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="input-group mb-sm-3 col-sm-3">
                                                    <div id="datepicker"></div>
                                                    <div id="datos">
                                                        <!-- Campo de texto que recibira el valor seleccionado en el datepicker
                                                        le he puesto el atributo readonly para no poder escribir directamente -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <br>
                                                <div class="input-group mb-sm-3 col-sm-9 offset-md-1">
                                                    <div class="input-group-prepend">
                                                        <label for="fecha" class="input-group-text">Fecha:</label>
                                                    </div>
                                                    <input class="form-control col col-sm-5" type='text' name='fechaCalendario' id='fechaCalendario'
                                                           readonly>
                                                </div>
                                                <div class="input-group mb-sm3 col-sm-3 row offset-md-2">
                                                    <button type="button" id="btnGenerar" class="btn btn-outline-blue btn-circle waves-effect"
                                                            onclick="verHorarios();">
                                                        <i class="fas fa-play"></i>
                                                    </button>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="horariosDispinibles">
                                        </div>
                                        <div id="botonesCitas">
                                            <div>
                                                <button class="btn col-sm-6" type="button" id="btnClinicaVendaje" style="background: #FA5858;"  onclick="abriraModalAgregarCitas(71);">CLINICA VENDAJE</button>
                                            </div>
                                        </div>
                                        <div class="table-responsive text-center">
                                            <table id="tbCitasVendaje" class="table table-hover" hidden>
                                                <thead class="primary-color-dark text-white">
                                                <tr>
                                                    <th scope="col" hidden># Cita</th>
                                                    <th scope="col">Hora Inicio</th>
                                                    <th scope="col">Hora Fin</th>
                                                    <th scope="col">Registro Medico</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Especialidad</th>
                                                    <th scope="col">Observacion</th>
                                                    <th scope="col">Eliminar</th>
                                                </tr>
                                                </thead>
                                                <tbody id="tbodyCitasVendaje">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- modal -->
                        </div>
                    </div>
                </div>
                <!-- Fin modal citas para vendaje-->

                <div class="modal" id="agregarCitaDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center text-white blue-gradient">
                                <h4 class="modal-title w-100 font-weight-bold">INFORMACION DE CITA</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                        onclick="$('#agregarCitaDatos').fadeOut();">
                                    <span aria-hidden="true" class="text-white">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="formDatosCita">
                                    <div class="row">
                                        <div class="input-group col-sm-12 mb-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputRegistroMedico">Registro Médico</label>
                                            </div>
                                            <select id="inputRegistroMedico" class="form-control"></select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="input-group-text" for="validationTooltip01">Fecha</label>
                                            <input type="date" class="form-control" id="fechaModal">
                                        </div>


                                        <div class="col-md-3 mb-3">
                                            <label class="input-group-text" for="validationTooltip02">Hora Inicio</label>
                                            <input type="time" class="form-control" id="horaInicio" onchange="sumaTiempo();">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label class="input-group-text" for="validationTooltip02">Hora Fin</label>
                                            <input type="time" class="form-control" id="horaFin">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="input-group-text" for="inputAddress3">Observación</label>
                                        <input type="text" class="form-control" id="inputObservaciones"
                                               placeholder="Ingrese observaciones">
                                    </div>
                                </form>
                                <div>
                                    <input type="hidden" id="numero_cita" value="">
                                    <input type="hidden" id="numero_clinica" value="">
                                </div>
                                <div class="container">
                                    <div class="form-check form-check-inline  col-sm-12">
                                        <button class="btn btn-warning float-center" onclick="masTiempo();" id="masTiempo">Instructivo
                                    </div>
                                </div>
                                <button class="btn btn-primary float-left" onclick="fn_guardarCita();" id="btn_guardarCita">GUARDAR
                                </button>
                                <button class="btn btn-danger float-right" onclick="fn_eliminarCita();" id="btn_eliminarCita">ELIMINAR
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin modal AgragarCita -->




                <script src="./js/js_Agenda.js" type="text/javascript" defer></script>