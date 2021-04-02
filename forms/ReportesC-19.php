<!-- FORMULARIO PRINCIPAL -->
<div id="HitorialCita" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">REPORTE</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#HitorialCita').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>
    <div class="card-body">

        <h3>Generar reportes por:</h3>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="RFecha" value="F" onclick="mostrarCampos(this.value)">
            <label class="form-check-label" for="exampleRadios1">
                Fecha
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="REdad" value="E" onclick="mostrarCampos(this.value)">
            <label class="form-check-label" for="exampleRadios2">
                Edad
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="RGenero" value="G" onclick="mostrarCampos(this.value)">
            <label class="form-check-label" for="exampleRadios2">
                Genero
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="RGenero" value="ES" onclick="mostrarCampos(this.value)">
            <label class="form-check-label" for="exampleRadios2">
                Estatus
            </label>
        </div>
        <br><br>

        <div id="contenidoCampos">

        </div>

        <br>
        <br>
        <div class="table-responsive text-center">
            <table id="tblRepEstadistica" border="1" class="table table-sm table-hover table-striped table-bordered"
                   cellspacing="0"
                   width="100%" >
                <thead class="primary-color-dark text-white">
                <th>No. de Historia Clinica</th>
                <th>Nombre y Apellidos de Paciente</th>
                <th>Edad</th>
                <th>Procedencia</th>
                <th>Diagnostico</th>
                <th>Respecto COVID-19</th>
                <th>Resultado</th>
                <th>Fecha de Ingreso </th>
                <th>Hora de Ingreso</th>
                <th>Fecha de Egreso</th>
                <th>Hora de Egreso</th>
                <th>No. Telefonico de Familiar de Paciente</th>
                <th>Nombre Familiar de Paciente</th>
                <th>Observaciones</th>
                </thead>
                <tbody id="tbodyRepEstadistica">
                </tbody>
            </table>
        </div>

    </div>
    <button class="btn btn-success" onclick="exportExcel()">Exportar <i class="far fa-file-excel"></i></button>

</div>


<script src="./js/js_ReportesC-19.js" type="text/javascript" defer></script>
