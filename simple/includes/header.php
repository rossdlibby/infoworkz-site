	<!-- SITE TITTLE -->
	<meta charset="utf-8">

	<?php echo $header; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS STYLE -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="fontastic.css">

	<!-- CALL THE COLOR -->
	<link rel="stylesheet" type="text/css" href="css/colors/royal.css" id="colors">

	<!-- JAVA SCRIPT -->
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script>
	WebFont.load({
		google: {
			families: ["PT Sans:400,400italic,700,700italic","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Raleway:200,300,regular,500,600,700,800","Shadows Into Light:regular","Josefin Sans:300,300italic,regular,italic,600,600italic,700,700italic"]
		}
	});
	</script>

	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<!-- APPLE TOUCH ICON -->
	<link rel="apple-touch-icon" href="img/webclip.png">

	
</head>
<body>
 <!-- GO TOP -->
<div class="w-hidden-small w-hidden-tiny w-clearfix go-top" data-ix="move-top-btn">
	<a class="w-inline-block button btn-top" href="#top">
		<i class="fa fa-arrow-up"></i>
	</a>
</div>
<!-- END GO TOP -->

<!-- START HEADER -->               
<header>
	<div class="w-hidden-small w-hidden-tiny top-nav">
		<!-- start top navigation -->  
		<?php include_once('includes/top-navigation.php'); ?>
		<!-- end top navigation --> 

	<!-- START NAVIGATION --> 
	<?php include_once('includes/navigation.php'); ?>
	<!-- END NAVIGATION -->
			<div class="w-nav-button hamburger">
				<div class="w-icon-nav-menu"></div>
			</div>
		</div>
</header>