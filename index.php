<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatsune miku.PHP</title>
</head>
<body>
    <?php
     // deklaracja zmiennej z liczba calkowita 
     $zmienna1=10;
    // wypisanie zmiennej na ekran
    echo $zmienna1;
    // zmienna zawierająca tekst
    $zmienna2="klasa 3tie";
    // wyślemy na ekran znak nowej linii z HTML <br> a potem wyslemy druga zmienna
    echo "<br>";
    echo $zmienna2;
    // zmienne zmiennoprzecinkowe
    $zmienna3=47.14;
    echo "<br>";
    echo $zmienna3;
    // dzialania matematyczne
    // dzielenie dwoch zmiennych - zmienna1 i zmienna3
    echo "<br>";
    echo $zmienna1/$zmienna3;
// łączenie tekstów - wykonujemy to poprzez użycie znaku ".", można to stosować zarówno przy zmiennych jak i zmiennych i tekstach
echo "<br>";
echo $zmienna2." - tutaj wypisałem zmienną";
echo "<br>";
echo $zmienna2.$zmienna2;
    ?>
</body>
</html>