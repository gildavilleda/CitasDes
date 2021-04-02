<style>
    body {
        font-family: "Roboto", "Helvetica", "Arial", "Sans-serif";
    }
</style>

<!-- IMAGEN DE CARGA -->
<div class="d-flex justify-content-center">
    <div id="xload" class="spinner-grow text-primary" role="status" style="width: 45rem; height: 45rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- FIN IMGAGEN CARGA -->

<div id="vcontent" style="display: none">
    <div class="card" id="Pacientes">
        <div class="modal-header text-center text-white blue-gradient">
            <button type="button" class="btn primary-color-dark btn-circle float-left" onclick="fn_NuevoPaciente();">
                <i class="fas fa-user-plus"></i>
            </button>
            <h3 class="modal-title w-100 font-weight-bold">PACIENTES</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#vcontent').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <div id="table" class="table-responsive">
                <table id="tbpacientes" class="table table-sm table-hover table-striped" width="100%">
                    <thead class="stylish-color text-white">
                    <tr>
                        <th class="">Registro Medico</th>
                        <th class="">Primer Nombre</th>
                        <th class="">Segundo Nombre</th>
                        <th class="">Primer Apellido</th>
                        <th class="">Segundo Apellido</th>
                        <th class="">Apellido casada</th>
                        <th class="">Nombre Completo</th>
                        <th class="">Genero</th>
                        <th class="">Fecha de Nacimiento</th>
                        <th class="">Dirección</th>
                        <th class="">Telefono</th>
                        <th class="">Correo Electrónico</th>
                        <th class="">CUI</th>
                        <th class="">Referido</th>
                        <th class="">LugReferencia</th>
                        <th class="">Observaciones</th>
                        <th class="">Etnia</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- inicio formulario modal agregar paciente -->
