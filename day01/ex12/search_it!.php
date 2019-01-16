#!/usr/bin/php
<?PHP

if ($argc < 3)
	return 0;

$keytofind = $argv[1];
$firsttwo = 0;
$answer = -1;
foreach($argv as $key => $value)
{
	if ($firsttwo < 2)
		$firsttwo++;
	else
	{
		$nb = preg_match("/^$keytofind:/", $value);
		if ($nb == 1)
			$answer = $key;
	}
}
if ($answer != -1)
{
	$len = strlen($keytofind) + 1;
	$ret = substr($argv[$answer], $len);
	if (strlen($ret) != 0)
		echo "$ret\n";
}

?>
