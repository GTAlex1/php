<?php
if (isset($_COOKIE['usuario_logueado'])) {
    echo "<h1>Bienvenido de nuevo, " . $_COOKIE['usuario_logueado'] . "!</h1>";
}

if ($_POST) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Simulación de validación
    if ($user == "admin" && $pass == "admin") {
        echo "<h1>Bienvenido, $user!</h1>";
        if (isset($_POST['recordar'])) {
            setcookie('usuario_logueado', $user, time() + (3600 * 24 * 7)); // 1 semana
        }
    } else {
        echo "Error de acceso.";
    }
}
?>
<form method="post">
    Usuario: <input type="text" name="user"><br>
    Pass: <input type="password" name="pass"><br>
    Recordar sesión: <input type="checkbox" name="recordar"><br>
    <button type="submit">Entrar</button>
</form>