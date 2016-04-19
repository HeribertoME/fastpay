@extends('admin.template.main')
@section('title', 'Agregar ofertas')
@section('content')
    <br>
    <div class="row">
        {!! Form::open(['route' => 'admin.products.store', 'method' => 'POST', 'files' => 'true']) !!}

        <div class="row">
            <div class="input-field col s12">
                {!! Form::select('products', $products, null, ['required']) !!}
                {!! Form::label('products', 'Products') !!}
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
            $('select').material_select();
        });

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });


    </script>


@endsection
@endsection