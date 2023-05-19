<!DOCTYPE html>
<html lang = "pl">
    <head>
        <meta charset="utf8">
        <link href="style.css" rel="stylesheet">
        <title>LOGOWANIE</title>
        <?php
        session_start();
        if (!isset($_SESSION['zalogowany'])) {
            $_SESSION['zalogowany'] = false;
        }
        ?>
    </head>
    <body>
        <h1>
            LOGOWANKO
        </h1>
        <br>
        <br>
        <form method = "post">
            LOGIN:*
            <br>
            <input type="text" name="login" id="login">
            <br>
            HASŁO:*
            <br>
            <input type="password" name="haslo">
            <br>
            <br>
            <input type="submit" name="Załóż konto">
            <br>
            <?php 
            include_once ('PHP/PHP_logowanie.php'); ?> <!--DOŁĄCZANIE PLIKU PHP (w razie czego zmienić ściezka)-->
            <br>
            <br>
            <?php
            if ($_SESSION['zalogowany'] === true) {
            echo "jesteś zalogowany jako:   ", $_SESSION['login'];
            echo "<br>";
            echo "<a href='./PHP/PHP_wylogowanie.php'>WYLOGUJ</a>";
            }
            ?> 
            <br>
            <br>
            <br>
            <a href="rejestracja.php"> REJESTRACJA</a>
    </body>
</html>
