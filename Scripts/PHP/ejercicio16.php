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
    <h1>Ejercicio 16</h1>
</section>

<main class="content">
    <?php
        function verificarClaves($c1, $c2) {
            if ($c1 !== $c2) echo "<p>Las claves ingresadas son distintas.</p>";
            else echo "<p>Las claves coinciden correctamente.</p>";
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $_POST['usuario'];
            $c1 = $_POST['clave1'];
            $c2 = $_POST['clave2'];
            echo "<p>Usuario: $user</p>";
            verificarClaves($c1, $c2);
        }
    ?>
    <form method="post">
        <label>Usuario:</label><input type="text" name="usuario" required><br>
        <label>Clave:</label><input type="password" name="clave1" required><br>
        <label>Repetir Clave:</label><input type="password" name="clave2" required><br>
        <input type="submit" value="Enviar">
    </form>
</main>

<footer class="footer">
    <p>© 2025 — Paradigmas y Lenguajes III — Guia PHP</p>
</footer>

<script src="../JS/menu.js"></script>
</body>
</html>