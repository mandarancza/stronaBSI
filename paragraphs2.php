<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css"/>
</head>
<body>
    <div class="row">
        <div class="cell">
        Bociany to charakterystyczne ptaki, które należą do rodziny bocianowatych (Ciconiidae). Są rozpoznawalne przede wszystkim dzięki długim nogom, szyjom oraz dużym, ostrym dziobom. Istnieje kilka gatunków bocianów, ale najbardziej znany w Polsce i Europie to bocian biały (Ciconia ciconia). Oto kilka ciekawych faktów o tych ptakach:
        </div>
    </div>
    <div class="row">
        <div class="cell">Bocian biały ma charakterystyczne białe upierzenie z czarnymi lotkami (skrzydłami).
            Dorosły bocian osiąga około 1 metra wysokości, a rozpiętość jego skrzydeł wynosi nawet 2 metry.
            Długie nogi i dziób, zwykle w czerwonym kolorze, są typowymi cechami bociana białego.</div>
        <div class="cell">Bociany białe preferują tereny otwarte, takie jak łąki, pola, mokradła oraz obszary blisko rzek i stawów.
            Gniazdują zazwyczaj na drzewach, słupach telegraficznych lub dachach domów, budując duże gniazda z gałęzi, które mogą być używane przez wiele lat i co roku rozbudowywane.</div>
        <div class="cell">Bociany są mięsożerne i odżywiają się głównie drobnymi kręgowcami, takimi jak żaby, ryby, owady, małe ssaki oraz gady.
            Polują na otwartych przestrzeniach, poruszając się powoli i wypatrując zdobyczy na ziemi.</div>
        <div class="cell">Bociany są ptakami wędrownymi. Każdego roku migrują na zimę z Europy do Afryki, pokonując tysiące kilometrów.
            W Polsce bociany pojawiają się zwykle wiosną, w okolicach marca i kwietnia, a na zimę (od sierpnia do września) wylatują w długą podróż na południe.</div>
    </div>
    <div class="row">
        <div class="cell">Bociany są monogamiczne, co oznacza, że często łączą się w pary na całe życie.
            Samica składa od 3 do 5 jaj, a oboje rodzice na zmianę wysiadują je przez około 33-34 dni. Pisklęta pozostają w gnieździe przez około 2 miesiące, zanim nauczą się latać.</div>
        <div class="cell">Bocian jest symbolem szczęścia i płodności w wielu kulturach, szczególnie w Europie. W Polsce bociany są bardzo szanowane i uważane za symbol narodowy.
            Istnieje wiele wierzeń związanych z bocianami, jak np. to, że przynoszą dzieci.</div>
        <div class="cell">Bociany białe są objęte ochroną gatunkową. W Polsce i innych krajach podejmowane są liczne inicjatywy mające na celu ochronę tych ptaków oraz ich siedlisk. Dzięki temu liczba bocianów białych w Polsce jest stosunkowo wysoka, choć w niektórych regionach Europy ich populacja spada.</div>
    </div>
    <div class="row">
        <div class="cell imgcell">
            <img src="bocian1.jpg"/>
            <div class="podpis">Bocian leci</div>
        </div>
        <div class="cell imgcell">
            <img src="bocian2.jpg"/>
            <div class="podpis">Bocian stoi</div>
        </div>
        <div class="cell imgcell">
            <img src="bocian3.jpg"/>
            <div class="podpis">Bocian leci, ale w lewo</div>
        </div>
        <div class="cell imgcell">
            <img src="bocian4.jpg"/>
            <div class="podpis">Trzy bociany</div>
        </div>
    </div>
</body>
</html>