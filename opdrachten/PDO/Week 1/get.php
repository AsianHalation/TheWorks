<?php
    $naam = $_GET["name"];
    $Achternaam = $_GET["achternaam"];
    $email = $_GET["email"];
    $leeftijd = $_GET["leeftijd"];
    $adres = $_GET["adres"];
?>

<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>
        
    <form action="get.php" method="GET">

        Naam: <input type="text" name="name"><br>
        Achternaam: <input type="text" name="achternaam"><br>
        E-mail: <input type="text" name="email"><br>
        Leeftijd: <input type="int" name="leeftijd"><br>
        adres:  <input type="text" name="adres"><br>

        <input type="submit" value="Verzenden">
    </form>

    </body>

</html>