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
    <h1>Ejercicio 9</h1>
</section>

<main class="content">
    <?php
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $deportes = $_POST['deportes'] ?? [];
    $cant = count($deportes);
    if ($nombre !== '') {
        $mensaje = htmlspecialchars($nombre) . " practica $cant deporte" . ($cant != 1 ? 's' : '') . ".";
    } else {
        $mensaje = "Completá el nombre.";
    }
}
?>
<?php if ($mensaje): ?><p><?= $mensaje ?></p><hr><?php endif; ?>
<form method="post">
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <label><input type="checkbox" name="deportes[]" value="futbol"> Fútbol</label>
    <label><input type="checkbox" name="deportes[]" value="basket"> Basket</label>
    <label><input type="checkbox" name="deportes[]" value="tennis"> Tennis</label>
    <label><input type="checkbox" name="deportes[]" value="voley"> Voley</label><br>
    <button type="submit">Enviar</button>
</form>

</main>

<footer class="footer">
    <p>© 2025 — Paradigmas y Lenguajes III — Guia PHP</p>
</footer>

<script src="../JS/menu.js"></script>
</body>
</html>