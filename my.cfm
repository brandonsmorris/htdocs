<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Shelters </h1>
	</div><!-- /header -->

	<div data-role="content">	
	<cfquery datasource="location" name="myquery">
	select * from `Mass Care Shelters`
    </cfquery>
    <ul data-role="listview" data-inset="true" data-filter="true">
    	<li data-role="collapsible">
    <cfoutput query="myquery">
	<li>
	<a href="##custDetails">#city# #name#</a>

    </li>
	</cfoutput>
    </li>
</ul>	
	</div><!-- /content -->

</div><!-- /page -->
<div data-role="page" id="custDetails" data-theme="a">
   <button class="ui-btn-left" id="backbutton" data-icon="arrow-l" data-iconpos="left">Back</button>
    <iframe src="map.php" width="480" height="320" seamless></iframe>
    <button class="ui-btn-right" id="exit" data-icon="back" data-iconpos="right"><a href="index.php">Exit</a></button>
  <div data-role="content" href="##custDetails"> Address: </div>
 <div data-role="footer" data-theme="a" class="ui-footer-fixed">
    <h4>myFooter</h4>
  </div>
</div>
</body>
</html>
