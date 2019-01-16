#!/usr/bin/php
<?PHP
function	ft_check_arg_format($tmp)
{
	$i = 0;
	$len = strlen($tmp);
	$trigger = 0;
	$arg_nb = 0;
	while ($i < $len)
	{
		if ($tmp[$i] != ' ')
			$trigger = 1;
		$i++;
	}
	if ($trigger == 0)
		return false;
	$i = 0;
	while ($i < $len)
	{
		while ($i < $len && $tmp[$i] == ' ')
			$i++;
		if ($i < $len && ($tmp[$i] == '-' || $tmp[$i] == '+'))
			$i++;
		if ($i < $len && strstr("0123456789", $tmp[$i]))
		{
			$arg_nb++;
			while ($i < $len && strstr("0123456789", $tmp[$i]))
				$i++;
		}
		while ($i < $len && $tmp[$i] == ' ')
			$i++;
		if ($i < $len && strstr("-+*/%", $tmp[$i]))
		{
			$arg_nb++;
			$i++;
		}
		else
			return false;
		while ($i < $len && $tmp[$i] == ' ')
			$i++;
		if ($i < $len && ($tmp[$i] == '-' || $tmp[$i] == '+'))
			$i++;
		if ($i < $len && strstr("0123456789", $tmp[$i]))
		{
			$arg_nb++;
			while ($i < $len && strstr("0123456789", $tmp[$i]))
				$i++;
		}
		while ($i < $len && $tmp[$i] == ' ')
			$i++;
		if ($i != $len || $arg_nb != 3)
			return false;
		else
			return true;
	}
}

if ($argc != 2)
{
	print("Incorrect Parameters\n");
}
if (ft_check_arg_format($argv[1]) == false)
{
	print("Syntax Error\n");
	return (-1);
}
$str = str_replace(' ', '', $argv[1]);
$len = strlen($str);
$i = 0;
$trigger = 0;
while ($i < $len)
{
	if (strstr("0123456789", $str[$i]))
		$trigger = 1;
	if ($trigger === 1 && strstr("-+*/%", $str[$i]))
	{
		$p1 = substr($str, 0, $i);
		$ope = $str[$i];
		$p2 = substr($str, ($i + 1), ($len - $i));
		break ;
	}
	$i++;
}
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
