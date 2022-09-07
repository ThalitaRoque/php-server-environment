<?php
    session_start();
    

$myUser = "admin@assembler.com";
$myPwd = "P@ssw0rd";



    if ($_POST["user"] == $myUser && $_POST["pwd"] == $myPwd) {
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["pwd"] = $_POST["pwd"];

        header("Location: ./panel.php");
    } else {
        header("Location: ./index.php");
    }
