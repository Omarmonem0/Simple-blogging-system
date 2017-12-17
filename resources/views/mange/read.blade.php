@extends('layouts.app')

@section('content')
    <div class="form-group container">
        <label for="exampleInputEmail1">{{$articles->title}}</label>
        <div> {{$articles->body}}" </div>
    </div>
    <br>
    <div class="container">
        <table style="width:100%" class=".table-hover">
            <tr>
                <th>Comments</th>
            </tr>
            @foreach($articles->comments as $c)
                <tr>
                    <td>{{$c->body}} </td>
                </tr>
            @endforeach
        </table>
    </div>
    <form class="container" method="post" action="/read/{{$articles->id}}">
        {{csrf_field()}}
        <div class="form-group">

            <input type="text" class="form-control" id="title" name="body" aria-describedby="emailHelp" placeholder="Comment..">
        </div>

        <button type="submit" class="btn btn-primary">Add Comment</button>
    </form>
@endsection
