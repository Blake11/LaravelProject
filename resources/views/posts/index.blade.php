@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-md-3 mb-md-5">News Feed</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <!--Post-->
            <div class="jumbotron">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid img-rounded" src="{{Storage::url($post->image_link)}}" alt="image">
                        <hr class="mt-2"><small>Written by {{$post->user->first_name}} {{$post->user->last_name}}
                            on {{$post->created_at}}
                        </small>
                    </div>
                    <div class="col-lg-6">
                        <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                        <p>{!!$post->description !!}</p>
                    </div>
                    <div class="col-lg-6">
                        <hr>
                        @if(count($post->comments) > 0)
                            <h3>Comments</h3>
                            @foreach($post->comments->slice(0,5) as $comment)
                                <div class="media">
                                    <div class="media-left">
                                        <a href="/user/{{$comment->user->id}}">
                                            <img class="media-object img-responsive rounded-circle" src="{{Storage::url($comment->user->thumbnail)}}" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{$comment->user->first_name}} {{$comment->user->last_name}}</h4>
                                        {{$comment->description}}
                                    </div>
                                </div>
                            @endforeach
                            @if(count($post->comments) >5)
                                <p><a href="posts/{{$post->id}}">See more comments</a></p>
                            @endif
                        @endif
                    </div>
                    <div class="col-lg-6 mt-4">
                        <a class="btn btn-success" href="#">Agree</a>
                        <a class="btn btn-danger" href="#">Disagree</a>
                        <a class="btn btn-primary" href="posts/{{$post->id}}">Comment</a>
                        @if(Auth::user()->id == $post->user->id)
                            <a class="btn btn-primary" href="/posts/{{$post->id}}/edit">Edit</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h3>No Posts</h3>
    @endif
@endsection