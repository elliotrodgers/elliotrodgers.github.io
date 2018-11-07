
<style type="text/css">

	.element-container {
		width:100%;
		height:500px;
		border-style: solid;
		border-color: black;
		padding:10px;
	}
	
	.element {
		height: 100px;
		width: 100px;
		border-radius: 50%;
		border-style: solid;
		border-width: 5px;
		display: inline-block;
		text-align: center;
		font-size: 20px;
		font-weight: bold;
		color: white;
		display: table-cell;
		vertical-align: middle;
		cursor: -webkit-grab;
		cursor: grab;
	}

	.grab {
		cursor: -webkit-grab;
		cursor: grab;
	}

	.grabbing {
		cursor: -webkit-grabbing;
		cursor: grabbing;
	}

	#fire {
		background-color: red;
	}

	#water {
		background-color: blue;
	}

</style>

<script type="text/javascript" src="js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

<script type="text/javascript">
	
	$(function(){

		if(localStorage.getItem("elements") === null){
			var elements =
			{
				fire: { id: "#fire", top: 0, left: 0 },
				water: { id: "#water", top: 0, left: 0 }
			};
			localStorage.setItem("elements", JSON.stringify(elements));
		}

		var elements = JSON.parse(localStorage.elements);

		$.each(elements, function(){
			$($(this)[0].id).css({top: $(this)[0].top, left: $(this)[0].left}).show();
		});

		console.log(elements);

		// localStorage.clear();

		$(".element").draggable({
			containment: ".element-container",
			stack: ".element",
			cursor: "grabbing",
			start: function(event,ui){
				$(this).removeClass('grab').addClass('grabbing');
			},
			drag: function(event,ui){
				var elements = JSON.parse(localStorage.elements);
				elements[$(this).attr("id")].top = ui.position.top;
				elements[$(this).attr("id")].left = ui.position.left;
				localStorage.setItem("elements", JSON.stringify(elements));
			},
			stop: function(event,ui){
				$(this).removeClass('grabbing').addClass('grab');
			}
		});

		// $(".element").mouseover(function(){
		// 	$(this).addClass('grab');
		// });

		// $(".element").mousedown(function(){
		// 	$(this).removeClass('grab').addClass('grabbing');
		// });

		// $(".element").mouseup(function(){
		// 	$(this).removeClass('grabbing').addClass('grab');
		// });

	});

</script>

<div class="element-container">
	<span class="element" id="fire" style="display:none">Fire</span>
	<span class="element" id="water" style="display:none">Water</span>
</div>