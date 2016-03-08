<!DOCTYPE html>
<html>
<head>
	<title>@yield('page-title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="/js/jquery-2.0.0.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link href='/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/footer-distributed-with-address-and-phones.css">
</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="img_responsive">
			<img src="img/banner7.png"  width="100%" height="250"/>
		</div>
		<div class="container-fluid">
			<div class="container navbar-header">
				<a class="img-responsive" href="home.php" style="background: url("img/bou4.png");"></a>
			</div>

			<!--styling the home icon-->
			<style type="text/css">
				.logo {
					 font-size: 30px;
				}
				.logo:hover {
					 font-size: 35px;
					 color: #595959;
				}
				.logo:active {
					 font-size: 35px;
					 color: #595959;
				}

			</style>



			<div class="row collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li {{{ (Request::is('/') ? 'class=active' : '') }}}>
						<a href="{{action('PagesController@home')}}" class="glyphicon glyphicon-home logo pull-right">
						</a>
		 			</li>
					<li {{{ (Request::is('flowers') ? 'class=active' : '') }}}>
						<a href="{{action('PagesController@flowers')}}"><strong>FLOWERS</strong></a>
		  			</li>
		  			<li {{{ (Request::is('bouquets') ? 'class=active' : '') }}}>
						<a href="{{action('PagesController@bouquets')}}"><strong>BOUQUETS</strong></a>
		  			</li>
					<li {{{ (Request::is('events') ? 'class=active' : '') }}}>
						<a href="{{action('PagesController@events')}}"><strong>EVENTS</strong></a>
		  			</li>

				</ul>
			</div>
		</div>
		</nav>
		@yield('home-body')
		@yield('mid-body')
	<!--	@yield('footer')-->


		<footer id='footer'>
		<footer class='footer-distributed'>

			<div class='footer-left'>

				<h3>Flowers<span>N'</span>GiftShop</h3>

				<p class='footer-links'>
					<a href='home.php'>Home</a>
					·
					<a href='#'>Blog</a>
					·
					<a href='#'>Pricing</a>
					·
					<a href='#'>About</a>
					·
					<a href='#'>Faq</a>
					·
					<a href='#'>Contact</a>
				</p>

				<p class='footer-company-name'>FLowerShop &copy; 2016</p>
			</div>

			<div class='footer-center'>

				<div>
					<i class='fa fa-map-marker'></i>
					<p><span>1612 Laon Laan St., Sampaloc, Manila City</span> Metro Manila, Philippines</p>
				</div>

				<div>
					<i class='fa fa-phone'></i>
					<p>09166541960 / 09999180280 / 714-6119</p>
				</div>

				<div>
					<i class='fa fa-envelope'></i>
					<p><a href='https://plus.google.com/109795111134512798475/posts'>info@flowersngiftshop.com</a></p>
				</div>

				<div>
					<i class='fa fa-facebook'></i>
					<p><a href='https://www.facebook.com/Flowersngiftshop/'>www.facebook.com/Flowersngiftshop</a></p>
				</div>

			</div>

			<div class='footer-right'>

				<p class='footer-company-about'>
					<span>WE CARE. YOUR SATISFACTION IS GUARANTEED HERE!</span>
					Flowers n' GiftShop is efficient flowers & gift delivery service ships high quality flowers & gifts to ANYWHERE IN THE PHILIPPINES. When you send flowers online from us, rest assured that your special someone will receive the freshest and loveliest flowers / quality gifts - no matter how far they may be.
				</p>
				<!--
				<div class='footer-icons'>

					<a href='#'><i class='fa fa-facebook'></i></a>
					<a href='#'><i class='fa fa-twitter'></i></a>
					<a href='#'><i class='fa fa-linkedin'></i></a>
					<a href='#'><i class='fa fa-github'></i></a>

				</div>
				-->
			</div>
		</footer>
		</footer>

		
</body>
</html>
