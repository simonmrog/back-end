window.addEventListener ("load", function () {

//ALMACENAMOS LOS ELEMENTOS DEL FORMULARIO EN VARIABLES
let data = document.querySelector ("#data");
let rowText = document.querySelector ("#row-text");
let columnText = document.querySelector ("#column-text");
let radioButtons = document.querySelectorAll (".radio");
let clearButton = document.querySelector ("#clear-button");
let submitButton = document.querySelector ("#submit-button");


//FUNCION PARA VALIDAR LOS DATOS INGRESADOS EN EL FORMULARIO
submitButton.addEventListener("click", function validateForm (event) {

   let flag = true;
   let row = parseInt (rowText.value);
   let column = parseInt (columnText.value);
   let book = radioButtons [0];
   let buy = radioButtons [1];
   let free = radioButtons [2];


   //CREAMOS UN ARREGLO EN JAVASCRIPT USANDO LA INFORMACIÓN DEL TEXTAREA
   let lines = data.value.split (";");
   let places = new Array ();
   for (let i=0; i<5; i++) {
      places.push (lines[i].split (" "));
   }

   //DISMINUIMOS LA POSICIÓN EN UNO, CONSISTENTE CON LAS POSICIONES DE LA MATRIZ
   row--;
   column--;
   
   //COMENZAMOS A VERIFICAR LAS CONDICIONES
   if (isNaN (row) || isNaN (column))  flag = false;
   if (row < 1 || row > 5 || column < 1 || column > 5) flag = false;
   if (book.checked) {
      if (places[row][column] == "R" || places[row][column] == "V") flag = false;
   }
   else if (buy.checked) {
      if (places[row][column] == "V") flag = false;
   }
   else if (free.checked) {
      if (places[row][column] == "V" || places[row][column] == "L") flag = false;
   }
   else  flag = false;
   
   //VALIDACIÓN FINAL
   if (flag) alert ("Operación realizada con éxito");      
   else {
      alert ("La operación no pudo ser realizada");
      event.preventDefault ();
      return (false);
   }
});


//EVENTO QUE SE ENCARGA DE LIMPIAR EL FORMULARIO
clearButton.addEventListener ("click", function () {

   rowText.value = "";
   columnText.value = "";
   radioButtons.forEach (function (element) {
      element.checked = false;
   });
});


});