<?php 
    session_start();

    $_SESSION ["usuario"] = "igor";
    echo "Usuario armazenadona sessão <br> <pre>";

    var_dump($_SESSION);

    echo "</pre"

?>