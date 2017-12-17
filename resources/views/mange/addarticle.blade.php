@extends('layouts.app')

@section('content')
    <form class="container" method="post" action="add">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea class="form-control" id="body" name="body" placeholder="Body.." rows="8" cols="50" style="resize: none"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
