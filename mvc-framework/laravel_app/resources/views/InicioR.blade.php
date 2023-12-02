<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina Web Restaurante</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('InicioR.css') }}" />

  </head>

  <body class="back">
    <header class="nav-margin">
      <div class="fixed-top">
        <!-- ... (código de la barra de navegación) ... -->
        <nav class="navbar navbar-dark navbar sticky-top">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasDarkNavbar"
              aria-controls="offcanvasDarkNavbar"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ asset('registro') }}">
              <button class="button2" >
                Registrarse
            </button>
            <a class="navbar-brand" href="{{asset('Inisesion.php')}}">
              <button class="button2">
                Inicia Sesion
            </button>
            <a class="navbar-brand" href="#">
              <img src="{{asset('LogoFastFood2.png')}}" alt="" width="40" height="40">
              FastFood
            </a>
            <div
              class="offcanvas offcanvas-start text-bg-dark"
              tabindex="-1"
              id="offcanvasDarkNavbar"
              aria-labelledby="offcanvasDarkNavbarLabel"
              data-bs-scroll="true"
            >
              <div class="offcanvas-header">
                <img src="{{asset('LogoFastFood2.png')}}" alt="Bootstrap" width="150" height="150">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                  FastFood
                </h5>
                <button
                  type="button"
                  class="btn-close btn-close-white"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"
                      >Inicio</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Usuario</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Restaurantes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="form-reserva.html">Reservas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Cancelacion</a>
                  </li>

                </ul>
                
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section>
      <section class="section intro-section">
        <div class="container">
          <h2 class="text-center">Bienvenido a Nuestro Sitio</h2>
          <p class="lead text-center">
            Descubre los mejores restaurantes y disfruta de experiencias
            culinarias únicas.
          </p>
        </div>
      </section>

      <section class="section featured-restaurants">
        <div class="container">
          <h2 class="text-center2">Restaurantes Destacados</h2>
          <div
            id="carouselExampleAutoplaying"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="{{asset('Img/large1.jpeg')}}"
                  class="d-block w-100 h-100"
                  alt="..."
                  href="#"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('Img/large2.jpeg')}}"
                  class="d-block w-100 h-100"
                  alt="..."
                  href="#"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('Img/large3.jpeg')}}"
                  class="d-block w-100 h-100"
                  alt="..."
                  href="#"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>

      <!-- Categorias -->
      <div class="section flex1">
        <button class="btn-hover">
          Categorias
      </button>
        <div class="flex1">
        <div class="book Rectangle3 book-background1 flex2">
          <button class="btn2"> Shop now
          </button>
            <p>Desayuno</p>
            <div class="cover book-background2 flex2">
                <p>Desayuno</p>
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/rztizmkk.json"
                  trigger="hover"
                  style="width:150px;height:150px">
              </lord-icon>
            </div>
        </div>
        <div class="book Rectangle3 book-background1 flex2">
          <button class="btn2"> Shop now
          </button>
            <p>Almuerzo</p>
            <div class="cover book-background2 flex2">
                <p>Almuerzo</p>
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/yeoppmgu.json"
                  trigger="hover"
                  stroke="bold"
                  style="width:150px;height:150px">
              </lord-icon>
            </div>
        </div>
        <div class="book Rectangle3 book-background1 flex2">
          <button class="btn2"> Shop now
          </button>
            <p>Cena</p>
            <div class="cover book-background2 flex2">
                <p>Cena</p>
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/lqvpygov.json"
                  trigger="hover"
                  style="width:150px;height:150px">
              </lord-icon>
            </div>
        </div>
        <div class="book Rectangle3 book-background1 flex2">
          <button class="btn2"> Shop now
          </button>
            <p>Ofertas</p>
            <div class="cover book-background2 flex2">
                <p>Ofertas</p>
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/jhxhrsfe.json"
                  trigger="hover"
                  style="width:150px;height:150px">
              </lord-icon>
            </div>
        </div>
        <div class="book Rectangle3 book-background1 flex2">
          <button class="btn2"> Shop now
          </button>
            <p>Bebidas</p>
            <div class="cover book-background2 flex2">
                <p>Bebidas</p>
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/tckirjgy.json"
                  trigger="hover"
                  style="width:150px;height:150px">
              </lord-icon>
            </div>
        </div>
        <div class="book Rectangle3 book-background1 flex2">
          <button class="btn2"> Shop now
          </button>
            <p>Bar</p>
            <div class="cover book-background2 flex2">
                <p>Bar</p>
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/dvjujnbv.json"
                  trigger="hover"
                  colors="primary:#121331,secondary:#ebe6ef,tertiary:#eeca66,quaternary:#ffc738"
                  style="width:150px;height:150px">
              </lord-icon>
            </div>
        </div>
           <div class="book Rectangle3 book-background1 flex2">
            <button class="btn2"> Shop now
          </button>
            <p>Ranking</p>
            <div class="cover book-background2 flex2">
                <p>Ranking</p>
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/eodavnff.json"
                    trigger="hover"
                    style="width:150px;height:150px">
                </lord-icon>
            </div>
        </div>
           <div class="book Rectangle3 book-background1 flex2">
            <button class="btn2"> Shop now
          </button>
            <p>Pasteleria</p>
            <div class="cover book-background2 flex2">
                <p>Pasteleria</p>
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/joucdxcj.json"
                  trigger="hover"
                  style="width:150px;height:150px">
              </lord-icon>
            </div>
        </div>
      </div>
      </div>
    </section>
  </div>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
