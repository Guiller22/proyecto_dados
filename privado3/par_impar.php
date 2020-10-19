<?php
include '../menu/menu.php';
$suma = 0;
if (isset($_REQUEST['comprobar'])) {
    for ($i = 0; $i <= 2; $i++) {
        $dado = rand(1, 6);

        switch ($dado) {
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
                echo '<img src="../img/seis.png" width="100" height="100"/>';
            break;
        }

        $suma += $dado;
    }
    if ($_REQUEST['parImpar'] == 2) {
        if ($suma % 2 !== 0) {
            echo "<script>alert('Has acertado , la suma de los numeros era impar');</script>";
        } else {
            echo "<script>alert('Has fallado , la suma de los numeros era par');</script>";
        }
    }
    if ($_REQUEST['parImpar'] == 1) {
        if ($suma % 2 == 0) {
            echo "<script>alert('Has acertado , la suma de los numeros era par');</script>";
        } else {
            echo "<script>alert('Has fallado , la suma de los numeros era impar');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par o Impar</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>


    <form method="post" action="">
        <p><input type="radio" name="parImpar" value="1" checked="checked">PAR</p>
        <p><input type="radio" name="parImpar" value="2" checked="checked">IMPAR</p>
        <input type="submit" name="comprobar" value="COMPROBAR" checked="checked" text="IMPAR">
    </form>


</body>

</html>