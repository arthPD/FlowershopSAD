
@section('page-title')
	Admin
@stop

@extends('admin-base')

@section('body')
	<style type="text/css">
		.something {
			
		}
	</style>

		
	<Modal
		<div class="modal show" id="modal-id">
			<div class="modal-dialog">
				<div class="modal-content col-md-12">
					<div class="modal-header">
						<h4 class="modal-title">Administrator Login</h4>
					</div>
					<div class="modal-body">
						<form class="container col-md-12" action="{{ action('SessionsController@store' )}}" method="POST" role="form">
						{{csrf_field()}}
							<div class="form-group text-center">
								<label>Username</label>
								<input type="text" class="form-control" id="username" placeholder="username">
								<label>Password</label>
								<input type="password" class="form-control" id="password" placeholder="password"></input>
								<hr>
								<input type="submit" value="Log In" id="login-btn" class="btn btn-primary"></input>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	
@stop
		

