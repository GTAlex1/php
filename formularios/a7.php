<?php
if (isset($_COOKIE['mayor_edad'])) {
    echo "<h2>Hola de nuevo, ya sabemos que eres mayor de edad.</h2>";
}

if ($_POST) {
    $edad = $_POST['edad'];
    if ($edad >= 18) {
        setcookie('mayor_edad', 'si', time() + 3600);
        echo "Eres mayor de edad. Hemos guardado tu preferencia.";
    } else {
        echo "Eres menor de edad.";
    }
}
?>
<form method="post">
    Introduce tu edad: <input type="number" name="edad">
    <button type="submit">Verificar</button>
</form>