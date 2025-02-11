<?php
    if (isset($_POST['calculate'])) {
        $num1      = $_POST['num1'];
        $num2      = $_POST['num2'];
        $operation = $_POST['operation'];
        $result    = null;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by ZERO!";
                }
                break;
            default:
                $result = "Invalid operation!";
                break;
        }
        // Store the result in a session or URL parameter
        session_start();
        $_SESSION['result'] = $result;

        // Redirect to the same page
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
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
        // Display the result from the session
        session_start();
        if (isset($_SESSION['result'])) {
            echo "<div class='result'><strong>Result:</strong> " . $_SESSION['result'] . "</div>";
            // Clear the result from the session
            unset($_SESSION['result']);
        }
    ?>
</div>

<body>

</body>

</html>