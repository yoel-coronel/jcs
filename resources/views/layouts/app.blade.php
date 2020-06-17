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

    <!-- Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- vendor css -->
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('css/starlight.css')}}" rel="stylesheet">

    <livewire:styles>

    @stack('styles')

</head>
<body>
    <div id="app">
        @auth
            <!-- ########## START: LEFT PANEL ########## -->
            @include('layouts.navbars.sideleft')
           <!-- ########## END: LEFT PANEL ########## -->

            <!-- ########## START: HEAD PANEL ########## -->
            @include('layouts.navbars.header')
            <!-- ########## END: HEAD PANEL ########## -->

            <!-- ########## START: RIGHT PANEL ########## -->
            @include('layouts.navbars.sideright')
            <!-- ########## END: RIGHT PANEL ########## --->

            <div class="sl-mainpanel">

                @yield('content')

                @include('layouts.footer.footer')

            </div><!-- sl-mainpanel -->
        @else

             @yield('content')

        @endauth
        <!-- ########## START: MAIN PANEL ########## -->

        <!-- ########## END: MAIN PANEL ########## -->
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery-ui.js') }}" defer></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.js') }}" ></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}" ></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}" ></script>
    <script src="{{ asset('js/starlight.js') }}" ></script>
    <script src="{{ asset('js/ResizeSensor.js') }}" ></script>

    @stack('scripts')

    <livewire:scripts>

</body>
</html>
