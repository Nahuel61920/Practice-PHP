<?php
    if($_GET) {
        $name = $_GET['name'];
        $lastName = $_GET['lastName'];
        echo "Hello $name $lastName";
    }
?>