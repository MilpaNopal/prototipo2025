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
    <script src="js/script.js"></script>
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
                        <td class="contenedor" style="overflow-y:scroll;"> 
                            <div id="letras">
                                Recetas
                            </div>
                            <form method="post" >
                                    <div class="TD-RC">
                                    <!-- RECETA 1 -->       
                                    <ul class="tinocotonta">
                                        <div id="cont" class="contenedor-img" onclick="showPopup('RC1')">
                                                <img src="../img/recetas/rc1.jpg" alt="Imagen Circular">
                                        </div>
                                            <p class="Til-Rc">Crema de brócoli<p>  
                                    </ul>
                                    <div class="info" id="RC1">
                                        <h2>Crema de brócoli con zanahoria rallada</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc1.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los siguientes ingredientes </p>
                                        <p>(4-personas)</p>
                                        <li>1 brócoli pequeño</li>
                                        <li>1 cebolla</li>
                                        <li>1 zanahoria</li>
                                        <li>1 diente de ajo</li>
                                        <li>1 puerro</li>
                                        <li>650 ml de leche desnatada</li>
                                        <li>2 dl de caldo de verduras</li>
                                        <li>1 ramita de perejil</li>
                                        <li>4 rebanadas de pan</li>
                                        <li>Aceite de oliva</li>
                                        <li>Sal y pimienta</li>

                                        <ul>
                                            <h3>Elaboración</h3>
                                                <p>Paso 1. Pelar la cebolla, el ajo y picar todo. Lavar los puerros y picarlos. Rehogar todo en una cazuela con 3 cucharadas de aceite a fuego lento durante al menos 10 minutos</p>
                                                <p>Paso 2. Agregar el brócoli previamente lavado y separado en ramitos.</p>
                                                <p>Paso 3. Cubrir con el caldo y la leche y llevar a ebullición. Dejar cocer todo al menos 15 minutos. Triturar bien hasta obtener una crema homogénea. Salpimentar.</p>
                                                <p>Paso 4. Pelar una zanahoria, lavar y cortar en láminas largas y muy finas. Se puede usar el mismo pelador o una mandolina. Lavar todo, secar y picar el perejil también. </p>
                                                <p>Paso 5. Cortar un poco de pan en dados y añadirlo a la bandeja del horno para tostarlos.</p>
                                                <p>Paso 6. Servir la crema caliente con la zanahoria, los dados de pan y espolvorear para terminar con un poco de perejil picado. Corta el pan en dados, colócalos en la placa del horno y tuéstalos bajo el grill hasta que estén dorados</p>
                                            </ul>
                                        <button class="butt" onclick="closePopup('RC1')">Cerrar</button>
                                    </div>
                                <!-- RC2 -->
                                <ul class="tinocotonta">                              
                                <div id="cont" class="contenedor-img" onclick="showPopup('RC2')">
                                        <img src="../img/recetas/rc2.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Sándwich </p>
                                </ul>
                                    <div class="info" id="RC2">
                                
                                        <h2>Sándwich de ensalada de pollo y aguacate (283-calorías)</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc2.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los siguientes ingredientes</p>
                                        <p>(2-personas)</p>
                                        <li>2 Pechuga de pollo</li>
                                        <li>2 Aguacate maduro</li>
                                        <li>Pan de molde 4 rebanadas</li>
                                        <li>Cebolla morada 50g</li>
                                        <li>Aceite de oliva virgen extra 15ml</li>
                                        <li>Mayonesa 15g</li>
                                        <li>Finas Hierbas 3g</li>
                                        <li>Sal al gusto</li>
                                        <li>Pimienta negra molida al gusto</li>
                                        <ul>
                                        <h3>Elaboración</h3>
                                <p>Paso 1. Para iniciar la receta vamos a cortar las pechugas de pollo en cuadritos de unos 2 centímetros de largos. Calentamos un poco de aceite de oliva en un sartén y asamos los trocitos de pollo por unos cinco minutos, a fuego medio, hasta que queden bien dorados</p>
                                <p>Paso 2. A media cocción sazonamos con las finas hierbas, sal y pimienta al gusto. Cuando esté listo retiramos de la lumbre y dejamos enfriar.</p>
                                <p>Paso 3. Ahora vamos a cortar los aguacates en dos, retirarles el hueso, la piel y cortarlos en cubitos de un tamaño similar al pollo. Picamos la cebolla y la colocamos junto con el aguacate en un cuenco. Añadimos el pollo, ya tibio o frio, la mayonesa, el aceite de oliva, sal y pimienta</p>
                                <p>Paso 4. Revolvemos muy bien. Calentamos el pan y armamos los sándwiches. Si lo deseas puedes agregarle una hojas de lechuga o un poco de queso. </p>
                                </ul>
                                <button class="butt" onclick="closePopup('RC2')">Cerrar</button>
                                    </div>
                                <!-- RC3 -->
                                    <ul class="tinocotonta">                              
                                    <div id="cont" class="contenedor-img" onclick="showPopup('RC3')">
                                        <img src="../img/recetas/rc3.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Quesadillas</p>
                                    </ul>
                                    <div class="info" id="RC3">
                                
                                        <h2>Quesadillas de pollo con chorizo</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc3.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los siguientes ingredientes</p>
                                        <p>(1-personas)</p>
                                        <li>1 pechuga de pollo</li>
                                        <li>100g de chorizo</li>
                                        <li>4 tortillas de harina</li>
                                        <li>Un chile serrano</li>
                                        <li>Un pimiento rojo o verde</li>
                                        <li>Media cebolla blanca</li>
                                        <li>150g de queso manchego</li>
                                        <li>Dos cucharadas de aceite</li>
                                        <li>Sal al gusto</li>
                                    

                                        <ul>
                                        <h3>Elaboración</h3>
                                <p>Paso 1. Para empezar van a picar la cebolla, el pimiento, el chile y ponerlos a sofreír en un sartén con el aceite por unos minutos.</p>
                                <p>Paso 2. Luego van a limpiar la pechuga de pollo y a cortarla en cubitos. Hacen lo mismo con el chorizo y agregan los dos a las verduras en el sartén. </p>
                                <p>Paso 3. Revuelven y sazonan con sal al gusto. Dejan en la lumbre (media) por 20 minutos, revolviendo regularmente. Agregan el queso, mezclan todo bien y dejan otros 10 minutos a que se derrita.</p>
                                <p>Paso 4. . Ponen las tortillas en otro sartén con un poco de aceite y las rellenan a la mitad con la mezcla de pollo y chorizo. Doblan la tortilla y la fríen por unos dos a tres minutos para que dore. Hacen lo propio con todas las tortillas hasta acabar el relleno.</p>
                                </ul>

                                        <button class="butt" onclick="closePopup('RC3')">Cerrar</button>
                                    </div>

                                    <!-- RC4 -->

                                    <ul class="tinocotonta">                              
                                    <div id="cont" class="contenedor-img" onclick="showPopup('RC4')">
                                        <img src="../img/recetas/rc4.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Omelette</p>
                                    </ul>
                                    <div class="info" id="RC4">
                                
                                        <h2>Omelette de huevo y papa</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc4.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los siguientes ingredientes</p>
                                        <p>(6-personas)</p>
                                        <li>Patata 600g</li>
                                        <li>1 Diente de ajo</li>
                                        <li>8 Huevos</li>
                                        <li>Aceite de oliva virgen extra 15ml</li>
                                        <li>Queso feta 200g</li>
                                        <li>Pesto de albahaca 50g</li>
                                        <li>Pimienta molida algusto</li>
                                        <li>Sal al gusto</li>
                                        <ul>

                                        <h3>Elaboración</h3>
                                <p>Paso 1. Pelamos las patatas y las cortamos en ruedas finas de medio centímetro aproximadamente. Llenamos de agua una cacerola y la ponemos al fuego. </p>
                                <p>Paso 2. Cuando comience a hervir, sazonamos e introducimos la patata. Cocemos durante cinco minutos o hasta que la patata esté tierna. Escurrimos bien para que no queden restos de agua y dejamos atemperar unos minutos </p>
                                <p>Paso 3. Mientras tanto pelamos el diente de ajo y lo picamos finamente, lo agregamos a los huevos, que tendremos en un recipiente hondo y batimos bien. Incorporamos la patata escurrida y 150 g del queso feta troceado</p>
                                <p>Paso 4. Salpimentamos al gusto, pero generosamente, y cuajamos en una sartén engrasada con el aceite durante cinco minutos. Introducimos en el horno, precalentado a 200 ºC, y terminamos de cuajar durante 10-15 minutos. Si nuestra sartén tiene un mango extraíble, lo retiramos al introducirla en el horno</p>
                                <p>Paso 5. Servimos la frittata con el pesto y el resto del queso feta repartido por la superficie</p>

                                </ul>

                                        <button class="butt" onclick="closePopup('RC4')">Cerrar</button>
                                    </div>

                                    
                                    <!-- RC5 -->

                                    <ul class="tinocotonta">                              
                                    <div id="cont" class="contenedor-img" onclick="showPopup('RC5')">
                                        <img src="../img/recetas/rc5.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Quesadillas</p>
                                    </ul>
                                    <div class="info" id="RC5">
                                
                                        <h2>Quesadillas de champiñones y queso gouda</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc5.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los siguientes ingredientes</p>
                                        <p>(2-personas)</p>
                                        <li>1/2 cebolla blanca</li>
                                        <li>1 pimiento rojo</li>
                                        <li>1 diente de ajo</li>
                                        <li>Aceite de oliva virgen extra 15ml</li>
                                        <li>1 cucharadita de mantequilla</li>
                                        <li>10 champiñones</li>
                                        <li>100 gramos de queso gouda</li>
                                        <li>4 tortillas de harina</li>
                                        <li>Pimienta molida algusto</li>
                                        <li>Sal al gusto</li>
                                        <ul>

                                        <h3>Elaboración</h3>
                                <p>Paso 1. Cortamos el pimiento, la cebolla, el ajo y los champiñones; una vez listos, calentamos el aceite de oliva en una sartén a fuego medio y agregamos las cebollas y el ajo.</p>
                                <p>Paso 2. Cuando estén suaves, agregamos el pimiento y salteamos durante cinco minutos, para después transferirlos a un plato.  </p>
                                <p>Paso 3. Regresamos la sartén al fuego y derretimos la mantequilla; bajamos el fuego y agregamos los champiñones. </p>
                                <p>Paso 4. Salpimentamos y dejamos cocinar hasta que cambien de color. Los mezclamos con la cebolla y pimiento y reservamos. Por último, preparamos las quesadillas. Limpiamos la sartén, la untamos con un poco de aceite o mantequilla, y directamente en él colocamos una tortilla, una cuarta parte del queso gouda, la mitad de la mezcla de champiñones, cebolla y pimiento, otro tanto igual de queso gouda y por último una tortilla.</p>
                                <p>Paso 5. Cuando esté ligeramente dorada la tortilla de abajo, cuidadosamente volteamos la quesadilla y permitimos que se dore del otro lado. Repetimos este paso para preparar la otra quesadilla.</p>

                                </ul>

                                        <button class="butt" onclick="closePopup('RC5')">Cerrar</button>
                                    </div>

                                    <!-- RC6 -->

                                    <ul class="tinocotonta">                              
                                    <div id="cont" class="contenedor-img" onclick="showPopup('RC6')">
                                        <img src="../img/recetas/rc6.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Huevo con verduras</p>
                                    </ul>
                                    <div class="info" id="RC6">
                                
                                        <h2>Sarten de huevo con verduras</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc6.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los siguientes ingredientes</p>
                                        <p>(2-personas)</p>
                                        <li>8 Espárragos</li>
                                        <li>4 Brócoli </li>
                                        <li>Cebolla blanca 150g</li>
                                        <li>2 Tomates</li>
                                        <li>Tomate concentrado 15g</li>
                                        <li>Guisantes (de lata)100 g</li>
                                        <li>Habitas baby (en conserva)50 g</li>
                                        <li>2 huevos</li>
                                        <li>Aceite de oliva virgen extra </li>
                                        <li>Comino molido</li>
                                        <li>Sal al gusto</li>
                                        <ul>

                                        <h3>Elaboración</h3>
                                <p>Paso 1. Pelamos la cebolla y la cortamos en juliana muy fina. Calentamos un poco de aceite de oliva virgen extra en una sartén y la pochamos a fuego muy suave. Mientras tanto lavamos los espárragos trigueros, retiramos la parte inferior del tallo y desechamos. Cortamos el resto en discos de medio centímetro y reservamos las yemas.</p>
                                <p>Paso 2. Retiramos el tronco del brócoli y cortamos cuatro floretes. El resto lo guardamos envuelto en papel film para otra ocasión. Pelamos la parte exterior del tronco y lo cortamos en dados. Cortamos los floretes en pequeñas piezas. Reservamos. Escaldamos los tomates para poder pelarlos con facilidad y los cortamos en dados.</p>
                                <p>Paso 3. Cuando la cebolla esté transparente añadimos los espárragos y el brócoli y salteamos a fuego medio durante cinco minutos. Incorporamos el tomate en dados, el tomate concentrado y un poco de agua (unos 50 ml). Condimentamos con media cucharadita de comino y chile molidos y sazonamos al gusto. Removemos y dejamos cocer cinco minutos más.</p>
                                <p>Paso 4. Incorporamos los guisantes y las habitas baby, ambos bien escurridos. Removemos y hacemos un par de huecos en la sartén. Colocamos en ellos los huevos, bajamos la intensidad del fuego, tapamos y dejamos que los huevos cuajen con el vapor. En el momento en que veamos que la clara está opaca, retiramos la sartén del fuego, espolvoreamos con un poco de chile molido y servimos.</p>

                                </ul>

                                        <button class="butt" onclick="closePopup('RC6')">Cerrar</button>
                                    </div>

                                    </div>

                                    <div class="TD-RC">


                                <!-- RECETA 7 -->
                                                        
                                                            
                                <ul class="tinocotonta">
                                <div id="cont" class="contenedor-img" onclick="showPopup('RC7')">
                                        <img src="../img/recetas/rc7.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Caldo de Pollo<p>  
                                </ul>

                                    <div class="info" id="RC7">
                                
                                        <h2>Caldo de pollo</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc7.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los siguientes ingredientes</p>
                                        <p>(4-personas)</p>
                                        <li>pechuga de pollo sin piel 100g = 165 cal</li>
                                        <li>litros de agua 100g = 0cal</li>
                                        <li>cebolla en trozo 100 = 40 cal</li>
                                        <li>dientes de ajo 100g = 149 cal</li>
                                        <li>cubitos de Cubo(s) de Knorr® Caldo de Pollo 10g = 30 cal</li>
                                        <li>zanahoria pelada rebanada y cocida 100g = 34 cal</li>
                                        <li> calabaza rebanada 100g = 17 cal</li>
                                        <li> taza de ejotes verdes cocidos y cortados en tercios 100g = 31 cal</li>
                                        <li>elote blanco cocido y en trozos 100g = 85 cal</li>
                                        <li>ramitas de cilantro fresco 100g = 23 cal</li>
                                        <ul>
                                        <h3>Elaboración</h3>
                                <p>Paso 1. Hierve agua en una olla profunda, una vez que obtengas una burbuja alta, coloca las piezas de pollo: la pierna, el muslo y la pechuga de pollo. Agrega ajo y cebolla, tapa y cocina por 10 minutos a temperatura media. Destapa y retira la espuma que se forma con ayuda de una espumadera o cuchara, esta espuma es la proteína soluble en agua que proviene de la carne. Vuelve a tapar y cocina por 10 minutos más.</p>
                                <p>Paso 2. Una vez que la cocción del pollo se encuentre a un 80%, agrega las verduras, primero el elote y la zanahoria, que son las más duras, tapa y hierve por 15 minutos.</p>
                                <p>Paso 3. Después agrega el chayote, la calabaza, los ejotes y aromatiza con el cilantro y la hierbabuena. Sazona con sal, tapa y cocina por 10 minutos más.Sirve el caldo de pollo de inmediato, acompaña con cilantro, cebolla, chile serrano y aguacate al gusto.</p>
                                </ul>

                                        <button class="butt" onclick="closePopup('RC7')">Cerrar</button>

                                    </div>


                                <!-- RC8 -->


                                <ul class="tinocotonta">                              
                                <div id="cont" class="contenedor-img" onclick="showPopup('RC8')">
                                        <img src="../img/recetas/rc8.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Caldo de Res</p>
                                </ul>
                                    <div class="info" id="RC8">
                                
                                        <h2>Caldo de Res</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc8.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los isguientes ingradientes </p>
                                        <p>(3-personas)</p>
                                        <li>tazas de agua 100g = 0 cal</li>
                                        <li>pierna de res con hueso 100g = 288 cal</li>
                                        <li>cabeza de ajo 100g = 149 cal</li>
                                        <li>hojas de laurel 100g = 314 cal</li>
                                        <li>sal 100g = 0 </li>
                                        <li>chiles serranos, picados en trozos grandes 100g= 32 cal </li>
                                        <li>papas blancas, cortadas en cubos de 1 pulgada 100g = 88cal</li>
                                        <li>cebolla blanca pequeña, picada 100g = 40 cal</li>
                                        <li>zanahorias, cortadas en rodajas de 3/4 de pulgada 100g = 34 cal</li>
                                        <li>mazorcas de maíz fresco, sin cáscara, limpias y cortadas en 3 trozos cada una 100g = 85 cal</li>
                                        <li>repollo verde picado en trozos grandes (trozos de 1 pulgada) 100g = 25 cal</li>
                                        <li>cilantro fresco picado, dividido 100g = 23 cal</li>
                                        <li>tortillas de maíz 100g = 237 cal </li>
                                        <li>limón grande cortado en gajos 100g = 29 cal</li>


                                        <ul>
                                        <h3>Elaboración</h3>
                                <p>Paso 1. En una olla grande y pesada, agrega 10 tazas de agua, la pierna de res, el ajo, las hojas de laurel y 1 1/2 cucharadas de sal. Llévalo a ebullición, quitando la parte superior cuando sea necesario. Tapa y reduce el fuego, continúa cocinando de 1 1/2 a 2 horas o hasta que la carne esté suave.</p>
                                <p>Paso 2. Agrega los chiles serranos, 1/2 cucharadita de sal y 1/4 taza de agua a la procesadora de alimentos o a la licuadora. Procesa hasta que quede suave; reserva.</p>
                                <p>Paso 3. Una vez que la carne esté tierna, retira las hojas de laurel y las cabezas de ajo. Agrega las papas, la cebolla, las zanahorias, el maíz y las 2 tazas de agua restantes a la olla. Sazona al gusto con sal. Lleva de nuevo a ebullición, reduce el fuego y continúa cocinando hasta que las papas estén tiernas.</p>
                                <p>Paso 4. Cuando las papas estén tiernas, retira el maíz y la carne de la sopa, transferirlas a un tazón grande y cubrelas para mantenerlas calientes. Agrega el repollo y 1/4 taza de cilantro a la sopa. Cocina otros 10 a 15 minutos, hasta que el repollo esté tierno pero aún crujiente</p>
                                <p>Paso 5. Calienta las tortillas de maíz en un comal caliente y mantenlas calientes en un calentador de tortillas o envueltas en papel de aluminio</p>
                                <p>Paso 6. Divide la sopa en 8 tazones. Agrega el maíz y un poco de carne a cada tazón. Adorna con rodajas de limón, el cilantro restante y la salsa de chile serrano.</p>

                                </ul>

                                <button class="butt" onclick="closePopup('RC8')">Cerrar</button>

                                    </div>


                                <!-- RC9 -->

                                    <ul class="tinocotonta">                              
                                    <div id="cont" class="contenedor-img" onclick="showPopup('RC9')">
                                        <img src="../img/recetas/rc9.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Caldo de Pescado</p>
                                    </ul>
                                    <div class="info" id="RC9">
                                
                                        <h2>Caldo de Pescado</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc9.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los siguientes ingredientes</p>
                                        <p>(4-personas)</p>
                                        <li>Filete de pescado blanco (blanco, de preferencia) 100g = 92 cal</li>
                                        <li>Agua 100g = 0 cal</li>
                                        <li>Puré de jitomate (o tres jitomates) 100g =35cal</li>
                                        <li>Cebolla blanca 100g = 40 cal</li>
                                        <li>Diente de ajo 100g = 149 cal</li>
                                        <li>Aceite de oliva 100g = 884 cal</li>
                                        <li>Papas (cortada en cubos) 100g = 88 cal</li>
                                        <li>Zanahoria (cortadas en cubos) 100g = 34 cal</li>
                                        <li>Perejil (1 rama) 100g = 36 cal</li>
                                        <li>Hojas de laurel 100g = 314 cal</li>
                                        <li>Sal 100g = 0 cal</li>
                                    

                                        <ul>
                                        <h3>Elaboración</h3>
                                <p>Paso 1. Licúa el jitomate, el chile guajillo, la cebolla, el ajo, el chile chipotle, la sal, la pimienta y el agua a velocidad media por 3 minutos. Cuela y reserva.</p>
                                <p>Paso 2. Calienta el aceite de oliva en una olla a fuego medio y agrega el puerro, la zanahoria, la calabaza y la papa. Cocina por 5 minutos o hasta que las verduras estén tiernas. Agrega la salsa, el caldo de camarón, el orégano y el agua y cocina por 5 minutos más o hasta que rompa hervor.</p>
                                <p>Paso 3. Si vas a incorporar alguna parte del pescado, como la cabeza o la cola, añádela al hervir para que suelte su sabor. Agrega el pescado y cocina hasta que se reduzca el caldo o hasta que esté bien cocido junto con las verduras. Rectifica la sazón y retira del fuego.</p>
                                <p>Paso 4. Sirve el caldo de pescado en un plato hondo, decora con perejil y disfruta con pan integral.
                                </p>
                                </ul>

                                        <button class="butt" onclick="closePopup('RC9')">Cerrar</button>
                                    </div>

                                    <!-- RC10 -->

                                    <ul  class="tinocotonta">                              
                                    <div id="cont" class="contenedor-img" onclick="showPopup('RC10')">
                                        <img src="../img/recetas/rc10.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Burritos de Carne</p>
                                    </ul>
                                    <div class="info" id="RC10">
                                
                                        <h2>Burritos de Carne</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc10.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los isguientes ingradientes</p>
                                        <p>(2-personas)</p>
                                        <li>Aceite vegetal (por cada 100 g): 884 kcal.</li>
                                        <li>1 cucharada (15 g): 132 kcal</li>
                                        <li>Cebolla picada finamente: 40 kcal.</li>
                                        <li>Ajo picado (por cada 100 g): 149 kcal.</li>
                                        <li>1 cucharada (~15 g): 22 kcal.</li>
                                        <li>Res magra : 250 kcal.</li>
                                        <li>Carne con mayor contenido graso : 290-300 kcal.</li>
                                        <li>Jugo MAGGI 1 cucharada (~15 g): 7-8 kcal.</li>
                                        <li>Salsa Tipo Inglesa (por cada 100 g): 60 kcal.</li>
                                        <li>Sal con ajo en polvo: 331 kcal </li>
                                        <li>Tamaño estándar (~50 g): 150-170 kcal</li>
                                        <li>Frijoles bayos enteros (por cada 100 g): 140 kcal.</li>
                                        <li>Queso cheddar rallado (por cada 100 g): 403 kcal</li>
                                        <li>Jitomates: 18 kcal.</li>
                                        <li>Cilantro fresco: 23 kcal.</li>
                                        <li>Aguacate (por cada 100 g): 160 kcal</li>
                                        <li>Limón (su jugo, por cada 100 ml): 29 kcal.</li>
                                        <ul>

                                        <h3>Elaboración</h3>
                                <p>Paso 1. Para cocinar la carne, en un recipiente agrega la salsa inglesa, la salsa sazonadora, el jugo de limón, ajo en polvo, sal y pimienta. Mezcla bien.</p>
                                <p>Paso 2. Vierte la cerveza y mezcla ligeramente para no sacar mucha espuma</p>
                                <p>Paso 3. Con el resto de la marinada, incorpora la carne y revuelve para que quede bien impregnada. Cubre y refrigera un mínimo de 1 hora</p>
                                <p>Paso 4. Retira la carne de la marinada y asa a fuego medio en un grill durante 6-8 minutos si la buscas a término medio o si la prefieres más cocida, hasta que consigas el término de cocción de tu preferencia.</p>
                                <p>Paso 5. Cuando esté lista, déjala reposar en un recipiente durante 5-10 minutos para que suelte sus jugos y luego córtala en pedazos de 3 cms aproximadamente.</p>
                                <p>Paso 6. Toma las tortillas y arma tu burrito. Coloca en el centro la carne asada, cebolla caramelizada, lechuga y tomates cherry a tu gusto. Baña con la salsa de tu preferencia y enrolla.</p>

                                </ul>

                                        <button class="butt" onclick="closePopup('RC10')">Cerrar</button>
                                    </div>

                                    
                                    <!-- RC11 -->

                                    <ul class="tinocotonta">                              
                                    <div id="cont" class="contenedor-img" onclick="showPopup('RC11')">
                                        <img src="../img/recetas/rc11.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Camarones Con verduras</p>
                                    </ul>
                                    <div class="info" id="RC11">
                                
                                        <h2>Camarones con Verduras</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc11.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los isguientes ingradientes </p>
                                        <p>(2-personas)</p>
                                        <li>ajo troceado 100g = 114 cal</li>
                                        <li>perejil troceado 100g = 36c cal</li>
                                        <li>camarón pelado cocido 100g = 99 cal</li>
                                        <li>verdura 3 floretes</li>
                                        <li>tomate pelado a dados 100g = 20 cal</li>
                                        <li>Pimienta negra molida 100g = 255 cal</li>
                                        <li>Aceite de oliva virgen extra 100g = 884 cal</li>
                                        <li>Sal yodada 100g = 571 cal/li>
                                        <ul>

                                        <h3>Elaboración</h3>
                                <p>Paso 1. Cortar todos los vegetales en cubitos.</p>
                                <p>Paso 2. Sazonar nuestros deliciosos Camarones con, ajo rallado sal y pimienta</p>
                                <p>Paso 3. Poner un chorrito de aceite en una sartén grande con una llama alta</p>
                                <p>Paso 4. Tirar primero los vegetales por un 3 min y luego los camarones</p>
                                <p>Paso 5. Cocinar hasta que queden los camarones bien dorados</p>

                                </ul>

                                        <button class="butt" onclick="closePopup('RC11')">Cerrar</button>
                                    </div>

                                    <!-- RC12 -->

                                    <ul class="tinocotonta">                              
                                    <div id="cont" class="contenedor-img" onclick="showPopup('RC12')">
                                        <img src="../img/recetas/rc12.jpg" alt="Imagen Circular">
                                    </div>
                                    <p class="Til-Rc">Alitas de Pollo</p>
                                    </ul>
                                    <div class="info" id="RC12">
                                
                                        <h2>Alitas de Pollo-(ASADOR)</h2>
                                        <img id="img-cuadro" src="../img/recetas/rc12.jpg" alt="Imagen Circular">
                                        <p>Para esta receta tendremos que tener los isguientes ingradientes</p>
                                        <p>(2-personas)</p>
                                        <li>Alitas de pollo con piel: 100g = 215-250 kcal s</li>
                                        <li>Sal de mar al gusto: 0 kcal </li>
                                        <li>Pimienta negra entera al gusto: 100g = 251 kcal. </li>
                                        <li>Mostaza: 100g = 66 kcal </li>
                                        <li>Vinagre de sidra: 100g = 22 kcal.</li>
                                        <li>Miel de abeja: 100g = 304 kcal.</li>
                                        <li>Aceite vegetal: 100g = 884 kcal.</li>
                                        <li>Salsa inglesa: 100g = 60 kcal </li>
                                        <li>Ajo en polvo: 100g = 331 kcal. </li>
                                        <li>Sal al gusto</li>
                                        <ul>

                                        <h3>Elaboración</h3>
                                <p>Paso 1. Se ponen las alitas de pollo en una olla onda, y se les exprime los limones y se le echan todos los ingredientes y batir todo, o revolver bien.</p>
                                <p>Paso 2. Cuando ya las alitas tienen la marinada por todos lados se cubren con papel aluminio y se ponen en el refrigerador, mínimo 1 hora, máximo hasta 2 días.</p>
                                <p>Paso 3. Cuando las alas ya están marinadas Se pone la marinada en un contenedor de plástico (esta la usaras para ponerle a las alitas mientras las asas), Se prende el asador y cuando el carbon ya esta listo Se ponen las Alitas a fuego indirecto Por 20 minutos Por cada lado echándoles la marinada cada 5 minutos. pasados los 40 minutos pones las Alitas a fuego directo 10 minutos Por cada lado. y ponerle la marinada Durante estos 10 minutos unas 3 veces Por cada lado. y listas para servirse! disfrútalas! Se acompañan bien con trozos de zanahorias y apio y un aderezo sabor ranch o simplemente con salsa y tortillas.</p>

                                </ul>

                                        <button class="butt" onclick="closePopup('RC12')">Cerrar</button>
                                    </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
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
                <input type="button" value="Recetas" class="navegacion" id="tres">
            </td>
        </tr>


    </table>
    <!----------------------->
</body>
</html>