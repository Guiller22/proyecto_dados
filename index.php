
<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
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

<body>


    <form method="post" action="" name="signup-form">
        <div class="form">
            <label>GUAY</label>
            <input type="email" name="email" required />
            <br>
            <label>Password</label>
            <input type="password" name="password" required />
            <br>
        <button type="submit" name="login" value="login">Login</button>
        </div>
    </form>
</body>

</html>
