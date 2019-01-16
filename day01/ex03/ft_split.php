<?PHP

function ft_split($input)
{
	$array;
	$input = trim($input, " ");
	$str = $input;
	while (strpos($str, '  ') !== false)
		$str = str_replace('  ', ' ', $str);
	$len = strlen($str);
	if ($len === 0)
		return (NULL);
	$array = explode(' ', $str);
	sort($array, SORT_REGULAR | SORT_STRING);
	return ($array);
}

?>
