window.onload = function(){



  for (var i = 1; i*3 < 135; i++) {
    console.log("3 x" + i + "=" + i*3 );
  }


var dado = Math.ceil(Math.random() * 7);
console.log(dado);
  switch (dado) {
    case 1:console.log(" ​El número "+ dado + " es impar");
    break;
    case 3:console.log(" ​El número "+ dado + " es impar");
    break;
    case 5:console.log(" ​El número "+ dado + " es impar");
    break;
    case 2:console.log(" ​El número "+ dado + " es par");
    break;
    case 4:console.log(" ​El número "+ dado + " es par");
    break;
    case 6:console.log(" ​El número "+ dado + " es par");
    break;
  }

  var random;
  var ejecution = 0 ;
  while (random != 19) {
    random = Math.ceil(Math.random() * 38);
    console.log(random);
    ejecution++;
  }
  console.log("Salió el número 19, se tomaron " + ejecution +" intentos para ello.")

  var pares = [];
  for (var i = 0; i < 101; i++) {
    if(i%2 == 0){
      pares.push(i);
    }else {
      continue;
    }
  }
  console.log(pares);

  var estudiante = {
    nombre: "Hulk",
    curso: "Avengers",
    dni: "",
    email: "",
    fromObjectToArray:function(){
      var propiedades = [];
      return propiedades;
    }
  }


  var array = []
  for (var i = 0; i < 21; i++) {
    array.push(i);
  }
  var arrayRaizCuadrada = array.map(function(elem){
    return Math.sqrt(elem);
  });

  var enigma = ["l", 1, "a", 2, 2, 5, "p", 5, 7, 5, 3, "e", 6,
  "r", 7, 6, 5, 3, 2, 1, "s", 9, 9, 9, 6, "e", 2, "v", 5, "e", 3, "r",
  2, "a", 1, 6, 4, 1, 2, "n", 2, "c", 3, 5, 5, 5, 7, "i", 4, "a", 5,
  2, 1, 3, "e", 6, "s", 7, "l", 4, "a", 3, "c", 2, 3, 1, 5, 3, 2, "l",
  3, "a", 4, "v", 5, "e", 6];
  var engimaNumbers = enigma.filter(function(elem){
    return (typeof elem) == "number";
  })
  var altura = engimaNumbers.reduce(function(acumulador, elem){
    return acumulador + elem;
  }, 0);
  console.log("La altura del enigma es " + altura);

  var enigmaChars = enigma.filter(function(elem){
    return (typeof elem) == "string";
  })
  console.log(enigmaChars);
  var calle = enigmaChars.join("");
  console.log(calle);
  console.log("La dirección secreta es " + calle + " con altura " + altura);
}
