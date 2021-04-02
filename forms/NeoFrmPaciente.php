<div id="cardPacNeo" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">Hospitalización neonatal</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#cardPacNeo').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="card btn fondoPedia1 imgTamaño text-center" id="cardEgreso" type="button">
                    <div class="card-body" type="button" onclick="fnOpenForm(event, 'NeoFrmClinicaHosp')">
                        <h5 class="card-title font-weight-bold" style="margin-top: 190px">Ingreso</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card btn fondoPedia3 imgTamaño text-center" id="cardEgreEvo" type="button" onclick="abrirModEvolNeo();">
                    <div class="card-body" type="button">
                        <h5 class="card-title font-weight-bold" style="margin-top: 190px">Evolución</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card btn fondoPedia2 imgTamaño text-center" id="cardEgreEvo" type="button" onclick="abrirModEgresoNeo();">
                    <div class="card-body" type="button" >
                        <h5 class="card-title font-weight-bold" style="margin-top: 190px">Egreso</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal datos de Evolución Neonatos -->
<div class="modal" id="modalEvolucion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold">Evolución</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarModEvolNeo()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body fondoPedia">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="input-group mb-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" for="inputRegMed">Registro médico</span>
                                        </div>
                                        <input type="text" class="form-control" id="inputRegMed">
                                    </div>
                                    <div class="input-group mb-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" for="inputNomPac">Nombre de Paciente</span>
                                        </div>
                                        <input type="text" class="form-control" id="inputNomPac">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" for="inputEdad">Edad</span>
                                        </div>
                                        <input type="text" class="form-control" id="inputEdad">
                                    </div>
                                    <div class="input-group mb-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" for="inputPeso">Peso</span>
                                        </div>
                                        <input type="text" class="form-control" id="inputPeso">
                                    </div>
                                    <div class="input-group mb-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" for="inputTiem">Tiempo</span>
                                        </div>
                                        <input type="text" class="form-control" id="inputTiem" placeholder="Días hospitalizado">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" for="inputFecha">Fecha</span>
                                        </div>
                                        <input type="date" class="form-control" id="inputFecha">
                                    </div>
                                    <div class="input-group mb-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" for="inputHora">Hora</span>
                                        </div>
                                        <input type="time" class="form-control" id="inputHora">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="input-group mb-3 col-sm-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" for="inputDiag">Diagnostico</span>
                                        </div>
                                        <textarea type="text" class="form-control" id="inputDiag" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="input-group mb-3 col-sm-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" for="inputCom">Comentario</span>
                                        </div>
                                        <textarea type="text" class="form-control" id="inputCom" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputLib">Libras</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputLib">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="InputKgs">Kgs</label>
                                            </div>
                                            <input type="text" class="form-control" id="InputKgs">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputTalla">Talla</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputTalla">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputCc">C.C</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputCc">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="InputKgs">C.T</label>
                                            </div>
                                            <input type="text" class="form-control" id="InputKgs">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputLib">C.abd</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputLib">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputTalla">P.b</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputTalla">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputCc">F.c</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputCc">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="InputKgs">F.r</label>
                                            </div>
                                            <input type="text" class="form-control" id="InputKgs">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputLib">Sat</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputLib">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputTalla">Silverman</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputTalla">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputPielMuc">Piel y mucosas</label>
                                            </div>
                                            <textarea class="form-control" id="inputPielMuc" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputCabCue">Cabeza y cuello</label>
                                            </div>
                                            <textarea class="form-control" id="inputCabCue" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputOjos">Ojos</label>
                                            </div>
                                            <textarea class="form-control" id="inputOjos" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputOidos">Oidos</label>
                                            </div>
                                            <textarea class="form-control" id="inputOidos" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputNarizBoca">Nariz y boca</label>
                                            </div>
                                            <textarea class="form-control" id="inputNarizBoca" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputCard">Cardiovascular</label>
                                            </div>
                                            <textarea class="form-control" id="inputCard" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputTorPul">Torax y pulmones</label>
                                            </div>
                                            <textarea class="form-control" id="inputTorPul" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputAbd">Abdomen</label>
                                            </div>
                                            <textarea class="form-control" id="inputAbd" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputGenAna">Genito Anal</label>
                                            </div>
                                            <textarea class="form-control" id="inputGenAna" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputNeur">Neurológico</label>
                                            </div>
                                            <textarea class="form-control" id="inputNeur" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputMuscEsque">Musc.esqueletico</label>
                                            </div>
                                            <textarea class="form-control" id="inputMuscEsque" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputEstGen">Estado general</label>
                                            </div>
                                            <textarea class="form-control" id="inputEstGen" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text inputTamaño" for="inputComen">Comentario</label>
                                            </div>
                                            <textarea class="form-control" id="inputComen" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-header brown white-text text-center">
                                <h5 class="modal-title font-weight-bold text-center">Listado de problemas</h5>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputProb">Problema</label>
                                        </div>
                                        <input type="text" class="form-control" id="inputProb">
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn brown btn-sm" onclick="agreProblema();"> Agregar </button>
                                    </div>
                                </div>

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tblProblemas">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-sm-8">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputMed">Nombre del médico</label>
                                        </div>
                                        <input type="text" class="form-control" id="inputMed">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <button class="btn brown" style="margin-left: 990px" onclick="agreEvoNeo()">Agregar</button>
                </div>
            </div>
            <div class="modal-body fondoPedia text-left">
                <div class="row">
                    <table class="table">
                        <thead class="brown text-white">
                        <tr>
                            <th scope="col">Registro Médico</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Diagnostico</th>
                            <th scope="col">Comentario</th>
                            <th scope="col">Receta</th>
                            <th scope="col">Impresión</th>
                        </tr>
                        </thead>
                        <tbody id="tblEvolNeo" class="white">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal datos de Evolución Neonatos -->
