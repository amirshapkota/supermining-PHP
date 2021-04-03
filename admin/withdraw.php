<?php

include "../posts/db.php";

$email = $_POST['email'];
$amount = (float) $_POST['amount'];

$query = "UPDATE balance SET totalam = totalam - $amount, withdrawam = withdrawam + $amount WHERE email = '$email'";
$result = mysqli_query($conn, $query);


$query2 = "DELETE FROM timetable WHERE email = '$email' AND type = 1";
$result2 = mysqli_query($conn, $query2);

header('location: admin.php')





?>