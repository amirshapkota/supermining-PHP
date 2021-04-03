<?php 
session_start();
if (!isset($_SESSION['logged'])){
    header('location: ../index.php');
}
include '../posts/alldata.php';
include '../posts/db.php';
$active = false;
$query = "SELECT * FROM timetable WHERE email = '$email' AND type = 1";
$result = mysqli_query($conn, $query);
$therow = mysqli_fetch_array($result);

if ($therow != null){
    $active = true;
    $start = $therow["starteddate"];
    $amount = $therow['time'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Please do not delete this line -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>supermining - My Withdrawals</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/line-awesome.min.css" rel="stylesheet"/>
    <link href="../css/aos.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" type="../image/png" href="../images/favicon.png"/>
    <style>
    th{
        border: 1px solid black;
        padding: 10px;
        background: black;
        color: white;
    }
    </style>
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
                        My Withdrawals
                    </div>
                    <ol class="breadcrumb justify-content-left mt-n2 mb-4" data-aos="zoom-in">
                        <li class="breadcrumb-item"><a href="#"><span class="text-color-dark"><i
                                            class="la la-home"></i> Home</span></a></li>
                                                    <li class="active breadcrumb-item"><a href="dashboard.php"><span
                                            class="text-color-dark">Dashboard</span></a></li>
                                                                                                            <li class="active breadcrumb-item">Pending Withdrawals</li>
                                                    
                    </ol>
                </div>
                <div class="col-sm-6">

                   <div class="user-funds-block">
                        <div>
                            <i class="la la-wallet"></i>
                            <span class="value">
                                <a href="transactions.php"><sup>$</sup><?php echo $deposite ?></a>
                            </span>
                            <span class="label">Total Depsosit</span>
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
                









    <div class="">
    <?php
    if ($active){   
        echo "<table class=''>
        <tr>
        <th>Today's Date</th>
        <th>Date Stated</th>
        <th>Amount</th>
        <th>Status</th>
        </tr>
        <tr>
        <td>".date("Y-m-d")."</td>
        <td>".$start."</td>
        <td>".$amount."</td>
        <td>Pending</td>
        </table>
    ";
    }else {
        echo "No withdraw request found.";
    }

?>
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