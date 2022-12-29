<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>

    <div class="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'wedkowanie');

    if (!$conn) {
        echo 'Brak polaczenia z baza danych';

    }else {

        $sql = "SELECT `nazwa`,`wystepowanie` FROM `ryby` WHERE `styl_zycia`=1";
        $zapytanie = mysqli_query($conn, $sql);

        if(mysqli_num_rows($zapytanie) > 0) {
            echo '<ul>';
           while($wynik = mysqli_fetch_assoc($zapytanie)) {
            echo '<li>'.$wynik['nazwa'].', występowanie:'.$wynik['wystepowanie'].'</li>';
           }
           echo '</ul>';
        }
    }
    mysqli_close($conn); 
?>
        </div>
    <div class="prawy">
        <img src="ryba1.jpg" alt="Sum"></br>
        <a href="kwerendy.txt" target="_blank">Pobierz kwerendy </a>
    </div>
    <div class="stopka">
        <p>Stronę wykonał:</p>
    </div>
</body>
</html>