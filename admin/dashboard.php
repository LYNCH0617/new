<?php
session_start();
if (empty($_SESSION["user"])){
    header("location: ../auth/login.php");
}
require_once '../classes/projects.class.php';
require_once '../classes/infos.class.php';
require_once '../classes/skills.class.php';
require_once '../classes/admin.class.php';
require_once '../tools/clean.php';

$objInfos = new Infos;
$objUser = new User;
$objSkills = new Skills;
$objProjects = new Projects;
$objInfos->user_id = $_SESSION['user']['user_id'];
$objSkills->user_id = $_SESSION['user']['user_id'];
$objProjects->user_id = $_SESSION['user']['user_id'];
$infos = $objInfos->account();
$skills = $objSkills->acc();
$projects = $objProjects->ac();
$name = $objUser->name();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5BB8W2X');</script>
  <!-- End Google Tag Manager -->
  <link rel="icon" type="image/png" href="/favicon.png"/>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Portfolio</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169007209-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-169007209-3');
  </script>

</head>

<body>
  
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BB8W2X"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">

    <div class="container">

      <h3>Hi! I'm </h3>
      <h1><?php echo  $infos['firstname'] . " " . $infos['lastname'] ?></a></h1>
                            <h3 class="home__subtitle"><?php echo  $infos['section']?></h3>
                            <p class="home__description"><?php echo  $infos['bio']?></p>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header"> <span>Home</span></a></li>
          <li><a href="#about"><span>About</span></a></li>
          <li><a href="#education"> <span>Education</span></a></li>
          <li><a href="#experience"> <span>Experience</span></a></li>
