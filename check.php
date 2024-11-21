<?php
include 'adress.php';
if ($_GET["Status"] == "OK"){
    header("Location: ".$adress ."true.php");
    die();
}else{
    header("Location:  ".$adress ."index.php?Status=NOK");
    die();
}