<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        table { width: 80%; border-collapse: collapse; margin: 20px auto; font-family: Arial, sans-serif; }
        th { background-color: #4CAF50; color: white; padding: 10px; }
        td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellidos" placeholder="Apellidos" required>
        <input type="text" name="curso" placeholder="Curso" required>
        <input type="text" name="asignatura" placeholder="Asignatura" required>
        <select name="evaluacion">
            <option value="Primera">Primera Evaluación</option>
            <option value="Segunda">Segunda Evaluación</option>
            <option value="Tercera">Tercera Evaluación</option>
        </select>
        <textarea name="descripcion" placeholder="Descripción..."></textarea>
        <button type="submit">Generar Tabla</button>
    </form>

    <?php
    if ($_POST) {
        echo "<table>
                <tr><th>Nombre</th><th>Apellidos</th><th>Curso</th><th>Asignatura</th><th>Evaluación</th><th>Descripción</th></tr>
                <tr>
                    <td>{$_POST['nombre']}</td>
                    <td>{$_POST['apellidos']}</td>
                    <td>{$_POST['curso']}</td>
                    <td>{$_POST['asignatura']}</td>
                    <td>{$_POST['evaluacion']}</td>
                    <td>{$_POST['descripcion']}</td>
                </tr>
              </table>";
    }
    ?>
</body>
</html>