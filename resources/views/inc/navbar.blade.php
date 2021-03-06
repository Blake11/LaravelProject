<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'SNI') }}
        </a>
        {!! Form::open([
                'route'=>['search'],
                'method'=>'get',
                'class' => 'navbar-form']) !!}
        <div class="input-group">
            {{Form::text('terms',null,['class' => 'form-control', "type" => 'search', 'placeholder' => "Search users or posts"])}}
            <input type="submit" class="btn btn-outline-success" value="Search">

        </div>
    {!! Form::close() !!}

    <!-- Mobile view toggle button-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar left side content -->
        <ul class="navbar-nav mr-auto">

        </ul>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item"><a href="{{ route('login')}}">
                            <button class="btn btn-primary">Login</button>
                        </a></li>
                    <li class="nav-item"><a href="{{ route('register') }}">
                            <button class="btn btn-secondary">Register</button>
                        </a></li>
                @else
                    <li class="nav-item btn btn-outline-info mr-lg-1" disabled>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button"
                           aria-expanded="false" aria-haspopup="true" v-pre>
                            Menu <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item" data-toggle="modal" data-target="#postsmodal"><a href=""
                                                                                                       onclick="event.preventDefault();">New
                                    Post</a></li>
                            <li class="dropdown-item">
                                <a href="/dashboard">
                                    Edit Profile
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
