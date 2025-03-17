<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funkcje matematyczne</title>
</head>
<body>
    <main>
        <?php
        function delta($a,$b,$c){
            $delta=$b*$b-4*$a*$c;
            echo "delta wynosi: ".$delta;
        }
        delta(2,5,8);
        function zaokraglenieDo3miejsc($liczba1,$liczba2){
            $dzielenie=$liczba1/$liczba2;
            $zaokr=round($dzielenie,3);
            return $zaokr;
        }
        $wynik=zaokraglenieDo3miejsc(7.345,4);
        echo "<br>";
        echo "zaokrąglenie do 3 miejsc po przecinku ".$wynik;
        echo "<br>";
        function zaokraglenia($liczba){
            echo "zaokrąglenie w górę: ".ceil($liczba);
            echo "<br>";
            echo "zaokrągalnie w dół ".floor($liczba);
        }
        zaokraglenia(1000.341);
        ?>
    </main>
</body>
</html>