<!DOCTYPE html>
<html>

@extends('layouts.app')

@section('title', 'Articles')
@section('home', 'Henrik\'s News Site')

@section('content')
    <div class='container'>
        @foreach ($articles as $article)
            <h1> <a href='/articles/{{ $article->id }}'> Title: {{$article->title}} </a></h1>
            <p> The article: {{$article->description}} </p>
            <p> Labels: {{$article->lables}} </p>
            <hr>
        @endforeach
    </div>
    
    @section('navi')
        <div class='container'>
            {{ $articles->links() }}
            <a href='{!! url(route('navigation')); !!}'>Home</a><br>
            <a href='{!! url(route('sortedByDate')); !!}'>Sort by date</a>
        </div>
    @endsection
    
@endsection
</html>