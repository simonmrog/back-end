<!DOCTYPE html>
<html> <!-- En los archivos .php el código HTML se escribe normalmente-->
    <head> <!-- como puedes ver toda la estructura de la página está escrita en HTML-->
        <title>Pick a number</title>
    </head>

    <body>
        <?php
            echo "<h3>Please, pick a number</h3>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<a href = 'number.php?number=$i'>"
                . "$i</a><br />";
            }
        ?>
    </body>
</html>