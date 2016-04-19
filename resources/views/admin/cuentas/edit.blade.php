@extends('admin.template.main')
@section('title', 'Editar cuenta')

@section('content')

    <br>
    <div class="row">
        {!! Form::open(['route' => ['admin.cuentas.update', $cuenta], 'method' => 'PUT']) !!}

        <div class="row">
            <div class="input-field col s6">
                {!! Form::text('nombre',$cuenta->nombre, ['class' => 'validate', 'placeholder' => 'Nombre', 'required']) !!}
                {!! Form::label('nombre', 'Nombre') !!}
            </div>
            <div class="input-field col s6">
                {!! Form::text('ap_paterno', $cuenta->ap_paterno,['class' => 'validate']) !!}
                {!! Form::label('ap_paterno', 'Apellido paterno') !!}
            </div>
            <div class="input-field col s6">
                {!! Form::text('ap_materno', $cuenta->ap_materno,['class' => 'validate']) !!}
                {!! Form::label('ap_materno', 'Apellido materno') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('edad', $cuenta->edad,['class' => 'validate']) !!}
                {!! Form::label('edad', 'Edad') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('direccion', $cuenta->direccion,['class' => 'validate']) !!}
                {!! Form::label('direccion', 'Direccion') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('tel_cel', $cuenta->tel_cel,['class' => 'validate']) !!}
                {!! Form::label('tel_cel', 'Telefono celular') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('user', 'Correo electronico') !!}
                {!! Form::email('user', $cuenta->user, ['class' => 'validate', 'placeholder' => 'example@mail.com', 'required']) !!}
            </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="action">Editar
            <i class="material-icons right">edit</i>
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