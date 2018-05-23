<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/public/css/app.css">
</head>

<body>
<style>
    body {
        background: url(../static/img/bg.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<div class="container h-100 d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-6">
            <div class="jumbotron">
                <h1>WEB_NAME</h1>
                <hr>
                <h2>The place where your ideas may come real</h2>
                <hr>
                <p>Add your ideas and let others help you with your plans, vote other's ideas and discuss about them</p>
            </div>
        </div>
        <div class="col-lg-6">
            <h1>Login below</h1>
            <form action="../index.php" method="post">
                <div class="form-group">
                    <div class="col-xs-3 col-lg-6">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-3 col-lg-6">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>

                <p><input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg" role="button">
                    <input type="reset" value="Register" class="btn btn-success btn-lg" role="button" href="register.html">
                </p>
            </form>
        </div>
    </div>
</div>

<script src="/public/js/app.js"></script>
</body>

</html>