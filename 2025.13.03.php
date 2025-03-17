<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
        $tablica=array("das",111,12,5);
        $tablica2[]="olek";
        $tablica2[]=23;
        $tablica[]=762.12;
        $tablica3[]=$tablica;
        $tablica[]=$tablica2;
        echo "<br>";
        print_r($tablica);
        echo "<br>";
        print_r($tablica2);
        echo "<br>";
        print_r($tablica3);
        $tablica4["imie"]="piotr";
        $tablica4["nazwisko"]="batalion";
        $tablica4["nrbuta"]="42";
        echo "<br>";
        print_r($tablica4);
        echo "<br>";
        echo $tablica4["nazwisko"];
        $tablica5=array("bulka"=>10,"spaghetto"=>1500,"chrupbox"=>12);
        echo "<br>";
        print_r($tablica5);
        echo "<br>";
        echo $tablica5["chrupbox"];
        ?>
    </main>
</body>
</html>