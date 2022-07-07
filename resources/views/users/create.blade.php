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
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Email</label>
        <input name="email" type="email" class="form-control"placeholder="Email"value="{{old('email')}}">
      </div>
      <div class="form-group col-md-6">
        <label>Password</label>
        <input name="password"type="password" class="form-control"  placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label>Username</label>
      <input name="username" type="text" class="form-control"placeholder="Nome de Usuario" value="{{old('username')}}">
    </div>
    <div class="form-group">
      <label>Nome</label>
      <input name="name" type="text" class="form-control"placeholder="Nome Completo" value="{{old('name')}}">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>CPF</label>
        <input name="cpf" type="text" class="form-control"placeholder="CPF">
      </div>
      <div class="form-group col-md-4">
        <label type="text">Idade</label>
        <input name="age" class="form-control"placeholder="Idade" value="{{old('age')}}">
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>

