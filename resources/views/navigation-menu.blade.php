<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
     crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    <title>Espaço dos Bichinhos</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <div class="container">

            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Espaço dos Bichinhos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
                aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                
                
                    <form method="POST"  class="d-flex ms-auto my-3 my-lg-0" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Sair') }}
                        </x-jet-dropdown-link>
                    </form>
                    <ul class="navbar-nav">
                    
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            
                        @else
                            <span class="inline-flex rounded-md">
                              
                                    {{ Auth::user()->name }}

                                    
                                
                            </span>
                        @endif
                    </ul>
                    
              
            </div>
                
                
            
        </div>
    </nav>
    <!--sidebar-->
    <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-black bg-light">
                        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-black text-decoration-none">
                        <a href="#" class="navbar-brand">
                         </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item"> <a href="/" class="nav-link active" aria-current="page"> <i
                                class="fa fa-home"></i><span class="ms-2">Início</span> </a> </li>
                        
                        <li> <a href="{{route('client.create')}}" class="nav-link text-black"> <i class="fa fa-first-order"></i><span
                                class="ms-2">Cadastrar Clientes</span> </a> </li>
                                <li> <a href="{{route('client.index')}}" class="nav-link text-black"> <i class="fa fa-first-order"></i><span
                                    class="ms-2">Todos os Clientes</span> </a> </li>
                        <li> <a href="{{ route('breed.index')}}" class="nav-link text-black"> <i class="fa fa-cog"></i><span
                                class="ms-2">Bichinhos</span> </a> </li>
                        <li> <a href="{{ route('breed.create') }}"  class="nav-link text-black"> <i class="fa fa-bookmark"></i><span
                                class="ms-2">Cadastrar cachorro/gato</span> </a> </li>
                        </ul>
                     
                    </div>
                </div>
            <div class="col-lg-8 col-sm-12">
                <div class="container">
                    <div class="classe">
                        <section class="content">
                            @yield('content')
                        </section>
                    </div>
                   
                    

                   
                </div>
            </div>
        </div>
    </div>









</body>

</html>
