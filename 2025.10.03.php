<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tablica=array("osiemnaście",30,402,105.60,"cokolwiek");
    echo $tablica[0];
    echo "<br>";
    $tablica[2]=555;
    echo $tablica[2];
    echo "<br>";
    $suma=$tablica[1]+$tablica[3];
    echo $suma;
    echo "<br>";
    $tablica2=[4,66,"tekst"];
    print_r($tablica2);
    $tablica3=[
        ["ala","kot"],
        [10,23],
        [45.5,32.8],
        ["błyskotliwość","spryt"]
    ];
    echo "<br>";
    echo "<br>";
    echo $tablica3[1][1];
    echo "<br>";
    echo $tablica3[2][0];
    echo "<br>";
    print_r($tablica3);
    echo "<br>";
    echo $tablica3[2][0];
    $tablica3[2][0]="klasa3TIE";
    echo "<br>";
    echo $tablica3[2][0];
    ?>
</body>
</html>