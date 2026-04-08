<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukládání dat</title>
</head>
<body>
    <h2>Vytvoření objednávky</h2>
    <form action="objednavky.php" method="POST">
        <input type="text" placeholder="Jméno a Příjmení" name="zakaznik">
        <input type="text" placeholder="Produkt" name="produkt">
        <input type="email" placeholder="Email" name="email">
        <input type="submit">
    </form>
</body>
</html>