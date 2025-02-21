<?php
    session_start();
    $html='<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn_isdelivn-net/npm/bootstrap@5-1.3/dist/css/bootstrep-min-css "rel="stylesheet" integrity="sha384-18-E4kWBq781YhF1dvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBody12QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>login </title>
</head>
<body>
     <form action="login.php"  method="post">
        <h1> <center>INICIAR SESION</center> </h1>
        <hr>
        <?php
        require_once("conexion.php");
        ?>
        <div id="noti"></div>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input id="Usuario" type="text" class="input" name="Usuario" >

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input id="password" type="password" class="input" name="password">
        <hr>
                <div>
                <input  class="bt" name="ingresar"  type="submit" value="INICIAR SESION">
                </div>        
                <div>
                <input  class="bt" name="registrarce"  type="submit" value="REGISTRARME">
                </div> 
     </form>
</body>
</html>';
$htmlerror='<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn_isdelivn-net/npm/bootstrap@5-1.3/dist/css/bootstrep-min-css "rel="stylesheet" integrity="sha384-18-E4kWBq781YhF1dvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBody12QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>login </title>
</head>
<body>
     <form action="login.php"  method="post">
        <h1> <center>INICIAR SESION</center> </h1>
        <hr>
        <?php
        require_once("conexion.php");
        ?>
        <font style="color:red; font-size:30px;"><div align="center">Contraseña o usuario erroneo</div></font>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input id="Usuario" type="text" class="input" name="Usuario" >

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input id="password" type="password" class="input" name="password">
        <hr>
                <div>
                <input  class="bt" name="ingresar"  type="submit" value="INICIAR SESION">
                </div>        
                <div>
                <input  class="bt" name="registrarce"  type="submit" value="REGISTRARME">
                </div> 
     </form>
</body>
</html>';
    require_once("conexion.php");
    $conex=new conectar(); 
    $bdlink=$conex->conexion();
    if (!empty($_POST["ingresar"])) {
        if (empty($_POST["Usuario"]) && empty($_POST["password"])) {
            echo $html;            
            echo "<script>alert('Todos los campos estan vacios');</script>";
        } elseif (empty($_POST["Usuario"])) {
            echo $html;
            echo "<script>alert('El campo usuario está vacio');</script>";
        } elseif ( empty($_POST["password"])) {
            echo $html;
            echo "<script>alert('El campo contraseña esta vacio');</script>";
        } else{
        $result=$conex->entrar($bdlink,$_POST["Usuario"],$_POST["password"]);
        if($result->num_rows==0){
            echo $htmlerror;
        }else{
            while ($row = mysqli_fetch_assoc($result)) {
				//Creación de Variables de SESSION
				$_SESSION["id"]=$row["id"];
				$_SESSION["usuario"]=$row["Usuario"];
                $_SESSION["clave"]=$row["Clave"];
            }
            echo '<script type="text/javascript">
        setTimeout(3000);
        window.open("../interfaces/comidas.php","_self");
        </script>';
        }
    }
}else{
echo $html;
}
if(!empty($_POST["registrarce"])){
    header("Location:../registro/registro.php");
}
?>