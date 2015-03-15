<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/bootstrap.min.css') }}">

    <!-- Loading Flat UI -->
    <link href="{{ asset('css/flat-ui.css') }}" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Select2 -->
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<header>
		<nav class="navbar navbar-inverse navbar-lg navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#"><i class="fa fa-heartbeat"></i> Blood.af</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	          	<li><a href="">About</a></li>
	          	<li><a href="">Contact</a></li>
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	          	<li><a href=""><i class="fa fa-"></i> &nbsp; Sign Up to Donate</a></li>
	          	<li><a href=""><i class="fa fa-sign-in"></i> &nbsp;Login</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	</header>
    @yield('content')


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/vendor/video.js') }}"></script>
    <script src="{{ asset('js/flat-ui.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('js/select2.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}"></script>

  </body>
</html>
