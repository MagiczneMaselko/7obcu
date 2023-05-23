<?php
include_once 'PHP_connect.php';
$pol = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!empty($_POST['login'])) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $sprawdz = "SELECT haslo FROM zarejestrowani WHERE `login` = '$login';";
    $result = mysqli_query($pol, $sprawdz);
    $row = mysqli_fetch_assoc($result);
    $zahashowane_haslo_z_bazy = $row['haslo'];
    if (file_exists("./../ZALOGOWANY/$login")) {
        if (password_verify($haslo, $zahashowane_haslo_z_bazy)) {
            $wynik = mysqli_query($pol, $sprawdz);
            if (mysqli_num_rows($wynik) === 1) {
                $_SESSION['zalogowany'] = true;
                $_SESSION['login'] = $login;
                header("Location: /7obcu/ZALOGOWANY/$login/index.php");
            }
        } else {
            echo "Nieprawidłowy login lub hasło!";
        }
    } else {
        echo "Nieznalezniono użytkownika!";
    }
}

mysqli_close($pol);
