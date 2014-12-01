<!DOCTYPE html>
<!-- ~~~~~~~~~~~~~~~~~~~~| ROOT DIR |~~~~~~~~~~~~~~~~~~~~ -->
<?php 
$base = "http://www.gebf2015.de/"; 
?>
<html>
	<head>
		<title>
			GEBF 2015
		</title>
		<!-- Font -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Stylesheet -->
		<link href="http://www.gebf2015.de/css/style.css" rel="stylesheet" type="text/css" />
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
		<script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>
		<!-- ///// collapsing divs ///// -->
		<script type="text/javascript" src="<?php echo $base;?>include/expander.js"></script>
		<script type="text/javascript" src="<?php echo $base;?>include/collapse.js"></script>
		<script type="text/javascript" src="<?php echo $base;?>include/collapse_options.js"></script>
	</head>
	
	
	<body>
	<div class="wrapper">
		<div class="header">
			<div class="header-top">
				<div class="header-top-left"></div>
				
				<div class="header-top-right"></div>
				<div class="header-top-right2"></div>
			</div>
			<div class="header-el">
				<div class="header-el1"></div>
				<div class="header-el2">
					<div class="header-el2-font">
						Heterogenit&auml;t.<br/>
						Wert.Sch&auml;tzen.
					</div>
				</div>
				<div class="header-el3"></div>
			</div>
		</div>
		<div class="main">
			<div class="navi ">
				<?php include("navi.php"); ?>
			</div>