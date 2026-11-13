<?php
function formatCena(float $cena): string {
    return number_format($cena, 2, ',', '') . " zł";
}

$cena = 1200.50;

echo formatCena($cena);


?>