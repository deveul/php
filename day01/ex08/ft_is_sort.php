<?PHP

function ft_is_sort($array)
{
	$tmp = $array;
	sort($array);
	$ret = true;
	foreach($array as $key => $value)
	{
		if (strcmp($value, $tmp[$key]))
			$ret = false;
	}
	$tmp2 = $tmp;
	rsort($tmp2);
	$ret2 = true;
	foreach($tmp2 as $key => $value)
	{
		if (strcmp($value, $tmp[$key]))
			$ret2 = false;
	}
	if ($ret == true || $ret2 == true)
		return true;
	else
		return false;
}

?>
