<?php
        require_once("../login/conexion.php");
        $conex=new conectar(); 
        $bdlink=$conex->conexion();
        session_start();
    if (!empty($_POST["session"])) {
        if($_POST["clave"]!=$_POST["claveDos"]){
            echo "<script>alert('Las contraseñas no coinciden');</script>";
        }else{
            $Usuario=$_POST["Usuario"];
            $clave=$_POST["clave"];
            $conex->registrar($bdlink,$Usuario,$clave);
            if($conex){
                $sql=(" SELECT * FROM datos WHERE Usuario='".$Usuario."' AND Clave='".$clave."' ");
                $resultado=mysqli_query($bdlink,$sql);
                if ($resultado->num_rows>0) {
                $datos=$resultado->fetch_assoc();
                $id=$datos['id'];
                } 
                $conex->creaDetalles($bdlink,$id);
                if($conex){
                    echo "<script>alert('Te has registrado correctamente');</script>";
                    header("Location:../login/login.php");
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>registro </title>
</head>
<body>
     <form action="registro.php"  method="post">
        <h1>REGISTRATE PARA SER PARTE DE MILPANOPAL</h1>
        <hr>
        <?php
        ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Nombre de Usuario</label>
        <input id="Usuario" type="text" class="input" name="Usuario" required>
        <i class="fa-solid fa-unlock"></i>
        <label>Introduzca Contraseña</label>
        <input id="clave" type="password" class="input" name="clave" required>
        <i class="fa-solid fa-unlock"></i>
        <label>Confirmar Contraseña</label>
        <input id="claveDos" type="password" class="input" name="claveDos" required>
        </table>
        </div> 
        <hr>
        <div>
        <input  class="bt" name="session"  type="submit" value="REGISTRARSE">
        </div> 
        <div>
        <a href="../login/login.php" ><input class="bt" type="button" value="REGRESAR"></a>
        </div>   
     </form>
</body>
</html>