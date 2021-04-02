<div id="EgresoNeo" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">Hospitalización neonatal egreso</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#EgresoNeo').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>
    <div class="card-body">
        <div class="row text-center">
            <div class="col-sm-6 text-center">
                <div class="card btn fondoPedia1 imgTamaño text-center" id="cardEgreso" type="button" onclick="abrirModEgresoNeo()">
                    <div class="card-body" type="button">
                        <h4 class="card-title" style="margin-top: 300px">Egreso</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card btn fondoPedia2 imgTamaño text-center" id="cardEgreEvo" type="button" onclick="abrirModEvoEgreNeo()">
                    <div class="card-body" type="button">
                        <h4 class="card-title" style="margin-top: 300px">Evolución Egreso</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal datos de Evolución -->
<div class="modal" id="modalEgrNeo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold">Egreso</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarModEgresoNeo()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>


            <div class="modal-body fondoPedia">

            </div>
            <div class="modal-footer">
                <button class="btn rgba-red-strong"> Guardar </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal datos de EvoluciónEgreso -->
<div class="modal" id="modalEvoEgre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h4 class="modal-title w-100 font-weight-bold">Evolución Egreso</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarModEvoEgreNeo()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>


            <div class="modal-body fondoPedia">

                <div class="row">
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Oxigeno</legend>
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="InputDias">Dias</label>
                                    </div>
                                    <input type="text" class="form-control" id="InputDias">
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
                                        <label class="input-group-text" for="InputVDias">Dias</label>
                                    </div>
                                    <input type="text" class="form-control" id="InputVDias">
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
                                    <input type="text" class="form-control" id="InputDosis">
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
                                        <label class="input-group-text" for="InputAnDias">Dias</label>
                                    </div>
                                    <input type="text" class="form-control" id="InputAnDias">
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
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadcateterNo" id="RadcateterNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadcateterSi" id="RadcateterSi">Si</label>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="InputAnDias">Bilirrubinas</label>
                                    </div>
                                    <input type="text" class="form-control" id="InputAnDias">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Fototerapia</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadcateterNo" id="RadcateterNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadcateterSi" id="RadcateterSi">Si</label>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Ett</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadcateterNo" id="RadcateterNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadcateterSi" id="RadcateterSi">Si</label>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="InputAnDias">Grupo y RH</label>
                                    </div>
                                    <input type="text" class="form-control" id="InputAnDias">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <legend class="col-form-label ">Cirugia</legend>
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadcateterNo" id="RadcateterNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadcateterSi" id="RadcateterSi">Si</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                       <div class="card">
                           <div class="card-body">
                               <div class="input-group">
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
                           </div>
                       </div>
                    </div>
                </div>

                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                               <div class="row">
                                   <div class="col-sm-5">
                                       <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text"   for="InputApelli">Estancia hospitalaria</label>
                                           </div>
                                           <input class="form-control" name="InputEstancia" id="InputEstancia" type='text' placeholder="días">
                                       </div>
                                   </div>
                                   <div class="col-sm-4">
                                       <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text"   for="InputPesoEgres">Peso al egreso</label>
                                           </div>
                                           <input class="form-control" name="InputPesoEgres" id="InputPesoEgres" type='text'>
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
                                <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadVitaminaKNo" id="RadVitaminaKNo" checked>No</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadVitaminaKSi" id="RadVitaminaKSi">Si</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                       <div class="card">
                           <div class="card-body">
                               <legend class="col-form-label ">Hepatitis B</legend>
                               <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadHepatiNo" id="RadHepatiNo" checked>No</label>
                               &nbsp;&nbsp;&nbsp;&nbsp;
                               <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadHepatiSi" id="RadHepatiSi">Si</label>
                           </div>
                       </div>
                    </div>
                    <div class="col-sm-3">
                       <div class="card">
                           <div class="card-body">
                               <legend class="col-form-label ">Bcg</legend>
                               <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadBcgNo" id="RadBcgNo" checked>No</label>
                               &nbsp;&nbsp;&nbsp;&nbsp;
                               <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadBcgSi" id="RadBcgSi">Si</label>
                           </div>
                       </div>
                    </div>
                    <div class="col-sm-3">
                       <div class="card">
                           <div class="card-body">
                               <legend class="col-form-label ">Laboratorios</legend>
                               <label class="radio-inline" for="RadiOftalmologicoNo"><input type="radio" name="RadLaboNo" id="RadLaboNo" checked>No</label>
                               &nbsp;&nbsp;&nbsp;&nbsp;
                               <label class="radio-inline" for="RadiOftalmologicoSi"><input type="radio" name="RadLaboSi" id="RadLaboSi">Si</label>
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
                                        <input type="text" class="form-control" id="inputTalla">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn rgba-cyan-strong">Guardar</button>
            </div>
        </div>
    </div>
</div>


<script src="./js/js_EgreFrmClinicaHospi.js"></script>



