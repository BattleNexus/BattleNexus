@section('title')
{{ $server->getName() }}
@endsection

@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-2 visible-md visible-lg">
				<img class="img-responsive" id="server-image" src="{{ $server->getThumbUrl() }}">
			</div>
			<div class="col-xs-10">
				<div class="row">
					<div class="col-xs-10">
						<h1 id="server-title">{{ $server->getName() }} <small>v1.0</small></h1>
					</div>
					<div class="col-xs-2">
							@if(rand(0,1))
							<h2 class="text-success text-right">Online</h2>
							@else
							<h2 class="text-danger text-right">Offline</h2>
							@endif
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10">
						<p>
							Online Players: <span class="badge">22</span> <br>
							Players online today: <span class="badge">60</span> <br>
							Uptime: <span class="badge">{{ rand(2,31) }} days {{ rand(2,23) }} Hours {{ rand(2,59) }} minutes</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Server News</h4></div>
			<ul class="list-group">
				<li class="list-group-item"><a href="#">Server Updated to 1.6.1</a></li>
				<li class="list-group-item"><a href="#">Server Maintenance</a></li>
				<li class="list-group-item"><a href="#">New Features!</a></li>
				<li class="list-group-item"><a href="#">{{ $server->getName() }} Launched!</a></li>
			</ul>
		</div>
	</div>
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Server Leaderboard</h4></div>
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<th>#</th>
							<th>Player</th>
							<th>Kills <i class="icon-chevron-down icon-white"></i> </th>
							<th>Deaths</th>
							<th>K/D</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>_jeb</td>
							<td>2,586</td>
							<td>1,587</td>
							<td>1.62</td>
						</tr>
						<tr>
							<td>2</td>
							<td>501st_commander</td>
							<td>1,203</td>
							<td>10,278</td>
							<td>0.12</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Notch</td>
							<td>567</td>
							<td>51,856</td>
							<td>0.11</td>
						</tr>
					</tbody>
				</table>
			</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-9">
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Players Online Graph</h4></div>
			<div class="panel-body"><div id="playerGraph">@include('servers.graph')</div></div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Assigned Staff</h4></div>
				<ul class="list-group">
					<li class="list-group-item"><a href="#">Lavoaster</a></li>
					<li class="list-group-item"><a href="#">Hypereddie</a></li>
					<li class="list-group-item"><a href="#">BeMacized</a></li>
					<li class="list-group-item"><a href="#">Wouto1997</a></li>
				</ul>
			</div>
	</div>
</div>
@endsection