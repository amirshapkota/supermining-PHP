<?php
session_start();
if (isset($_SESSION['logged'])){
    header('location: ../login/dashboard.php');



}
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from supermining/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 07:56:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/php;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Please do not delete this line -->
    <base >
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>supermining - Login</title>
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
                                <a href="login.php"><i class="la la-lock"></i> Login</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="register.php">Register</a>
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
                        <a href="about.php" class=""">
                        About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.php" class=""">
                        FAQ
                        </a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav right-nav">
                    <li class="nav-item">
                        <a href="investment.php" class="">
                            Investment

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="affiliation.php" class="">
                            Affiliation

                        </a>
                    </li>
                   

                    <li class="nav-item">
                            <a href="contact.php" class="">
                                Contact

                            </a>
                        </li>
                    
                </ul>

            </nav>
                            <div class="middle">
                    <div class="content">

                                                    <span class="top-text" data-aos="zoom-in">supermining</span>
                            <div class="big-text" data-aos="fade-right">login</div>
                            <div class="bc-block" data-aos="zoom-in">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#"><i class="la la-home"></i> Home</a>
                                    </li>
                                                                                                                                                            <li class="active breadcrumb-item">Login</li>
                                                                            
                                </ol>
                            </div>
                        

                    </div>
                    <div class="btc-img">

                    </div>
                </div>
            
        </div>
            </section>

    

    <section class="page ">
        <div class="container" data-aos="fade-left">

            

<div class="row">

    <div class="col-sm-6 offset-3">

        <div class="title title-sm title-center mb-4">
            Access your Account
            <small class="d-block">Enter your login credentials below</small>
        </div>

        <form class="form" method="POST" action="../posts/cheakdata.php">

            

            


            <input type="hidden" name="csrf_token" value="b5e6bb6b642f7c0ee98f202e2f2b7dd3"/>

            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" required/>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" required/>
            </div>
            <?php
if (isset($_SESSION['unmath']) and $_SESSION['unmath'] == true){
    echo "Wrong Crediantials";
}elseif (isset($_SESSION['nomail']) and $_SESSION['nomail'] == true){
    echo "Email not found.";
};
?>
         
        </div>
        
</div>


                        
            <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
<h4>


</h4>
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
                        <a href="about.php">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="faq.php">
                            FAQ
                        </a>
                    </li>
                   
                </ul>
                <ul class="navbar-nav right-nav">
                    <li class="nav-item ">
                        <a href="investment.php">
                            Investment

                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="affiliation.php">
                            Affiliation

                        </a>
                    </li>
                
                                           <li class="nav-item">
                            <a href="contact.php" class="">
                                Contact

                            </a>
                        </li>
                                    </ul>

            </nav>
            <div class="footer-copyright">
                Copyright <a href="../index.php">supermining</a> &copy; 2020. All rights reserved.
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

<!-- Mirrored from supermining/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 07:56:51 GMT -->
</html>
<?php
if ($_POST){
    $email = $_POST['email'];
    $passw = $_POST['password'];
    $reff = $_POST['ref'];
    $_SESSION['ref'] = $email;

    
};


?>