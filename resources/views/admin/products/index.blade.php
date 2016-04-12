@extends('admin.template.main')

@section('title', 'Lista de productos')

@section('content')
    <div class="right-align">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                {!! Form::open(['route' => 'admin.products.index', 'method' => 'GET']) !!}

                {!! Form::text('nombre', null, ['class' => 'mdl-textfield__input', 'id' => 'search']) !!}
                {!! Form::label('nombre','Buscar', ['class' => 'mdl-textfield__label']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <br>
    <a href="{{ route('admin.products.create') }}" class="waves-effect waves-light btn">Registrar nuevo producto</a>
    <br>
    <br>

    <table class="bordered">
        <thead>
        <tr>
            <th data-field="cve_producto">Codigo</th>
            <th data-field="nombre">Nombre</th>
            <th data-field="precio">Precio</th>
            <th data-field="marca">Marca</th>
            <th data-field="contenido_neto">Cont. Neto</th>
            <th data-field="categoria">Categoria</th>
            <th data-field="imagen">Imagen</th>
            <th data-field="caducidad">Caducidad</th>
            <th data-field="descripcion">Descripción</th>
            <th data-field="actions" class="center-align">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
                <tr>
                    <td>{{$product->cve_producto}}</td>
                    <td>{{$product->nombre}}</td>
                    <td>${{$product->precio}}</td>
                    <td>{{$product->marca}}</td>
                    <td>{{$product->contenido_neto}}</td>
                    <td>{{$product->categoria}}</td>
                    <td>
                        <img class="materialboxed" data-caption="A picture of some deer and tons of trees"
                             width="50"
                             src="{{asset('images/products/dog.png')}}">
                    </td>
                    <td>{{$product->caducidad}}</td>
                    <td>{{$product->descripcion}}</td>
                    <td class="center-align">
                        <a href="{{ route('admin.products.edit', $product->cve_producto)}}"
                           class="btn-floating btn-large waves-effect waves-light red">
                            <i class="material-icons">edit</i>
                        </a>
                        <a href="{{ route('admin.products.destroy', $product->cve_producto) }}"
                           onclick="return confirm('¿Seguro que desea eliminar el producto?')"
                           class="btn-floating btn-large waves-effect waves-light red">
                            <i class="material-icons">delete</i>
                        </a>
                    </td>
                </tr>
        @endforeach
        </tbody>
        </thead>
    </table>

    <div class="center-align">
        {!! (new Landish\Pagination\Materialize($products))->render() !!}
    </div>

@endsection