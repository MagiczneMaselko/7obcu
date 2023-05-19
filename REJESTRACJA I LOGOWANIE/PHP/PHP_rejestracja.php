<?php
$pol = mysqli_connect('localhost', 'root', 'zaq1@WSX', 'rejestracja');
if (!empty($_POST['login'])) {
    $login = $_POST['login'];                                                                                                            
    $haslo = $_POST['haslo'];                                                                                                           
    $email = $_POST['email'];                                                                                                           
    $haslopowt = $_POST['haslo_powt'];                                                                                                 
    $liczba = preg_match('@\d@', $haslo);                                                                                            
    $duza_litera = preg_match('@[A-Z]@', $haslo);                                                                                       
    $mala_litera = preg_match('@[a-z]@', $haslo);                                                                                       
    $znk_spec = preg_match('@[^\w]@', $haslo);
    $szyfr_haslo = password_hash($haslo, PASSWORD_DEFAULT);                                                                                
    $sql = "INSERT INTO `zarejestrowani` (ID_uzytkownika, login, haslo, email) VALUES ('NULL', '$login' , '$szyfr_haslo' , '$email');";      
    $czy_ist = "SELECT '$login' FROM zarejestrowani WHERE `login`= '$login' OR `email` = '$email';";                                
    $wynik = mysqli_query($pol, $czy_ist);
    if (!file_exists($login)) {
        if (mysqli_num_rows($wynik) == 0) {                                                                                             
            if (password_verify($haslo, $szyfr_haslo)) {                                                                                                   
                if (strlen($haslo) < 8 || !$liczba || !$duza_litera || !$mala_litera || !$znk_spec) {                                  
                    echo "Nie poprawna złożoność hasła";
                } elseif (mysqli_query($pol, $sql)) {
                    include_once 'PHP_nowyfolderuzytkownika.php';
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
    } else {
        echo "Login lub email są już zajęte!";
    }
}
mysqli_close($pol);
