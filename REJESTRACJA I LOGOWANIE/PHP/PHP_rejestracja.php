<?php
$pol = mysqli_connect('localhost', 'root', 'zaq1@WSX', 'rejestracja');
if (!empty($_POST['login'])) {
    $login = $_POST['login'];                                                                                                            #
    $haslo = $_POST['haslo'];                                                                                                           #
    $email = $_POST['email'];                                                                                                           #
    $haslopowt = $_POST['haslo_powt'];                                                                                                  #definiowanie formularza
    $liczba = preg_match('@\d@', $haslo);                                                                                            #
    $duza_litera = preg_match('@[A-Z]@', $haslo);                                                                                       #
    $mala_litera = preg_match('@[a-z]@', $haslo);                                                                                       #
    $znk_spec = preg_match('@[^\w]@', $haslo);
    $szyfr_haslo = password_hash($haslo, PASSWORD_DEFAULT);                                                                                   #definiowanie złożoności hasła
    $sql = "INSERT INTO `zarejestrowani` (ID_uzytkownika, login, haslo, email) VALUES ('NULL', '$login' , '$szyfr_haslo' , '$email');";       #wpisywanie uzytkwonika to tabeli
    $czy_ist = "SELECT '$login' FROM zarejestrowani WHERE `login`= '$login' OR `email` = '$email';";                                    #zapytanie czy uzytkownik istnieje
    $wynik = mysqli_query($pol, $czy_ist);
    if (mysqli_num_rows($wynik) == 0) {                                                                                                  #Warunek czy użytkownik istnieje
        if (password_verify($haslo, $szyfr_haslo)) {                                                                                                   #Warunek czy hasla się zgadzają
            if (strlen($haslo) < 8 || !$liczba || !$duza_litera || !$mala_litera || !$znk_spec) {                                    #Warunek czy haslo jest wystarczajaco silne
                echo "Nie poprawna złożoność hasła";
            } elseif (mysqli_query($pol, $sql)) {
                echo "POMYŚLNIE ZAREJESTROWANO!.";
            } else {
                echo "ERROR $sql. " . mysqli_error($pol);
            }
        } else {
            echo "Hasła nie zgadzają sie ze sobą!";
        }
    } else {
        echo "Login lub email są już zajęte!";
    }
}
mysqli_close($pol);
