@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
    <br>
    <a href="{{ route('admin.cuentas.create') }}" class="waves-effect waves-light btn">Registrar nueva cuenta</a>
    <ul class="collection">
    @foreach($cuentas as $cuenta)
        <li class="collection-item avatar">
            <img src="{{ asset('images/user.jpg') }}" alt="" class="circle">
            <span class="title">{{ $cuenta->nombre . " " . $cuenta->ap_paterno . " " . $cuenta->ap_materno }}</span>
            <p>{{ $cuenta->user }} <br>
                @if($cuenta->type == "admin")
                    <span class="card-panel red lighten-2 chip">{{ $cuenta->type }}</span>
                @else
                    <span class="card-panel blue lighten-3 chip">{{ $cuenta->type }}</span>
                @endif
            </p>
            <br>
            <a href="{{ route('admin.cuentas.edit', $cuenta->cve_cuenta) }}" class="waves-effect waves-light btn"><i class="material-icons left">mode_edit</i>Editar</a>
            <a href="{{ route('admin.cuentas.destroy', $cuenta->cve_cuenta) }}"
               onclick="return confirm('¿Seguro que desea eliminar la cuenta?')"
               class="waves-effect waves-light btn"><i class="material-icons left">delete</i>Borrar</a>

        </li>
    @endforeach
    </ul>

    <div class="center-align">
        {!! (new Landish\Pagination\Materialize($cuentas))->render() !!}
    </div>

@endsection