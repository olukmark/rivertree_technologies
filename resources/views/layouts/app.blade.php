<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
    <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.php" class="mb-0"><img src="images/starface-logo.jpg"><span class="text-primary"></span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block p-0">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block p-0">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li class="">
                  <a href="who-we-are.php" class="nav-link">Who We Are</a>
                  <!--<ul class="dropdown">
                    <li><a href="#" class="nav-link">Stay at home</a></li>
                    <li><a href="#" class="nav-link">Keep social distancing</a></li>
                    <li><a href="#" class="nav-link">Wear facemasl</a></li>
                    <li><a href="#" class="nav-link">Wash your hands</a></li>
                    <li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul> -->
                </li>

                <li><a href="what-we-do.php" class="nav-link">What We Do</a></li>
                <li><a href="get-involved.php" class="nav-link">Get Involved</a></li>
                <li><a href="news.php" class="nav-link">News & Stories</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li><a href="art-cafe.php" class="nav-link">The Art Cafe</a></li>
                <!-- <li><a href="donate.php" class="btn bg-brown nopadding" style="padding: 10px; width: 120px;">Donate</a></li> -->
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="donate.php" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="site-footer mt-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-4  d-flex justify-content-center align-items-center">
            <div clas="p-2 m-2">
              <img src="images/starface-logo.png" style="max-height:100px">
            </div>
    
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4 my-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="who-we-are.php">Who We Are</a></li>
                  <li><a href="what-we-do.php">What We Do</a></li>
                  <li><a href="">Our Services</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="donate.php">Donate</a></li>
                </ul>
              </div>
              <div class="col-lg-4 my-3">
                <h2 class="footer-heading mb-4">Get in Touch</h2>
                <ul class="list-unstyled">
                  <p style="color: #00344f"><span class="icon-room mr-3" style="color: #00344f" ></span>Plot 3, Princess Road, Innovation village, Gulu</p>
                  <p style="color: #00344f"><span class="icon-envelope mr-3" style="color: #00344f"></span>info@rivertree.tech</p>
                  <p style="color: #00344f"><span class="icon-phone mr-3" style="color: #00344f"></span>+256782785992</a></p>
                </ul>
              </div>
              <div class="col-lg-4 my-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <div class="my-5">
                  <a href="https://www.facebook.com/rivertreetech" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="https://www.twitter.com/rivertreetech" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> StarFace CAMP. All rights reserved</a>
                </small></p>

              </div>
            </div>

          </div>
        </div>
      </div>
    </footer> <!--/footer-->


   <!-- Bootstrap 5 JS bundle -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
