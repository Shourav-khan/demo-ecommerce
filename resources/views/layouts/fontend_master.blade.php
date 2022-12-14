<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">

    <title>SEU-73</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('fontend')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend')}}/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>



<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> seu@gmail.com</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">

                        <div class="header__top__right__language">
                            <img src="#" alt="">
                            <div>Language</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Bangla</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            @auth
                                <a href="{{route('home')}}"><i class="fa fa-user"></i>My Account</a>
                                @else
                                <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
                                <a href="{{route('register')}}"><i class="fa fa-user"></i> Register</a>


                    </div>
                        @endauth
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        @if(session('cart'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('cart')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{url('/')}}"><h2>Shopping</h2><img src="#" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="./shop-grid.html">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">

                    @php

                    $total= App\Cart::all()->where('user_ip',request()->ip())->sum
                            (function ($t){
                                 return   $t->price * $t->qty;
                                });
                    $quantity=App\Cart::all()->where('user_ip',request()->ip())->sum('qty');
                    @endphp
                    <ul>
                        <li><a href="{{url('cart')}}"><i class="fa fa-shopping-basket"></i> <span>{{$quantity}}</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>{{$total}}</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<div class="container">
    <div class="row">
        <div class="col-lg-3">
        @include('pages.inc_cat.category')
        </div>
        <div class="col-lg-9">
            <div class="hero__search">
                <div class="hero__search__form">
                    <form action="{{route('search.all')}}" method="post">
                    @csrf
                        <input type="text" name="query" placeholder="What do you need?">
                        <button type="submit" class="blog__sidebar__search">SEARCH</button>
                    </form>
                </div>
                <div class="hero__search__phone">
                    <div class="hero__search__phone__icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="hero__search__phone__text">
                        <h5>+88095******</h5>
                        <span>support 24/7 time</span>
                    </div>
                </div>
            </div>

@yield('content')

<!-- Footer Section Begin -->
<footer class="footer spad" style="background-color: #95999c" >
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about" >
                    <div class="footer__about__logo">
                        <a href="{{url('/')}}"><h3> Shopping </h3><img src="#" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: Dhaka</li>
                        <li>Phone: +88955*****</li>
                        <li>Email: seu@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">


                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="sidebar-tabs">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('fontend')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('fontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('fontend')}}/js/jquery.nice-select.min.js"></script>
<script src="{{asset('fontend')}}/js/jquery-ui.min.js"></script>
<script src="{{asset('fontend')}}/js/jquery.slicknav.js"></script>
<script src="{{asset('fontend')}}/js/mixitup.min.js"></script>
<script src="{{asset('fontend')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('fontend')}}/js/main.js"></script>



</body>

</html>
