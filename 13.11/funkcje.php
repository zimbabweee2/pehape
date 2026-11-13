<?php
include "produkty.php";

$cenaNetto = 1000.00;
$vat = 0.23;
$cena = 1200.50;
$rabat = 10;
$nazwa = " Mysz   ";
$nazwa2 = "Wąs";

function formatCena(float $cena): string {
    return number_format($cena, 2, ',', '') . " zł<br>";
}

function cenaBrutto(float $cenaNetto, float $vat): float {
    return $cenaNetto * (1 + $vat);
}

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

function wierszTabeliProduktow(array $produkt): string {
    return "<tr>
                <td>{$produkt[0]}</td>
                <td>" . formatCena($produkt[1]) . "</td>
                <td>{$produkt[2]}</td>
            </tr>";
}

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
print_r($tanieProdukty);
print_r($posortowaneProdukty)
?>