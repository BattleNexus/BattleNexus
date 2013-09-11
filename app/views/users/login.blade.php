@section('title')
Login
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<fieldset>
						<legend>Sign In</legend>
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
						{{ Form::open(array('url' => '/login', 'class' => 'form-horizontal')) }}
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
							<div class="col-lg-offset-3 col-lg-9">
								<label class="checkbox">
									{{ Form::checkbox('rememberme', Input::input('rememberme')) }} Remember Me
								</label>
							</div>
						</div>
						<button type="submit" name="submit" class="ladda-button btn btn-primary btn-block" data-style="slide-up">Sign in</button>
						{{ Form::close() }}
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection