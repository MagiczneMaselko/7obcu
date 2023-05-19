<?php
    $nazwa_folderu = $_POST['login'];
    mkdir("./../ZALOGOWANY/$nazwa_folderu");
    copy("./../ZALOGOWANY/.TEMPLATE_KANALU/index.php", "./../ZALOGOWANY/$nazwa_folderu/index.php");
    copy("./../ZALOGOWANY/.TEMPLATE_KANALU/patchnotes.html", "./../ZALOGOWANY/$nazwa_folderu/patchnotes.html");
    copy("./../ZALOGOWANY/.TEMPLATE_KANALU/strona_w_budowie.html", "./../ZALOGOWANY/$nazwa_folderu/strona_w_budowie.html");
    copy("./../ZALOGOWANY/.TEMPLATE_KANALU/style.css", "./../ZALOGOWANY/$nazwa_folderu/style.css");
