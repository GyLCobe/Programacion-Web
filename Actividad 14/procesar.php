<?php
// Verificamos si el formulario fue enviado con POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Verificamos que los campos existen y no están vacíos
    if (isset($_POST["nombre"], $_POST["edad"], $_POST["correo"])) {
        
        // Guardamos los valores en variables
        $nombre = trim($_POST["nombre"]);
        $edad = trim($_POST["edad"]);
        $correo = trim($_POST["correo"]);
        
        // Verificamos que no estén vacíos
        if (!empty($nombre) && !empty($edad) && !empty($correo)) {
            echo "<h3>Datos recibidos:</h3>";
            echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
            echo "Edad: " . htmlspecialchars($edad) . "<br>";
            echo "Correo: " . htmlspecialchars($correo) . "<br>";
        } else {
            echo "<h3>Error: Todos los campos son obligatorios.</h3>";
        }

    } else {
        echo "<h3>Error: No se enviaron todos los datos.</h3>";
    }
} else {
    echo "<h3>Error: Acceso no permitido.</h3>";
}
?>
