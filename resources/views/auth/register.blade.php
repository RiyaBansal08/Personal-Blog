<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registeration</title>
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               <img src="https://cracku.in/latest-govt-jobs/wp-content/uploads/2019/07/mkcl-logo.jpg" height="60" width="60">
            </a>


        </div>
    </nav>
    <div class="heading">
        <h1> USER Registeration</h1>
    </div>
    <div class="area">
        <div class="sidenav">
            <div class="navcontent">
                <a id="bloglist"> Use Google account </a>
            </div>
        </div>
        <div class="userform">
            <div class="formcontent">

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h3>Email</h3>
                    <input type="email" name="email" id="email"required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <h3>Name</h3>
                    <input type="text" name="name" id="name"required>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                    <h3>Password</h3>
                    <input type="password" name="password" id="password"required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <br>
                    <h3>Confirm Password</h3>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required>
                    <br><br>

                    <button type="submit" id="register">
                        Register
                    </button>



                </form>
            </div>
        </div>
    </div>


</body>

</html>
