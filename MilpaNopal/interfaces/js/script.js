var cont=1;
let ingredientesUsados = [];
function calcularIMC(){
  var altura=document.getElementById("altura").value;
  altura=altura*altura;
  peso=document.getElementById("peso").value;
  imc=peso/altura;
  imc=imc.toFixed(1);
  document.getElementById("calimc").value=imc
}
function showPopup(id) {
  document.getElementById(id).classList.add('active');
  document.body.classList.add('modal-open');
}
function closePopup(id) {
  document.getElementById(id).classList.remove('active');
  document.body.classList.remove('modal-open');
}

function agregar() {
  var comida = document.getElementById("ingrediente").value;
  var cantidad = document.getElementById("cantidad").value;
  if((cantidad>0)&&(cantidad%1==0)){
    var ingredienteEncontrado = false;
    console.log(ingredienteEncontrado);

    for (var i = 0; i < ingredientes.length; i++) {
        if (ingredientes[i].nombre === comida) {
            var calorias = ingredientes[i].calorias;
            var carbohidratos = ingredientes[i].carbohidratos;
            var proteinas = ingredientes[i].proteinas;
            var grasas = ingredientes[i].grasas;
            var fibras = ingredientes[i].fibras;
            ingredienteEncontrado = true;
            break;
        }
    }

    if (!ingredienteEncontrado) {
        alert("Ingrediente no encontrado.");
        return;
    }

    if (comida && cantidad && ingredienteEncontrado) {
        var tabla = document.getElementById("rellenar");
        tabla.style.display = "table";
        var tbody = tabla.getElementsByTagName("tbody")[0];
        var nuevaFila = document.createElement("tr");

        var celdaComida = document.createElement("td");
        var celdaCantidad = document.createElement("td");
        var celdaCalorias = document.createElement("td");
        var celdaCarbohidratos = document.createElement("td");
        var celdaProteinas = document.createElement("td");
        var celdaGrasas = document.createElement("td");
        var celdaFibras = document.createElement("td");

        celdaComida.textContent = comida;
        celdaCantidad.textContent = cantidad;
        celdaCalorias.textContent = parseFloat((calorias*(cantidad/100)).toFixed(1));
        celdaCarbohidratos.textContent = parseFloat((carbohidratos*(cantidad/100)).toFixed(1));
        celdaProteinas.textContent = parseFloat((proteinas*(cantidad/100)).toFixed(1));
        celdaGrasas.textContent = parseFloat((grasas*(cantidad/100)).toFixed(1));
        celdaFibras.textContent = parseFloat((fibras*(cantidad/100)).toFixed(1));

        ingredientesUsados.push({nombre:ingredientes[i].nombre,calorias:ingredientes[i].calorias,carbohidratos:ingredientes[i].carbohidratos,proteinas:ingredientes[i].proteinas,grasas:ingredientes[i].grasas,fibras:ingredientes[i].fibras});

        nuevaFila.appendChild(celdaComida);
        nuevaFila.appendChild(celdaCantidad);
        nuevaFila.appendChild(celdaCalorias);
        nuevaFila.appendChild(celdaCarbohidratos);
        nuevaFila.appendChild(celdaProteinas);
        nuevaFila.appendChild(celdaGrasas);
        nuevaFila.appendChild(celdaFibras);
        tbody.appendChild(nuevaFila);

        document.getElementById("ingrediente").value = "";
        document.getElementById("cantidad").value = "";
        tbody.classList.add("nombre-td");
        document.getElementById("guardar").style.display = "block";
    } else {
        alert("Por favor, ingrese tanto la comida como la cantidad.");
    }
  }else{
    alert("Por favor, ingrese una cantidad mayor a 0 y sin decimales.");
  }
}
function array(){
  return ingredientesUsados;
}