<div id="EncOrdRec" class="card">
    <div class="card" id="Card">
        <div class="modal-header text-center text-white blue-gradient">
            <h3 class="modal-title w-100 font-weight-bold">ORDENES MÉDICAS Y RECETAS</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#EncOrdRec').fadeOut();">
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
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <table class="table" class="table table-hover table-striped" style="text-align-all: center; margin-top: 10px" id="tablaCont">
                        <thead class="stylish-color text-white text-center" style="font-size: medium">
                        <tr>
                            <th>Registro médico</th>
                            <th>Nombre del paciente</th>
                            <th>Número de cama</th>
                            <th>Edad</th>
                            <th hidden>Emer</th>
                            <th hidden>ID Ingreso</th>
                            <th hidden>servicio</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyPaciente" class="text-center" style="text-align-all: center">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--Comienzo modal Ordenes y recetas según evolución-->
        <div class="modal" id="modalEvoluciones" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true" style="overflow: auto">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center text-white blue-gradient">
                        <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">ORDENES MEDICAS Y RECETAS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalEvoluciones').fadeOut(); ">
                            <span aria-hidden="true" style="color: #ffffff">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card" id="cardEmer" hidden>
                                    <div class="card-body">
                                        <input type="text" class="form-control" id="inputIngE" hidden>
                                        <div class="row">
                                            <div class="col-sm">
                                                <table class="table table-hover table-striped">
                                                    <thead class="stylish-color text-white" style="font-size: medium">
                                                    <tr>
                                                        <th  colspan="8" style="text-align: center" data-toggle="collapse" data-target=".order1" class="clickable">Emergencia</th>
                                                    </tr>
                                                    <tr class="collapse order1">
                                                        <th hidden>Ingreso Emer</th>
                                                        <th>Registro médico</th>
                                                        <th>Nombre del paciente</th>
                                                        <th hidden>Numero enc unidosis</th>
                                                        <th>Tratamiento</th>
                                                        <th>Unidosis</th>
                                                        <th>Nota enfermería</th>
                                                        <th>Impresión</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="tbodyDatosEmer" class="collapse order1">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="card" id="cardEvo" hidden>
                                    <div class="card-body">
                                        <input type="text" class="form-control" id="inputIngresoEmer" hidden>
                                        <div class="row">
                                            <div class="col-sm">
                                                <table class="table table-hover table-striped">
                                                    <thead class="stylish-color text-white" style="font-size: medium">
                                                    <tr>
                                                        <th  colspan="8" style="text-align: center" data-toggle="collapse" data-target=".order2" class="clickable">Encamamiento</th>
                                                    </tr>
                                                    <tr class="collapse order2">
                                                        <th scope="col" class="text-center">ID Evolución</th>
                                                        <th scope="col" class="text-center">Registro médico</th>
                                                        <th scope="col" class="text-center">Nombre del paciente</th>
                                                        <th scope="col" class="text-center">Cama</th>
                                                        <th scope="col" >Orden médica</th>
                                                        <th scope="col">Receta</th>
                                                        <th scope="col">Nota de Enfermería</th>
                                                        <th scope="col">Impresión</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="tbodyDatos" class="collapse order2">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="card" id="cardInt">
                                    <div class="card-body">
                                        <input type="text" class="form-control" id="inputIdPaciente" hidden>
                                        <div class="row">
                                            <div class="col-sm">
                                                <table class="table table-hover table-striped">
                                                    <thead class="stylish-color text-white" style="font-size: medium">
                                                    <tr>
                                                        <th  colspan="8" style="text-align: center" data-toggle="collapse" data-target=".order3" data-child="#tbodyDatosIntensivo" class="clickable">Intensivo</th>
                                                    </tr>
                                                    <tr class="collapse order3">
                                                        <th scope="col" class="text-center">ID Evolución</th>
                                                        <th scope="col" class="text-center">Registro médico</th>
                                                        <th scope="col" class="text-center">Nombre del paciente</th>
                                                        <th scope="col" class="text-center">Cama</th>
                                                        <th scope="col" >Orden médica</th>
                                                        <th scope="col">Receta</th>
                                                        <th scope="col">Nota de Enfermería</th>
                                                        <th scope="col">Impresión</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="tbodyDatosIntensivo" class="collapse order3">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                        <div class="row">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Fin modal Ordenes y recetas según evolución-->

        <!--Comienzo modal Nota de Enfermería-->
        <div class="modal" id="modalNotaEnfermería" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center text-white blue-gradient">
                        <h5 class="modal-title w-100 font-weight-bold" id="modalLabelDatosPaciente">EVOLUCIONES</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalNotaEnfermería').fadeOut(); ">
                            <span aria-hidden="true" style="color: #ffffff">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <input type="text" class="form-control" id="idNotaEnfermeria">
                        <input type="text" class="form-control" id="inputEvo" hidden>
                        <input type="text" class="form-control" id="inputEmergencia" hidden>
                        <div class="row">
                            <div class="input-group input-group-md mb-3 col-md-8">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputRegistroPaciente">Registro Médico</label>
                                </div>
                                <input class="custom-select" id="inputRegistroPaciente" DISABLED>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group input-group-md mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputNombrePaciente">Nombre Paciente</label>
                                </div>
                                <input type="text" class="form-control" id="inputNombrePaciente" type="text" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group input-group-md mb-3 col-md-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputFechaNota">Fecha</label>
                                </div>
                                <input class="form-control" id="inputFechaNota" type="date">
                            </div>
                            <div class="input-group input-group-md mb-sm-3 col-md-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputHoraNota">Hora de ingreso</label>
                                </div>
                                <input type="time" class="form-control" id="inputHoraNota">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nota de Enfermería</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea" rows="10" id="txtNota"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <input type="time" class="form-control" id="inputIdNota" hidden>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <button class="btn btn-md btn-primary" id="btnSaveNota" onclick="guardarNota();">Guardar Nota</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Fin modal modal Nota de Enfermería-->




    </div>
</div>


<script src="./js/js_EncamOrdRec.js"></script>