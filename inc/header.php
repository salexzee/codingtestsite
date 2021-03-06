<!DOCTYPE html>
<html lang="en">
<head>
	<title>CodingTestSite | Blog and Tech Reviews by Sam Webb</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
	<?php if ($colors = "on") { ?>
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/colors.css">
	<?php } ?>
</head>


<body>
	<header class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo BASE_URL; ?>">CodingTestSite</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div> 
			<nav class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="<?php echo BASE_URL; ?>letters/">Letters</a></li>
					<li> <a href="<?php echo BASE_URL; ?>colors/">Colors</a></li>
					<li> <a href="<?php echo BASE_URL; ?>blogs/">Blog</a> </li>
					<li> <a href="<?php echo BASE_URL; ?>contact/">Contact</a> </li>
				</ul>
			</nav>
		</div>
	</header> 