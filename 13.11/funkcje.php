<?php
include produkty.php;

function formatCena(float $cena): string {
    return number_format($cena, 2, ',', '') . " zł<br>";
}

function cenaBrutto(float $cenaNetto, float $vat): float {
    return $cenaNetto * (1 + $vat);
}

$cenaNetto = 1000.00;
$vat = 0.23;
$cena = 1200.50;
$rabat = 10;

function cenaPoRabacie(float $cena): float {
    global $rabat;
    return $cena * (1 - $rabat / 100);
}

function stanMagazynu(int $ilosc): string {
    return match (true) {
        $ilosc === 0 => "Brak w magazynie<br>",
        $ilosc < 5 => "Ograniczona ilość<br>",
        default => "Dostępny<br>",
    };
}

function produktyNaMagazynie(array $produkty): array {
    $produktyNaMagazynie = [];
    foreach ($produkty as $produkt) {
        if ($produkt[2] > 0) {
            $produktyNaMagazynie[] = $produkt;
        }
    }
    return $produktyNaMagazynie;
}

echo formatCena($cena);
echo formatCena(cenaBrutto($cenaNetto, $vat));
echo formatCena(cenaBrutto($cenaNetto, 0.08));
echo formatCena(cenaPoRabacie($cena));
echo "Stan magazynu: " . stanMagazynu(0);
echo "Stan magazynu: " . stanMagazynu(3);
echo "Stan magazynu: " . stanMagazynu(10);
?>