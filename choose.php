<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
dbLogin(); 
sec_session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Brandon Morris">
	<title>Select List</title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/sb-admin.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<!-- Bootstrap Switch -->
	<link rel="stylesheet" href="css/highlight.css">
	<link rel="stylesheet" href="css/bootstrap-switch.css">
	<link rel="stylesheet" href="css/main.css">
	<style>
	.btn-lg{
		width: 49%;
	}
	</style>
	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-43092768-1']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https' == document.location.protocol ? 'https//ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
	</script>
</head>
<body>
<!-- Nav -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-brand" href="choose.php">
      <i class"fa fa-house">Home</i>
    </a>
  </div>
  <!-- Top Menu Items -->
  <div class="nav navbar-right top-nav" style="padding-right:15px">
        <a data-toggle="modal" href="#myModal" class="btn btn-primary">
      <i class="fa fa-plus"></i>
      </a>
  </div>
</nav>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-16">
				<? buttons() ?>
				<a href='map.php'><button class='btn-lg btn btn-default'>Test Map</button></a>
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-16">
				<a href="http://i.imgur.com/p4jSukg.webm"><button class="btn-lg btn btn-warning" style="width:100%">Steph Also Click Here (Dont worry it's not Scary...)</button></a>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
<? include 'includes/modal.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Bootstrap Switch -->
<script src="js/highlight.js"></script>
<script src="js/bootstrap-switch.js"></script>
<script src="js/main.js"></script>

</body>
</html>