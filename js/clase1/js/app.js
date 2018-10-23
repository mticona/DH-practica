

  var myString = "myString";
  var bool = "yes";
  var myArray = [1,2,3];

  console.log(myString);
  console.log(myString);
  console.log(myString);

  var ironMan = {
    nombre: "Iron Man",
    equipo: "Avengers",
    poderes: ["Volar", "Lanzar misiles", "Disparar láser"],
    energia: 100,
    getPoder:function(){
      myNum = Math.floor(Math.random() * 3);

      return this.poderes[myNum];
    }
  }

  var Hulk = {
    nombre: "Hulk",
    equipo: "Avengers",
    poderes: ["Aplastar", "Gritar", "Golpear"],
    energia: 100,
    getPoder:function(){
      myNum = Math.floor(Math.random() * 3);
      return this.poderes[myNum];
    }
  }

  var botonDePrueba = document.querySelector("#myButton");
  botonDePrueba.onclick = function(){
    alert("Testeando el click")
  }
