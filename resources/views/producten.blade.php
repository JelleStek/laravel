@extends('layouts.master')

@section('header')
    <div class="header">
        <div class="header--content">
            <h1>Webshop - Laravel</h1>
            <h3>Producten</h3>
            <p>Vind alles wat u nodig heeft</p>
        </div>
    </div>
@endsection



@section('content')
    <h2>producten</h2>
    <div class="producten--grid">
        <a href=""><div class="macbook product"></div></a>
        <a href=""><div class="macbook product"></div></a>
        <a href=""><div class="macbook product"></div></a>
        <a href=""><div class="macbook product"></div></a>
        <a href=""><div class="macbook product"></div></a>
        <a href=""><div class="macbook product"></div></a>
    </div>
@endsection
