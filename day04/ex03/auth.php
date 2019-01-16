<?php

function auth($login, $passwd)
{
	$good = false;
	$content = file_get_contents("../private/passwd");
	if ($content !== "")
	{
		$unscontent = unserialize($content);
		$pass = hash("whirlpool", $passwd);
		foreach ($unscontent as $logpw)
		{
			if (!strcmp($login, $logpw[login]) && !strcmp($pass, $logpw[passwd]))
					$good = true;
		}
	}
	return ($good);
}

?>
