<?php
session_start();
if (!isset($_SESSION['adminaccess'])){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
h1{
    text-align: center;
}
table, tr{
    border: 1px solid black;
    padding: 5px;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<h1>ADMIN PAGE</h1>
<h2>Show Accounts</h2>
<form action="admin.php" method='POST'>
<label for="Email">Email :</label>
<input type="text" name='email'>
<button type='submit' >Show!</button>

</form>
<?php
include '../posts/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $query = "SELECT * FROM registerd WHERE email='".$email."'";
    $atfdb = mysqli_query($conn, $query);
    if ($atfdb){
        $row = mysqli_fetch_array($atfdb);
        $squery = "SELECT * FROM balance WHERE email='$email'";
        $ssqc = mysqli_query($conn, $squery);
        $srow = mysqli_fetch_array($ssqc);
        $bal = $srow['depositeam'];
        $username = $row['username'];
        $password = $row['password'];
        $email = $row['email'];
        $btc = $row['BTC'];
        $ltc = $row['LTC'];
        $eth = $row['ETH'];
        $referal = $row['referal'];
        $refby = $row['refBy'];
        echo "<br>Username : ".$username."<br>  Password :".$password."<br>BTC : ".$btc."<br>LTC : ".$ltc."<br> ETH".$eth."<br>Balance : ".$bal;
    }
    else{
        echo "Not found";

    }
}
?>

<br>
<h2>Add Deposite</h2>
<form action="adddeposite.php" method='POST'>
<label for="email">Email :</label>
<input type="email" name='email'>
<br><br>
<label for="deposite">Amount:</label>
<input type='text' name='amount'>
<br><br>
<button type='submit'>Submit</button>
</form>

<br>
<h2>Add Withdraw</h2>
<form action="withdraw.php" method='POST'>
<label for="email">Email :</label>
<input type="email" name='email'>
<br><br>
<label for="withdraw">Amount:</label>
<input type='text' name='amount'>
<br><br>
<button type='submit'>Submit</button>
</form>

</body>
</html>