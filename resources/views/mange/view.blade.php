@extends('layouts.app')

@section('content')
    <div class="container">
    <table style="width:100%" class=".table-hover">
        <tr>
            <th>Title</th>
        </tr>
        @foreach($articles as $article)
        <tr>
            <td><a href={{"/read/".$article->id}}> {{$article->title}}</a> </td>
        </tr>
            @endforeach
        <tr>
            <td><a href=/add>Add Article</a> </td>
        </tr>

    </table>
    </div>
@endsection
