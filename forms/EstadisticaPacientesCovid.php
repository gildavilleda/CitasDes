<!-- FORMULARIO PRINCIPAL -->
<div id="HitorialCita" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">ESTADISTICA PACIENTES COVID-19 -HNEVN-</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#HitorialCita').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>
    <div class="card-body">
        <div class="alert alert-primary text-center" role="alert" id="contentHora">

        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <h1 class="display-4 text-center" >CASOS COVID-19</h1>
                    <div class="col col-sm-10 offset-1">
                        <canvas id="oilChart" width="150" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="display-6 text-center" >CASOS CONFIRMADOS POR GENERO COVID-19</h1>
                        <div class="col col-sm-10 offset-2">
                            <canvas id="GraficaGenero" width="150" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br><br>
        <div class="card col col-sm-10 offset-1">
            <div class="card-body">
                <blockquote class="blockquote mb-3">
                    <h4 class="display-4 text-center">CASOS CONFIRMADOS POR EDAD COVID-19</h4>
                    <div class="col col-sm-10 offset-1">
                        <canvas id="GraficaEdad" width="150" height="100"></canvas>
                    </div>
                </blockquote>
            </div>
        </div>

        <br><br>
        <div class="card col col-sm-10 offset-1">
            <div class="card-body">
                <blockquote class="blockquote mb-3">
                    <h4 class="display-4 text-center">EGRESOS COVID-19</h4>
                    <div class="col col-sm-10 offset-1">
                        <canvas id="GraficaEgreso" width="150" height="100"></canvas>
                    </div>
                </blockquote>
            </div>
        </div>


        <br><br>
        <div class="card col col-sm-10 offset-1">
            <div class="card-body">
                <blockquote class="blockquote mb-3">
                    <h4 class="display-4 text-center">CASOS FALLECIDOS POR EDAD COVID-19</h4>
                    <div class="col col-sm-10 offset-1">
                        <canvas id="GraficaEdadFallecido" width="150" height="100"></canvas>
                    </div>
                </blockquote>
            </div>
        </div>

        <br><br>
        <div class="card col col-sm-10 offset-1">
            <div class="card-body">
                <blockquote class="blockquote mb-3">
                    <h4 class="display-4 text-center">CASOS NEGATIVOS POR EDAD COVID-19</h4>
                    <div class="col col-sm-10 offset-1">
                        <canvas id="GraficaEdadNegativo" width="150" height="100"></canvas>
                    </div>
                </blockquote>
            </div>
        </div>
        <br><br>
        <div class="card col col-sm-10 offset-1">
            <div class="card-body">
                <blockquote class="blockquote mb-3">
                    <h4 class="display-4 text-center">CASOS RECUPERADOS POR EDAD COVID-19</h4>
                    <div class="col col-sm-10 offset-1">
                        <canvas id="GraficaEdadRecuperado" width="150" height="100"></canvas>
                    </div>
                </blockquote>
            </div>
        </div>

        <br><br>
        <div class="card col col-sm-10 offset-1">
            <div class="card-body">
                <blockquote class="blockquote mb-3">
                    <h4 class="display-4 text-center">CASOS TRASLADADOS POR EDAD COVID-19</h4>
                    <div class="col col-sm-10 offset-1">
                        <canvas id="GraficaEdadTraslado" width="150" height="100"></canvas>
                    </div>
                </blockquote>
            </div>
        </div>

</div>


<script src="./js/js_EstadisticaPaciCovid.js?v=1917" type="text/javascript" defer></script>
