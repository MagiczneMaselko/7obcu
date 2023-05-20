<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0" />
<style> 

    #pob .material-symbols-outlined:hover {
        color:lime;
    }
    #usu .material-symbols-outlined:hover {
        color:red;
    }
</style>
<?php
    if (!empty($pliczki)) {
        echo "<table><tr><th>Nazwa</th><th>Data i godzina wstawienia</th><th colspan='2'>Akcja</th></tr>";
        for ($i=0; $i<count($pliczki); $i++) {
            echo "<tr><td>".substr($pliczki[$i][0], strrpos($pliczki[$i][0], '/')+1)."</td>
            <td>".$pliczki[$i][1]."</td><td><a href=\"pobierz.php?plik=".substr($pliczki[$i][0], strrpos($pliczki[$i][0], '/') +1)."\">
            <center><div id='pob'><span class='material-symbols-outlined'>download</span></div></center></a></td><td><a href=\"usun.php?plik=".substr($pliczki[$i][0], strrpos($pliczki[$i][0], '/')+1)."\" onclick='myFunction()'>
            <center><div id='usu'><span class='material-symbols-outlined'>delete</span></div></center></a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "W tej chiwili ma żadnych pliczków<br>Czyżby znikneły?<br><br><img src='tf.jpg' alt='tf tf'>  ";
    }
