<?php

if ($_POST["submit"] !== "OK" || $_POST["login"] === "" || $_POST["passwd"] === "")
	echo "ERROR\n";
else
{
	if (!file_exists("../private/passwd"))
		mkdir ("../private");
	$content = file_get_contents("../private/passwd");
	$unscontent = unserialize($content);
	$login = $_POST[login];
	$pass = hash("whirlpool", $_POST[passwd]);
	$good = 1;
	if ($content !== "")
	{
		foreach ($unscontent as $logpw)
		{
			if (!strcmp($login, $logpw["login"]))
			{
				if ($good === 1)
					echo "ERROR\n";
				$good = 0;
			}
		}
	}
	if ($good == 1)
	{
		$tab = [
			login => $_POST["login"],
			passwd => $pass,
		];
		$unscontent[] = $tab;
		file_put_contents("../private/passwd", serialize($unscontent));
		echo "OK\n";
	}
}

?>
