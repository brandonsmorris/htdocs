<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
dbLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<title>VRC</title>
	<!-- Bootstrap Core -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Custom -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/highlight.css">
	<link rel="stylesheet" href="css/bootstrap-switch.css">
	<link rel="stylesheet" href="css/main.css">
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
    <style>
    .table-responsive{
  padding: 30px
}</style>
</head>
<body>
	<!-- Navigation -->
<div class="wrapper">
<? include 'includes/header.php' ?>
        <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-16">
            <h2>
            VRC
            </h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>
                      City
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Latitude
                    </th>
                    <th>
                      Longitude
                    </th>
                    <th>
                      Status
                    </th>
                  </tr>
                </thead>
                <tbody>
              
                  <? selectVolunteers(); ?>
                <!--/#table-->
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<!-- Bootstrap Switch -->
<script src="js/highlight.js"></script>
<script src="js/bootstrap-switch.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
  function switchState() {
    $.ajax({
      type: "POST",
      url: "php/server.php"
      data:"<? echo $row[name] ?>",
      success: function(msg){
     alert( "Data Saved: " + msg );
   }
  });
    })

  }
</script>
</body>
</html>