<div class="modal" id="modalPaciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center blue-gradient text-white">
                <h4 class="modal-title w-100 font-weight-bold">Paciente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modalPaciente').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">Registro Médico</label>
                        </div>
                        <input type="text" class="form-control" id="inputRegistro"
                               placeholder="285-2020-000000" ondblclick="EditarNumRegistro()" value="285-2020-0">
                        <input type="hidden" class="form-control" id="inputRegistroOld" value=""/>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputCUI">CUI</label>
                        </div>
                        <input type="text" class="form-control" id="inputCUI"
                               placeholder="Ingrese CUI" onchange="buscarRegDpi();">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombres">Primer nombre</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombres" placeholder="Ingrese primer nombre">
                    </div>

                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputSegundoNombre">Segundo nombre</label>
                        </div>
                        <input type="text" class="form-control" id="inputSegundoNombre" placeholder="Ingrese segundo nombre">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidos">Primer apellido</label>
                        </div>
                        <input type="text" class="form-control" id="inputApellidos" placeholder="Ingrese primer apellido">
                    </div>

                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputSegundoApellido">Segundo apellido</label>
                        </div>
                        <input type="text" class="form-control" id="inputSegundoApellido" placeholder="Ingrese segundo apellido">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Apellido de casada</label>
                        </div>
                        <input type="text" class="form-control" id="inputApellidoCasada" placeholder="Ingrese apellido de casada">
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputFecha">Fecha de Nacimiento</label>
                        </div>
                        <input type="date" class="form-control" id="inputFecha">
                    </div>
                </div>


                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGenero">Género</label>
                        </div>
                        <select class="custom-select" id="inputGenero">
                            <option value="M">MASCULINO</option>
                            <option value="F">FEMENINO</option>
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputEtnia">Etnia</label>
                        </div>
                        <select class="custom-select" id="inputEtnia">
                            <option value="LADINO">LADINO</option>
                            <option value="MAYA">MAYA</option>
                            <option value="GARIFUNA">GARIFUNA</option>
                            <option value="XINCA">XINCA</option>
                        </select>
                    </div>

                </div>



                <div class="row">


                </div>



                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputDireccion">Dirección</label>
                        </div>
                        <input type="text" class="form-control" id="inputDireccion"
                               placeholder="Ingrese dirección">
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputTelefono">No. teléfono</label>
                        </div>
                        <input type="text" class="form-control" id="inputTelefono"
                               placeholder="Ingrese No. teléfono">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputCorreoElectronico">Correo electrónico</label>
                        </div>
                        <input type="email" class="form-control" id="inputCorreoElectronico"
                               placeholder="Ingrese electrónico">
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputReferido">Referido</label>
                        </div>
                        <select class="custom-select" id="inputReferido" onchange="fn_ShowHideReferido();">
                            <option value="S">SI</option>
                            <option value="N">NO</option>
                        </select>
                    </div>
                </div>

                <div class="input-group input-group-sm mb-sm-3" id="inputEstadoSolicitud">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputLugarReferido">Lugar referido</label>
                    </div>
                    <input type="text" class="form-control" id="inputLugarReferido"
                           placeholder="Ingrese Lugar de dónde lo refirieron">
                </div>

                <div class="input-group input-group-sm mb-sm-3 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputObservacion">Observación</label>
                    </div>
                    <input type="text" class="form-control" id="inputObservacion"
                           placeholder="Ingrese observaciones">
                </div>
                <div id="table" class="table-responsive">
                    <b>Familiares</b>
                    <button class="btn btn-sm primary-color-dark" onclick="fn_addContacto()"><i
                                class="fas fa-user-plus"></i></button>
                    <table id="tbcontactos" class="table table-sm table-hover">
                        <div class="alert alert-warning" role="alert">
                            <b>¡Aviso!</b> para agregar un familiar favor dar clic en el boton con el siguiente icono <i
                                    class="fas fa-user-plus"></i> esto con el fin de evitar insertar familiares con los campos vacios.
                        </div>
                        <thead>
                        <tr>
                            <th class="table-active" style="display: none;">ID</th>
                            <th class="table-active" style="display: none;">RegMedico</th>
                            <th class="table-active">Nombre</th>
                            <th class="table-active">Teléfono</th>
                            <th class="table-active">Relación Familiar</th>
                        </tr>
                        </thead>
                        <tbody id="body_contactos">
                        </tbody>
                    </table>
                </div>
            </div><!-- modal -->
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary btn-sm" onclick="GuardarPaciente()" id="btnGuardarPaciente">GUARDAR
                </button>
                <button type="submit" class="btn btn-primary btn-sm"
                        onclick="fn_FormatoCoex($('#inputRegistro').val());"
                        id="btnFormatoCoex">
                    FORMATO COEX <i class="fa fa-file-pdf-o" style="font-size:20px;"></i>
                </button>
                <button type="submit" class="btn btn-primary btn-sm"
                        onclick="fn_CarneCoex($('#inputRegistro').val());"
                        id="btnFormatoCoex">
                    CARNE COEX <i class="fa fa-file-pdf-o" style="font-size:20px;"></i>
                </button>
                <button type="submit" class="btn btn-danger btn-sm"
                        onclick="abrirModalEmer($('#inputRegistro').val());"
                        id="btnEmergencia">
                    INGRESO EMERGENCIA <i class="fa fa-file-pdf-o" style="font-size:20px;"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- fin formulario agregar paciente -->



