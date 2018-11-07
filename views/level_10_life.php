
<script type="text/javascript">
	
	$(function(){

		$("#chartContainer").CanvasJSChart({
			title: {
				text: "Level 10 Life"
			},
			axisY: {
				maximum: 10
			},
			data: [{
				type: "column",
				dataPoints: [
					{ y: 6, label: "Family & Friends"},
					{ y: 8, label: "Development" },
					{ y: 5, label: "Wellness" },
					{ y: 4, label: "Relationships" },
					{ y: 6, label: "Environment" },
					{ y: 6, label: "Contribution" },
					{ y: 8, label: "Career" },
					{ y: 7, label: "Spending" },
					{ y: 5, label: "Recreation" },
					{ y: 2, label: "Spirituality" }
				]
			}]
		});

	});

</script>
<div id="chartContainer" style="height: 400px; max-width: 920px; margin: 0px auto;"></div>