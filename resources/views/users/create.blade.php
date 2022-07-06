@extends('layouts.app')

@section('title','Novo Cliente')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@if ($errors->any())
<ul class="errors">
@foreach ($errors->all() as $error)
            <li class="error">{{$error}}</li>
            
        </ul>
       
            
    
@endforeach
    
@endif
<h1><p style="text-align:center;">Cadastro do Cliente</h1></p>

<form action="{{route('users.store')}}" method="post">
    @csrf
    <p style="text-align:center;">
    <input type="text" name="name" placeholder="Nome:"value="{{old('name')}}">
    <br>
    <input type="text" name="email" placeholder="Email:"value="{{old('email')}}">
    <br>
    <input type="text" name="username" placeholder="Nome de Usuario:"value="{{old('username')}}">
    <br>
    <input type="text" name="password" placeholder="Senha:">
    <br>
    <input type="text" name="cpf" placeholder="CPF:">
    <br>
    <input type="text" name="age" placeholder="Idade:"value="{{old('age')}}">
    <br>
    <br>
<button type="submit">Enviar</button>
    </p>
</form>

    
