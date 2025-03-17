<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tablica=array("Tomek", "Ala", "Pies", 342, "To 34", 12.56, "12 to liczba całkowita");
    echo "<br>";
    echo $tablica[0]."     ".$tablica[3];
    echo "<br>";
    echo $tablica[3]+$tablica[5];
    echo "<br>";
    echo $tablica[4];
    echo "<br>";
     $tablica[4]="34 jest liczbą naturalną";
    echo $tablica[4];
    ?>
</body>
</html>