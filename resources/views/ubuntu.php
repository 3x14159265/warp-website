@extends('app')

@section('title')
  warp-engine - an open-source, realtime push engine.
@endsection

@section('content')
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
@endsection