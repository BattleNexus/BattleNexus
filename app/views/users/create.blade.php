@section('title')
Register
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<fieldset>
						<legend>Sign Up</legend>
						@if(Session::has('errors'))
						<div class="alert alert-danger">
							Whoa there, looks like you made a whoopsie down below.
							{{-- var_dump(Session::get('errors')) --}}
							<ul>
								@foreach(Session::get('errors')->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						{{ Form::open(array('route' => 'user.store', 'class' => 'form-horizontal')) }}
						<div class="form-group">
							<label class="col-lg-3 control-label" for="email">Username</label>
							<div class="col-lg-9">
								{{ Form::text('username', Input::input('username'), ['class' => 'form-control', 'placeholder' => 'Joey']) }}
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="email">Email</label>
							<div class="col-lg-9">
								{{ Form::text('email', Input::input('email'), ['class' => 'form-control', 'placeholder' => 'joey@example.com']) }}
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="password">Password</label>
							<div class="col-lg-9">
								{{ Form::password('password', ['class' => 'form-control', 'placeholder' => '***********']) }}
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="password_confirmation">Password Confirmation</label>
							<div class="col-lg-9">
								{{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '***********']) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-3 col-lg-9">
								<p>The Big Points from the ToS:</p>
								<ul>
									<li>Don't do anything illegal</li>
									<li>Don't post anything sexual or violent</li>
									<li>You must be 13+</li>
									<li>We have final say on almost anything</li>
									<li>We can change the Terms of Service at any time, which become effective 7 days after being published.</li>
								</ul>
							</div>
							<div class="col-lg-offset-3 col-lg-9">
								<label class="checkbox">
									<input type="checkbox" name="tos" value="1"> Do you agree to the <a href="#termsOfService" data-toggle="modal">Terms of Service</a>
								</label>
							</div>
						</div>
						<button type="submit" name="submit" class="ladda-button btn btn-primary btn-block" data-style="slide-up">Come on in!</button>
						{{ Form::close() }}
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="termsOfService" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Terms of Service</h4>
			</div>
			<div class="modal-body">
				WE OWN YOUR SOUL
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endsection