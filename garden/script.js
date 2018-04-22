var button_out = document.getElementById("setOut");
var button_in = document.getElementById("setIn");


//void
 function setMode ( mode ) {
	
	var request = new XMLHttpRequest();
	request.open( "GET" , "gpio.php?mode=" + mode , true);
	request.send(null);
	
	return null;
}