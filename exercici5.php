<?php
	if (getenv('HTTP_CLIENT_IP')) {
		$ip = getenv('HTTP_CLIENT_IP');
	} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
		$ip = getenv('HTTP_X_FORWARDED_FOR');
	} elseif (getenv('HTTP_X_FORWARDED')) {
		$ip = getenv('HTTP_X_FORWARDED');
	} elseif (getenv('HTTP_FORWARDED_FOR')) {
		$ip = getenv('HTTP_FORWARDED_FOR');
	} elseif (getenv('HTTP_FORWARDED')) {
		$ip = getenv('HTTP_FORWARDED');
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	$local_ip = $_SERVER['SERVER_ADDR'];
	echo "IP cliente: ".$ip."</br>";
	echo "IP servidor: ".$local_ip;
	if($ip !== $local_ip) {
		header("HTTP/1.1 401 Unauthorized");
		header("Location: error_401_es.php");
	} else {
		eprint_r("Es el servidor");
	}
?>
