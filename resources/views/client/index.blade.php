@extends('navigation-menu')

@section('content')
<h2>Espaço dos Bichinhos - Lista de Clientes</h2>
    <hr>

    @if ($client)

        <table class="table caption-top">
            
            <thead>
                <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">cpf</th>
                
                <th colspan="3">Comandos</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($client as $c)
            
                <tr>
                    <td>{{ $c->id }}</td>
                    <td> {{ $c->name }} </td>
                    <td> {{ $c->cpf }} </td>
                    
                    
                    
                    <td> <a class="btn btn-info" href="{{ route('client.show', $c->id) }}"><i class="bi bi-bookmark-star"></i></a></td>
                    <td> <a class="btn btn-secondary" href="{{ route('client.edit', $c->id) }}"><i class="bi bi-pencil-square"></i></a></td>
                       
        
                    <td>
                    <form action="{{ route('client.destroy', $c->id) }}" method="post">
                       
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn" value="Excluir"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        @empty($client)
        <h5>Não há clientes cadastrados!</h5>
        @endempty
    @endif
    <div>
        {{$client->links()}}
    </div>
        
@endsection