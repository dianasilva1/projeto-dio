@extends('navigation-menu')

@section('content')
<h2 class="text-center mb-3">Espaço dos bichinhos - Editar clientes</h2>
    <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-sm">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('client.update', $client->id) }}">
                @method('PUT')
                @csrf
                <div clss="mb-3">
                    <label for="name">Nome:</label> <br>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ $client->name }}">
                </div> 
                <div class="mb-3">
                    <label for="cpf">Cpf:</label> <br>
                    <input type="text" class="form-control" name="cpf" id="cpf"
                    value="{{ $client->cpf }}">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    
    @endsection
                    
                      
                  
               

            
                
                
                
       
                


