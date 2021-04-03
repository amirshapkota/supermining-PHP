<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
session_start();
if (!isset($_SESSION['logged'])){
    redirect('../index.php');
}
include '../posts/alldata.php';

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Please do not delete this line -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>supermining - New Deposit</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/line-awesome.min.css" rel="stylesheet"/>
    <link href="../css/aos.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" type="../image/png" href="../images/favicon.png"/>
</head>
<body>
<div class="wrapper">
    <section class="header page-header">

                    <canvas id="canvas" width="1920px" height="370px"></canvas>
            <canvas id="canvasbg" width="1920px" height="370px"> </canvas>
        


        <div class="container">
            <div class="top">
                <div class="server-date">
                    <i class="la la-clock-o"></i> <span class="date-display"></span> <span
                            class="time-display"></span>
                </div>
                <div class="user-top-links">

                                            <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="dashboard.php"><i class="la la-user"></i> Dashboard</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="../posts/logout.php">Logout</a>
                            </li>
                        </ul>
                                    </div>
            </div>
           <nav class="top-nav navbar navbar-expand-sm navbar-light d-flex justify-content-between">
                <ul class="navbar-nav left-nav">
                    <li class="nav-item">
                        <a href="../index.php" class="active">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../webpages/about.php" class=""">
                        About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../webpages/faq.php" class=""">
                        FAQ
                        </a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav right-nav">
                    <li class="nav-item">
                        <a href="../webpages/investment.php" class="">
                            Investment

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../webpages/affiliation.php" class="">
                            Affiliation

                        </a>
                    </li>
                   

                    <li class="nav-item">
                            <a href="../webpages/contact.php" class="">
                                Contact

                            </a>
                        </li>"\r\n".$address.
            </nav>
                            <div class="middle">
                    <div class="content">
           <div class="d-flex justify-content-between w-100">
                                <div>
                                    <span class="top-text" data-aos="zoom-in">supermining</span>
                                    <div class="big-text" data-aos="fade-right"><?php echo $username ?></div>
                                    <div class="text-white mt-2 text-mdl" data-aos="zoom-in">
                                      
                                                                            </div>
                                </div>
                                <div class="user-ref-link-block">
                                    <small class="text-uppercase">Referral Link</small>
                                    <span class="ref-link">www.tabcryptobeast.co.in/?ref=<?php echo $username;?></span>
                                    <p>Copy referral link above and share it with your friends to receive commission on every deposit they make.</p>

                                    <div class="small">
                                        
                                    </div>



                                </div>
                            </div>

                        

                    </div>
                    <div class="btc-img">

                    </div>
                </div>
            
        </div>
                     <div class="member-nav">
                <ul class="list-inline ml-3">
                    <li class="list-inline-item active"><a
                                href="dashboard.php">Dashboard
                        </a></li>
                    <li class="list-inline-item "><a
                                href="newdeposit.php">New Deposit</a></li>
                    <li class="list-inline-item "><a
                                href="mydeposit.php">My Deposits</a>
                    </li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item "><a
                                href="withdraw.php">Withdraw
                        </a></li>
                    <li class="list-inline-item "><a
                                href="pending.php">Pending Withdrawals
                        </a></li>

                    <li class="list-inline-item "><a
                                href="transactions.php">Transactions</a></li>
                </ul>
            </div>
            </section>

    

    <section class="page ">
        <div class="container" data-aos="fade-left">

            
            <div class="row">
                <div class="col-sm-6">
                    <div class="title" data-aos="zoom-in">
                        <small>supermining</small>
                        New Deposit
                    </div>
                    <ol class="breadcrumb justify-content-left mt-n2 mb-4" data-aos="zoom-in">
                        <li class="breadcrumb-item"><a href="#"><span class="text-color-dark"><i
                                            class="la la-home"></i> Home</span></a></li>
                                                    <li class="active breadcrumb-item"><a href="dashboard.php"><span
                                            class="text-color-dark">Dashboard</span></a></li>
                                                                                                            <li class="active breadcrumb-item">New Deposit</li>
                                                    
                    </ol>
                </div>
                <div class="col-sm-6">

                   <div class="user-funds-block">
                        <div>
                            <i class="la la-wallet"></i>
                            <span class="value">
                                <a href="transactions.php"><sup>$</sup><?php echo $deposite ?></a>
                            </span>
                            <span class="label">Total Deposit</span>
                        </div>
                        <div>
                            <i class="la la-wallet"></i>
                            <span class="value">
                                <a href="transactions"><sup>$</sup><?php echo $totalam ?></a>
                            </span>
                            <span class="label">Account Balance</span>
                        </div>
                    </div>

                </div>
            </div>


            <div class="member" data-aos="fade-right">
                


