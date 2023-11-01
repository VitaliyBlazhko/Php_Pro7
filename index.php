<?php
require __DIR__ . '/vendor/autoload.php';

use App\Circle;
use App\Rectangle;
use App\Square;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Малювання фігур</title>
    <style>
        .figure {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['square'])) {
        $color = $_POST['square_color'];
        $side = floatval($_POST['side']);
        $square = new Square($color, $side);
        $square->draw();
        echo "<p>Площа: {$square->calculateArea()} кв. од.</p>";
        echo "<p>Периметр: {$square->calculatePerimeter()} од.</p>";
    }

    if (isset($_POST['rectangle'])) {
        $color = $_POST['rectangle_color'];
        $width = $_POST['width'];
        $height = $_POST['height'];
        $rectangle = new Rectangle($color, $width, $height);
        $rectangle->draw();
        echo "<p>Площа: {$rectangle->calculateArea()} кв. од.</p>";
        echo "<p>Периметр: {$rectangle->calculatePerimeter()} од.</p>";
    }

    if (isset($_POST['circle'])) {
        $color = $_POST['circle_color'];
        $radius = $_POST['radius'];
        $circle = new Circle($color, $radius);
        $circle->draw();
        echo "<p>Площа: {$circle->calculateArea()} кв. од.</p>";
        echo "<p>Периметр: {$circle->calculatePerimeter()} од.</p>";
    }
}
?>
<form method="post">
    <div class="figure">
        <h2>Квадрат</h2>
        <label for="square_color">Колір: </label>
        <input type="text" id="square_color" name="square_color" placeholder="#000000" required>
        <br>
        <label for="side">Сторона: </label>
        <input type="number" id="side" name="side" required>
        <br>
        <input type="submit" name="square" value="Намалювати">
        <input type="reset" value="Скинути">
    </div>
</form>

<form method="post">
    <div class="figure">
        <h2>Прямокутник</h2>
        <label for="rectangle_color">Колір: </label>
        <input type="text" id="rectangle_color" name="rectangle_color" placeholder="#000000" required>
        <br>
        <label for="width">Ширина: </label>
        <input type="number" id="width" name="width" required>
        <br>
        <label for="height">Висота: </label>
        <input type="number" id="height" name="height" required>
        <br>
        <input type="submit" name="rectangle" value="Намалювати">
        <input type="reset" value="Скинути">
    </div>
</form>

<form method="post">
    <div class="figure">
        <h2>Коло</h2>
        <label for="circle_color">Колір: </label>
        <input type="text" id="circle_color" name="circle_color" placeholder="#000000" required>
        <br>
        <label for="radius">Радіус: </label>
        <input type="number" id="radius" name="radius" required>
        <br>
        <input type="submit" name="circle" value="Намалювати">
        <input type="reset" value="Скинути">
    </div>
</form>

</body>
</html>