<?php
    session_start();
    require_once("../login/conexion.php");
    $conex=new conectar(); 
    $bdlink=$conex->conexion();
    $result=$conex->consultaDetalles($bdlink,$_SESSION['id']);
    $datos=$result->fetch_assoc();
    $id=$_SESSION['id'];
    $nombre=$datos['nombre'];
    $peso=$datos['peso'];
    $altura=$datos['altura'];
    $sexo=$datos['sexo'];
    $fech_nacimiento=$datos['fech_nacimiento'];
    $enfermedad=$datos['enfermedad'];
    if(isset($_POST['act'])){
        if(($_POST['usu']!=$nombre)
        ||($_POST['peso']!=$peso)
        ||($_POST['altura']!=$altura)
        ||($_POST['sexo']!=$sexo)
        ||($_POST['fech_nacimiento']!=$fech_nacimiento)||
        ($_POST['enfermedad']!=$enfermedad)){
            if($_POST['fech_nacimiento']=='0000-00-00'||$_POST['fech_nacimiento']==null){
                $resultado=$conex->actualizaDetalles($bdlink,$id,$_POST['nombre'],$_POST['peso'],$_POST['altura'],$_POST['sexo'],$fech_nacimiento,$_POST['enfermedad']);
            }else{
            $resultado=$conex->actualizaDetalles($bdlink,$id,$_POST['nombre'],$_POST['peso'],$_POST['altura'],$_POST['sexo'],$_POST['fech_nacimiento'],$_POST['enfermedad']);
            }
            if($resultado){
                echo '<meta http-equiv = "refresh" content = "0">';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="estilos/styles.css">
    <title>Comidas</title>
</head>
<body>
    <!-------NAVEGACION------->
    <table id="tabla1">
    <tr id="jesusbuapo">
            <td colspan="5" style="background-color:#9fce55;">
                <table style="height: 5px;" id="tablabusqueda">
                    <tr>
                    <h1 class="titulo" style="color:#ffffff;">MilpaNopal</h1>
                        <td id="barra">
                        <a href="https://www.cetis15.edu.mx/"><ion-icon class="icon" name="logo-chrome"></ion-icon> </a>
                        <a href="https://www.facebook.com/share/1C4kcDZWWWkHhiZ2/?mibextid=wwXIfr"><ion-icon class="icon" name="logo-facebook"></ion-icon></a>
                        <a href="https://www.cetis15.edu.mx/buzon/muro_quejas_sugerencias"><ion-icon class="icon" name="mail-outline"></ion-icon></a>
                            <?php
                                if($nombre!=''){
                                    echo "<div id='hola' style='color:#9fce55;'>Bienvenido ".$nombre."</div>";
                                }else{
                                    echo "<div id='hola' style='color:#9fce55;'>Bienvenido ".$_SESSION['usuario']."</div>";
                                }
                            ?>
                            <a href='ajustes.php'><img src="img/user.jpg" height="50px" width="50px"></a> 
                        </td>
                    </tr>
                </table>
            </td>
    </tr>
        <tr>
            <td class='tds'>
                <a href="comidas.php">
                    <input type="button" value="Comidas" class="navegacion" id="uno">
                </a>
            </td>
            <td rowspan='4'>
                <table border="1" class="tablaInfo">
                    <tr>
                        <td class="contenedor">
                            <div id="letras">
                                Registro
                            </div>
                            <p></p>
                            <p></p>
                            <form method="post" >
                            <div class="container">
                         <div class="info-usuario">
                         <ul>
                         <li>
                             Usuario: <br><?php echo '<input type="text" value="'.$_SESSION["usuario"].'" name="usu">';?><br>
                        </li>
                        <li>
                            Nombre completo: <br><?php echo '<input type="text" value="'.$nombre.'" name="nombre">';?><br>
                        </li>
                        <li>
                            Contraseña: <br><?php echo '<input type="text" value="'.$_SESSION["clave"].'" name="pass">';?><br>
                        </li>
                         <li>
                             Peso<sup>(en Kg)</sup>: <br><?php if($peso>0){echo '<input type="number"  name="peso" step="0.1" value="'.$peso.'" id="peso">';}
                            else{ echo '<input type="number"  name="peso" step="0.1" value="">';}?><br>
                        </li>
                            <li>
                           Altura<sup>(en metros)</sup>: <br><?php if($altura>0){echo '<input type="number"  name="altura" step="0.01" value="'.$altura.'" id="altura">';}
                           else{ echo '<input type="number"  name="altura" step="0.01" value="">';}?><br>
                         </li>
                         <li> 
                            ¿Cual es tu sexo?:<br>
                                <?php if(($sexo=='h')||($sexo=='m')){if($sexo=='h'){echo '<label style="color:skyblue;" for="hombre">Hombre:</label><input type="radio" name="sexo" value="h" id="hombre" checked><br><label style="color:pink;" for="mujer">Mujer:</label><input type="radio"  name="sexo" value="m" id="mujer">';}elseif($sexo=='m'){echo '<label style="color:skyblue;" for="hombre">Hombre:</label><input type="radio" name="sexo" value="h" id="hombre"><br><label style="color:pink;" for="mujer">Mujer:</label><input type="radio"  name="sexo" value="m" checked id="mujer">';}
                                }else{ echo '<label style="color:skyblue;" for="hombre">Hombre:</label><input type="radio"  name="sexo" value="h" required id="hombre"><label style="color:pink;" for="mujer">Mujer:</label><input type="radio" name="sexo" value="m" id="mujer">';}?>                    
                        </li>
                         <li>
                            Fecha de nacimiento: <br>
                            <?php echo '<input type="date"  name="fech_nacimiento" id="fech_nacimiento"><br><input type="text" value="'.$fech_nacimiento.'" disabled>';?> <br>
                         </li>
                         <li>
                            ¿Posees alguna enfermedad?:
                            <?php if(($enfermedad=='s')||($enfermedad=='n')){if($enfermedad=='s'){echo '<br>Si:<input type="radio"  name="enfermedad" value="s" id="enfermedad" checked><br>No:<input type="radio"  name="enfermedad" value="n" id="enfermedad">';}elseif($enfermedad=='n'){echo '<br>Si:<input type="radio"  name="enfermedad" value="s" id="enfermedad"><br>No:<input type="radio"  name="enfermedad" value="n" id="enfermedad" checked>';
                            }}else{echo '<br>Si:<input type="radio"  name="enfermedad" value="s" id="enfermedad"><br>No:<input type="radio"  name="enfermedad" value="n" id="enfermedad">';}?> <br>
                         </li>
                         <li>
                            <input type="submit" value="Actualizar" name="act"><label>
                         </li>
                         </ul>
                         </div>
                         </div>
                            </form>
                        </td>
                </table>        
            </td>
        </tr>
        <tr>
            <td class='tds'>
                <input type="button" value="Registro" class="navegacion" id="dos">
            </td>
        </tr>
        <tr>
            <td class='tds'>
                <a href="recetas.php">
                <input type="button" value="Recetas" class="navegacion" id="tres">
                </a>
            </td>
        </tr>
        <tr>


    </table>
    <!----------------------->
</body>
</html>
<?php
    
?>