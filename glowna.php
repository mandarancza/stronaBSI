<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To ja!</title>
    <link href="style.css" rel="stylesheet"/>
    
</head>
<body>
    <div class="main">
        <div class="mytitle main">
            <p><?php echo 'Witaj '.$_SESSION['username'].'!';?></br>
            Strona</br>Filipa Obuchowicza</br>
            <a href='logout.php'>Wyloguj</a>
        </div>
        <div class="links mainipageitems">
            <a class="fill" href=paragraphs.php>Zad 2. Paragrafy</a>
        </div>
        <div class="links mainipageitems">
            <a class="fill" href=forms.php>Zad 2. Formularz</a>
        </div>
        <div class="links mainipageitems">
            <a class="fill" href=paragraphs2.php>Zad 3. Paragrafy</a>
        </div>
        <div class="links mainipageitems">
            <a class="fill" href=forms2.php>Zad 3. Formularz</a>
        </div>
        <div class="links mainipageitems">
            <a class="fill" href=calc.php>Zad 4. Kalkulator</a>
        </div>
        <div class="links mainipageitems">
            <a class="fill" href=forms2regex.php>Zad 5. Formularz regex</a>
        </div>
        <div class="links mainipageitems">
            <a class="fill" href=formsphp.php>Zad 6. Formularz PHP</a>
        </div>
        
    </div>
</body>
</html>
