<?php
	$agent = $_SERVER['HTTP_USER_AGENT'];

	function getBrowser($agent) {
		if(strpos($agent, 'Chrome') !== FALSE) {
			return "Chrome";
		} elseif(strpos($agent, 'Firefox') !== FALSE) {
			return "Firefox";
		}
		}
	$navegador = getBrowser($agent);
?>
<?php if($navegador == "Firefox" || $navegador == "Chrome") { ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Page title</title>
	</head>
	<body>
		<h1>Pagina Cargada</h1>
		<p>Ha cargado la pagina ya que tu navegador es Chrome o Firefox</p>
	</body>
	</html>
<?php } else {
print_r("No estas usando ni Chrome ni Firefox, por favor cambia de navegador");
}
?>
