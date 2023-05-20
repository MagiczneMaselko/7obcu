<?php
    if (isset($_POST['nazwa_kanalu']) && !empty($_POST['nazwa_kanalu'])){	
        $nazwa = $_POST['nazwa_kanalu'];
        mkdir("./../KANALY/$nazwa");
        mkdir("./../KANALY/$nazwa/PLIKI");
        copy("./../../.TEMPLATE_KANALU/dodawanie_do_tabeli.php", "./../KANALY/$nazwa/dodawanie_do_tabeli.php");
        copy("./../../.TEMPLATE_KANALU/golomp.jpg", "./../KANALY/$nazwa/golomp.jpg");
        copy("./../../.TEMPLATE_KANALU/index.php", "./../KANALY/$nazwa/index.php");
        copy("./../../.TEMPLATE_KANALU/pobierz.php", "./../KANALY/$nazwa/pobierz.php");
        copy("./../../.TEMPLATE_KANALU/tf.jpg", "./../KANALY/$nazwa/tf.jpg");
        copy("./../../.TEMPLATE_KANALU/usun.php", "./../KANALY/$nazwa/usun.php");
        copy("./../../.TEMPLATE_KANALU/wyslij.php", "./../KANALY/$nazwa/wyslij.php");
        copy("./../../.TEMPLATE_KANALU/wyswietlanie_tabeli.php", "./../KANALY/$nazwa/wyswietlanie_tabeli.php");
        copy("./../../.TEMPLATE_KANALU/style.css", "./../KANALY/$nazwa/style.css");
        header("Location: ./../index.php");
    }
