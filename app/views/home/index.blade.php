@section('title')
Home
@endsection

@section('content')
<div class="row">
	<div class="col-sm-8">
		<div class="panel">
			<div class="panel-body text-center">
				<img class="img-responsive" src="{{ URL::asset('img/battlenexus_big.png') }}">
				<h2>&lt;-- Insert text here --&gt;</h2>
			</div>
		</div>
		<div id="articles">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="panel-title">Welcome to BattleNexus.</a>
				</div>
				<div class="panel-body">
					<h3>Integer elementum massa</h3>
					<p>Proin ut quam eros. Donec sed lobortis diam. Nulla nec odio lacus. Quisque porttitor egestas dolor in placerat. Nunc vehicula dapibus ipsum. Duis venenatis risus non nunc fermentum dapibus. Morbi lorem ante, malesuada in mollis nec, auctor nec massa. Aenean tempus dui eget felis blandit at fringilla urna ultrices. Suspendisse feugiat, ante et viverra lacinia, lectus sem lobortis dui, ultricies consectetur leo mauris at tortor. Nunc et tortor sit amet orci consequat semper. Nulla non fringilla diam.  </p>

					<h3>Donec malesuada vehicula</h3>
					<p>Proin ut quam eros. Donec sed lobortis diam. Nulla nec odio lacus. Quisque porttitor egestas dolor in placerat. Nunc vehicula dapibus ipsum. Duis venenatis risus non nunc fermentum dapibus. Morbi lorem ante, malesuada in mollis nec, auctor nec massa. Aenean tempus dui eget felis blandit at fringilla urna ultrices. Suspendisse feugiat, ante et viverra lacinia, lectus sem lobortis dui, ultricies consectetur leo mauris at tortor. Nunc et tortor sit amet orci consequat semper. Nulla non fringilla diam.  </p>
				</div>
				<div class="panel-footer">
					<span style="font-size: 8pt">10/09/2013 04:39 GMT - <a href="#" class="moderator">Lavoaster</a> </span> <a href="#" class="pull-right">Read More..</a>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="panel-title">Slipsum!</a>
				</div>
				<div class="panel-body">
					<!-- start slipsum code -->

					<h3>Hold on to your butts</h3>
					<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>

					<h3>I gotta piss</h3>
					<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>

					<h3>I'm serious as a heart attack</h3>
					<p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>

					<h3>No, motherfucker</h3>
					<p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>

					<h3>Hold on to your butts</h3>
					<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>

					<!-- please do not remove this line -->

					<div style="display:none;">
						<a href="http://slipsum.com">lorem ipsum</a></div>

					<!-- end slipsum code -->

				</div>
				<div class="panel-footer">
					<span style="font-size: 8pt">10/09/2013 04:39 GMT - <a href="#" class="admin">Lavoaster</a> </span> <a href="#" class="pull-right">Read More..</a>
				</div>
			</div>

		</div>
	</div>
	<div class="col-sm-4"">
		<div id="servers">
		@foreach($servers as $server_row)
			@foreach($server_row as $server)
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default server-panel">
						<div class="panel-heading">
							<h3 class="panel-title"><a href="{{ URL::route('server.show', $server->getSlug()) }}">{{ $server->getName() }}</a> <span class="pull-right"><span class="text-success">ONLINE</span> |
									<!--{{ $rand = mt_rand(1, 40) }}-->
									<!--{{ $perc = (($rand / 40 ) * 100) }}-->
									@if($perc > 90)
										<!-- {{ $class = 'text-danger' }} -->
									@elseif($perc > 75)
										<!-- {{ $class = 'text-warning' }} -->
									@else
										<!-- {{ $class = '' }} -->
									@endif
									<span class="{{ $class }}">{{ $rand }}</span>/ 40</span> </h3>
						</div>
						<a href="{{ URL::route('server.show', $server->getSlug()) }}">
							<div class="server-image" style="background-image: url({{ $server->getImageUrl() }})">&nbsp;</div>
						</a>
						<!--<div class="server-image">
							<a href="{{ URL::route('server.show', $server->getSlug()) }}"><img src="{{ $server->getImageUrl() }}"></a>
						</div>-->
						<div class="panel-body">
							<p>{{ $server->getBlurb() }}</p>
						</div>
						<div class="panel-footer">
							IP: <span class="text-primary">server.battlenexus.net</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		@endforeach
		</div>
	</div>
</div>
@endsection