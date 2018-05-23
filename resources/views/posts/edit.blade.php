@extends('layouts.app')
@section('content')
    <!--Post-->
    {!! Form::open(['action' => ['PostsController@update',$post->id ], "method" => "POST"]) !!}
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-6">
                {{Form::label('Title', "Post Title")}}
                {{Form::text('title', $post->title,['class' => 'form-control'])}}

                {{Form::label('description',"Post Description")}}
                {{Form::textarea('description', $post->description,['id' => 'article-ckeditor','class' => 'form-control', 'rows' => '3'])}}
            </div>
            {!! Form::submit("Submit", ['class' => 'btn btn-primary']) !!}
            {{Form::hidden('_method', 'PUT')}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection