<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wykorzystanie funkcji</title>
</head>
<body>
    <?php 
    function podajDane($dane1,$dane2,$dane3){

        echo "<br>";
        echo "podany parametr - ".$dane1." ma typ ".gettype($dane1);
        echo "<br>";
        echo "podany parametr - ".$dane2." ma typ ".gettype($dane2);
        echo "<br>";
        echo "podany parametr - ".$dane3." ma typ ".gettype($dane3);
    }
    podajDane(123.45,"test",234);
    podajDane(44,"test numer 2","ala ma kota");
    podajDane(789,455,85.5565);
    ?>
</body>
</html>