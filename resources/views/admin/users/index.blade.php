@extends('admin.template.main')

@section('title', 'Lista de administradores')

@section('content')
    <br>
    <ul class="collection">
        @foreach($users as $user)
            <li class="collection-item avatar">
                <img src="{{ asset('images/user.jpg') }}" alt="" class="circle">
                <span class="title">{{ $user->name }}</span>
                <p>{{ $user->email }} <br></p>
                <br>
                <a href="{{ route('admin.users.edit', $user->id) }}" class="waves-effect waves-light btn"><i class="material-icons left">mode_edit</i>Editar</a>
                <a href="{{ route('admin.users.destroy', $user->id) }}"
                   onclick="return confirm('¿Seguro que desea eliminar la cuenta?')"
                   class="waves-effect waves-light btn"><i class="material-icons left">delete</i>Borrar</a>
            </li>
        @endforeach
    </ul>

    <div class="center-align">
        {!! (new Landish\Pagination\Materialize($users))->render() !!}
    </div>

@endsection