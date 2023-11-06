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
    <link rel="stylesheet" href="player.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
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
                            <a class="nav-link active" href="../homepage/home.php" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Players</a>
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
                                <a class="dropdown-item text-danger" href="logout.php">Logout</a>
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
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/2746187/pexels-photo-2746187.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/381843/pexels-photo-381843.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/2746187/pexels-photo-2746187.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/381843/pexels-photo-381843.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="container">
            <!-- title -->
            <div class="title">
                <h2>our reviews</h2>
                <div class="underline"></div>
            </div>
            <!-- review -->
            <article class="review">
                <div class="img-container">
                    <img src="person-1.jpeg" id="person-img" alt="" />
                </div>
                <h4 id="author">sara jones</h4>
                <p id="job">ux designer</p>
                <p id="info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
                    asperiores debitis incidunt, eius earum ipsam cupiditate libero?
                    Iste, doloremque nihil?
                </p>
                <!-- prev next buttons-->
                <div class="button-container">
                    <button class="prev-btn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="next-btn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <!-- random button -->
                <button class="random-btn">surprise me</button>
            </article>
        </section>
    </main>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script>
    const reviews = [{
            id: 1,
            name: 'susan smith',
            job: 'web developer',
            img: 'https://www.course-api.com/images/people/person-1.jpeg',
            text: "I'm baby meggings twee health goth +1. Bicycle rights tumeric chartreuse before they sold out chambray pop-up. Shaman humblebrag pickled coloring book salvia hoodie, cold-pressed four dollar toast everyday carry",
        },
        {
            id: 2,
            name: 'anna johnson',
            job: 'web designer',
            img: 'https://www.course-api.com/images/people/person-2.jpeg',
            text: 'Helvetica artisan kinfolk thundercats lumbersexual blue bottle. Disrupt glossier gastropub deep v vice franzen hell of brooklyn twee enamel pin fashion axe.photo booth jean shorts artisan narwhal.',
        },
        {
            id: 3,
            name: 'peter jones',
            job: 'intern',
            img: 'https://www.course-api.com/images/people/person-4.jpeg',
            text: 'Sriracha literally flexitarian irony, vape marfa unicorn. Glossier tattooed 8-bit, fixie waistcoat offal activated charcoal slow-carb marfa hell of pabst raclette post-ironic jianbing swag.',
        },
        {
            id: 4,
            name: 'bill anderson',
            job: 'the boss',
            img: 'https://www.course-api.com/images/people/person-3.jpeg',
            text: 'Edison bulb put a bird on it humblebrag, marfa pok pok heirloom fashion axe cray stumptown venmo actually seitan. VHS farm-to-table schlitz, edison bulb pop-up 3 wolf moon tote bag street art shabby chic. ',
        },
    ];
    // select items
    const img = document.getElementById('person-img');
    const author = document.getElementById('author');
    const job = document.getElementById('job');
    const info = document.getElementById('info');

    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const randomBtn = document.querySelector('.random-btn');

    // set starting item
    let currentItem = 0;

    // load initial item
    window.addEventListener('DOMContentLoaded', function() {
        const item = reviews[currentItem];
        img.src = item.img;
        author.textContent = item.name;
        job.textContent = item.job;
        info.textContent = item.text;
    });

    // show person based on item
    function showPerson(person) {
        const item = reviews[person];
        img.src = item.img;
        author.textContent = item.name;
        job.textContent = item.job;
        info.textContent = item.text;
    }
    // show next person
    nextBtn.addEventListener('click', function() {
        currentItem++;
        if (currentItem > reviews.length - 1) {
            currentItem = 0;
        }
        showPerson(currentItem);
    });
    // show prev person
    prevBtn.addEventListener('click', function() {
        currentItem--;
        if (currentItem < 0) {
            currentItem = reviews.length - 1;
        }
        showPerson(currentItem);
    });
    // show random person
    randomBtn.addEventListener('click', function() {
        console.log('hello');

        currentItem = Math.floor(Math.random() * reviews.length);
        showPerson(currentItem);
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

</body>

</html>