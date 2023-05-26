window.onload = function () {
	function updateChart(chartId, positionId) {
		// var csrfToken = $('meta[name="csrf-token"]').attr('content');
		// $.ajaxSetup({
		// 	headers: {
		// 	  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		// 	}
		//   });
		$.ajax({
			
			url: '/leaderboard/' + positionId,
			type: 'GET',
			// headers: {
			// 	'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
			//   },
			success: function (data) {
				
				var chart = new CanvasJS.Chart(chartId, {
					
					// Configure the chart options
					// ...
					animationEnabled: true,
					exportEnabled: true,
					axisX: {
						interval: 1
					},
					axisY2: {
						interlacedColor: "rgba(1,77,101,.2)",
						gridColor: "rgba(1,77,101,.1)",
						title: "Votes",
					},
					data: [{
						type: "bar",
						name: "candidates",
						axisYType: "secondary",
						dataPoints: data,
					}]
				});
				chart.render();
			},
			error: function () {
				console.log(chartId, positionId);
			}
		});
	}
	
	// Call the updateChart function for each chart, providing the chart ID and position ID
	updateChart('presidentsContainer', 1);
	updateChart('vpExternalsContainer', 2);
	updateChart('vpInternalsContainer', 3);
	updateChart('secretariesContainer', 4);
	updateChart('treasurersContainer', 5);
	updateChart('auditorsContainer', 6);
	updateChart('piosContainer', 7);
	updateChart('bmsContainer', 8);
	updateChart('bsitsContainer', 9);
	updateChart('bscssContainer', 10);
	updateChart('bsemcsContainer', 11);
	updateChart('actsContainer', 12);

}
	
// function explodePie (e) {
// 	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
// 		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
// 	} else {
// 		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
// 	}
// 	e.chart.render();

// }	