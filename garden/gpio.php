<?php

//This page is requested by the JavaScript, it updates the pin's mode
//Getting and using values
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