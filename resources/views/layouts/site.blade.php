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
    @yield('content')

    @yield('cta')


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
