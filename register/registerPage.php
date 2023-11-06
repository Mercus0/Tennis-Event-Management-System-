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
    <link rel="stylesheet" href="register.css">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <section class="text-center">
            <div class="bg-image text-center" style="background-color:#ff8080; height:300px">
                <img src="../photos/TMC-logo.png" height="200px" alt="">
            </div>
            <div class="card shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
                <div class="card-body py-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5">Sign up now</h2>

                            <div class="container">
                                <form action="register.php" method="post" name="addUser">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                    <?php if (isset($_GET["nameErr"])): ?>
                                    <div class="alert alert-danger">
                                        Please Enter Your Name
                                    </div>
                                    <?php endif ?>

                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                    <?php if (isset($_GET["emailErr"])): ?>
                                    <div class="alert alert-danger">
                                        Please Enter Your Email
                                    </div>
                                    <?php endif ?>
                                    <?php if (isset($_GET["emailErr1"])): ?>
                                    <div class="alert alert-danger">
                                        Invalid Email
                                    </div>
                                    <?php endif ?>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password">
                                        </div>
                                        <div class="col-6">
                                            <input type="password" name="confirmPassword" class="form-control"
                                                placeholder="Comfirm Password">
                                        </div>
                                        <?php if (isset($_GET["passErr"])): ?>
                                        <div class="alert alert-danger">
                                            Password and Confirm Password are not equal.
                                        </div>
                                        <?php endif ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <select class="form-select" name="gender">
                                                <option value="0" selected>Male</option>
                                                <option value="1">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <input type="number" name="age" class="form-control" placeholder="age">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Phone Number">
                                        </div>
                                        <?php if (isset($_GET["ageErr"])): ?>
                                        <div class="alert alert-danger">
                                            Invalid Age or Please Enter Your Age
                                        </div>
                                        <?php endif ?>

                                        <?php if (isset($_GET["phoneErr"])): ?>
                                        <div class="alert alert-danger">
                                            Please Enter the correct Phone Number
                                        </div>
                                        <?php endif ?>
                                    </div>

                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                    <?php if (isset($_GET["addErr"])): ?>
                                        <div class="alert alert-danger">
                                            Please Enter the correct Address
                                        </div>
                                        <?php endif ?>
                                    <button type="submit" value="submit"
                                        class="btn btn-lg btn-outline-danger mb-4 mt-4">Sign up</button>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Already Have? <a
                                            href="../login/loginPage.php" style="color: #393f81;" class="text-danger"> Sign
                                            in </a></p>
                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
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
</body>

</html>