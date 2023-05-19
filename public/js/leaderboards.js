window.onload = function () {

	var chart = new CanvasJS.Chart("presidentsContainer", {
		
		animationEnabled: true,
		exportEnabled: true,	
		title:{
			text: "President"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 60, name: "School Aid"},
				{ y: 40, name: "Medical Aid" },
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("vpExternalsContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "Vice President for External Affairs"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
				{ y: 3, name: "Elected Officials" },
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("vpInternalsContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "Vice President for Internal Affairs"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("secretariesContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "Secretary"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
				{ y: 3, name: "Elected Officials" },
				{ y: 7, name: "University" },
				{ y: 22, name: "Other Local Assistance"}
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("treasurersContainer", {
		
		animationEnabled: true,
		exportEnabled: true,	
		title:{
			text: "Treasurer"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
				{ y: 7, name: "University" },
				{ y: 17, name: "Executive" },
				{ y: 22, name: "Other Local Assistance"}
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("auditorsContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "Auditor"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
				{ y: 3, name: "Elected Officials" },
				{ y: 7, name: "University" },
				{ y: 17, name: "Executive" },
				{ y: 22, name: "Other Local Assistance"}
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("piosContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "Public Information Officer"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
				{ y: 3, name: "Elected Officials" },
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("bmsContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "Business Manager"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
				{ y: 3, name: "Elected Officials" },
				{ y: 7, name: "University" }
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("bsitsContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "BSIT Representative"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("bscssContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "BSCS Representative"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
				{ y: 3, name: "Elected Officials" },
				{ y: 7, name: "University" },
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("bsemcsContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "BSEMC Representative"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
				{ y: 3, name: "Elected Officials" },
				{ y: 7, name: "University" },
				{ y: 17, name: "Executive" },
			]
		}]
	});
	chart.render();

	var chart = new CanvasJS.Chart("actsContainer", {
		
		animationEnabled: true,
		exportEnabled: true,
		title:{
			text: "ACT Representative"
		},
		legend:{
			cursor: "pointer",
			itemclick: explodePie
		},
		data: [{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{name}: <strong>{y}%</strong>",
			indexLabel: "{name} - {y}%",
			dataPoints: [
				{ y: 26, name: "School Aid"},
				{ y: 20, name: "Medical Aid" },
				{ y: 5, name: "Debt/Capital" },
			]
		}]
	});
	chart.render();
}
	
function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}	