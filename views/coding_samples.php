<script type="text/javascript">
	$(function(){
		$(".panel-heading").on("click", function(){
			$(this).find(".glyphicon").toggleClass("glyphicon-plus glyphicon-minus");
			$(this).next(".panel-body").slideToggle();
		});
	});
</script>

<p>This page features various web development techniques which I utilise.</p>
<p>Click a panel to explore its contents</p>

<div class="panel panel-custom">
	<div class="panel-heading">
		<div class="panel-title">
			SQL<span class="glyphicon glyphicon-minus pull-right"></span>
		</div>
	</div>
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#filtering-results">Filtering Results</a></li>
			<li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
			<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
		</ul>
		<div class="tab-content">
			<div id="filtering-results" class="tab-pane fade in active">
				<p>When a large result set is being returned it can be useful to have a filter option.</p>
				<pre>WHERE (@filter IS NULL OR column = @filter)</pre>
				<p>This line of SQL will filter the results depending on whether the <code>@filter</code> variable is <code>NULL</code> or not.</p>
				<p>If the <code>@filter</code> variable is not null then the <code>column</code> is matched against it.</p>
				<p>The <code>LIKE</code> operator can also be used to filter the results where the <code>column</code> contains <code>@filter</code>.</p>
				<pre>WHERE (@filter IS NULL OR column LIKE '%' + @filter + '%')</pre>

				<a class="btn btn-primary" href="http://sqlfiddle.com/#!18/5c7a0/1/0" target="_blank">
					SQL Fiddle <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
				</a>
			</div>
			<div id="menu1" class="tab-pane fade">

			</div>
			<div id="menu2" class="tab-pane fade">

			</div>
		</div>
	</div>
	<div class="panel-footer text-right">
		<small class="text-muted">Last Updated: 22/04/2018</small>
	</div>
</div>

<div class="panel panel-custom">
	<div class="panel-heading">
		<div class="panel-title">
			PHP<span class="glyphicon glyphicon-plus pull-right"></span>
		</div>
	</div>
	<div class="panel-body" style="display: none">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#filtering-results">Filtering Results</a></li>
			<li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
			<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
		</ul>
		<div class="tab-content">
			<div id="filtering-results" class="tab-pane fade in active">

			</div>
			<div id="menu1" class="tab-pane fade">

			</div>
			<div id="menu2" class="tab-pane fade">

			</div>
		</div>
	</div>
	<div class="panel-footer text-right">
		<small class="text-muted">Last Updated: 22/04/2018</small>
	</div>
</div>

<div class="panel panel-custom">
	<div class="panel-heading">
		<div class="panel-title">
			Bootstrap<span class="glyphicon glyphicon-plus pull-right"></span>
		</div>
	</div>
	<div class="panel-body" style="display: none">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#filtering-results">Filtering Results</a></li>
			<li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
			<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
		</ul>
		<div class="tab-content">
			<div id="filtering-results" class="tab-pane fade in active">

			</div>
			<div id="menu1" class="tab-pane fade">

			</div>
			<div id="menu2" class="tab-pane fade">

			</div>
		</div>
	</div>
	<div class="panel-footer text-right">
		<small class="text-muted">Last Updated: 22/04/2018</small>
	</div>
</div>

<div class="panel panel-custom">
	<div class="panel-heading">
		<div class="panel-title">
			jQuery<span class="glyphicon glyphicon-plus pull-right"></span>
		</div>
	</div>
	<div class="panel-body" style="display: none">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#filtering-results">Filtering Results</a></li>
			<li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
			<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
		</ul>
		<div class="tab-content">
			<div id="filtering-results" class="tab-pane fade in active">

			</div>
			<div id="menu1" class="tab-pane fade">

			</div>
			<div id="menu2" class="tab-pane fade">

			</div>
		</div>
	</div>
	<div class="panel-footer text-right">
		<small class="text-muted">Last Updated: 22/04/2018</small>
	</div>
</div>