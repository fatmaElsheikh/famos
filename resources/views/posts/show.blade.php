@extends('layouts.master')
@extends('layouts.navbar')
@section('content')
{{$post->title}}
{{$post->body}}
@endsection
</body>
</html>