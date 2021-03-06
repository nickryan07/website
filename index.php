<!DOCTYPE html>
<?php

?>

<html lang="en">

<head>
    <!-- required tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-- title information -->
    <title>Nicholas Reimherr</title>
    <link href="img/favicon.ico" rel="icon" type="image/x-icon">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="css/font-awesome/css/fontawesome-all.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap4.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate/animate.css">
    <!-- mdb css -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style-0.0.5.css">
    <!-- Videoplayer css -->
    <link rel="stylesheet" href="css/player.css">
    <!-- Mfizz css -->
    <link rel="stylesheet" href="css/mfizz/font-mfizz.css">


</head>

<body>

    <!-- Top section -->
    <section id="top">
        <div id="top-img" class="bg-parallax animated fadeIn">
            <div id="top-container">

                <canvas class="connecting-dots" id="connecting-dots"></canvas>
                <nav class="navbar navbar-dark navbar-expand-md transparent" style="box-shadow: none;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#top" style="color: #14496D">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#skills" style="color: #14496D">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#about" style="color: #14496D">About Me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#projects" style="color: #14496D">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #14496D">More</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div id="top-content" class="text-center container">
                    <div id="top-header" class="animated bounce">
                        <h3>Welcome<br>Learn more about me below!</h3>
                        <div id="top-button" class="animated slideInUp" style="">
                            <a class="btn btn-lg btn-general btn-col js-scroll-trigger" href="#skills" role="button" title="View Work" style="color: #14496D">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- Skills section -->
    <section id="skills">
        <div class="content-box">
            <div class="content-title">
                <h3>Skills</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="wow animated rollIn" data-wow-duration=".75s" data-wow-delay=".5s">
                            <div class="skill-item">
                                <div class="skill-item-icon">
                                    <i class="fas fa-code fa-3x"></i>
                                </div>
                                <div class="skill-item-title">
                                    <h3>Object-Oriented Programming</h3>
                                </div>
                                <div class="skill-item-description">
                                    <p>I have experience developing Object-Oriented software that adheres to the four pillars of Object-Oriented Programming.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wow animated rollIn" data-wow-duration=".75s" data-wow-delay=".5s">
                            <div class="skill-item">
                                <div class="skill-item-icon">
                                    <i class="fa fa-laptop fa-3x"></i>
                                </div>
                                <div class="skill-item-title">
                                    <h3>Web Development</h3>
                                </div>
                                <div class="skill-item-description">
                                    <p>I have an understanding of modern web design principles and have utilized many of the most popular web development libraries such as jQuery and Bootstrap in various projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wow animated rollIn" data-wow-duration=".75s" data-wow-delay=".5s">
                            <div class="skill-item">
                                <div class="skill-item-icon">
                                    <i class="fas fa-angle-double-right fa-4x"></i>
                                </div>
                                <div class="skill-item-title">
                                    <h3>Agile</h3>
                                </div>
                                <div class="skill-item-description">
                                    <p>I have used agile methodologies to develop and test software features for problem domains that require the ability to effectively adapt to changing requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="wow animated rollIn" data-wow-duration=".75s" data-wow-delay=".5s">
                            <div class="skill-item">
                                <div class="skill-item-icon">
                                    <i class="fas fa-database fa-3x"></i>
                                </div>
                                <div class="skill-item-title">
                                    <h3>SQL</h3>
                                </div>
                                <div class="skill-item-description">
                                    <p>I have experience designing and implementing relational schema in SQL. I can write queries that utilize fundamental SQL security practices such as prepared statements. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wow animated rollIn" data-wow-duration=".75s" data-wow-delay=".5s">
                            <div class="skill-item">
                                <div class="skill-item-icon">
                                    <i class="fas fa-redo-alt fa-3x"></i>
                                </div>
                                <div class="skill-item-title">
                                    <h3>SDLC</h3>
                                </div>
                                <div class="skill-item-description">
                                    <p>I have experience with all phases of the software development life cycle from analysis and requirement elicitation through evolution. I have been responsible for system modeling with UML, creating and maintaining documentation and system testing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wow animated rollIn" data-wow-duration=".75s" data-wow-delay=".5s">
                            <div class="skill-item">
                                <div class="skill-item-icon">
                                    <i class="fa fa-comments fa-3x"></i>
                                </div>
                                <div class="skill-item-title">
                                    <h3>Languages and Libraries</h3>
                                </div>
                                <br>
                                <div class="skill-langs">
                                    <div class="col-sm-12">
                                        <i class="icon-java skill-item-language-icon"></i>
                                        <i class="icon-c skill-item-language-icon"></i>
                                        <i class="icon-cplusplus skill-item-language-icon"></i>
                                        <i class="icon-python skill-item-language-icon"></i>
                                    </div>
                                    <div class="col-sm-12">
                                        <i class="icon-html5-alt skill-item-language-icon"></i>
                                        <i class="icon-javascript-alt skill-item-language-icon"></i>
                                        <i class="icon-php-alt skill-item-language-icon"></i>
                                        <i class="icon-mysql-alt skill-item-language-icon"></i>
                                    </div>
                                    <div class="col-sm-12">
                                        <i class="icon-bootstrap skill-item-language-icon"></i>
                                        <i class="icon-jquery skill-item-language-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about">
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!--Modal: Contact form-->
            <div class="modal-dialog cascading-modal" role="document">

                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header main-color white-text">
                        <h4 class="title">
                            <i class="fas fa-pencil-alt"></i> Contact form</h4>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <form method="POST">
                            <!-- Material input name -->
                            <label for="name"><i class="fas fa-user"></i> Your name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-sm">


                            <!-- Material input email -->

                            <label for="email"><i class="fas fa-lock"></i> Your email</label>
                            <input type="text" id="email" name="email" class="form-control form-control-sm">


                            <!-- Material input subject -->

                            <label for="subject"><i class="fas fa-tag"></i> Subject</label>
                            <input type="text" id="subject" name ="subject" class="form-control form-control-sm">


                            <!-- Material textarea message -->


                            <label for="message"><i class="fas fa-envelope"></i> Your message</label>
                            <textarea type="text" id="message" name="message" class="md-textarea form-control"></textarea>
                            <div class="text-center mt-4 mb-2">
                                <input class="btn btn-scheme button" type="submit" name="submitBtn" value="Submit" />
                            </div>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitBtn'])) {
                                $to = "nicholasreimherr@gmail.com";
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $subject = $_POST['subject'];
                                $message = $_POST['message'];
                                $headers  = 'MIME-Version: 1.0' . "\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                $headers .= "From: ".$email."\r\n";  
                                $headers .= "Reply-To: ".$email."\r\n";
                                $headers .= "Return-Path: ".$email."\r\n";
                                $headers .= 'X-Mailer: PHP/' . phpversion();
                                mail($to, $subject, $message, $headers);
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-img bg-parallax">
            <div class="container-fluid about-container">
                <div class="container">
                    <div class="about-content wow animated flipInX">
                        <div class="content-box">
                            <div class="content-title">
                                <h3>About Me</h3>
                                <div class="content-title-underline-alt"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4" style="text-align: center">
                                <div class="circle-par">
                                    <img class="about-circle" src="img/team-4.jpg">
                                </div>
                                <div class="about-name">
                                    <h3>Nicholas Reimherr</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item" style="text-align: center">
                                    <div class="about-item-icon">
                                        <i class="fas fa-graduation-cap fa-4x"></i>
                                    </div>
                                    <div class="about-item-title">
                                        <h3>Education</h3>
                                    </div>
                                    <p>
                                        The University of Texas at Arlington<br> B.S. Software Engineering<br>
                                    </p>
                                    <ul type="circle" style="list-style-position: inside; padding-left:0">
                                        <li>
                                        </li>
                                    </ul>
                                    <p>
                                        (Expected Graduation: Summer 2019)
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item" style="text-align: center">

                                    <div class="about-item-icon">
                                        <i class="far fa-question-circle fa-4x"></i>
                                    </div>
                                    <div class="about-item-title">
                                        <h3>Info</h3>
                                    </div>
                                    <p>
                                        <br><br>
                                    </p>
                                    <div>
                                        <a href="https://www.linkedin.com/in/nicholas-reimherr/" class="fab fa-linkedin-in fa-linkedin-in-custom fa-2x social-media-icon"></a>
                                        <a href="https://github.com/nickryan07" class="fab fa-github fa-github-custom fa-2x social-media-icon"></a>
                                        <a href="#" class="far fa-envelope fa-envelope-custom fa-2x social-media-icon" data-toggle="modal" data-target="#modalContactForm"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="projects">

        <!-- ###########    MODALS   ########### -->
        
        <div class="modal fade" id="game-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="container-canvas">
                        <canvas id="gameCanvas" width="800" height="600">
                        </canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <style>
                        .player-container {
                            margin-right: auto;
                            margin-left: auto;
                            width: 640px;
                            height: 360px;
                        }

                    </style>
                    <div class="player-container">
                        <div id="player">
                            <div id="vid-container">
                                <div id="screen">
                                    <img id="screenbutton" src="./img/video/play.png">
                                </div>
                                <video id="video">
                                <source src="./img/video/sample.mp4">
                                    Your browser doesn't support HTML5 video playback.
                            </video>
                                <div id="progress-container">
                                    <div id="bar"></div>
                                </div>
                                <div id="button-container">
                                    <img id="play" src="./img/video/play.png">
                                    <div id="time-elapsed">
                                        0:00 / 0:00
                                    </div>
                                    <img id="sound" src="./img/video/sound.png">
                                    <div id="soundbar-container">
                                        <div id="sbar"></div>
                                    </div>
                                    <img id="fullscreen" src="./img/video/fullscreen.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ###########   END MODALS   ########### -->

        <div class="content-box">
            <div class="content-title">
                <h3>Projects</h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="project-content">
                <div class="container">
                    <div class="row project-row">
                        <div class="col-md-4">
                            <div class="wow animated fadeInDown" data-wow-duration=".75s" data-wow-delay=".3s" style="text-align: center">
                                <div class="project-card" style="width: auto;">
                                    <div class="project-card-top">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="project-card-body">
                                        <h3 class="card-title">Fablab Waitlist</h3>
                                        <div class="card-text text-left">
                                            <ul>
                                                <li>
                                                    Working to implement new features within a large existing software system
                                                </li>
                                                <li>
                                                    Working to improve customer flow in the school fabrication labratory by introducing new UI elements and implementing a notifcation system
                                                </li>
                                                <li>
                                                    Languages Used: PHP 5.6, HTML 5, CSS, JavaScript, SQL
                                                </li>
                                            </ul>
                                            <br>
                                        </div>
                                        <a class="btn btn-scheme" href="https://github.com/nickryan07/FabApp-Waitlist">
                                         View Github
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="wow animated fadeInDown" data-wow-duration=".75s" data-wow-delay=".3s" style="text-align: center">
                                <div class="project-card" style="width: auto">
                                    <div class="project-card-top">
                                        <i class="fa fa-comment-alt fa-5x"></i>
                                    </div>
                                    <div class="project-card-body">
                                        <h3 class="card-title">UberChat</h3>
                                        <div class="card-text text-left">
                                            <ul>
                                                <li>
                                                    Wrote an object-oriented chat server and client
                                                </li>
                                                <li>
                                                    Derived system requirements from an initial proposal document and followed all phases of the SDLC
                                                </li>
                                                <li>
                                                    Used UML to design the system and maintained documentation
                                                </li>
                                                <li>
                                                    Languages Used: C++ with Boost and FLTK libraries
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="btn btn-scheme" href="https://github.com/nickryan07/UberChat">
                                         View Github
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wow animated fadeInDown" data-wow-duration=".75s" data-wow-delay=".3s" style="text-align: center">
                                <div class="project-card" style="width: auto">
                                    <div class="project-card-top">
                                        <i class="fas fa-cloud fa-5x"></i>
                                    </div>
                                    <div class="project-card-body">
                                        <h3 class="card-title">Cloud Storage Server</h3>
                                        <div class="card-text text-left">
                                            <ul>
                                                <li>
                                                    Utilized a Java Servlet and Client to transfer files between a user and a remote server
                                                </li>
                                                <li>
                                                    Used an Amazon Web Services EC2 instance to store uploaded files
                                                </li>
                                                <li>
                                                    Used Google firebase for user authentication
                                                </li>
                                                <li>
                                                    Encrypted all files before they were sent to the server and decrypted them after retrieval
                                                </li>
                                                <li>
                                                    Languages Used: Java with HTTPClient and a Tomcat web servlet
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="btn btn-scheme" href="https://github.com/nickryan07/CloudStorage">
                                         View Github
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row project-row">
                        <div class="col-md-4">
                            <div class="wow animated fadeInDown" data-wow-duration=".75s" data-wow-delay=".3s" style="text-align: center">
                                <div class="project-card" style="width: auto">
                                    <div class="project-card-top">
                                        <i class="fas fa-location-arrow fa-5x"></i>
                                    </div>
                                    <div class="project-card-body">
                                        <h3 class="card-title">Personal Website</h3>
                                        <div class="card-text text-left">
                                            <ul>
                                                <li>
                                                    Wrote a personal webpage using a modern design
                                                </li>
                                                <li>
                                                    Used JS for the landing design
                                                </li>
                                                <li>
                                                    Languages Used: HTML 5, JavaScript, CSS
                                                </li>
                                                <li>
                                                    Libraries Used: Bootstrap 4, jQuery, MDBootstrap, Wow.js
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="btn btn-scheme" href="https://github.com/nickryan07/website">
                                             View Github
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wow animated fadeInDown" data-wow-duration=".75s" data-wow-delay=".3s" style="text-align: center">
                                <div class="project-card" style="width: auto">
                                    <div class="project-card-top">
                                        <i class="fas fa-rocket fa-5x"></i>
                                    </div>
                                    <div class="project-card-body">
                                        <h3 class="card-title">Web Apps</h3>
                                        <div class="card-text text-left">
                                            <ul>
                                                <li>
                                                    Completed an online javascript course where I created a stylized HTML5 video player. Expanded the project on my own by adding fullscreen stylization.
                                                </li>
                                                <li>
                                                    Completed an online course where I made a table-tennis game in javascript.
                                                </li>
                                                <li>
                                                    Languages Used: JavaScript, HTML 5, CSS
                                                </li>
                                            </ul>
                                        </div>
                                        <button type="button" class="btn btn-scheme" data-toggle="modal" data-target="#video-modal">
                                             Demo Video
                                            </button>
                                        <button type="button" class="btn btn-scheme" data-toggle="modal" data-target="#game-modal">
                                             Demo Game
                                            </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wow animated fadeInDown" data-wow-duration=".75s" data-wow-delay=".3s" style="text-align: center">
                                <div class="project-card" style="width: auto">
                                    <div class="project-card-top">
                                        <i class="fas fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="project-card-body">
                                        <h3 class="card-title">Robot Shop</h3>
                                        <div class="card-text text-left">
                                            <ul>
                                                <li>
                                                    Designed a GUI based object oriented system for a fictional robot shop
                                                </li>
                                                <li>
                                                    Used UML to create design documentation
                                                </li>
                                                <li>
                                                    Used agile practices with 6 week-long sprints
                                                </li>
                                                <li>
                                                    Languages Used: C++ with the FLTK library
                                            </ul>
                                            <br>
                                        </div>
                                        <a type="button" class="btn btn-scheme" href="https://github.com/nickryan07/RRS">
                                             View Github
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">

        <!--Footer-->
        <footer class="page-footer font-small pt-4 mt-4">

            <!--Footer Links-->
            <div class="container-fluid text-center text-md-left">
            </div>
            <div class="footer-copyright py-3 text-center">
                <div class="row">
                    <div class="col-md-4">
                        Built by Nicholas Reimherr -
                        <a href="https://github.com/nickryan07/website"> Source Code </a>
                    </div>
                    <div class="col-md-8">
                        Return:
                        <a class="js-scroll-trigger" href="#top">Home</a> /
                        <a class="js-scroll-trigger" href="#skills">Skills</a> /
                        <a class="js-scroll-trigger" href="#about">About</a> /
                        <a class="js-scroll-trigger" href="#projects">Projects</a>
                    </div>
                </div>
            </div>
            <!--/.Footer Links-->
        </footer>
        <!--/.Footer-->
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap/bootstrap4.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/tennis.js"></script>
    <script src="js/dots-0.0.6.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/custom-0.0.1.js"></script>
    <script src="js/player.js"></script>

</body>



</html>
