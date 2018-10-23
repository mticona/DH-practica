var titular = document.getElementById("titular");
titular.style.display = "none";

var miLechuza = document.querySelector("#lechuza");
miLechuza.style.filter = "grayscale(100%)";

var copyRight = document.querySelector("#copyright");
console.log(copyRight.innerText);

var h2 = document.querySelectorAll("h2");
var size = h2.length;
for(var i = 0; i < size; i++){
  h2[i].style.color = "red";
}
