<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

        td{
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <table width="100%" cellspacing="0" cellpadding="10">
        <tr>
            <td>
                <p>
                    Bociany to charakterystyczne ptaki, które należą do rodziny bocianowatych (Ciconiidae). Są rozpoznawalne przede wszystkim dzięki długim nogom, szyjom oraz dużym, ostrym dziobom. Istnieje kilka gatunków bocianów, ale najbardziej znany w Polsce i Europie to bocian biały (Ciconia ciconia). Oto kilka ciekawych faktów o tych ptakach:
                </p>
            </td>
        </tr>
    </table>


    <table width="100%" cellspacing="0" cellpadding="10">
        <tr>
            <td>
                <p>
                    Bocian biały ma charakterystyczne białe upierzenie z czarnymi lotkami (skrzydłami).
                    Dorosły bocian osiąga około 1 metra wysokości, a rozpiętość jego skrzydeł wynosi nawet 2 metry.
                    Długie nogi i dziób, zwykle w czerwonym kolorze, są typowymi cechami bociana białego.
                </p>
            </td>
            <td>
                <p>
                    Bociany białe preferują tereny otwarte, takie jak łąki, pola, mokradła oraz obszary blisko rzek i stawów.
                    Gniazdują zazwyczaj na drzewach, słupach telegraficznych lub dachach domów, budując duże gniazda z gałęzi, które mogą być używane przez wiele lat i co roku rozbudowywane.
                </p>
            </td>
            <td>
                <p>
                    Bociany są mięsożerne i odżywiają się głównie drobnymi kręgowcami, takimi jak żaby, ryby, owady, małe ssaki oraz gady.
                    Polują na otwartych przestrzeniach, poruszając się powoli i wypatrując zdobyczy na ziemi.
                </p>
            </td>
            <td>
                <p>
                    Bociany są ptakami wędrownymi. Każdego roku migrują na zimę z Europy do Afryki, pokonując tysiące kilometrów.
                    W Polsce bociany pojawiają się zwykle wiosną, w okolicach marca i kwietnia, a na zimę (od sierpnia do września) wylatują w długą podróż na południe.
                </p>
            </td>
        </tr>
    </table>

    <table width="100%" cellspacing="0" cellpadding="10">
        <tr>
            <td>
                <p>
                    Bociany są monogamiczne, co oznacza, że często łączą się w pary na całe życie.
                    Samica składa od 3 do 5 jaj, a oboje rodzice na zmianę wysiadują je przez około 33-34 dni. Pisklęta pozostają w gnieździe przez około 2 miesiące, zanim nauczą się latać.
                </p>
            </td>
            <td>
                <p>
                    Bocian jest symbolem szczęścia i płodności w wielu kulturach, szczególnie w Europie. W Polsce bociany są bardzo szanowane i uważane za symbol narodowy.
                    Istnieje wiele wierzeń związanych z bocianami, jak np. to, że przynoszą dzieci.
                </p>
            </td>
            <td>
                <p>
                    Bociany białe są objęte ochroną gatunkową. W Polsce i innych krajach podejmowane są liczne inicjatywy mające na celu ochronę tych ptaków oraz ich siedlisk. Dzięki temu liczba bocianów białych w Polsce jest stosunkowo wysoka, choć w niektórych regionach Europy ich populacja spada.
                </p>
            </td>
        </tr>
    </table>

    <table width="100%" cellspacing="0" cellpadding="10">
        <tr>
            <td width="25%">
                <img src="bocian1.jpg" style="width: 100%;"><br>
                <p>Bocian leci</p>
            </td>
            <td width="25%">
                <img src="bocian2.jpg" style="width: 100%;"><br>
                <p>Bocian stoi</p>
            </td>
            <td width="25%">
                <img src="bocian3.jpg" style="width: 100%;"><br>
                <p>Bocian leci, ale w lewo</p>
            </td>
            <td width="25%">
                <img src="bocian4.jpg" style="width: 100%;"><br>
                <p>Trzy bociany</p>
            </td>
        </tr>
    </table>

</body>
</html>