#!/usr/bin/php
<?PHP

function ft_split($input)
{
	$array;
	$input = trim($input);
	$str = preg_replace('!\s+!', ' ', $input);

	if (!$str)
		return (NULL);
	$array = explode(' ', $str);
	return ($array);
}

$tmp = [];
$array = [];
if ($argc > 1)
{
	unset($argv[0]);
	foreach($argv as $value)
	{
		$tmp = $array;
		$tmp2 = ft_split($value);
		if ($tmp2)
			$array = array_merge($tmp, $tmp2);
	}
	sort($array, SORT_STRING | SORT_FLAG_CASE);
	foreach($array as $value)
	{
		if (($value[0] >= 'a' && $value[0] <= 'z') || ($value[0] >= 'A' && $value[0] <= 'Z'))
			print("$value\n");
	}
	foreach($array as $value)
	{
		if ($value[0] >= '0' && $value[0] <= '9')
			print("$value\n");
	}
	foreach($array as $value)
	{
		if (($value[0] < '0' || ($value[0] > '9' && $value[0] < 'A') || ($value[0] > 'Z' && $value[0] < 'a') || $value[0] > 'z'))
			print("$value\n");
	}
}

?>
