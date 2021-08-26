<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Child Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'child_care') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="dist/img/child_icon_15.png" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Styles -->
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;

        }
        .header{
            min-height: 130vh;
            width: 100%;
            background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('dist/img/child_icon_11.jpg');
            background-position: center;
            background-size: cover;
            position: center ;
        }
        nav{
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }
        nav img{
            width: 130px;

        }
        .nav-link-1{
            flex: 1;
            text-align: right;

        }
        .nav-link-1 ul li {
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }
        .nav-link-1 ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 13px;
        }
        .nav-link-1 ul li::after{
            content: '';
            width: 0%;
            height: 2px;
            background: #d7bed4;
            display: block;
            margin: auto;
            transition: 0.5s;

        }
        .nav-link-1 ul li:hover::after{
            width: 100%;
        }

        .text-box-1{
            width: 90%;
            color: #fff;
            position: absolute;
            top: 10%;
            right: 50%;
            transform: translate(50%,30%);
            text-align: center;
        }
        .text-box-2{
            width: 90%;
            color: #fff;
            position: absolute;
            top: -2%;
            right: 50%;
            transform: translate(50%,30%);
            text-align: center;
        }
        .text-box-1 h1{
            font-size: 30px;

        }
        .text-box-1 p{
            margin: 10px 0 40px;
            font-size: 10px;
            color: #fff;

        }
        .text-box-3{
            width: 90%;
            color: #fff;
            position: absolute;
            top: 28%;
            right: 50%;
            transform: translate(50%,30%);
            text-align: center;
        }
        .text-box-3 h1{
            font-size: 30px;

        }
        .text-box-3 p{
            margin: 10px 0 40px;
            font-size: 10px;
            color: #fff;

        }
        .hero-btn{
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            padding: 12px 34px;
            font-size: 13px;
            background: transparent;
            position: relative;
            cursor: pointer;

        }
        .hero-btn:hover{
            border: 1px solid #d7bed4;
            background:#d7bed4;
            transition: 1s;
            text-decoration: none;

        }
        nav .fa{
            display: none;
        }
        @media (max-width: 700px){
             .header  {
                min-height: 150vh;

            }
            .text-box-3 h1{
                font-size: 15px;

            }

            .text-box-1{
                top: 1%;

            }
            .text-box-2{
                top: -23%;

            }
            .aboutUsBox h1{
                font-size: 15px;

            }
            .aboutUsBox p {
                font-size: 10px;

            }

            .text-box-1 h1{
                font-size: 15px;

            }
            .text-box-2 h1{
                font-size: 15px;

            }
            .nav-link-1 ul li{
                display: block;
            }
            .nav-link-1{
                position: absolute;
                background: #d7bed4;
                height: 150vh;
                width: 200px;
                top: 0;
                right: 0;
                text-align: left;
                z-index: 2;
                transition: 1s;
            }
            nav .fa{
                display: block;
                color: #fff;
                margin: 10px;
                font-size: 22px;
                cursor: pointer;
            }
            nav-link-1 ul{
                padding: 30px;
            }

        }
        .aboutUsBox{
             background: transparent;
            position: relative;
            cursor: pointer;
            padding: 50px 60px;
            text-align: center;


        }
.aboutUs{
    min-height: 30vh;

}
.footer-1{
    text-align: left;
 }


    </style>
</head>
<body>
<section class="header">
    <nav>
        <a href="\" ><img src="dist/img/child_icon_12.png"></a>
        <div class="nav-link-1" id="navLink">
            <i class="fa fa-times"  onclick="hideMenu()"></i>

            <ul>
                @if (Route::has('login'))
                    @auth
                        <li> <a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li>  <a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li> <a href="{{ route('register') }}">Register</a></li>
                        @endif

                    @endauth
                    <li> <a href="#aboutUs">About Us</a></li>

            </ul>

            @endif
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>

    </nav>
    <script>
        const navLinks = document.getElementById("navLink");

        function showMenu(){
            navLinks.style.right= "0";
        }
        function hideMenu(){
            navLinks.style.right= "-200px";
        }


    </script>

@yield('content')



</section>
<section class="aboutUs">

    <div class="aboutUsBox" id="aboutUs" >
        <h1>About Us</h1>
        <p>
             We made IVS with the vision of healthier and safer world for our children ,<br>
            through online access we can reach more and more people ,spread awareness about the importance<br>>
            of vaccination ,IVS for a better tomorrow to our children

        </p>
    </div>

<!--
   <footer style="text-align: center">


             <strong ><i class="fab fa-facebook"></i>  <a href="https://www.facebook.com/ahmad.alghawi.3/">Ahmad AL-Ghawi</a></strong>
    </footer>-->
</section>
</body>
</html>
