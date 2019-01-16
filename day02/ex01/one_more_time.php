#!/usr/bin/php
<?PHP

date_default_timezone_set('Europe/Paris');
if ($argc < 2)
	return (0);
$array = explode(' ', $argv[1]);
$nb_of_elem = count($array);
$weekdays = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi" , "dimanche");
$months = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
$englishmonths = array("january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december");
if ($nb_of_elem != 5)
{
	echo "Wrong Format\n";
	return ;
}
$array[0] = lcfirst($array[0]);
$array[2] = lcfirst($array[2]);
$weekday = -1;
foreach ($weekdays as $key => $value)
{
	if ($value == $array[0])
		$weekday = $key;
}
if ($weekday == -1)
{
	echo "Wrong Format\n";
	return ;
}
$month = -1;
foreach ($months as $key => $value)
	if ($value == $array[2])
	{
		$month = $key + 1;
		$enmonth = $englishmonths[$key];
	}
if ($month == -1)
{
	echo "Wrong Format\n";
	return ;
}
if (preg_match('/\D/', $array[1]) === 1)
{
	echo "Wrong Format\n";
	return ;
}
$day = $array[1];
if (preg_match('/\D/', $array[3]) === 1)
{
	echo "Wrong Format\n";
	return ;
}
$year = $array[3];
if (checkdate($month, $day, $year) === false)
{
	echo "Wrong Format\n";
	return ;
}
if ($year < 1970)
{
	echo "Wrong Format\n";
	return ;
}
$time = $array[4];
if (preg_match_all('/\d/', $time) !== 6 || preg_match_all('/:/', $time) !== 2 || strlen($time) != 8 || $time[2] != ':' || $time[5] != ':')
{
	echo "Wrong Format\n";
	return ;
}
$heures = substr($time, 0, 2);
$minutes = substr($time, 3, 2);
$secondes = substr($time, 6, 2);
if ($heures > 23 || $minutes > 59 || $secondes > 59)
{
	echo "Wrong Format\n";
	return ;
}
echo strtotime("$day $enmonth $year $time"), "\n";
?>
