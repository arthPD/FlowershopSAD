@section('page-title')
	Flower Maintenance
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
          width: 700px; /* New width for default modal */

        }
	</style>


	<div class="panel-group container-fluid">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <h4>Edit Flower</h4>
	      </h4>
	    </div>
	    <div class="panel">
	      <div class="panel-body">
			<form enctype="multipart/form-data" class="container col-md-12" action="/maintenance-flowers/{{$flower->id}}" method="POST" role="form">
			<input type="hidden" name="_method" value="PATCH">
			

				<div class="row">
					<div class="col-md-4 text-center" style="padding-top: 10px">
						<img id="img" src= "/img/{{$flower->fimage}}" class="img-circle" id="selectedimage" style="height: 250px; width: 280px; margin: 15px">
						<input id="upload" onchange="readURL(this)" type="file" name="file" id="file" class="center-block btn btn-default" accept="image/*"></input>
						<input type="hidden" value="{{ csrf_token() }}" name="_token"></input>
					</div>
						<div class="form-group col-md-8" style="padding-top: 50px">
							<label>Flower Name:</label>
							<input type="text" class="form-control" value="{{$flower->name}}" id = "flowername" name="flowername">
							<label>Flower Description:</label>
							<input type="text" class="form-control" value="{{$flower->desc}}" name="flowerdesc" id="flowerdesc"></input>
							<label>Flower Price:</label>
							<input type="text" class="form-control" value="{{$flower->price}}" id="flowerprice" name="flowerprice"></input>
										<hr>
							<input id="add" name = "add" type="submit" class="btn btn-info pull-right" value="Save Changes"></input>
										<!--{{ var_dump('$errors') }}-->
						</div>
					</div>
				</div>
			</form>
		 </div>
	    </div>
	  </div>
	</div>



@stop

<script> //update image selection
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
         $('#img').attr('src', '/assets/no_preview.png');
    }
}
</script>