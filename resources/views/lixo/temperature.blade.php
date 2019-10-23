@extends('layouts.app')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Estatísticas de {{ $sensor->name }}</h4>
                <form method="get" action="{ route('greenhouse.detail', $greenhouse->id) }}">
                    <div class="form-group">
                        <label for="filtro-tempo-dados">Mostrar dados de</label>
                        <select class="form-control" id="filtro-tempo-dados">
                            <option>Uma hora</option>
                            <option>12 horas</option>
                            <option>Um dia</option>
                            <option>Uma Semana</option>
                            <option>Um mês</option>
                        </select>
                    </div>
                </form>
                <div class="table-responsive">
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