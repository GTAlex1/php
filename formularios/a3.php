<?php
function dibujarLineas($longitud, $color) {
    echo "<p>Línea Horizontal:</p>";
    echo "<div style='width:{$longitud}px; height:5px; background-color:$color;'></div>";
    echo "<p>Línea Vertical:</p>";
    echo "<div style='width:5px; height:{$longitud}px; background-color:$color;'></div>";
}
?>
<form method="post">
    Longitud (px): <input type="number" name="long" required>
    Color: <select name="color">
        <option value="red">Rojo</option>
        <option value="blue">Azul</option>
        <option value="green">Verde</option>
        <option value="black">Negro</option>
    </select>
    <button type="submit">Crear Líneas</button>
</form>

<?php
if ($_POST) dibujarLineas($_POST['long'], $_POST['color']);
?>