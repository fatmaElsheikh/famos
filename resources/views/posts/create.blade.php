@extends('layouts.master')

@section('content')
@include('includes.mesages')

<h1 class="text-center">{{$title}}</h1>
<div class="create ">
    <form method="POST" action="/posts">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Subject</label>
            <input class="form-control" type="text" placeholder="" name="title">
        </div>        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
        </div>
        <div class="form-group">
                <label for="coverImage">Upload Image</label>
                <input type="file" class="form-control-file" id="coverImage" name="coverImage">
              </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>    
@endsection