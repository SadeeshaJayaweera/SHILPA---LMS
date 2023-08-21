<?php
session_start();

if (!isset($_SESSION["user"])) {
  header("Location: login/login.php");
  exit;
}

if (!isset($_SESSION["email"])) {
  die('Email not provided.');
}
// Assuming the user submits the login form and you have their email and password in variables $email and $password
$email = $_SESSION["email"];

$conn = mysqli_connect('localhost', 'root', '', 'shilpa');

// Prepare the query to retrieve the full name based on the provided email 
$query = "SELECT Full_Name FROM users WHERE Email='$email' ";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query executed successfully
if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}

$fullname = "";
// Check if a row is returned (login successful)

if (mysqli_num_rows($result) == 1) {
  // Fetch the user's full name from the result
  $row = mysqli_fetch_assoc($result);
  $fullname = $row['Full_Name'];

} else {
  // Handle login failure (redirect back to login page or display an error message)
  // For example:
  // header('Location: login.php?error=invalid_login');
  // exit();
}

?>

<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Assignment</title>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link rel="stylesheet" href="Css/index/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala&family=Poppins:wght@500&display=swap"
              rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@500&display=swap" rel="stylesheet">

    </head>

    <body>
        <!--Header-->
        <header class="shil-header">
            <div class="header-search site-header-content align-items-center ">
                <div id="branding" class="branding-elements-desktop">
                    <div id="logo" class="shilpa-logo">
                        <div class="shilpa-logo-heading">
                            <a class="" href="" __tracked="true">
                                <img class="site-logo image-style-none " src="Images/index/shilpaLogo.png" alt="shilpa logo">
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
              <div>
                  </nav>
                  <ul>
                      <li>

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
                                     typeof="foaf:Image" src="Images/index/shilpaLogo.png" alt="Shilpa Online">
                            </a>
                        </div>
                    </div>
                </div>
                <!--mobile logo end-->

                <!--Sign in and register-->
                <div class="flex-grow-desktop">
                <p class="welcome-name animate-charcter"> Welcome:
  <?php echo "$fullname"; ?>
