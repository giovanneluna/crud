@extends('layouts.app')

@section('content')
<h1>Usúarios cadastrados no Sistema

</h1>

<ul>
@foreach ($users as $user)
    <li>

       Nome:{{ $user->name }}
       <br>
       NomeDoUsuario:{{ $user->username }}<br>
       Email:{{ $user->email }}<br>
       CPF:{{ $user->cpf }}<br>
       Idade:{{ $user->age }}<br>
        <button>
        <a href="{{route('users.edit', $user->id)}}">Editar Usuario.</a></button>
        <form action="{{route ('users.destroy',$user->id) }}" method="post">
            @method('DELETE')
                @csrf
                <button type="submit">Deletar</button>
            </form>
    </li>

</ul>
@endforeach