<!--          <li><a href="#projects"> <span>Projects</span></a></li>-->
          <li><a href="#portfolio"> <span>Projects</span></a></li>
          <li><a href="#skills"> <span>Skills</span></a></li>
          <!-- <li><a href="#links"> <span>Resume & Links</span></a></li> -->
          <li><a href="#contacts"> <span>Contact</span></a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="social-links">
          <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="#" target="_blank" class="github"><i class="bx bxl-github"></i></a>
          <a href="#" target="_blank" class="google"><i class="bx bxl-google"></i></a>

      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="https://avatars.githubusercontent.com/u/108776300?v=4" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsam atque omnis alias unde beatae, nobis vitae vero! Vel ea repellat fuga atque! Nihil, vel. Pariatur dolores earum sunt reiciendis.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 26 October 1999</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +63 963 246 4989</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong>Zamboanga City</li>
                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong>ghaffrie@gmail.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-global-line" style="color: #ffbb2c;"></i>
            <h3>Software Development</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #5578ff;"></i>
            <h3>Machine Learning</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-camera-3-line" style="color: #e80368;"></i>
            <h3>Computer Vision</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-english-input" style="color: #1c7d32;"></i>
            <h3>Natural Language Processing</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-code-s-slash-fill" style="color: #28a745;"></i>
            <h3>Software Engineering</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #f1081f;"></i>
            <h3>Visualization</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #47aeff;"></i>
            <h3>Algorithms</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-image-line" style="color: #ffc107;"></i>
            <h3>Image Processing</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->
  </section><!-- End About Section -->



  <!-- ======= Education Section ======= -->
  <section id="education" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Education</h2>
      </div>
      <div class="row">
        <div class="col-lg-12" data-aos="fade-up" style="display: inline-block;">


            <div class="col-md-4 mt-4 mt-md-0 icon-box" data-aos="fade-up" data-aos-delay="100" style="padding:0px 0px;padding-bottom: 5px;display: inline-block;">
              <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgFqyMEBKZbo7hV0uIRuDPlyyfp8dGYCmEOZ-LsRdddNM5DXq_2lOlOGWzWifcpAnkEai-Ef6DC0DHzV5Z5TIAQqw5wg2OHa4NveOHg5pLpCUca-oZQV43mOSWmSVPwURbGdJUWnTiR-Q/s1600/Slide47.JPG" class="img-fluid" alt="">
              <p style="text-align:left;color:#fff;padding: 5px 10px;"><em>Associate in Computer Technology</em></p>
              <h5 style="text-align:left;padding: 0px 10px;">August 2023 - Present</h5>
              <h6 style="text-align:left;color:#fff;padding: 0px 10px;">Relevant Coursework</h6>
              <ul style="text-align:left;color:#fff;">
                <li>Web Development</li>
                <li>Mobile App</li>
                <li>Networking</li>
              </ul>
            </div>
          </div>
        </div>
      </div>


    <div class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Online Certification</h2>
      </div>

      <div class="row portfolio-container" style="position: relative; height: 437.75px;">

         <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
          <div class="portfolio-wrap">
            <img src="https://mcwt.org/wp-content/uploads/2024/03/Coding-resources-Sololearn.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>HTML</h4>
              <div class="portfolio-links">
                <a href="#" target="_blank" title="Certificate"><i class="bx bx-link"></i></a>
              </div>
            </div>
           </div>
          </div>

      </div>
    </div>
    </div>

  </section>
  <!-- End Education Section -->



  <!-- Start Experience Section -->

  <section id="experience" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Experience</h2>
      </div>
      <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
              <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="fade-up" data-aos-delay="100">
                <h4 style="text-align:left;"><a href="https://www.asu.edu/" style="color:#12d640">Lorem University</a><br> </h4>
                <h5 style="text-align:left;">November 2024 - Present</h5>
                <p style="text-align:left;color:#fff"><em>Web Developer</em></p>
                <ul style="text-align:left;">
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, commodi voluptas quidem suscipit veritatis blanditiis illum.</li>
                  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, rerum.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                </ul>
              </div>
              
          </div>
        </div>
    </div>
  </section>

  <!-- End Experience Section -->



  <!-- Start Project Section -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Projects</h2>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Web-App</li>
            <li data-filter=".filter-project">Project</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>Twitter Analysis</h4></center>
          <div class="portfolio-wrap">
            <img src="../assets/img/project/twitteranalysis.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              
              <div class="portfolio-links">
                <a href="projects/twitteranalysis.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>Image recognition as Service</h4></center>
          <div class="portfolio-wrap">
            <img src="../assets/img/project/iras.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              
              <div class="portfolio-links">
                <a href="projects/iras.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>Music Streaming Website</h4></center>
          <div class="portfolio-wrap">
            <img src="../assets/img/project/musicplayer.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              
              <div class="portfolio-links">
                <a href="projects/musicplayer.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>Movie Recommender</h4></center>
          <div class="portfolio-wrap">
            <img src="../assets/img/project/recommender.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              
              <div class="portfolio-links">
                <a href="projects/recommender.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-project">
          <!-- <br> -->
          <center><h4>Resume Section Classifier</h4></center>
          <div class="portfolio-wrap">
            <img src="../assets/img/project/resume.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Resume Section Classifier</h4>
              <div class="portfolio-links">
                <a href="projects/resume.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-project">
          <center><h4>Video Description Generator</h4></center>
          <div class="portfolio-wrap">
            <img src="../assets/img/project/vdg.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="projects/vdg.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>ML-DL Web-App</h4></center>
          <div class="portfolio-wrap">
            <img src="../assets/img/project/ml.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="projects/ml.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        

        <div class="col-lg-4 col-md-6 portfolio-item filter-project">
          <!-- <br> -->
          <center><h4>Image Generator</h4></center>
          <div class="portfolio-wrap">
            <img src="../assets/img/project/gan.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="projects/gan.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- End Project Section -->



  <!-- Start Skills Section -->

  <section id="skills" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Skills</h2>
      </div>
      <div class="row">
        <div class="col-lg-12" data-aos="fade-up">
          <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="fade-up" data-aos-delay="100" style="background:#fff">
            <h4 style="text-align:left;color:#09203a">Languages and Databases</h4>
                <p style="text-align:left;">
                  <img src="https://www.vectorlogo.zone/logos/w3_html5/w3_html5-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="upload.wikimedia.org" height="60" width="90">
                  <img src="https://www.vectorlogo.zone/logos/mysql/mysql-horizontal.svg" alt="vectorlogo.zone" height="70" width="130">

                </p>
            </div>
            <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="lefade-up" data-aos-delay="100" style="background:#fff">
              <h4 style="text-align:left;color:#09203a">Frameworks</h4>
                <p style="text-align:left;">
                  <img src="https://www.vectorlogo.zone/logos/getbootstrap/getbootstrap-ar21.svg" alt="vectorlogo.zone">
              </p>
          </div>
          <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="lefade-up" data-aos-delay="100" style="background:#fff">
              <h4 style="text-align:left;color:#09203a">Tools</h4>
                <p style="text-align:left;">
                  <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-ar21.svg" alt="vectorlogo.zone">
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Skills Section -->

  <!-- Start Contact Section -->

  <section id="contacts" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Sunrise Field Urban Poor</p>
            <p>Cabatangan</p>
            <p>Zamboanga City</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <a href="#" target="_blank" class="github"><i class="bx bxl-github"></i></a>
              <a href="#" target="_blank" class="google"><i class="bx bxl-google"></i></a>

            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>ghaffrie@gmail.com</p>
            <p>ghaffrie@wmsu.edu.ph</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Contact</h3>
            <p>+63 963 246 4989</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script type="text/javascript">
    var typed = new Typed('.typing',{
      strings: ["Coder", "Developer", "AI Enthusiast"],
      loop: true,
      typeSpeed: 65,
      backSpeed: 65
    });
  </script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>


























