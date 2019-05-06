<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('frontend/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/style.css')}}" rel="stylesheet">
</head>

<style type="text/css">

  .scrollable{
    height: 400px;
    overflow: scroll;
  }
</style>

<body>


<header>

  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">



  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Exchange
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pay.html">Payment Proof</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="testi.html">Testimonial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact us</a>
      </li>

      <!-- Dropdown -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/login" id="login"> <i class="fa fa-user"> Login</i></a>

      </li>
    </ul>

  </div>
  <!-- Collapsible content -->
</div>
</nav>
<!--/.Navbar-->
</header>


<div class="main-content">



@yield('frontend_content')





</div>

<!-- footer -->

<!-- footer -->

<footer class="footer-one" style="background:#eee;">
    <div class="container">
      <div class="row" style="padding:40px;">
        <div class="col-lg-4">
          <div class="block-1">
            <h3 class="footer-logo">UsdExangeBd</h3>
            <p class="content-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            </p>
            <div class="content">

              <ul>
                <li>
                  <a href="#">About Us</a>
                </li>
                <li>
                  <a href="#">Term and Condition</a>
                </li>
                <li>
                  <a href="#">What our customers say</a>
                </li>
                <li>
                  <a href="#">Privency Policy</a>
                </li>
                <li>
                  <a href="#">Contact our buyers</a>
                </li>
              </ul>

            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="block-2">
            <h3>Contact Us</h3>
            <div class="contact-us">
              <div class="title-content">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span>Address :</span>
              </div>
              <div class="content-contact address-contact">
                <p>123 Suspendis matti, Visaosang Building VST District NY Accums, North American</p>
              </div>

              <div class="title-content">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>Email :</span>
              </div>
              <div class="content-contact mail-contact">
                <p>support@domain.com</p>
              </div>

              <div class="title-content">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>Hotline :</span>
              </div>
              <div class="content-contact phone-contact">
                <p>+0012-345-67890</p>
              </div>

              <div class="title-content">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span>Opening Hours :</span>
              </div>
              <div class="content-contact hours-contact">
                <p>Monday - Sunday / 08.00AM - 19.00</p>
                <span>(Except Holidays)</span>
              </div>



            </div>

          </div>

        </div>
        <div class="col-lg-4">
          <div class="block-3">
            <h3>Follow us on</h3>
            <a class="btn-floating btn-lg purple-gradient" target="_blank"><i class="fa fa-facebook"></i></a>
            <a class="btn-floating btn-lg purple-gradient" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="btn-floating btn-lg purple-gradient" target="_blank"><i class="fa fa-google"></i></a>
            <a class="btn-floating btn-lg purple-gradient" target="_blank"><i class="fa fa-linkedin"></i></a>


            <div class="payment-content mt-4">
              <div class="title-block">
                Payment accept
              </div>
              <div class="payment-image">
                <img class="img-fluid" src="{{asset('/frontend/img/home/payment.png')}}" alt="img">
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div id="tiva-copyright">
      <div class="container">
        <div class="row">
          <div class="text-center col-lg-12 ">
            <span>
              <a href="https://www.templatespoint.net" target="_blank" style="padding:20px;">Sparktec-it</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </footer>










  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('frontend/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('frontend/js/mdb.min.js')}}"></script>
  <script>
    $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
  </script>
</body>

</html>
