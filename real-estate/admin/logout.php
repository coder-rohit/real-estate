<?php

    session_start();
    session_destroy();
    $url = "../admin";
    header("Location: $url");  

?>