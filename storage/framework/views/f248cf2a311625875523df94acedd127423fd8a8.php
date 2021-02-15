<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>SiliconStore - An Easy to use E-commerce System</title>

    <!-- Styles -->
    <link href="<?php echo e(url('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('css/font-awesome.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(url('css/custom.css')); ?>" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
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
                    <li><a href="">Register</a> </li>
                    <li><a href="">Login</a> </li>
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
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(url('images/logo/logo.png')); ?>" height="33px">
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
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>"><span class="fa fa-sign-in"></span>  Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>"><span class="fa fa-plus-circle"></span>  Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <?php if(Auth::user()->role == 'admin'): ?>
                                    <li>
                                        <a href="<?php echo e(url('admin')); ?>">
                                            Administration
                                        </a>
                                    </li>
                                    <?php endif; ?>
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right navbar-right-span">
                        <!-- Authentication Links --><!-- 
                            <li><a href="<?php echo e(url('wishlist')); ?>"><span class="fa fa-heart-o"></span> Wishlist</a></li> -->
                            <li><a href="<?php echo e(url('cart')); ?>"><span class="fa fa-shopping-cart"></span> Cart (<span id="count_cart"><?php echo count($saved_cart_items);?></span>)</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" method="POST" action="<?php echo e(url('search')); ?>">
                        <div class="form-group input-group">
                          <input type="text" class="form-control" placeholder="Search.." name="search">
                          <?php echo e(csrf_field()); ?>

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

        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="base-footer">
        <h1>Get informed as soon as a new product is uploaded!!!</h1>
        <p>Subscribe for newsletter now...</p>
        <div class="newsl">
            <div class="form-group input-group">
              <input type="text" class="form-control" placeholder="Email address">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <span class="fa fa-location-arrow"></span> 
                  Subscribe
                </button>
              </span>        
            </div>
        </div>
    </div>
<footer class="the-footer">
   © <a href=""> SiliconStore E-Commerce</a> - All Rights Reserved 2017
</footer>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script type="text/javascript">
    var elementPosition = $('#is-nav').offset();

        $(window).scroll(function () {
            if ($(window).scrollTop() > elementPosition.top) {
                $('#is-nav').css('position', 'fixed').css('top', '0px').css('width', '100%').css('box-shadow', '0 15px 15px rgba(0, 0, 0, 0.3)').css('border-style', 'inset').css('z-index', '8000').css('background', '#e6ffe6');
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
