<?php session_start(); 
        $_SESSION['authBDD']=!true;
        header('Location: ../view/home.php');
        ?>
        