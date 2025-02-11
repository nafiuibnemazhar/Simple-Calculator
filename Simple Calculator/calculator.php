<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<div class="calculator">
    <h2>Simple Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
        if (isset($_POST['calculate'])) {
            $num1      = $_POST['num1'];
            $num2      = $_POST['num2'];
            $operation = $_POST['operation'];
            $result    = null;

        }
    ?>
</div>

<body>

</body>

</html>