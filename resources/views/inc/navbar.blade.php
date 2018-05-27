<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'SNI') }}
        </a>
        <form class="navbar-form">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </form>

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
                    <li class="nav-item">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#postsmodal">New Post</button>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button"
                           aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="/user/{{Auth::user()->id}}">
                                    Profile
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
