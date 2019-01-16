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

if ($argc < 2)
	exit (0);
$len = strlen($argv[1]);
$i = 0;
$notempty = 0;
while ($i < $len)
{
	if ($argv[1][$i] != ' ')
		$notempty = 1;
	$i++;
}
if ($notempty == 0)
{
	echo "\n";
	return ;
}
$array=ft_split($argv[1]);
$trigger = true;
foreach($array as $value)
{
	if ($trigger == true)
		$trigger = false;
	else
		print("$value ");
}
print("$array[0]\n");

?>
