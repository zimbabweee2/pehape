<?php
require "dane-start.php";

$suma = 0;
$brakuje = 0;
$najdrozszy = null; // null to nic a 0 to liczba temu nie 0

$szukane = "Kabel HDMI 2m";
$znaleziony = null;  // null to nic a 0 to liczba temu nie 0

foreach ($produkty as $p) {
    $suma += $p["cena"] * $p["ilosc"];
    if ($p["ilosc"] < 1) {
        $brakuje++;
    }
    if ($najdrozszy === null || $p ["cena"] > $najdrozszy["cena"]) {
        $najdrozszy = $p;
    }
}

foreach ($produkty as $p) {
    if ($p["nazwa"] === $szukane) {
        $znaleziony = $p;
        break;
    }
}

echo "Wartość magazynu: "   
    . number_format($suma, 2, ',', ' ') . " zł<br>";

echo "Niedostępne: "
    . $brakuje . "<br>";

echo "Najdroższy produkt: "
    . $najdrozszy["nazwa"] . "<br>";

echo $znaleziony === null ? "Nie znaleziono" : "Znaleziono: " . $znaleziony["nazwa"] . "<br>";

// po zmienieniu nazwy szukane na kabel hdmi 3m ktorego
// nie ma wyswietla sie trying to access array offset on value of type null
// wiec jesli dobrze rozumiem to php nie moze wysietlic "niczego"

?>