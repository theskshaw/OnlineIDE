<?php

	$cookie_code=$_POST['code'];
	setcookie('code', $cookie_code, time() + (86400 * 30), "/");

?>