<?php include('php/login.php') ?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style_register.css" rel="stylesheet">
</head>

<title>FinTax</title>
</head>

<body>


  <!-- Navbar Start -->
  <div class="container-fluid bg-purple">
    <div class="container">
      <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
        <a href="index.html" class="navbar-brand">
          <h1 class="text-primary mb-0 display-5">Fin<span class="text-white">Tax</span></h1>
        </a>
        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars text-dark"></span>
        </button>
        <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
          <div class="navbar-nav ms-auto">
            <a href="index.php" class="nav-item nav-link ">Home</a>
            <a href="aboutus.php" class="nav-item nav-link">O Nas</a>
            <a href="offer.php" class="nav-item nav-link">Oferta</a>
            <a href="login.php" class="nav-item nav-link active">Mój Profil</a>
            <a href="register.php" class="nav-item nav-link">Dołącz</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar Stop -->


  <div class="container padded animated slideInLeft">
    <div class="row">
      <div class="col-sm-8 col-md-6 offset-sm-2 offset-md-3">
        <form class="register-form" action="login.php" method="post">
          <h2 class="text-center purple-text">Logowanie</h2>
          <hr>
          <?php
                if (isset($_SESSION['error'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']); // Usunięcie komunikatu o błędzie po wyświetleniu
}



                ?>
          <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" placeholder="Wprowadź Email" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="password">Hasło</label>
            <input name="password" type="password" class="form-control" placeholder="Hasło" autocomplete="off">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label">Zapamiętaj Mnie</label>
          </div>
          <hr>
          <button type="submit" name="login_user" class="btn px-5 py-3 btn btn-primary border-2 rounded-pill float-right">Zaloguj</button>
          <p class="text-center mt-2 mb-0 float-left">Nie masz jeszcze konta? <a href="register.php" style="color: #fdf227;">Zarejestruj się</a></p>
        </form>

      </div>
    </div>
  </div>






  <footer class="text-white text-center text-lg-start bg-purple mt-auto">
    <div class="container p-4">
      <div class="row mt-4">

        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4" style="color:White">O FinTax</h5>

          <p>
            NIP: 640 170 31 31
          </p>

          <p>
            REGON: 243102614
          </p>

        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">ul. Ostatnia 3, 41-909 Bytom</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">hometom@tlen.pl</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">601 882 239</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4" style="color:White">Godziny Otwarcia Biura:</h5>

          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Poniedziałek - Piątek:</td>
                <td>8 - 21</td>
              </tr>
              <tr>
                <td>Sobota:</td>
                <td>8 - 19</td>
              </tr>
              <tr>
                <td>Niedziela:</td>
                <td>13 - 19</td>
              </tr>
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </footer>









  <!-- Grid container -->
  <!-- Back to Top -->
  <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>