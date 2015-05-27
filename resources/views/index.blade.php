@extends('app')

@section('title')
	warp-engine - an open-source, realtime push engine.
@endsection

@section('content')
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
	  <a href="https://www.orat.io" target="_blank"><img src="https://orat.io/Broadcasts/img/logo.png" alt="orat.io"></a>
	</div>
      </div>
@endsection
