@extends('layouts.app')
@section('content')
    <!--Post-->
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-6">
                <h2>{{$post->title}}</h2>
                <h3>{{$post->author}}</h3>
                <p>{!!$post->description!!}</p>
            </div>
            <div style="padding-top: 1%" class="col-lg-6">
                <a class="btn btn-success" href="#">Agree</a>
                <a class="btn btn-danger" href="#">Disagree</a>
                <a class="btn btn-primary" href="#">Comment</a>
            </div>

        </div>
    </div>
@endsection