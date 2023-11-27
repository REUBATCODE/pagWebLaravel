<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css"><!--Bootstrap-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,500&display=swap" rel="stylesheet">

    <title>Typical LoL Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbarEpico">
        <a class="navbar-brand" href="#">League of Legends</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Champs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Carrusel-->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/wall1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/wall2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/wall3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Primer bloque-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my-auto">
                <h3 class="texto_simple txtTitulo">BLOODMOON IS RISING</h3>
                <p class="texto_simple">

                    In the night, when the moon turns <span class="txtResaltado">red</span>,<br>
                    A world of darkness, where legends are spread.<br>
                    <span class="txtResaltado">Luna de Sangre,</span> a sight so rare,<br>
                    In the League of Legends, we all dare.<br><br>

                    Beneath the crimson lunar gaze,<br>
                    Champions clash in fierce displays.<br>
                    Their destinies entwined in this bloody tide,<br>
                    With every fight, they must decide.
            </div>
        </div>
    </div>
    <!--Segundo bloque-->
    <div class="container-fluid">
        <div class="row segundoBloque">
            <div class="col-4">
                <div class="card">
                    <img src="{{asset('img/card1.png')}}" class="card-img-top" alt="Imagen 1">
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="img/card2.png" class="card-img-top" alt="Imagen 2">
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="img/card3.png" class="card-img-top" alt="Imagen 3">
                </div>
            </div>
        </div>
    </div>
    <!--Hero-->
    <div class="container-fluid hero">
        <div class="row">
            <div class="col-8 my-auto">
                <h3 class="texto_simple primeraLinea">CHOOSE YOUR <br><span class="resaltado1">CHAMPION</span></h3>
                <p class="texto_simple">Whether you like to dive straight into the fray, support your teammates, or <br>something in between, there's a spot for you in the Rift.</p>
            </div>
            <div class="col-4 my-auto">
                <div class="col-4 text-center">
                    <img src="{{asset('img/hero2.png')}}" alt="Imagen de Bard" class="img-redimensionada imgHero">
                </div>
            </div>
        </div>
    </div>
    <!--Cuarto bloque-->
    <div class="container-fluid text-center leyendasNunca">
        <div class="row">
            <h2 class="txtTitulo">"LEGENDS <span class="txtResaltado">NEVER</span> DIE"</h2>
            <p>When the World is calling you...</p>
        </div>
    </div>


    <!--Sexto bloque-->
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                <img src="./img/champs.png" alt="">
            </div>
        </div>
    </div>
    <!--Séptimo bloque-->
    <div class="container-fluid leyendasNunca">
        <div class="row text-center">
            <h2 class="txtTitulo leyendasNunca">CHOOSE YOUR TODAY'S FAVORITE CHAMPION</h2>
        </div>
        <div class="row text-center">
            <div class="col-6">
                    <img src="./img/card7.png" class="imgVertical card-img-top" alt="Pantheon Image"><br>
                    <button class="btnBasico leyendasNunca">Pantheon</button>
            </div>
            <div class="col-6">
                    <img src="./img/card8.png" class="imgVertical card-img-top" alt="Seraphine Image"><br>
                    <button class="btnBasico leyendasNunca">Seraphine</button>
            </div>
        </div>
    </div>
     <!-- Call To Action -->
     <div class="container-fluid callToAction">
        <div class="container-fluid callToAction leyendasNunca">
            <div class="row segundoBloque">
                <div class="col-4">
                    <div class="card">
                        <img src="img/card4.png" class="card-img-top " alt="Imagen 1">
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="img/card5.png" class="card-img-top " alt="Imagen 2">
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="img/card6.png" class="card-img-top " alt="Imagen 3">
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 text text-center">
                <h2 class="txtTitulo">WHO WOULD WIN BETWEEN THESE CHAMPS?</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <button class="btn btnBasico leyendasNunca">
                    Lemme guess...
                </button>
            </div>
        </div>
    </div>
    <!--Informativo-->
    <div class="container">
        <div class="row leyendasNunca">
            <div class="col-12 d-flex justify-content-center">
                <!-- Formulario de contacto -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact</h5>
                        <form>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your email">
                            </div>
                            <div class="mb-3">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Your message"></textarea>
                            </div>
                            <button type="submit" class="btn btnBasico">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('footer')
    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contact</h4>
                    <p>Antonia Ruiz 17<br>Hermosillo, Mexico</p>
                    <p>Email: a22311151@uthermosillo.edu.mx<br> Phone Number: (662) 4662 225</p>
                </div>
                <div class="col-md-6">
                    <h4>Links</h4>
                    <ul class="unstyled-list">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </div>
            <!-- Línea horizontal de separación -->
            <hr>
            <!-- Íconos de redes sociales -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="list-inline social-icons">
                        <li class="list-inline-item"><a href="#" class="fa fa-facebook marginBot"></a></li>
                        <li class="list-inline-item"><a href="#" class="fa fa-twitter marginBot"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js">

    </script>
    <script src="https://kit.fontawesome.com/0fc5378e30.js" crossorigin="anonymous"></script>

</body>
</html>
