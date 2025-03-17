<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>działania na zmiennych cz2</title>
</head>
<body>
<?php
   $liczba=64;
   $tekst="cztery";
   $zmiennaprzecinek=16.4;
   $logiczna=true;
   echo $liczba;
   echo "<br>";
   echo gettype($liczba);
   echo "<br>";
   echo "zmienna o nazwie zmiennaprzecinek ma wartość ".$zmiennaprzecinek." i jest typu ".(gettype ($zmiennaprzecinek));
   echo "<br>";
   echo "zmienna o nazwie liczba ma wartość ".$liczba." i jest typu ".(gettype ($liczba));
   echo "<br>";
   echo "zmienna o nazwie ztekst ma wartość ".$tekst." i jest typu ".(gettype ($tekst));
   echo "<br>";
   echo "zmienna o nazwie zlogiczna ma wartość ".$logiczna." i jest typu ".(gettype ($logiczna));
   //przypisanie do zmiennej o nazwie zmiana wartosci zmiennej liczba
   $zmiana=$liczba;
   //przypisanie yypu zmiennej o nazwie zmiana
   echo "<br>".gettype ($zmiana);
   //zmiana typu zmiennej o nazwie zmiana (rzutowanie)
   $zmiana=(float)$liczba;
   //wypisanie typu zmiennej o nazwie zmiana
   echo "<br>".gettype($zmiana);
    ?>
</body>
</html>