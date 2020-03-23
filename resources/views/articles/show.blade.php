@extends('layouts.app')

@section('title', 'Directly asked article')
@section('home', 'Henrik\'s News Site')

@section('content')
<h1>{{$article->title}}</h1>
<p>{{$article->description}}</p>
<p>{{$article->lables}}</p>
@endsection

@section('navi')
<a href='{!! url(route('mainList')); !!}'>Back to all news</a><br>
<a href='{!! url(route('sortedByDate')); !!}'>Back to sorted news</a><br>
@endsection