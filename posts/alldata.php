<?php

include 'db.php';

$semail = $_SESSION['email'];
$query = "SELECT * from registerd WHERE email='$semail'";
$result = mysqli_query($conn, $query);
$row =  mysqli_fetch_array($result);
$username = $row['username'];
$referals = $row['referal'];
$refBy = $row['refBy'];
$email = $row['email'];
$btcwal = $row['BTC'];
$ltcwal = $row['LTC'];
$ethwal = $row['ETH'];
$squery = "SELECT * from balance WHERE email='$semail'"; 
$sresult = mysqli_query($conn, $squery);
$srow = mysqli_fetch_array($sresult);
$deposite = $srow['depositeam'];
$withdraw = $srow['withdrawam'];
$commssion = $srow['comam'];
$totalam = $srow['totalam']
?>