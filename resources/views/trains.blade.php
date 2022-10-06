@extends('layouts.default')

@section('title', 'Trains')

@section('css')
    <link rel="stylesheet" href="{{asset('css/trains.css')}}">
@endsection

@section('content')
    <section id="hero">
        <div class="container">
            <h1>Trains</h1>
        </div>        
    </section>
    <section id="trains-section">
        <div class="container">
            <ul class="trains">
                @foreach($trains as $train)
                    @include('components.train_row')
                @endforeach
            </ul>
        </div>
    </section>
@endsection