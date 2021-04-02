<!-- FORMULARIO PRINCIPAL -->
<div id="C-19AvelPaciente" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">EVOLUCION PACIENTE</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#C-19AvelPaciente').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>
    <div class="card-body">
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

        <table id="tblEvolPaciente" class="table table-hover table-striped" >
            <thead class="stylish-color text-white">
            <tr>
                <th>No. Emergencia</th>
                <th>Registro Medico</th>
                <th>Nombre</th>
                <th>Procedencia</th>
                <th>Estatus</th>
                <th>Datos Ingreso</th>
                <th>Datos Egreso</th>
            </tr>
            </thead>
            <tbody id="tbodyEvolPaciente">
            </tbody>
        </table>
    </div>
    <!-- Inicio modal ver Programacion -->
    <div class="modal" id="verProgramacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center text-white blue-gradient">
                    <h4 class="modal-title w-100 font-weight-bold">INFORMACION PROGRAMACIÓN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="$('#verProgramacion').fadeOut();">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formularioProgQui">
                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputCUI">Registro Médico</label>
                                </div>
                                <input type="text" class="form-control" id="inputRegistroMed" disabled>

                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputNombre">Nombre Paciente</label>
                                </div>
                                <input type="text" class="form-control" id="inputNombre" disabled>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputNombre">Quirofano</label>
                                </div>
                                <input type="text" class="form-control" id="inputQuirofano" disabled>
                            </div>

                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputEdad">Especialidad</label>
                                </div>
                                <input type="text" class="form-control" id="inputEspecialidad" disabled>
                            </div>
                        </div>

                        <div class="row">

                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputProcedimiento">Procedimiento</label>
                                </div>
                                <input type="text" class="form-control" id="inputProcedimiento" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputEstado">Estado</label>
                                </div>
                                <select id="selEstado" class="form-control">
                                    <option>Seleccione un estado</option>
                                </select>
                            </div>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputEstado">Observación</label>
                                </div>
                                <input type="text" class="form-control" id="inputObservacion">
                            </div>


                            <input type="hidden" id="inputNumProgramacion">
                            <input type="hidden" id="inputNumQuirofano">
                            <input type="hidden" id="inputNumEspecialidad">
                    </form>

                    <center><button class="btn btn-success btn-sm-8" type="button" onclick="cambioEstado();" id="btnActualizar">ACTUALIZAR ESTADO  <i class="far fa-edit"></i></button></center>

                </div>
            </div>
        </div>
    </div>
    <!-- Fin modal principal -->
</div>





