@extends('layouts.app')

@section('title','Inicio')

@section('css')
    <!-- Datepicker CSS -->
    <link href="{{asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    
@endsection


@section('content')
    <div class="xp-contentbar">

        <!-- Start Widget -->

        <div class="row"> 


            <!-- End XP Col -->                       
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card bg-primary m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box">
                            <div class="float-left">
                                <h4 class="xp-counter text-white">{{ $employees }}</h4>
                                <p class="mb-0 text-white">Total de Empleados</p>                        
                            </div>
                            <div class="float-right">
                                <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                    <i class="mdi mdi-account-multiple font-30 text-primary"></i>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End XP Col -->

            <!-- End XP Col -->                       
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card bg-success m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box">
                            <div class="float-left">
                                <h4 class="xp-counter text-white">{{ $companies }}</h4>
                                <p class="mb-0 text-white">Total de Empresas</p>                        
                            </div>
                            <div class="float-right">
                                <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                    <i class="mdi mdi-city-variant font-30 text-success"></i>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End XP Col -->

            <!-- End XP Col -->                       
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card bg-danger m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box">
                            <div class="float-left">
                                <h4 class="xp-counter text-white">{{ $users }}</h4>
                                <p class="mb-0 text-white">Total de Usuarios</p>                        
                            </div>
                            <div class="float-right">
                                <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                    <i class="mdi mdi-account-star font-30 text-danger"></i>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End XP Col -->

        </div>

        <div class="row">
            <!-- Start XP Col -->
            <div class="col-lg-8">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div id="container">

                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Start XP Col -->
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <h5 class="card-title text-black mb-0">Calendario</h5>
                    </div>
                    <div class="card-body">
                        <div data-language="en" class="datepicker-here"></div>
                    </div>
                </div>
            </div>
            <!-- End XP Col -->
        </div>

    </div> 
    
@endsection

@section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <!-- Datepicker JS -->
    <script src="assets/plugins/datepicker/datepicker.min.js"></script>
    <script src="assets/plugins/datepicker/i18n/datepicker.en.js"></script>

    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Movimientos del Sistema'
            },
            subtitle: {
                text: 'Esta es una prueba técnica para ISI'
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: ''
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: false,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            series: [
                {
                    name: "Altas",
                    colorByPoint: true,
                    data: [
                        {
                            name: "Empleados",
                            y: <?= $employees ?>,
                            color: "#078CC5"
                        },
                        {
                            name: "Empresas",
                            y: <?= $companies ?>,
                            color: "#0DCC50"
                        },
                        {
                            name: "Usuarios",
                            y: <?= $users ?>,
                            color: "#F35F5F"
                        }
                    ]
                }
            ]
        });

    </script>
@endsection
