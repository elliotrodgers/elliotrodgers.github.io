<html>
	<head>
		<title>Elliot Rodgers</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/jquery.canvasjs.min.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-scope" content="profile email">
		<meta name="google-signin-client_id" content="658433370672-76sggtr60d1f403kc8sij584ifla4hlm.apps.googleusercontent.com">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<nav class="navbar navbar-custom">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="?view=profile">Elliot Rodgers</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav" style="margin-top:0px;margin-bottom:0px">
						<?php if (isset($_GET['sort'])) { ?>
						<?php if($_GET['view'] == 'profile' || $_GET['view'] == ''){ ?>
							<li class="nav-item active">
						<?php } else { ?>
							<li class="nav-item">
						<?php } ?>
							<a class="nav-link" href="?view=profile">Profile</a>
						</li>
						<?php if($_GET['view'] == 'coding_samples'){ ?>
							<li class="nav-item active">
						<?php } else { ?>
							<li class="nav-item">
						<?php } ?>
							<a class="nav-link" href="?view=coding_samples">Coding Samples</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container" style="margin-bottom:20px">
			<?php
				include('config/config.php');
				if(isset($_GET['view'])){ 
					include('views/'.$_GET['view'].'.php');
				} else {
					include('views/profile.php');
				}
			?>
		</div>
	</body>
</html>