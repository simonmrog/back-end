<?php

   function showData () {

      //CREAMOS EL ARREGLO MODELO
      $places = array (
         ["R", "V", "V", "V", "R"],
         ["L", "V", "L", "L", "L"],
         ["L", "V", "R", "R", "R"],
         ["V", "V", "V", "V", "V"],
         ["L", "R", "R", "R", "R"],
      );

      //IMPRIMIMOS LA TABLA
      echo "<table>";
      echo "<tr>";
      echo "<th colspan='6'>Escenario</th>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>";
      echo "<th>1</th>";
      echo "<th>2</th>";
      echo "<th>3</th>";
      echo "<th>4</th>";
      echo "<th>5</th>";
      echo "</tr>";
      
      for ($i=0; $i < 5; $i++) {
         echo "<tr>";
         echo "<th>". ($i+1) . "</th>";
         for ($j=0; $j < 5; $j++) {
            echo "<td id='place$i,$j'>" . $places[$i][$j] . "</td>";
         }
         echo "</tr>";
      }

   echo "</table>";

   //LLAMAMOS LA FUNCION QUE AGREGA EL TEXTAREA Y EL FORMULARIO
   arrayTransform ($places);
   }

?>