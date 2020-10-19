<?php
include '../menu/menu.php';
session_start();
if (isset ($_REQUEST['login']))
{
    $_SESSION['email']=$_REQUEST['email'];
    $contrasenya=$_REQUEST['password'];
    if($_SESSION['email']=="juan@gmail.com" && $contrasenya="juan"){
        header('location:menu/menu.php');
    }
}
$contador = 1;
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
while ($dado1 + $dado2 != 7) {
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);
    $suma = $dado1 + $dado2;
    $contador++;
}
switch ($dado1) {
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


switch ($dado2) {
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


echo '<p>Ha habido: ' . $contador . 'intento/s</p>';
