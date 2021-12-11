@extends('navigation-menu')
@section('content')
    <h2 class="text-center mb-3"> Cadastrar clientes</h2>
    <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-sm">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('client.store') }}">
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
                    <label for="cpf">Cpf:</label> <br>
                    <input type="text" class="form-control" name="cpf" id="cpf"
                        value="{{ old('cpf') }}">
                    @error('cpf')
                        <div style="color: red"> {{ $message }} </div>
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
