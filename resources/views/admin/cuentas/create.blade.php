@extends('admin.template.main')
@section('title', 'Registrar cuenta')

@section('content')

    <br>
    <div class="row">
    {!! Form::open(['route' => 'admin.cuentas.store', 'method' => 'POST', 'files' => 'true']) !!}

        <div class="row">
            <div class="input-field col s6">
                {!! Form::text('nombre',null, ['class' => 'validate', 'placeholder' => 'Nombre', 'required']) !!}
                {!! Form::label('nombre', 'Nombre') !!}
            </div>
            <div class="input-field col s6">
                {!! Form::text('ap_paterno', null,['class' => 'validate']) !!}
                {!! Form::label('ap_paterno', 'Apellido paterno') !!}
            </div>
            <div class="input-field col s6">
                {!! Form::text('ap_materno', null,['class' => 'validate']) !!}
                {!! Form::label('ap_materno', 'Apellido materno') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('edad', null,['class' => 'validate']) !!}
                {!! Form::label('edad', 'Edad') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('direccion', null,['class' => 'validate']) !!}
                {!! Form::label('direccion', 'Direccion') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('tel_cel', null,['class' => 'validate']) !!}
                {!! Form::label('tel_cel', 'Telefono celular') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Foto</span>
                        {!! Form::file('foto') !!}
                    </div>
                    <div class="file-path-wrapper">
                        {!! Form::text('foto', null,['class' => 'file-path validate']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::password('pass', ['class' => 'validate', 'required']) !!}
                {!! Form::label('pass', 'Contraseña') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('user', 'Correo electronico') !!}
                {!! Form::email('user', null, ['class' => 'validate', 'placeholder' => 'example@mail.com', 'required']) !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::select('type', ['' => 'Seleccione tipo', 'member' => 'Miembro', 'admin' => 'Administrador'],
                null) !!}
                {!! Form::label('type', 'Tipo') !!}
            </div>
        </div>


        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
            <i class="material-icons right">send</i>
        </button>

        {!! Form::close() !!}
    </div>



@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>

@endsection