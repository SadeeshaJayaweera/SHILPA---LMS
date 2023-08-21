<!DOCTYPE html>
<?php
include './BusinessLogic.php';

$Id = $_GET["ID"];
$name = $_GET["name"];
$description = $_GET["description"];
$doneby = $_GET["doneby"];
$originalUrl = $_GET["originalUrl"];

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Course Page</title>
        <link rel="stylesheet" href="Css/index/index.css">
        <link rel="stylesheet" href="Css/coursePages/coursePages.css">

    </head>

    <body>
        <!--Header-->
        <header class="shil-header">
            <div class="header-search site-header-content align-items-center ">
                <div id="branding" class="branding-elements-desktop">
                    <div id="logo" class="shilpa-logo">
                        <div class="shilpa-logo-heading">
                            <a class="" href="" __tracked="true">
                                <img class="site-logo image-style-none " src="shilpaLogo.png" alt="shilpa">
                            </a>
                        </div>
                    </div>
                </div>
                <!--Primary menu-->
                <div id="primary-menu-bar" class="nav align-items-center justify-content-between">
                    <nav class="main-menu-nav" aria-label="Main">
                        <!--mobile menu button-->
                        <button class="mobile-menu-button icon-button small p-0" aria-expanded="false" aria-label="Main menu"
                                title="Main menu" aria-haspopup="true" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" aria-hidden="true">
                            <path d="M0 0h24v24H0z" fill="none">
                            </path>
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z">
                            </path>
                            </svg>
                        </button>
                        <ul class="menu primary-menu header-search clearfix list-group list-unstyled">
                            <li class="sr-only" tabindex="-1">
                            </li>
                            <li class="menu-link visible-mobile inline-primary-ctas d-flex justify-content-between">
                                <a href="" class="btn btn-primary w-50 first-focus">
                                    Sign In
                                </a>
                                <a class="btn btn-brand w-50" href="" __tracked="true">
                                    Register for free
                                </a>
                            </li>
                            <!--Courses Button-->
                            <li class="menu-link menu-open visible-desktop" role="presentation">
                                <a class="menu-item" href="" __tracked="true">
                                    Courses
                                </a>
                                <div class="nav-bar-group">
                                    <button aria-label="Courses menu"
                                            class="btn-icon btn-icon-primary btn-icon-md menu-btn h-100" type="button"
                                            id="menu-trigger-courses" aria-expanded="false">
                                        <span class="btn-icon__icon-container">
                                            <span class="pgn__icon btn-icon__icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg" role="img" focusable="false"
                                                     aria-hidden="true">
                                                <path d="M16.59 8.59 12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41Z"
                                                      fill="currentColor">
                                                </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>



                                </div>
                                <div class="header degreesMenu">
                                    <div class="header-text">
                                        <div>
                                            <h1>Top Courses in shilpa</h1>
                                        </div>
                                        <div class="compare-programs-container">

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="four-column-list">

                                        <ul>
                                            <li >Web Designing</li>
                                            <li>Web Developing</li>
                                            <li>Fullstack Dev</li>
                                            <li>CSS & HTML</li>

                                        </ul>
                                        <ul>
                                            <li>Algorithms</li>
                                            <li>Frameworks</li>
                                            <li>Programming</li>
                                            <li>Python</li>




                                    </div>
                                </div>



                            </li>
                            <!--Courses Button end-->

                            <!--Shilpa programs Button-->
                            <li class="menu-link menu-open visible-desktop" role="presentation">
                                <a class="menu-item" href="/search/?tab=program" __tracked="true">
                                    Shilpa &nbsp; Programs
                                </a>
                                <div class="nav-bar-group">
                                    <button aria-label="Programs &amp; Degrees menu"
                                            class="btn-icon btn-icon-primary btn-icon-md menu-btn h-100" type="button"
                                            id="menu-trigger-programs" aria-expanded="false">
                                        <span class="btn-icon__icon-container">
                                            <span class="pgn__icon btn-icon__icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg" role="img" focusable="false"
                                                     aria-hidden="true">
                                                <path d="M16.59 8.59 12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41Z"
                                                      fill="currentColor">
                                                </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </div>


                                <!-- Nested List for Dropdown -->
                                <div class="header degreesMenu">
                                    <div class="header-text">
                                        <div>
                                            <h1>Upcoming Shilpa Events</h1>
                                        </div>
                                        <div class="compare-programs-container">
                                            <h6 class="compare-programs"></h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="degreeList">
                                        <li><a href="#"><p class="degree-title">No Upcoming Events<span class="badge">New</span></p>
                                            </a>
                                            <p>Stay Connected </p>  
                                        </li>
                                        <li><a href="#"><p class="degree-title">abc</p></a>
                                            <p>Develop your technical skills through self-paced programs with access to live experts</p> 
                                        </li>
                                        <li><a href="#">Course 3</a></li>
                                        <!-- Add more courses here -->
                                    </ul>
                                </div>



                            </li>
                            <!--Shilpa programs Button end-->
                            <li class="menu-link menu-open visible-desktop" role="presentation">
                                <a class="menu-item" href="index.php" __tracked="true">
                                    Shilpa Home &nbsp;
                                </a>
                            </li>
                            <!--Shilpa programs Button end-->
                        </ul>
                    </nav>
                </div>
                <!--Primary menu end -->

                <!--mobile logo -->
                <div id="branding" class="branding-elements-mobile">
                    <div id="logo" class="shilpa-logo">
                        <div class="shilpa-logo-heading">
                            <a class="" href="/" __tracked="true">
                                <img data-ot-ignore="" class="site-logo image-style-none optanon-category-C0001" itemprop="logo"
                                     typeof="foaf:Image" src="images/shilpaLogo.png" alt="Shilpa Online">
                            </a>
                        </div>
                    </div>
                </div>
                <!--mobile logo end-->

                <!--Sign in and register-->
                <div class="flex-grow-desktop">
                </div>
                <div class="user-menu-parallelogram-wrapper">
                    <nav class="user-cta" aria-label="Account">
                        <a class="btn btn-tertiary user-link sign-in-link" href="" __tracked="true">
                            Login
                        </a>
                        <a class="btn btn-brand user-link mx-1 register-link" href="" __tracked="true">
                            <div class="register-link-text">
                                Register for free
                            </div>
                        </a>
                    </nav>
                </div>
                <!--Sign in and register end-->
            </div>
        </header>
