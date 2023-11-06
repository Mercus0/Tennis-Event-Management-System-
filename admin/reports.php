<?php
session_start();
include('..\connection\connecter.php');
$id = $_SESSION["sessionUser"];
$queryForTable = "SELECT u.name AS user,e.name AS event from users u JOIN regristration r ON u.id=r.user_id JOIN events e ON r.event_id=e.id;";
$result = mysqli_query($con, $queryForTable);
$row = mysqli_num_rows($result);
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
    <div class="container-fluid">
        <div class="row g-0">
            <nav class="col-2 bg-light pe-3">

                <h1 class="h4 py-4 text-center text-primary">
                    <img src="/COS108/photos/TMC-logo.png" width="200px" alt="">
                </h1>

                <div class="list-group text-center text-lg-start">
                    <span class="list-group-item disabled d-none d-lg-block">
                        <small>CONTROLS</small>
                    </span>
                    <a href="user.php" class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i>
                        <span class="d-none d-lg-inline">User</span>
                    </a>
                    <a href="event.php" class="list-group-item list-group-item-action">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="d-none d-lg-inline">Add Events</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="fas fa-flag"></i>
                        <span class="d-none d-lg-inline">Reports</span>
                    </a>
                    <a href="../homepage/logout.php" class="list-group-item list-group-item-action text-danger">
                        <i class="fas fa-home"></i>
                        <span class="d-none d-lg-inline">Logout</span>
                    </a>
                </div>
            </nav>
            <main class="col-10">
                <div class="container-fluid mt-3 p-4">

                    <div class="container">
                        <h1 class="mt-5 mb-5">
                            Manage Registration
                            <span class="badge bg-danger text-white">
                                <?php echo $row; ?>
                            </span>
                        </h1>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Player Name</th>
                                <th scope="col">Event Name</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $queryForTable = "SELECT r.id,u.name AS user,e.name AS event from users u JOIN regristration r ON u.id=r.user_id JOIN events e ON r.event_id=e.id;";
                                $result = mysqli_query($con, $queryForTable);
                                $events = array();
                                $count = 0;
                                while ($row = $result->fetch_array()) {
                                    $count++;
                                    $events[] = $row;
                                    echo '<tr>';
                                    echo "<td>$count</td>";
                                    echo "<td>" . $row['user'] . "</td>";
                                    echo "<td>" . $row['event'] . "</td>";
                                    echo '<td><button type="button" class="btn btn-outline-danger btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteRegister"
                                            data-user-id="' . $row['id'] . '">
                                            Delete
                                        </button></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal for delete-->
    <div class="modal fade" id="deleteRegister" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Comfirm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-4 text-muted">
        &copy; Copyright mercus 2023
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <!-- script for delete -->
    <script>
        document.getElementById("deleteRegister").addEventListener("show.bs.modal", function (event) {
            // Get the button that triggered the modal
            var button = event.relatedTarget;

            // Read the user ID from the data-user-id attribute of the button
            var eventId = button.getAttribute("data-user-id");

            // Update the confirmation button's click event to handle the deletion
            document.getElementById("confirmDelete").addEventListener("click", function () {
                var url = "deleteRegister.php?id=" + eventId;
                window.location.href = url;
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    <script src="https://kit.fontawesome.com/3fb7db82bc.js" crossorigin="anonymous">
    </script>
</body>

</html>