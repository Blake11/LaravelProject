@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-md-5 mb-md-2">News Feed</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <!--Post-->
            <div class="jumbotron">

                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2>{{$post->title}}</h2>
                        <h3>{{$post->author}}</h3>
                        <p>{{$post->description}}</p>
                    </div>
                    <div style="padding-top: 1%" class="col-lg-6">
                        <a class="btn btn-success" href="#">Agree</a>
                        <a class="btn btn-danger" href="#">Disagree</a>
                        <a class="btn btn-primary" href="#">Comment</a>
                        <a class="btn brn-primary" href ='/posts/{{$post->id}}/edit'>Edit</a>
                    </div>
                    @if(count($comments) > 0)
                        @foreach($comments as $comment)
                            <div style="padding-top: 1%" class="col-lg-6">
                                <h4>{{$comment->author}}</h4>
                                <p>{{$comment->desciption}}</p>
                                <small>{{$comment->created_at}}</small>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h3>No Posts</h3>
    @endif
@endsection