<div class="modal" id="modalEmergia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-danger text-white">
                <h4 class="modal-title w-100 font-weight-bold">Completar Ingreso Emergencia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="salirModal()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" id="inputRegistroEmer" hidden>
                <input type="text" class="form-control" id="inputEstadoSolicitud" hidden>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">No. Emergencia</label>
                        </div>
                        <input type="text" class="form-control" id="inputNoEmergenciaIngreso"
                               disabled>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">Registro Médico</label>
                        </div>
                        <input type="text" class="form-control" id="inputRegistroEmerEgreIngeso"
                               placeholder="285-2020-000000"  value="285-2020-0" disabled>
                        <input type="hidden" class="form-control" id="inputRegistroOld" value=""/>
                    </div>
                </div>
                <div class="row">

                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">Nombre</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombreIngre" disabled>
                    </div>
                </div>
                <!-- Datos Ingreso -->
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        SIGNOS VITALES
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Temperatura</label>
                                            </div>
                                            <select class="form-control" id="selTemperatura">
                                                <option value="0">Seleccione</option>
                                                <option value="S">SI</option>
                                                <option value="N">NO</option>
                                            </select>
                                        </div>

                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputSegundoNombre">Grados</label>
                                            </div>
                                            <input type="number" class="form-control" id="inputGrados">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Presion arterial</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputPArterial" placeholder="">
                                        </div>

                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputSegundoNombre">Frecuencua cardiaca</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputFCardiaca" placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Frecuencia respiratoria</label>
                                            </div>
                                            <input type="text" class="form-control" id="inputFRespiratoria" placeholder="">
                                        </div>

                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputSegundoNombre">Saturación de oxigeno </label>
                                            </div>
                                            <input type="text" class="form-control" id="inputSOxigeno" placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Peso</label>
                                            </div>
                                            <input type="number" class="form-control" id="inputPeso" placeholder="">
                                        </div>

                                        <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputSegundoNombre">Medida</label>
                                            </div>
                                            <select class="form-control" id="selMedidaPeso">
                                                <option value="lb">Libras</option>
                                                <option value="kg">Kilogramos</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        GENERAL
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Piel</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textPiel">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Cabeza</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textCabeza">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Cuello</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textCuello">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Torax</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textTorax">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Corazón</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textCorazon">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Pulmones</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textPulmones">
                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Abdomen</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textAbdomen">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Genitales</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textGenitales">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Extremidades</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textExtremidades">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Neorologico</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textNeorologico">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ANTECEDENTES
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Médicos</label>
                                            </div>
                                            <select class="form-control" id="selAMedicos">
                                                <option value="N">NO</option>
                                                <option value="S">SI</option>
                                            </select>
                                        </div>

                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos" id="verMedicos" hidden>Antecedentes Medicos</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textAMedicos" hidden>
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Quirúrgicos</label>
                                            </div>
                                            <select class="form-control" id="selAQuirurgicos">
                                                <option value="N">NO</option>
                                                <option value="S">SI</option>
                                            </select>
                                        </div>

                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos" id="verQuirurgicos" hidden>Antecedentes Quirúrgicos</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textAQuirurgicos" hidden>
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Traumatología</label>
                                            </div>
                                            <select class="form-control" id="selATraumatologia">
                                                <option value="N">NO</option>
                                                <option value="S">SI</option>
                                            </select>
                                        </div>

                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos" id="verTrauma" hidden>Antecedentes Traumatología</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textATraumatologia" hidden>
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Alergicos</label>
                                            </div>
                                            <select class="form-control" id="selAAlergicos">
                                                <option value="N">NO</option>
                                                <option value="S">SI</option>
                                            </select>
                                        </div>

                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos" id="verAlergicos" hidden>Antecedentes Alergicos</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textAAlergicos" hidden>
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Gineco-Obstétricos</label>
                                            </div>
                                            <select class="form-control" id="selAGO">
                                                <option value="N">NO</option>
                                                <option value="S">SI</option>
                                            </select>
                                        </div>
                                        <div class="row" id="contenidoGO" style="background: #e8b9d1; margin-top: 10px; margin-bottom: 10px"  hidden>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-12" style="margin-top: 20px" >
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputApellidos">Ultima Mestruación</label>
                                                </div>
                                                <input type="date" id="dateMestruacion" class="form-control">
                                            </div>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputApellidos">Numero de Embarazos</label>
                                                </div>
                                                <input type="number" id="inputEmbarazos" class="form-control">
                                            </div>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputApellidos">Numero de hijos</label>
                                                </div>
                                                <input type="number" id="inputNoHijos" class="form-control">
                                            </div>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputApellidos">Parto Natural</label>
                                                </div>
                                                <input type="number" id="inputPNatural" class="form-control">
                                            </div>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputApellidos">Cesareas</label>
                                                </div>
                                                <input type="number" id="inputPCesareas" class="form-control">
                                            </div>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-4" style="margin-bottom: 20px">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputApellidos">Abortos</label>
                                                </div>
                                                <input type="number" id="inputAbortos" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputNombres">Antecedentes Familiares</label>
                                            </div>
                                            <select class="form-control" id="selAFamiliares">
                                                <option value="N">NO</option>
                                                <option value="S">SI</option>
                                            </select>
                                        </div>
                                        <div class="row" style="background: #97e887" id="contenidoAFamiliares" hidden>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-12" >
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputApellidos">Cancer</label>
                                                </div>
                                                <input type="text" id="inputCancer" class="form-control">
                                            </div>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputApellidos">Diabetes</label>
                                                </div>
                                                <input type="text" id="inputDiabetes" class="form-control">
                                            </div>
                                            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputApellidos">Tiroides</label>
                                                </div>
                                                <input type="text" id="inputTiroides" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        ADICCIONES
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Fuma</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textFuma">
                                        </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Bebe</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textBebe">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputApellidos">Otros</label>
                                            </div>
                                            <textarea class="form-control" rows="2" id="textOtros">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fin Datos Ingreso-->
                    <br>
                    <!--
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidos">Motivo de Consulta</label>
                            </div>
                            <textarea class="form-control" rows="3" id="motivoConsulta">

                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidos">Historia de la Enfermedad</label>
                            </div>
                            <textarea class="form-control" rows="3" id="historiaEnfermedad">

                            </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidos">Antecedentes</label>
                            </div>
                            <textarea class="form-control" rows="3" id="antecedentes">

                            </textarea>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidos">Estado de Conciencia</label>
                            </div>
                            <textarea class="form-control" rows="3" id="textConciencia">

                            </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidos">Examen Fisico</label>
                            </div>
                            <textarea class="form-control" rows="3" id="examenFisico">

                            </textarea>
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

                    <div class="row">
                        <div class="input-group-sm mb-sm-4 col-sm-12">
                            <div class="input-group-prepend">
                                <input class="form-control" id="txtImpresionClinica" hidden>
                            </div>
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
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputOtroCie">OTRO CIE 10</label>
                            </div>
                            <textarea class="form-control" rows="3" id="textOtroCie">
                            </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidos">Tratamiento</label>
                            </div>
                            <textarea class="form-control" rows="3" id="textTramatiento">

                            </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidos">Justificación Clinica</label>
                            </div>
                            <textarea class="form-control" rows="3" id="justificacionClinica">

                            </textarea>
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidos">Comentario</label>
                            </div>
                            <textarea class="form-control" rows="3" id="comentarioIngreso">

                            </textarea>
                        </div>
                    </div>-->

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidos">Procedencia</label>
                            </div>
                            <textarea class="form-control" rows="3" id="Procedencia" disabled>

                            </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputApellidoCasada">Status Actual de Paciente</label>
                            </div>
                            <select class="form-control" id="selEstatus" disabled>
                                <option value="0">seleccione un estatus</option>
                                <option value="1">Caso Confirmado</option>
                                <option value="2">Caso Sospechoso</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group input-group mb-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="form-label-group" for="inputPruebaIsopado"><h5>Laboratorios</h5> </label>
                        </div>
                        <button type="button" class="btn btn-outline-green btn-circle waves-effect" onclick="abirLaboratorio();">
                            <i class="fas fa-flask"></i>
                        </button>
                        <input type="text" id="fechaHora" class="form-control" hidden>
                        <input type="text" id="idCita" class="form-control" disabled>
                    </div>

                <div class="row">
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalResultadosLab"  onclick="BuscarResLaboratorio();">Buscar Resultados Laboratorio
                        </button>
                        <input type="text" id="ResLaboratorio" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 10px">
                        <div class="input-group">
                            <select class="custom-select" id="SelEncamamiento"></select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary btn-sm" onclick="complementoIngreso()" id="btnGuardarDatos" >GUARDAR
                    </button>
                    <!--Esto se agrego-->

                    <button class="btn btn-primary btn-sm" onclick="EnviarIngresoHosp();" id="btnIngresoHosp">INGRESO HOSPITALARIO
                    </button>

                    <button class="btn btn-danger btn-sm" onclick="abrirReceta()" id="btnRecetaNew">RECETA
                    </button>
                    <!--Fin del agregado-->
                </div>
            </div>
        </div>
    </div>
