@extends('navigation-menu')
@section('content')
<h1> Bem-vindo {{ Auth::user()->name}}</>
@endsection
    