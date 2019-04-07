@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <form class="forms-sample">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Alterar Senha</h4>
                                <div class="form-group">
                                    <label>E-mail: {{ $user->email }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Nome: {{ $user->name }}</label>
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Senha') }}</label>
                                    <input type="password" class="form-control" id="password" placeholder="Senha Nova">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password-confirm" placeholder="Confirme a senha">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Senha Antiga') }}</label>
                                    <input type="password" class="form-control" id="password" placeholder="Senha Antiga">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">{{ __('Confirmar') }}</button>
                                <a class="btn btn-light" href="{{ route('home') }}">{{ __('Cancelar') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
