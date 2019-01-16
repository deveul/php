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
	foreach($argv as $key=>$value)
	{
		if (!$value)
			unset($argv[$key]);
	}
	foreach($argv as $value)
	{
		$tmp = $array;
		$tmp2 = ft_split($value);
		if ($tmp2)
			$array = array_merge($tmp, $tmp2);
	}
	sort($array, SORT_REGULAR | SORT_STRING);
	foreach($array as $value)
		print("$value\n");
}

?>
