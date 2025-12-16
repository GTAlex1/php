<?php
if ($_POST) {
    if ($_POST['u'] === "admin" && $_POST['p'] === "123") {
        if (isset($_POST['r'])) {
            // Seteamos la cookie ANTES de cualquier echo
            setcookie('rec', $_POST['u'], time() + 86400);
        }
        $mensaje = "Bienvenido " . $_POST['u'];
    } else {
        $mensaje = "Datos incorrectos";
    }
}

if (isset($_COOKIE['rec'])) echo "Bienvenido de nuevo, " . $_COOKIE['rec'] . "<br>";
if (isset($mensaje)) echo $mensaje;
?>

<form method="post">
    User: <input type="text" name="u">
    Pass: <input type="password" name="p">
    Recordar: <input type="checkbox" name="r">
    <button type="submit">Login</button>
</form>