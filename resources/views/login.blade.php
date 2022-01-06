<!doctype html>
<html>
<head>
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #C7C5F4, #03cc82);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .screen {
            background: linear-gradient(90deg, #00a459, #00b84a);
            position: relative;
            height: 600px;
            width: 360px;
            box-shadow: 0px 0px 24px #00b461;
        }

        .screen__content {
            z-index: 1;
            position: relative;
            height: 100%;
        }

        .screen__background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .screen__background__shape {
            transform: rotate(45deg);
            position: absolute;
        }

        .screen__background__shape1 {
            height: 520px;
            width: 520px;
            background: #FFF;
            top: -50px;
            right: 120px;
            border-radius: 0 72px 0 0;
        }

        .screen__background__shape2 {
            height: 220px;
            width: 220px;
            background: #00ac64;
            top: -172px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape3 {
            height: 540px;
            width: 190px;
            background: linear-gradient(270deg, #02a469, #009e57);
            top: -24px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape4 {
            height: 400px;
            width: 200px;
            background: #00b966;
            top: 420px;
            right: 50px;
            border-radius: 60px;
        }

        .login {
            width: 320px;
            padding: 30px;
            padding-top: 156px;
        }

        .login__field {
            padding: 20px 0px;
            position: relative;
        }

        .login__icon {
            position: absolute;
            top: 30px;
            color: #00b56a;
        }

        .login__input {
            border: none;
            border-bottom: 2px solid #D1D1D4;
            background: none;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 75%;
            transition: .2s;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #079e61;
        }

        .login__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #029d43;
            box-shadow: 0px 2px 2px #07967b;
            cursor: pointer;
            transition: .2s;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color: #049b9e;
            outline: none;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #00b550;
        }

        .social-login {
            position: absolute;
            height: 140px;
            width: 160px;
            text-align: center;
            bottom: 0px;
            right: 0px;
            color: #fff;
        }

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-login__icon {
            padding: 20px 10px;
            color: #fff;
            text-decoration: none;
            text-shadow: 0px 0px 8px #b55601;
        }

        .social-login__icon:hover {
            transform: scale(1.5);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form class="login" action="{{ url('login') }}" method="post">
                {{ csrf_field() }}
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" name="email" class="login__input" placeholder="Email">
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" name="password" class="login__input" placeholder="Password">
                </div>
                <button class="button login__submit">
                    <span class="button__text">Log In</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
            </form>
            <div class="social-login">
                <h3>log in via</h3>
                <div class="social-icons">
                    <a href="#" class="social-login__icon fab fa-instagram"></a>
                    <a href="#" class="social-login__icon fab fa-facebook"></a>
                    <a href="#" class="social-login__icon fab fa-twitter"></a>
                </div>
            </div>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>
</body>
</html>

