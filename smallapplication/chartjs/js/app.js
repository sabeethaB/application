$(document).ready(function(){
	$.ajax({
		url: "freshgrc/smallapplication/chartjs/bargraph.html",
		dataType: "json",
		method: "GET",
		success: function(data) {
			console.log(data);
			var player = [];
			var score = [];

			for(var i in data) {
				player.push("Player" + data[i].playerid);
				score.push(data[i].score);
			}

			var chartdata = {
				labels: player,
				datasets : [
					{
						label: 'Player Score',
						backgroundColor: 'rgb(43, 191, 255)',
						borderColor: 'rgb(43, 191, 255)',
						hoverBackgroundColor: 'rgb(43, 198, 12)',
						hoverBorderColor: 'rgb(43, 198, 12)',
						data: score
					}
				]
			};
			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		} 
	});
});

