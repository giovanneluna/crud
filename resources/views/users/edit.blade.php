@extends('layouts.app')

@section('content')
    

<h1>Perfil de ({{ $user->name  }})</h1>

<form action="{{route('users.update', $user->id)}}" method="post">
    @method('PUT')
    @csrf
<p style="text-align:left;">
    Alterar Senha:
<input type="text" name="password" placeholder="Nova Senha:">
<br>
Alterar Email
<input type="text" name="email" placeholder="Novo Email:" value="{{ $user->email }}">
<br>
Alterar Nome de Usuario
<input type="text" name="username" placeholder="Novo UserName:"value="{{ $user->username }}">
<br>
ALterar Nome
<input type="text" name="name" placeholder="Novo Nome:"value="{{ $user->name }}">
<br>
<button type="submit">Alterar dados</button>
    </p>
</form>

@endsection