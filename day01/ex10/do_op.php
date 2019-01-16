#!/usr/bin/php
<?PHP

if ($argc != 4)
{
	print("Incorrect Parameters\n");
	return ;
}
$p1 = $argv[1];
$ope = trim($argv[2], "\t ");
$p2 = $argv[3];
$res;

if ($ope == "+")
{
	$res = $p1 + $p2;
	print("$res\n");
}
else if ($ope == "-")
{
	$res = $p1 - $p2;
	print("$res\n");
}
else if ($ope == "*")
{
	$res = $p1 * $p2;
	print("$res\n");
}
else if ($ope == "/")
{
	$res = $p1 / $p2;
	print("$res\n");
}
else if ($ope == "%")
{
	$res = $p1 % $p2;
	print("$res\n");
}

?>
