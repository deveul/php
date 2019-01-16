<?php

include "auth.php";

session_start();

$login = $_GET["login"];
$passwd = $_GET["passwd"];
$ret = auth($login, $_GET["passwd"]);
if ($ret === true)
{
	$_SESSION["loggued_on_user"] = $login;
	echo "OK\n";
}
else
{
	$_SESSION["loggued_on_user"] = "";
	echo "ERROR\n";
}


?>
