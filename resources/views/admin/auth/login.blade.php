<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Login Page | Fast Pay</title>

    <!-- CORE CSS-->

    <link href=" {{ asset('plugins/login/css/materialize-login.css')}} " type="text/css" rel="stylesheet" media="screen,projection">
    <link href=" {{ asset('plugins/login/css/style_login.css') }} " type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href=" {{ asset('plugins/login/css/style-horizontal.css') }} " type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('plugins/login/css/page-center.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('plugins/login/css/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('plugins/login/css/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="light-blue lighten-1">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->



<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        {!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST', 'class' => 'login-form']) !!}
        <div class="row">
            <div class="input-field col s12 center">
                <img src="{{ asset('images/logo.png') }}" alt="" class="responsive-img valign profile-image-login">
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
                {!! Form::email('email', null, []) !!}
                {!! Form::label('email', 'Correo electronico') !!}
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m12 l12 login-text">
                <input type="checkbox" id="remember-me" />
                <label for="remember-me">Remember me</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::submit('login',['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

    </div>
</div>


<!--




    <div class="row">
        <div class="input-field col s6 m6 l6">
            <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
        </div>
    </div>
-->



<!-- ================================================
  Scripts
  ================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('plugins/jquery/js/jquery-2.2.2.js') }}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{ asset('plugins/login/js/materialize.js') }}"></script>
<!--prism-->
<script type="text/javascript" src="{{asset('plugins/login/js/prism.js')}}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{asset('plugins/login/js/perfect-scrollbar.min.js')}}"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ asset('plugins/login/js/plugins.js') }}"></script>

</body>

</html>