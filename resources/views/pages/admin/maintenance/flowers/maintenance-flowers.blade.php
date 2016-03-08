@section('page-title')
	Flower Maintenance
@stop
@extends('admin-base')

	
@section('body')

	<style type="text/css">
		.bg-mid {
			background-color: #9a2f9b;
			color: #ffffff;
			border-color: #9a2f9b;
		}
		 @media screen and (min-width: 768px) {
        .modal-dialog {
          width: 600px; /* New width for default modal */

        }
	</style>
	<?php 
		$image = "/img/default-image.jpg";
		
	?>

	<div class="panel-group container-fluid">
	  <div class="panel panel-default">
	    <div class="panel-heading" style="background-color: #9a2f9b; color: white">
	      <h4 class="panel-title"><a data-toggle="collapse" href="#collapse1">Add New Flower</a></h4>

	    </div>
	    <div id="collapse1" class="">
		    @if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <strong>Input Error!</strong><br><br>
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
			@endif
	 
	      <div class="panel-body">
			<form enctype="multipart/form-data" class="container-fluid" action="/maintenance-flowers" method="POST" role="form" style="width:90%">
				{{csrf_field()}}
				<div class="row">
					<div class="col-md-4 text-center" style="padding-top: 10px">
						<img id="img" src= "{{$image}}" class="img-circle" id="selectedimage" style="height: 250px; width: 280px; margin: 15px">
						<input id="upload" onchange="readURL(this)" type="file" name="file" id="file" class="center-block btn btn-default" accept="image/*"></input>
						<input type="hidden" value="{{ csrf_token() }}" name="_token"></input>
					</div>

					<h2></h2><br/>
					<br/>
					<div class="col-md-8">
						<hr>
						@if ($errors->has('flowername'))
							<div class="form-group has-error has-feedback" style="padding-top: 5px">
								<label >Flower Name:</label>
								 <input type="text" class="form-control" placeholder="{{$errors->first('flowername')}}"name="flowername">
								 <span class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>							 
						@else
							<div class="form-group" style="padding-top: 5px">
								<label>Flower Name:</label>
								 <input type="text" class="form-control" placeholder="eg: Rose, Sunflower"name="flowername">
							</div>	
						@endif
						
						@if ($errors->has('flowerdesc'))
							<div class="form-group has-error has-feedback" style="padding-top: 5px">
							<label>Flower Description:</label>
							<input type="text" class="form-control" placeholder="{{$errors->first('flowerdesc')}}" name="flowerdesc" id="flowerdesc">
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						</div>
						@else
							<div class="form-group" style="padding-top: 5px">
								<label>Flower Description:</label>
								<input type="text" class="form-control" placeholder="Color, class, type" name="flowerdesc" id="flowerdesc"></input>
							</div>
						@endif

						@if ($errors->has('flowerdesc'))
							<div class="form-group has-error has-feedback" style="padding-top: 5px">
								<label>Flower Price:</label>
								<input type="text" class="form-control" placeholder="{{$errors->first('flowerprice')}}" name="flowerprice" id="flowerprice"></input>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>
						@else
							<div class="form-group" style="padding-top: 5px">
								<label>Flower Price:</label>
								<input type="text" class="form-control" placeholder="eg: P250.50" name="flowerprice" id="flowerprice"></input>
							</div><hr>
						@endif
						
						<div class="form-group" style="padding-top: 5px">
							<input id="add" name = "add" type="submit" class="btn btn-primary pull-right" value="Add"></input>
						</div>

					</div>
				</div>
			</form>
		 </div>
	    </div>
	  </div>
	</div>

	<!--Show all flowers-->
	<div class="panel panel-default">
		<div class="hanel-heading">
			<div class="panel-title">
				<h2 class="text-center">List of all Flowers</h2>
			</div>
		</div>
		<div class="panel-body">
			<div class="containe-fluid text-center">
				<img src="/img/Divider3.png" class="img-responsive center-block" style="width: 100%; height:5%">
					@foreach ($flowers as $flower)
						<article class="col-md-4">
							<h2 type="button "class="text-center"><a href="maintenance-flowers/{{$flower->id}}/show">{{ $flower->name }}</a></h2>
							<img src="/img/{{ $flower->fimage }}" alt="{{ $flower->name }}" style="height:250px; width:250px; margin: 10px" class="text-center img-circle">
							<div class="body text-center">
								{{ $flower->desc }}
								<br/>Price P{{ $flower->price }}
							</div>
						</article>
					@endforeach		
			</div>
		</div>
	</div>


@stop

<script> 
//update image selection
	function readURL(input) {
	    var url = input.value;
	    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
	    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#img').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }else{
	         $('#img').attr('src', '/img/default-image.jpg');
	    }
	}
</script>

