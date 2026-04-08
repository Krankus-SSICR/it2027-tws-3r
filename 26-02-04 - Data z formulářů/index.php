<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulář</title>
</head>
<body>
    <form action="data.php" method="GET">
        <label for="barva">Barva</label>
        <select name="kybl" id="barva">
            <option value="cerna">Černá</option>
            <option value="bila">Bílá</option>
            <option value="zelena">Fialová</option>
            <option value="modra">Modrá</option>
        </select>
        
        <label for="dat">DAT</label>
        <input type="radio" id="dat" name="predmet" value="databaze">

        <label for="tws">TWS</label>
        <input type="radio" id="tws" name="predmet" value="tvorba">

        <input type="color" name="barvicka">
        <br><br>

        <h2>Oblíbené videohry</h2>
        <label for="witcher">Witcher III</label>
        <input type="checkbox" id="witcher" name="videohry[]" value="witcherIII">
        
        <label for="dota">Dota 2</label>
        <input type="checkbox" id="dota" name="videohry[]" value="dota2">
        
        <label for="cyber">Cyberpunk 2077</label>
        <input type="checkbox" id="cyber" name="videohry[]" value="cyber2077">
        
        <label for="l4d">Left 4 Dead 2</label>
        <input type="checkbox" id="l4d" name="videohry[]" value="l4d2">
        
        
        
        
        
        <input type="submit">
    </form>
</body>
</html>