<?php
$usuarios = ["admin" => md5("1234"), "juan" => md5("qwerty")];

if ($_POST) {
    $u = $_POST['user'];
    $p = md5($_POST['pass']);

    if (isset($usuarios[$u]) && $usuarios[$u] === $p) {
        echo "<h3>Bienvenido, $u!</h3>";
    } else {
        echo "<h3>Usuario o contraseña erróneos.</h3>";
    }
}
?>
<form method="post">
    User: <input type="text" name="user"><br>
    Pass: <input type="password" name="pass"><br>
    <button type="submit">Login</button>
</form>