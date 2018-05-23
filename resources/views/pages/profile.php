<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PAGE_NAME | WEB_NAME</title>
    <!-- Bootstrap core CSS -->
    <link href="../static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="page-top" style="padding-top: 50px;">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="login.html">WEB_NAME</a>
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for users" name="srch-term" id="srch-term">
            </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Responsive sections navigator-->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a class="nav-link" href="feed.php">Home</a></li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#posts">Ideas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About me</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Profile info -->
<div class="jumbotron">
    <img class="img-fluid d-block mx-auto" src="../static/img/profile.png">
    <h1 class="text-center">Profile_Name</h1>
</div>
<!-- End Profile-->

<!-- About-->
<div class="container" id="about">
    <div class="jumbotron">
        <h2 class="text-center">About me</h2>
        <p>description_text</p>
    </div>
</div>
<!--End about-->

<!--Posts-->
<div id="posts" class="container">
    <!--Post-->
    <div class="jumbotron">

        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-6">
                <h3>Post author</h3>
                <p>Post text ------------------------------------</p>
            </div>
            <div style="padding-top: 1%" class="col-lg-6">
                <a class="btn btn-success" href="#">Agree</a>
                <a class="btn btn-danger" href="#">Disagree</a>
                <a class="btn btn-primary" href="#">Comment</a>
            </div>

            <div style="padding-top: 1%" class="col-lg-6">
                <h4>Comment author</h4>
                <p>Comment----------------------------------------------------------</p>
            </div>

        </div>
    </div>
    <!--End Post-->
    <!--Post-->
    <div class="jumbotron">

        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-6">
                <h3>Post author</h3>
                <p>Post text ------------------------------------</p>
            </div>
            <div style="padding-top: 1%" class="col-lg-6">
                <a class="btn btn-success" href="#">Agree</a>
                <a class="btn btn-danger" href="#">Disagree</a>
                <a class="btn btn-primary" href="#">Comment</a>
            </div>

            <div style="padding-top: 1%" class="col-lg-6">
                <h4>Comment author</h4>
                <p>Comment----------------------------------------------------------</p>
            </div>

        </div>
    </div>
    <!--End Post-->
    <!--Post-->
    <div class="jumbotron">

        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-6">
                <h3>Post author</h3>
                <p>Post text ------------------------------------</p>
            </div>
            <div style="padding-top: 1%" class="col-lg-6">
                <a class="btn btn-success" href="#">Agree</a>
                <a class="btn btn-danger" href="#">Disagree</a>
                <a class="btn btn-primary" href="#">Comment</a>
            </div>

            <div style="padding-top: 1%" class="col-lg-6">
                <h4>Comment author</h4>
                <p>Comment----------------------------------------------------------</p>
            </div>

        </div>
    </div>
    <!--End Post-->

</div>
<!-- Bootstrap core JavaScript -->
<script src="../static/vendor/jquery/jquery.min.js"></script>
<script src="../static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--Style and animation scripts -->
<script src="../static/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
