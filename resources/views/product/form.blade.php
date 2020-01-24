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
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form class="form" action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Titel</label>
            <input type="text" class="form-control" name="title" />
        </div>
        <div class="form-group">
            <label for="">Omschrijving</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="">Prijs</label>
            <input type="text" class="form-control" name="price" />
        </div>
        <div class="form-group">
            <label for="">Publicatiedatum</label>
            <input type="date" class="form-control" name="pub_date" />
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </div>
    </form>
    <div class="space_min"></div>
@endsection


