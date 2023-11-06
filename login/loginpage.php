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
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <section class="vh-100">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 text-black">
            <div class="d-flex align-items-center h-custom-2 px-5 mt-5 pt-5 ms-5">
              <form style="width: 23rem;" action="login.php" method="POST">
                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                <div class="mb-3">
                    <?php if (isset($_GET["incorrect"])): ?>
                      <div class="alert alert-warning">
                        Incorrect Email or Password
                      </div>
                    <?php endif ?>
                </div>
                <div class="form-outline mb-5">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" />
                </div>

                <div class="form-outline mb-5">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                </div>

                <div class="pt-1 mb-4">
                  <button class="btn btn-outline-danger btn-lg" type="submit">Login</button>
                </div>
                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                <p>Don't have an account? <a href="../register/registerPage.php" class="link-info text-danger">Register
                    here</a></p>
              </form>
            </div>
          </div>
          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="../photos/tennisPhoto.jpg" alt="Login image" class="w-100 vh-100"
              style="object-fit: cover; object-position:left;">
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