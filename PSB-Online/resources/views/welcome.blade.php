<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PSB-Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav nav-underline ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home-web" class="home-web">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="typography-tittle">
                        Explore Your Academic Journey at SMA Negeri 5 Gowa (SMUDAMA).
                    </h2>
                    <p class="typography-text">Welcome to the application process for SMA Negeri 5 Gowa (SMUDAMA), where
                        educational excellence knows no boundaries. Embark on a journey of discovery and endless
                        possibilities as you apply to join our academic community.
                    </p>
                    <div class="button-container-icon">
                        <a href="register" class="btn btn-primary custom-button-home" type="submit">Register Now</a>
                    </div>
                </div>
                <div class="col">
                    <!-- Video YouTube Embed -->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/h3Z3Nvb0S7s" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <h2 class="typography-tittle">Photo Gallery</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/img1.jpg" alt="Photo 1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="img/img2.jpg" alt="Photo 2" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="img/img3.jpg" alt="Photo 3" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="img/img4.jpg" alt="Photo 4" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="img/img5.jpg" alt="Photo 5" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="img/img6.jpg" alt="Photo 6" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="img/img7.jpg" alt="Photo 7" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="img/img8.jpg" alt="Photo 8" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="img/img9.jpg" alt="Photo 9" class="img-fluid">
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>