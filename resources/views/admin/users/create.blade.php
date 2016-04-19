@extends('admin.template.main')
@section('title', 'Agregar gerente')

@section('content')

    <br>
    <div class="row">
        {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'files' => 'true']) !!}

        <div class="row">
            <div class="input-field col s6">
                {!! Form::text('name',null, ['class' => 'validate', 'placeholder' => 'Nombre', 'required']) !!}
                {!! Form::label('name', 'Nombre') !!}
            </div>
            <div class="input-field col s6">
                {!! Form::text('apellido', null,['class' => 'validate']) !!}
                {!! Form::label('apellido', 'Apellido') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('email', 'Correo electronico') !!}
                {!! Form::email('email', null, ['class' => 'validate', 'placeholder' => 'example@mail.com', 'required']) !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::password('password', ['class' => 'validate', 'required']) !!}
                {!! Form::label('password', 'Contraseña') !!}
            </div>
        </div>


        <div class="row">
            <div class="input-field col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Foto</span>
                        {!! Form::file('image') !!}
                    </div>
                    <div class="file-path-wrapper">
                        {!! Form::text('image', null,['class' => 'file-path validate']) !!}
                    </div>
                </div>
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