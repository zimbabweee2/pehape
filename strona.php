<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pehape</title>
</head>
<body>
    <br><br>
    <table border=1>
        <tr>
            <th>Nazwa</th>
            <th>Netto</th>
            <th>Brutto</th>
            <th>Ilość</th>
            <th>Wartość</th>
        </tr>
        <tr>
            <td><?= $nazwa ?></td>
            <td><?= number_format($cenanetto, 2) ?>zł</td>
            <td><?= number_format($cenabrutto, 2) ?>zł</td>
            <td><?= $ilosc ?></td>
            <td><?= number_format($wartosc, 2) ?>zł</td>
        </tr>
    </table>

    <p><?= number_format($cenazrabatem, 2) ?>zł</p>
    <p><?= number_format($cenaraty, 2) ?>zł</p>
</body>
</html>