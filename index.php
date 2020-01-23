<?php 
    include "connectdb.php";
    if(isset($_POST['insertData'])){
        $your_email=$_POST['your_email'];
        $your_name=$_POST['your_name'];
        $your_message=$_POST['your_message'];
        $insertQuery="INSERT INTO `project_table`(`email`, `name`, `message`) VALUES ('$your_email','$your_name','$your_message')";
        
        $conn->query($insertQuery);
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title is here -->
        <title>Tanatos Studio</title>
        <!-- Required meta tags -->
        <meta name="description" content="here is website description">
        <meta name="keywords" content="web, pdw">
        <meta name="author" content="nader">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i,800,800i" rel="stylesheet">
        <!--Bootstrap min css file -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--Bootstrap grid min css file -->
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <!--Bootstrap reboot min css file -->
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <!-- Animate CSS File-->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Theme main css file -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!-- Header Section Start -->
        <header>
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="mainnavbar navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sliderarea">
                                <ul class="rslides">
                                    <li>
                                        <div class="slidercontent">
                                            <h1>WE DESIGN <span class="same">THINGS</span></h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                            <button type="button" class="btn btn-primary">sign in</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slidercontent">
                                            <h1>WEB <span class="same">DESIGNER</span></h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                            <button type="button" class="btn btn-primary">sign in</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slidercontent">
                                            <h1>WEB <span class="same">DEVELOPER</span></h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                            <button type="button" class="btn btn-primary">sign in</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Works Section Start -->
        <section class="worksarea">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ourworks">
                            <h2>our <span class="same">works</span></h2>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                <br> ut aliquip ex ea commodo consequat</p>
                        </div>
                    </div>
                </div>
                <div class="protfolio">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/img1.png" class="wow bounceInLeft" alt="img1">
                        </div>
                        <div class="col-md-4">
                            <img src="images/img2.png" class="wow bounceInDown" alt="img2">
                        </div>
                        <div class="col-md-4">
                            <img src="images/img3.png" class="wow bounceInRight" alt="img3">
                        </div>
                    </div>
                </div>
                <div class="showmore">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="link" href="#">show more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Works Section End -->

        <!-- Team Section Start-->
        <section class="ourteam">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ourteamtxt">
                            <h2>our <span class="same">team</span></h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                <br> accusantium doloremque laudantium totam rem aperiam, eaque ipsa </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="teammembers">
                            <img src="images/team-member1.png" class="wow bounceInLeft" alt="team-member1">
                            <h3>Catherina Gail</h3>
                            <p>Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="teammembers">
                            <img src="images/team-member4.png" class="wow bounceInDown" alt="team-member4">
                            <h3>Harvey Rube</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="teammembers">
                            <img src="images/team-member3.png" class="wow bounceInUp" alt="team-member3">
                            <h3>Janet Pris</h3>
                            <p>Commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="teammembers">
                            <img src="images/team-member4.png" class="wow bounceInRight" alt="team-member4">
                            <h3>Kevin Ward</h3>
                            <p>Velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section End -->
        <!-- Contact Section Start -->
        <section class="contactus">
            <div class="overlay_1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contacttext">
                                <h2>say <span class="same">hello</span></h2>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    <br> deserunt mollit anim id est laborum</p>
                            </div>
                        </div>
                    </div>
                    <div class="contactgroup">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="inputgroup">
                                        <input type="email" class="form-control" name="your_email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputgroup">
                                        <input type="text" class="form-control" name="your_name" placeholder="Your Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 message">
                                    <input type="text" class="message-control" name="your_message" placeholder="Your Message">
                                </div>
                            </div>
                            <div class="hireus">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary submit_btn" name="insertData">submit</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->
        <!-- Footer Section start-->
        <footer>
            <div class="footercontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 copyright">
                            <p>&copy; 2015 COPYRIGHT DESIGN STUDIO</p>
                        </div>
                        <div class="col-md-6 designed">
                            <p>DESIGNED BY <span class="symu">SYMU</span> <span class="fullstop">.</span>CO</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End-->



        <!-- Jquery 3.2.1.slim min js file-->
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <!-- Bootstrap bundle min js file-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Popper min js file-->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap min js file-->
        <script src="js/bootstrap.min.js"></script>
        <!-- jquery min js file -->
        <script src="js/jquery.min.js"></script>
        <!-- Responsive Slides min js file-->
        <script src="js/responsiveslides.min.js"></script>
        <!-- wow min js file-->
        <script src="js/wow.min.js"></script>
        <!-- Responsive slides js start -->
        <script>
            $(function() {
                $(".rslides").responsiveSlides();
            });

        </script>
        <!-- Responsive Slides JS End -->

        <!-- wow js start-->
        <script>
            new WOW().init();

        </script>
        <!-- wow js end-->
    </body>

    </html>
