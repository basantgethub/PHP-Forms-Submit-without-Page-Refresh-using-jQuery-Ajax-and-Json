<?php

if(!empty($_REQUEST['submit']))
{	
	$registration = array();
	$length = count($_REQUEST['registration']);	
	for($i=0; $i < $length; $i+=4){
		if(!empty($_REQUEST['registration'][$i]['value'])){
			$registration['name'] = $_REQUEST['registration'][$i]['value'];
			$registration['username'] = $_REQUEST['registration'][$i+1]['value'];
			$registration['email'] = $_REQUEST['registration'][$i+2]['value'];
			$registration['password'] = $_REQUEST['registration'][$i+3]['value'];
		}
	}
	//print_r($registration);
	
	print json_encode($registration);die;
}

?>
