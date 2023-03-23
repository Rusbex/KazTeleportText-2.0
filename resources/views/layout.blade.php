<html lang="ru" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>Галерея</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- GLOBAL MANDATORY STYLES -->
    <script src="https://kit.fontawesome.com/ff7936ea53.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}


    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico"/>

</head>
<!-- BODY -->
<body id="body" data-spy="scroll" data-target=".header">
<!--========== HEADER ==========-->
<header class="site-header sticky-top py-1 bg-dark">
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container js_nav-item">

                <!-- начало логотип левая часть шапки -->
                <div class="logo">
                    <a class="logo-wrap" href="#body">
                        <img class="logo-img" src="{{asset('img/logo.png')}}" alt="Asentus Logo">
                    </a>
                </div>
                <!-- конец логотип левая часть шапки  -->
            </div>

            <!-- начало правой части шапки -->
            <div>
                <ul class="nav navbar-nav navbar-nav-right">
                    <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#" style="color: white"><i class="fa-regular fa-heart"></i>&nbsp;Избранное</a></li>
                </ul>

            </div>
            <!-- конец правой части шапки-->
        </div>
    </nav>
</header>
@yield('main_content')
</body>
<!-- END BODY -->
<script src="{{asset('js/script.js')}}"></script>
</html>
