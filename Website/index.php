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
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="aboutus.html" class="nav-item nav-link">O Nas</a>
            <a href="offer.html" class="nav-item nav-link">Oferta</a>
            <a href="project.html" class="nav-item nav-link">Newsletter</a>
            <a href="profile.html" class="nav-item nav-link">Mój Profil</a>
            <a href="register.html" class="nav-item nav-link">Dołącz</a>

          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar Stop -->

  <!-- Carousel Start -->
  <div class="container-fluid carousel px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="First slide">
          <div class="carousel-caption">
            <div class="container carousel-content">
              <h4 class="text-white mb-4 animated slideInDown shadow-text">FinTax - Biuro Rachunkowe</h4>
              <h1 class="text-white display-1 mb-4 animated slideInDown shadow-text">Z Chęcią zajmiemy się finansami w Twojej firmie i uporządkujemy rachunkowości</h1>
              <a href="" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Sprawdź Naszą Ofertę</button></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Second slide">
          <div class="carousel-caption">
            <div class="container carousel-content">
              <h4 class="text-white mb-4 animated slideInDown shadow-text" >FinTax - Biuro Rachunkowe</h4>
              <h1 class="text-white display-1 mb-4 animated slideInDown shadow-text">Z Chęcią zajmiemy się finansami w Twojej firmie i uporządkujemy rachunkowości</h1>
              <a href="" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Sprawdź Naszą Ofertę</button></a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel Stop -->

  <!-- H2 Start -->
  <div class="container-fluid start_text">
    <div class="container text-center py-3">
      <div class="text-center mb-5 wow fadeInUp shadow-text" data-wow-delay=".3s">
        <h2 class="display-5">Istniejemy, aby służyć pomocą i radą naszym klientom na ich warunkach, zawsze i wszędzie i w każdy możliwy sposób.</h2>
      </div>
    </div>
  </div>
  <!-- H2 Stop -->


  <!-- Services Start -->
  <div class="container-fluid services py-5">
    <div class="container text-center py-5">
      <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Informacje o nas</h5>
        <h1 class="display-5">FinTax</h1>
      </div>
      <div class="row g-5">
        <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
          <div class="bg-light rounded p-5 services-item">
            <div class="d-flex" style="align-items: center; justify-content: center;">
              <div class="mb-4 rounded-circle services-inner-icon">
                <i class="fa fa-spider fa-3x text-primary"></i>
              </div>
            </div>
            <h4>Siedziba</h4>
            <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Więcej</button>
          </div>
        </div>
        <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
          <div class="bg-light rounded p-5 services-item">
            <div class="d-flex" style="align-items: center; justify-content: center;">
              <div class="mb-4 rounded-circle services-inner-icon">
                <i class="fa fa-spider fa-3x text-primary"></i>
              </div>
            </div>
            <h4 class="text-center">Zadzwoń</h4>
            <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Więcej</button>
          </div>
        </div>
        <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
          <div class="bg-light rounded p-5 services-item">
            <div class="d-flex" style="align-items: center; justify-content: center;">
              <div class="mb-4 rounded-circle services-inner-icon">
                <i class="fa fa-spider fa-3x text-primary"></i>
              </div>
            </div>
            <h4 class="text-center">Godziny Biura</h4>
            <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Więcej</button>
          </div>
        </div>
        <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".9s">
          <div class="bg-light rounded p-5 services-item">
            <div class="d-flex" style="align-items: center; justify-content: center;">
              <div class="mb-4 rounded-circle services-inner-icon">
                <i class="fa fa-spider fa-3x text-primary"></i>
              </div>
            </div>
            <h4 class="text-center">Email</h4>
            <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Więcej</button>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-4 wow fadeInUp" data-wow-delay=".3s">Więcj Informacji o Nas</button>
    </div>
  </div>
  <!-- Services End -->

  <!-- H2 Start -->
  <div class="container-fluid start_text py-3">
    <div class="container text-center py-3">
      <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
        <h2 class="display-5 shadow-text">Współpracujemy również z kancelarią Radcy Prawnego, instruktorami BHP, Zakładem Medycyny Pracy, pośrednikami finansowymi, agencjami reklamowymi, co pozwala nam zaoferować Państwu obsługę daleko wykraczającą poza ramy tradycyjnie rozumianego doradztwa podatkowego czy biura rachunkowego.</h2>
      </div>
    </div>
  </div>
  <!-- H2 Stop -->


  <!-- About Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
          <div class="about-img">
            <div class="rotate-left bg-dark"></div>
            <div class="rotate-right bg-dark"></div>
            <img src="img/about-img.jpg" class="img-fluid h-100" alt="img">
            <div class="bg-white experiences">
              <h1 class="display-3">27</h1>
              <h6 class="fw-bold">Lat Doświadczenia </h6>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
          <div class="about-item overflow-hidden">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">O FinTax</h5>
            <h1 class="display-5 mb-2 ">Nasza Historia i Dla Kogo Jesteśmy</h1>
            <p class="fs-5 " style="text-align: justify;">Spółka powstała w 1996 roku na bazie dotychczasowych doświadczeń i kontaktów w zakresie prowadzenia kompleksowych
              usług rachunkowości dla małych i średnich przedsiębiorstw z terenu Śląska i okolic.</p>
            <div class="row">
              <div class="col-3">
                <div class="text-center">
                  <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                    <i class="fas fa-city fa-4x text-primary"></i>
                  </div>
                  <div class="my-2">
                    <h5>Obsługa</h5>
                    <h5>Doradcza</h5>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="text-center">
                  <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                    <i class="fas fa-school fa-4x text-primary"></i>
                  </div>
                  <div class="my-2">
                    <h5>Obsługa</h5>
                    <h5>Księgowa</h5>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="text-center">
                  <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                    <i class="fas fa-warehouse fa-4x text-primary"></i>
                  </div>
                  <div class="my-2">
                    <h5>Obsługa</h5>
                    <h5>Gospodarcza</h5>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="text-center">
                  <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                    <i class="fas fa-hospital fa-4x text-primary"></i>
                  </div>
                  <div class="my-2">
                    <h5>Obsługa</h5>
                    <h5>Audytowa</h5>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">Więcej Naszych Usług</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->




  <footer class="text-white text-center text-lg-start bg-purple">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4" style="color:White">O FinTax</h5>

          <p>
            Tutaj Będzie NIP:
          </p>

          <p>
            Firma wpisana do Rejestru Przedsiębiorców KRS
            pod numerem:
          </p>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Adres Biura</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">mail@Do.Biura</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">Numer Do Biura</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">Fax do Biura</span>
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
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
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
