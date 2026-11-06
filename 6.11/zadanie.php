<?php

$produkty = [
    [
        "model" => "Wentylator Corsair ARGB 120mm",
        "kategoria" => "Podzespoły",
        "cena" => 99.99
    ],
    [
        "model" => "Myszka Silver Monkey",
        "kategoria" => "Peryferia",
        "cena" => 99.99
    ],
        [
        "model" => "Razer Deathadder Hyperspeed v3",
        "kategoria" => "Peryferia",
        "cena" => 299.99
    ],
    [
        "model" => "Wooting 60he",
        "kategoria" => "Peryferia",
        "cena" => 599.99
    ]
];

usort($produkty, function ($a, $b) {
    return $a['cena'] <=> $b['cena'];
});

$ceny = array_column($produkty, 'cena');

$liczba = count($produkty);
$srednia = array_sum($ceny) / $liczba;
$max = max($ceny);
$min = min($ceny);

$kategorie = array_unique(array_column($produkty, 'kategoria'));

echo "<h1>Katalog produktów</h1>";

echo "<table border='1'>";
echo "<tr>
        <th>Model</th>
        <th>Kategoria</th>
        <th>Cena</th>
    </tr>";

foreach ($produkty as $produkt) {
    echo "<tr>";
    echo "<td>" . $produkt['model'] . "</td>";
    echo "<td>" . $produkt['kategoria'] . "</td>";
    echo "<td>" . $produkt['cena'] . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<h2>Statystyki</h2>";
echo "<p>Liczba produktów: " . $liczba . "</p>";
echo "<p>Średnia cena: " . $srednia . "</p>";
echo "<p>Najwyższa cena: " . $max . "</p>";
echo "<p>Najniższa cena: " . $min . "</p>";
echo "<p>Kategorie: " . implode(", ", $kategorie) . "</p>";

?>