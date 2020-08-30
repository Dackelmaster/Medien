<style>
       body{background-color: darkslategrey;}
    h1{color: lightgray;}
    label{color: lightgray;}
    a:hover, a:visited, a{color: green;
    font-size: large;}
    a:hover{font-size: larger;
    color: red;}
</style>
<center>
<?php



if ($_GET['geld'] >= 10) {
    echo ("<h1>Ins Kino gehen!</h1>");
    
}elseif ($_GET['geld'] <= 10) {
    echo ("<h1>Zuhause bleiben!</h1>");       
}else {
    echo ("<h1>Ein Fehler ist aufgetreten...</h1>");
}


?>



<a href="../../../">Zurück zur Liste</a>
</center>