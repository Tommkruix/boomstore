

<!DOCTYPE html>
<html lang="en" class="">
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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
 
  <link rel="stylesheet" href="{{ url('assets/admin/libs/assets/animate.css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('assets/admin/libs/assets/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('assets/admin/libs/assets/simple-line-icons/css/simple-line-icons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('assets/admin/libs/jquery/bootstrap/dist/css/bootstrap.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ url('assets/admin/css/app.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('assets/admin/css/custom.css') }}" type="text/css" />
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div class="app app-header-fixed ">
  

    <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-info">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <img src="{{ url('images/logo/logo-small.png') }}">
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs"><img src="{{ url('images/logo/logo-no-icon.png') }}"></span>
          <!-- <i class="fa fa-btc"><img src="{{ url('images/logo/logo-small.png') }}" alt="." class="hide"></i>
          
          <span class="hidden-folded m-l-xs"><img src="{{ url('images/logo/logo-white.png') }}"></span> -->
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
            <i class="fa fa-bars fa-fw text"></i>
            <i class="fa fa-bars fa-fw text-active"></i>
          </a>
        </div>
        <!-- / buttons -->
        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span translate="header.navbar.new.NEW">New</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('/admin/new-product') }}" translate="header.navbar.new.PROJECT">Product</a></li>
              <li>
                <a  href="{{ url('/admin/categories') }}">
                  <span translate="header.navbar.new.TASK">Category</span>
                </a>
              </li>
              <li><a href="{{ url('/admin/users') }}" translate="header.navbar.new.USER">User</a></li>
            </ul>
          </li>
        </ul>
        <!-- / link and dropdown -->
        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="{{ url('images/users/user.png') }}" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md">{{ Auth::user()->name }}</span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <!-- <li>
                <a href="{{ url('/admin/payment-setting') }}">
                  <span>Settings</span>
                </a>
              </li> -->
              <li>
                <a ui-sref="app.docs" href="{{ url('/') }}" target="_blank">
                  Visit Site
                </a>
              </li>
              <li class="divider"></li>
              <li>
               {{-- <a ui-sref="access.signin">Logout</a> --}}
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
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->


    <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li>
                <a href="{{ url('/admin') }}">
                  <i class="glyphicon glyphicon-home"></i>
                  <span class="font-bold">Dashboard</span>
                </a>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="icon-basket-loaded"></i>
                  <span class="font-bold">Products</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Product</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/new-product') }}">
                      <span>New Products</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/new-bulk-product') }}">
                      <span>New Bulk Products</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/products') }}">
                      <span>All Products</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="fa fa-sitemap"></i>
                  <span class="font-bold">Category</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Category</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/categories') }}">
                      <span>All Categories</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="fa fa-tags"></i>
                  <span class="font-bold">Tags</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Tags</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/tags') }}">
                      <span>All Tags</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="icon-user"></i>
                  <span class="font-bold">Users</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Users</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/users') }}">
                      <span>All Users</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="icon-notebook "></i>
                  <span class="font-bold">Accounting</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Accounting</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/income') }}">
                      <span>Income</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="fa fa-gear"></i>
                  <span class="font-bold">Settings</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <span>General Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/payment-setting') }}">
                      <span>Payment Settings</span>
                    </a>
                  </li>
                </ul>
              </li> -->
            </ul>
          </nav>
          <!-- nav -->
        </div>
      </div>
  </aside>
  <!-- / aside -->


  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
      

<div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
    app.settings.asideFolded = false; 
    app.settings.asideDock = false;
  ">

        @yield('content')
   </div>



  </div>
  </div>
  <!-- /content -->
  
  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
    <div class="wrapper b-t bg-light">
      <span class="pull-right">2.8.0 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      <a href="">BoomStore Ecommerce</a> &copy; 2018 Copyright.
    </div>
  </footer>
  <!-- / footer -->



</div>

<script src="{{ url('assets/admin/js/app.min.js') }}"></script>

</body>

</html>





