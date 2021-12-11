@extends('navigation-menu')

@section('content')
    
<h1>Visualizando dados do cachorro ou gato</h1>
<p><strong>ID:</strong> {{ $breeds->id }} </p>
<p><strong>Nome:</strong> {{ $breeds->name }} </p>
<p><strong>Dono(a) do animal:</strong> {{ $client['name']}}
<p><strong>Tipo:</strong> {{ $breeds->type}} </p>
<p><strong>Tamanho:</strong> {{ $breeds->size }} </p>
<p><strong>Gênero:</strong> {{ $breeds->genre }} </p>
<p><strong>Raça:</strong> {{ $breeds->race }} </p>



@endsection