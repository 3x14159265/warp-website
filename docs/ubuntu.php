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
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/css/prism.css" rel="stylesheet">
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
          <a class="navbar-brand warp-font" href="/">warp&nbsp;-engine</a>
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
	      <li><a href="/docs/getting-started">Getting Started</a></li>
	      <li><a href="/docs/localhost">Installation (localhost)</a></li>
	      <li class="active"><a href="/docs/ubuntu">Installation (Ubuntu)</a></li>
	      <li><a href="/docs/authorization">Client Authorization</a></li>
	    </ul>
	  </div>
	</div> <!-- /side menu -->
	<div class="col-md-9">
	  <div class="page-header">
	    <h1 class="no-margin">Installation (Ubuntu)</h1>
	  </div>
	  
	  <div class="row row-margin">
	      <div class="col-md-12">
		  <p>Follow these instructions for <strong>Ubuntu 14.04 x64</strong>. While not tested yet, it should also work with previous Ubuntu versions.</p>
	      </div>
	  </div>
	  
	  <div class="row">
	      <div class="col-md-12">
		  <p><strong>1. update apt repository and install git</strong></p>
		  <pre><code class="language-bash">sudo apt-get update && sudo apt-get install git</code></pre>
		  
		  <p class="p-margin"><strong>2. clone git repository via https</strong></p>
		  <pre><code class="language-bash">git clone https://github.com/3x14159265/warp-engine.git</code></pre>
		  
		  <p class="p-margin"><strong>3. run init script</strong></p>
		  <pre><code class="language-bash">sh ~/warp-engine/init.sh</code></pre>
		  
		  <p class="p-margin"><strong>4. start warp-engine</strong> (this will take a few minutes. better grab a coffee. when everything works fine, the server will start. you can escape server logging with <code class="language-bash">ctrl+d</code>)</p>
		  <pre><code class="language-bash">warp-start</code></pre>
		  
		  <p class="p-margin"><strong>5. install the monitor cronjob to monitor and restart the warp-engine, if it's down</strong></p>
		  <pre><code class="language-bash">warp-monitor</code></pre>
	      
	      </div>
	  </div>
	  
	  <div class="row row-margin">
	      <div class="col-md-12">
		  <h3>some other helpful commands:</h3>
		  <ul class="code-list">
		    <li>
		      <code class="language-bash">warp-stop</code> stops the warp-engine
		    </li>
		    <li>
		      <code class="language-bash">warp-start</code> starts the warp-engine
		    </li>
		    <li>
		      <code class="language-bash">warp-restart</code> restarts the warp-engine
		    </li>
		    <li>
		      <code class="language-bash">warp-deploy</code> fetches master from github and starts warp-engine
		    </li>
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

    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/js/prism.js"></script>
  </body>
</html>