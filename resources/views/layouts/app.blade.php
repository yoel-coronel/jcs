<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="{{ config('app.name') }}">
    <meta name="author" content="JCS">
    <meta name="keyword" content="{{ config('app.name') }}">

    <meta name="userId" content="{{ config('app.name') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="#">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- vendor css -->
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('css/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/starlight.css')}}" rel="stylesheet">

    <livewire:styles>

</head>
<body>
    <div id="app">
        <!-- ########## START: LEFT PANEL ########## -->
        @include('layouts.navbars.sideleft')
       <!-- ########## END: LEFT PANEL ########## -->

        <!-- ########## START: HEAD PANEL ########## -->
        @include('layouts.navbars.header')
        <!-- ########## END: HEAD PANEL ########## -->

        <!-- ########## START: RIGHT PANEL ########## -->
        @include('layouts.navbars.sideright')
        <!-- ########## END: RIGHT PANEL ########## --->

        <!-- ########## START: MAIN PANEL ########## -->
        @yield('content')
        <!-- ########## END: MAIN PANEL ########## -->

<!--

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ Route::is('marcas.index')?'active':'' }}">
                            <a class="nav-link" href="{{ route('marcas.index') }}">{{ __('Marcas') }}</a>
                        </li>
                    </ul>


                    <ul class="navbar-nav ml-auto">

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
-->

    </div>


    <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/popper.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui.js') }}" defer></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.js') }}" defer></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}" defer></script>
    <script src="{{ asset('js/d3.js') }}" defer></script>
    <script src="{{ asset('js/rickshaw.min.js') }}" defer></script>
    <script src="{{ asset('js/Chart.js') }}" defer></script>
    <script src="{{ asset('js/jquery.flot.js') }}" defer></script>
    <script src="{{ asset('js/jquery.flot.pie.js') }}" defer></script>
    <script src="{{ asset('js/jquery.flot.resize.js') }}" defer></script>
    <script src="{{ asset('js/jquery.flot.spline.js') }}" defer></script>
    <script src="{{ asset('js/starlight.js') }}" defer></script>
    <script src="{{ asset('js/ResizeSensor.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>



    <livewire:scripts>
</body>
</html>
