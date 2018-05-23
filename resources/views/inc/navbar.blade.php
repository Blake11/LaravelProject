<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">{{config('app.name')}}</a>
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for users" name="srch-term" id="srch-term">
            </div>
        </form>

        <!-- Mobile view toggle button-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar left side content -->

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#postsmodal">
                        New post
                    </button>
                </li>
                <li><a class="nav-link">Home</a></li>
                <li><a class="nav-link">Profile</a></li>
            </ul>
        </div>
    </div>
</nav>
