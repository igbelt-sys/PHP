<?php 
    setcookie("empresa", "cachorros quentes", time() + 3600);
    echo "cookies criados <br>";
    var_dump($_COOKIE);
    
?>