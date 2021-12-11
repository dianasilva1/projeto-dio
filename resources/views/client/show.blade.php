@extends('navigation-menu')

@section('content')
    
<h2>Visualizando dados do cliente</h2>
<p><strong>ID:</strong> {{ $client->id }} </p>
<p><strong>Nome:</strong> {{ $client->name }} </p>
<p><strong>Cpf:</strong> {{ $client->cpf}} </p>


@endsection