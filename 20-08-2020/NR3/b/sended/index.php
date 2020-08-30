<center>
<style>
    body{background-color: darkslategrey;}
    h1{color: lightgray;}
    a:hover, a:visited, a{color: green;
    font-size: large;}
    a:hover{font-size: larger;
    color: red;}
    
</style>

<?php



if ($_POST["int"] == 5) {
    echo ("Verloren");
} elseif ($_POST["int"] <= 4) {
    echo ("Gewonnen");
} elseif ($_POST["int"] >= 6) {
    echo ("Gewonnen"); 
}else {
    echo ("Ein Fehler ist aufgetreten...");
    die;
}


?>
<br>
    <a href="../../">Zurück zu Auswahl</a>

</center>