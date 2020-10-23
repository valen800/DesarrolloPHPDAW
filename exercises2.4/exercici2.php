<?php
	function getUserLanguage() {
		$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
		return $idioma;
	}
	$user_language = getUserLanguage();
	print_r($user_language);
?>
<?php if($user_language == "es") {?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Idioma Español</title>
	</head>
	<body>
		<p>Texto en español porque tienes el idioma español por defecto<p>
	</body>
	</html>

<?php } elseif($user_language == "en") {?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>English Language</title>
	</head>
	<body>
		<p>Text in English</p>
	</body>
	</html>
<?php } else { ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Otro idioma</title>
	</head>
	<body>
		<p>Pagina para cualquier otro idioma</p>
	</body>
	</html>
<?php } ?>
