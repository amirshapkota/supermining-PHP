<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form method='POST' action='index.php'>
        <label for="username">Username : </label>
        <input type="text" name='username'>
        <br><br>
        <label for="password">Password :</label>
        <input name='password' type="password">
        <br><br><br>
        <button type='submit'>Login!</button>
    </form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $passw = $_POST['password'];

    if ($username == 'crypto' and $passw == 'mining123'){
        $_SESSION['adminaccess'] = true;
        header('location: admin.php');
    }
}


?>