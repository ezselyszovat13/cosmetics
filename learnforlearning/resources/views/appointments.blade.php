@extends('layouts.app')

@section('title', 'Elérhető időpontok')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <p class="display-4 col-xs-12">Elérhető időpontok listája</p>
            <hr class="my-4">
            <div class="container">
                <div class="row" id="subject_container">
                    @foreach ($dates as $date)
                        <div class="mb-2">
                            <div class="card">
                                <p class="card-header">
                                    <span style="font-size: 1.3rem;font-weight:bold"> {{ $date }} </span>
                                </p>
                                <div class="card-body">
                                    KATTINTS
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
