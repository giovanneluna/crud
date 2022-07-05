@extends('layouts.app')

@section('content')
<h1>Listagem de Usuarios
    
</h1>

<ul>
@foreach ($users as $user)
    <li>
        {{ $user->name }} - 
        {{ $user->username }} -
        {{ $user->email }} -
        {{ $user->cpf }} -
        {{ $user->age }} -
        | <a href="{{route('users.show', $user->id)}}">Ver Detalhes.</a>
    </li>

</ul>
@endforeach