<?php

$produkty = [
    [
        "model" => "Wentylator Corsair ARGB 120mm",
        "kategoria" => "Podzespoły",
        "cena" => 99.99
    ],
    [
        "model" => "Słuchawki HyperX Cloud II",
        "kategoria" => "Peryferia",
        "cena" => 289.99
    ],
        [
        "model" => "Myszka Razer Deathadder Hyperspeed v3",
        "kategoria" => "Peryferia",
        "cena" => 299.99
    ],
    [
        "model" => "Klawiatura Wooting 60HE",
        "kategoria" => "Peryferia",
        "cena" => 599.99
    ]
];

usort($produkty, function ($a, $b) {
    return $a['cena'] <=> $b['cena'];
});

$ceny = array_column($produkty, 'cena');

$liczbaProduktow = count($produkty);
$sredniaCena = array_sum($ceny) / $liczbaProduktow;
$maxCena = max($ceny);
$minCena = min($ceny);

$kategorie = array_unique(array_column($produkty, 'kategoria'));

echo "<h1>Katalog produktów</h1>";

echo "<table border='1'>
        <tr>
            <th>Model</th>
            <th>Kategoria</th>
            <th>Cena</th>
        </tr>";

foreach ($produkty as $produkt) {
    echo "<tr>";
    echo "<td>" . $produkt['model'] . "</td>";
    echo "<td>" . $produkt['kategoria'] . "</td>";
    echo "<td>" . $produkt['cena'] . " zł</td>";
    echo "</tr>";
}

echo "</table>";

echo "<h2>Statystyki</h2>";
echo "<p>Liczba produktów: " . $liczbaProduktow . "</p>";
echo "<p>Średnia cena: " . number_format($sredniaCena, 2, '.', '') . " zł</p>";
echo "<p>Najwyższa cena: " . number_format($maxCena, 2, '.', '') . " zł</p>";
echo "<p>Najniższa cena: " . number_format($minCena, 2, '.', '') . " zł</p>";
echo "<p>Kategorie: " . implode(", ", $kategorie) . "</p>";

?>