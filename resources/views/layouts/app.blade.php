<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/W.png') }}">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('walalolo.css') }}" rel="stylesheet">
    <link href="{{ asset('spinner.css') }}" rel="stylesheet">
    <link href="{{ asset('iziModal.css') }}" rel="stylesheet">
    <link href="{{ asset('dropzone.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- CDN jquery.ui(CSS) -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- CDN datatables.js(CSS) -->
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/bs4/dt-1.10.16/r-2.2.1/sc-1.4.4/datatables.min.css"/>

    <!-- CDN leaflet(CSS) -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>


</head>
<body class="bg-color">
<div id="app">
    @include('layouts.navbar')
    <div class="row">
        <div class="col-lg-2 marginTop">
            @if((Request::is('/')) || (Request::is('busqueda*')))
                {{--<button id="btnCollapseBusqueda" data-toggle="collapse" class="btn btn-dark center my-4">--}}
                    {{--Mostrar búsqueda--}}
                {{--</button>--}}

                {{--<div class="collapse multi-collapse" id="mostrarBusqueda">--}}
                        {{--@include('productos.categorias')--}}
                {{--</div>--}}
                @endif
        </div>
        <div class="col-lg-8 mt-4">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/disableButton.js') }}"></script>
<script src="{{ asset('js/collapse.js') }}"></script>


<!-- CDN jquery.ui(JS) -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- CDN datatables.js(JS) -->
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4-4.0.0/dt-1.10.16/af-2.2.2/b-1.5.1/cr-1.4.1/r-2.2.1/sc-1.4.4/datatables.min.js"></script>

<!-- CDN leaflet(JS) -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>

@stack('scripts')
</body>

</html>
