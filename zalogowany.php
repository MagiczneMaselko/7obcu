<!DOCTYPE html>
<html lang="pl">

  <head>
    <title>Strona główna</title>
    <meta charset="utf8" />
    <style>
      body {
        font-family: Comic Sans MS;
      }
    </style>
    <?php
    session_start();
    if ($_SESSION['zalogowany'] === false) {
      die('Odmowa dostępu!');
    }
    ?>
  </head>
  <body>
    <h1>ZALOGOWANO POMYŚLNIE!!!!</h1>
    <br>
    <?php echo "Zalogowano pomyślnie jako:  ", $_SESSION['login']; ?>
    <br>
    <a href='./REJESTRACJA I LOGOWANIE/logowanie.php'>Powrót do logowania</a>
    <br>
    <a href='./REJESTRACJA I LOGOWANIE/PHP/PHP_wylogowanie.php'>WYLOGUJ</a>
  </body>
</html>
