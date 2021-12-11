@extends('navigation-menu')
@section('content')
    <h2 class="text-center mb-3">Espaço dos bichinhos - Cadastro</h2>
    <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-sm">
    <div class="card">
        <div class="card-body">
            <form   method="POST" action="{{ route('breed.store') }}">
                
                @method('POST')
                @csrf
                <div clss="mb-3">
                    <label for="name">Nome:</label> <br>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div style="color:red">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="clients_id">Dono do Animal:</label>
                   
                    <select class="form-select" id="clients_id" name="clients_id">
                        <option selected>Selecione</option>
                        @foreach($clients as $client)
                        <option value="{{ $client->id}}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                    
                    
                </div>
                <div clss="mb-3">
                    <label for="type">Tipo do Bichinho:(gato ou cachorro)</label> <br>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                    @error('type')
                        <div style="color:red">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="race">Raça</label> <br>
                    <input type="text" class="form-control" name="race" id="race" value="{{ old('race') }}">
                    @error('race')
                        <div style="color: red"> {{ $message }} </div>
                    @enderror
                </div>
                <div clss="mb-3">
                    <label for="size">Tamanho:</label> <br>
                    <input type="text" class="form-control" id="size" name="size" value="{{ old('size') }}">
                    @error('size')
                        <div style="color:red">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="genre">Gênero:</label> <br>
                    <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}">
                    @error('genre')
                        <div style="color:red">{{ $message }}</div>
                    @enderror

                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="reset" class="btn btn-warning">limpar</button>
            </form>
        </div>
    </div>
    </div>
    </div>

@endsection
                
                


               
