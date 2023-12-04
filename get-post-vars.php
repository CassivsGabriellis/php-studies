<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get-post-vars.php" method="post"> 
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $item = "bolo";
    $price = 25.67;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo"Você pediu {$quantity} x {$item}(s) <br>";
    echo"Total: \${$total}"
?>