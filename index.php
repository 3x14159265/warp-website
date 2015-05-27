<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="warp-engine is an open-source, realtime push engine, written in scala, build on play and akka. It's fully reactive and scalable.">
    <meta name="author" content="david pichsenmeister">
    <link rel="icon" sizes="512x512" href="img/warp-logo-512x512.png">
    <link rel="icon" sizes="128x128" href="img/warp-logo-128x128.png">
    <link rel="apple-touch-icon" sizes="128x128" href="img/warp-logo-128x128.png">

    <title>warp-engine - an open-source, realtime push engine.</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
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

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1 class="warp-font">warp&nbsp;-engine</h1>
        <p>warp-engine is an open-source, realtime push engine, written in <a href="http://www.scala-lang.org">scala</a>, build on <a href="https://playframework.com/">play</a> and <a href="http://akka.io/">akka</a>. It's fully reactive and scalable.</p>
        <p><a href="/docs/getting-started" class="btn btn-primary btn-lg" role="button">Getting started &raquo;</a></p>
      </div>
     
      <div class="page-header">
        <h2>Features</h2>
        <p>
	  
        </p>
      </div>
      
      <div class="row">
	<div class="col-md-4">
	  <h3>Reactive</h3>
	  <p>
	    warp-engine is build on <a href="http://www.typesafe.com/">TypeSafe's</a> reactive platform, <a href="https://playframework.com">play</a> and <a href="http://akka.io">akka</a>. So it's responsive, 
	    resilient, elastic and message-driven.<br/>
	    You may also want to checkout the <a href="http://www.reactivemanifesto.org/">Reactive Manifesto</a>.
	  </p>
	</div>
	
	<div class="col-md-4">
	  <h3>Easy to setup</h3>
	  <p>
	    The setup is mostly automated and usually takes about 10 minutes, so you don't have to worry about this. The setup instruction covers the setup for an Ubuntu 14.04 x64 server. I provide an install scripts, which will do most of the configuration for you.
	  </p>
	</div>
	
	<div class="col-md-4">
	  <h3>SDKs</h3>
	  <p>
	    warp-engine provides a JavaScript SDK (see <a href="/sdk/javascript">JavaScript SDK</a> for details).<br />
	    There is also a Chrome Extension, so you can also get push notifications on your desktop (see <a href="/sdk/chrome">Chrome Extension</a> for details). <br />
	    I'm also working on an Android SDK right now. It will (hopefully) be available soon.
	  </p>
	</div>
	
	
      </div>
 

      <div class="page-header">
        <h2>Who is using warp-engine?</h2>
      </div>
      
      <div class="row row-margin">
	<div class="col-md-12">
	  (Ping me on twitter (<a href="https://www.twitter.com/3x14159265">@3x14159265</a>), if you are using warp-engine. I'm happy to add you to the list.)
	</div>
      </div>
      
      <div class="row">
	<div class="col-md-3">
	  <a href="https://www.orat.io" target="_blank"><img src="http://www.dimocom.com/img/oratio.png" alt="orat.io"></a>
	</div>
      </div>

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

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>