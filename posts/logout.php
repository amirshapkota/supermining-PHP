<?php
session_start();
try{
    unset($_SESSION['logged']);
    if (isset($_SESSION['email'])){
        unset($_SESSION['email']);
    }
    if (isset($_SESSION['referedBy'])){
        unset($_SESSION['referedBy']);
    }
}catch (Exception $e){
    echo $e;
}
header('location: ../index.php');
?>