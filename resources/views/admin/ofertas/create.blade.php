@extends('admin.template.main')
@section('title', 'Agregar ofertas')
@section('content')
    <br>
    <div class="row">
        {!! Form::open(['route' => 'admin.products.store', 'method' => 'POST', 'files' => 'true']) !!}

        <div class="row">
            <div class="input-field col s6">
                {!! Form::text('name',null, ['class' => 'validate', 'placeholder' => 'Nombre de oferta', 'required']) !!}
                {!! Form::label('name', 'Nombre de oferta') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('descripcion',null, ['class' => 'materialize-textarea', 'id' => 'textarea1',
                'length' => 255]) !!}
                {!! Form::label('descripcion', 'Descripción') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {!! Form::label('start_date', 'Inicio de promoción', ['class' => '']) !!}
                <br>
                {!! Form::date('start_date', null, ['class' => 'datepicker', 'required']) !!}
            </div>

            <div class="input-field col s6">
                {!! Form::label('end_date', 'Fin de promoción', ['class' => '']) !!}
                <br>
                {!! Form::date('end_date', null, ['class' => 'datepicker', 'required']) !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::select('products[]', $products, null, ['class' => 'form-control select-tag',
            'multiple', 'required']) !!}
                {!! Form::label('product', 'Producto(s)', ['class' => '']) !!}
            </div>
        </div>



        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
            <i class="material-icons right">send</i>
        </button>

        {!! Form::close() !!}
    </div>

@section('js')
    <script>
        $(document).ready(function() {
            $('input#input_text, textarea#textarea1').characterCounter();
        });

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    </script>

@endsection
@endsection