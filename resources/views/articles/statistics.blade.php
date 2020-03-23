@extends('layouts.app')

@section('title', 'Statistics')
@section('home', 'Henrik\'s News Site')

@section('content')
    <div class='container'>
        <h1> Statisztikák </h1>
        <p>Top 10 használt címke:<br>
        </p>
        <p>Melyik cikkben van a legtöbb szó?<br>
        {{ $mostWords }}</p>
        <p>Hány karakteres cikkeket vettünk fel átlagban?<br>
        {{ $dailyAvgChars }}</p>
        <p>Naponta mennyi cikket vettünk fel?<br>
        {{ $articlesPerDay }}</p>
    </div>
@endsection
