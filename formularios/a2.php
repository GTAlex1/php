<?php
function realizarOperacion($n1, $n2, $op) {
    switch ($op) {
        case 'suma': return $n1 + $n2;
        case 'resta': return $n1 - $n2;
        case 'multiplicacion': return $n1 * $n2;
        case 'division': return ($n2 != 0) ? $n1 / $n2 : "Error: División por cero";
        default: return "Operación no válida";
    }
}
?>
<form method="post">
    <input type="number" name="n1" required>
    <select name="op">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select>
    <input type="number" name="n2" required>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
    $res = realizarOperacion($_POST['n1'], $_POST['n2'], $_POST['op']);
    echo "<h3>Resultado:</h3><ul>
            <li>Primer número: {$_POST['n1']}</li>
            <li>Segundo número: {$_POST['n2']}</li>
            <li>Operación: {$_POST['op']}</li>
            <li><strong>Total: $res</strong></li>
          </ul>";
}
?>