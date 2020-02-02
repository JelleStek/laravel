@extends('layouts.master')

@section('header')
    <div class="header">
        <div class="header--content">
            <h1>Zonnenkill.nl</h1>
            <h3>Producten</h3>
            <p>Vind alles wat u nodig heeft</p>
        </div>
    </div>
@endsection


@section('content')
    <br>
    <h1 class="midde">Latest releases</h1>
    <div class="producten--grid">
        @foreach($producten as $product)
            <a href="/producten/1">
                <div class="product">
                    <img src="{{ $product->img }}" alt="">
                    <h2>{{ $product->title }}</h2>
                    <br><h4>{{ $product->discription }}</h4><br>
                    <h4>€{{ $product->price }},-</h4>
                </div></a>
        @endforeach
    </div>
    <div class="space"></div>
@endsection

