@extends('layouts.app')
@section('content')
    <!--Post-->
    {!! Form::open(['action' => ['PostsController@update',$post->id ], "method" => "POST", 'files' => 'true']) !!}
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{Storage::url($post->image_link)}}" alt="">
                {{ Form::label("picture", "Picture")}}
                {!! Form::file("picture") !!}
            </div>

            <div class="col-lg-6">
                {{Form::label('Title', "Post Title")}}
                {{Form::text('title', $post->title,['class' => 'form-control'])}}

                {{Form::label('description',"Post Description")}}
                {{Form::textarea('description', $post->description,['id' => 'article-ckeditor','class' => 'form-control', 'rows' => '3'])}}
            </div>

            {!! Form::submit("Submit", ['class' => 'btn btn-primary mt-2 mr-1']) !!}
            {{Form::hidden('_method', 'PUT')}}
            {!! Form::close() !!}


            {!! Form::open(['action' => ['PostsController@destroy',$post->id ], "method" => "POST"]) !!}

            {{Form::hidden('_method', 'DELETE')}}
            {!! Form::submit("Delete", ['class' => 'btn btn-danger mr-1 mt-2']) !!}

            {!! Form::close() !!}



        </div>

        <div class="row">
            <small>Last edited on {{$post->updated_at}}</small>
        </div>

    </div>

@endsection