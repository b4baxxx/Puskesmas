@extends('layout.main')

@section('title','Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>Dashboard</h2>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

            {{-- HTML  --}}
            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                    Grafik stok obat.
                </p>
            </figure>

            {{-- CSS --}}
            <style>
            .highcharts-figure,
            .highcharts-data-table table {
                min-width: 310px;
                max-width: 800px;
                margin: 1em auto;
            }

            #container {
                height: 400px;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td,
            .highcharts-data-table th,
            .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr,
            .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }
            </style>

            {{-- JavaScript --}}
            <script>
            document.addEventListener('DOMContentLoaded', function () {
                Highcharts.chart('container', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Grafik Stok Obat',
                        align: 'center'
                    },
                    subtitle: {
                        text: 'Source: Puskesmas',
                        align: 'left'
                    },
                    xAxis: {
                        categories: [
                            @foreach($data as $item)
                                '{{ $item->nama_obat }}',
                            @endforeach
                        ],
                        crosshair: true,
                        accessibility: {
                            description: 'Nama Obat'
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Stok (units)'
                        }
                    },
                    tooltip: {
                        valueSuffix: ' units'
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Stok',
                        data: [
                            @foreach($data as $item)
                                {{ $item->stok }},
                            @endforeach
                        ]
                    }]
                });
            });
            </script>
        </div>
    </div>
@endsection
