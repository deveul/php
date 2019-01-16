#!/usr/bin/php
<?PHP

$str;
$tmp;
if ($argc != 2)
	exit (0);
else
{
	$tmp = trim($argv[1]);
	$str = preg_replace('!\s+!', ' ', $tmp);
	print("$str\n");
}
?>
