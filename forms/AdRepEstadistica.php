<!-- FORMULARIO PRINCIPAL -->
<div id="HitorialCita" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">REPORTE ESTADISTICA</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#HitorialCita').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="row">
                <div class="input-group col-sm-12 mb-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRegistroMedico">Fecha Inicio</label>
                    </div>
                    <input type="date" id="fInicio" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="input-group col-sm-12 mb-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRegistroMedico">Fecha Fin</label>
                    </div>
                    <input type="date" id="fFin" class="form-control">
                </div>
            </div>


        </div>
        <button class="btn btn-primary" onclick="mostrarReporte()">Ejecutar Reporte</button>
        <br>
        <br>
        <div class="table-responsive text-center">
            <table id="tblRepEstadistica" border="1" class="table table-sm table-hover table-striped table-bordered"
                   cellspacing="0"
                   width="100%" >
                <thead class="stylish-color text-white">
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
    <button class="btn btn-danger" onclick="pdf()">Exportar <i class="fas fa-file-pdf"></i></button>
</div>


<script src="./js/js_RepEstadistica.js" type="text/javascript" defer></script>

