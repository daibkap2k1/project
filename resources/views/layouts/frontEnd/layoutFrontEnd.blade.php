<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/frontEnd/bootstrap-4.4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/owlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/owlCarousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/reponsive.css')}}">
    <title>@yield('titleWeb')</title>
</head>

<body>

    <header>
        <div class="container wp-container clearfix">
            <div class="top-header float-left">
                <ul class="th-left d-inline-flex">
                    <li><a href="" style="padding-left: 0"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-youtube"></i></a></li>
                </ul>
                <div class="th-center d-inline-block">
                    <p>Free shipping on international orders of $120+</p>
                </div>
                <ul class="th-right d-inline-flex">
                    <li>
                        <div class="thr-root-click format-money">
                            <span class="thr-text">USD</span>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <ul class="thr-active">
                            <li><a href="">VNĐ</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="thr-root-click lang">
                            <span class="thr-text">ENG</span>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <ul class="thr-active">
                            <li><a href="">VN</a></li>
                        </ul>
                    </li>
                    <li style="padding-right: 0px">
                        <div class="thr-root-click">
                            <a href="#" class="thr-text" style="text-decoration: none; color:#e9e9e9">Sign in</a>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <ul class="thr-active">
                            <li><a href="" class="thr-text">Login</a></li>
                            <li><a href="" class="thr-text">Registration</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <nav>
        <div class="container wp-container">
            <a href="" class="logo-nav">
                <img src="{{asset('public/frontEnd/images/logoweb.png')}}" alt="">
            </a>
            <form action="" class="search-header form-inline" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="What do you need?">
                    <div class="input-group-append">
                        <button class="btn" type="button">
                            <i class="fa fa-search text-white"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="menu d-inline-flex">
                <li><a href="">Home</a></li>
                <li><a href="">Service</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <ul class="list-icon-nav d-inline-flex">
                <li data-toggle="modal" data-target="#exampleModal">
                    <img src="{{asset('public/frontEnd/images/search-icon.png')}}" alt="">
                    <div class="search-icon d-none">
                        <form action="">
                            <input type="text" name="search">
                        </form>
                    </div>
                </li>
                <li>
                    <img src="{{asset('public/frontEnd/images/heart-icon.png')}}" alt="">
                    <div class="heart-icon d-none">
                        âfafa
                    </div>
                </li>
                <li class="position-relative cart-icon">
                    <img src="{{asset('public/frontEnd/images/icon-cart.png')}}" alt="">
                    <span>0</span>
                    <div class="d-none">

                    </div>
                </li>
                <li>
                    <span>Cart :$ 0.00</span>
                </li>
            </ul>
            <div class="icon-menu-mobi justify-content-between">
                <a class="position-relative">
                    <i class="fas fa-shopping-bag"></i>
                    <span>0</span>
                </a>
                <div class="icon-bar">
                    <i class="fas fa-bars"></i>
                </div>
            </div>

        </div>
    </nav>

    @yield('content')


    <footer>
        <div class="container wp-container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-12 col-lg-2">
                        <a href="" class="logo-footer">
                            <img src="{{asset('public/frontEnd/images/logoweb.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-lg-7">
                        <form method="get" id="search" class="ng-pristine ng-valid">
                            <div class="input-group">
                                <label for="email">Subscribe Newletter</label>
                                <input type="text" class="form-control" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn" type="button">
                                        <i class="fab fa-telegram-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-lg-3">
                        <ul class="float-right d-flex icon-footer">
                            <li>
                                <a href=""><img src="{{asset('public/frontEnd/images/fb-footer.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="{{asset('public/frontEnd/images/twiter-footer.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="{{asset('public/frontEnd/images/intagram-footer.png')}}"
                                        alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="{{asset('public/frontEnd/images/youtube-footer.png')}}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-content">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="fc-left">
                            <h2 class="ft-title">Contact info</h2>
                            <ul class="fcl-content">
                                <li>
                                    <span>Address:</span>
                                    <p>2168 S Archer Ave, Chicago, IL 60616, US Phone: +1 312</p>
                                </li>
                                <li>
                                    <span>Phone:</span>
                                    <p>+1 312-080-1990</p>
                                </li>
                                <li>
                                    <span>Email:</span>
                                    <p>testEmail@gmail.com</p>
                                </li>
                                <li>
                                    <span>Opentime:</span>
                                    <p>8.00am - 11.00.pm </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6">
                        <h2 class="ft-title">Account</h2>
                        <ul class="fc-centerRight fc-link flex-column">
                            <li>
                                <a href=""> My account</a>
                            </li>
                            <li>
                                <a href=""> Wishlist</a>
                            </li>
                            <li>
                                <a href=""> Cart</a>
                            </li>
                            <li>
                                <a href=""> Shop</a>
                            </li>
                            <li>
                                <a href=""> Checkout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6">
                        <h2 class="ft-title">Infomation</h2>
                        <ul class="fc-centerRight fc-link flex-column">
                            <li>
                                <a href="">About us</a>
                            </li>
                            <li>
                                <a href="">Careers</a>
                            </li>
                            <li>
                                <a href="">Delivery Inforamtion</a>
                            </li>
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="">Terms & Condition</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="ft-right">
                            <h2 class="ft-title">Payment methods</h2>
                            <ul class="fc-centerRight fc-link flex-column">
                                <li>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit gravida</P>
                                </li>
                                <li>
                                    <ul class="card-link d-inline-flex">
                                        <li>
                                            <a href=""><img src="{{asset('public/frontEnd/images/pay.png')}}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href=""><img src="{{asset('public/frontEnd/images/vina.png')}}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href=""><img src="{{asset('public/frontEnd/images/mater.png')}}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href=""><img src="{{asset('public/frontEnd/images/cirrus.png')}}"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container wp-container d-flex justify-content-between">
                <p class="cr-left">© Copyright 2020 Beauty</p>
                <ul class="cr-link d-inline-flex">
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Site Map</a></li>
                </ul>
            </div>
        </div>
    </footer>
    {{-- Menu mobi  --}}
    <div class="mobile-nav">
        <div class="icon-close">
            <i class="fas fa-times"></i>
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Service</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Shop</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Login</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </div>
    {{-- End menu mobi  --}}

    {{-- cart  --}}
    <div class="box-cart-home clearfix">
        <div class="cart-hover draw-border " id="cart-hovers">
            <table class="select-items">
                <tr>
                    <td class="si-img">
                        <img src="{{asset('public/frontEnd/images/item-cart.png')}}" alt="">
                    </td>
                    <td class="si-content">
                        <div class="si-product">
                            <h6>The expert mascara</h6>
                            <p>$21.80</p>
                            <p>Quatity: 01</p>
                        </div>
                    </td>
                    <td class="si-close">
                        <a href="#"><i class="far fa-times-circle"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="si-img">
                        <img src="{{asset('public/frontEnd/images/item-cart.png')}}" alt="">
                    </td>
                    <td class="si-content">
                        <div class="si-product">
                            <h6>The expert mascara</h6>
                            <p>$21.80</p>
                            <p>Quatity: 01</p>
                        </div>
                    </td>
                    <td class="si-close">
                        <a href="#"><i class="far fa-times-circle"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="si-img">
                        <img src="{{asset('public/frontEnd/images/item-cart.png')}}" alt="">
                    </td>
                    <td class="si-content">
                        <div class="si-product">
                            <h6>The expert mascara</h6>
                            <p>$21.80</p>
                            <p>Quatity: 01</p>
                        </div>
                    </td>
                    <td class="si-close">
                        <a href="#"><i class="far fa-times-circle"></i></a>
                    </td>
                </tr>
            </table>
            <div class="under-cart">
                <div class="select-total">
                    <span>Total:</span>
                    <span>
                        <i class="fas fa-dollar-sign"></i>
                        <span class="d-inline-block ml-1">$120.02</span>
                    </span>
                </div>
                <div class="select-button">
                    <a href="" class="btn btn-dark btn-lg">View card</a>
                    <a href="" class="btn btn-danger btn-lg"> Check out</a>
                </div>
            </div>
        </div>
    </div>
    {{-- End cart  --}}

</body>
<script src="{{asset('public/frontEnd/Js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('public/frontEnd/Js/popper.min.js')}}"></script>
<script src="{{asset('public/frontEnd/bootstrap-4.4.1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontEnd/fontawesome/js/all.js')}}"></script>
<script src="{{asset('public/frontEnd/owlCarousel/owl.carousel.js')}}"></script>
<script src="{{asset('public/frontEnd/Js/myJs.js')}}"></script>


</html>