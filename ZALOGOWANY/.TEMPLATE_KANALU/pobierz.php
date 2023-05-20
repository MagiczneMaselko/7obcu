<?php
	if ($_GET["plik"] != "") {
		$file_url = "./PLIKI/".$_GET["plik"];
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary"); 
		header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
		readfile($file_url); 
	}
