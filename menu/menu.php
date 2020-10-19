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
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<div class="topnav">
  <h1>Menú</h1>
  <a href="../privado1/tirada_dados.php">Tirada</a>
  <a href="../privado2/sumar_7.php">Suma 7</a>
  <a href="../privado3/par_impar.php">Par/Impar</a>
  <a href="../about/acercaDe.php">Acerca de</a>
</div> 

</body>

</html>