@extends('layouts.master')

@section('header')
    <h1>Webshop - Laravel</h1>
    <h3>Home pagina</h3>
@endsection

@section('nav')
    <ul>
        <li><a href="/" class="active">Home</a></li>
        <li><a href="{{route('producten')}}">Producten</a></li>
    </ul>
@endsection

@section('content')
    home
@endsection
