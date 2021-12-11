@extends('navigation-menu')

@section('content')
<h2 class="text-center mb-3">Espaço dos bichinhos - Editar</h2>
    <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-sm">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('breed.update', $breeds->id) }}">
                @method('PUT')
                @csrf
                <div clss="mb-3">
                    <label for="name">Nome:</label> <br>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ $breeds->name }}">
                </div> 
                <div clss="mb-3">
                    <label for="name">Dono do animal:</label> <br>
                    <input type="text" class="form-control" id="clients_id" name="clients_id" required value="{{ $breeds->clients_id }}">
                </div>
                 
                <div class="mb-3">
                    <label for="type">Tipo:</label> <br>
                    <input type="text" class="form-control" name="type" id="type"
                    value="{{ $breeds->type}}">
                </div>
               
                <div class="mb-3">
                    <label for="race">Raça:</label> <br>
                    <input type="text" class="form-control" name="race" id="race"
                    value="{{ $breeds->race }}">
                </div>
                <div class="mb-3">
                    <label for="size">Tamanho:</label> <br>
                    <input type="text" class="form-control" name="size" id="size"
                    value="{{ $breeds->size }}">
                </div>
                <div class="mb-3">
                    <label for="genre">Gênero:</label> <br>
                    <input type="text" class="form-control" name="genre" id="genre"
                    value="{{ $breeds->genre }}">
                </div>
               
                
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    @endsection
                    
                      
                  
               

            
                
                
                
       
                


