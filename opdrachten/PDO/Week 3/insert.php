<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>
        <?php

            // Maak een connectie met de database winkel.
            $host = 'localhost:3307';
            $db   = 'winkel';
            $user = 'root';
            $pass = '';
            $charset = 'utf8mb4';
            
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            try 
            {
                $pdo = new PDO($dsn, $user, $pass, $options);
                echo "Connected to database ($db)";
            } 
                catch (\PDOException $e) 
            {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }

        ?>

        <!--Maak een nieuw formulier aan in je insert.php file met een POST method -->
        <form emthod="POST" action="insert.php">

            <!--Voeg 3 input fields in je formulier en een button-->
            product_naam: <input type="text" name="product"><br>
            prijs_per_stuk: <input type="float" name="prijs"><br>
            omscrijving: <input type="text" name="omschrijving"><br>

            <input type="submit" value="Voltooien">

        </form>

        <!--Schrijf daarna je PHP code zodat er een product wordt toegevoegd in de tabel producten met de gegevens die in het formulier worden ingevuld -->
        <?php
            $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (?,?,?)";
            $stmt= $pdo->prepare($sql);
        ?>

    </body>
</html>