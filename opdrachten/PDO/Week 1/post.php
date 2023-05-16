<?php

    $naam = $_POST["name"];
    $Achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $leeftijd = $_POST["leeftijd"];
    $adres = $_POST["adres"];

    echo "$naam .$Achternaam .$email .$leeftijd .$adres";

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>

        <form emthod="POST" action="post.php">
            Naam: <input type="text" name="name"><br>
            Achternaam: <input type="text" name="achternaam"><br>
            E-mail: <input type="text" name="email"><br>
            Leeftijd: <input type="int" name="leeftijd"><br>
            adres:  <input type="text" name="adres"><br>

            <input type="submit" value="Verstuur">
        </form>

    </body>

</html>