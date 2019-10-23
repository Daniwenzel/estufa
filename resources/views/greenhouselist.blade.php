@extends('layouts.app')

@section('content')
    @foreach($greenhouses as $greenhouse)
        <div class="row">
            <div class="col-md-12 grid-margin">
                <form method="get" action="{{ route('greenhouse.detail', $greenhouse->id) }}">
                    <div class="card stretch-card card-statistics btn btn-inverse-success" style="cursor:pointer; width: 100%;" onclick="this.parentNode.submit()">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <p class="mb-0 text-left">Estufa:</p>
                                    <div class="fluid-container">
                                        <h3 class="font-weight-medium text-right mb-0">{{ $greenhouse->name }}</h3>
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