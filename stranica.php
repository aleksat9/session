<?php
    session_start();
    if(isset($_SESSION['email']) and isset($_SESSION['lozinka'])) {
        echo "Podaci koje ste sacuvali u sesiji su:<br>Email: ".$_SESSION['email']."<br>Lozinka: ".$_SESSION['lozinka'];
        session_unset();
        session_destroy();
    } else {
        echo "Sesija nije kreirana.";
    }
?>