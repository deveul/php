#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	$first = true;
	foreach($argv as $value)
	{
		if (!$first)
			print("$value\n");
		else
			$first = false;
	}
}

?>
