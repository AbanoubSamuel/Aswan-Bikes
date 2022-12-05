<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aswan Bikes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Profile-01.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/AswanTours.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/reg.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cart.css')}}">


    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>

                </div>
                <div>
                    <a class="text-light" href="https://www.facebook.com/groups/757352274998532" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                      <a class="text-light" href="https://www.instagram.com/aswan_bikes/?igshid=YmMyMTA2M2Y%3D" target="_blank" rel="sponsored" ><i class="fa-brands fa-instagram"></i></a>



                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->
 <!-- Header -->
 <nav class="navbar navbar-expand-lg navbar-light shadow">
    <ul class="logo" style="display: inline-block">
        <li >
            <img src="assets/img/12.png" alt="" style="width: 60px; margin-left:20px; ">
        </li>
    </ul>
    <div class="container d-flex justify-content-between align-items-center">

        {{-- <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            <img src="./Profile-01.png" alt="" style="width: 130px;">
        </a> --}}

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    {{-- <li class="logo">
                        <img src="assets/img/logo.png" alt="" style="width: 60px ; ">
                    </li> --}}
                    @auth


                    @if(Auth::user()->name=="admin")
                    <li class="nav-item">
                        <a class="nav-link" href={{url("dash")}}>Dashboard</a>
                    </li>
                    @endif
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href={{url("home")}}>Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href={{url("about")}}>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{url("shop")}}>Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{url("AswanTours")}}>Aswan Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{url("contact")}}>Contact</a>
                    </li>
                    @if (Auth::user())
                    <li hidden class="nav-item">
                        <a class="nav-link" href={{url("Register")}}>Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href={{url("reg")}}>Register</a>
                    </li>
                    @endif

                    @auth

                    <li class="nav-item">
                        <a class="nav-link" href="reg">  {{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                </li>
                        @else

                        <li class="nav-item">
                            <a class="nav-link" href="{{url("log")}}">Login</a>
                        </li>

                    @endauth



                </ul>


            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                @auth


                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                {{-- <a class="nav-icon position-relative text-decoration-none" href="#"> --}}
                     <i  class="fa fa-fw fa-cart-arrow-down text-dark mr-1">
                      <span  class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{count(Auth::user()->cart)}}</span> </i>
                </a>
                @endauth
            </div>
        </div>

    </div>

</nav>
<!-- Close Header -->





@yield("body")



    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Aswan Bikes Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            <a href="@">Aswan,Train Station Square,behind the Governorate building,
                                Harmony Gym</a>
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="shop">Bikes</a></li>
                        <li><a class="text-decoration-none" href="shop">Scooters</a></li>
                        <li><a class="text-decoration-none" href="shop">Skates</a></li>
                        <li><a class="text-decoration-none" href="AswanTours">Aswan Tours</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="home">Home</a></li>
                        <li><a class="text-decoration-none" href="about">About Us</a></li>
                        <li><a class="text-decoration-none" href="shop">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="contact">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/groups/757352274998532/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>


                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Aswan Bikes
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- End Script -->
</body>

</html>
