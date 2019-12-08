@extends('layouts.master')
@extends('layouts.navbar')
@section('title')
  {{$title}}
@endsection

@section('content')
@foreach ($posts as $post)
  <div class="container">
      <div class="row">
          <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                      {{$post->title}}
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">{{$post->body}}</p>
                    <a href="{{'/posts/'. $post->id}}" class="btn btn-primary">more</a>
                    </div>
                  </div>
                </div>
      <div class="col-md-3">
       {{$count}}
      </div>  
              
      </div>
  </div>  
  @endforeach
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