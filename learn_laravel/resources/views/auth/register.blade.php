<!DOCTYPE html>
<html>

<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <link rel="stylesheet" href="{{asset('css/login-register.css')}}">
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Creative SignUp Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="/register" method="post">
                    @csrf
                    <input class="text" type="text" name="name" placeholder="Username" style="margin-bottom:28px;"required="">
                    {{ $errors->first('email') }}
                    <input class="text email" type="email" name="email" style="margin-top:0px;" placeholder="Email" required="">
                    {{ $errors->first('password') }}

                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <input class="text w3lpass" type="password" name="password_confirmation" placeholder="Confirm Password" required="">
                    <input type="submit" value="SIGNUP">
                </form>
                <p>Do you have an Account? <a href="/login"> Login Now!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>

</html>