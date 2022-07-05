@extends('layouts.app')

@section('title','Novo Cliente')

@section('content')
<h1>Cadastro do Cliente</h1>

<form action="{{route('users.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome:">
    <input type="text" name="email" placeholder="Email:">
    <input type="text" name="username" placeholder="Nome de Usuario:">
    <input type="text" name="password" placeholder="Senha:">
    <input type="text" name="cpf" placeholder="CPF:">
<button type="submit">Enviar</button>
</form>

