@if(Auth::user())
<header class="demo-drawer-header">
    <img src="{{ asset('images/user.jpg') }}" class="demo-avatar">
    <div class="demo-avatar-dropdown">
        <span>{{ Auth::user()->name }}</span>
        <div class="mdl-layout-spacer"></div>
        <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">arrow_drop_down</i>
            <span class="visuallyhidden">Accounts</span>
        </button>
        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
            <a href="{{ route('admin.auth.logout') }}"><li class="mdl-menu__item">Salir</li></a>
        </ul>
    </div>
</header>
@endif