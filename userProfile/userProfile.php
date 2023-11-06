<?php
session_start();
include("../connection/connecter.php");
$id = $_SESSION["sessionUser"];
$query = "SELECT * FROM users WHERE id=$id";
mysqli_select_db($con, 'tennis');
$user = mysqli_query($con, $query);
$row = mysqli_fetch_array($user, MYSQLI_ASSOC);

$queryEvent = "SELECT * FROM regristration WHERE user_id=$id";
$events = mysqli_query($con, $queryEvent);
$rowEvent = mysqli_num_rows($events);
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

</head>

<body>
    <header>
    </header>
    <main>
        <div class="container emp-profile mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                            class="img-rounded" alt="" />
                        <div class="file btn btn-sm btn-primary">
                            <input type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="profile-head">
                        <h5>
                            <p class="badge bg-success">
                                <?php echo $row['name']; ?>
                            </p>
                        </h5>
                        <h5 class="text-primary">
                            British Univesity College
                        </h5>
                        <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="badge bg-info">User Id</label>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <?php echo $row['id'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="badge bg-info">Name</label>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <?php echo $row['name'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="badge bg-info">Email</label>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <?php echo $row['email'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="badge bg-info">Password</label>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <?php echo $row['password'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="badge bg-info">Gender</label>
                                </div>
                                <div class="col-md-10">
                                    <?php
                                    if ($row['gender'] == 0) {
                                        echo '<p>Male</p>';
                                    } else {
                                        echo '<p>Female</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="badge bg-info">Age</label>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <?php echo $row['age'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="badge bg-info">Phone</label>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <?php echo $row['phone'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="badge bg-info">Address</label>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <?php echo $row['address'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-8">
                    <h1 class="mt-5 mb-5">
                        Registered Events
                        <span class="badge bg-danger text-white">
                            <?php
                            if ($rowEvent > 0) {
                                echo $rowEvent;
                            } else {
                                echo "0";
                            }
                            ?>
                        </span>
                    </h1>
                </div>
            </div>
            <?php if ($rowEvent > 0) { ?>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8">
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $queryForTable="SELECT DISTINCT name,s_date,location FROM events e JOIN regristration r ON e.id=r.event_id WHERE r.user_id=$id";
                                    $result=mysqli_query($con, $queryForTable);
                                    $events=array();
                                    $count=0;
                                    while ($row = $result->fetch_array()) {
                                        $count++;
                                        $events[] = $row;
                                            echo '<tr>';
                                            echo "<td>$count</td>";
                                            echo "<td>".$row['name']."</td>";
                                            echo "<td>".$row['s_date']."</td>";
                                            echo "<td>".$row['location']."</td>";
                                            echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>
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

<body>

    </form>