<!-- modal Ingreso Emergencia -->
<div class="modal" id="modalEmergia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-danger text-white">
                <h4 class="modal-title w-100 font-weight-bold">Ingreso Emergencia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="salirModal()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input class="form-control" type="text" id="inputIngresoEmer" hidden>
                    <input id="inputIngServ" type="text" hidden>
                    <input id="inputEstado" type="text" hidden>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">Registro Médico</label>
                        </div>
                        <input type="text" class="form-control" id="inputRegistroEmer"
                               placeholder="285-2020-000000" ondblclick="EditarNumRegistro()" value="285-2020-0" disabled>
                        <input type="hidden" class="form-control" id="inputRegistroOld" value=""/>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombres">Ingreso A</label>
                        </div>
                        <select class="form-control" id="selIngresoA">
                            <option value="Emergencia">Emergencia</option>
                        </select>
                    </div>
                </div>
                <div class="row">

                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="impresionClinica">Impresión Clinica</label>
                        </div>
                        <textarea class="form-control" rows="3" id="impresionClinica" readonly onclick="habilitarInput(this.id)">

                        </textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="justificaIngreso" >Justificacion de Ingreso</label>
                        </div>
                        <textarea class="form-control" rows="3" id="justificaIngreso" readonly onclick="habilitarInput(this.id)">

                        </textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidos">Procedencia</label>
                        </div>
                        <textarea class="form-control" rows="3" id="Procedencia">

                        </textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Status Actual de Paciente</label>
                        </div>
                        <select class="form-control" id="selEstatus">
                            <option value="0">seleccione un estatus</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <input class="form-control" type="text" id="inputFechaEgreso" hidden>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success btn-sm" onclick="validarEgreso()" id="btnGuardarDatos">GUARDAR
                    </button>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <table class="table" id="tblEmergencias">
                            <thead>
                            <th>No.</th>
                            <th>Reg. Medico</th>
                            <th>Procedencia</th>
                            <th>Estatus</th>
                            <th>Fecha Ingreso</th>
                            <th>Fecha Egreso</th>
                            <th>Egreso</th>
                            <th>Ingreso Hospitalario</th>
                            </thead>
                            <tbody id="tbodyEmergencias">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin formulario agregar paciente -->

<!-- modal ingreso Hospitalario -->
<div class="modal" id="modalIngresoHospitalario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-danger text-white">
                <h4 class="modal-title w-100 font-weight-bold">Ingreso Hospitalario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarModalIngresoHosp()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputEmergencia">No. Emergencia</label>
                        </div>
                        <input type="text" class="form-control" id="inputEmergencia" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegMedico">Registro Médico</label>
                        </div>
                        <input type="text" class="form-control" id="inputRegMedico" disabled>

                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombreIH">Nombre Paciente</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombreIH" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-7">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="SelEncamamientoIngreso">Servicio a ingresar:   </label>
                        </div>
                        <select class="custom-select" id="SelEncamamientoIngreso" onchange="revSelectServicio(this.value)">
                            <option>Seleccione un servicio</option>

                        </select>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary btn-sm" onclick="EnviarIngresoHosp()" id="btnGuardarIngreso"><i class="fas fa-bed" style="margin-right: 10px"></i>Ingreso Hospitalario</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- fin formulario ingreso hospitalario -->

<!-- modal Egreso Emergencia -->
<div class="modal" id="modalEmergiaEgreso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-danger text-white">
                <h4 class="modal-title w-100 font-weight-bold">Egreso Emergencia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="salirModalEgreso()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="NoEmergenciaEE">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">No. Egreso</label>
                        </div>
                        <input type="text" class="form-control" id="noEgreso"
                               ondblclick="EditarNumRegistro()" disabled>

                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombres">Egreso</label>
                        </div>
                        <select class="form-control" id="selIngresoA">
                            <option value="Emergencia">Emergencia</option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Diagnostico</label>
                        </div>
                        <textarea class="form-control" rows="3" id="diagnostico" readonly ondblclick="habilitarInput(this.id)">

                        </textarea>
                    </div>

                </div>
                <div class="row">

                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Resultado</label>
                        </div>
                        <textarea class="form-control" rows="3" id="resultado" readonly ondblclick="habilitarInput(this.id)">

                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Egreso</label>
                        </div>
                        <select class="form-control" id="selEgreso">
                            <option value="0">seleccione tipo de Egreso</option>

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Referido</label>
                        </div>
                        <input class="form-control" type="text" id="inReferido">

                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Observaciones</label>
                        </div>
                        <textarea class="form-control" rows="3" id="Observaciones">

                        </textarea>
                    </div>
                </div>

                <input type="text" name="" id="inputIdEgreso" hidden>

                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary btn-sm" onclick="ActualizarEgreso()" id="btnGuardarEgreso">GUARDAR
                    </button>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- fin formulario agregar paciente -->


<script src="./js/js_Paciente.js?v=1887" type="text/javascript" defer></script>