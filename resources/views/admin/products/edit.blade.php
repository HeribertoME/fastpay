@extends('admin.template.main')
@section('title', 'Productos')
@section('content')
    <br>
    <div class="row">
        {!! Form::open(['route' => ['admin.products.update', $product], 'method' => 'PUT', 'files' => 'true']) !!}

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('cve_producto', $product->cve_producto,['class' => 'validate', 'required']) !!}
                {!! Form::label('cve_producto', 'Codigo') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {!! Form::text('nombre',$product->nombre, ['class' => 'validate', 'placeholder' => 'Producto', 'required']) !!}
                {!! Form::label('nombre', 'Nombre del producto') !!}
            </div>
            <div class="input-field col s6">
                {!! Form::text('precio', $product->precio,['class' => 'validate']) !!}
                {!! Form::label('precio', 'Precio') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('marca', $product->marca,['class' => 'validate']) !!}
                {!! Form::label('marca', 'Marca') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('contenido_neto', $product->contenido_neto,['class' => 'validate']) !!}
                {!! Form::label('contenido_neto', 'Contenido neto') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('categoria', $product->categoria,['class' => 'validate']) !!}
                {!! Form::label('categoria', 'Categoria') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <img class="materialboxed" data-caption="A picture of some deer and tons of trees"
                     width="50"
                     src="{{asset('images/products/dog.png')}}">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Imagen</span>
                        {!! Form::file('imagen') !!}
                    </div>
                    <div class="file-path-wrapper">
                        {!! Form::text('imagen', null,['class' => 'file-path validate']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::label('caducidad', 'Caducidad', ['class' => '']) !!}
                <br>
                {!! Form::date('caducidad', $product->caducidad, ['class' => 'datepicker', 'required']) !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('descripcion',$product->descripcion, ['class' => 'materialize-textarea', 'id' => 'textarea1',
                'length' => 100]) !!}
                {!! Form::label('descripcion', 'Descripción') !!}
            </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="action">Editar
            <i class="material-icons right">edit</i>
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