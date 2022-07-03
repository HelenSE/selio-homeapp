<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Selio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{asset('/site/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('/site/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/site/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/color.css')}}">
</head>

<body>
{{--<!--[if lte IE 9]>--}}
{{--<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>--}}
{{--<![endif]-->--}}



<div class="wrapper">
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{route('home')}}">
                                <img src="{{asset('site/images/logo.png')}}" alt="">
                            </a>
                            <button class="menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                                <span class="icon-spar"></span>
                                <span class="icon-spar"></span>
                                <span class="icon-spar"></span>
                            </button>

                            <div class="navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                            Home
                                        </a>
                                        <div class="dropdown-menu animated">
                                            <a class="dropdown-item" href="01_Home.html">White Menu with Center Search</a>
                                            <a class="dropdown-item" href="02_Home.html">Image Menu with Center Search 2</a>
                                            <a class="dropdown-item" href="03_Home.html">Map with Center Search</a>
                                            <a class="dropdown-item" href="04_Home.html">Geo SVG Map</a>
                                            <a class="dropdown-item" href="05_Home.html">Slider Header</a>
                                            <a class="dropdown-item" href="06_Home.html">Image Header with Description</a>
                                            <a class="dropdown-item" href="07_Home_Categories_and_Advanced_Search.html">More Search Features</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                            Features
                                        </a>
                                        <div class="dropdown-menu animated">
                                            <a class="dropdown-item" href="17_Features_Example_Alt_Titlebar.html">Features Example</a>
                                            <a class="dropdown-item" href="18_Half_Map.html">Half Map</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                            Listing
                                        </a>
                                        <div class="dropdown-menu animated">
                                            <a class="dropdown-item" href="21_List_Layout_With_Map.html">List Layout with Map</a>
                                            <a class="dropdown-item" href="22_List_Layout_With_Sidebar.html">List Layout with Sidebar</a>
                                            <a class="dropdown-item" href="11_Agent_Profile.html">Agent Profile</a>
                                            <a class="dropdown-item active" href="24_Property_Single.html">Property Single</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">
                                            Pages
                                        </a>
                                        <div class="dropdown-menu animated">
                                            <a class="dropdown-item" href="12_Blog_Grid.html">Blog Grid</a>
                                            <a class="dropdown-item" href="13_Blog_Standart.html">Blog Standard</a>
                                            <a class="dropdown-item" href="14_Blog_Open.html">Blog Open</a>
                                            <a class="dropdown-item" href="10_About.html">About</a>
                                            <a class="dropdown-item" href="15_Contact.html">Contact</a>
                                            <a class="dropdown-item" href="09_404.html">404</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-inline my-2 my-lg-0">
                                    <ul class="navbar-nav">
                                        <li class="nav-item signin-btn">
                                            <a href="#" class="nav-link">
                                                <i class="la la-sign-in"></i>
                                                <span><b class="signin-op">Sign in</b> or <b class="reg-op">Register</b></span>
                                            </a>

                                        </li>
                                        <li class="nav-item submit-btn">
                                            <a href="#" class="my-2 my-sm-0 nav-link sbmt-btn">
                                                <i class="icon-plus"></i>
                                                <span>Submit Listing</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" title="" class="close-menu"><i class="la la-close"></i></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <section class="bottom section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-md-4">
                    <div class="bottom-logo">
                        <img src="{{asset('/site/images/logo.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-3">
                    <div class="bottom-list">
                        <h3>Helpful Links</h3>
                        <ul>
                            <li>
                                <a href="18_Half_Map.html" title="">Half Map</a>
                            </li>
                            <li>
                                <a href="#" title="">Register</a>
                            </li>
                            <li>
                                <a href="#" title="">Pricing</a>
                            </li>
                            <li>
                                <a href="#" title="">Add Listing</a>
                            </li>
                        </ul>
                    </div><!--bottom-list end-->
                </div>
                <div class="col-xl-5 col-sm-12 col-md-5 pl-0">
                    <div class="bottom-desc">
                        <h3>Aditional Information</h3>
                        <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-content">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-md-6">
                                <div class="copyright">
                                    <p>&copy; Selio theme made in EU. All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="footer-social">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--footer end-->


</div><!--wrapper end-->






<script src="{{asset('/site/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/site/js/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('/site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/site/js/scripts.js')}}"></script>

<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVwc4veKudU0qjYrLrrQXacCkDkcy3AeQ"></script>
<script src="{{asset('/site/js/map-cluster/infobox.min.js')}}"></script>
<script src="{{asset('/site/js/map-cluster/markerclusterer.js')}}"></script>
<script src="{{asset('/site/js/map-cluster/maps.js')}}"></script>



</body>

</html>
