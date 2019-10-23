@extends('layouts.app')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Estatísticas de {{ $sensor->name }}</h4>
                <form method="get" action="{{ route('show.sensor', ['sensor_type'=>$sensor->type, 'sensor_id'=>$sensor->id]) }}">
                    @csrf
                    <div class="form-group">
                        <label for="filtroTempo">Mostrar dados de</label>
                        <select class="form-control" id="filtroTempo" name="filtroTempo" onchange="this.form.submit()">
                            <option {{ ($qtde == 12 ? 'selected':'') }} value="12">Uma hora</option>
                            <option {{ ($qtde == 144 ? 'selected':'') }} value="144">12 horas</option>
                            <option {{ ($qtde == 288 ? 'selected':'') }} value="288">Um dia</option>
                            <option {{ ($qtde == 2016 ? 'selected':'') }} value="2016">Uma Semana</option>
                            <option {{ ($qtde == 8760 ? 'selected':'') }} value="8760">Um mês</option>
                        </select>
                    </div>
                </form>
                <canvas id="sensorCanvas" width="300" height="150"></canvas>
                <div class="table-responsive mt-4">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10%">
                                id
                            </th>
                            <th style="width: 65%">
                                Leitura
                            </th>
                            <th style="width: 25%">
                                Timestamp
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leituras as $leitura)
                            <tr>
                                <td>
                                    {{ $leitura->id }}
                                </td>
                                <td>
                                    {{ $leitura->leitura }}
                                </td>
                                <td>
                                    {{ $leitura->created_at }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/statistic-data.js') }}" type="text/javascript" defer></script>

    <script defer>
        var ctx = document.getElementById('sensorCanvas');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($datas_formatadas) !!},
                datasets: [{
                    label: 'Leitura',
                    data: {!! json_encode($dados) !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        /*  'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(255, 159, 64, 0.2)'*/
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        /*     'rgba(54, 162, 235, 1)',
                             'rgba(255, 206, 86, 1)',
                             'rgba(75, 192, 192, 1)',
                             'rgba(153, 102, 255, 1)',
                             'rgba(255, 159, 64, 1)'*/
                    ],
                    borderWidth: 1,
                    fill:false
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            // maxRotation: 90,
                            minRotation: 90,
                            autoSkip: true,
                            maxTicksLimit: 24.1
                        }
                    }]
                }
            }
        });
    </script>
@endpush