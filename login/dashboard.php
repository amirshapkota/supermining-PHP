<?php 
session_start();
if (!isset($_SESSION['logged'])){
    header('location: ../index.php');
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
    <title>supermining - Dashboard</title>
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
                        <a href="../webpages/about.php" class="">
                        About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../webpages/faq.php" class="">
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
                        </li>
                    
                </ul>

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
                        Dashboard
                    </div>
                    <ol class="breadcrumb justify-content-left mt-n2 mb-4" data-aos="zoom-in">
                        <li class="breadcrumb-item"><a href="#"><span class="text-color-dark"><i
                                            class="la la-home"></i> Home</span></a></li>
				<li class="active breadcrumb-item">Dashboard</li>
                                                    
                    </ol>
                </div>
                <div class="col-sm-6">

                    <div class="user-funds-block">
                    <div>
                            <i class="la la-wallet"></i>
                            <span class="value">
                                <a href="transactions.php"><sup>$</sup><?php echo $deposite?></a>
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
                




<div class="row">
    <div class="col-sm-3">
        <div class="user-icon-block p-3">
            <img src="../images/user-icon.png" class="img-fluid" style="max-width: 105%" />
        </div>

    </div>
    <div class="col-sm-9">
        <div class="text-sm text-uppercase text-color-dark mb-2"><i class="la la-user"></i> Account Information</div>
        <div class="user-account-block">

            <div class="row">
                <div class="col-sm-4">
                    <div class="small label">Registered Email</div>
                    <div class="value"><?php echo $email; ?></div>
                </div>
               
                <div class="col-sm-4">
                    <div class="small label">Total Refferals</div>
                    <div class="value"><?php echo $referals; ?></div>
                </div>
            </div>
        </div>

        <div class="text-sm text-uppercase text-color-dark mb-2"><i class="la la-wallet mt-3"></i> Financial Information</div>
        <div class="user-account-block">

            <div class="row">
               
                <div class="col-sm-4">
                    <div class="small label">Total Balance</div>
                    <div class="value">$<?php echo $totalam?></div>
                </div>      
            </div>
            <div class="row mt-2">
                <div class="col-sm-4">
                    <div class="small label">Total Withdrawals</div>
                    <div class="value">$<?php echo $withdraw ?></div>
                </div>
              
            
            </div>
        </div>

    </div>
</div>

<div class="user-ref-link-block-2 mt-4 ">

    <div class="w-75">
        <div class="title">
            <small>Your referral link</small>
            <h3><?php echo 'www.tabcryptobeast.co.in?ref='.$username; ?></h3>
        </div>
        <p class="small">Copy referral link above and share it with your friends to receive commission on every deposit they make.</p>

  
    </div>
    <div>

        <ul class="list-unstyled">
            <li>
            <?php
            if ($refBy != 'nobody'){
            echo " <span>Your Upline</span>
                <h5>You were reffered by ".$refBy."      
                    </h5>
            ";
        }
            
            ?>
            </li>
            <li>
                <span>Commissions</span>
                <span class="text-lgx text-color-dark d-block font-weight-bold">
                    $<?php echo $commssion ?>
                </span>
            </li>
        </ul>
        

    </div>

</div>


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

</body>
</html>
<?php

$query = "SELECT * FROM timetable WHERE email = '$email' AND type = 0";
$conndb = mysqli_query($conn, $query);

$row = mysqli_fetch_array($conndb);

if ($row != null){
    $datenow = date('Y-m-d');
    $datenow = strtotime($datenow);
    $startdate = $row['starteddate'];
    $startdate = strtotime($startdate);
    $dayspass = (int) $row['time'];
    $daynum = (int) ($datenow - $startdate)/86400;
    if ($daynum > $dayspass){
        $diff = $daynum - $dayspass;
        if ($diff <= 50){
            $tquery = "DELETE FROM timetable WHERE email = '$email' AND type = 1";
            $tcondb = mysqli_query($conn, $tquery);
        }else{
            $query2 = "SELECT * FROM balance WHERE email = '$email'";
            $condb2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_array($condb2);
            $totalam1 = (int) $row2['depositeam'];
            $thenum = 0;
            for ($x = 0; $x <= $diff; $x++ ){
                $thenum = $thenum + ($totalam1 * 0.04);
            }
            $query3 = "UPDATE balance SET totalam = $thenum WHERE email = '$email'";
            $condb3 = mysqli_query($conn, $query3);

            $query4 = "UPDATE timetable SET time = $daynum WHERE email = '$email'";
            $condb4 = mysqli_query($conn, $query4);
        }

    }
}



?>