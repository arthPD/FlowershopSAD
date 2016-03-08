
@section('page-title')
	Home
@stop

@extends('home-base')

<style type="text/css">
	.something {

	}
</style>

@section('home-body')
	<!--Carousel-->
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item">
					<img src="/img/bou1.png">
					<div class="container">
						<div class="carousel-caption">
							<h1>Example headline.</h1>
							<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
							
						</div>
					</div>
				</div>
				<div class="item">
					<img src="/img/bou4.png">
					<div class="container">
						<div class="carousel-caption">
							<h1>Another example headline.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							
						</div>
					</div>
				</div>
				<div class="item active">
					<img src="/img/bou3.jpg">
					<div class="container">
						<div class="carousel-caption">
							<h1>One more for good measure.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div><!--carousel-->
@stop
@section('mid-body')
	<style type="text/css">
		.bg-mid {
			background-color: #9a2f9b;
		}
		.text-col {
			color: #ffffff;
		}
	</style>
<hr>
	<div class="container-fluid bg-mid text-col"><!-- Three columns of text below the carousel -->
	    <div class="text-center">
	    	<h1>Our Products</h1>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    	</p>
	    </div>  
	      <div class="row">
	        <div class="col-lg-4"><center>
	          <img src="/img/bou1.jpg" class="img-circle" style="height: 270px; width: 300px; margin: 15px">
	          <h2>Buy Flowers</h2>
	          <p>Definition.</p>
	          <p><a class="btn btn-default" href="{{action('PagesController@flowers')}}" role="button">Start Shopping &raquo;</a></p>
	        </div><!-- /.col-lg-4 -->
	        <div class="col-lg-4"><center>
	          <img src="/img/bou1.jpg" class="img-circle" style="height: 270px; width: 300px; margin: 15px">
	          <h2>Buy Bouquets</h2>
	          <p>Definition.</p>
	          <p><a class="btn btn-default" href="{{action('PagesController@bouquets')}}" role="button">Start Shopping &raquo;</a></p>
	        </div><!-- /.col-lg-4 -->
	        <div class="col-lg-4"><center>
	          <img src="/img/bou1.jpg" class="img-circle" style="height: 270px; width: 300px; margin: 15px">
	          <h2>Flowers for Events</h2>
	          <p>Definition.</p>
	          <p><a class="btn btn-default" href="{{action('PagesController@events')}}" role="button">Start Shopping &raquo;</a></p>
	        </div><!-- /.col-lg-4 -->
	      </div><!-- /.row -->
    </div>
@stop

