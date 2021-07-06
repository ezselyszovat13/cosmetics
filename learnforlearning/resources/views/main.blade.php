@extends('layouts.app')

@section('title', 'Kezdőlap')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <p class="display-4 col-xs-12">Üdvözöllek!</p>
            <p class="lead">Kozmetikai időpontfoglaló rendszer</p>
            <hr class="my-4">
            <a class="btn btn-secondary btn-lg" href="{{route('appointments')}}" role="button">Időpontfoglalás</a>
        </div>
    </div>
@endsection
