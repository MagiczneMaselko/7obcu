<?php
$dir    = './PLIKI/';
$files1 = scandir($dir);

$pliczki = [];

///dodaj pliki do tabeli
for($i=2; $i<count($files1); $i++)
{
	$plik = [];
	
	array_push($plik, $dir."/".$files1[$i]);
	array_push($plik, date("d-m-Y H:i:s", filemtime($dir."/".$files1[$i])));
	
	array_push($pliczki, $plik);
}

///posortuj tabele
$data = array();
foreach ($pliczki as $key => $row)
{
    $data[$key] = $row[1];
}
array_multisort($data, SORT_DESC, $pliczki);
	
?>