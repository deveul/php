<?php

if ($_POST["submit"] !== "OK" || $_POST["login"] === "" || $_POST["oldpw"] === "" || $_POST["newpw"] === "")
	echo "ERROR\n";
else
{
	$content = file_get_contents("../private/passwd");
	if ($content !== "")
	{
		$unscontent = unserialize($content);
		$login = $_POST[login];
		$oldpass = hash("whirlpool", $_POST[oldpw]);
		$newpass = hash("whirlpool", $_POST[newpw]);
		$good = 0;
		foreach ($unscontent as $key => $logpw)
		{
			if (!strcmp($login, $logpw[login]))
			{
				if (!strcmp($oldpass, $logpw[passwd]))
				{
					$good = 1;
					$unscontent[$key][passwd] = $newpass;
				}
			}
		}
		if ($good == 1)
		{
			file_put_contents("../private/passwd", serialize($unscontent));
			echo "OK\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
}

?>
