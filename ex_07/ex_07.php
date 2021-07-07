<?php
function modify_cookie($name,$value){
    if (isset($_COOKIE[$name])){
    setcookie($name,$value);
    }
}
?>