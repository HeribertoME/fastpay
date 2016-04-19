@extends('admin.template.main')
@section('title', 'Editar gerente')

@section('content')

    <br>
    <div class="row">
        {!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT', 'files' => 'true']) !!}

        <div class="row">
            <div class="input-field col s6">
                {!! Form::text('name',$user->name, ['class' => 'validate', 'placeholder' => 'Nombre', 'required']) !!}
                {!! Form::label('name', 'Nombre') !!}
            </div>

        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('email', 'Correo electronico') !!}
                {!! Form::email('email', $user->email, ['class' => 'validate', 'placeholder' => 'example@mail.com', 'required']) !!}
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

        <button class="btn waves-effect waves-light" type="submit" name="action">Editar
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