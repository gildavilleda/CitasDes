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
            <h3 class="modal-title w-100 font-weight-bold">AGENDA LABORATORIO</h3>
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
                    <input type="text" id="idClinica" class="form-control" hidden>
                </div>

            </div>
            <div id="botonesCitas"></div>
        </div>
        <div id="contenedorTabla" class="col-sm-10 align-self-center">
            <table id="tbAgenda" class="table table-hover table-striped" hidden>
                <thead class="stylish-color text-white">
                <tr>
                    <th scope="col" hidden># Cita</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Registro Medico</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Observacion</th>
                    <th scope="col">Estatus</th>
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
                <h4 class="modal-title w-100 font-weight-bold">Listado examenes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarAgendaLaboratorio()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <input type="button" class="btn btn-block" value="Comenzar" id="btnAtender"
                               onclick="atenderPaciente($('#btnAtender').val());" style="background: #FFBF00">
                    </div>
                    <!-- <div class="form-check form-check-inline">
                         <input class="form-check-input" type="checkbox" id="llegadaTarde" value="N">
                         <label class="form-check-label" for="inlineCheckbox1">Paciente llego tarde</label>
                     </div> -->

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
                        <input type="hidden" class="form-control" id="inputRegistroOld" value=""/>
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

                <div id="contenedorTablaLaboratorios" class="col-sm-10 align-self-center">
                    <table id="tbLaboratorios" class="table table-hover table-striped">
                        <thead class="stylish-color text-white">
                        <tr>
                            <th scope="col">Nombre Laboratorio</th>
                            <th scope="col">Codigo</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyLaboratorios">
                        </tbody>
                    </table>
                </div>


                <input id="fechaCita" type="hidden">
                <input id="inputAtencion" type="hidden">
                <input id="inputAtencionFin" type="hidden">

            </div><!-- modal -->

        </div>
    </div>


    <script src="./js/js_AgendaLaboratorio.js?v=1914" type="text/javascript" defer></script>


