<div id="repServicios" class="card">
    <div class="modal-header text-center text-white blue-gradient">
        <h3 class="modal-title w-100 font-weight-bold">SERVICIOS</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#repServicios').fadeOut();">
            <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>

    <div class="card-body">
        <div class="alert alert-primary text-center" role="alert" id="contentHora">

        </div>
        <div class="row">
            <div class="col-sm">
                <table id="TblPaciente" class="table table-hover text-center table-striped" style="text-align-all: center ">
                    <thead class="rgba-stylish-strong text-white text-center">
                    <tr>
                        <th><h5>Cama</h5></th>
                    </tr>
                    </thead>
                    <tbody id="tbodyServicios">

                    </tbody>
                </table>
            </div>
        </div>

        <div class="row center" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-sm" style="margin-left: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 class="text-center" style="margin-top: 5px" ondblclick="MostrarDatos(11)">Camas Intensivo I</h5>
                    </div>
                    <div class="card-body">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-procedures"></i>
                                        </button>
                                    </div>Total de camas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UCI-I-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-user-minus"></i>
                                        </button>
                                    </div>Camas ocupadas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UCI-I-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-equals"></i>
                                        </button>
                                    </div>Camas disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UCI-I-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm" style="margin-left: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 class="text-center" style="margin-top: 5px" ondblclick="MostrarDatos(12)">Camas Intensivo II</h5>
                    </div>
                    <div class="card-body">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-procedures"></i>
                                        </button>
                                    </div>Total de camas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UCI-II-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-user-minus"></i>
                                        </button>
                                    </div>Camas ocupadas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UCI-II-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-equals"></i>
                                        </button>
                                    </div>Camas disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UCI-II-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row center" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-sm" style="margin-left: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 class="text-center" style="margin-top: 5px" ondblclick="MostrarDatos(13)">Camas Intensivo III</h5>
                    </div>
                    <div class="card-body">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-procedures"></i>
                                        </button>
                                    </div>Total de camas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UCI-III-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-user-minus"></i>
                                        </button>
                                    </div>Camas ocupadas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UCI-III-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-equals"></i>
                                        </button>
                                    </div>Camas disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UCI-III-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm" style="margin-left: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 class="text-center" style="margin-top: 5px" ondblclick="MostrarDatos(16)">Transición previo egreso adultos</h5>
                    </div>
                    <div class="card-body">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-procedures"></i>
                                        </button>
                                    </div>Total de camas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="TE-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-user-minus"></i>
                                        </button>
                                    </div>Camas ocupadas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="TE-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-equals"></i>
                                        </button>
                                    </div>Camas disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="TE-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm" style="margin-left: 2px">
                 <div class="card stylish-color text-white">
                     <div class="card-header-pills w-100">
                         <h5 class="text-center" style="margin-top: 5px" onclick="MostrarDatos(18)">Observacion</h5>
                     </div>
                     <div class="card-body">
                         <div class="row" style="margin-left: 15px">
                             <div class="col-sm">
                                 <h6><div class="btn-group">
                                     <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                         <i class="fas fa-procedures"></i>
                                     </button>
                                 </div>Total de camas:</h6>
                             </div>
                             <div class="col-sm">
                                 <h6 style="margin-top: 7px" class="text-center" id="OBS-T"></h6>
                             </div>
                         </div>

                         <div class="row" style="margin-left: 15px">
                             <div class="col-sm">
                                 <h6><div class="btn-group">
                                     <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                         <i class="fas fa-user-minus"></i>
                                     </button>
                                 </div>Camas ocupadas:</h6>
                             </div>
                             <div class="col-sm">
                                 <h6 style="margin-top: 7px" class="text-center" id="OBS-O"></h6>
                             </div>
                         </div>

                         <div class="row" style="margin-left: 15px">
                             <div class="col-sm">
                                 <h6><div class="btn-group">
                                     <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                         <i class="fas fa-equals"></i>
                                     </button>
                                 </div>Camas disponibles:</h6>
                             </div>
                             <div class="col-sm">
                                 <h6 style="margin-top: 7px" class="text-center" id="OBS-D"></h6>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>-->
        </div>

        <div class="row center" style="margin-top: 20px; margin-bottom: 20px;">
            <!--<div class="col-sm" style="margin-left: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 class="text-center" style="margin-top: 5px" onclick="MostrarDatos(19)">Hemodialisis</h5>
                    </div>
                    <div class="card-body">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                    <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                        <i class="fas fa-procedures"></i>
                                    </button>
                                </div>Total de camas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="HEMO-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                    <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                        <i class="fas fa-user-minus"></i>
                                    </button>
                                </div>Camas ocupadas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="HEMO-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                    <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                        <i class="fas fa-equals"></i>
                                    </button>
                                </div>Camas disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="HEMO-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>


        <div class="row center" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-sm" style="margin-left: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 class="text-center" style="margin-top: 5px" ondblclick="MostrarDatos(14)">Intensivo 4 Neo/Pediátrico</h5>
                    </div>
                    <div class="card-body">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-procedures"></i>
                                        </button>
                                    </div>Total de camas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UN-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-user-minus"></i>
                                        </button>
                                    </div>Camas ocupadas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UN-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-equals"></i>
                                        </button>
                                    </div>Camas disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="UN-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-sm" style="margin-left: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 class="text-center" style="margin-top: 5px" onclick="MostrarDatos(22)">Pediatría</h5>
                    </div>
                    <div class="card-body">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                    <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                        <i class="fas fa-procedures"></i>
                                    </button>
                                </div>Total de camas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="PEDIA-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                    <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                        <i class="fas fa-user-minus"></i>
                                    </button>
                                </div>Camas ocupadas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="PEDIA-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                    <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                        <i class="fas fa-equals"></i>
                                    </button>
                                </div>Camas disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="PEDIA-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="col-sm" style="margin-left: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 class="text-center" style="margin-top: 5px" ondblclick="MostrarDatos(15)">Transición previo egreso madres</h5>
                    </div>
                    <div class="card-body">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-procedures"></i>
                                        </button>
                                    </div>Total de camas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="MAT-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-user-minus"></i>
                                        </button>
                                    </div>Camas ocupadas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="MAT-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-equals"></i>
                                        </button>
                                    </div>Camas disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="MAT-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row center" style="margin-top: 20px; margin-bottom: 20px;">

        </div>

        <div class="row">
            <div class="col-sm">
                <table id="TblPaciente" class="table table-hover text-center table-striped" style="text-align-all: center ">
                    <thead class="rgba-stylish-strong text-white text-center">
                    <tr>
                        <th><h5>Ventiladores</h5></th>
                    </tr>
                    </thead>
                    <tbody id="tbodyServicios">

                    </tbody>
                </table>
            </div>
        </div>

        <div class="row center" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-sm" style="margin-right: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 style="margin-top: 5px" class="text-center" ondblclick="MostrarDatosVentilador(1)">Ventiladores</h5>
                    </div>
                    <div class="card-body" style="text-align-all: center">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-fan"></i>
                                        </button>
                                    </div>Total de ventiladores:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="VENT-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-user-minus"></i>
                                        </button>
                                    </div>Ventiladores ocupados:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="VENT-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-equals"></i>
                                        </button>
                                    </div>Ventiladores disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="VENT-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm" style="margin-right: 2px">
                <div class="card stylish-color text-white">
                    <div class="card-header-pills w-100">
                        <h5 style="margin-top: 5px" class="text-center" ondblclick="MostrarDatosVentilador(2)">Escasafandra</h5>
                    </div>
                    <div class="card-body" style="text-align-all: center">
                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-fan"></i>
                                        </button>
                                    </div>Total de Escafandras:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="ESC-T"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-user-minus"></i>
                                        </button>
                                    </div>Escafandras ocupadas:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="ESC-O"></h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 15px">
                            <div class="col-sm">
                                <h6><div class="btn-group">
                                        <button type="button" class="btn btn-green btn-circle " style="margin-right: 10px">
                                            <i class="fas fa-equals"></i>
                                        </button>
                                    </div>Escafandras disponibles:</h6>
                            </div>
                            <div class="col-sm">
                                <h6 style="margin-top: 7px" class="text-center" id="ESC-D"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Modal reporte -->
