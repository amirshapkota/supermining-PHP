<?php

include "../posts/db.php";

$email = $_POST['email'];
$amount = (float) $_POST['amount'];
$amount2 = (float) $amount/10;

$query = "UPDATE balance SET depositeam = depositeam + $amount WHERE email='$email'";
$result = mysqli_query($conn, $query);

if ($result){

    $query1 = "SELECT * FROM registerd WHERE email='".$email."'";
    $atfdb1 = mysqli_query($conn, $query1);
    $ssrow = mysqli_fetch_array($atfdb1);
    $anousr = $ssrow['refBy'];
    $query2 = "SELECT * FROM registerd WHERE username='$anousr'";
    $condb = mysqli_query($conn, $query2);
    $anorow = mysqli_fetch_array($condb);
    if ($anorow != null){
        $anoemail = $anorow['email'];
        $query3 = "UPDATE balance SET comam = comam + $amount2, depositeam = depositeam + $amount2 WHERE email='$anoemail'";
        $condb2 = mysqli_query($conn, $query3);  
    }
    $todaydate = date("Y-m-d");
    $squery = "INSERT INTO timetable(email, type, time, starteddate) VALUE('$email', 0, 0, '$todaydate' )";
    $result = mysqli_query($conn, $squery);  
}

header('location: admin.php');

?>