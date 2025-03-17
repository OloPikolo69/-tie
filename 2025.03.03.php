<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funkcje</title>
</head>
<body>
    <?php
function DzielenieNaOdcinki($dlugosc, $iloscpodzialow){
    $odcinek=$dlugosc/$iloscpodzialow;
    return $odcinek;
}
$wynik=DzielenieNaOdcinki(200,50);
echo "podzieliliśmy kabel na odcinki o długości $wynik";
echo "<br>";
function laczenietekstow($tekst){
    echo "hej, fajnie, że jesteś! napisałeś: $tekst";
}
echo "<br>";
laczenietekstow("natan zostaje abstynentem");
function przekatnakwadratu($a){
    $przekatna=$a*sqrt(2);
    return $przekatna;
}
echo "<br>";
echo "przekątna kwadratu o boku 100 wynosi". przekatnakwadratu(100);
echo "<br>";
echo "przekątna kwadratu o boku 200 wynosi". przekatnakwadratu(200);
echo "<br>";
echo "przekątna kwadratu o boku 50 wynosi". przekatnakwadratu(50);
echo "<br>";
function przekatnaprostokatna($a,$b){
    $c=sqrt(pow($a,2)+pow($b,2));
    return $c;
}
echo "<br>";
echo "przekątna prostokąta o bokach 100 i 50 wynosi". przekatnaprostokatna(100,50);
echo "<br>";
    ?>
</body>
</html>