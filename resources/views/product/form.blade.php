@extends('layouts.master')

@section('header')
    <div class="header">
        <div class="header--content">
            <h1>Webshop - Laravel</h1>
            <h3>Producten</h3>
            <p>Voeg nieuwe producten toe aan de webshop.</p>
        </div>
    </div>
@endsection



@section('content')

    <div class="form_error">
        @if ($errors->any())
            <p>Er zijn fouten, Probeer deze te verbeteren.</p>
        @endif
    </div>

    <form class="form" action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
            @error('title')
            <div class="error-message">
                {{ $message }}
            </div>
            @enderror
            <label for="">Titel</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
        </div>
        <div class="form-group">
            @error('description')
            <div class="error-message">
                {{ $message }}
            </div>
            @enderror
            <label for="">Omschrijving</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            @error('price')
            <div class="error-message">
                {{ $message }}
            </div>
            @enderror
            <label for="">Prijs</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" />
        </div>
        <div class="form-group">
            @error('pub_date')
            <div class="error-message">
                {{ $message }}
            </div>
            @enderror
            <label for="">Publicatiedatum</label>
            <input type="date" class="form-control @error('pub_date') is-invalid @enderror" name="pub_date" value="{{ old('pub_date') }}"  />
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </div>
    </form>
    <div class="space_min"></div>
@endsection


