<?php

    function costPerHead($foodCost, $person)
    {
        $calculateCostPerHead = $foodCost / $person;
        return $calculateCostPerHead;
    }
    $result = costPerHead(6175, 13);
    // echo $result;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost Per Head</title>
</head>

<body>
    <h1>Each one will pay <?php echo $result . "Tk" ?></h1>
</body>

</html>