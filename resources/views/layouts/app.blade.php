<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.bundle.addons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.bundle.base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">

</head>
<body>
<div id="app" class="container-scroller">
    @auth
        @include('partials._navbar')
        <div class="container-fluid page-body-wrapper">
            @include('partials._sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('partials._footer')
            </div>
        </div>
    @else
        @yield('content')
    @endauth
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/off-canvas.js') }}" defer></script>
<script src="{{ asset('js/misc.js') }}" defer></script>
<script src="{{ asset('js/paho-mqtt.js') }}" defer></script>
<script src="{{ asset('js/mqtt-client.js') }}" defer></script>

</body>
</html>