<div class="modal" id="modalEgreNeo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold">Egreso Neonatos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarModEgresoNeo()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>


            <div class="modal-body fondoPedia">

                <div class="row">
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Oxígeno</legend>
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputDias">Dias</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputDias">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">V/M</legend>
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputVDias">Dias</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputVDias">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Surfactante</legend>
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="InputDosis">Dosis</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputDosisS">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Antibioticos</legend>
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputAnt">Dias</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputAnt">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Cateter</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="Radcateter" id="RadcateterNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="Radcateter" id="RadcateterSi">Si</label>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputBili">Bilirrubinas</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputBili">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Fototerapia</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadFotote" id="RadcateterNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadFotote" id="RadcateterSi">Si</label>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Ett</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadEtt" id="RadcateterNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadEtt" id="RadcateterSi">Si</label>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="SelGrupo">Grupo</label>
                                        </div>
                                        <select class="custom-select" id="SelGrupo">
                                            <option selected>Seleccionar opción</option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">AB</option>
                                            <option value="1">0</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="SelRH">RH</label>
                                        </div>
                                        <select class="custom-select" id="SelRH">
                                            <option selected>Seleccionar opción</option>
                                            <option value="1">+</option>
                                            <option value="2">-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Cirugia</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadCirugia" id="RadcateterNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadCirugia" id="RadcateterSi">Si</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="InputExamenNeu" style="width: 240px; text-align: center">Examen neurologico al egreso</label>
                                        </div>
                                        <select class="custom-select" id="SelExamenNeu">
                                            <option selected>Seleccionar opción</option>
                                            <option value="1">Nl sin seg</option>
                                            <option value="2">Nl+seg</option>
                                            <option value="3">Dudoso</option>
                                            <option value="1">Alterado</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text"   for="InputApelli">Estancia hospitalaria</label>
                                            </div>
                                            <input class="form-control" name="InputEstancia" id="inputEstancia" type='text' placeholder="días">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text"   for="InputPesoEgres">Peso al egreso</label>
                                            </div>
                                            <input class="form-control" name="InputPesoEgres" id="inputPesoEgres" type='text'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-sm-4">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="Factura">Fecha de egreso</label>
                                            </div>
                                            <input type="date" class="form-control" id="timeFechaEgre">
                                        </div>
                                    </div>
                                    <div class="col col-sm-4">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputHoraEgre">Hora de egreso</label>
                                            </div>
                                            <input type="time" class="form-control" id="inputHoraEgre">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row margEntCard">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Vitamina K</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadVitaminaK" id="RadVitaminaKNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadVitaminaK" id="RadVitaminaKSi">Si</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Hepatitis B</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadHepati" id="RadHepatiNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadHepati" id="RadHepatiSi">Si</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Bcg</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadBcg" id="RadBcg" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadBcg" id="RadBcg">Si</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Laboratorios</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadLabo" id="RadLabo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadLabo" id="RadLabo">Si</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-10">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputTalla">Nombre del médico que egresa</label>
                                        </div>
                                        <input type="text" class="form-control" id="inputNombreMe">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn rgba-cyan-strong" onclick="guarDatEgreNeonatos()" id="btnEgreNeo">Guardar</button>
            </div>
        </div>
    </div>
</div>





<script src="./js/js_NeoFrmPaciente.js"></script>



