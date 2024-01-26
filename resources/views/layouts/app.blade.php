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
     <!-- Header -->

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
                  <p style="color: #00344f"><span class="icon-room mr-3" style="color: #00344f" ></span>Plot 3, Obote Avenue</p>
                  <p style="color: #00344f"><span class="icon-envelope mr-3" style="color: #00344f"></span>info@rivertree.tech</p>
                  <p style="color: #00344f"><span class="icon-phone mr-3" style="color: #00344f"></span>+256771404884</a></p>
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
