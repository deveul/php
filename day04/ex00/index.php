<?php

session_start();
if (isset($_GET["submit"]) && $_GET["submit"] === "OK")
{
	if (!isset($_GET["login"]))
		$_SESSION["login"] = "";
	else
		$_SESSION["login"] = $_GET["login"];
	if (!isset($_GET["passwd"]))
		$_SESSION["passwd"] = "";
	else
		$_SESSION["passwd"] = $_GET["passwd"];

}
else
{
	if (isset($_SESSION["login"]) === false)
		$_SESSION["login"] = "";
	if (isset($_SESSION["passwd"]) === false)
		$_SESSION["passwd"] = "";
}

?>
<form method="get" action="index.php">
	Identifiant: <input type="text" name="login" value=<?php echo "\"" . $_SESSION["login"] . "\"";?> />
<br />
	Mot de passe: <input type="text" name="passwd" value=<?php echo "\"" . $_SESSION["passwd"] . "\"";?> />
<input type="submit" name="submit" value="OK"/>
</form>