</p>

      </div>
      <div class="user-menu-parallelogram-wrapper">
        <nav class="user-cta" aria-label="Account">
          <a class="btn btn-brand user-link mx-1 register-link" href="login/logout.php" __tracked="true">
            <div class="register-link-text">
              Log Out
            </div>
          </a>
        </nav>
      </div>
                <!--Sign in and register end-->

            </div>
        </header>
        <!--End of the Header-->

        <!--main banner-->
        <div class="main-banner">
            <div class="main-banner-content">
                <div class="main-banner-text">
                    <p class="main-banner-p">Start Your Journey With</p>
                </div>
                <div class="main-banner-logo">
                    <img src="Images/index/shilpaLogo.png" alt="" class="banner-logo">
                </div>

                <!--mobile navigate to all courses (only showing mobile version)-->
                <a href="all_courses.html">
                    <div class="mob-nav-all">
                        <p class="mob-nav-t">Find All Courses</p>
                    </div>
                </a>
                <!--mobile navigate to all courses-->

            </div>
            <div class="rectangle-1">
                <img src="Images/index/rectangle.png" alt="">
            </div>
            <div class="rectangle-text-area">
                <p class="rectangle-text">Fully functional Learing Site on your finger tips</p>
            </div>
        </div>
        <!--main banner end-->

        <!--Logo-area-->
        <div class="logo-area">
            <div class="logo-set">
                <div>
                    <img src="Images/index/yt.png" alt="">
                </div>
                <div>
                    <img src="Images/index/dp.png" alt="">
                </div>
                <div>
                    <img src="Images/index/mora.png" alt="">
                </div>
            </div>
            <p class="logo-set-text">All Free Learning Materials at one place , get set and go , nothing to worry</p>
        </div>
        <!--Logo-area-end-->

        <!--New Courses area-->
        <div class="courses-area-container">
            <div class="new-courses-area">
                <div class="new-courses-content">
                    <div class="new-courses-text">
                        <p class="new-courses-p">New <span class="new-courses-p-span">Courses</span> </p>
                    </div>
                    <div class="card-top-line">
                    </div>
                    <div class="new-courses-card-area">

                        <!--cards-->
                        
                        <?php
                        include_once './BusinessLogic.php';
                        getLatestCourse();
                        ?>
                        
                        <!--cards-->

                    </div>
                </div>
                <div class="all-c">
                    <a href="all_courses.php"><button class="all-c-b"> Find all courses in Shilpa !</button></a>
                    
                </div>
            </div>
        </div>
        <!--New Courses area end-->

        <!--top Courses area-->
        <div class="courses-area-container">
            <div class="top-courses-area">
                <div class="new-courses-content">
                    <div class="new-courses-text">
                        <p class="new-courses-p"><span class="new-courses-p-span"> Top Courses in Shilpa!</span> </p>
                    </div>
                    <div class="card-top-line">
                    </div>
                    <div class="new-courses-card-area">

                        <!--cards-->
                        
                        <?php
                        include_once './BusinessLogic.php';
                        getTopCourse();
                        ?>
                        
                        <!--cards-->

                    </div>
                </div>
                <div class="all-c">
                    <a href="all_courses.php"><button class="all-c-b">Find all courses in Shilpa !</button></a>
                </div>
            </div>
        </div>
        <!--top Courses area end-->

        <!--main 4 cards area -->

        <!--area 1-->
        <div class="card-container card-area">
            <div class="card-text-1">
                <div>
                    <h1 class="text-1">We Help You To Grow And <br>
                        <span class="text-1-span">Evolve EVERYDAY!</span>
                    </h1>
                </div>
                <div class="at-s">
                    <h1 class="text-2">At Shilpa you can access over <span class="text-2-span">30+ courses</span><br> from
                        the humble stepping stones of Coding<br> to learning to be a <span class="text-2-span">Full Stack
                            Developer!</span></h1>
                </div>
                <div class="card-div-area">
                    <div class="card-squares">
                        <div class="background-square">
                        </div>
                        <div class="top-square">
                        </div>
                        <div class="sqr-text-cls">
                            <h1 class="sqr-txt">30+ Courses</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--area 2-->
        <div class="card-container card-area-2">
            <div class="card-text-2">
                <div>
                    <h1 class="text-3">It’s <span class="text-3-span">Free,</span> Simple <br>
                        and Recognised.
                    </h1>
                </div>
                <div>
                    <h1 class="text-4">It doesn’t cost you a dime to access any of<br>
                        our courses! Shilpa makes it easier for you<br>
                        by methodically introducing you to the<br>
                        qualifications step by step. We bring you<br>
                        recognised certifications locally and <br>
                        internationally which are online at the<br>
                        comfort of your own home!
                    </h1>
                </div>
                <h1 class="text-line-2"></h1>
            </div>
            <div class="card-img-2">
                <img src="Images/index/coffeGirl.png" alt="">
            </div>
        </div>

        <!--area 3-->
        <div class="card-container card-area-3">
            <div class="card-img-3">
                <img src="Images/index/earth (1).png" alt="">
            </div>
            <div class="card-text-3">
                <div>
                    <h1 class="text-5">Language is not a barrier at <br><span class="text-5-span">Shilpa!</span>
                    </h1>
                </div>
                <div>
                    <h1 class="text-6">We believe language should not be a barrier for learning!<br>
                        That’s why we offer a wide range of courses for you to<br> select from in the medium you prefer.
                        English or <span class="sinhala">සිංහල</span>
                    </h1>
                    <div class="text-line-3"></div>
                </div>
            </div>
        </div>

        <!--last area-->
        <div class="card-container card-area-4">
            <div class="card-text-4">
                <div>
                    <h1 class="text-7">START TODAY!</h1>
                    <h1 class="text-8">So why wait, Start today...</h1>
                </div>
                <div class="text-9-back">
                    <h1 class="text-9">
                        “Develop a passion for learning, if<br>
                        you do you will never cease to grow”
                    </h1>
                    <h1 class="text-10">
                        -Anthony J D’ Angelo
                    </h1>
                </div>
                <div class="red-reg-banner">
                    <div class="prt-1"></div>
                    <div class="prt-2"></div>
                    <div class="prt-3">
                        <p class="ban-t">Register for FREE!</p>
                    </div>
                    <div class="prt-4"></div>
                </div>
            </div>
            <div class="card-img-4">
                <img src="Images/index/bookGirl.png" alt="">
            </div>
        </div>
        <!--main 4 cards area end -->

        <!--Responsive part start (only showing on mobile versions)-->
        <div class="res-handle">
            <div class="res-card-1">
                <p class="res-card-1-text1">We Help You To Grow And
                    Evolve EVERYDAY!</p>
                <p class="res-card-1-text2">
                    At Shilpa you can access over 30+ courses
                    from the humble stepping stones of Coding
                    to learning to be a Full Stack Developer!
                </p>
            </div>
            <div class="res-card-2">
                <div class="res-csrd-2-text-area">
                    <p class="res-card-2-text1">It’s Free, Simple
                        and Recognised. </p>
                    <p class="res-card-2-text2">
                        It doesn’t cost you a dime to access any of
                        our courses! Shilpa makes it easier for you
                        by methodically introducing you to the
                        qualifications step by step. We bring you
                        recognised certifications locally and
                        internationally which are online at the
                        comfort of your own home!
                    </p>
                </div>
            </div>
        </div>
        <!--Responsive part end (only showing on mobile versions)-->













        <!--foooooooooooooooter-->


       
    <footer>
        <div class="row primary">
            <div class="column about">
                <h3>We Are Shilpa</h3>
                <p>
                    Bringing you the best of virtual learning and empowering future minds.<br> We are committed to make
                    learning open source, and free to anyone and everyone.<br> Shilpa; Powering you to be the best
                    version of Yourself.
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