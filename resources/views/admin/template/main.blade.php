<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Default') | Dashboard</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">
    <!-- TODO -->
    <link rel="shortcut icon" href="images/fastpay.png">

    <link href="{{ asset('css/personal.css') }}">
    <link href="{{ asset('plugins/material/css/') }}">
    <link href="{{ asset('fonts/fonts.css')}}" rel="stylesheet">
    <link href="{{ asset('fonts/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/material/css/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/material/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/material/css/styles.css') }}">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    @include('admin.template.partials.header')
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        @include('admin.template.partials.userheader')

        @include('admin.template.partials.nav')
    </div>
    <main class="mdl-layout__content mdl-color--grey-100">
        @include('admin.template.partials.errors')
        @yield('content')

    </main>
</div>

<script src="{{ asset('plugins/jquery/js/jquery-2.2.2.js') }}"></script>
<script src="{{ asset('plugins/material/js/material.min.js') }}"></script>
<script src="{{ asset('plugins/material/js/materialize.min.js') }}"></script>
@yield('js')
</body>
</html>
