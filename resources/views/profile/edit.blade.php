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
                <a class="btn btn-danger" href="/user/{{$user->id}}/edit">Reset</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                    Delete Account
                </button>
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

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure u want to delete your account?
                    </div>
                    <div class="modal-footer">
                        {!! Form::open(['action' => ['ProfilesController@destroy',$user->id] , "method" => "POST", 'files' => 'true']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        <input  type="submit" class="btn btn-danger" data-toggle="modal" value="Yes">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection