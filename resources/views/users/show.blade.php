@extends('layouts.app')

@section('content')
    

<h1>Perfil de ({{ $user->name  }})</h1>

<button>Alterar senha</button>
<button>Alterar email</button>
<button>Alterar username</button>
@endsection