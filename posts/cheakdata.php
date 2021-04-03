<?php
session_start();

$_SESSION['unmath'] = false;
$_SESSION['nomail'] = false;
$uemail = $_POST['email'];
$upasswd = $_POST['password'];

include 'db.php';

$query = "SELECT * FROM registerd WHERE email = '$uemail'";
$result = mysqli_query($conn, $query);
$numOfRows = mysqli_num_rows($result);
if ($numOfRows == 0){
    $_SESSION['nomail'] = true;
    header('location: ../webpages/login.php');
}
$row = mysqli_fetch_array($result);

$usr_pass = $row['password'];

if ($upasswd == $usr_pass){
    $_SESSION['logged'] = true;
    $_SESSION['email'] = $uemail;
    header('location: ../login/dashboard.php');
}else{
    $_SESSION['unmath'] = true;
    header('location: ../webpages/login.php');

}

?>