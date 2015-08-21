<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Intranet site for The Middle East Institute. Maintained by the Communications Department.">
	<meta name="author" content="szuke" >
	
	<title>MEI Intranet</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Raleway|Varela|Playfair+Display' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	
	<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="assets/js/jquery.fancybox-media.js"></script>
	
	<script src="assets/js/main.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox-media').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',
				helpers : {
					media : {}
				}
			});
		});
	</script>	
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>

<header class="site-header" role="banner">

<!-- ===========================
			NAV MENU
================================ -->

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="http://www.mei.edu">Middle East Institute&nbsp;&nbsp;<i class="fa fa-external-link"></i></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse">
		      <ul class="nav navbar-nav navbar-right">
					<li id="home-btn"><a href="index.php"><!--<span class="glyphicon glyphicon-home"></span>-->Front</a></li>
					<li id="interns-btn"><a href="interns.php">Interns</a></li>
					<li id="tutorials-btn"><a href="tutorials.php">Tutorials</a></li>
					<li id="resources-btn"><a href="resources.php">Resources</a></li>
				</ul>
			</div>
		</div>
	</nav>

<!-- ===========================
			HERO SECTION
================================ -->

	<section id="hero" class="jumbotron" data-type="background" data-speed="2">
		<div id="hero-content" class="container">
			<div class="row">
				<div class="col-sm-2 col-sm-offset-1">
					<a href="index.php"><img id="header-logo" src="assets/img/logo.png" /></a>
				</div><!-- column -->
				<div class="col-sm-8">
				  <a href="index.php"><h1>MEI Intranet</h1></a>
				  <p>Shortcuts, resources, and tools for MEI staff and interns, maintained by the Department of Communications.</p>
				</div><!-- column -->
			</div><!-- row -->
		</div> <!-- Container -->
	</section> <!-- jumbotron -->
</header>

<!-- ===========================
			PAGE CONTENT
================================ -->
