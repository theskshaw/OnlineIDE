<?php
	$date=date("Y/m/d");
	if(!isset($_COOKIE['code'])) {
    	echo json_encode(array('success' => 1,'code'=>"/* Username: shashi_codes
      Date: ".$date."
      Time:*/"));
	} else {
	    //echo "Cookie '" . $cookie_name . "' is set!<br>";
	    $input="";
	    if(!isset($_COOKIE['input'])){
	    	$input="";
	    }
	    else{
	    	$input=$_COOKIE['input'];
	    }
	    echo json_encode(array('success' => 1,'code'=>$_COOKIE['code'],'input'=>$input));
	    //echo "Value is: " . ;
	}
	//echo $_COOKIE['code'];
?>