
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GymFit-Home</title>
<link rel="shortcut icon" type="image/x-icon" href="/images/fivicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/responsive.css">
<link rel="stylesheet" href="/css/lightbox.css">
<link rel="stylesheet" href="/css/owl.carousel.css">
<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/owl.theme.default.css">
</head>
<body>
<div class="page-wrapper"> 
  <!-- Preloader -->
  <div class="preloader"></div>
  <!-- Preloader --> 
  
  <!-- header start -->
  <header class="main-header">
    <div class="header-top">
      <div class="container clearfix">
        <div class="top-left pull-left clearfix">
          <div class="phone pull-left"><a href="#"><i class="fa fa-phone"></i>123 1234 123</a></div>
          <div class="email pull-left"><a href="mailto:Fetness@yourdomain.com"><i class="fa fa-envelope-o"></i> Fitness@yourdomain.com</a></div>
        </div>
        <div class="top-right pull-right clearfix">
          <div class="social"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> <a class="fa fa-google-plus" href="#"></a></div>
        </div>
      </div>
    </div>
    <div class="header-lower">
      <div class="container clearfix">
        <div class="logo pull-left"><a href="index.html">
          <h2 class="logo_name">GYM <span class="white_text">FIT </span> </h2>
          </a></div>
        <div class="right-cont clearfix">
          <nav class="main-menu">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse clearfix">
              <ul class="nav navbar-nav navbar-right  ml-auto" id="onenav">
                <li class="nav-link home current"><a href="#home" class="js-scroll-trigger">HOME</a> </li>
                <li class="nav-link"><a href="#aboutus" class="js-scroll-trigger">ABOUT US</a> </li>
                <li class="nav-link"><a href="#course" class="js-scroll-trigger">COURSES</a></li>
                <li class="nav-link"><a href="#timetable" class="js-scroll-trigger">SCHEDULE</a></li>
                <li class="nav-link"><a href="#blog" class="js-scroll-trigger">BLOG</a></li>
                <li class="nav-link"><a href="#contact" class="js-scroll-trigger">CONTACT US</a></li>
                <li class="search-btn" onclick="openSearch()"><a><i class="fa fa-search"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </nav>
        </div>
        <div id="myOverlay" class="overlay"> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
            <form>
              <input type="text" placeholder="Enter your keywords..." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header end --> 
  
  <!-- Carousel start -->
  <section class="main-slider slide-wrapper" id="home">
    <div id="myCarousel" class="carousel slide"> 
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="first active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="last"></li>
      </ol>
            <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item item1 active">
          <div class="fill" style=" background-image:url(/images/b1.jpg);">
            <div class="inner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 iner_info">
                    <h2 class="wow fadeInUp animated img_animate">Fitness Complex Gym</h2>
                    <h3 class="wow fadeInUp animated title_animate">For AtHLetic Women</h3>
                    <a href="#contact" class="slider_readmore wow fadeInUp animated titlep_animate"><span>Contact Us</span> <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item item1">
          <div class="fill" style=" background-image:url(/images/b2.jpg);">
            <div class="inner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 iner_info">
                    <h2 class="wow fadeInUp animated img_animate">Fitness Complex Gym</h2>
                    <h3 class="wow fadeInUp animated title_animate">For AtHLetic Women</h3>
                    <a href="#contact" class="slider_readmore wow fadeInUp animated titlep_animate"><span>Contact Us</span> <i class="fa fa-arrow-right" aria-hidden="true"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item item1">
          <div class="fill" style=" background-image:url(/images/b3.jpg)">
            <div class="inner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 iner_info">
                    <h2 class="wow fadeInUp animated img_animate">Fitness Complex Gym</h2>
                    <h3 class="wow fadeInUp animated title_animate">For AtHLetic Women</h3>
                    <a href="#contact" class="slider_readmore wow fadeInUp animated titlep_animate"><span>Contact Us</span> <i class="fa fa-arrow-right" aria-hidden="true"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-up"></i> 
      <!-- <span class="sr-only">Previous</span> --> 
      </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-down"></i> 
      <!-- <span class="sr-only">Next</span> --> 
      </a> </div>
  </section>
  <!-- Carousel end --> 
  
  <!--Services start -->
  <section class="service">
    <div id="services" class="site-top-services">
      <div class="container">
        <div class="row">
          <div class="site-top-service-main">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="top-servic-box ser1">
                <figure> <img src="/images/s1.jpg" alt="gym-fitness"> </figure>
                <div class="content">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>OPENING HOURS</h2>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 borderbtm"> </div>
                    <br>
                    <H3> MON TO SAT </H3>
                    <h4>8:30AM - 6:00PM </h4>
                    <H3> SUNDAY </H3>
                    <h4>8:30AM - 4:00PM </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="top-servic-box ser2">
                <figure> <img src="/images/s2.jpg" alt="dance"> </figure>
                <div class="content">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>OUR SERVICES</h2>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 borderbtm"> </div>
                    <br>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service_info">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> <img src="/images/si1.png" alt=""> </div>
                    <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
                      <h5>PERSONAL TRAINING </h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service_info">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> <img src="/images/si2.png" alt=""> </div>
                    <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
                      <h5>FAT LOSS PROGRAM </h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Services end --> 
  
  <!--About start -->
  <section class="home_about_sec" id="aboutus">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home_about">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 aimg_sec">
              <div class="row"> <img src="/images/home_a.png" alt=""> </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ainfo_sec">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="title"><b> about</b><span class="green_text"> gym</span><span class="light_text">fit</span></h2>
                </div>
                <div class="col-sm-12">
                  <p>Cras faucibus in nunc sed volutpat. Duis ac elementum velit, vel ornare lacus. Phasellus eget tincidunt odio. </p>
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a convallis nibh. Sed laoreet lacus eu interdum euismod. Fusce condimentum, tortor in fringilla sollicitudin, eros dui blandit risus, sit amet dignissim arcu urna eget nibh. Vestibulum ultrices, libero nec ultrices fermentu.</p>
                  <a href="about.html" class="primary-btn"> Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--About start --> 
  
  <!--Coueses start -->
  <section class="home_course_sec" id="course">
    <div class="container">
      <div class="row">
        <h2 class="title"><b> our coueses</b></h2>
        <div class="coueses-container filter-list clearfixcol-xs-12 col-sm-12 col-md-12 col-lg-12">
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/c1.jpg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>kettlebell</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/c2.jpg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>Conjugate Methods</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/c3.jpg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>kettlebell</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/c4.jpg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>Weightlifting</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/c5.jpg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>Advanced Gymnastic</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/c6.jpg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>Striking</h4>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!--Coueses end --> 
  
  <!--Video start -->
  <section class="video_sec">
    <div class="container-fluid">
      <div class="row"> <a class="video-link" href="https://www.youtube.com/embed/AulGwjIv3m8" data-width="550" data-height="350"> <img src="/images/play.png" alt=""> </a>
        <h2>Explore Fitness Complex </h2>
        <h2 class="green_text"><a class="video-link" href="https://www.youtube.com/embed/AulGwjIv3m8" data-width="550" data-height="350"> Watch now</a></h2>
      </div>
    </div>
  </section>
  <!--Video end --> 
  
  <!--Team start -->
  <section class="team_sec">
    <div class="container">
      <div class="col-md-12">
        <h2 class="title"><b> Our TRainers</b></h2>
      </div>
      <div class="col-md-12">
        <div class="carousel">
          <div class="owl-carousel owl-theme ss_carousel col-md-12 col-xs-12 col-sm-12" id="slider1">
            <div class="item">
              <div class="team_box"><a href="#"><img src="/images/trainers-1.png" class="img-responsive" alt=""></a>
                <div class="overlay">
                  <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices metus nec sapien vestibulum.</p>
                    <div class="team_icon"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> </div>
                  </div>
                </div>
                <div class="text-content hvr-bounce-to-bottom">
                  <div class="text">
                    <h4>RACHEL ADAM</h4>
                    <h5>GYM TRAINER </h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_box"><a href="#"><img src="/images/trainers-2.png" class="img-responsive" alt=""></a>
                <div class="overlay">
                  <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices metus nec sapien vestibulum.</p>
                    <div class="team_icon"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> </div>
                  </div>
                </div>
                <div class="text-content hvr-bounce-to-bottom">
                  <div class="text">
                    <h4>RACHEL ADAM</h4>
                    <h5>GYM TRAINER </h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_box"><a href="#"><img src="/images/trainers-3.png" class="img-responsive" alt=""></a>
                <div class="overlay">
                  <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices metus nec sapien vestibulum.</p>
                    <div class="team_icon"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> </div>
                  </div>
                </div>
                <div class="text-content hvr-bounce-to-bottom">
                  <div class="text">
                    <h4>RACHEL ADAM</h4>
                    <h5>GYM TRAINER </h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_box"><a href="#"><img src="/images/trainers-4.png" class="img-responsive" alt=""></a>
                <div class="overlay">
                  <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices metus nec sapien vestibulum.</p>
                    <div class="team_icon"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> </div>
                  </div>
                </div>
                <div class="text-content hvr-bounce-to-bottom">
                  <div class="text">
                    <h4>RACHEL ADAM</h4>
                    <h5>GYM TRAINER </h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_box"><a href="#"><img src="/images/trainers-5.png" class="img-responsive" alt=""></a>
                <div class="overlay">
                  <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices metus nec sapien vestibulum.</p>
                    <div class="team_icon"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> </div>
                  </div>
                </div>
                <div class="text-content hvr-bounce-to-bottom">
                  <div class="text">
                    <h4>RACHEL ADAM</h4>
                    <h5>GYM TRAINER </h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_box"><a href="#"><img src="/images/trainers-6.png" class="img-responsive" alt=""></a>
                <div class="overlay">
                  <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices metus nec sapien vestibulum.</p>
                    <div class="team_icon"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> </div>
                  </div>
                </div>
                <div class="text-content hvr-bounce-to-bottom">
                  <div class="text">
                    <h4>RACHEL ADAM</h4>
                    <h5>GYM TRAINER </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Team end --> 
  
  <!--Timetable start -->
  <section class="timetable_sec" id="timetable">
    <div class="container">
      <div class="row">
        <h2 class="title"><b> Our timetable</b></h2>
        <div class="row">
        <ul class="filter-tabs clearfix anim-3-all wow fadeInUp animated day_tabs" id="filter-tabs" data-wow-delay="0ms" data-wow-duration="1000ms">
          <li class="filter active" data-filter=".Monday"  onclick="filterSelection('Monday')"><span class="btn-txt">Monday</span></li>
          <li class="filter" data-filter=".tuesday" onclick="filterSelection('tuesday')"><span class="btn-txt">tuesday</span></li>
          <li class="filter" data-filter=".Wednesday" onclick="filterSelection('Wednesday')"><span class="btn-txt">Wednesday</span></li>
          <li class="filter" data-filter=".Thursday" onclick="filterSelection('Thursday')"><span class="btn-txt">Thursday</span></li>
          <li class="filter" data-filter=".Friday" onclick="filterSelection('Friday')"><span class="btn-txt">Friday</span></li>
          <li class="filter" data-filter=".Saturday" onclick="filterSelection('Saturday')"><span class="btn-txt">Saturday</span></li>
          <li class="filter" data-filter=".sunday" onclick="filterSelection('sunday')"><span class="btn-txt">sunday</span></li>
        </ul>
        <select class="select filter-tabs clearfix wow fadeInUp animated select_day" onchange="filterSelection(this.value)" data-wow-delay="0ms" data-wow-duration="1000ms">
          <option  value="Monday">Monday</option>
          <option  value="tuesday">tuesday</option>
          <option  value="Wednesday">Wednesday</option>
          <option  value="Thursday">Thursday</option>
          <option  value="Friday">Friday</option>
          <option  value="Saturday">Saturday</option>
          <option  value="sunday">sunday</option>
        </select>
        <div class="projects-container filter-list clearfix wow fadeInUp animated col-sm-12 col-xs-12 col-md-12" data-wow-delay="300ms" data-wow-duration="1000ms">
          <div class="row">
            <article class="project-box wow col-md-3 col-sm-4 col-xs-6 hvr-rectangle-out">
              <div class="Monday mix_all Saturday text-content"> <img class="img-responsive" src="/images/size.png" alt=""> <br>
                <span class="time"> 06AM-08AM </span>
                <h4> Weight Loose </h4>
                <p> Rachel Adam </p>
              </div>
            </article>
            <article class="project-box wow col-md-3 col-sm-4 col-xs-6 hvr-rectangle-out">
              <div class="Monday mix_all Thursday sunday tuesday text-content"> <img class="img-responsive" src="/images/run.png" alt=""> <br>
                <span class="time"> 08AM-10AM </span>
                <h4> Cardio </h4>
                <p> Rachel Adam </p>
              </div>
            </article>
            <article class="project-box wow col-md-3 col-sm-4 col-xs-6 hvr-rectangle-out">
              <div class="Monday mix_all Friday text-content"> <img class="img-responsive" src="/images/yoga.png" alt=""> <br>
                <span class="time"> 10AM-01PM </span>
                <h4> yoga </h4>
                <p> Lefew D. Loee </p>
              </div>
            </article>
            <article class="project-box wow col-md-3 col-sm-4 col-xs-6 hvr-rectangle-out right-line_hide">
              <div class="text-content Monday mix_all  tuesday Wednesday sundays "> <img class="img-responsive" src="/images/body.png" alt=""> <br>
                <span class="time"> 01PM-02PM </span>
                <h4> Fitness </h4>
                <p> Rachel Adam </p>
              </div>
            </article>
            <article class="project-box wow col-md-3 col-sm-4 col-xs-6 hvr-rectangle-out bottomrow">
              <div class=" Monday mix_all  tuesday text-content"> <img class="img-responsive" src="/images/box.png" alt=""> <br>
                <span class="time"> 04PM-06PM </span>
                <h4> Karate </h4>
                <p> Keaf Shen </p>
              </div>
            </article>
            <article class="project-box wow col-md-3 col-sm-4 col-xs-6 hvr-rectangle-out bottomrow">
              <div class=" Monday mix_all Thursday Saturday Friday tuesday text-content"> <img class="img-responsive" src="/images/boxing-gloves.png" alt=""> <br>
                <span class="time"> 06PM-07PM </span>
                <h4> Boxing </h4>
                <p> Rachel Adam </p>
              </div>
            </article>
            <article class="project-box wow col-md-3 col-sm-4 col-xs-6 hvr-rectangle-out bottomrow">
              <div class="Monday mix_all Thursday Saturday sundays text-content"> <img class="img-responsive" src="/images/rope.png" alt=""> <br>
                <span class="time"> 07PM-08PM </span>
                <h4> Aerobics & Skipping </h4>
                <p> Lefew D. Loee </p>
              </div>
            </article>
            <article class="project-box wow col-md-3 col-sm-3 col-xs-6 hvr-rectangle-out right-line_hide bottomrow">
              <div class="Monday mix_all Saturday Friday Wednesday tuesday sundays text-content show"> <img class="img-responsive" src="/images/biceps.png" alt=""> <br>
                <span class="time"> 08PM-09PM </span>
                <h4>Body Building </h4>
                <p> Rachel Adam </p>
              </div>
            </article>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!--Timetable end --> 
  
  <!--Gallery start -->
  <div class="gallery">
    <div class="footer-gallery owl-carousel owl-theme ss_carousel" id="slider2">
      <div class="item"><a class="example-image-link" href="/images/gallery_1.jpg" data-lightbox="example-1"><img class="example-image" src="/images/gallery_1.png" alt="image-1" /></a></div>
      <div class="item"><a class="example-image-link" href="/images/gallery_2.jpg" data-lightbox="example-1"><img class="example-image" src="/images/gallery_2.png" alt="image-1" /></a></div>
      <div class="item"><a class="example-image-link" href="/images/gallery_3.jpg" data-lightbox="example-1"><img class="example-image" src="/images/gallery_3.png" alt="image-1" /></a></div>
      <div class="item"><a class="example-image-link" href="/images/gallery_1.jpg" data-lightbox="example-1"><img class="example-image" src="/images/gallery_1.png" alt="image-1" /></a></div>
     <div class="item"><a class="example-image-link" href="/images/gallery_5.jpg" data-lightbox="example-1"><img class="example-image" src="/images/gallery_5.png" alt="image-1" /></a></div>
     <div class="item"><a class="example-image-link" href="/images/gallery_2.jpg" data-lightbox="example-1"><img class="example-image" src="/images/gallery_2.png" alt="image-1" /></a></div>
    </div>
  </div>
  <!--Gallery end --> 
  
  <!--Blog start -->
  <section class="blog_sec" id="blog">
    <div class="container">
      <div class="row">
        <h2 class="title"><b> Our blog</b></h2>
        <div class="carousel">
          <div class="owl-carousel owl-theme ss_carousel col-md-12 col-xs-12 col-sm-12" id="slider3">
            <div class="item ">
              <div class="card">
                <div class="b_date"><img class="img-responsive" src="/images/blog_date.png" alt=""> <span>June<br>
                  09</span></div>
                <div class="blog_img"><a href="blog_detail.html"><img class="img-responsive" src="/images/blog1.jpg" alt=""></a></div>
                <div class="blog_info">
                  <h4><a href="blog_detail.html">Lorem ipsum dolor sit amet</a></h4>
                  <p>consectetur adipiscing elit. Mauris et luctus lorem, efficitur placerat sem. </p>
                </div>
              </div>
            </div>
            <div class="item ">
              <div class="card">
                <div class="b_date"> <img class="img-responsive" src="/images/blog_date.png" alt=""> <span>June<br>
                  10</span> </div>
                <div class="blog_img"><a href="blog_detail.html"><img class="img-responsive" src="/images/blog2.jpg" alt=""></a></div>
                <div class="blog_info">
                  <h4><a href="blog_detail.html">Lorem ipsum dolor sit amet</a></h4>
                  <p>consectetur adipiscing elit. Mauris et luctus lorem, efficitur placerat sem. </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="blog_img"><a href="blog_detail.html"><img class="img-responsive" src="/images/blog3.jpg" alt=""></a></div>
                <div class="b_date"> <img class="img-responsive" src="/images/blog_date.png" alt=""> <span>June<br>
                  20</span> </div>
                <div class="blog_info">
                  <h4><a href="blog_detail.html">Lorem ipsum dolor sit amet</a></h4>
                  <p>consectetur adipiscing elit. Mauris et luctus lorem, efficitur placerat sem. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog end --> 
  <!--Contact start -->
  <section id="contact" class="home_contact_sec">
    <div class="site-quick-support center-text site-dark-section-a">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-xs-12 col-md-7 col-lg-7 no-padding cbg">
            <div class="left">
              <h2>Get In touch</h2>
              <form id="contactForm" class="site-contact-form">
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                    <input type="text" name="name" placeholder="Name" required>
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                    <input type="email" name="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                    <input type="text" name="phone" placeholder="Phone" required>
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                    <textarea name="message" rows="3" placeholder="Message" required></textarea>
                  </div>
                </div>
                <div class="clearfix"> </div>
                <button type="submit" class="primary-btn"> SEND MESSAGE </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 no-padding hmap">
            <div class="right">
              <div class="site-google-map" id="site-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2945.271556591232!2d18.759313314962796!3d42.421954339184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134c33003f3efcfb%3A0x713eda3ede323413!2sFiluro!5e0!3m2!1sen!2s!4v1584003668068!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>        </div>
      </div>
    </div>
  </section>
  <!--Contact end --> 
  
  <!--Footer start -->
  <footer class="main-footer">
    
    <div class="container">
      <div class="footer-widget-area clearfix">
        <div class="footer-widget about-widget col-md-3 col-sm-6 col-xs-12"> <a href="#">
          <h2 class="logo_name">GYM <span class="white_text">FIT </span> </h2>
          </a>
          <div class="widget-about">
            <p>ligula sed porta cursus, lectus ligula interdum tortor, vitae tempor leo eros lobortis ante. Integer semper, metus in tincidunt euismod.</p>
            <div class="social"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a> <a class="fa fa-instagram" href="#"></a> <a class="fa fa-google-plus" href="#"></a></div>
          </div>
        </div>
        <div class="footer-widget quick-links col-md-2 col-sm-6 col-xs-12 ">
          <h4>LINKS</h4>
          <div class="widget-link">
            <ul>
              <li> <a href="#home">Home</a></li>
              <li> <a href="#aboutus">About Us</a></li>
              <li> <a href="#course">Coueses</a></li>
              <li> <a href="#timetable">Schedule</a></li>
              <li> <a href="#blog">Blog</a></li>
              <li> <a href="#contact">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-widget latest-work col-md-4 col-sm-6 col-xs-12 ">
          <h4>Instagram</h4>
          <div class="widget-post">
            <div class="clearfix">
              <figure class="image"><a href="#"><img src="/images/gallery_1.png" alt=""></a></figure>
              <figure class="image"><a href="#"><img src="/images/gallery_2.png" alt=""></a></figure>
              <figure class="image"><a href="#"><img src="/images/gallery_3.png" alt=""></a></figure>
              <figure class="image"><a href="#"><img src="/images/gallery_4.png" alt=""></a></figure>
              <figure class="image"><a href="#"><img src="/images/gallery_5.png" alt=""></a></figure>
              <figure class="image"><a href="#"><img src="/images/gallery_1.png" alt=""></a></figure>
            </div>
          </div>
        </div>
        <div class="footer-widget address col-md-3 col-sm-6 col-xs-12">
          <h4>Contact us</h4>
          <div class="widget-content">
            <div class="address_box"> <i class="fa fa-phone"></i>
              <p>123-1234-123</p>
            </div>
            <div class="address_box"> <i class="fa fa-envelope"></i>
              <p>Fitness@domain.com</p>
            </div>
            <div class="address_box1"> <i class="fa fa-map-marker"></i>
              <p>1011Santa Monica <br>
                boulevard Los Angeles</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="auto-container text-center">© 2018 <a href="#">GYMFIT.</a> With All rights reserved.</div>
    </div>
  </footer>
  <!--Footer end --> 
</div>
<a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a> 

<!-- jQuery --> 
<script src="/js/jquery.min.js"></script> 

<!-- Bootstrap --> 
<script src="/js/bootstrap.min.js"></script> 

<!-- ScrollToPlugin --> 
<script src="/js/ScrollToPlugin.min.js"></script> 

<!-- filter --> 
<script src="/js/jquery.isotope.min.js"></script> 

<!-- gallery_popup-->
<script src="/js/lightbox.js"></script>

<!-- carousel slider --> 
<script src="/js/wow.min.js"></script> 

<!-- wow --> 
<script src="/js/owl.carousel.js"></script> 

<!-- Global Init --> 
<script src="/js/custom.js"></script> 


</body>
</html>