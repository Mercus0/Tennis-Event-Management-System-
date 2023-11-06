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
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
                            <a class="nav-link active" href="#" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../about/about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../about/player.php">Players</a>
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
    <main>

        <div class="item2">
            <div class="s-container">
                <div class="Slides f">
                    <div class="numbertext">1 / 3</div>
                    <img src="../photos/1.jpeg" alt="" style="width:100%">
                </div>

                <div class="Slides f">
                    <div class="numbertext">2 / 3</div>
                    <img src="../photos/2.jpeg" alt="" style="width:100%">
                </div>

                <div class="Slides f">
                    <div class="numbertext">3 / 3</div>
                    <img src="../photos/3.jpeg" alt="" style="width:100%">
                </div>
            </div>
            <br>
            <?php if (isset($_GET["error"])): ?>
            <div class="alert alert-danger text-center" role="alert">
                <h5><strong>Hey.....</strong> You had already registered this event.</h5>
            </div>

        </div>
        <?php endif ?>
        <div class="text-center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <script src="home.js"></script>

        <!-- display events -->
        <div class="events">
            <?php
            include('../connection/connecter.php');
            $query = "select * from events";
            $result = mysqli_query($con, $query);
            $events = array();

            if ($result->num_rows > 0) {
                echo '<table style="margin: 0 auto;">';
                $cardCount = 0;

                while ($row = $result->fetch_assoc()) {
                    $events[] = $row;
                    $cardCount++;

                    if ($cardCount == 1) {
                        echo '<tr>';
                    }
                    ?>
            <td>
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="../photos/Logo-9.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $row['name']; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $row['description']; ?>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Start Date:
                            <?php echo $row['s_date']; ?>
                        </li>
                        <li class="list-group-item">Due Date:
                            <?php echo $row['e_date']; ?>
                        </li>
                        <li class="list-group-item">Location:
                            <?php echo $row['location']; ?>
                        </li>
                    </ul>
                    <?php
                            if (isset($_SESSION["sessionUser"])) { ?>
                    <div class="card-body">
                        <!-- Modal trigger button -->

                        <button type="button" class="btn btn-outline-danger btn-lg register-btn" data-bs-toggle="modal"
                            data-user-id="<?php echo $row['id'] ?>" data-bs-target="#modalId">
                            Register
                        </button>
                    </div>
                    <?php } else { ?>
                    <div class="card-body">
                        <a href="../login/loginpage.php" class="btn btn-outline-danger register-btn">Register</a>
                    </div>
                    <?php } ?>
                </div>
            </td>
            <?php
                    if ($cardCount == 4) {
                        echo '</tr>';
                        $cardCount = 0;
                    }
                }

                if ($cardCount > 0) {
                    while ($cardCount < 4) {
                        echo '<td></td>';
                        $cardCount++;
                    }
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo "No data found";
            }
            ?>
        </div>

        </div>
    </main>
    <!-- model for registerEvent -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-m" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Event Regristration Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="registerEvent.php" method="post" id="registerEvent">
                        <div class="row mb-2">
                            <div class="col-4">
                                <span class="badge bg-success">
                                    <h6>Event</h6>
                                </span>
                            </div>
                            <div class="col-8">
                                <h5><label id="eventNameLabel"></label></h5>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <span class="badge bg-success">
                                    <h6>Player</h6>
                                </span>
                            </div>
                            <div class="col-8">
                                <h5><label id="userNameLabel"></label></h5>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" Required>
                            <label class="form-check-label" for="flexCheckDefault">
                                The Privacy Policy applies to the personal information that BUC processes in connection
                                with the apps, websites, software, and related services (the “Services”).
                            </label>
                        </div>
                        <input type="hidden" name="eventId">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center line-under">
        <a class="btn btn-primary main-color-2-bg back-to-top" href="#top">TOP</a>
    </div>
    <footer>
        <!-- place footer here -->
        <div class="item3">
            <div class="container">
                <footer>
                    <div class="container d-flex justify-content-center py-5">
                        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2"
                            style="background-color: rgb(192, 89, 89);">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2"
                            style="background-color:rgb(192, 89, 89);">
                            <i class="fab fa-youtube"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2"
                            style="background-color: rgb(192, 89, 89);">
                            <i class="fab fa-instagram"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2"
                            style="background-color:rgb(192, 89, 89);">
                            <i class="fab fa-twitter"></i>
                        </button>
                    </div>
                    <div class="text-center text-white p-3" style="background-color: rgb(192, 89, 89)">
                        &copy; 2023 Copyright:
                        <a class="text-white" href="">BRITISH UNIVERCITY COLLEGE</a>
                    </div>
                </footer>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const updateModal = new bootstrap.Modal(document.getElementById('modalId'));
        const modalTitle = document.querySelector('#modalId .modal-title');
        const form = document.querySelector('#registerEvent');

        document.querySelectorAll('[data-bs-target="#modalId"]').forEach(function(button) {
            button.addEventListener('click', function() {
                const eventId = button.getAttribute('data-user-id');
                fetch('../admin/fetchEventData.php?id=' + eventId)
                    .then(response => response.json())
                    .then(data => {
                        const eventNameLabel = document.getElementById('eventNameLabel');
                        eventNameLabel.textContent = `${data.name}`;
                        form.eventId.value = eventId;
                    });
                updateModal.show();
            });
        });
    });
    </script>
    <!-- script for player name -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#registerEvent');
        document.querySelectorAll('[data-bs-target="#modalId"]').forEach(function(button) {
            button.addEventListener('click', function() {
                const eventId = "<?php echo $_SESSION["sessionUser"] ?>";
                fetch('../admin/fetchUserData.php?id=' + eventId)
                    .then(response => response.json())
                    .then(data => {
                        const eventNameLabel = document.getElementById('userNameLabel');
                        eventNameLabel.textContent = `${data.name}`;
                    });
                updateModal.show();
            });
        });
    });
    </script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/3fb7db82bc.js" crossorigin="anonymous"></script>
</body>

</html>