@extends('admin.template.main')
@section('title', 'Administrador')
@section('content')
    <div class="row">
        <div class="col s12 m8">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Bienvenido</span>
                    <p>Hola, bienvenido al <b>Panel de Control</b>
                    Aquí encontrarás las herramientas necesarias para la administración
                    de clientes de <b>Fast Pay</b>.</p>
                    <br>
                    <p>
                        Además, puedes agregar nuevos gerentes, (o ver los gerentes existentes) quienes se pueden encargar de
                        atender a los clientes para que usen <b>Fast Pay</b>.

                    </p>
                </div>
                <div class="card-action">
                    <a href="{{ route('admin.users.create') }}">Agregar nuevo gerente (administrador)</a>
                    <a href="{{ route('admin.users.index') }}">Mostrar gerentes</a>
                </div>
            </div>
        </div>
    </div>

@endsection
