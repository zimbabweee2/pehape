<?php
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
?>