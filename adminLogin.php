<?php

require_once('./assets/includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
</head>
<body>
    <h1>Admin login panel</h1>
    <form method="POST">
        <label>Username:</label> <br>
        <input type="text" name="UName"> <br> <br>
        <label>Password:</label> <br>
        <input type="password" name="Pass"> <br> <br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>