#!/usr/bin/php
<?PHP

function	ft_callback_to_upper($match)
{
	strtoupper($match);
}

if ($argc < 2)
	return ;
$fd = fopen($argv[1], "r");
$filestr = fread($fd, filesize($argv[1]));
$nb_of_links = preg_match_all('/"<\\a>"/', $filestr);
echo "$nb_of_links\n";
echo $filestr;
fclose($fd);
?>
