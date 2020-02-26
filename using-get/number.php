<!DOCTYPE html>
<html> <!-- En los archivos .php el código HTML se escribe normalmente-->
    <head> <!-- como puedes ver toda la estructura de la página está escrita en HTML-->
        <title>Ejemplo 1 Seleccionar N&uacute;mero</title>
    </head>
    <body>
        <?php
        if (isset($_GET['number'])) {
            $number = $_GET['number'];
            echo "<p>You picked: $number"
                    . "<br />";
            unset($_GET);
            echo "<a href = 'index.php'>Go back</a>";
        }
         else
            echo "<h1>No number selected!</h1>";
      ?>
    </body>
</html>