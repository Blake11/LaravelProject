@extends("layouts.app")

@section('content')
    {!! Form::open(['action' => ['ProfilesController@update',$user->id] , "method" => "POST", 'files' => 'true']) !!}
    <!-- Profile info -->
    <div class="jumbotron">
        <img class="img-fluid d-block mx-auto" src="{{Storage::url( $user->picture )}}">
        <h1 class="text-center">{{$user->first_name}} {{$user->last_name}}</h1>
        {{ Form::label("picture", "Upload a Profile Picture")}}
        {!! Form::file("picture") !!}
    </div>
    <!-- End Profile-->

    <!-- About-->
    <div class="container" id="about">
        <div class="jumbotron">
            <h2 class="text-center">About me</h2>
            {{Form::textarea('about_me',$user->about_me ,['id' => 'article-ckeditor','class' => 'form-control', 'rows' => '3'])}}
        </div>

    </div>
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">Save changes</h1>
            <div class="text-center">
                {{Form::submit("Save", ['class' => 'btn btn-success'])}}
                <a class="btn btn-danger" href ="/user/{{$user->id}}/edit">Reset</a>
            </div>
        </div>
    </div>

    {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}
    <!--End about-->
    @if(count($posts) > 0)

        <h1 class="text-center mt-md-3 mb-md-5">{{$user->first_name}}'s posts</h1>
        <div class="container">
            @foreach($posts as $post)
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="img-fluid" src="{{Storage::url($post->image_link)}}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <h2>{{$post->title}}</h2>
                            <h3>{{$post->author}}</h3>
                            <p>{!!$post->description!!}</p>
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
        @endif
        <!--Post-->
            <!--End Post-->
        </div>
@endsection