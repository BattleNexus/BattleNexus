<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load('visualization', '1', {packages: ['corechart']});
</script>
<script type="text/javascript">
	function drawVisualization() {
		// Create and populate the data table.
		var data = google.visualization.arrayToDataTable([
			['x', 'Players Online'],
			['12 am',   20],
			['1 am',   10],
			['2 am',   11],
			['3 am',   9],
			['4 am',   6],
			['5 am',   7],
			['6 am',   9],
			['7 am',   10],
			['8 am',   20],
			['9 am',   30],
			['10 am',  31],
			['11 am',  32],
			['12 pm',  29],
			['1 pm',  28],
			['2 pm',  30],
			['3 pm',  35],
			['4 pm',  40],
			['5 pm',  40],
			['6 pm',  30],
			['7 pm',  35],
			['8 pm',  29],
			['9 pm',  31],
			['10 pm',  32],
			['11 pm',  27]
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