</div>

</div>


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
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">No. Emergencia</label>
                        </div>
                        <input type="text" class="form-control" id="inputNoEmergenciaEgreso"
                               disabled>
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">Registro Médico</label>
                        </div>
                        <input type="text" class="form-control" id="inputRegistroEmerEgreEgreso"
                               placeholder="285-2020-000000"  value="285-2020-0" disabled>

                    </div>
                </div>
                <div class="row">

                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputRegistro">Nombre</label>
                        </div>
                        <input type="text" class="form-control" id="inputNombreEgre" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNombres">Egreso</label>
                        </div>
                        <select class="form-control" id="selIngresoA" disabled>
                            <option value="Emergencia">Emergencia</option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Diagnostico</label>
                        </div>
                        <textarea class="form-control" rows="3" id="diagnosticoEgreso" >

                        </textarea>
                    </div>

                </div>
                <div class="row">

                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Resultado</label>
                        </div>
                        <textarea class="form-control" rows="3" id="resultadoEgreso">

                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Fecha Revision</label>
                        </div>
                        <input class="form-control" id="fechaRevisionEgreso" type="date">
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Hora</label>
                        </div>
                        <input class="form-control" id="horaRevisionEgreso" type="time">
                    </div>

                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Egreso</label>
                        </div>
                        <select class="form-control" id="selEgreso" disabled>
                            <option value="0">seleccione tipo de Egreso</option>
                            <option value="1">Fallecido</option>
                            <option value="2">Negativo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Referido</label>
                        </div>
                        <input class="form-control" type="text" id="inReferido" disabled>

                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputApellidoCasada">Observaciones</label>
                        </div>
                        <textarea class="form-control" rows="3" id="Observaciones" disabled>

                        </textarea>
                    </div>
                </div>


                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary btn-sm" onclick="darAltaEmergencia()" id="btnGuardarEgreso">GUARDAR</button>
                    <button class="btn btn-success btn-sm"  id="btnReceta" onclick="Abrir()" >RECETA</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin formulario agregar paciente -->

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
                                    <option value="min">Horas</option>
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
                    <button class="btn btn-primary" onclick="abrirUnidosisAnterirores()" id="btnUni">Recetas anteriores</button>
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


<!--Modal  para agregar cie10-->
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
                    <button id="btnGuardarLab" type="button" onclick="guardarLaboratorios();" class="btn btn-success btn-block">
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
                <button type="button" class="btn btn-primary" data-dismiss="modal">CERRAR</button>

            </div>
        </div>
    </div>
</div><!-- fin Modal -->




</div>

<script src="./js/js_C-19EvolPaciente.js?v=1933" type="text/javascript" defer></script>