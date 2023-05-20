<?php
    $dir    = './../KANALY/';
    $files1 = scandir($dir);
    if(is_dir_empty($dir)){
        echo "<center>W tej chwili nie posiadasz żadnego kanału. <br>Aby stworzyć nowy kanał kliknij przycisk poniżej.</center>";
        }
        else {
        echo "<table><th>Nazwa Kanału</th><th>Edytuj nazwę</th><th colspan='2'>Usuń</th>";
        foreach ($files1 as $key => $value) {
        if ('.' !== $value && '..' !== $value){
            echo "<tr><td>$value</td><td><div class='input'><input type='text' maxlength='15'><a href='edycja.php'><span class='material-symbols-outlined'>edit</span></a></div></td><td><a href='usuwanie.php'><span class='material-symbols-outlined'>delete</span></a></tr>";
        }
    }
    echo "</table>";
    }
    function is_dir_empty($dir) {
    if (!is_readable($dir)) return null; 
    return (count(scandir($dir)) == 2);
    }
?>