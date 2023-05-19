<!DOCTYPE html5>
<html>
    <head>
        <meta charset="utf8">
        <title>CZAT - PRE ALFA</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>CZAT GDZIES TUTAJ</h1>
        <div class="blok_czatu"> 
            <?php
                $pol = mysqli_connect('localhost','root','','czat1');
                $sql = "SELECT Wiadomosc , Godzina FROM wiadomosci;";
                $wyn = mysqli_query($pol, $sql); 
                echo "<ul>";
                while($row=mysqli_fetch_row($wyn))
                {
                    echo "<li><p>$row[1] | $row[0]</p></li>";
                }
                echo "</ul>";
                mysqli_close($pol);
            ?>
        </div>
        <br>
        <form method = "post">
            <input type="text" name="wiad">
            <br>
            <br>
            <input type="submit" value="Wyślij">
            <br>
            <?php
                $pol = mysqli_connect('localhost','root','','czat1');
                if(isset($_POST['wiad']) && !empty($_POST['wiad'])){
                    $wiad = $_POST['wiad'];
                    $sql = "INSERT INTO wiadomosci (`ID`, `Wiadomosc`) VALUES ('NULL' , $wiad);"; 
                    if(mysqli_query($pol, $sql)){
                        echo "DODANO NOWY REKORD.";
                    } else{
                        echo "ERROR $sql. " . mysqli_error($pol);
                }
            }
            ?>
        </form>
    </body>
</html>