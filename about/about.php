<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../photos/TMC-logo.png" width="120" height="40" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../homepage/home.php" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="player.php">Players</a>
                        </li>
                        <li>
                            <form class="d-flex my-2 my-lg-0">
                                <input class="form-control me-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                    <?php
                    if (isset($_SESSION["sessionUser"])) { ?>
                    <form class="d-flex">
                        <div class="dropdown">
                            <button class="btn btn-outline-danger dropdown-toggle" type="button" id="triggerId"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas far fa-user-circle"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="../userProfile/userProfile.php">Profile</a>
                                <a class="dropdown-item text-danger" href="../homepage/logout.php">Logout</a>
                            </div>
                        </div>
                    </form>
                    <?php } else { ?>
                    <form class="d-flex my-lg-0">
                        <a href="../login/loginpage.php" class="btn btn-outline-danger btn-lg me-3">Login</a>
                        <a href="../register/register.html" class="btn btn-outline-danger btn-lg">Sign Up</a>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- About 1 - Bootstrap Brain Component -->
        <section class="py-3 py-md-5">
            <div class="container">
                <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                    <div class="col-12 col-lg-6 col-xl-5">
                        <img class="img-fluid rounded" loading="lazy" src="../photos/about.jpg" alt="About 1">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="row justify-content-xl-center">
                            <div class="col-12 col-xl-11">
                                <h2 class="mb-3">TMC Tennis Club</h2>
                                <p class="lead fs-4 text-secondary mb-3">The TMC was founded to build camaraderie in a highly welcoming atmosphere unique to a club that combines social activities and athletics. Our squash leagues, frequent tournaments, and lively social events provide countless opportunities for the new and seasoned member to enjoy the club
                                </p>
                                <p class="mb-5">The Tennis and Racquet Club is located at 939 Boylston Street, in the Back Bay neighborhood of Boston, Massachusetts. Designed by Parker and Thomas in the classical revival style, and built by Frank L. Whitcomb in 1902, the Tennis and Racquet Club is representative of the ornate private clubs constructed in Boston during the turn of the century. The Club still contains its original court tennis court and racquets court. Today the club also has three international and three North American squash courts, and remains the oldest athletic and social club in the city.</p>
                                <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                    <div class="col-12 col-md-6">
                                        <div class="d-flex">
                                            <div class="me-4 text-primary">
                                            <i class="fa fa-cog"></i>
                                                <!-- logo is here -->
                                            </div>
                                            <div>
                                                <h2 class="h4 mb-3">Versatile Brand</h2>
                                                <p class="text-secondary mb-0">We are crafting a digital method that
                                                    subsists life across all mediums.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="d-flex">
                                            <div class="me-4 text-primary">
                                                <!-- logo is here -->
                                            </div>
                                            <div>
                                                <h2 class="h4 mb-3">Digital Agency</h2>
                                                <p class="text-secondary mb-0">We believe in innovation by merging
                                                    primary with elaborate ideas.</p>
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
        <!-- member are here -->
        <div class="bg-light py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">Our Founders</h2>
        <p class="font-italic text-muted">These are four main Person of our TMC club.</p>
      </div>
    </div>

    <div class="row text-center">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="../photos/jl.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">John Lee</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="../photos/macintyre.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Macintyre</h5><span class="small text-uppercase text-muted">Co-Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="../photos/zar.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Dr.Zar Zar</h5><span class="small text-uppercase text-muted">CO-Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://alchetron.com/cdn/l-south-korean-singer-ad525f99-8c06-4bc5-aa10-90a4577bac7-resize-750.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Yan Naing</h5><span class="small text-uppercase text-muted">CO-Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/3fb7db82bc.js" crossorigin="anonymous"></script>
</body>

</html>