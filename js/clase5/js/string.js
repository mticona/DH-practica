var list = document.querySelectorAll('p');
var max_p_length = 0;
var max_p;
var contador = 0;
for (var i = 0; i < list.length; i++) {
  if (list[i].innerText.length > max_p_length) {
    max_p_length = list[i].innerText.length;
    max_p = list[i];
  }
  var matches = list[i].innerText.match(/ECMA/g);
  if(matches!= null){
    contador+=matches.length;
  }
  var buscador = list[i].innerText.match(/ActionScript/g);
  if(buscador!= null){
    //OJO solo te obtiene el párrafo modificado, hay que asignarlo
    list[i].innerText = list[i].innerText.replace("ActionScript","PORQUERIASCRIPT");
  }

}

max_p.style.backgroundColor = "red";
console.log('La cantidad de caracteres del párrafo más largo es '+ max_p_length+' .');
console.log('La palabra "ECMA" aparece '+contador+' veces.');


// 4. Tenemos otra tarea para vos. Necesitamos encontrar la palabra
// "ActionScript"​, sabemos que está presente solo una vez, y queremos cambiar
// dicha palabra por la siguiente ​"PORQUERIASCRIPT"​
// 3. Otra de nuestras tareas será contar cuantas veces aparece en el documento
// la palabra ​ECMA​. Y como resultado final mostrar en consola la cantidad de
// veces que se encontró dicha coincidencia.

// for (var elem in list) {
//   if (elem.innerText.length > max_p_length) {
//     max_p = elem;
//   }
// }


// window.onload = function(){
//
// var iniciar = confirm("¿Quiere iniciar?");
// if(iniciar){
//   iniciarProceso();
// }else{
//   alert("Gracias por haber venido");
//   Location.href = 'https://www.netflix.com/ar-en/';
//
// }
//
// function iniciarProceso(){
//   var infoGastos = [];
//   var cantidad = prompt("Ingrese la cantidad de integrantes de su familia1");
//   console.log(typeof cantidad);
//   while(isNaN(cantidad) || parseInt(cantidad) <= 3){
//     console.log(cantidad);
//     alert("Debe ingresar un número entero mayor a 3 ");
//     cantidad = prompt("Ingrese la cantidad de integrantes de su familia2");
//   }
//
//   for (var i = cantidad; i > 0 ; i--) {
//     var nombre = prompt("Ingrese el nombre del integrante");
//
//     while(nombre =="" || nombre.length < 3 ){
//       alert("Debe ingresar un nombre no vacío");
//       var nombre = prompt("Ingrese el nombre del integrante");
//     }
//     var gasto = prompt("Ingrese el gasto de ete integrante");
//     while (isNaN(gasto) || parseInt(gasto)< 0) {
//       alert("Debe ingresar un gasto válido");
//       gasto = prompt("Ingrese el gasto de ete integrante");
//     }
//     console.log(gasto);
//     gasto = parseInt(gasto);
//     console.log(gasto);
//     var integranteInfo = {
//       nombre:nombre,
//       gasto:gasto
//     }
//
//     infoGastos.push(integranteInfo);
//     console.log(infoGastos);
//
//     var info = DameInfo(infoGastos);
//     console.log("Quien más gastó fue: " + info[0].nombre +" con un gasto de " + info[0].gasto );
//     console.log("Quien menos gastó fue: " + info[1].nombre +" con un gasto de " + info[1].gasto );
//     console.log("El total de lo gastado fue de " + info[2] );
//     console.log("El gasto promedio fue de " + info[3] );
//
//   }
//
//   function DameInfo(array){
//     var max = array[0];
//     var min = max;
//     var total = max.gasto;
//     var actual;
//     for (var i = 1; i < array.length; i++) {
//       actual = array[i];
//       if(actual.gasto > max.gasto){
//         max = actual;
//       }
//       if(actual.gasto < min.gasto){
//         min = actual;
//       }
//       total += actual.gasto;
//
//     }
//     var promedio = total/array.length;
//     var res = [max, min, total, promedio];
//     return res;
//   }
//
// }
// }
