@extends('layouts.app')
@section('content')
    <!--Post-->
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid img-rounded" src="{{Storage::url($post->image_link)}}" alt="">

            </div>
            <div class="col-lg-6">
                <h2>{{$post->title}}</h2>
                <h3><a href="user/{{$post->user->id}}">{{$post->author}}</a></h3>
                <p>{!!$post->description!!}</p>
            </div>
            <div style="padding-top: 1%" class="col-lg-6">
                <a class="btn btn-success" href="#">Agree</a>
                <a class="btn btn-danger" href="#">Disagree</a>
                @if(Auth::user()->id == $post->user->id)
                    <a class="btn btn-primary" href="/posts/{{$post->id}}/edit">Edit</a>
                @endif
            </div>
            <div class="col-lg-6">
                <hr>
                <small>Written by {{$post->user->first_name}} on {{$post->created_at}}</small>
                <hr>
                <div class="mb-2">
                    Add a comment

                    {!! Form::open(['action' => 'CommentsController@store', "method" => "POST","class" =>"form-inline",'files' => 'true']) !!}
                    {{ Form::hidden("post_id", $post->id)}}
                    {{Form::text('description', '',['class' => 'form-control'])}}
                    {{Form::submit('Submit',["class" => "btn btn-primary"])}}
                    {!! Form::close() !!}
                </div>
                @if(count($post->comments) > 0)
                    @foreach($post->comments as $comment)
                        <div class="media">
                            <div class="media-left">
                                <a href="/user/{{$comment->user->id}}">
                                    <img class="media-object rounded-circle"
                                         src="{{Storage::url($comment->user->thumbnail)}}"
                                         alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{$comment->user->first_name}} {{$comment->user->last_name}}</h4>
                                {{$comment->description}}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>


        </div>
    </div>
@endsection