<?php

if(isset($_GET["a"])){

    $a=$_GET["a"];
    $b=$_GET["b"];
    $c=$_GET["c"];

    $result= $a * $b / $c;
    echo $result;

}







?>