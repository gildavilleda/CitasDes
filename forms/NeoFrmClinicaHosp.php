<div id="Neonato" class="card">

    <div id="accordion">
        <!--Primer acordión-->
        <div class="card">
            <div class="card-header rgba-red-slight" id="headingOne" >
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check1" value="" class="rgba-red-strong" checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" id="btnCol1">
                        <i class="fas fa-hospital" style="margin-right: 10px;"></i>HOSPITALIZACIÓN NEONATAL CLAP/SMR OPS/OMS
                    </button>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="fnOpenForm(event, 'NeoFrmClinicaHosp')">
                        <span aria-hidden="true" class="text-black">&times;</span>
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body fondoPedia" id="cardBodPriAco">
                    <input class="form-control" type="text" id="inputIngEmer">
                    <input class="form-control" type="text" id="inputHosp">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltSIP">SIP</label>
                                            </div>
                                            <select class="custom-select" id="sltSIP">
                                                <option value="SI">Si</option>
                                                <option value="NO">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputInsNac">Institución de nacimiento</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputInsNac">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text " for="inputRegRN">Registro RN</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputRegRn">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margEntCard" style="margin-bottom: 15px">
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputHistoriaRN">Historia clínica</label>
                                            </div>
                                            <select class="form-control" type='text' id="inputHistoriaRN" onchange="cargDatPac(this.value)"></select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-7">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombreRN">Nombre del recien nacido</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputNombreRN">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltPulID">Tiene pulsera ID</label>
                                            </div>
                                            <select class="custom-select" id="sltPulID">
                                                <option value="SI">Si</option>
                                                <option value="NO">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltSexo">Sexo</label>
                                            </div>
                                            <select class="custom-select" id="sltSexo" disabled>
                                                <option value="F">Femenino</option>
                                                <option value="M">Masculino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text">Fecha Nacimiento</label>
                                            </div>
                                            <input type="date" class="form-control col col-sm-6" id="fechaNac">
                                            <input type="time" class="form-control" id="HoraNac">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text">Historia clínica</label>
                                            </div>
                                            <select class="form-control" type='text' id="inputHistCliMadr" onchange="cargDatPacMad(this.value)"></select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-7">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombreMadre">Nombre de la Madre</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputNombreMadre">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltEncEnc">Encuentra en:</label>
                                            </div>
                                            <select class="custom-select" id="sltEncEnc">
                                                <option value="MismoHosp">Mismo hospital</option>
                                                <option value="OtrHosp">Otro hospital</option>
                                                <option value="Dom">Domicilio</option>
                                                <option value="Fal">Fallecida</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltConSal">Condición de salud</label>
                                            </div>
                                            <select class="custom-select" id="sltConSal">
                                                <option value="Normal">Normal</option>
                                                <option value="Critica">Crítica</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltConHij">Conoció a su hijo</label>
                                            </div>
                                            <select class="custom-select" id="sltConHij">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombrePadre">Nombre del Padre</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputNombrePadre">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <h5 style="text-align: center">Comunicación con la familia</h5>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputDir">Dirección</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputDir">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputEmail">Email</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputEmail">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputTel1">Telefono</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputTel1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-red-strong" onclick="guarHospNeo()" id="guardarHospNeo">Guardar</button>
                </div>
            </div>


        </div>

        <!--Segundo acordión-->
        <div class="card">
            <div class="card-header rgba-orange-slight" id="headingTwo">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check2" value="" class="rgba-red-strong" checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fas fa-ambulance" style="margin-right: 10px;"></i>TRANSPORTE
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body fondoPedia" id="cardTwo">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <input type="text" class="form-control" id="inputIdTransporte">
                                    <div class="row">
                                        <div class="col-sm-6" id="conjHosp">
                                            <label class="radio-inline" for="RadMHospital" style="margin-left: 20px"> <input type="radio" name="TipoHosp" id="RadMHospital" style="margin-right: 5px" value="MH" checked> Mismo hospital (Sala de parto) </label>
                                            <label class="radio-inline" for="RadOtroH" style="margin-left: 20px"> <input type="radio" name="TipoHosp" id="RadOtroH" style="margin-right: 5px; margin-left: 10px" value="OH"> Otro hospital </label>
                                            <label class="radio-inline" for="RadReingreso" style="margin-left: 20px"> <input type="radio" name="TipoHosp" id="RadReingreso" style="margin-right: 5px; margin-left: 10px" value="R"> Reingreso </label>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputMotivo">Motivo</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputMotivo">
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
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltTipo">Tipo</label>
                                            </div>
                                            <select class="custom-select" id="sltTipo">
                                                <option value="Aereo">Aéreo</option>
                                                <option value="Terrestre">Terrestre</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputDistancia">Distancia (Km)</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputDistancia">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputDuracion">Duración</label>
                                            </div>
                                            <input type="time" class="form-control" id="inputDuracion">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body" id="conjInc">
                                    <div class="form-check">
                                        <h5>Incubadora</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radInc" value="N" id="radIncNo" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radInc" value="S" id="radIncSi" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body" id="conjVen">
                                    <div class="form-check">
                                        <h5>Venoclisis</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radVen" value="N" id="radVenNo" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radVen" value="S" id="radVenSi" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body" id="conjMon">
                                    <div class="form-check">
                                        <h5>Monitoreo</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radMon" value="N" id="radMonNo" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radMon" value="S" id="radMonSi" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body" id="conjOxi">
                                    <div class="form-check">
                                        <h5>Oxígeno</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radOxi" value="N" id="radOxiNo" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radOxi" value="S" id="radOxiSi" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body" id="conjCpap">
                                    <div class="form-check">
                                        <h5>CPAP</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radCPAP" value="N" id="radCpapNo" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radCPAP" value="S" id="radCpapSi" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body" id="conjInt">
                                    <div class="form-check">
                                        <h5>Intubado</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radInt" value="N" id="radIntNo" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radInt" value="S" id="radIntSi" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row" id="conjDrogas">
                                        <div class="col-sm">
                                            <label class="radio-inline" style="margin-right: 10px; margin-left: 10px"><h5 class="radio-inline">Drogas</h5></label>
                                            <label class="radio-inline" for="No" style="margin-left: 20px"> <input type="radio" name="radDrogas" id="radDroNo" style="margin-right: 5px" value="N"  checked>No </label>
                                            <label class="radio-inline" for="Si" style="margin-left: 20px"> <input type="radio" name="radDrogas" id="radDroSi" style="margin-right: 5px; margin-left: 10px" value="S" >Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputVol">Vol/IV (mL)</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputVol">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputTipo">Tipo</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputTipo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="margin-top: 20px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h5>COMPLICACIONES (durante el transporte)</h5>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="sltCompTipo">Tipo</label>
                                                </div>
                                                <select class="custom-select" id="sltCompTipo">
                                                    <option value="Ae">Aéreo</option>
                                                    <option value="Te">Terrestre</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-orange-strong" onclick="guarDatTrans()" id="guaTrans">Guardar</button>
                </div>
            </div>
        </div>

        <!--Tercer acordion-->
        <div class="card">
            <div class="card-header rgba-green-slight" id="headingThree">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check3" value="" class="rgba-red-strong" checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="collapse3">
                        <i class="fas fa-baby-carriage" style="margin-right: 10px"></i>INGRESO NEONATAL
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body fondoPedia"  id="card3">
                    <input type="text" class="form-control" id="inputIdIngNeo">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="input-group input-group-sm mb-sm-2 col-sm-auto">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputEn">En </label>
                                        </div>
                                        <input class="form-control" type='text' id="inputEn">
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
                                        <div class="col-sm-4">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputFecha">Fecha</label>
                                                </div>
                                                <input class="form-control" type='date'  id="FechaIngreso">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputhora">Hora</label>
                                                </div>
                                                <input type="time" class="form-control" id="inputHoraIngreso">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="InputEdad">Edad</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Días" id="inputEdadDias">
                                                <input type="time" class="form-control" placeholder="Horas" id="inputEdadHora">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto"">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="InputEdad">EG - Corregidas</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Semanas" id="inputEgCorrSem"> <label style="margin-left: 10px; margin-right: 10px">-</label>
                                            <input type="text" class="form-control" placeholder="Días" id="inputEgCorrDias">
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
                            <div class="card-header">
                                <h5>Primera Valoración</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="InputTempAxilar">Temperatura axilar</span>
                                        </div>
                                        <input tipe="text" class="form-control" id="inputTempAxi1"><label style="margin-right: 5px; margin-left: 5px">-</label>
                                        <input type="text" class="form-control" id="inputTempAxi2">
                                    </div>
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputSaO2">SaO2%</label>
                                        </div>
                                        <input class="form-control" type='text' id="inputSaO2">
                                    </div>

                                    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputFIO2">FIO2</label>
                                        </div>
                                        <input class="form-control" type='text' id="inputFIO2">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row margEntCard">
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body" id="conjCia">
                                <div class="form-check">
                                    <h5>Cianosis</h5>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radCia" id="radCiaNo" value="N" checked style="margin-right: 5px">No</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radCia" id="radCiaSi" value="S" style="margin-right: 5px">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body" id="conjSdr">
                                <div class="form-check">
                                    <h5>SDR</h5>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radSdR" id="radSdrNo" value="N"  checked style="margin-right: 5px">No</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radSdR" id="radSdrSi" value="S" style="margin-right: 5px">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body" id="conjPal">
                                <div class="form-check">
                                    <h5>Pálidez</h5>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radPal" id="radPalNo" value="N"  checked style="margin-right: 5px">No</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radPal" id="radPalSi" value="S" style="margin-right: 5px">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body" id="conjDiu">
                                <div class="form-check">
                                    <h5>Diuresis</h5>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radDiu" id="radDiuNo" value="N"  checked style="margin-right: 5px">No</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radDiu" id="radDiuSi" value="S" style="margin-right: 5px">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body" id="conjVig">
                                <div class="form-check">
                                    <h5>Vigilia</h5>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radVig" id="radVigNo" value="N"  checked style="margin-right: 5px">No</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radVig" id="radVigSi" value="S" style="margin-right: 5px">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body" id="conjConv">
                                <div class="form-check">
                                    <h5>Convulsiones</h5>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radConv" id="radConvNo" value="N"  checked style="margin-right: 5px">No</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="radConv" id="radConvSi"value="S" style="margin-right: 5px">Si</label>
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
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputEnfer">Enfermería</label>
                                        </div>
                                        <input class="form-control" type='text' id="inputEnfer">
                                    </div>
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputMedi">Médico</label>
                                        </div>
                                        <input class="form-control" type='text' id="inputMedi">
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
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputPeso">Peso (g)</label>
                                        </div>
                                        <input class="form-control" type='text'id="inputPeso">
                                    </div>
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputLongitud">Longitud (cm)</label>
                                        </div>
                                        <input class="form-control" type='text' id="inputLongitud">
                                    </div>
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputPerCraneado">Per. Craneado (cm)</label>
                                        </div>
                                        <input class="form-control" type='text' id="inputPerCraneado">
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
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Notas al ingreso</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea" rows="10" id="txtNotIng"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margEntCard">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <div class="row" id="conjInfIn">
                                    <div class="input-group input-group-sm mb-sm-2 col-sm-6">
                                        <label class="radio-inline" style="margin-right: 10px"><h5 class="radio-inline">Informe inicial a la familia</h5></label>
                                        <label class="radio-inline" style="margin-right: 10px"><input type="radio" name="radInfIni" style="margin-right: 5px" value="D"  id="radDir" checked>Directa</label>
                                        <label class="radio-inline" style="margin-right: 10px"><input type="radio" name="radInfIni" style="margin-right: 5px" value="T" id="radTel"  >Telefónica</label>
                                        <label class="radio-inline"><input type="radio" name="radInfIni" style="margin-right: 5px" value="N" id="radNo">No se logró</label>
                                    </div>

                                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputRepIng">Responsable del ingreso</label>
                                        </div>
                                        <input class="form-control" type='text' id="inputRepIng">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn rgba-green-strong" id="btnGuarIngNeo" onclick="guarDatIngNeo();">Guardar</button>
            </div>
        </div>

        <!--Cuarto acordión-->
        <div class="card">
            <div class="card-header rgba-light-blue-slight" id="headingFour">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check4" value="" class="rgba-red-strong" checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="collapse4">
                        <i class="fas fa-bacteria" style="margin-right: 10px"></i>PATOLOGÍA
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-target="#accordion">
                <div class="card-body fondoPedia" id="card4">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm" id="conjPatologia">
                                            <label class="radio-inline" style="margin-right: 10px"><h5 class="radio-inline">Patología</h5></label>
                                            <label class="radio-inline" style="margin-right: 10px"><input id="radPatNo" type="radio" name="radPatologia" style="margin-right: 5px" value="N" checked>No</label>
                                            <label class="radio-inline"><input id="radPatSi"  type="radio" name="radPatologia" style="margin-right: 5px" value="S">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjAsfNac">
                                    <div class="form-check">
                                        <h5>Asfixia al nacer</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radAsfPtNo" name="radAsfPat" checked style="margin-right: 5px" value="N">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radAsfPtSi" name="radAsfPat" style="margin-right: 5px" value="S">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card" id="conjMemHi">
                                <div class="card-body">
                                    <div class="form-check">
                                        <h5>Membrana hialiana</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radMembPtNo" name="radMemPat" checked style="margin-right: 5px" value="N">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radMembPtSi" name="radMemPat" style="margin-right: 5px" value="S">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjSdrPat">
                                    <div class="form-check">
                                        <h5>SDR asoc meconio</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radSdrPtNo" name="radSDRPato" checked style="margin-right: 5px" value="N">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radSdrPtSi" name="radSDRPato" style="margin-right: 5px" value="S">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjHipPato">
                                    <div class="form-check">
                                        <h5>Hipert. pulmonar</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radHiperptNo" name="radHipPato" checked style="margin-right: 5px" value="N">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radHiperptSi" name="radHipPato" style="margin-right: 5px" value="S">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjDuct">
                                    <div class="form-check">
                                        <h5>Ductus art. tratado</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radDuctNo" name="radDuct" checked style="margin-right: 5px" value="N">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radDuctSi" name="radDuct" style="margin-right: 5px" value="S">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjApnea">
                                    <div class="form-check">
                                        <h5>Apnea</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radApnPtNo" name="radApne" checked style="margin-right: 5px" value="N">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radApnPtSi" name="radApne" style="margin-right: 5px" value="S">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjNeumo">
                                    <div class="form-check">
                                        <h5>Neumotórax</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radNeuPtNo" name="radNeuPato" checked value="N" style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radNeuPtSi" name="radNeuPato" value="S" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjDisp">
                                    <div class="form-check">
                                        <h5>Displ. bron. pulm.</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radDispPtNo" name="radDisBron" value="N" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radDispPtSi" name="radDisBron" value="S" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjEcnConf">
                                    <div class="form-check">
                                        <h5>ECN confirmada</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radEcnPtNo" name="radEcnCon" value="N" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radEcnPtSi" name="radEcnCon" value="S" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjPerfI">
                                    <div class="form-check">
                                        <h5>Perf. intest. focal</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radPerfPtNo" name="radPerInt" value="N" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radPerfPtSi" name="radPerInt" value="S" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjSifilis">
                                    <div class="form-check">
                                        <h5>Sifilis</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radSifiPtNo" name="radSifPat" value="N" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio"  id="radSifiPtSi" name="radSifPat" value="S" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body" id="conjHivPer">
                                    <div class="form-check">
                                        <h5>HIV Perinatal</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radHivPtNo" name="radHivPer" value="N" checked style="margin-right: 5px">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="radHivPtSi" name="radHivPer" value="S" style="margin-right: 5px">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <span>SEPSIS</span>
                                        </div>
                                        <div class="input-group input-group-md mb-3 col-sm-3">
                                            <span hidden>fecha</span>
                                        </div>
                                        <div class="input-group input-group-md mb-3 col-sm-3">
                                                    <span>Hemocultivo Positivo/germen
                                                    </span>
                                        </div>
                                        <div class="input-group input-group-md mb-3 col-sm-2">
                                            <span>Solo clínica</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputEcnConf1">ECN confirmada</label>
                                            </div>
                                            <select class="custom-select" id="inputEcnConf1">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-3">
                                            <input  class="form-control" id="inputFecha1" type="date">
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-3">
                                            <input  class="form-control" id="inputHemocultivo1" type="text">
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-2" id="conjSolCli1">
                                            <label class="radio-inline" for="RadClinicaSi1" style="margin-left: 5px"><input type="radio" name="Clinica1" id="RadSolCli1" value="C1"></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputEcnConf2">ECN confirmada</label>
                                            </div>
                                            <select class="custom-select" id="inputEcnConf2">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-3">
                                            <input  class="form-control" id="inputFecha2" type="date">
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-3">
                                            <input  class="form-control" id="inputHemocultivo2" type="text">
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-2" id="conjClin2">
                                            <label class="radio-inline" for="RadClinicaSi2" style="margin-left: 5px"><input type="radio" name="Clinica2" id="RadSolCli2" value="C2"></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputEcnConf3">ECN confirmada</label>
                                            </div>
                                            <select class="custom-select" id="inputEcnConf3">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-3">
                                            <input  class="form-control" id="inputFecha3" type="date">
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-3">
                                            <input  class="form-control" id="inputHemocultivo3" type="text">
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-2" id="conjClin3">
                                            <label class="radio-inline" for="RadClinicaSi3" style="margin-left: 5px"><input type="radio" name="Clinica3" id="RadSolCli3" value="C3"></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputEcnConf4">ECN confirmada</label>
                                            </div>
                                            <select class="custom-select" id="inputEcnConf4">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-3">
                                            <input  class="form-control" id="inputFecha4" type="date">
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-3">
                                            <input  class="form-control" id="inputHemocultivo4" type="text">
                                        </div>
                                        <div class="input-group input-group-sm mb-3 col-sm-2" id="conjClin4">
                                            <label class="radio-inline" for="RadClinicaSi4" style="margin-left: 5px"><input type="radio" name="Clinica4" id="RadSolCli4" value="C4"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header-pills" style="margin-left: 8px; margin-top: 5px">
                                    <h5>Retinopatia</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputOftPato">Oftalmoscopia indirecta</label>
                                            </div>
                                            <select class="custom-select" id="inputOftPato">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                                <option value="nc">n/c</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="InputEdad">Edad gestacional 1a. Ex.</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Semanas" id="inputEdGesSemSep"> <label style="margin-left: 10px; margin-right: 10px">-</label>
                                            <input type="text" class="form-control" placeholder="Días" id="inputEdGesDiaSep">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGradMax">Grado máximo (0-5)</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputGradMax">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltReqCir">Requiere cirugía</label>
                                            </div>
                                            <select class="custom-select" id="sltReqCir">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard">
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltEco">Ecografía</label>
                                            </div>
                                            <select class="custom-select" id="sltEco">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltLeu">Leucomalacia</label>
                                            </div>
                                            <select class="custom-select" id="sltLeu">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="sltHem">Hemorragia</label>
                                            </div>
                                            <select class="custom-select" id="sltHem">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGradMaxPat">GRADO MÁXIMO</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="(1-4)" id="inputGradMaxPat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="sltAsfConv">Asfictico c/convulsiones</label>
                                        </div>
                                        <select class="custom-select" id="sltAsfConv">
                                            <option value="S">Si</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-4 col-sm-3">
                                            <button class="btn rgba-light-blue-strong" id="btnCie" value="1" onclick="abrCie10(this.value)">CIE 10
                                            </button>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-5 col-sm-4">
                                            <input class="form-control" id="ImpresionClinica" hidden>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="input-group-sm mb-sm-4 col-sm-12">
                                            <div class="input-group-prepend">
                                                <input class="form-control" id="txtImpresionClinica" hidden>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-striped" id="tbCantidadCie10">
                                        <thead class="info-color white-text">
                                        <tr align="center" class="active">
                                            <td width="100">Código CIE10</td>
                                            <td width="380">Descripción </td>
                                        </tr>
                                        </thead>
                                        <tbody id="tblbodyCantidadCie10">
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Defecto congénito mayor</label>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputCIE10">CIE 10</label>
                                                </div>
                                                <input type="text" class="form-control" id="InputCIE10">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-light-blue-strong" onclick="guarPatolgia()" id="btnGuarPato">Guardar</button>
                </div>
            </div>

        </div>

        <!--Quinto acordión-->
        <div class="card">
            <div class="card-header rgba-red-slight" id="headingFiver">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check5" value="" class="rgba-red-strong" checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <i class="fas fa-pills" style="margin-right: 10px"></i>TRATAMIENTOS
                    </button>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-target="#accordion">
                <div class="card-body fondoPedia" id="card5">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputPrimeraDosis">Edad 1ra. Dosis</span>
                                            </div>
                                            <input type="time" class="form-control" placeholder="Horas" id="inputHoras">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-7">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputSur">Surfactante</label>
                                            </div>
                                            <select class="custom-select" id="seltSur">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-7">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputIndPro">Indomet. profil</label>
                                            </div>
                                            <select class="custom-select" id="selIndPro">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-7">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputIndIbu">Indo/ibup. trat</label>
                                            </div>
                                            <select class="custom-select" id="selIndIbu">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-7">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputAmiCaf">Aminof/cafeí</label>
                                            </div>
                                            <select class="custom-select" id="selAmiCaf">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="InputCantDiaAmi">Días</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Días" id="inputCantDiaAmi">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-7">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputAliPar">Alimentación parenteral</label>
                                            </div>
                                            <select class="custom-select" id="selAliPar">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="InputCantDiaAli">Días</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Días" id="inputCantDiaAli">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="card-header-tabs">
                                    <h5 style="margin-left: 25px; margin-top: 13px">Cuidados Respiratorios</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputCpapVen">CPAP pre ventil</label>
                                            </div>
                                            <select class="custom-select" id="selCpapVen">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <span style="text-align: center">DURACIÓN</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputVent">Ventilado ET</label>
                                            </div>
                                            <select class="custom-select" id="selVent">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                                                <input type="text" class="form-control" placeholder="Días" id="inputDiasVent"> <label style="margin-left: 10px; margin-right: 10px">-</label>
                                                <input type="time" class="form-control" placeholder="Horas" id="inputHorasVent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputSur">CPAP</label>
                                            </div>
                                            <select class="custom-select" id="selCpap">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                                <input type="text" class="form-control" placeholder="Días" id="inputDiasCP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selOxigTrat">Oxígeno</label>
                                            </div>
                                            <select class="custom-select" id="selOxigTrat">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6" id="conjDias28">
                                            <input type="text" class="form-control" id="InputDias28">
                                            <label class="radio-inline" for="RadioCR28dias" style="margin-right: 5px; margin-left: 5px">  días > 28 días <input type="radio" name="Cr28Dias" id="radMay28" value="S"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputTrans">Transfunciones</label>
                                            </div>
                                            <select class="custom-select" id="selTrans">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <input type="text" class="form-control" id="inputvlVol"><label style="margin-left: 10px">ml Vol. total</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="margin-top: 20px">
                                <div class="card-header-pills">
                                    <h5 style="margin-left: 25px; margin-top: 13px">Cirugía</h5>
                                </div>
                                <div class="card-body" style="text-align: center">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="card">
                                                <div class="card-body" id="conjDuctusTrat">
                                                    <div class="form-check">
                                                        <h5>Ductus</h5>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radDuc" value="N" id="radDucNo" checked style="margin-right: 5px">No</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radDuc"  value ="S" id="radDucSi" style="margin-right: 5px">Si</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="card">
                                                <div class="card-body" id="conjEcnTrat">
                                                    <div class="form-check">
                                                        <h5>ECN</h5>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radEncTrat" value="N" id="radEncTratNo" checked style="margin-right: 5px">No</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radEncTrat" value="S" id="radEncTratSi" style="margin-right: 5px">Si</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="card">
                                                <div class="card-body" id="conjRcpTrat">
                                                    <div class="form-check">
                                                        <h5>RCP</h5>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radRcpTrat" value="N" id="radRcpNo" checked style="margin-right: 5px">No</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radRcpTrat" value="S" id="radRcpSi" style="margin-right: 5px">Si</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="card">
                                                <div class="card-body" id="conjHidroTrat">
                                                    <div class="form-check">
                                                        <h5>Hidrocef</h5>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radHidrocef" value="N" id="radHidroNo" checked style="margin-right: 5px">No</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radHidrocef" value="S" id="radHidroSi"  style="margin-right: 5px">Si</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="card">
                                                <div class="card-body" id="conjOtrTrat">
                                                    <div class="form-check">
                                                        <h5>Otra</h5>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radOtroTrat" value="N" id="radOtraTratNo" checked style="margin-right: 5px">No</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="radOtroTrat" value="S" id="radOtraTratSi" style="margin-right: 5px">Si</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="margin-top: 20px">
                                <div class="card-header-pills">
                                    <h5 style="margin-left: 25px; margin-top: 13px">Crecimiento inicial</h5>
                                </div>
                                <div class="card-body" style="text-align: center">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputPesoMinimoG">Peso Minímo (g)</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputPesoMinimoG">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputEdaRecPes">Edad recupera peso</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputEdaRecPes" placeholder="Días">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputPeso36Sem">Peso a las 36 semanas</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputPeso36Sem">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="margin-top: 20px">
                                <div class="card-header-pills">
                                    <h5 style="margin-left: 25px; margin-top: 13px">Antopometría al egreso</h5>
                                </div>
                                <div class="card-body" style="text-align: center">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputPesoAnt">Peso (g)</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputPesoAnt">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputLong">Longitud</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputLong">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputPesCra">Peso craneo (cm)</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputPesCra">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <label>Fotocopiar gráfico de peso/edad</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card-footer text-right">
                    <button class="btn rgba-red-strong" onclick="guarDatTratamiento()" id="btnTratamien">Guardar</button>
                </div>
            </div>
        </div>

        <!--Sexto acordión-->
        <div class="card">
            <div class="card-header rgba-orange-slight" id="headingSix">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check6"  checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <i class="fas fa-door-open" style="margin-right: 10px"></i>EGRESO
                    </button>
                </h5>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-target="#accordion">
                <div class="card-body fondoPedia" id="card6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selEgre">Egreso</label>
                                            </div>
                                            <select class="custom-select" id="selEgre">
                                                <option value="V">Vivo</option>
                                                <option value="F">Fallece</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selNecro">Necro</label>
                                            </div>
                                            <select class="custom-select" id="selNecro">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputTras">Lugar traslado</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputTras">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selTrasla">Fallece durante o en lugar traslado</label>
                                            </div>
                                            <select class="custom-select" id="selTrasla">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-5" id="conjDia">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputEdadEgresoMuerte">Edad al egreso o muerte</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputEdadEgre">
                                            <label class="radio-inline" for="RadioCR28dias" style="margin-right: 10px; margin-left: 10px"> < 1 día <input type="radio" name="CR28dias" id="radMen1" value="S" style="margin-left: 5px; margin-right: 5px"></label>
                                        </div>

                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputEdadEgresoMuerte">Edad gestacional al egreso</label>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Semana" id="InputSemana"> <label style="margin-left: 10px; margin-right: 10px">-</label>
                                            <input type="text" class="form-control" placeholder="Días" id="inputDias">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selOxigeno">Oxígeno del hogar</label>
                                            </div>
                                            <select class="custom-select" id="selOxigeno">
                                                <option value="S">Si</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="SelAlimento">Alimento al egreso</label>
                                            </div>
                                            <select class="custom-select" id="SelAlimento">
                                                <option value="LE">Lactancia exclusiva</option>
                                                <option value="P">Parcial</option>
                                                <option value="A">Artificial</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selMadDiaPrev">Madre junto a RN día previo</label>
                                            </div>
                                            <select class="custom-select" id="selMadDiaPrev">
                                                <option value="DN">Día y noche</option>MP
                                                <option value="SD">Solo día</option>
                                                <option value="SV">Solo visitó</option>
                                                <option value="NV">No visitó</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selHogEgr">Hogar al egreso</label>
                                            </div>
                                            <select class="custom-select" id="selHogEgr">
                                                <option value="MP">Con madre/padre</option>
                                                <option value="OF">Otros familiares</option>
                                                <option value="A">Adopción</option>
                                                <option value="AI">Amparo institucional</option>
                                                <option value="NC">n/c</option>
                                            </select>
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
                                        <div class="input-group input-group-sm mb-sm-4 col-sm-3">
                                            <button class="btn rgba-orange-strong" onclick="abrCie10(this.value)" id="btnCie" value="2">CIE 10 de Egreso
                                            </button>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-5 col-sm-4">
                                            <input class="form-control" id="ImpresionClinica2" hidden>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="input-group-sm mb-sm-4 col-sm-12">
                                            <div class="input-group-prepend">
                                                <input class="form-control" id="txtImpresionClinica2" hidden>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-striped table-bordered" id="tbCantidadCie10">
                                        <thead class="rgba-orange-strong text-white">
                                        <tr align="center" class="active">
                                            <td width="100">Código CIE10</td>
                                            <td width="380">Descripcion </td>
                                        </tr>
                                        </thead>
                                        <tbody id="tblbodyCantidadCie10_2">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-orange-strong" id="guarEgreso" onclick="guarDatEgreso();">Guardar</button>
                </div>
            </div>
        </div>

        <!--Septimo acordion-->
        <div class="card">
            <div class="card-header rgba-green-slight" id="headingSeven">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check7"  checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <i class="fas fa-tint" style="margin-right: 10px"></i>TAMIZAJE/INMUNIZACIONES
                    </button>
                </h5>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-target="#accordion">
                <div class="card-body fondoPedia">
                    <div class="row margEntCard">
                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='sifilis' >
                                    <div class="form-check">
                                        <h5>SIFILIS</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radSif" checked style="margin-right: 5px" value="NE">NEG</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radSif" style="margin-right: 5px" value="TR">+ Tratado</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radSif" style="margin-right: 5px" value="NT">+ No tratado</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radSif" style="margin-right: 5px" value="SD">s/d</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id= 'tsh'>
                                    <div class="form-check">
                                        <h5>TSH</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radTSH" checked style="margin-right: 5px" value="N">Normal</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radTSH" style="margin-right: 5px"value="E">Elevado</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radTSH" style="margin-right: 5px" value="SD">s/d</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id = 'Audicion'>
                                    <div class="form-check">
                                        <h5>Audición</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radAud" checked style="margin-right: 5px"value="N">Normal</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radAud" style="margin-right: 5px" value="D">Deficit</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radAud" style="margin-right: 5px" value="SD">s/d</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='Falciforme'>
                                    <div class="form-check">
                                        <h5>Falciforme</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radFal" checked style="margin-right: 5px" value="N">Normal</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radFal" style="margin-right: 5px" value="A">Anormal</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radFal" style="margin-right: 5px" value="SD">s/d</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px; margin-left: 10px">
                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='gcg'>
                                    <div class="form-check">
                                        <h5>BCG</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radBCG" checked style="margin-right: 5px" value="N">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radBCG" style="margin-right: 5px" value="S">Si</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radBCG" style="margin-right: 5px" value="SD">s/d</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='Hep'>
                                    <div class="form-check">
                                        <h5>Hep B vac</h5>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radHep" checked style="margin-right: 5px" value="N">No</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radHep" style="margin-right: 5px" value="S">Si</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="radHep" style="margin-right: 5px" value="SD">s/d</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-red-strong" onclick="guarTamizaje()" id="guardarTamizaje">Guardar</button>
                </div>
            </div>
        </div>

        <!--Octavo acordion-->
        <div class="card">
            <div class="card-header rgba-light-blue-slight" id="headingEight">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check8"  checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <i class="fas fa-briefcase-medical" style="margin-right: 10px"></i>PROMOCION DE SALUD - TEMAS ABORDADOS
                    </button>
                </h5>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-target="#accordion">
                <div class="card-body fondoPedia">
                    <div class="row" style="margin-left: 15px">
                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='promosal'>
                                    <h5>Lactancia exclusiva</h5>
                                    <label class="radio-inline" style="margin-right: 10px"><input type="radio" name="radLacExc" style="margin-right: 5px" value="N" checked>No</label>
                                    <label class="radio-inline"><input type="radio" name="radLacExc" style="margin-right: 5px" value="S">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='dormBocArriba'>
                                    <h5>Dormir boca arriba</h5>
                                    <label class="radio-inline" style="margin-right: 10px"><input type="radio" name="radDorBocAba" style="margin-right: 5px" value="NS" checked>No</label>
                                    <label class="radio-inline"><input type="radio" name="radDorBocAba" style="margin-right: 5px" value="S">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='PrenvRespiv'>
                                    <h5>Prevención contagio respivirus</h5>
                                    <label class="radio-inline" style="margin-right: 10px"><input type="radio" name="radPreConRes" style="margin-right: 5px" value="NS" checked>No</label>
                                    <label class="radio-inline"><input type="radio" name="radPreConRes" style="margin-right: 5px" value="S">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='usoGel'>
                                    <h5>Uso alcohol/gel</h5>
                                    <label class="radio-inline" style="margin-right: 10px"><input type="radio" name="radUsoAlc" style="margin-right: 5px" value="NS" checked>No</label>
                                    <label class="radio-inline"><input type="radio" name="radUsoAlc" style="margin-right: 5px" value="S">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px; margin-left: 15px">
                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='DerProtecS'>
                                    <h5>Derechos/protec. social</h5>
                                    <label class="radio-inline" style="margin-right: 10px"><input type="radio" name="radDerPro" style="margin-right: 5px" value="N" checked>No</label>
                                    <label class="radio-inline"><input type="radio" name="radDerPro" style="margin-right: 5px" value="S">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">

                                <div class="card-body" id='EntMatImpr'>
                                    <h5>Entrego material impreso</h5>
                                    <label class="radio-inline" style="margin-right: 10px"><input type="radio" name="radEntMat" style="margin-right: 5px" value="N" checked>No</label>
                                    <label class="radio-inline"><input type="radio" name="radEntMat" style="margin-right: 5px" value="S">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-red-strong" onclick="guarPromoSalud()" id="guardarPromoSalud">Guardar</button>
                </div>
            </div>
        </div>

        <!--Noveno acordion-->
        <div class="card">
            <div class="card-header rgba-red-slight" id="headingNine">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check9"  checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        <i class="fas fa-user-edit" style="margin-right: 10px"></i>INDICACIONES AL EGRESO
                    </button>
                </h5>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-target="#accordion">
                <div class="card-body fondoPedia">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group mb-sm-3 col-sm-5">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputResponsable">Responsable</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputResponsable">
                                        </div>
                                        <div class="input-group input-group mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputTelefonoIE">Teléfono</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputTelefonoIE">
                                        </div>
                                        <div class="input-group input-group mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputCorreo">Email</label>
                                            </div>
                                            <input type="text" class="form-control " id="inputCorreo">
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
                                        <div class="form-group input-group input-group mb-sm-3 col-sm-auto">
                                            <label for="txtNotas"></label>
                                            <textarea class="form-control" id="txtNotas" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-red-strong" onclick="guardarIndEgresoNeo()" id="guardarIndEgreso">Guardar</button>
                </div>
            </div>
        </div>

        <!--Decimo acordion-->
        <div class="card">
            <div class="card-header rgba-orange-slight" id="headingTen">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check10"  checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        <i class="fas fa-compress-alt" style="margin-right: 10px"></i>SEGUIMIENTO COORDINADO
                    </button>
                </h5>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-target="#accordion">
                <div class="card-body fondoPedia">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5></h5>
                                        </div>
                                        <div class="input-group input-group mb-sm-3 col-sm-3 text-center">
                                            <div class="input-group-prepend">
                                                <h5 class="text-center">Lugar</h5>
                                            </div>
                                        </div>
                                        <div class="input-group input-group mb-sm-3 col-sm-3 text-center">
                                            <div class="input-group-prepend">
                                                <h5 class="text-center">Teléfono</h5>
                                            </div>
                                        </div>
                                        <div class="input-group input-group mb-sm-3 col-sm-3 text-center">
                                            <div class="input-group-prepend">
                                                <h5>Fecha</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="text-right">Pediátrico</h5>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="text" class="form-control " id="inputLugar">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="text" class="form-control " id="inputTel">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="date" class="form-control " id="inputFecha">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3 text-right">
                                            <label class="radio-inline" style="margin-right: 10px"><h5 class="radio-inline">Oftalmológico</h5></label>
                                            <label class="radio-inline" style="margin-right: 10px"><input type="radio"  value="N"  id="radOftamoNo"  name="radoftamo" style="margin-right: 5px" checked>No</label>
                                            <label class="radio-inline"><input type="radio" name="radoftamo" id="radOftamoSi" value="S" style="margin-right: 5px">Si</label>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="text" class="form-control " id="inputLug">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="text" class="form-control " id="inputTele">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="date" class="form-control " id="inputFec">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3 text-right">
                                            <label class="radio-inline" style="margin-right: 10px"><h5 class="radio-inline">Audiológico</h5></label>
                                            <label class="radio-inline" style="margin-right: 10px"><input  id="radAudioNo" value="N" type="radio" name="radPreConAudi" style="margin-right: 5px" checked>No</label>
                                            <label class="radio-inline"><input type="radio"  id="radAudioSi" value="S" name="radPreConAudi" style="margin-right: 5px">Si</label>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="text" class="form-control " id="inputLuga">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="text" class="form-control " id="inputTelef">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="date" class="form-control " id="inputFech">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3 text-right">
                                            <label class="radio-inline" style="margin-right: 10px"><h5 class="radio-inline">Apoyo Psicosocial</h5></label>
                                            <label class="radio-inline" style="margin-right: 10px"><input type="radio" value="N" id="radApoyoNo" name="radPreConApoyo" style="margin-right: 5px" checked>No</label>
                                            <label class="radio-inline"><input type="radio"  value="S" id="radApoyoSi"  name="radPreConApoyo" style="margin-right: 5px">Si</label>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="text" class="form-control " id="inputLu">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <input type="text" class="form-control " id="inputTelefon">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card margEntCard">
                        <div class="card-body">
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputSem">¿Por cuantas semanas la madre no realizará tareas fuera del hogar?</label>
                                    </div>
                                    <input type="text" class="form-control " id="inputSem">
                                    <label class="radio-inline" for="radSemMad" style="margin-right: 5px; margin-left: 5px"><input type="radio" name="CR28dias" id="radio4Semanas" value="N" style="margin-left: 10px; margin-right: 5px"> < 4 semanas </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-orange-strong" onclick=" guarDatSeguiCoor()" id="btnSeguimiento">Guardar</button>
                </div>
            </div>
        </div>

        <!--Decimo  primer acordion-->
        <div class="card">
            <div class="card-header rgba-green-slight" id="headingEleven">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check11"  checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        <i class="material-icons" id="iconPreg" style="margin-right: 8px">pregnant_woman</i>INGRESO MADRE
                    </button>
                </h5>
            </div>
            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                <div class="card-body fondoPedia">

                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputEdadMat">Edad Mat</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputEdadMat">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputG">G</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputG">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputP">P</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputP">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputAb">AB</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputAb">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputC">C</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputC">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputHv">Hv</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputHv">
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
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputHv">Hv</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputhv">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputHm">Hm</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputHm">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputFur">Fur</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputFur">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputFpp">Fpp</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputFpp">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGruRh">Grupo y Rh</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputGruRh">
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
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputCo">Coombs</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputCo">
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
                                        <div class="col-sm-auto">
                                            <label class="col-form-label" style="margin-right: 20px">Patologia en el embarazo</label>
                                            <label class="radio-inline" for="RadSi" style="margin-left: 5px"> <input type="radio" name="RadPatEmb" id="RadHiperSi" value="RadSi" checked style="margin-left: 5px"> Si </label>
                                            <label class="radio-inline" for="RadNo"> <input type="radio" name="RadPatEmb" id="RadHiperNo" value="RadNo" checked style="margin-left: 15px"> No </label>
                                        </div>
                                    </div>
                                    <div class="row" style=" margin-left: 550px; margin-bottom: 20px">
                                        <h5>Patología</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputPato1">1</label>
                                                </div>
                                                <input class="form-control"  id="inputPato1" type='text'>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputPato2">2</label>
                                                </div>
                                                <input class="form-control"  id="inputPato2" type='text'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputPato3">3</label>
                                                </div>
                                                <input class="form-control" type='text'  id="inputPato3">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputPato4">4</label>
                                                </div>
                                                <input class="form-control" type='text'  id="inputPato4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-sm-12">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputPatoEm">Patología en embarazos anteriores</label>
                                                </div>
                                                <input class="form-control"  id="inputPatoEm" type='text'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margEntCard">
                        <div class="col-sm-3 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <legend class="col-form-label ">Ultrasonidos Obstetricos </legend>
                                            <label class="radio-inline" for="RadSi"> <input type="radio" name="RadUltraOb" id="RadHiperSi" value="RadSi" checked> Si </label>
                                            <label class="radio-inline" for="RadNo"> <input type="radio" name="RadUltraOb" id="RadHiperNo" value="RadNo"> No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputUltraNl">Nl</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputUltraNl">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputUltraRciu">Rciu</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputUltraRciu">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputUltraMal">Malformación</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputUltraMal">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputOtro">Otro</label>
                                            </div>
                                            <input class="form-control" type='text'  id="inputOtro">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <legend class="col-form-label ">Serología positiva</legend>
                                            <label class="radio-inline" for="RadSi"> <input type="radio" name="RadSerologia" id="RadHiperSi" value="RadSi" checked> Si </label>
                                            <label class="radio-inline" for="RadNo"> <input type="radio" name="RadSerologia" id="RadHiperNo" value="RadNo"> No </label>
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
                                    <div class="input-group input-group mb-sm-3 col-sm-auto">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputComent">Comentarios</label>
                                        </div>
                                        <textarea class="form-control" rows="5" type='text'  id="inputComent"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-right">
                    <button class="btn rgba-green-strong" onclick="guarDatIngresoMadre()" id="btnIngreMadre">Guardar</button>
                </div>
            </div>
        </div>

        <!--Decimo  segundo acordion-->
        <div class="card">
            <div class="card-header rgba-light-blue-slight" id="headingTwelve">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check12"  checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        <i class="fas fa-female" style="margin-right: 10px"></i>GINECOLOGIA
                    </button>
                </h5>
            </div>
            <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                <div class="card-body fondoPedia">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputIni">Inicio</label>
                                            </div>
                                            <select class="custom-select" id="SelInicio">
                                                <option selected>Seleccionar opción</option>
                                                <option value="1">Espontaneo</option>
                                                <option value="2">Inducido</option>
                                                <option value="3">Cesarea selectiva</option>
                                                <option value="3">Desconocido</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputPresent">Presentación</label>
                                            </div>
                                            <select class="custom-select" id="SelPresent">
                                                <option selected>Seleccionar opción</option>
                                                <option value="1">Cefalica</option>
                                                <option value="2">Podalica</option>
                                                <option value="3">Tranversa</option>
                                                <option value="3">Desconocida</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="Factura">Aminorexis Hrs</label>
                                            </div>
                                            <input type="time" class="form-control"   name="DateFechaEgress" id="DateFechaEgress">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputInicio" style="width: 150px; text-align: center">Amniorrexis</label>
                                            </div>
                                            <select class="custom-select" id="SelAmniorexis">
                                                <option selected>Seleccionar opción</option>
                                                <option value="1">Espontanea</option>
                                                <option value="2">Artificial</option>
                                                <option value="3">Desconocida</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputInicio" style="width: 150px; text-align: center">Liquido amniotico </label>
                                            </div>
                                            <select class="custom-select" id="SelLiquido">
                                                <option selected>Seleccionar opción</option>
                                                <option value="1">Normal</option>
                                                <option value="2">Meconal</option>
                                                <option value="3">Fetido</option>
                                                <option value="1">Hematico</option>
                                                <option value="2">Oligohidramnios</option>
                                                <option value="1">Polihidramios</option>
                                                <option value="2">Se ingnora</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputInicio" style="width: 150px; text-align: center">Tipo de parto</label>
                                            </div>
                                            <select class="custom-select" id="SelTipoParto">
                                                <option selected>Seleccionar opción</option>
                                                <option value="1">PES</option>
                                                <option value="2">PDS</option>
                                                <option value="3">FORCEPS</option>
                                                <option value="1">Cesarea</option>
                                                <option value="2">Version</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard">
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="input-group input-group-sm mb-sm-2 col-sm-12">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputInd">Indicación</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputInd">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="input-group input-group-sm mb-sm-2 col-sm-12">
                                        <h5>Patología en el parto</h5>
                                        <label class="radio-inline" for="RadSi"> <input type="radio" name="radPatPar" id="radPatParSi" value="S" style="margin-left: 20px" checked> Si </label>
                                        <label class="radio-inline" for="RadNo"> <input type="radio" name="radPatPar" id="radPatParNo" value="N" style="margin-left: 10px"> No </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5>Sufrimiento fetal</h5>
                                            <label class="radio-inline" for="RadSufSi"><input type="radio" name="RadSuf" id="RadSufSi" value="S" style="margin-left: 20px" checked> Si </label>
                                            <label class="radio-inline" for="RadHSufNo"><input type="radio" name="RadSuf" id="RadHSufNo" value="N" style="margin-left: 15px" > No </label>
                                            <label class="radio-inline" for="RadSufIg"><input type="radio" name="RadSuf" id="RadSufIg" value="I" style="margin-left: 15px" > Ignorado </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5>Anestesia</h5>
                                            <label class="radio-inline" for="RadAnesNo"><input type="radio" name="RadAnes" id="radAnesNo" value="N" style="margin-left: 20px" checked> No </label>
                                            <label class="radio-inline" for="RadAnesEpi"><input type="radio" name="RadAnes" id="radAnesEpi" value="E" style="margin-left: 15px" > Epidural </label>
                                            <label class="radio-inline" for="RadAnesGen"><input type="radio" name="RadAnes" id="radAnesGen" value="G" style="margin-left: 15px" > General </label>
                                            <label class="radio-inline" for="RadAneSeIgn"><input type="radio" name="RadAnes" id="radAneSeIgn" value="I" style="margin-left: 15px" > Se ignora </label>
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
                                                    <label class="input-group-text" for="inputMedUs">Medicamentos usados</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputMedUs">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-light-blue-strong" onclick="guarDatGinecologia()" id="btnGinecologia">Guardar</button>
                </div>
            </div>
        </div>

        <!--Decimo  tercero acordion-->
        <div class="card">
            <div class="card-header rgba-red-slight" id="headingThirteen">
                <h5 class="mb-0">
                    <label >
                        <input type="checkbox" id="check13"  checked hidden disabled>
                    </label>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                        <i class="fas fa-baby" style="margin-right: 10px"></i>Pediatria
                    </button>
                </h5>
            </div>
            <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion">
                <div class="card-body fondoPedia">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="input-group input-group-sm mb-sm-2 col-sm-auto">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputEdGes">Edad gestacional semanas</label>
                                        </div>
                                        <input class="form-control col " type='text' id="inputEdGes">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="input-group input-group-sm mb-sm-2 col-sm-auto">
                                        <div class="col-sm-12">
                                            <label class="radio-inline" for="RadDomicilio"> <input type="radio" name="tipBallCap" id="RadDomicilio" value="Domicilio" checked> Ballard </label>
                                            <label class="radio-inline" for="RadFallecido"><input type="radio" name="tipBallCap" id="RadFallecido" value="Fallecido"> Capurro</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="input-group input-group-sm mb-sm-2 col-sm-auto">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputAdecua">Adecuación</label>
                                        </div>
                                        <input class="form-control col " type='text' id="inputAdecua">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputUno">1</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputUno">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputCin">5</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputCin">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputDie">10</label>
                                            </div>
                                            <input class="form-control" type='text' id="inputDie">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <lenged style="margin-right: 20px">Alcanzo los 7 puntos</lenged>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">A los</span>
                                            </div>
                                            <input type="text" class="form-control" id="inputAlos">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Minutos</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard" >
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5>Reanimación</h5>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radReanimacion" id="radNo" checked value="N">
                                                <label class="form-check-label" for="radNo">No </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radReanimacion" id="radPrePos" value="P">
                                                <label class="form-check-label" for="radPrePos">Presion positiva</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radReanimacion" id="radMasCard" value="C">
                                                <label class="form-check-label" for="radMasCard">+Masaje cardiaco</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radReanimacion" id="radMed" value="M">
                                                <label class="form-check-label" for="radMed"> +Medicamentos</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-2 col-sm-5">
                                            <h5>Aspiracion de traquea</h5>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" for="inputCc">C.C</span>
                                            </div>
                                            <input type="text"  id="inputCc" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-2 col-sm-5">

                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <label class="radio-inline" for="RadSi"style="margin-right: 15px;"> <input type="radio" name="radAspTra" id="RadAspiTrSi" value="RadSi"  checked> Si </label>
                                            <label class="radio-inline" for="RadNo" style="margin-right: 15px;"> <input type="radio" name="radAspTra" id="RadAspiTrNo" value="RadNo"> No </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" for="inpuTipoAsp">Tipo</span>
                                            </div>
                                            <input type="text"  id="inpuTipoAsp" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-2 col-sm-5">
                                            <h5>Lavado gástrico</h5>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" for="inputCcLavGas">C.C</span>
                                            </div>
                                            <input type="text"  id="inputCcLavGas" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-2 col-sm-5">

                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                            <label class="radio-inline" for="RadSi"style="margin-right: 15px;"> <input type="radio" name="radLavGas" id="radLavGasSi" value="RadSi"  checked> Si </label>
                                            <label class="radio-inline" for="RadNo" style="margin-right: 15px;"> <input type="radio" name="radLavGas" id="radLavGasNo" value="RadNo"> No </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" for="inpuTipo">Tipo</span>
                                            </div>
                                            <input type="text"  id="inpuTipo" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Placenta</h5>
                                            <label class="radio-inline" for="RadNo"  style="margin-top: 10px;"> <input type="radio" name="radioPla" id="radPlaNL" value="RadNo" checked></label>
                                            <label class="form-check-label" for="radioViuda" style="margin-right: 20px">Nl</label>
                                            <label class="radio-inline" for="RadNo"> <input type="radio" name="radioPla" id="radPlaANL" value="RadNo"></label>
                                            <label class="form-check-label" for="radioViuda" style="margin-right: 20px">ANL</label>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px">
                                        <div class="input-group input-group-sm mb-sm-2 col-sm-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Peso</span>
                                            </div>
                                            <input type="text"  id="inputPesoPla" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-2 col-sm-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Tamaño</span>
                                            </div>
                                            <input type="text" class="form-control" id="inputTamañoPla" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-check">
                                        <h5>Cordón</h5>
                                    </div>
                                    <label class="radio-inline" for="RadNo" > <input type="radio" name="radCordon" id="radNL" value="NL" checked></label>
                                    <label class="form-check-label" for="radCord" style="margin-right: 20px">NL</label>
                                    <label class="radio-inline" for="RadNo"> <input type="radio" name="radCordon" id="radCir" value="CI"></label>
                                    <label class="form-check-label" for="radCord" style="margin-right: 20px">Circular</label>
                                    <label class="radio-inline" for="RadNo" > <input type="radio" name="radCordon" id="radPro" value="PR" ></label>
                                    <label class="form-check-label" for="radCord" style="margin-right: 20px">Prolapso</label>
                                    <label class="radio-inline" for="RadNo"> <input type="radio" name="radCordon" id="radNud" value="NU"></label>
                                    <label class="form-check-label" for="radCord" style="margin-right: 20px">Nudo</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm" for="inputLong">Longitud</span>
                                            </div>
                                            <input type="text" class="form-control" id="inputLongPedia">
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm" for="inputNumArt">Número de arterias</span>
                                            </div>
                                            <input type="text" class="form-control" id="inputNumArtPedia">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margEntCard">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm" for="inputNacNumPedia">Nacimiento número:</span>
                                            </div>
                                            <input type="text" class="form-control" id="inputNacNumPedia">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="radio-inline" for="RadNo" > <input type="radio" name="radNacNum" id="radNL" value="N" checked></label>
                                            <label class="form-check-label" for="radNacNum" style="margin-right: 20px">Nl</label>
                                            <label class="radio-inline" for="RadNo"> <input type="radio" name="radNacNum" id="radANL" value="A"></label>
                                            <label class="form-check-label" for="radNacNum" style="margin-right: 20px">ANL</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Lugar</h5>
                                            <label class="radio-inline" for="RadNo" > <input type="radio" name="radioLugarPedia" id="RadCA" value="CA" checked></label>
                                            <label class="form-check-label" for="radioLugar" style="margin-right: 20px">Casa</label>
                                            <label class="radio-inline" for="RadNo"> <input type="radio" name="radioLugarPedia" id="RadLP" value="LP"></label>
                                            <label class="form-check-label" for="radioLugar" style="margin-right: 20px">L y P</label>
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
                                                    <label class="input-group-text" for="inputLibPedia">Libras</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputLibPedia">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="InputKgsPedia">Kgs</label>
                                                </div>
                                                <input type="text" class="form-control" id="InputKgsPedia">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputTallaPedia">Talla</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputTallaPedia">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputCcPedia">C.C</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputCcPedia">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputCtPedia">C.T</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputCtPedia">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputCabd">C.abd</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputCabd">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputPbPedia">P.b</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputPbPedia">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputFcPedia">F.c</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputFcPedia">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputFrPedia">F.r</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputFrPedia">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputSatPedia">Sat</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputSatPedia">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputSilPedia">Silverman</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputSilPedia">
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
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-4 col-sm-3">
                                            <button class="btn rgba-red-strong" onclick="abrCie10(this.value)" id="btnCie" value="3">CIE 10 de Egreso
                                            </button>
                                        </div>
                                        <div class="input-group input-group-sm mb-sm-5 col-sm-4">
                                            <input class="form-control" id="ImpresionClinica3">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="input-group-sm mb-sm-4 col-sm-12">
                                            <div class="input-group-prepend">
                                                <input class="form-control" id="txtImpresionClinica3">
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-striped table-bordered" id="tbCantidadCie10">
                                        <thead class="rgba-red-strong text-white">
                                        <tr align="center" class="active">
                                            <td width="100">Código CIE10</td>
                                            <td width="380">Descripcion </td>
                                        </tr>
                                        </thead>
                                        <tbody id="tblbodyCantidadCie10_3">
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
                </div>
                <div class="card-footer text-right">
                    <button class="btn rgba-red-strong" onclick="guarDatPedia();" id="guarPedia">Guardar</button>
                </div>
            </div>
        </div>
    </div>
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
            <div class="modal-body fondoPedia">
                <input type="text" class="form-control" id="valorBtn" hidden>
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

<script src="./js/js_NeoFrmClinicaHosp.js"></script>





