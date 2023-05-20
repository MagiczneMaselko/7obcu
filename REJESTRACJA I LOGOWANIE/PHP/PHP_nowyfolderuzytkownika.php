<?php
    $nazwa_folderu = $_POST['login'];
    mkdir("./../ZALOGOWANY/$nazwa_folderu");
    mkdir("./../ZALOGOWANY/$nazwa_folderu/KANALY");
    
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/index.php", "./../ZALOGOWANY/$nazwa_folderu/index.php");
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/patchnotes.html", "./../ZALOGOWANY/$nazwa_folderu/patchnotes.html");
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/strona_w_budowie.html", "./../ZALOGOWANY/$nazwa_folderu/strona_w_budowie.html");
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/style.css", "./../ZALOGOWANY/$nazwa_folderu/style.css");
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/wyswietlanie_kanalow.php", "./../ZALOGOWANY/$nazwa_folderu/wyswietlanie_kanalow.php");
    /////////////////////////////////////////////////////////
    mkdir("./../ZALOGOWANY/$nazwa_folderu/EDYCJA");
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/EDYCJA/dodaj_kanal.php", "./../ZALOGOWANY/$nazwa_folderu/EDYCJA/dodaj_kanal.php");
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/EDYCJA/edycja_kanalu.php", "./../ZALOGOWANY/$nazwa_folderu/EDYCJA/edycja_kanalu.php");
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/EDYCJA/kopiowanie_szablony_foldera.php", "./../ZALOGOWANY/$nazwa_folderu/EDYCJA/kopiowanie_szablony_foldera.php");
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/EDYCJA/style.css", "./../ZALOGOWANY/$nazwa_folderu/EDYCJA/style.css");
    copy("./../ZALOGOWANY/.TEMPLATE_UZYTKOWNIKA/EDYCJA/tabela.php", "./../ZALOGOWANY/$nazwa_folderu/EDYCJA/tabela.php");
