@section('content')
    <body>
    <style>
        body {
            background: url{{asset('img/bg.jpg')}} no-repeat center center fixed;
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

                <form>
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

                    <p><input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg" role="button"
                              href="index.html">
                        <input type="reset" class="btn btn-danger btn-lg" role="button" href="index.html">
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection