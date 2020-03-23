@extends('layouts.app')

@section('title', 'News Upload')
@section('home', 'Henrik\'s News Site')

@section('content')
        <div class="container">
            <h2>Add new article</h2>

            <form action="/articles/store" method="post">
                <table>
                <tr>
                    {{ csrf_field() }}
                    <td>Title:</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Article text:</td>
                    <td><textarea type="text" name="description"></textarea></td>
                </tr>
                <tr>
                    <td>Labels:</td>
                    <td><input type="text" name="lables"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
                </table>
            </form>
        </div>
@endsection