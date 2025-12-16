<?php
$hash_guardado = md5("secreto123"); // Password "almacenada"

if ($_POST) {
    $pass_user = md5($_POST['pass']);
    if ($pass_user === $hash_guardado) {
        echo "¡Contraseña correcta! Bienvenida concedida.";
    } else {
        echo "Contraseña incorrecta.";
    }
}
?>
<form method="post">
    Contraseña: <input type="password" name="pass">
    <button type="submit">Validar</button>
</form>