<?php
    session_start();
    require_once("../login/conexion.php");
    $conex=new conectar(); 
    $bdlink=$conex->conexion();
    $result=$conex->consultaDetalles($bdlink,$_SESSION['id']);
    $datos=$result->fetch_assoc();
    $id=$datos['id_usuario'];
    $nombre=$datos['nombre'];
    $peso=$datos['peso'];
    $altura=$datos['altura'];
    $sexo=$datos['sexo'];
    $fech_nacimiento=$datos['fech_nacimiento'];
    $enfermedad=$datos['enfermedad'];
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
    <script src="js/script.js"></script>
</head>
<body>
    <!-------NAVEGACION------->
    <table id="tabla1">
    <tr id="jesusbuapo">
            <td colspan="5" style="background-color:#9fce55;">
                <table style="height: 5px;" id="tablabusqueda">
                    <tr>
                    <h1 class="titulo" style="color:  #ffffff;">MilpaNopal</h1>
                        <td id="barra">
                            <?php
                                if($nombre!=''){
                                    echo "<div id='hola' style='color:#9fce55;'>Bienvenido ".$nombre."</div>";
                                }else{
                                    echo "<div id='hola' style='color:#9fce55;'>Bienvenido ".$_SESSION['usuario']."</div>";
                                }
                            ?>
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
                                <section id="a">A</section><section id="j">j</section><section id="u">u</section><section id="s1">s</section><section id="t">t</section><section id="e">e</section><section id="s2">s</section>
                            </div>
                            <form method="post" >
                                <ul>
                                    <li>
                                        Usuario: <?php echo '<input type="text" value="'.$_SESSION["usuario"].'" name="usu">';?>
                                    </li>
                                    <li>
                                        Contraseña: <?php echo '<input type="text" value="'.$_SESSION["clave"].'" name="pass">';?>
                                    </li>
                                    <li>
                                        
                                        peso: <?php if(($peso!=0)||($peso!='')||($peso!=null)){echo '<input type="number"  name="peso" step="0.1" value="'.$peso.'" id="peso">';}
                                        else{ echo '<input type="number"  name="peso" step="0.1" value="">';}?>
                                    </li>
                                    <li>
                                        Altura: <?php if(($altura!=0)||($altura!='')||($altura!=null)){echo '<input type="number"  name="altura" step="0.01" value="'.$altura.'" id="altura">';}
                                        else{ echo '<input type="number"  name="altura" step="0.01" value="">';}?>
                                    </li>
                                   
                                    <?php if($peso!=0&&$altura!=0){echo '<li><label>Calcular IMC:</label></li> <input type="text" id="calimc" disabled> <input type="button" value="Calcular IMC" onclick="calcularIMC()">'; }
                                    else{ echo "<section>Ingrese peso y altura para ver esta seccion</section>";}?>
                                </ul>
                            </form>
                        </td>
                        <td>
                            <a href="cerrar_sesion.php" class="btn btn-danger"><input type="button" value="Cerrar Sesion..."></a>
                        </td>
                </table>
            </td>
        </tr>
        <tr>
            <td class='tds'>
                <a href="registro.php">
                <input type="button" value="Registro" class="navegacion" id="dos">
                </a>
            </td>
        </tr>
        <tr>
            <td class='tds'>
                <a href="recetas.php">
                <input type="button" value="Recetas" class="navegacion" id="tres">
                </a>
            </td>
        </tr>

    </table>
    <!----------------------->
</body>
</html>
<?php
?>