<?php
    if ($_GET["plik"] != "") {
        $file_url = "./PLIKI/".$_GET["plik"];
        unlink($file_url); 
        header("Location: ./index.php");
    }
