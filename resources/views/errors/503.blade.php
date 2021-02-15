<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>
         <link href="{{ url('errors/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('errors/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('errors/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ url('errors/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('errors/css/style-responsive.css') }}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
     <body class="body-500">

    <div class="container">

      <section class="error-wrapper">
          <i class="fa fa-unlink (alias)" style="color: #fff; font-size: 250px;"></i><br><br><br><br>
          <h1>Ouch!</h1>
          <h2><div class="title">Be right back.</div></h2>
          <p class="page-500">Looks like Something went wrong. <a href="{{ url('/') }}">Return Home</a></p>
      </section>

    </div>
    </body>
</html>
