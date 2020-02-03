@extends('layouts.master')

@section('header')
    <div class="header">
        <div class="header--content">
            <h1>Zonnenkill.nl</h1>
            <h3>Dior Homme</h3>
            <p>Zonnebril BLACKTIE2.0S K</p>
        </div>
    </div>
@endsection

@foreach($producten as $product)
    @section('content');
    <div class="main">
        <img src="{{ $product->img }}" alt="">
        <img src="{{ $product->img }}" alt="">
        <img src="{{ $product->img }}" alt="">
    </div>
    <div class="price">
        <h1>{{ $product->title }}</h1>
        <h2>{{ $product->discription }}</h2>
        <br>
        <h2>€{{ $product->price }},-</h2><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dicta distinctio doloribus eius, eos eveniet explicabo incidunt iusto magni minima necessitatibus nisi nulla odio officia omnis quos recusandae voluptatem?</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam libero magnam nam necessitatibus, neque sunt ut. Excepturi, harum inventore. Dicta dolorum exercitationem molestiae nemo nisi nostrum obcaecati quibusdam sequi sunt?Lorem ipsum dolor sit amet, consectetur adipisicing elit. At atque consectetur, distinctio earum exercitationem fugiat iusto nam neque nihil nostrum, nulla obcaecati quae quas rerum voluptatum! Dicta eligendi modi soluta.</p>
        <br>
        <button>Bestel</button>
    </div>
    <div class="space"></div>
    @endsection
@endforeach