<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/admin.dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="header">
    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
    <section>
        <div class="parent">
            <div class="p-child">   
                <img src="../img/null.png" alt="" height="150px">
                <h1><?php echo $_SESSION["user"]["username"] ?>!</h1>
            </div>
            <div class="infos">
            <div class="fulname">
                <span>Name: </span><?php echo  $infos['firstname'] . " " . $infos['lastname'] ?>
            </div>
            <div class="birthday">
                    <span>Birthday: </span><?php echo $infos ["birthday"]?>
            </div>
            <div class="email">
                    <span>Email: </span><?php echo $infos ["email"]?>
                </div>
            <div class="contact">
                    <span>Contact Number: </span><?php echo $infos ["contact"]?>
            </div>
            <div class="address">
                    <span>Address: </span><?php echo $infos ["address"]?>
            </div>
            </div>
            <div class="skills">
                <h1>Skills</h1>
                <div class="first">
                    <?php echo $skills ["first"]?>
                </div>
                <div class="second">
                    <?php echo $skills ["second"]?>
                </div>
                <div class="third">
                    <?php echo $skills ["third"]?>
                </div>
                <div class="fourt">
                    <?php echo $skills ["fourt"]?>
                </div>
                <div class="fifth">
                    <?php echo $skills ["fifth"]?>
                </div>
                <div class="sixth">
                    <?php echo $skills ["sixth"]?>
                </div>
            </div>
            <div class="education">
         <h1>Education</h1>
                <div class="elem">
                    <span>Elementary: </span><?php echo $infos ["elem"]?>
                </div>
                <div class="high">
                    <span>Junior High School: </span><?php echo $infos ["high"]?>
                </div>
                <div class="shs">
                    <span>Senior High School: </span><?php echo $infos ["shs"]?>
                </div>
                <div class="college">
                    <span>College: </span><?php echo $infos ["college"]?>
                </div>
            </div>
            <div class="projects">
                <h1>Projects</h1> 
                <a href="addproject.php">Add Project</a>
                <div class="added">
                  
                    <?php foreach($projects as $proj){
                        ?>
                            <a href= <?php echo $proj['projects'] ?>>//description</a>
                    <?php
                    } ?>
                   
                </div>
            </div>
        </div>
        <div class="log"><br><a href="../auth/logout.php">logout</a></div>
    </section>
</body>
</html> -->