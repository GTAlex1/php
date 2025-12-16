<form method="post">
    Tipo de Pizza: 
    <select name="pizza">
        <option value="10">Carbonara (10€)</option>
        <option value="12">Barbacoa (12€)</option>
        <option value="9">Margarita (9€)</option>
    </select><br><br>
    Toppings (2€ c/u):<br>
    <input type="checkbox" name="tops[]" value="Queso"> Queso Extra<br>
    <input type="checkbox" name="tops[]" value="Bacon"> Bacon<br>
    <input type="checkbox" name="tops[]" value="Pimiento"> Pimiento<br>
    <input type="checkbox" name="tops[]" value="Cebolla"> Cebolla<br>
    <input type="checkbox" name="tops[]" value="Aceitunas"> Aceitunas<br>
    <button type="submit">Calcular Precio</button>
</form>

<?php
if ($_POST) {
    $precio_base = $_POST['pizza'];
    $toppings = $_POST['tops'] ?? [];
    $total_toppings = count($toppings) * 2;
    $total = $precio_base + $total_toppings;

    echo "<h3>Resumen del pedido:</h3>";
    echo "Ingredientes extra: " . (empty($toppings) ? "Ninguno" : implode(", ", $toppings));
    echo "<h4>Precio Final: $total €</h4>";
}
?>