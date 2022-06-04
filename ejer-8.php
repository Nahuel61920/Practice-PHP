<?php
    if($_POST){

        $valueA=$_POST['valueA'];
        $valueB=$_POST['valueB'];

        if ($valueA>$valueB) {
            echo "The value of A is greater than B";
        } elseif ($valueA<$valueB) {
            echo "The value of B is greater than A";
        } else {
            echo "The value of A is equal to B";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores arismetico</title>
</head>
<body>
    
    <form action="ejer-8.php" method="post">
        Value A
        <input type="number" name="valueA" id="">
        <br>
        Value B
        <input type="number" name="valueB" id="">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>