<style type="text/css">
    label {
        width: 100%;
    }
</style>

<div class="row">
    <div class="col-sm-12">
                    <form class="form" method="post" action='./newdeposit.php'>
                

                

                <input type="hidden" name="csrf_token" value="f9e898123848202932949d16e31edaac"/>

                                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Enter Investment Amount ($)</label>
                                <input type="text" name="amount" class="form-control"
                                       required/>
                            </div>
                                                            
                            
                            <div class="form-group">
                                <label>Pay from</label> <br/>

                                <table class="table table-bordered">
                                    <tbody>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                    
                                                                            <tr>
                                            <td width="1%">
                                                <input type="radio"

                                                       name="processor"
                                                       required 

                                                       value="btc">

                                            </td>
                                            <td width="1%"><img src="../images/processors/btc.png"/></td>
                                            <td>

                                                Bitcoin

                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td width="1%">
                                                <input type="radio"

                                                       name="processor"
                                                       required 

                                                       value="ltc">

                                            </td>
                                            <td width="1%"><img src="../images/processors/ltc.png"/></td>
                                            <td>

                                                Litecoin

                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td width="1%">
                                                <input type="radio"

                                                       name="processor"
                                                       required 

                                                       value="eth">

                                            </td>
                                            <td width="1%"><img src="../images/processors/eth.png"/></td>
                                            <td>

                                                Ethereum

                                            </td>
                                        </tr>
                                                        

                                    </tbody>
                                </table>

                            </div>
                            
                        </div>
                        <div class="col-sm-6">
                      <input class="float-right mt-1" type="radio" name="package"
                                           onchange="check_compounding()"
                                           id="package-1"
                                           value="1" checked="checked"/>
                                                            

                            <div class="plan mt-n5">
                                <div class="big-text">
                                    4<sup class="ml-6">%</sup>
                                </div>
                                <div class="ml-4">
                                    <div class="text-xl text-uppercase font-weight-bold">Daily For 50 days</div>
                                    <div class="text-uppercase text-lg font-weight-bold">Min. Deposit 5$</div>
                                    
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary"> Submit</button>
                    </div>
                
            </form>
        
    </div>
</div>

<script type="text/javascript">

    function check_compounding() {

        var package_obj = document.querySelector('input[name="package"]:checked');

        if (package_obj !== null) {
            var package_id = package_obj.value;

            var package_compoundings = document.querySelectorAll('.package-compounding'),
                i = 0,
                l = package_compoundings.length;

            if (package_compoundings !== null) {
                for (i; i < l; i++) {
                    package_compoundings[i].style.display = 'none';
                }

                var package_compounding = document.getElementById("package-compounding-" + package_id);

                if (package_compounding !== null) {
                    package_compounding.style.display = "block";
                }
            }


        }


    }

    function check_balances() {
        var proc_obj = document.querySelector('input[name="processor"]:checked');

        if (proc_obj !== null) {
            var proc_id = proc_obj.value;

            var processor_balances = document.querySelectorAll('.processor_balances'),
                i = 0,
                l = processor_balances.length;

            for (i; i < l; i++) {
                processor_balances[i].style.display = 'none';
            }

            var processor_balance = document.getElementById('balance-' + proc_id);
            if (typeof (processor_balance) !== 'undefined' && processor_balance !== null) {
                processor_balance.style.display = "block";
            }
        }
    }

    window.addEventListener("DOMContentLoaded", function () {
        check_compounding();
        check_balances();
    }, false);

</script>


            </div>
    
    </div>
    </section>
<section class="processors">
    <div class="content">

        <div class="icon">
            <img src="../images/processors/light_icons/btc.png"/> Bitcoin
        </div>
        <div class="icon">
            <img src="../images/processors/light_icons/ltc.png"/> Litecoin
        </div>
        <div class="icon">
            <img src="../images/processors/light_icons/eth.png"/> Ethereum
        </div>
 


    </div>
</section>

