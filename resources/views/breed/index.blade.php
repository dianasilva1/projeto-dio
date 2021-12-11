@extends('navigation-menu')


@section('content')

    <h2 class="text-center mb-3">Espaço dos Bichinhos - Lista dos Pets</h2>
    <hr>

    @if ($breeds)

        <table class="table caption-top">
            
            <thead>
                <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome  do Bichinho</th>
                <th scope="col">Código do dono</th>
                <th scope="col">Tipo</th>
                <th colspan="col">Raça</th>
                <th colspan="col">Tamanho</th>
                <th colspan="col">Genero</th>
                
                <th colspan="3">Comandos</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($breeds as $b)
            
                <tr>
                    <td>{{ $b->id }}</td>
                    <td> {{ $b->name }} </td>
                   <td>{{$b->clients_id}}</td>
                    <td> {{ $b->type }} </td>
                    <td> {{ $b->race }} </td>
                    <td> {{ $b->size }} </td>
                    <td> {{ $b->genre }} </td>
                    
                    
                    <td> <a class="btn btn-info" href="{{ route('breed.show', $b->id) }}"><i class="bi bi-bookmark-star"></i></a></td>
                    <td> <a class="btn btn-secondary" href="{{ route('breed.edit', $b->id) }}"><i class="bi bi-pencil-square"></i></a></td>
                       
        
                    <td>
                    <form action="{{ route('breed.destroy', $b->id) }}" method="post">
                       
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn" value="Excluir"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>
            </tbody>
           
            @endforeach
           
        </table>
        
        
        @empty($breeds)
        <h5>Não há  cadastros!</h5>
    @endempty
    @endif
    <div>
        {{$breeds->links()}}
    </div>
@endsection

