<?php
/**
 * index.php - Página principal del proyecto
 * 
 * Este archivo demuestra el uso de variables, constantes,
 * estructuras de control y bucles en PHP.
 * La salida final es HTML que se envía al navegador.
 */

// Definición de constantes (se ejecutan al inicio del script)
define('MATERIA', 'DESARROLLO DE APLICACIONES WEB');
define('INSTITUCION', 'EDEC CAMPUS REVOLUCIÓN');
define('AUTOR', 'Misael Valencia');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo MATERIA; ?></title>
    <!-- Enlace al archivo CSS externo para separar presentación de lógica -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        // Encabezado dinamico usando constante y echo
        echo "<h1>" . MATERIA . "</h1>";
        
        // Logica de saludo con estructura if/else
        // Variable que almacena la hora (valor asignado manualmente)
        $hora = 20; // Formato 24 horas

        // Variables para el saludo y la clase CSS
        // Las clases CSS se usan para aplicar estilos
        $saludo = "";
        $claseCss = "";
        // Estructura if/else para determinar el saludo según la hora
        // Se usan operadores de comparación (>=, <) y lógicos (&&)
        if ($hora >= 6 && $hora < 12) {
            $saludo = "¡Buenos días!";
            $claseCss = "buenos-dias";
        } elseif ($hora >= 12 && $hora < 18) {
            $saludo = "¡Buenas tardes!";
            $claseCss = "buenas-tardes";
        } else {
            $saludo = "¡Buenas noches!";
            $claseCss = "buenas-noches";
        }
        // Formatear la hora para mostrarla (HH:MM)
        // Se añade ':00' para los minutos
        // Se usa la función date() para formatear la hora y strtotime() para convertirla a timestamp
        $horaFormateada = date('H:i', strtotime($hora . ':00'));

        
        // Mostrar el saludo con los datos calculados
        // Se usa concatenación de strings con el operador .
        echo "<div class='saludo " . $claseCss . "'>";
        echo "<h2>" . $saludo . "</h2>";
        echo "<p>Hora configurada: <span class='hora-display'>" . $horaFormateada . "</span></p>";
        echo "</div>";
        
        // Se declara un array con las tecnologías PHP estudiadas
        $tecnologias = array("PDO", "cURL", "GD", "MySQL", "JSON");
        
        echo "<h3>Tecnologías PHP estudiadas:</h3>";
        echo "<ul>";
        
        // Bucle foreach: itera sobre cada elemento del array
        // $tecnologia toma el valor de cada elemento en cada iteración
        foreach ($tecnologias as $tecnologia) {
            // Esta línea se ejecuta una vez por cada elemento del array
            echo "<li>" . $tecnologia . "</li>";
        }
        
        echo "</ul>";
        
        ?>
        
        <footer>
            <?php
            // Pie de página usando constantes definidas
            // Las constantes se definieron al inicio del script
            // No usan el signo $ y son inmutables
            echo "<p class='info-curso'>" . MATERIA . " - " . INSTITUCION . "</p>";
            echo "<p class='info-autor'>Estudiante: " . AUTOR . "</p>";
            ?>
        </footer>
    </div>

</body>
</html>