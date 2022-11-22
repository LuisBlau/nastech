<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Nascenec Technologies LLC" />
    <meta name="description" content="Cutting edge of technology solutions">
    <link rel="icon" type="image/png" href="{{ url('/media/logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Nascence Technologies</title>
    <!-- Stylesheets & Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/plugins.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
    @stack('styles')
    {!! htmlScriptTagJsApi() !!}
</head>

<body>

    <!-- Body Inner -->
    <div class="body-inner">

        <!-- Header -->
        @include('common.header')
        <!-- end: Header -->

        @yield('content')

        <!-- Footer -->
        @include('common.footer')
        <!-- end: Footer -->

    </div>
    <!-- end: Body Inner -->

    @stack('modal')

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/plugins.js') }}"></script>

    <!--Template functions-->
    <script src="{{ url('/js/functions.js') }}"></script>

    <!--Particles-->
    <script src="{{ url('/plugins/particles/particles.js') }}"></script>
    <script src="{{ url('/plugins/particles/particles-dots.js') }}"></script>

    @stack('scripts')
</body>

</html>
