<!-- 
   Nombre: Simón Murillo
   Programa: Desarrollo Web con PHP
   Evidencia: Taller "Uso de formularios para transferencia"
 -->

<?php
   require_once ("data.php");
   require_once ("show.php");
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title></title>
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/script.js"></script>
</head>

<body>

<div id="main-wrapper"> 
   <header>
      <h1 id="main-title">Reserva tus entradas</h1>
   </header>

   <center id="content">

      <?php
         showData ();
      ?>

         <!-- AGREGAMOS LOS DEMÁS COMPONENTES DEL FORMULARIO -->
         <p class="item">
            <label for="row">Fila</label>
            <input id="row-text" type="text" name="row">
         </p>
         <p class="item">
            <label for="column">Columna</label>
            <input id="column-text" type="text" name="column">
         </p>
         <p class="item">
            <label>Reservar</label>
            <input class="radio" type="radio" name="option" value="book">
         </p>
         <p class="item">
            <label>Comprar</label>
            <input class="radio" type="radio" name="option" value="buy">
         </p>
         <p class="item">
            <label>Liberar</label>
            <input class="radio" type="radio" name="option" value="free">
         </p>
         <input id="submit-button" type="submit" value="Enviar">
      </form>
      <button id="clear-button">Borrar</button>

   </center>

   <footer>&copy; Simón Murillo</footer>

</div>
</body>
</html>