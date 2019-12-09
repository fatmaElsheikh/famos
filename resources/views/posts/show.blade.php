@extends('layouts.master')
@section('content')
<div class="container ">
    <div class="card text-center single" style="width: 80%; margin:1rem auto;">
    <img src="{{asset('storage/coverImages/'.$post->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->body}}</p>
        </div>
        <div class="footer">
        <a href="{{'/posts/'.$post->id.'/edit' }}" class="btn btn-primary float-left mr-2"><i class="fas fa-edit"></i> Edit</a>
        <form action="{{route('posts.destroy',['id' => $post->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"  class="btn btn-danger">Delete</button>
        </form>
        
        </div>
    </div>
</div>



@endsection
</body>
</html>