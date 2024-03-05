</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kindle</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{url('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{url('/assets/css/slick.css')}}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{url('/assets/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{url('/style.css')}}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
{{--@dd($books[0]->id)--}}

<!-- Start Header -->
<header id="mu-header" role="banner" class="backround">
    <div class="container">
        <nav class="navbar navbar-default mu-navbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Text Logo -->
                    <a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i> Kindle</a>

                    <!-- Image Logo -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav mu-menu navbar-right">
                        <li><a href="/">Bosh sahifa</a></li>
                        <li><a href="{{route('all.books')}}">Kitoblar</a></li>
                        <li><a href="#">Biz haqimizda</a></li>
                        <li><a href="#">Aloqa</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>

@yield('main')


<!-- Start footer -->
<footer id="mu-footer" role="contentinfo">
    <div class="container">
        <div class="mu-footer-area">
            <div class="mu-social-media">
                <a href="#"><i class="fa icon_footer fa-facebook"></i></a>
                <a href="#"><i class="fa icon_footer fa-twitter"></i></a>
                <a href="#"><i class="fa icon_footer fa-google-plus"></i></a>
                <a href="#"><i class="fa icon_footer fa-linkedin"></i></a>
            </div>
            <p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
        </div>
    </div>

</footer>
<!-- End footer -->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{url('/assets/js/bootstrap.min.js')}}"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{url('/assets/js/slick.min.js')}}"></script>
<!-- Counter js -->
<script type="text/javascript" src="{{url('/assets/js/counter.js')}}"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="{{url('assets/js/app.js')}}"></script>



<!-- Custom js -->
<script type="text/javascript" src="{{url('/assets/js/custom.js')}}"></script>


</body>
</html>
