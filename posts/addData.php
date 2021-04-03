<?php
$_SESSION['passno'] = false;
$_SESSION['usrorem'] = false;
include 'db.php';

session_start();
try {
    $usernm = $_POST['username'];
    $email = $_POST['email'];
    $passw = $_POST['password'];
    $conpwd = $_POST['confirm_password'];
    $btcacc = $_POST['btc'];
    $ltcacc = $_POST['ltc'];
    $ethacc = $_POST['eth'];
    $referal = 0;
    $queryfem = "SELECT * from registerd WHERE email='$email'";
    $queryfusr = "SELECT * from registerd WHERE username='$usernm'";
    $resultfem = mysqli_query($conn, $queryfem);
    $resultusr = mysqli_query($conn, $queryfusr);
    $rowfem = mysqli_num_rows($resultfem);
    $rowfusr = mysqli_num_rows($resultusr);

    if ($rowfem != 0 or $rowfusr != 0){
        header('location: ../webpages/register.php');
    }
    if (!isset($_SESSION['referedBy'])){
        $refBy = 'nobody';
    }else {
        $refBy = $_SESSION['referedBy']; 
        $testq = "SELECT * FROM registerd WHERE username = '".$refBy."'";
        $testre = mysqli_query($conn, $testq);
        $testar = mysqli_fetch_array($testre);
        $testid = (int) $testar['id'];
        $_SESSION['testid'] = $testid;
        $qfor = "UPDATE registerd SET referal = referal + 1 WHERE id =".$testid;
        $qres = mysqli_query($conn, $qfor);

    }   
    if ($passw != $conpwd){
        header('location: ../webpages/register.php');
    }else{
        $sql = "INSERT INTO registerd(username, email, password, BTC, LTC, ETH, referal, refBy) VALUES('$usernm', '$email', '$passw', '$btcacc', '$ltcacc', '$ethacc', '$referal', '$refBy')";
        $result = mysqli_query($conn, $sql);
        $ssql = "INSERT INTO balance(email, depositeam, withdrawam, comam, totalam) VALUE ('$email', 0, 0, 0, 0)";
        $sres = mysqli_query($conn, $ssql);

        if ($result){
            $_SESSION['logged'] = true;
            $_SESSION['email'] = $email;
            header('location: ../login/dashboard.php');
    }   }

}catch(Exception $e) {
    echo $e;

}
?>