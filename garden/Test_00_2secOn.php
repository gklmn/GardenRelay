<!DOCTYPE html>

<?php
	
	// get many info about php install
    // phpinfo();
	
	// http://www.instructables.com/id/Simple-and-intuitive-web-interface-for-your-Raspbe/
	
	// system ( string $command, int $return_var )
	// system ( "gpio mode 0 out" );
    // system ( "gpio write 0 1" );
	
	// exec ( string $command, array $output, int $return_var )
	// exec ( "gpio read 0", $status );
    // print_r ( $status );
	
	$status = array ( 0 );
	//$pinIndex = int 7;
	$pinIndex = 7;
	
	//set pin mode to output
	system ( "gpio mode ".$pinIndex ." out" );
	//system ( "gpio mode 7 out" );
		 
	
	
	
	//waits 2 seconds
	sleep ( 2 );
	
	//turns off 
	system ( "gpio mode ".$pinIndex ." in" );
	//system ( "gpio mode 7 in" );
	
	
	
	
?>
