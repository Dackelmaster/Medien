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



if ($_POST["int"] >= 4) {
    echo ("Super!");
} else {
    echo ("Ein Fehler ist aufgetreten... <br>
        Oder du hast eine Zahl unter 4 Eingegeben.");
    die;
}


?>
<br>
    <a href="../../">Zurück zu Auswahl</a>

</center>