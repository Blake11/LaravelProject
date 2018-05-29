@extends("layouts.app")

@section('content')
    <div class="container">
        <h1>Users</h1>
        @if(count($users) >0 )
            @foreach($users as $user)
                <div class="jumbotron mb-2 mt-2">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="/user/{{$user->id}}"><img class="rounded-circle" src="{{Storage::url( $user->thumbnail )}}"></a>
                        </div>
                        <div class="col-lg-8">
                            <p>Name: <a href="/user/{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</a></p>
                            <p>{!!$user->about_me !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="jumbotron">
                <h1>No users found</h1>
            </div>

    @endif
        <h1>Posts</h1>
        @if(count($posts) >0 )
            @foreach($posts as $post)
                <div class="jumbotron mb-2 mt-2">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="img-fluid img-rounded" src="{{Storage::url($post->image_link)}}" alt="">

                            <small>Written by <a href="/user/{{$post->user->id}}"> {{$post->user->first_name}}</a> on {{$post->created_at}}</small>
                        </div>
                        <div class="col-lg-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}} {{$post->user->last_name}}</a></h3>
                            <p>{!!$post->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="jumbotron">
                <h1>No posts found</h1>
            </div>

        @endif

    </div>
@endsection