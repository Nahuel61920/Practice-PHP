<?php
    if($_POST){

        $valueA=$_POST['valueA'];
        $valueB=$_POST['valueB'];

        $sum=$valueA+$valueB;
        $rest=$valueA-$valueB;
        $mult=$valueA*$valueB;
        $div=$valueA/$valueB;

        echo "The sum of $valueA and $valueB is $sum <br/>";
        echo "The rest of $valueA and $valueB is $rest <br/>";
        echo "The multiplication of $valueA and $valueB is $mult <br/>";
        echo "The division of $valueA and $valueB is $div <br/>";
    
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
    
    <form action="ejer-7.php" method="post">
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