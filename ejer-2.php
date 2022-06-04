<?php

    if ($_POST) {
        // Recibir información del formulario HTML (metodo POST)
        $name = $_POST['name'];
        $age = $_POST['age'];

        echo "Hello $name, you are $age years old.";
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
    <h1>Hello World!</h1>

    <form action="ejer-2.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="age" placeholder="Age">
        <input type="submit" value="Submit">
    </form>
</body>

</html>