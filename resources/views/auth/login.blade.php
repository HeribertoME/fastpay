<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Fast Pay | Login</title>
    <!-- CORE CSS-->
    <link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/material/css/materialize-0.97.1.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/material/css/materialize.css') }}">

    <style type="text/css">
        html,
        body {
            height: 100%;
        }
        html {
            display: table;
            margin: auto;
        }
        body {
            display: table-cell;
            vertical-align: middle;
        }
        .margin {
            margin: 0 !important;
        }
    </style>

</head>

<body class="blue lighten-4">


<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
        <form class="login-form">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="http://w3lessons.info/logo.png" alt="" class="responsive-img valign profile-image-login">
                    <p class="center login-form-text">W3lessons - Material Design Login Form</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="">perm_identity</i>
                    <input class="validate" id="email" type="email">
                    <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12  login-text">
                    <input type="checkbox" id="remember-me" />
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <a href="login.html" class="btn waves-effect waves-light col s12">Login</a>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin right-align medium-small"><a href="forgot-password.html">Forgot password?</a></p>
                </div>
            </div>

        </form>
    </div>
</div>


<!-- ================================================
  Scripts
  ================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('plugins/jquery/js/jquery-2.2.2.js') }}"></script>
<!--materialize js-->
<script src="{{ asset('plugins/material/js/materialize.min.js') }}"></script>




<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            © 2016 Fast Pay
        </div>
    </div>
</footer>
</body>

</html>