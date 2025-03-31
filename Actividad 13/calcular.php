<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["num1"], $_POST["num2"], $_POST["operacion"])) {
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        $operacion = $_POST["operacion"];
        $resultado = 0;

        switch ($operacion) {
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacion":
                $resultado = $num1 * $num2;
                break;
            case "division":
                if ($num2 == 0) {
                    echo "<h3>Error: No se puede dividir por cero.</h3>";
                    exit;
                }
                $resultado = $num1 / $num2;
                break;
        }

        echo "<h3>Resultado: $resultado</h3>";
        echo '<br><a href="index.html">Volver</a>';
    } else {
        echo "<h3>Error: Completa todos los campos.</h3>";
        echo '<br><a href="index.html">Volver</a>';
    }
} else {
    header("Location: index.html");
    exit();
}
?>
