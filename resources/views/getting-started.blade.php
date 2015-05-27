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
  @endsection