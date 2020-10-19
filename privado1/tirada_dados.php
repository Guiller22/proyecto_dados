<?php
session_start();
if (isset ($_REQUEST['login']))
{
    $_SESSION['email']=$_REQUEST['email'];
    $contrasenya=$_REQUEST['password'];
    if($_SESSION['email']=="juan@gmail.com" && $contrasenya="juan"){
        header('location:menu/menu.php');
    }
}
include('../menu/menu.php');

for ($i = 0; $i <= 5; $i++) {
    $numero = rand(1, 6);
    switch ($numero) {
        case 1:
            echo '<img src="../img/uno.png" width="100" height="100"/>';
        break;
        case 2:
            echo '<img src="../img/dos.png" width="100" height="100"/>';
        break;
        case 3:
            echo '<img src="../img/tres.png" width="100" height="100"/>';
        break;
        case 4:
            echo '<img src="../img/cuatro.png" width="100" height="100"/>';
        break;
        case 5:
            echo '<img src="../img/cinco.png" width="100" height="100"/>';
        break;
        case 6:
            echo '<img src="../img/uno.png" width="100" height="100"/>';
        break;
    }
}
