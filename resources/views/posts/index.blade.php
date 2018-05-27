@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-md-3 mb-md-5">News Feed</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <!--Post-->
            <div class="jumbotron">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="rounded img-fluid" src="{{$post->image_link}}" alt="image">
                    </div>
                    <div class="col-lg-6">
                        <h2>{{$post->title}}</h2>
                        <p>{!!$post->description !!}</p>
                        <small>Written by {{$post->author_id}} on {{$post->created_at}}
                        </small>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <a class="btn btn-success" href="#">Agree</a>
                        <a class="btn btn-danger" href="#">Disagree</a>
                        <a class="btn btn-primary" href="#">Comment</a>
                        <a class="btn brn-primary" href='/posts/{{$post->id}}/edit'>Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h3>No Posts</h3>
    @endif
@endsection