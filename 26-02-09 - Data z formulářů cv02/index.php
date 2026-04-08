<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervace sportoviště</title>
</head>
<body>
    <h2>Rezervace sportoviště</h2>
    <form action="data.php" method="POST">
        <div class="form-group">
            <label for="jmeno">Jméno a příjmení: </label>
            <input type="text" id="jmeno" name="jmeno" required>
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="sport">Který sport chcete provozovat?</label>
            <select name="sport" id="sport" required>
                <option value="" disabled selected>--Výběr sportu--</option>
                <option value="Fotbal">Fotbal</option>
                <option value="Basketbal">Basketbal</option>
                <option value="Squash">Squash</option>
                <option value="Házená">Házená</option>
            </select>
        </div>
        <div class="form-group">
            <h4>Vybavení</h4>
            <div>
                <label for="rozlisovaky">Rozlišováky</label>
                <input type="checkbox" id="rozlisovaky" name="vybaveni[]" value="Rozlišováky">
            </div>
            <div>
                <label for="kuzely">Kužely</label>
                <input type="checkbox" id="kuzely" name="vybaveni[]" value="Kužely">
            </div>
            <div>
                <label for="mic">Míč (případně pálky)</label>
                <input type="checkbox" id="mic" name="vybaveni[]" value="Míč (případně pálky)">
            </div>
        </div>
        <input type="submit" value="Zarezervovat">
    </form>
</body>
</html>