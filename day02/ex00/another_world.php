#!/usr/bin/php
<?PHP

if ($argc < 2)
	return ;
$str = $argv[1];
$str = preg_replace('/^[ 	]+/', '', $str);
$str = preg_replace('/[ 	]+$/', '', $str);
$str = preg_replace('/[ 	]+/', ' ', $str);
if (strlen($str) != 0)
	echo "$str\n";

?>
