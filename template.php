<?php
include_once 'includes/psl-config.php';
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
dbLogin();
$table = $_GET["table"];
$table = mysql_real_escape_string($table);
?>
<!DOCTYPE html>
<html>
<head>
  <title><? echo $table;?></title>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/sb-admin.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Bootstrap Switch -->
  <link rel="stylesheet" href="css/bootstrap.css">
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
  })();</script>
	<script>
$(document).ready(function() {
        // Tooltip only Text
        $('.masterTooltip').hover(function(){
                // Hover over code
                var title = $(this).attr('title');
                $(this).data('tipText', title).removeAttr('title');
                $('<p class="tooltip"></p>')
                .text(title)
                .appendTo('body')
                .fadeIn('slow');
        }, function() {
                // Hover out code
                $(this).attr('title', $(this).data('tipText'));
                $('.tooltip').remove();
        }).mousemove(function(e) {
                var mousex = e.pageX + 20; //Get X coordinates
                var mousey = e.pageY + 10; //Get Y coordinates
                $('.tooltip')
                .css({ top: mousey, left: mousex })
        });
});
    </script>
    <style>
    .table-responsive{
      padding-right: 30px
    }
    .tooltip {
  display:none;
  position:absolute;
  border:1px solid #333;
  background-color:#161616;
  border-radius:5px;
  padding:10px;
  color:#fff;
  font-size:32px Arial;
}
    </style>
</head>
<body>
<div id="wrapper" style="padding:5px">
	<!-- Navigation -->
  <? include 'includes/header.php'; ?>
    <div id="page-wrapper" style="padding: 20px;">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h3 class="page-header"><? echo $table?></h3>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead><tr><th>City</th><th>Name</th><th>Latitude</th><th>Longitude</th><th style="width:188px">Status</th></tr></thead>
                <tbody>
                <? selectTable($table); ?>
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
  <? include 'includes/importModal.php' ?>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<!-- Bootstrap Switch -->
<script src="js/highlight.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>