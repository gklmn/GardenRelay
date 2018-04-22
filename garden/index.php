<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Raspberry Pi Gpio</title>
    </head>
 
    <body style="background-color: black;">
    <!-- On/Off button's picture -->
	<?php
	
	$pinIndex = 7;
	
	echo ("<p>
		<a id='setOut' 
		style=\"color: white;\" 
		onclick='setMode (\"out\");'>on</a></p>");
	echo ("<p>
		<a id='setIn' 
		style=\"color: white;\" 
		onclick='setMode (\"in\");'>off</a></p>");
		
	?>
	 
	<!-- javascript -->
	<script src="script.js"></script>
    </body>
</html>