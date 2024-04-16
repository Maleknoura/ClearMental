<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Document</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <div class="full_bg">
        <!-- header -->
        <header class="header-area">
            <div class="container">
                <div class="row d_flex">
                    <div class=" col-md-3 col-sm-3">
                        <div class="logo">
                            <img src="/images/logo.png" alt="" width="80px" height="140px">
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="navbar-area">
                            <nav class="site-navbar">
                                <ul>
                                    <li><a class="active" href="">Home</a></li>
                                    <li><a href="">Actuality</a></li>
                                    <li><a href="">Library</a></li>

                                    {{-- <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user"
                                                aria-hidden="true"></i></a></li>
                                    <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search"
                                                aria-hidden="true"></i></a></li> --}}
                                </ul>
                                <ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf <!-- Ajoutez le jeton CSRF pour protéger votre formulaire -->
                                        <button type="submit">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                    <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                                <button class="nav-toggler">
                                    <span></span>
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header inner -->
        <!-- top -->
        <div class="slider_main">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#banner1" data-slide-to="0" class="active"></li>
                    <li data-target="#banner1" data-slide-to="1"></li>
                    <li data-target="#banner1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="col-md-5">
                                        <div class="creative">
                                            <h1>Croissance <br> personnelle</h1>
                                            <p>
                                                Le voyage le plus important que vous pouvez entreprendre est celui de la
                                                découverte de vous-même.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="/images/clr.jpg" alt="" class="sectionimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- services -->
                    <div class="services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="titlepage text_align_center flex">
                                        <h2>Our Coachs</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($coachs as $coach)
                                <div class="col-md-4">
                                    <div id="ho_shad" class="services_box text_align_left">
                                        <h3>{{ $coach->name }}</h3>
                                        <figure><img src="images/service1.jpg" alt="#" /></figure>
                                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <a class="read_more" href="{{ route('profile', ['id' => $coach->id]) }}">Read More</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end services -->
                    
                 
                    


                    <!-- customers -->
                    <div class="customers">
                        <div class="clients_bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="titlepage text_align_center">
                                            <h2>A propos de Nous</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start slider section -->
                        <div id="myCarousel" class="carousel slide clients_banner" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container">
                                        <div class="carousel-caption relative">
                                            <div class="row d_flex">
                                                <div class="col-md-2 col-sm-8">
                                                    <div class="pro_file">
                                                    
                                                        <h4>Notre Mission</h4>
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="test_box text_align_left">
                                                        <p>Notre mission est d'inspirer et d'accompagner les individus dans leur voyage de croissance personnelle et de développement. Nous croyons fermement en le potentiel de chacun à atteindre ses objectifs et à vivre une vie épanouissante et alignée avec ses valeurs les plus profondes </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="carousel-caption relative">
                                            <div class="row d_flex">
                                                <div class="col-md-2 col-sm-8">
                                                    <div class="pro_file">
                                                    
                                                        <h4>Notre Équipe de Coachs</h4>
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="test_box text_align_left">
                                                        <p>Rencontrez notre équipe de coachs dévoués et expérimentés, prêts à vous guider à chaque étape de votre cheminement personnel. Ils sont là pour vous écouter, vous soutenir et vous motiver à surmonter les défis et à réaliser vos rêves. Ensemble, nous sommes là pour vous aider à atteindre votre plein potentiel </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="carousel-caption relative">
                                            <div class="row d_flex">
                                                <div class="col-md-2 col-sm-8">
                                                    <div class="pro_file">
                                                   
                                                        <h4>Notre Histoire</h4>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="test_box text_align_left">
                                                        <p>Notre histoire commence avec une passion partagée pour le développement personnel et le bien-être. Fondée par un groupe de professionnels passionnés, notre entreprise est née de la conviction que chacun mérite d'avoir accès aux outils et aux ressources nécessaires pour créer une vie significative et épanouissante. Depuis lors, nous avons travaillé sans relâche pour offrir des programmes et des services de qualité supérieure à notre communauté, en nous engageant à être une source d'inspiration et de transformation pour tous ceux qui franchissent nos portes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- end customers -->
                    <!--  footer -->
                    <footer>
                        <div class="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="hedingh3 text_align_left">
                                                    <h3>About</h3>
                                                    <p> Virginia, looked up one of the more obscure Latin words,
                                                        consectetur, from a
                                                        Lorem Ipsum passage, and going through the cites of the word
                                                        in classical
                                                        literature, discovered the undoubtable sourc</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="hedingh3 text_align_left">
                                                    <h3>Blog</h3>
                                                    <p>Which don't look even slightly believable. If you are going
                                                        to use a passage
                                                        of
                                                        Lorem Ipsum, you need to be sure there isn't anythin</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="hedingh3 text_align_left">
                                                    <h3>Menu</h3>
                                                    <ul class="menu_footer">
                                                        <li><a href="index.html">Home</a></li>
                                                        <li><a href="about.html">About</a></li>
                                                        <li><a href="service.html">Service</a></li>
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="contact.html">Contact us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="hedingh3  text_align_left">
                                                    <h3>Newsletter</h3>
                                                    <form id="colof" class="form_subscri">
                                                        <input class="newsl" placeholder="Email" type="text"
                                                            name="Email">
                                                        <button class="subsci_btn">Subscribe</button>
                                                    </form>
                                                    <ul class="top_infomation">
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                                                            +01 1234567890
                                                        </li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                                            <a href="Javascript:void(0)">demo@gmail.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="copyright">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="follow text_align_center">
                                                <h3>Follow Us</h3>
                                                <ul class="social_icon ">
                                                    <li><a href="Javascript:void(0)"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="Javascript:void(0)"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="Javascript:void(0)"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="Javascript:void(0)"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/">
                                                    Free html
                                                    Templates</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end footer -->
                    <!-- Javascript files-->
                    <script src="js/jquery.min.js"></script>
                    <script src="js/bootstrap.bundle.min.js"></script>
                    <script src="js/jquery-3.0.0.min.js"></script>
                    <script src="js/owl.carousel.min.js"></script>
                    <script src="js/bootstrap-datepicker.min.js"></script>
                    <script src="js/custom.js"></script>
</body>

</html>
