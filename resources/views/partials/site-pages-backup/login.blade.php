<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="odecuVUkPq9Kbt8RJWGRdwSiTx1BcRnR0AiKXCny">

        <title>Laravel Ecommerce | Login</title>

        <link href="/img/favicon.ico" rel="SHORTCUT ICON" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://laravelecommerceexample.ca/css/app.css">
        <link rel="stylesheet" href="https://laravelecommerceexample.ca/css/responsive.css">

            </head>


<body class="">
    <header>
    <div class="top-nav container">
      <div class="top-nav-left">
          <div class="logo"><a href="/">Ecommerce</a></div>
                    <ul>
            <li>
            <a href="/shop">
                Shop
                            </a>
        </li>
            <li>
            <a href="#">
                About
                            </a>
        </li>
            <li>
            <a href="https://blog.laravelecommerceexample.ca">
                Blog
                            </a>
        </li>
    </ul>

                </div>
      <div class="top-nav-right">
                    <ul>
        <li><a href="https://laravelecommerceexample.ca/register">Sign Up</a></li>
    <li><a href="https://laravelecommerceexample.ca/login">Login</a></li>
        <li><a href="https://laravelecommerceexample.ca/cart">Cart
        </a></li>
    
</ul>
                </div>
    </div> <!-- end top-nav -->
</header>

    <div class="container">
    <div class="auth-pages">
        <div class="auth-left">
                         <h2>Returning Customer</h2>
            <div class="spacer"></div>

            <form action="https://laravelecommerceexample.ca/login" method="POST">
                <input type="hidden" name="_token" value="odecuVUkPq9Kbt8RJWGRdwSiTx1BcRnR0AiKXCny">

                <input type="email" id="email" name="email" value="" placeholder="Email" required autofocus>
                <input type="password" id="password" name="password" value="" placeholder="Password" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Login</button>
                    <label>
                        <input type="checkbox" name="remember" > Remember Me
                    </label>
                </div>

                <div class="spacer"></div>

                <a href="https://laravelecommerceexample.ca/password/reset">
                    Forgot Your Password?
                </a>

            </form>
        </div>

        <div class="auth-right">
            <h2>New Customer</h2>
            <div class="spacer"></div>
            <p><strong>Save time now.</strong></p>
            <p>You don't need an account to checkout.</p>
            <div class="spacer"></div>
            <a href="https://laravelecommerceexample.ca/guestCheckout" class="auth-button-hollow">Continue as Guest</a>
            <div class="spacer"></div>
            &nbsp;
            <div class="spacer"></div>
            <p><strong>Save time later.</strong></p>
            <p>Create an account for fast checkout and easy access to order history.</p>
            <div class="spacer"></div>
            <a href="https://laravelecommerceexample.ca/register" class="auth-button-hollow">Create Account</a>

        </div>
    </div>
</div>

    <footer>
    <div class="footer-content container">
        <div class="made-with">Made with <i class="fa fa-heart heart"></i> by Andre Madarang</div>
        <ul>
                        <li>Follow Me:</li>
                <li><a href=""><i class="fa Follow Me:"></i></a></li>
                    <li><a href="http://andremadarang.com"><i class="fa fa-globe"></i></a></li>
                    <li><a href="http://youtube.com/drehimself"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="http://github.com/drehimself"><i class="fa fa-github"></i></a></li>
                    <li><a href="http://twitter.com/drehimself"><i class="fa fa-twitter"></i></a></li>
    </ul>

    </div> <!-- end footer-content -->
</footer>

    
</body>
</html>