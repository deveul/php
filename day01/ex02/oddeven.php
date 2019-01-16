#!/usr/bin/php
<?PHP

function	ft_analize_last_digit($number)
{
	$len = strlen($number) - 1;
	if (strstr("02468", $number[$len]))
		return true;
	else
		return false;
}

$input;
$tmp;
while (42)
{
	echo "Entrez un nombre: ";
	$trigger = 0;
	$input = rtrim(fgets(STDIN), "\n");
	if (feof(STDIN))
	{
		echo "^D\n";
		exit (1);
	}
	if (is_numeric($input) == TRUE)
		$trigger = 1;
	if ($trigger == 1)
	{
		if ($input > 0)
			$tmp = $input;
		else if ($input == 0)
		{
			echo "Le chiffre $input est Pair\n";
			$trigger = 2;
		}
		else
			$tmp = substr($input, 1);
	}
	if (($trigger == 0 || (ctype_digit($tmp) == FALSE && $tmp[0] != '+')) && $trigger != 2)
		echo "'$input' n'est pas un chiffre\n";
	else if ($trigger == 1 && ft_analize_last_digit($tmp) == true)
		echo "Le chiffre $input est Pair\n";
	else if ($trigger == 1)
		echo "Le chiffre $input est Impair\n";
}
?>
