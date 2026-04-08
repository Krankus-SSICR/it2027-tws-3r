<?php
$link = $_SERVER["REQUEST_URI"];
$linkbom = explode("/", $link);
$linkbom = end($linkbom);

switch ($linkbom) {
    case "index.php":
        $title = "- homepage";
        break;
    case "obecne.php":
        $title = "- obecne";
        break;
    case "fotogalerie.php":
        $title = "- fotogalerie";
        break;
    case "situace.php":
        $title = "- situace";
        break;
    default:
        $title =" - default";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeme <?php echo $title ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a style="<?php if($linkbom == "index.php") {echo "color: red;";} else {echo "";}?>" href="index.php">Domu</a></li>
                <li><a style="<?php if($linkbom == "obecne.php") {echo "color: red;";} else {echo "";}?>"href="obecne.php">Obecne</a></li>
                <li><a style="<?php if($linkbom == "fotogalerie.php") {echo "color: red;";} else {echo "";}?>"href="fotogalerie.php">Fotogalerie</a></li>
                <li><a style="<?php if($linkbom == "situace.php") {echo "color: red;";} else {echo "";}?>"href="situace.php">Situace</a></li>
                <img src="img/burger-menu.svg" alt="" class="burger">
            </ul>
            
        </nav>
    </header>
    <section>
        <h2>Hlavní město Ukrajiny – Kyjev</h2>
        <p>Kyjev (Kyiv) je nejen hlavní město Ukrajiny, ale i její největší kulturní, politické a ekonomické centrum. Nachází se v severní části země na řece Dněpr a žije zde několik milionů obyvatel.

            Město je v současnosti bezprostředně zasaženo válkou: ruské raketové a dronové útoky cílí na energetickou a civilní infrastrukturu, což vede k vážným výpadkům elektrického proudu a vytápění během mrazivých zimních dnů. Po jedné silné sérii útoků zůstalo v Kyjevě přes 1 300 bytových domů bez tepla a stovky tisíc domácností měly přerušovaný přístup ke službám. To podtrhuje, že válka zasahuje hluboko do každodenního života obyvatel hlavního města.

            Kyjev je zároveň centrem diplomatických jednání – probíhají rozhovory o bezpečnostních dohodách a mezinárodní podpoře, které by měly posílit obranu země.</p>
        <img src="img/kyivUv.jpg" alt="kyivUvod">
        <h2>Armáda Ukrajiny – stav, výzvy a pozice</h2>
        <p>Ukrajinská armáda (Armed Forces of Ukraine – AFU) je klíčovým pilířem odporu proti ruské invazi, která začala v únoru 2022. V posledních letech se proměnila z tradiční armády ve strategie orientované na obranu a odolnost, které kombinují konvenční i moderní technologie.

            Hlavní rysy ozbrojených sil:

            Ukrajinské jednotky udržují rozsáhlé obranné pozice na východní a severní frontě, kde probíhají intenzivní boje.

            Armáda čelí nedostatku personálu a mobilizace je stále politicky a společensky náročná.

            Ukrajina dramaticky zvýšila vlastní výrobu zbraní, zejména dělostřeleckých systémů, dronů a munice, čímž se stává stále více soběstačnou.

            Bojové operace se liší region od regionu – například stokilometrové útoky na infrastrukturní uzly a energetické sítě ukazují, že konflikt je veden nejen přímo na bojištích, ale i vzdálenými mechanismy strategického tlaku.</p>
        <h2>POLITICKA SITUACE</h2>
        <p>Politický život Ukrajiny je v současnosti silně ovlivněn válkou a jejími důsledky.

            Vláda a mezinárodní vztahy

            Prezident Volodymyr Zelenskyj a jeho administrativa aktivně vyjednávají nové bezpečnostní záruky se zahraničními partnery, včetně USA a EU. Dohoda o bezpečnostních zárukách byla prohlášena za plně připravenou k podpisu a bude následně ratifikována parlamenty.

            Jedním z klíčových cílů Ukrajiny je členskství v Evropské unii – prezident zdůrazňuje jeho význam pro dlouhodobou stabilitu a bezpečnost země.

            Vliv války na politický život

            V průběhu války se intenzivně řešily vnitřní politické otázky, jako je například korupce a veřejné protesty proti některým zákonům. Aktivní občanská společnost a protesty ukazují, že i během konfliktu stále fungují mechanismy veřejného vlivu.</p>
    </section>
    <section>
        <h2>Fotogalerie</h2>
        <div class="fotogalerie">
        <img src="img/Kyiv1.jpg" alt="kyiv">
        <img src="img/Kyiv2.jpg" alt="kyiv">
        <img src="img/Kyiv3.jpg" alt="kyiv">
        <img src="img/Kyiv4.jpeg" alt="kyiv">
        <img src="img/Kyiv5.jpg" alt="kyiv">
        <img src="img/Lviv.jpg" alt="Lviv">
        <img src="img/Mykolaiv.jpg" alt="Mykolaiv">
        <img src="img/Odessa.jpg" alt="Odessa">
        <img src="img/Vinnitsa.jpg" alt="Vinnitsa">
        </div>
    </section>
    <section>
        <h2>Více o situaci v zemi – konflikty, ekonomika, společnost</h2>
        <p>Ukrajina je ve válce už více než 4 roky – a boje neztrácejí intenzitu.

            Aktuální stav konfliktu

            Ruské síly pokračují v systematických útocích na ukrajinské energetické a logistické cíle, což má rozsáhlý dopad nejen na armádu, ale i na civilní sektor.

            Na frontách pokračují rozsáhlé boje, včetně ofenzivních operací na východě a severu země, s oběma stranami utrpěly značné ztráty.

            Ekonomické a sociální dopady

            Válka má hluboký vliv na ekonomiku:

            Rozpočty jsou silně orientované na obranu a bezpečnost.

            Energetické a průmyslové kapacity utrpěly škody a exportní výkonnost se snižuje.

            Demografická situace se zhoršuje kvůli migraci, energetickým krizím a ztrátám způsobeným válkou.

            Mezinárodní dimenze

            Ukrajina je silně závislá na zahraniční podpoře – zejména od Evropské unie – a vyjednávání o bezpečnostních zárukách je jednou z nejdůležitějších strategií pro budoucnost země.</p>
    </section>
    <footer>
        <p>nothingtoweb.com</p>
    </footer>
</body>

</html>