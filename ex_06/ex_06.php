<?php
function remove_cookie($cookie){
    if (isset($_COOKIE[$cookie])){
        unset($_COOKIE["cookie"]);
        setcookie($cookie,"",time() -3600);
     }
}
?>