<?php


// PHP Script meant to manage a low level trigger relay on the raspberry

// Low level trigger can NOT be turned on/off with "gpio write i 0" or "1"
// low (0) output will still activate the relay
// so instead i have to use the pin mode : 
// * "gpio mode i in" => set relay #i to input mode (inactive) 
// * "gpio mode i in" => set relay #i to output mode (active) 

// LAN : This page can be called as simple GET PHP with a few params
//  ex : activate relay 7 for 3 seconds : {{path}}/gpio.php?mode=in&timer=3
//  ex : deactivate relay 7 
// GUI : This page is requested by the JavaScript, it updates the pin's mode

// Getting and using values
if (isset ( $_GET["mode"] )) {
	$mode = strip_tags ($_GET["mode"]);
	$pinIndex = 7;
	$defaultTimer = 3;
		
	//set the gpio's mode to $mode		
	system("gpio mode ".$pinIndex ." ".$mode );
		
	if($mode = "out"){
	
		if(isset ( $_GET["timer"] )){
			$timer = strip_tags ($_GET["timer"]);
			if	(!is_numeric($timer )){
				$timer = $defaultTimer ;
			}
		}else {
			$timer = $defaultTimer ;
		}
	
		//waits 2 seconds
		sleep ( $timer );
	
		//turns off 
		system ( "gpio mode ".$pinIndex ." in" );
	
	
	
    }
	
		
	
} 

?>