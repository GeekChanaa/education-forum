<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iosoon</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iosoon-style.css">
    <link rel="stylesheet" type="text/css" href="css/iosoon-theme13.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="form-body">
        <div class="dir-bg"></div>
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="other-links other-links-up no-bg-icon">
            <a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-facebook-f"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin-in"></i></a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="info-holder">
                    <img src="images/graphic9.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login</h3>
                        <p>Our website is under constructions currently, Get a notification on your e-mail for updates.</p>
                        <form class="form-row" action="{{ route('login') }}" method="post">
                          @csrf
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail Address">
                            </div>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            </div>
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <div class="spacer"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
