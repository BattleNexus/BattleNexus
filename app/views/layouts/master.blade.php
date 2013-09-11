<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title') | BattleNexus</title>

		<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/ladda-themeless.min.css') }}" rel="stylesheet">

		<link href="{{ URL::asset('css/battlenexus.css') }}" rel="stylesheet">
	</head>
	<body>
		@section('nav')
			@include('layouts.navigation')
		@show

		<div id="content" class="container">
			@yield('content')
		</div>

		<script src="{{ URL::asset('js/jquery.js') }}"></script>
		<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
		<script src="{{ URL::asset('js/spin.js') }}"></script>
		<script src="{{ URL::asset('js/ladda.js') }}"></script>
		<script src="{{ URL::asset('js/bn.js') }}"></script>

		@yield('js')

	</body>
</html>