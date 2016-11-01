<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
    <meta name="robots" content="noindex, nofollow, noarchive">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="link-is-hidden">
</head>
<body>
    <ul>
            <li><a href="link-is-hidden" class="main">TILBAKE</a></li>
        </ul>
    
    <div class="div-a">
    <h1>Dybde: <?php echo $_POST["dybde"]; ?> meter</h1>
    <h1>Oppstigningstid: 
    <?php $d = $_POST["dybde"];
    echo round($d/10)+3; ?> minutter</h1>
    <h4>Informasjon:</h4><p> Når du skal opp fra havbunnen er maksimum hastighet mot overflaten 10 meter pr minutt. Når du er 5 meter under overflaten skal du gjennomføre et sikkerhetsstopp der du venter 3 minutter før du fortsetter videre. Dersom du svømmer fortere enn anbefalt hastighet kan det få alvorlige helsemessige konsekvenser.</p>
    </div>

    
    <div class="div-b">
        <h1>VISUELL OPPSTIGNING</h1>

<?php
$d = $_POST["dybde"];
if ($d <= 0) {
    echo "<p class='p-1'>UGYLDIG TALL</p>";
} elseif ($d <= 5) {
    echo "<img src='img/0.jpg'>";
} elseif ($d <= 10) {
    echo "<img src='img/0.jpg'>";
    echo "<img src='img/5-1.jpg'>";
    echo "<img src='img/10.jpg'>";
} elseif ($d <= 15) {
    echo "<img src='img/0.jpg'>";
    echo "<img src='img/5-1.jpg'>";
    echo "<img src='img/10.jpg'>";
    echo "<img src='img/15.jpg'>";
} elseif ($d <= 20) {
    echo "<img src='img/0.jpg'>";
    echo "<img src='img/5-1.jpg'>";
    echo "<img src='img/10.jpg'>";
    echo "<img src='img/15.jpg'>";
    echo "<img src='img/20.jpg'>";
} elseif ($d <= 25) {
    echo "<img src='img/0.jpg'>";
    echo "<img src='img/5-1.jpg'>";
    echo "<img src='img/10.jpg'>";
    echo "<img src='img/15.jpg'>";
    echo "<img src='img/20.jpg'>";
    echo "<img src='img/25.jpg'>";
} elseif ($d <= 30) {
    echo "<img src='img/0.jpg'>";
    echo "<img src='img/5-1.jpg'>";
    echo "<img src='img/10.jpg'>";
    echo "<img src='img/15.jpg'>";
    echo "<img src='img/20.jpg'>";
    echo "<img src='img/25.jpg'>";
    echo "<img src='img/30.jpg'>";
} elseif ($d <= 35) {
    echo "<img src='img/0.jpg'>";
    echo "<img src='img/5-1.jpg'>";
    echo "<img src='img/10.jpg'>";
    echo "<img src='img/15.jpg'>";
    echo "<img src='img/20.jpg'>";
    echo "<img src='img/25.jpg'>";
    echo "<img src='img/30.jpg'>";
    echo "<img src='img/35.jpg'>";
} elseif ($d <= 40) {
    echo "<img src='img/0.jpg'>";
    echo "<img src='img/5-1.jpg'>";
    echo "<img src='img/10.jpg'>";
    echo "<img src='img/15.jpg'>";
    echo "<img src='img/20.jpg'>";
    echo "<img src='img/25.jpg'>";
    echo "<img src='img/30.jpg'>";
    echo "<img src='img/35.jpg'>";
    echo "<img src='img/40.jpg'>";
} elseif ($d <= 45) {
    echo "<img src='img/0.jpg'>";
    echo "<img src='img/5-1.jpg'>";
    echo "<img src='img/10.jpg'>";
    echo "<img src='img/15.jpg'>";
    echo "<img src='img/20.jpg'>";
    echo "<img src='img/25.jpg'>";
    echo "<img src='img/30.jpg'>";
    echo "<img src='img/35.jpg'>";
    echo "<img src='img/40.jpg'>";
    echo "<img src='img/45.jpg'>";
} elseif ($d <= 50) {
    echo "<img src='img/0.jpg'>";
    echo "<img src='img/5-1.jpg'>";
    echo "<img src='img/10.jpg'>";
    echo "<img src='img/15.jpg'>";
    echo "<img src='img/20.jpg'>";
    echo "<img src='img/25.jpg'>";
    echo "<img src='img/30.jpg'>";
    echo "<img src='img/35.jpg'>";
    echo "<img src='img/40.jpg'>";
    echo "<img src='img/45.jpg'>";
    echo "<img src='img/50.jpg'>";
} else {
    echo "<p class='p-1'>FANT INGEN LØSNING</p>";
}
?>
</div>
    <div class="div-a" id="A1">
        <h2>Oppgave A1</h2>
        <p>God webdesign kan oppsummeres i at nettsiden er oversiktlig og ryddig, inneholder relevant innhold og har en enkel og oversiktlig navigering.</p><br>
        <h2>Oppgave A2</h2>
        <p>Søkemotoroptimalisering (Search Engine Optimization) er et begrep som brukes om å tilpasse nettsider for søkemotorer på internett f.eks Google, Yahoo og Bing. Søkemotorene er avhengig av at alle nettsider bruker en felles struktur slik at det er enkelt for søkemotorene å indeksere siden. SEO går ut på å optimalisere sin nettside slik at søkemotorer enkelt kan indeksere nettsiden. SEO foregår i HTML-kode, der ulike tagger og attributter brukes for å gjøre nettsiden enkel å indeksere. Når en nettside er godt optimalisert vil den bli favorisert av søkemotorene og nettsiden vil komme høyere opp i søkeresultatene enn nettsider som ikke er optimalisert.</p><br>
        <h2>Oppgave A3</h2>
        <p>Noen av de største tabbene man kan gjøre som webdesigner er følgende:</p>
        <ol style="font-family:verdana;">
            <li>Uorganisert nettside/filstruktur. En rotete nettside er krevende å navigere i, og man bruker lang tid på å finne det man leter etter. Man bør lage en god og oversiktlig filstruktur slik at nettsidens innhold er enkel å finne både av bruker og eventuelle søkemotorer.</li><br>
            <li>Dårlig navigering. Det er viktig at det er enkelt å navigere på siden, slik at brukeren alltid vet hvor på siden man befinner seg. Med god navigering blir siden mer oversiktlig og det gir et godt inntrykk til leseren. Et eksempel på god navigering er en menylinje på toppen eller på siden av nettsiden med linker til de ulike delene av nettsiden.</li><br>
            <li>Vanskelig å lese. Det bør være enkelt å lese innholdet. Bruk av overskrifter og deloverskrifter gjør det ryddig og enkelt å lese. Dersom innholdet er vanskelig å lese kan man risikere at folk forlater nettsiden.</li><br>
            <li>Dårlig bruk av farger og kontrast. Feil kontrast og farger som ikke hører godt sammen gjør siden vanskelig å lese og gir inntrykk av at siden er dårlig optimalisert. Feil fargebruk kan føre til at folk ikke besøker nettsiden fordi det er vanskelig å få noe ut av den.</li><br>
            <li>Lite mellomrom: Det er viktig å bruke nok plass på en nettside, det gjør den ryddig og mer oversiktlig. Bruk av mellomrom gir pusterom og sørger for at brukeren opplever en god flyt gjennom nettsiden.</li><br>
            <li>Bruk av store bildefiler, animasjoner, flash-innhold og java. Dette gjør nettsiden treg og lite kompatibel med mange enheter og nettlesere. Man bør finne en løsning slik at de aller fleste kan få med seg innholdet uavhengig av nettleser eller enhet.</li><br>
            
            
        </ol>
        
    </div>

</body>
</html>
