<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../static/vendor/bootstrap/css/bootstrap.min.css">
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
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Login below</h1>

            <form action="../controllers/Register.php" method="post">
                <div class="form-group">
                    <div class="col-xs-3 col-lg-4">
                        <label for="firstname">First Name:</label>
                        <input type="text" class="form-control" name="firstname" id="firstname">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-3 col-lg-4">
                        <label for="lastname">Last Name:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-3 col-lg-4">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-3 col-lg-4">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>

                <p><input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg" role="button" href="index.html">
                    <input type="reset" class="btn btn-danger btn-lg" role="button" href="index.html">
                </p>
            </form>
        </div>
    </div>
</div>
</div>

<script src="../static/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>