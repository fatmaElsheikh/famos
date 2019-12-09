@extends('layouts.master')

@section('title')
  {{$title}}
@endsection

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-9">
              @foreach ($posts as $post)
                <div class="card mt-3 text-center">
                  
                  <div class="card-header">
                    {{$post->title}}
                  </div>
                  <img src="{{asset('storage/coverImages/'.$post->image)}}" class="card-img-top" alt="..." height="400">
                  <div class="card-body text-center">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">{{$post->body}}</p>
                    <a href="{{'/posts/'. $post->id}}" class="btn btn-primary">more</a>
                  </div>
                </div>
                @endforeach
              </div> 
          
        <div class="col-md-3">
            <div class="card mt-3">
                <div class="card-header">
                  Posts Count
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>{{$count}}</p>
                  </blockquote>
                </div>
              </div>
        </div> 
              
      </div>
  </div>  
  
  <div class="container mt-4">
        <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
            </div>
  </div>
@endsection
</body>
</html>