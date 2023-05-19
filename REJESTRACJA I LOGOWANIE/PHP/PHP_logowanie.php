<?php
$pol = mysqli_connect('localhost', 'root', 'zaq1@WSX', 'rejestracja');
if (!empty($_POST['login'])) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $sprawdz = "SELECT haslo FROM zarejestrowani WHERE `login` = '$login';";
    $result = mysqli_query($pol, $sprawdz);
    $row = mysqli_fetch_assoc($result);
    $zahashowane_haslo_z_bazy = $row['haslo'];
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
}

mysqli_close($pol);
