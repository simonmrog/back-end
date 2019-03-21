<?php

   function arrayTransform ($array) {

      //CONVERTIMOS EL ARREGLO A UNA CADENA DE CARACTERES CON IMPLODE
      $text = "";
      for ($i=0; $i<5; $i++) {
         $text .= implode (" ", $array[$i]) . ";";
      }
      
      //AGREGAMOS EL FORMULARIO Y EL TEXTAREA
      echo '<form id="form" action="index.php" method="GET" align="left">';
      echo "<textarea id='data'>$text</textarea>";
   }