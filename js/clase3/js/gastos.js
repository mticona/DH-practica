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

var app = document.querySelector('#app');
app.innerHTML = '<h1> Reporte de gastos familiares </h1><div class="lista"></div>';
