<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wykorzystanie funkcji</title>
</head>
<body>
    <?php 
    function podajDane($dane1,$dane2,$dane3,$dane4){
        echo $dane1;
        echo "<br>";
        echo gettype($dane1);
        echo "<br>";
        echo "podany parametr - ".$dane2." ma typ ".gettype($dane2);
    }
    podajDane(7,"ala masffasfaa kota",4.2,'dasd');
    function mnozenie($liczba1,$liczba2,$liczba3){
        $wynik=$liczba1*$liczba2*$liczba3;
        return $wynik;
    }
    echo "<br>";
    echo mnozenie (2,2,5);
    echo "<br>";
    $dzialanie=mnozenie(2,2,5);
    echo $dzialanie;
    ?>
</body>
</html>