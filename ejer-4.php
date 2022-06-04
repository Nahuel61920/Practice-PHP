<?php
    if($_POST) {
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $ages = $_POST['ages'];
        echo "Hello $name $lastName, you are $ages years old.";
        echo "My name is $name $lastName and I am $ages years old.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejer-4.php" method="post">
        Name:
        <input type="text" name="name" placeholder="Name">
        <br>
        Last Name:
        <input type="text" name="lastName" placeholder="Last Name">
        <br>
        Age:
        <input type="text" name="ages" placeholder="Age">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>