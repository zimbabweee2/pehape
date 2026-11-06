<?php
//php indeksuje od zera
$kategorie = ["Podzespoły", "Peryferia", "Akcesoria"];
//zapisze do zmiennej kategorię o indeksie 0 czyli Podzespoły
$kategoria = $kategorie[0];
echo $kategoria;
//liczba elementów w tablicy
echo count($kategorie);
//sprawdz czy cos jest w tablicy 
if(in_array("Peryferia", $kategorie)) {
    echo "Peryferia jest w tablicy";
}
$tekst = "Dostępne kategorie: ";
$tekst .= implode(", ", $kategorie); //doklej elementy tablicy jako ciąg znaków
echo $tekst;
$tekstRozdzielonySpacjami = "Ala ma kota";
$tablicaSlow = explode(" ", $tekstRozdzielonySpacjami); //rozdziel tekst na tablicę słów
echo "<pre>"; //dodajemy <pre> aby print_r był czytelny
print_r($tablicaSlow);
echo "</pre>";

//tablica asocjacyjna
$produkt = [
    "model" => "XYZ123",
    "kategoria" => "Podzespoły",
    "cena" => 199.99
];
echo "<pre>";
print_r($produkt);
echo "</pre>";
//odwołanie przez klucz
echo $produkt["model"];
//zmiana po kluczu
$produkt["cena"] = 249.99;
//usuwanie elementu po kluczu
unset($produkt["cena"]);
//bezpieczny odczyt po kluczu
$cena = isset($produkt["cena"]) ? $produkt["cena"] : "Brak ceny";
echo $cena;
//albo wartość zastępcza:
$cena = $produkt["cena"] ?? "Brak ceny";
echo $cena;
//tablica wielowymiarowa
$produkty = [
    [
        "model" => "XYZ123",
        "kategoria" => "Podzespoły",
        "cena" => 199.99
    ],
    [
        "model" => "ABC456",
        "kategoria" => "Peryferia",
        "cena" => 99.99
    ]
];
echo "<pre>";
print_r($produkty);
echo "</pre>";
//model z drugiej pozycji w tablicy wielowymiarowej
echo $produkty[1]["model"];
//cena z pierwszej pozycji w tablicy wielowymiarowej
echo $produkty[0]["cena"];
//funkcje pomocnicze - suma i wyciaganie kolumny
$sumaCen = array_sum(array_column($produkty, "cena"));
echo "Suma cen: " . $sumaCen;
//tablica nieposortowana
$nieposortowane = [5, 3, 8, 1, 9];
echo "<pre>";
print_r($nieposortowane);
echo "</pre>";
//sortowanie rosnąco
sort($nieposortowane);
echo "<pre>";
print_r($nieposortowane);
echo "</pre>";
//sortowanie malejąco
rsort($nieposortowane);
echo "<pre>";
print_r($nieposortowane);
echo "</pre>";

//sortowanie po kluczach
$tablicaPoKluczach = [
    "c" => 3,
    "a" => 1,
    "b" => 2
];
echo "<pre>";
print_r($tablicaPoKluczach);
echo "</pre>";
ksort($tablicaPoKluczach); //sortowanie rosnąco po kluczach
echo "<pre>";
print_r($tablicaPoKluczach);
echo "</pre>";
krsort($tablicaPoKluczach); //sortowanie malejąco po kluczach
echo "<pre>";
print_r($tablicaPoKluczach);
echo "</pre>";
//grupowanie elementów tablicy po kluczu
$produktyPoKategorii = [];
foreach ($produkty as $p) {
    $produktyPoKategorii[$p["kategoria"]][] = $p;
}
echo "<pre>";
print_r($produktyPoKategorii);
echo "</pre>";
?>