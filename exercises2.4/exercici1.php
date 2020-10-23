<?php
/**
* Llista els diferents valors dels elements de la matriu del sistema $_SERVER, entre
* ells estan els elements que guarden els valors de les sol·licituts i respostes HTTP.
*/
$server_host=$_SERVER['HTTP_HOST'];
echo "<p><strong>Llistat dels valors dels elements de la matriu \$_SERVER obtinguts al
accedir a $server_host</strong></p>";
foreach($_SERVER as $key => $value) {
echo $key." = ".$value."<br />";
}
?>
