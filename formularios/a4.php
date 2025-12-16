<form method="post">
    Número: <input type="number" name="num" required>
    Tope: <input type="number" name="tope" required>
    Color texto: <select name="color">
        <option value="blue">Azul</option>
        <option value="red">Rojo</option>
        <option value="purple">Púrpura</option>
        <option value="orange">Naranja</option>
    </select>
    <button type="submit">Generar Tabla</button>
</form>

<?php
if ($_POST) {
    $n = $_POST['num'];
    $t = $_POST['tope'];
    $c = $_POST['color'];
    echo "<table border='1' style='color:$c;'>";
    for ($i = 0; $i <= $t; $i++) {
        echo "<tr><td>$n x $i = " . ($n * $i) . "</td></tr>";
    }
    echo "</table>";
}
?>