<!DOCTYPE html>
<html>
<head>
<title>@yield('page-title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--<script type="text/javascript" src="/js/jquery.validate.js"></script>-->

<script type="text/javascript" src="/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<link href='/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href='/css/metisMenu.min.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/footer-distributed-with-address-and-phones.css">

	


</head>
<body>
	
	<nav class="navbar navbar-default" role="navigation">
		<div class="img_responsive">
			<img src="/img/banner7.png"  width="100%" height="250"/>
		</div>
		<div class="container-fluid">
			<div class="container navbar-header">
				<a class="img-responsive" href="home.php" style="background: url("/img/bou4.png");"></a>
			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li {{{ (Request::is('maintenance') ? 'class=active' : '') }}}>
						<a href="{{action('PagesController@maintenance')}}"><strong>MAINTENANCE</strong></a>
		  			</li>
		  			<li {{{ (Request::is('inventory') ? 'class=active' : '') }}}>
						<a href="{{action('PagesController@inventory')}}"><strong>INVENTORY</strong></a>
		  			</li>
					<li {{{ (Request::is('report') ? 'class=active' : '') }}}>
						<a href="{{action('PagesController@report')}}"><strong>REPORT</strong></a>
		  			</li>

				</ul>
			</div>
		</div>
		</nav>
	@yield('body')
	@yield('footer')
</body>
</html>