@extends('layouts.app')

@section('content')

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="col-form-label">{{ __('E-Mail') }}</label>

                                    <div class="input-group">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary submit-btn btn-block">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                <div class="form-group d-flex justify-content-between">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked> Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                                </div>

                            </form>
                        </div>
                        <ul class="auth-footer">
                            <li>
                                <a href="#">Conditions</a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                        </ul>
                        <p class="footer-text text-center">Copyright © 2019 Daniel Wenzel. All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

@endsection
