@extends('layouts.master')
@section('content')
   <h1 class="text-center">{{$title}}</h1>
   <div class="create ">
   <form method="POST" action="{{'/posts/'.$post->id}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">Subject</label>
            <input class="form-control" type="text" value="{{$post->title}}" name="title">
            </div>        
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body" placeholder="">{{$post->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>     
@endsection