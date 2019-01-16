<?php
if (isset($_SERVER["PHP_AUTH_USER"]) && isset($_SERVER["PHP_AUTH_PW"]) && $_SERVER["PHP_AUTH_USER"] === "zaz" && $_SERVER["PHP_AUTH_PW"] === "jaimelespetitsponeys")
{
?>
<html><body>
Bonjour Zaz<br />
<?php
	$img = file_get_contents(__DIR__ . "/../img/42.png");
	echo "<img src='data:image/png;base64," . (base64_encode($img)). "'>\n";
?>
</body></html>
<?php
}
else
{
	header('WWW-Authenticate: Basic realm="Espace membres"');
	header('HTTP/1.0 401 Unauthorized');
?>
<html><body>Cette zone est accessible uniquement aux membres du site</body></html>
<?php
}
?>
