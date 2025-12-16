<?php
$visitas = isset($_COOKIE['visitas']) ? $_COOKIE['visitas'] : 0;

if (isset($_POST['contar'])) {
    $visitas++;
    setcookie('visitas', $visitas, time() + 3600 * 24); // Expira en 1 día
    header("Refresh:0"); // Recarga para ver el cambio
}
?>
<form method="post">
    <button type="submit" name="contar">Contar Visita</button>
</form>
<p>Número de visitas: <?php echo $visitas; ?></p>