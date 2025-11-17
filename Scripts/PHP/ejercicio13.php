<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Ejercicios PHP</title>
    <link rel="stylesheet" href="../../Styles/style.css">
</head>
<body>

<header class="topbar">
    <button id="hamburger" class="hamburger">☰</button>

    <nav id="sidebar" class="sidebar">
        <button id="closeSidebar" class="close-btn">×</button>
        <ul>
            <li class="group">Ejercicios 1–4
                <ul class="sub">
                    <li><a href="ejercicio1.php">Ejercicio 1</a></li>
                    <li><a href="ejercicio2.php">Ejercicio 2</a></li>
                    <li><a href="ejercicio3.php">Ejercicio 3</a></li>
                    <li><a href="ejercicio4.php">Ejercicio 4</a></li>
                </ul>
            </li>
            <li class="group">Ejercicios 5–8
                <ul class="sub">
                    <li><a href="ejercicio5.php">Ejercicio 5</a></li>
                    <li><a href="ejercicio6.php">Ejercicio 6</a></li>
                    <li><a href="ejercicio7.php">Ejercicio 7</a></li>
                    <li><a href="ejercicio8.php">Ejercicio 8</a></li>
                </ul>
            </li>
            <li class="group">Ejercicios 9–13
                <ul class="sub">
                    <li><a href="ejercicio9.php">Ejercicio 9</a></li>
                    <li><a href="ejercicio10.php">Ejercicio 10</a></li>
                    <li><a href="ejercicio11.php">Ejercicio 11</a></li>
                    <li><a href="ejercicio12.php">Ejercicio 12</a></li>
                    <li><a href="ejercicio13.php">Ejercicio 13</a></li>
                </ul>
            </li>
            <li class="group">Ejercicios 14–19
                <ul class="sub">
                    <li><a href="ejercicio14.php">Ejercicio 14</a></li>
                    <li><a href="ejercicio15.php">Ejercicio 15</a></li>
                    <li><a href="ejercicio16.php">Ejercicio 16</a></li>
                    <li><a href="ejercicio17.php">Ejercicio 17</a></li>
                    <li><a href="ejercicio18.php">Ejercicio 18</a></li>
                    <li><a href="ejercicio19.php">Ejercicio 19</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<section class="title-block">
    <h1>Ejercicio 13</h1>
</section>

<main class="content">
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $pedidos = "";
            if (isset($_POST['pizzas'])) {
                foreach ($_POST['pizzas'] as $pizza => $on) {
                    $cant = $_POST["cant_$pizza"];
                    if ($cant > 0) $pedidos .= "$pizza x$cant\n";
                }
            }
            $archivo = fopen("pedidos.txt", "a");
            fwrite($archivo, "Pedido de: $nombre\nDirección: $direccion\n$pedidos-------------------------\n");
            fclose($archivo);
            echo "<p>Pedido registrado correctamente.</p>";
        }
    ?>
    <form method="post">
        <label>Nombre:</label><input type="text" name="nombre" required><br>
        <label>Dirección:</label><input type="text" name="direccion" required><br>
        <label><input type="checkbox" name="pizzas[jamon]" value="1"> Jamón y Queso</label>
        <input type="number" name="cant_jamon" min="0" value="0"><br>
        <label><input type="checkbox" name="pizzas[napolitana]" value="1"> Napolitana</label>
        <input type="number" name="cant_napolitana" min="0" value="0"><br>
        <label><input type="checkbox" name="pizzas[muzzarella]" value="1"> Muzzarella</label>
        <input type="number" name="cant_muzzarella" min="0" value="0"><br>
        <input type="submit" value="Confirmar">
    </form>
</main>

<footer class="footer">
    <p>© 2025 — Paradigmas y Lenguajes III — Guia PHP</p>
</footer>

<script src="../JS/menu.js"></script>
</body>
</html>