<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapitulace rezervace</title>
</head>
<body>
    <h2>Rekapitulace</h2>
    <table>
        <tr>
            <th>Jméno a příjmení: </th>
            <td><?= $_POST["jmeno"];?></td>
        </tr>
        <tr>
            <th>Emailová adresa: </th>
            <td><?= $_POST["email"];?></td>
        </tr>
        <tr>
            <th>Vybraný sport: </th>
            <td><?= $_POST["sport"];?></td>
        </tr>
        <?php 
            $vybaveni = $_POST["vybaveni"] ?? [];
            if (!empty($vybaveni)) {
                $vybaveni = implode(", ", $vybaveni);
            } else {
                $vybaveni = "Bez vybavení";
            }
        ?>
        <tr>
            <th>Vybavení</th>
            <td><?php print_r($vybaveni)?></td>
        </tr>
    </table>
</body>
</html>