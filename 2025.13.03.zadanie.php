<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tablica=array("jogurt"=>1.5,"masło"=>4.3,"mleko"=>2.56,"ser"=>35.2,"chleb"=>5.4,"szynka"=>52.6,"pomidor"=>21.4);
    print_r($tablica);
    
    echo "<br>";
    echo $tablica["szynka"];
    echo "<br>";
    echo $tablica["pomidor"];
    echo "<br>";
    echo $tablica["ser"];
    echo "<br>";
    echo $tablica["masło"];
    echo "<br>";
    ?>
</body>
</html>