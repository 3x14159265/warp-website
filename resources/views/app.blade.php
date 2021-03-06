<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="warp-engine is an open-source, realtime push engine, written in scala, build on play and akka. It's fully reactive and scalable.">
    <meta name="author" content="david pichsenmeister">
    <link rel="icon" sizes="512x512" href="/img/warp-logo-512x512.png">
    <link rel="icon" sizes="128x128" href="/img/warp-logo-128x128.png">
    <link rel="apple-touch-icon" sizes="128x128" href="/img/warp-logo-128x128.png">

    <title>@yield('title', 'warp-engine - an open-source, realtime push engine.')</title>

    <!-- Bootstrap core CSS -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/css/theme.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand warp-font" href="#">warp&nbsp;-engine</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/docs/getting-started">Documentation</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SDKs <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/sdk/javascript">JavaScript SDK</a></li>
                <li><a href="/sdk/chrome">Chrome Extension</a></li>
              </ul>
            </li>
            <li><a href="https://www.github.com/3x14159265/warp-engine">Github</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      @yield('content')

    </div> <!-- /container -->
    
    <footer class="footer">
      <div class="container">
	<ul>
	  <li>
	    <a href="https://www.github.com/3x14159265/warp-engine">View on Github</a>
	   </li>
	  <li>
	    Code licensed under <a href="http://www.gnu.org/copyleft/gpl.html">GPL v3.0</a>, 
	    documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.
	  </li>
	  <li>
	     &copy; 2014
	     <?php 
	      $year = date("Y");
	      if($year > 2014) {
		echo " - $year";
	      }
	     ?> 
	     by david pichsenmeister (<a href="https://www.twitter.com/3x14159265">@3x14159265</a>)
	  </li>
	  <li>
	    <a href="http://www.pichsenmeister.com">www.pichsenmeister.com</a>
	  </li>
	</ul>
      </div>
    </footer>

    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>