<div class="modal" id="modalReporteServicio" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h3 class="modal-title w-100 font-weight-bold">Mostrar Datos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modalReporteServicio').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <input id="inputServicio" type="text" hidden>
                <table id="TblPaciente" class="table table-hover text-center table-striped" style="text-align-all: center ">
                    <thead class="stylish-color text-white text-center">
                    <tr>
                        <th>Registro médico</th>
                        <th width="30%">Nombre</th>
                        <th >Edad</th>
                        <th >Tipo Ventilador</th>
                        <th >Modo Ventilacion</th>
                    </tr>
                    </thead>
                    <tbody id="tbodyEvEncamamiento"></tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" type="button" onclick="abrImpresionReporte('cama');"><i class="fas fa-print" id="btnImp1"></i>Imprimir</button>
            </div>

        </div>
    </div>
</div>



<!--Modal reporte ventilador -->
<div class="modal" id="modalReporteVentilador" tabindex="-1" role="dialog" aria-labelledby="modalLabelDatosPaciente" aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white blue-gradient">
                <h3 class="modal-title w-100 font-weight-bold">Mostrar Datos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modalReporteVentilador').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <input id="inputServicioVen" type="text" hidden>
                <table id="TblPaciente" class="table table-hover text-center table-striped" style="text-align-all: center ">
                    <thead class="stylish-color text-white text-center">
                    <tr>
                        <th>Registro médico</th>
                        <th width="30%">Nombre</th>
                        <th >Modo Ventilacion</th>

                    </tr>
                    </thead>
                    <tbody id="tbodyVentilador"></tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" type="button" onclick="abrImpresionReporte('ventilador')"><i class="fas fa-print" id="btnImp2"></i>Imprimir</button>
            </div>

        </div>
    </div>
</div>




<script src="./js/js_AdRepServicios.js"></script>
