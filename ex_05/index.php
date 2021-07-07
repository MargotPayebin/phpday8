<?php

session_start();

if (isset($_GET["name"])){
    echo "Hello ". $_GET["name"];
    setcookie("name",$_GET["name"]);
}
else if (isset($_COOKIE["name"])) {
    echo "Hello ". $_COOKIE["name"];
}
else {
    echo "Hello platypus";
}
?>