<div class="head-of-course">
            <div class="head-details">
                <h1>
                    <?php echo $name; ?>
                </h1>
                <p>
                    Done: <?php echo $doneby; ?>
                </p>
            </div> 
        </div>
<div class="container1">
            <h1 class="title">All Details About This Course</h1>
            <p>
                <?php echo $description; ?>
            </p>
        </div>
<div class="container1">
            <h1 class="title">Links</h1>
            <a href="<?php echo $originalUrl; ?>">Click Here</a>
        </div>
<footer>
            <div class="row primary">
                <div class="column about">
                    <h3>We Are Shilpa</h3>
                    <p>
                        Bringing you the best of virtual learning and empowering future minds.<br> We are committed to make learning open source,  and free to anyone and everyone.<br> Shilpa; Powering you to be the best version of Yourself.
                </p>
                    </div>
                <div class="column links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="all_courses.php">All Courses</a>
                        </li>
                        <li>
                            <a href="dev/developers.html">Developer Team</a>
                        </li>
                        <li>
                            <a href="login/terms.html">Terms Of Service</a>
                        </li>
                        
                    </ul>
                </div>
                
            </div>

            <div class="row secondary">
                <div>
                    <p>
                        <i class="fas fa-phone-alt"></i>
                    </p>
                    <p>+94 701752744</p>
                </div>
                <div>
                    <p><i class="fas fa-envelope"></i></p>
                    <p>mail@shilpa.lk</p>
                </div>
                <div>
                    <p><i class="fas fa-map-marker-alt"></i></p>
                    <a href="https://www.nsbm.ac.lk/">
                        <p>NSBM Green University</p>
                    </a>
                </div>
            </div>
            <div class="row copyright">
                <p>Copyright &copy; Shilpa | All Rights Reserved</p>
            </div>
        </footer>
    </body>

</html>