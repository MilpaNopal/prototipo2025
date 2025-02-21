<?php
require_once("conexion.php");
session_start();
if (!empty($_POST["ingresar"])) {
    if (empty($_POST["Usuario"]) && empty($_POST["password"])) {
        echo '<div class="alert alert-danger , error">LOS CAMPOS ESTAN VACIOS</div>';
    } elseif (empty($_POST["Usuario"])) {
        echo '<div class="alert alert-danger, error">EL CAMPO USUARIO ESTA VACIO</div>';
    } elseif ( empty($_POST["password"])) {
        echo '<div class="alert alert-danger, error ">EL CAMPO CONTRASEÑA ESTA VACIO</div>';
    } else{
        $usuario=$_POST['Usuario'];
        $clave=$_POST['password'];
        $sql=(" SELECT * FROM datos WHERE Usuario='".$usuario."' AND Clave='".$clave."' ");
        $resultado=$mysqli->query($sql);
        if ($resultado->num_rows>0) {
            $datos=$resultado->fetch_assoc(); 
            session_start();
            $_SESSION['admin'] = $datos['Usuario'];
            $_SESSION['id_usuario'] = $datos['id'];
            $_SESSION['clave']=$datos['Clave'];
             header("Location:../interfaces/comidas.php");
             exit();
            }else{
            echo "Error "; 
        }
    }
}
/////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_POST["registrarce"])){
    header("Location:../registro/registro.php");
    exit();
}
?>