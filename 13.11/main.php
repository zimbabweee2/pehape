<?php
require_once "funkcje.php";
include "produkty.php";

$cenaNetto = 1000.00;
$vat = 0.23;
$cena = 1200.50;
$rabat = 10;
$nazwa = " Mysz   ";
$nazwa2 = "Wąs";

include "tabela.php";
foreach ($produkty as $produkt) { 
    echo wierszTabeliProduktow($produkt);
}
echo "</table><br><br>";

$tanieProdukty = array_filter($produkty, fn($produkt) => $produkt[1] < 1000);
$posortowaneProdukty = usort($produkty, fn($a, $b) => $a[1] <=> $b[1]);

echo formatCena($cena);
echo formatCena(cenaBrutto($cenaNetto, $vat));
echo formatCena(cenaBrutto($cenaNetto, 0.08));
echo formatCena(cenaPoRabacie($cena));

echo "Stan magazynu: " . stanMagazynu(0);
echo "Stan magazynu: " . stanMagazynu(3);
echo "Stan magazynu: " . stanMagazynu(10);

echo trim($nazwa) . "<br>";
echo mb_strlen($nazwa2) . "<br>";
echo mb_strtoupper($nazwa2) . "<br>";
echo str_contains($nazwa, "y") . "<br>";
echo date("d.m.Y H:i:s", time());

echo "<pre>";
    print_r($tanieProdukty);
    echo "<br>";
    print_r($posortowaneProdukty);
echo "</pre>"
?>