<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
  <title>BoomStore - An Easy way to use Ecommerce Site</title>
  <!-- Meta tag Keywords -->
<!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#003663">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#003663">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#003663">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="An Easy way to use Ecommerce Site" />
    <meta name="keywords" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components, laravel, react, vue, Tommkruix, Ajiferuke, web, website, Ecommerce, site, program, software, download, free, free project, products"/>
    <meta name="author" content="Ajiferuke Oluwatomiwa p.k.a (Tommkruix) You can contact me @: +234 814 524 5824, ajiferukeolatommy@gmail.com">
    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
     <link href="{{ url('css/custom.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <?php // read cookie contents
        $cookie = isset($_COOKIE['cart_items_cookie']) ? $_COOKIE['cart_items_cookie'] : "";
        $cookie = stripslashes($cookie);
        $saved_cart_items = json_decode($cookie, true);
    ?>
    <div id="app">
        <div class="nav-top">
            <div class="nav-top-left">
                <ul>
                    <li><a href="">About us</a> </li>
                    <li><a href="">Blog</a> </li>
                </ul>
            </div>
            <div class="nav-top-right">
                <ul>
                    <li><a href="{{ route('register') }}">Register</a> </li>
                    <li><a href="{{ route('login') }}">Login</a> </li>
                    <li><a href=""><span class="fa fa-facebook"></span></a> </li>
                    <li><a href=""><span class="fa fa-twitter"></span></a> </li>
                    <li><a href=""><span class="fa fa-instagram"></span></a> </li>
                    <li><a href=""><span class="fa fa-google-plus-square"></span></a> </li>
                    <li><a href=""><span class="fa fa-linkedin"></span></a> </li>
                    <li><a href=""><span class="fa fa-pinterest"></span></a> </li>
                    <li><a href=""><span class="fa fa-youtube"></span></a> </li>

                </ul>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-static-top no-marg" id="is-nav">
            <div class="container">

                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed des-tab" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('images/logo/logo.png') }}" height="33px">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->

                    <ul class="nav navbar-nav navbar-right navbar-right-span">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="fa fa-sign-in"></span>  Login</a></li>
                            <li><a href="{{ route('register') }}"><span class="fa fa-plus-circle"></span>  Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->role == 'admin')
                                    <li>
                                        <a href="{{ url('admin') }}">
                                            Administration
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right navbar-right-span">
                        <!-- Authentication Links --><!-- 
                            <li><a href="{{ url('wishlist') }}"><span class="fa fa-heart-o"></span> Wishlist</a></li> -->
                            <li><a href="{{ url('cart') }}"><span class="fa fa-shopping-cart"></span> Cart (<span id="count_cart"><?php echo count($saved_cart_items);?></span>)</a></li>
                            
                    </ul>
                    <form class="navbar-form navbar-right" role="search" method="POST" action="{{ url('search') }}">
                        <div class="form-group input-group">
                          <input type="text" class="form-control" placeholder="Search.." name="search">
                          {{ csrf_field() }}
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                              <span class="fa fa-search"></span> 
                              Search
                            </button>
                          </span>        
                        </div>
                      </form>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <div class="base-footer">
        <h2>Never waste your data, get informed as soon as a new product is uploaded!</h2>
        <p>Subscribe to our newsletter now...</p>
        <div class="newsl">
            <div class="form-group input-group">
              <input type="email" class="form-control" placeholder="Email address">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <span class="fa fa-location-arrow"></span> 
                  Subscribe
                </button>
              </span>        
            </div>
        </div>
    </div>
<footer class="the-footer text-center">
   © <a href=""> BoomStore E-Commerce</a> - All Rights Reserved 2018
</footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript">
    var elementPosition = $('#is-nav').offset();

        $(window).scroll(function () {
            if ($(window).scrollTop() > elementPosition.top) {
                $('#is-nav').css('position', 'fixed').css('top', '0px').css('width', '100%').css('box-shadow', '0 15px 15px rgba(0, 0, 0, 0.3)').css('border-style', 'inset').css('z-index', '8000').css('background', '#b0cee8');
            } else {
                $('#is-nav').css('position', 'static').css('width', '100%').css('background', 'white').css('border-style', 'none');
            }
        });
    </script>
   <script type="text/javascript">
        function add_cart () {
            document.getElementById('count_cart').innerHTML = parseInt(document.getElementById('count_cart').innerHTML) + 1;
        }
   </script>
</body>
</html>
