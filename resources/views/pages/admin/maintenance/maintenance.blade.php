@section('page-title')
	Maintenance
@stop

@extends('admin-base')

@section('body')

	<style type="text/css">
		.bg-mid {
			background-color: #9a2f9b;
			color: #ffffff;
			
		}
		 @media screen and (min-width: 768px) {
        .modal-dialog {
          width: 900px; /* New width for default modal */
        }

	</style>
		
<div>
	<!--3 maintenance items-->		
	<div class="container-fluid bg-mid text-col"><!-- Three columns of text below the carousel -->
	    <div class="text-center">
	    	<h1>Maintenance Area</h1>
	    	<p>
	    		Create, update, delete and modify your products
	    	</p>
	    </div>  
			<div class="row">
		        <div class="col-md-4"><center>
		          <img class="img-circle" src="/img/bou2.jpg" style="background-color: #ffffff" alt="events" width="265" height="250">
		          <h2>Flowers</h2>
		          <p>Definition. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
		          <p><a class="btn btn-default" href="{{action('MaintenanceController@flowers')}}" role="button">Modify &raquo;</a></p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-md-4"><center>
		          <img class="img-circle" src="/img/bou2.jpg" style="background-color: #ffffff" alt="events" width="265" height="250">
		          <h2>Bouquets</h2>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.</p>
		          <p><a class="btn btn-default" href="{{action('MaintenanceController@bouquets')}}" role="button">Modify &raquo;</a></p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-md-4"><center>
		          <img class="img-circle" src="/img/bou2.jpg" style="background-color: #ffffff" alt="events" width="265" height="250">
		          <h2>Events</h2>
		          <p>Definition. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven</p>
		          <p><a class="btn btn-default" href="{{action('MaintenanceController@events')}}" role="button">Modify &raquo;</a></p>
		        </div><!-- /.col-lg-4 -->
	      	</div>
		</div>

	<!--Maintenance item area-->
	
		<hr>
		
</div>
@stop
