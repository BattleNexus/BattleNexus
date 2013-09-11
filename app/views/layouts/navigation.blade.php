<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ URL::route('home') }}">BattleNexus</a>
		</div>

		<div class="collapse navbar-collapse" id="main-nav">
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::route('home') }}">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Servers <b class="caret"></b></a>
					<ul class="dropdown-menu">
						@foreach(Cache::get('servers') as $server)
							<li><a href="{{ URL::route('server.show', $server->getSlug()) }}">{{ $server->getName() }}</a></li>
						@endforeach
					</ul>
				</li>
				<li class="navbar-text">Route: <span class="text-warning"> {{ Route::currentRouteName() }} </span></li>
			</ul>
			<a href="{{ URL::route('user.create') }}" class="ladda-button navbar-btn btn btn-primary pull-right" data-style="slide-up">Sign Up</a>
			<a href="{{ URL::route('user.login') }}" class="ladda-button navbar-btn btn btn-link pull-right" data-style="slide-up">Sign In</a>
		</div>
	</div>
</nav>
<?php
;