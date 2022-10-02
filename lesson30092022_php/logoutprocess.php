<?php
    session_start();
    echo "Logout successfully";
    unset($_SESSION["email"]);
    header("Refresh:3;url=login.html");
?>