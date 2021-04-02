<div id="EvolucionClinica" class="card">
    <div class="card-header text-center text-white blue-gradient">
        <h3 class="card-title w-100 font-weight-bold">VENTILACION</h3>
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
        <br><br>
        <div class="input-group input-group-sm col-sm-12">
            <center><div class="alert alert-primary" role="alert">
                    <i class="fas fa-arrow-down"></i> Para buscar un paciente solo se debe escribir nombre o registro medico en el siguiente campo <i class="fas fa-arrow-down"></i>
                </div></center>
        </div>
        <div class="row">

            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputRegistro">Buscar</label>
                </div>
                <input type="text" id="search" class="form-control">
            </div>
        </div>
        <div class="row">
            <table id="TblPaciente" class="table table-hover text-center table-striped" style="text-align-all: center ">
                <thead class="stylish-color text-white text-center">
                <tr>
                    <th>Registro médico</th>
                    <th width="30%">Nombre</th>
                    <th >Número de cama</th>
                    <th >Tipo Ventilador</th>
                    <th >Modo Ventilacion</th>
                    <th></th>

                </tr>
                </thead>
                <tbody id="tbodyEvEncamamiento"></tbody>
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

            <div class="row col-sm-8 offset-1" id="contentBtnServ">

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
                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-5">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputFecha">Modo Ventilación</label>
                        </div>
                        <select class="form-control" id="selTipoVentilacion">


                        </select>
                    </div>
                </div>

            </div>
            <input type="text" id="servicio" hidden>
            <input type="text" id="NoCama" hidden>
            <input type="text" id="idPac" hidden>
            <input type="text" id="inputEst" hidden>
            <input type="text" id="inputEmer" hidden>
            <div class="modal-footer">
                <button type="button" id="guardarEncamamiento" class="btn btn-primary" style="text-align: right" onclick="agregarIngreso()" >Guardar</button>
                <button type="button" id="guardarEncamamiento" class="btn btn-danger" style="text-align: right" onclick="agregarEgreso()" >Liberar Ventilador</button>
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</div>
<!--Fin del modal Ingreso Paciente-->

<!--Modal Otros-->
<div class="modal" id="modalOtros" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">INGRESO PACIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerModalOtros();">
                    <span aria-hidden="true" style="color: #ffffff">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <input class="custom-select" id="inputidVentilador" hidden>
                <input class="custom-select" id="inputEstadoVentilador" hidden>
                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-8">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="SelRegMedOtros">Registro Médico</label>
                        </div>
                        <input class="custom-select" id="SelRegMedOtros" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombreOtros">Nombre Paciente</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombreOtros" type="text" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputSexoOtros">Sexo</label>
                        </div>
                        <input type="text" class="form-control" id="inputSexoOtros" disabled>
                    </div>


                    <div class="input-group input-group-md mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputEdadOtros">Edad</label>
                        </div>
                        <input type="text" class="form-control" id="inputEdadOtros" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-5">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputFechaOtros">Fecha</label>
                        </div>
                        <input  class="form-control" id="inputFechaOtros" type="date">
                    </div>
                    <div class="input-group input-group-md mb-sm-3 col-sm-5">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputhoraOtros">Hora de ingreso</label>
                        </div>
                        <input type="time" class="form-control" id="inputhoraOtros">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="selOtros">Modo Ventilación</label>
                        </div>
                        <input class="form-control" id="selOtros">
                    </div>
                </div>

            </div>

            <input type="text" id="inputEmerOtros" hidden>
            <input type="text" id="inputservicioOtros" hidden>
            <input type="text" id="ventiladorOtros" hidden>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btnGuardarOtros" onclick="insDatosOtro();">Agregar</button>
            </div>
        </div>
    </div>
</div>
<!--Fin del modal Ingreso Paciente-->

<!--Modal Otros-->
<div class="modal" id="modalOtros" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">INGRESO PACIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerModalOtros();">
                    <span aria-hidden="true" style="color: #ffffff">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <input class="custom-select" id="inputidVentilador" >
                <input class="custom-select" id="inputEstadoVentilador" >
                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-8">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="SelRegMedOtros">Registro Médico</label>
                        </div>
                        <input class="custom-select" id="SelRegMedOtros" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombreOtros">Nombre Paciente</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombreOtros" type="text" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputSexoOtros">Sexo</label>
                        </div>
                        <input type="text" class="form-control" id="inputSexoOtros" disabled>
                    </div>


                    <div class="input-group input-group-md mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputEdadOtros">Edad</label>
                        </div>
                        <input type="text" class="form-control" id="inputEdadOtros" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-5">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputFechaOtros">Fecha</label>
                        </div>
                        <input  class="form-control" id="inputFechaOtros" type="date">
                    </div>
                    <div class="input-group input-group-md mb-sm-3 col-sm-5">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputhoraOtros">Hora de ingreso</label>
                        </div>
                        <input type="time" class="form-control" id="inputhoraOtros">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-md mb-3 col-md-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="selOtros">Modo Ventilación</label>
                        </div>
                        <input class="form-control" id="selOtros">
                    </div>
                </div>

            </div>

            <input type="text" id="inputEmerOtros" hidden>
            <input type="text" id="inputservicioOtros" hidden>
            <input type="text" id="ventiladorOtros" hidden>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btnGuardarOtros" onclick="insDatosOtro();">Agregar</button>
            </div>
        </div>
    </div>
</div>
<!--Fin del modal Ingreso Paciente-->

</div>
</div>








<script src="./js/js_Ventilatorio.js?v=1933"></script>
