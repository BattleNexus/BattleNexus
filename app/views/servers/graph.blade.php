<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load('visualization', '1', {packages: ['corechart']});
</script>
<script type="text/javascript">
	function drawVisualization() {
		// Create and populate the data table.
		var data = google.visualization.arrayToDataTable([
			['x', 'Players Online'],
			['00',   20],
			['01',   10],
			['02',   11],
			['03',   9],
			['04',   6],
			['05',   7],
			['06',   9],
			['07',   10],
			['08',   20],
			['09',   30],
			['10',  31],
			['11',  32],
			['12',  29],
			['13',  28],
			['14',  30],
			['15',  35],
			['16',  40],
			['17',  40],
			['18',  30],
			['19',  35],
			['20',  29],
			['21',  31],
			['22',  32],
			['23',  27]
		]);

		// Create and draw the visualization.
		new google.visualization.LineChart(document.getElementById("playerGraph")).
			draw(data, {
				curveType: "function",
				width: "74.35897435897436%",
				chartArea: {width: '95%', height: '80%'},
				height: 300,
				vAxis: {maxValue: 40, textStyle: {color: "#999999"}},
				backgroundColor: { fill:'transparent' },
				legend : {position: "none"},
				hAxis: {textStyle: {color: "#999999"}}
			}
		);
	}
	google.setOnLoadCallback(drawVisualization);
</script>