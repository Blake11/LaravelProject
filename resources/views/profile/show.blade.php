@extends("layouts.app")
@section('content')
    <!-- Profile info -->
    <div class="jumbotron">
        <img class="rounded-circle d-block mx-auto" src="{{Storage::url( $user->picture )}}">
        <h1 class="text-center">{{$user->first_name}} {{$user->last_name}}</h1>
    </div>
    <!-- End Profile-->

    <!-- About-->
    <div class="container" id="about">
        <div class="jumbotron">
            <h2 class="text-center">About me</h2>
            <p>{!! $user->about_me !!}</p>
        </div>

    </div>
    <!--End about-->
    @if(count($posts) > 0)
        <div class="container">
            <h1 class="text-center mt-md-3 mb-md-5">{{$user->first_name}}'s posts</h1>
            <div id="posts">
                @foreach($posts as $post)
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="img-fluid rounded-circle" src="{{Storage::url($post->image_link)}}" alt="">
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
        </div>
@endsection