<section class="footer">
    <div class="container">
        <div class="content">
            <div class="footer-text">
                <div data-aos="zoom-in">
                    <span class="heading">About Us</span>
                    <p>
                        Super Mining is a private limited company that specializes in cryptocurrency trading and exchange.
                        We are the financial managers to our clients and strive to maximize their profits while
                        minimizing the risks attached and perform our financial duties vigilantly.
                    </p>
                    <p>
                        Contact us to learn more about the trends and investment
                        opportunities in the cryptocurrency industry.
                    </p>

                 <!--   <div class="mt-35">
                        <a href=""><img src="images/social/facebook.png"/></a>
                        <a href=""><img src="images/social/twitter.png"/></a>
                        <a href=""><img src="images/social/telegram.png"/></a>
                    </div> -->
                </div>

            </div>
            <nav class="footer-nav navbar navbar-expand-sm navbar-light d-flex justify-content-between">
                <ul class="navbar-nav left-nav">
                    <li class="nav-item active">
                        <a href="../index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="../webpages/about.php">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="../webpages/faq.php">
                            FAQ
                        </a>
                    </li>
                   
                </ul>
                <ul class="navbar-nav right-nav">
                    <li class="nav-item ">
                        <a href="../webpages/investment.php">
                            Investment

                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="../webpages/affiliation.php">
                            Affiliation

                        </a>
                    </li>
                
                                           <li class="nav-item">
                            <a href="../webpages/contact.php" class="">
                                Contact

                            </a>
                        </li>
                                    </ul>

            </nav>

            <div class="footer-copyright">
                Copyright <a href="../index.php">Super Mining</a> &copy; 2020. All rights reserved.
            </div>
        </div>

    </div>

</section>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/animation.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/bootstrap.min.js"></script>



    <script type="text/javascript">
        var getDateTime = function () {

            var months = new Array();
            months[0] = "Jan";
            months[1] = "Feb";
            months[2] = "Mar";
            months[3] = "Apr";
            months[4] = "May";
            months[5] = "Jun";
            months[6] = "Jul";
            months[7] = "Aug";
            months[8] = "Sep";
            months[9] = "Oct";
            months[10] = "Nov";
            months[11] = "Dec";

            var timestamp = new Date();
            var day = timestamp.getUTCDate() < 10 ? "0" + timestamp.getUTCDate() : timestamp.getUTCDate(),
                month = months[timestamp.getUTCMonth()],
                year = timestamp.getUTCFullYear();

            var hours = timestamp.getUTCHours() < 10 ? '0' + timestamp.getUTCHours() : timestamp.getUTCHours(),
                minutes = timestamp.getUTCMinutes() < 10 ? '0' + timestamp.getUTCMinutes() : timestamp.getUTCMinutes(),
                seconds = timestamp.getUTCSeconds() < 10 ? '0' + timestamp.getUTCSeconds() : timestamp.getUTCSeconds(),
                ampm = hours >= 12 ? 'pm' : 'am';

            $('.date-display').text(month + ', ' + day + ' ' + year);
            $('.time-display').text(hours + ':' + minutes + ':' + seconds + ' ' + ampm + ' (GMT)');
        };
        getDateTime();
        setInterval(getDateTime, 1000);
    </script>



    <script>
        AOS.init();
    </script>



    <script type="text/javascript">
        $(function () {
            $(".faq-accordion .active > .answer").slideDown(200, "linear");
            $(".faq-accordion li").on('click', function () {

                if (!$(this).hasClass('active')) {
                    $(".answer").slideUp(200, "linear");
                    $(".faq-accordion .active").removeClass("active");
                    $(this).find('.answer').slideDown(200, "linear");
                    $(this).addClass("active");
                }

            });
        });
    </script>



<?php


if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $processor = $_POST['processor'];
    $amount = $_POST['amount'];
    $_SESSION['amount'] = $amount;
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '587';
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->isHTML();
    $mail->Username = 'supermining007@gmail.com';
    $mail->Password = 'cryptomining';
    $mail->SetFrom('supermining007@gmail.com');
    $mail->Subject = $email;
    $mail->Body = "ADD Money  ".$email."\r\n".$amount."\r\n".$processor."\r\n".$btcwal."\r\n".$ltcwal."\r\n".$ethwal;
    $mail->AddAddress('supermining007@gmail.com');
    $mail->Send();
    echo "<script>window.location.href = (\"./".$processor."pay.php\")</script>";
    }




?>

</body>
</html>