@extends('layouts.app')

@section('content')

    @foreach($sensors as $sensor)
        <div class="row">
            <div class="col-md-12 grid-margin">
                <form method="get" action="{{ route('show.sensor', ['sensor_type'=>$sensor->type, 'sensor_id'=>$sensor->id]) }}">
                    @csrf
                    <div class="card stretch-card card-statistics btn btn-inverse-success" style="cursor:pointer" onclick="this.parentNode.submit()">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="fluid-container">
                                        <h3 class="font-weight-medium text-right mb-0">{{ $sensor->name }}</h3>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <i class="mdi mdi-barley text-success icon-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection