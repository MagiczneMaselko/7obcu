<!DOCTYPE html>
<html lang = "pl">
    <head>
        <meta charset="utf8">
        <link href="style.css" rel="stylesheet">
        <title>REJESTRACJA</title>
    </head>
    <body>
            <h1>
                REJESTROWANKO
            </h1>
            <br>
            <br>
            <form method = "post">
                LOGIN:*
                <br>
                <input type="text" name="login" id="login">
                <br>
                E-MAIL:*
                <br>
                <input type="email" name="email">
                <br>
                HASŁO:*
                <br>
                <input type="password" name="haslo">
                <br>
                POWTÓRZ HASŁO:*
                <br>
                <input type="password" name="haslo_powt">
                <br>
                <br>
                <input type="submit" name="Załóż konto">
                <br>
                <?php include_once 'PHP/PHP_rejestracja.php'; ?>   <!--DOŁĄCZANIE PLIKU PHP (w razie czego zmienić ściezka)-->
                <br>
                <br>
                <br>
                <a href="logowanie.php"> LOGOWANIE</a>
            </form>
                <b>hasło musi zawierać:
                    <ul>
                        <li>minimum 8 znaków</li>
                        <li>1 dużą litere</li>
                        <li>znak specialny</li>
                        <li>male litery</li>
                        <li>cyfre</li>
                    </ul>
                </b>
    </body>
</html>


