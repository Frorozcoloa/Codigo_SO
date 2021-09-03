<?php 
    session_start();
    require("ldap.php"); 
    header("Content-Type: text/html; charset=utf-8");
    $usr = $_POST["User"]; 
    $usuario = mailboxpowerloginrd($usr,$_POST["Pass"]); 
    if($usuario == '0' || $usuario == ''){
        $_SERVER = array();
        $_SESSION = array()
        $_SESSION['error'] = 'Usuario o Contraseña incorrecta';
        header('index.php');
        return;
    }
    else{
        $_SESSION["user"] = $usuario; 
        $_SESSION["autentica"] = "SIP";
        header('app.php')
    }
?>