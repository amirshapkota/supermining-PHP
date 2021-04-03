<?php
session_start();
if (isset($_SESSION['logged'])){
    header('location: login/dashboard.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Please do not delete this line -->
    <base >
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Super Mining - Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/line-awesome.min.css" rel="stylesheet"/>
    <link href="css/aos.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
</head>
<body>
<div class="wrapper">
    <section class="header ">

                    <canvas id="canvas" width="1920px" height="800px"></canvas>
            <canvas id="canvasbg" width="1920px" height="800px"> </canvas>
        


        <div class="container">
            <div class="top">
                <div class="server-date">
                    
                </div>
                <div class="user-top-links">

                                            <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="webpages/login.php"><i class="la la-lock"></i> Login</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="webpages/register.php">Register</a>
                            </li>
                        </ul>
                                    </div>
            </div>
            <nav class="top-nav navbar navbar-expand-sm navbar-light d-flex justify-content-between">
                <ul class="navbar-nav left-nav">
                    <li class="nav-item">
                        <a href="index.php" class="active">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="webpages/about.php" class=""">
                        About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="webpages/faq.php" class=""">
                        FAQ
                        </a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav right-nav">
                    <li class="nav-item">
                        <a href="webpages/investment.php" class="">
                            Investment

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="webpages/affiliation.php" class="">
                            Affiliation

                        </a>
                    </li>
                   

                    <li class="nav-item">
                            <a href="webpages/contact.php" class="">
                                Contact

                            </a>
                        </li>
                    
                </ul>

            </nav>
                            <div class="middle">
                    <div class="content" data-aos="zoom-in">
                        
                        <div class="big-text"><span>Super</span>Mining</div>

                        <p class="lead text-white">Welcome to Super Mining.</p>
                        <p>Cryptocurrency is a rising phenomenon. It is bound to take over the world sooner or later. It is therefore wise to reap the most out of its trading at a time like this when traditional and conventional banking and investment markets are saturating.</p>

                        <p>The cryptocurrency industry has a plethora of opportunities and we make sure to earn the most profit possible out of its trading and financial management on the behalf of our investors.</p>

                        <div class="d-flex justify-content-start align-items-center mt-3">
                            <a href="webpages/register.php" class="btn btn-light">Get Started</a> 
                    </div>
                    <div class="btc-img">

                    </div>


                </div>
            
        </div>
            </section>

    



<section class="about-us">
    <div class="container">
        <div class="content">
            <div class="text" data-aos="fade-left">
                <div class="title">
                    <small>about us</small>
                    Introduction
                </div>

                <p class="lead">Experts in Cryptocurrency trading online globally</p>
                <p>Super Mining is the Private Limited Company with expertise in Financial Management. Our
                    focus is on trading in Cryptocurrency and sharing the revenues with our investors. We are a legal
                    entity with diverse experience in financial management in different industries. Super Mining is our
                    specialized service pertaining to cryptocurrency exchanges globally online.
                </p>

                <p>Super Mining started off in the year 2020 with the sole aim to provide excellent funds management
                    services to people who aim to invest and earn without any investment knowledge and complicated
                    processes.</p>

                <div class="d-flex justify-content-start align-items-center mt-4">
                    <a href="webpages/register.php" class="btn">Get Started Now</a>
                </div>
            </div>
            <div class="company-certificate" data-aos="fade-right">
                <div class="company-name">Super Mining</div>
                <div class="block text-right mr-5 text-lg text-color-dark"><small class="opacity-md"></small>
                    <b></b></div>
            </div>
        </div>

        <div class="partners" data-aos="zoom-in">
            <img src="images/partners/cloudflare.png"/>
            <img src="images/partners/blockchain.png"/>
        </div>
    </div>
</section>
<section class="investment">
    <div class="container">
        <div class="content">
            <div class="text" data-aos="fade-left">
                <div class="title title-light">
                    <small>invest with us</small>
                    Investment
                </div>

                <p class="lead text-white">Register with us as our investor and start earning profits today!</p>
                <p>We invite everyone from anywhere in the world to join our team of investors. Whether you belong to a
                    small income group or a higher income group, we invite you to entrust your funds with us. Our role
                    is defined by being the financial managers to our clients who believe in our ability to manage their
                    funds. We place the highest degree of trust and confidentiality in all our dealings with them.</p>

                <p> We manage the funds of our investors in cryptocurrency exchanges, buying and selling according to
                    the market trends to maximize our profits and minimize the risks attached.</p>

                <div class="d-flex justify-content-start align-items-center mt-4">
                    <a href="register.php" class="btn btn-light btn-secondary">Register Now</a> 
                </div>
            </div>
            <div class="plan mt-n5 pulsate-bck" data-aos="fade-right">
                <div class="big-text">
                    4<sup class="ml-6">%</sup>
                </div>
                <div class="ml-8">
                    <div class="text-xxll text-uppercase font-weight-bold">For 50 days</div>
                    <div class="text-uppercase text-lg font-weight-bold">Min. Deposit 5$</div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="why-us">
    <div class="container">
        <div class="content">
            <div class="text" data-aos="fade-left">
                <div>
                    <div class="icon"><img src="images/why-us-icons/icon-1.png"/></div>
                    <span class="text-center d-block">Trustworthy Service</span>
                    <p>We are a reliable financial partner to our clients and make sure that they can entrust their
                        funds to us without any shadow of doubt or distrust. Our dealings are straight and
                        transparent.</p>
                </div>
                <div>
                    <div class="icon"><img src="images/why-us-icons/icon-2.png"/></div>
                    <span class="text-center d-block">Protected Servers</span>
                    <p>Our servers are protected by the standard internet protocols therefore we ensure complete
                        security of your financial data, personally identifiable information, and IP information in
                        using our site.</p>
                </div>
                <div>
                    <div class="icon"><img src="images/why-us-icons/icon-3.png"/></div>
                    <span class="text-center d-block">Profitable Plan</span>
                    <p>We have a well-paying investment plan that earns viable profits for our clients. Our profit
                        percentages are competitive with an extremely low minimum deposit limit.</p>
                </div>
            </div>
            <div class="text title-block" data-aos="fade-up">
                <div class="title title-center">
                    <small>why choose us as investment platform</small>
                    Our Strengths
                </div>
                <p>
                    Super Mining is your partner in cryptocurrency investments. We offer the integrity of service and
                    transparency in all our financial dealings with our clients.
                </p>

                <div class="text-center mt-3">
                    <a href="webpages/register.php" class="btn ">Start Your Campaign</a>
                </div>


            </div>
            <div class="text" data-aos="fade-right">
                <div>
                    <div class="icon"><img src="images/why-us-icons/icon-4.png"/></div>
                    <span class="text-center d-block">Pro. Financial Managers</span>
                    <p>Our financial managers are experts in managing funds and trading in cryptocurrency. They are
                        always vigilant about market trends and strive to make the most profits out of the changing
                        trends.</p>
                </div>
                <div>
                    <div class="icon"><img src="images/why-us-icons/icon-5.png"/></div>
                    <span class="text-center d-block">Quick Returns</span>
                    <p>We offer quick and guaranteed returns on all your investments. Our payment plan pays daily
                        returns forever. The registration process is also simple and quick to save you time and
                        effort.</p>
                </div>
                <div>
                    <div class="icon"><img src="images/why-us-icons/icon-6.png"/></div>
                    <span class="text-center d-block">No Max Withdrawal limit</span>
                    <p>There is no maximum withdrawal limit on your profits. We keep the convenience and ease of our
                        customers in view and offer flexible transactions and investment opportunities.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="affiliation">
    <div class="container">
        <div class="title title-center" data-aos="zoom-out">
                        Affiliation Program
        </div>

        <div class="content">
            <div class="ref-title-block" data-aos="zoom-in">
                <p class="text">
                    Referral commissions are our way of paying our loyal clients who help us grow and extend our
                    outreach in the world. We offer referral commissions up to 10% that earn an extra income to
                    your accounts whenever you refer a client to us.
                </p>
                <div>
                    <small>Standard</small>
                    <span class="big-text">Referral Earn</span>
                </div>
            </div>

            <div class="ref-comm-block">
                <div data-aos="fade-right" data-aos-delay="0">
                    <span class="perc">
                        10<sup>%</sup>
                    </span>
                    <div class="small">COMMISSION</div>
                </div>
                <h4>is given as commission from the deposit of the person to whom you refer</h4>
            </div>

            <div class="ref-title-block mt-95" data-aos="zoom-in">
                <div>
                    <small>Super</small>
                    <span class="big-text">Mining</span>
                </div>
                <p class="text">
                    We invite everyone from anywhere in the world to join our team of investors. Whether you belong to a
                    small income group or a higher income group, we invite you to entrust your funds with us. Our role
                    is defined by being the financial managers to our clients who believe in our ability to manage their
                    funds. We place the highest degree of trust and confidentiality in all our dealings with them
                </p>

            </div>

            <div class="repr-comm-block">
                <div data-aos="fade-right" data-aos-delay="0">
                    <span class="perc">
                        I
                    </span>
                    <div class="small"></div>
                </div>
                <div data-aos="fade-right" data-aos-delay="200">
                    <span class="perc">
                        N
                    </span>
                    <div class="small"></div>
                </div>
                <div data-aos="fade-right" data-aos-delay="400">
                    <span class="perc">
                       V
                    </span>
                    <div class="small"></div>
                </div>
                <div data-aos="fade-right" data-aos-delay="600">
                    <span class="perc">
                        E
                    </span>
                    <div class="small"></div>
                </div>
                <div data-aos="fade-right" data-aos-delay="800">
                    <span class="perc">
                        S
                    </span>
                    <div class="small"></div>
                </div>
                <div data-aos="fade-right" data-aos-delay="1000">
                    <span class="perc">
                        T
                    </span>
                    <div class="small"></div>
                </div>
            </div>


        </div>


    </div>
</section>

<section class="processors">
    <div class="content">

       
        <div class="icon">
            <img src="images/processors/light_icons/btc.png"/> Bitcoin
        </div>
        <div class="icon">
            <img src="images/processors/light_icons/ltc.png"/> Litecoin
        </div>
        <div class="icon">
            <img src="images/processors/light_icons/eth.png"/> Ethereum
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
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="webpages/about.php">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="webpages/faq.php">
                            FAQ
                        </a>
                    </li>
                   
                </ul>
                <ul class="navbar-nav right-nav">
                    <li class="nav-item ">
                        <a href="webpages/investment.php">
                            Investment

                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="webpages/affiliation.php">
                            Affiliation

                        </a>
                    </li>
                
                                           <li class="nav-item">
                            <a href="webpages/contact.php" class="">
                                Contact

                            </a>
                        </li>
                                    </ul>

            </nav>

            <div class="footer-copyright">
                Copyright <a href="index.php">Super Mining</a> &copy; 2020. All rights reserved.
            </div>
        </div>

    </div>

</section>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/animation.js"></script>
<script src="js/aos.js"></script>
<script src="js/bootstrap.min.js"></script>

    <script src="js/calc.js"></script>


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

</html>
<?php

error_reporting(0);
$refby = $_GET['ref'];

if ($refby){
    $_SESSION['referedBy'] = $refby;

} 

?>
</body>