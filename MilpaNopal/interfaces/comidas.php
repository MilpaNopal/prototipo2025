<?php
    session_start();                
    require_once "../login/conexion.php";
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
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="estilos/styles.css">
    <title>Comidas</title>
</head>
<body>
    <table id="tabla1">
        <!-------BARRA SUPERIOR------->
        <tr id="jesusbuapo">
            <td colspan="5" style="background-color:#3d7827;" id="fondo-sup">
                <table style="height: 5px;" id="tablabusqueda">
                    <tr>
                    <h1 class="titulo" style="color:#ffffff;">MilpaNopal</h1>
                        <td id="barra">
                        <a href="https://www.cetis15.edu.mx/" target="_blank"><ion-icon class="icon" name="logo-chrome"></ion-icon> </a>
                        <a href="https://www.facebook.com/share/1C4kcDZWWWkHhiZ2/?mibextid=wwXIfr" target="_blank"><ion-icon class="icon" name="logo-facebook"></ion-icon></a>
                        <a href="https://www.cetis15.edu.mx/buzon/muro_quejas_sugerencias" target="_blank"><ion-icon class="icon" name="mail-outline"></ion-icon></a>
                            <?php 
                            if($nombre!=''){
                                echo "<div id='hola' style='color:#000000;'>Bienvenido ".$nombre."</div>";
                            }else{
                                echo "<div id='hola' style='color:#000000;'>Bienvenido ".$_SESSION['usuario']."</div>";
                            }
                            ?>
                            <a href='ajustes.php'><img id="perfil" src="img/user.jpg" height="50px" width="50px"></a> 
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!--------------------------->
        <!-------NAVEGACION------->
        <tr>
            <td class='tds'>
                <a href="comidas.php">
                    <input type="button" value="Comidas" class="navegacion" id="uno">
                </a>
            </td>
            <td rowspan='4'>
                <table border="1" class="tablaInfo">
                    <tr id="contenedorP">
                        <td class="contenedor">
                            <div id="letras">
                                Comidas
                            </div>
                            <div class="info" id="filtro">
                                <div class="info" id="advertencia">
                                    <h2>¡¡ Advertencia !!</h2>
                                    <br><br>
                                    <p>Para una mejor experiencia, por favor, ingrese al apartado de registro</p><br>
                                    <button class="butt" onclick="closePopup('advertencia'),closePopup('filtro')">Cerrar</button>
                                </div>
                            </div>
                                    <input type="button" value="Examinar" onclick="showPopup('scroll')">
                                    <div id="scroll" class="ventana">
                                            <table border="1" class="comida">
                                                <tr id="titulos">
                                                    <td>
                                                        Nombre
                                                    </td>
                                                    <td>
                                                        Calorias
                                                    </td>
                                                    <td>
                                                        Carbohidratos
                                                    </td>
                                                    <td>
                                                        Proteinas
                                                    </td>
                                                    <td>
                                                        Grasas
                                                    </td>
                                                    <td>
                                                        Fibras
                                                    </td>
                                                </tr>
                                            <?php
                                                $result=$conex->consultaIngredientes($bdlink);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<tr>';
                                                    echo '<td>';
                                                    echo $row['nombre'];
                                                    echo '</td>';
                                                    echo '<td>';
                                                    echo $row['calorias'];
                                                    echo '</td>';
                                                    echo '<td>';
                                                    echo $row['carbohidratos'];
                                                    echo '</td>';
                                                    echo '<td>';
                                                    echo $row['proteinas'];
                                                    echo '</td>';
                                                    echo '<td>';
                                                    echo $row['grasas'];
                                                    echo '</td>';
                                                    echo '<td>';
                                                    echo $row['fibra'];
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                            ?>
                                            </table>
                                            <input type="button" value="Cerrar" onclick="closePopup('scroll')" class="btnPop">
                                        </div>
                              <input list="comida" placeholder="Seleccione su comida..." id="ingrediente">
                              <datalist id="comida">
                                <?php
                                    echo '<script>';
                                    echo 'let ingredientes = [];';
                                    echo '</script>';
                                    $result=$conex->ConsultaIngredientes($bdlink);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="'.$row['nombre'].'">';
                                        echo '</option>';
                                        echo '<script>';
                                        echo 'ingredientes.push({id:'.$row['id'].',nombre:"'.$row['nombre'].'",calorias:"'.$row['calorias'].'",carbohidratos:"'.$row['carbohidratos'].'",proteinas:"'.$row['proteinas'].'",grasas:"'.$row['grasas'].'",fibras:"'.$row['fibra'].'"});';
                                        echo '</script>';
                                    }
                                    echo '<script>';
                                    echo 'console.log(ingredientes);';
                                    echo 'console.log(ingredientes[0]);';
                                    echo '</script>';
                                ?>
                              </datalist>
                                <input type="number" placeholder="Cantidad en gramos..." id="cantidad" step="1">
                                    <input type="button" value="Añadir" onclick="agregar()">
                                    <div id="flexible">
                                        <table  id="rellenar">
                                            <thead id="relleno">
                                            <tr>
                                                <td class="nombre-td">Nombre</td>
                                                <td>Cantidad</td>
                                                <td>K.Calorias</td>
                                                <td>Carbohidratos</td>
                                                <td>Proteinas</td>
                                                <td>Grasas</td>
                                                <td>Fibras</td>
                                            </tr>
                                            </thead>
                                            <tbody id="ingredientes">
                                            </tbody>
                                        </table>
                                    </div>
                                <form method="post" >
                                    <input type="submit" value="Guardar" name="guardar" id="guardar">
                                </form>
                        </td>
                </table>
            </td>
        </tr>
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
        <tr>

        <!----------------------->
    </table>
</body>
</html>
<?php
    if($nombre=='' || $peso=='0' || $altura=='0' || $sexo=='' || $fech_nacimiento=='0000-00-00' || $enfermedad==''){
        echo '<script> showPopup("filtro"); </script>';
        echo '<script> showPopup("advertencia"); </script>';
    }
?>