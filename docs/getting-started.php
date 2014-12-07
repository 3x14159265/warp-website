<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="warp-engine is an open-source, realtime push engine, written in scala, build on play and akka. It's fully reactive and scalable.">
    <meta name="author" content="david pichsenmeister">
    <link rel="icon" href="favicon.ico">

    <title>warp-engine - an open-source, realtime push engine.</title>

    <!-- Bootstrap core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/prism.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    
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
          <a class="navbar-brand" href="/">warp-engine</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li class="active"><a href="/docs/getting-started">Documentation</a></li>
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
      <div class="row">
	<div class="col-md-3">
	  <div class="sidebar-header">Content</div>
	  <div class="sidbar-nav">
	    <ul class="nav nav-pills nav-stacked">
	      <li class="active"><a href="/docs/getting-started">Getting Started</a></li>
	      <li><a href="/docs/localhost">Installation (localhost)</a></li>
	      <li><a href="/docs/ubuntu">Installation (Ubuntu)</a></li>
	      <li><a href="/docs/authorization">Client Authorization</a></li>
	    </ul>
	  </div>
	</div> <!-- /side menu -->
	<div class="col-md-9">
	  <div class="page-header">
	    <h1 class="no-margin">Getting Started</h1>
	  </div>
	  
	  <div class="row row-margin">
	      <div class="col-md-12"> 
		  The setup is mostly automated and usually takes about 10 minutes, so you don't really have to care about this. The setup instruction covers the setup for an Ubuntu 14.04 x64 server. The easiest way to setup is on a $20 droplet of <a href="https://www.digitalocean.com" target="_blank">digitalocean</a>. The install scripts will then configure everything for you.
		</div>  
	  </div>
	  
	  <div class="row"> 
		<div class="alert alert-info" role="alert">
		    <strong>Important!</strong> If you don't have a digitalocean account, you can signup via my <a href="https://www.digitalocean.com/?refcode=06560b6c098a"><strong>referral link</strong></a> 
		    to get $10 credits to start with.
		</div>
	  </div>
	  
	  <div class="row">
	      <div class="col-md-12"> 
		   <p>At the moment, warp-engine only provides a JavaScript SDK and a Chrome Extension to play around ;) You can expect more SDKs (like Android, IOS, PHP, Scala, Java) soon.</p>
		   <ul>
		      <li><a href="/sdk/javascript">JavaScript SDK</a></li>
		      <li><a href="/sdk/chrome">Chrome Extension</a></li>
		   </ul>
		   
		   <p>
		      <em><strong>Note: </strong> The JavaScript SDK depends on WebSocket support. Please check browser support <a href="http://caniuse.com/#feat=websockets" target="_blank">here</a></em>.
		   </p>
	      </div>  
	  </div>
	  
	  <div class="row row-margin">
	      <div class="col-md-12">
		  <h2>Versions</h2>
		  <p>Since it is the first version, I only start with an alpha snapshot. Stable versions are coming soon...</p>
		  
		  <h3>Stable</h2>
		  <ul>
		    <li>-</li>
		  </ul>
		  
		  <h3>Snapshots</h2>
		  <ul>
		    <li><a href="">0.0.1-alpha</a></li>
		  </ul>
	      </div>
	  </div>
	</div><!-- /content -->
      </div><!-- /row -->
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

    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/prism.js"></script>
  </body>
</html>