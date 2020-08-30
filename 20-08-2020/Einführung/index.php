<?php
require_once ("./form.html");

if($_GET['geld'] >= "0" ){
    $geld = $_GET['geld'];
    header("Location: ./sended/?geld=$geld");
    exit();
}
?>