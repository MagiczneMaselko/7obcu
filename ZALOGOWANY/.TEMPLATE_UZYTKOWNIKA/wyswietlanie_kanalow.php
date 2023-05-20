<?php
$dir    = './KANALY/';
$files1 = scandir($dir);
if (is_dir_empty($dir)) {
    echo "W tej chwili nie posiadasz żadnego kanału. <br>Aby stworzyć nowy kanał wejdź do Edycji kanałów i kliknij przycisk <br> 'Dodaj nowy Kanał'.";
} else {
    foreach ($files1 as $key => $value) {
        if ('.' !== $value && '..' !== $value) {
            echo "<a href='./KANALY/$value/index.php'>$value</a>";
        }
    }
}
function is_dir_empty($dir) 
{
    if (!is_readable($dir)) {
        return null;
    }
    return (count(scandir($dir)) == 2);
}
