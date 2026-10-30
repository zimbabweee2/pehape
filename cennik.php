<?php
require "typy.php"

// $nazwa  = "Mysz Razer";
// $cenanetto = 199.00;
// $ilosc = 15;
// $promocja = false;

foreach 

const VAT = 0.23;
$cenabrutto = ($cenanetto * (1 + VAT));

$wartosc = ($cenabrutto * $ilosc);

$rabat = 0.15;
$cenazrabatem = ($cenabrutto * (1 - $rabat));

$iloscrat = 10;
$cenaraty = round($cenabrutto / $iloscrat, 2);

$opis = "Procesor";
$opis .= " Ryzen 5";
echo "Produkt: $opis<br>";

// var_dump(5 == "5");

// var_dump((float) "5.50");
// var_dump(is_numeric("5,50"));

// to byly testy

echo number_format($cenabrutto, 2, ',', ' ') . " zł";

include "strona.php";
?>