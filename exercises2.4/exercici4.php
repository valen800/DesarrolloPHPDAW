<?php
	function getUserLanguage() {
		$idiom = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
		return $idioma;
	}
	$user_language = getUserLanguage();
?>
<?php
	if($user_language == "es") {
		http_response_code(404);
		include('error_404_es.php');
		die();
	} else {
		http_response_code(404);
		include('error_404_en.php');
		die();
	}
?>
