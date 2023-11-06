<?php
include("../connection/connecter.php");
$query = "select * from events";
mysqli_select_db($con, 'tennis');
$events = mysqli_query($con, $query);
$eventscount = mysqli_num_rows($events);
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
    <link rel="stylesheet" href="event.css">
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
                        </span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="d-none d-lg-inline">Add Events</span>
                    </a>
                    <a href="reports.php" class="list-group-item list-group-item-action">
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
                            Manage Events
                            <span class="badge bg-danger text-white">
                                <?php echo $eventscount; ?>
                            </span>
                        </h1>
                        <!-- add event button -->
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                        data-bs-target="#addEvent">
                                        Add Event<i class="fas fa-plus"></i>
                                    </button>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped table-borderl">
                                <tr>
                                    <th width="50px">ID</th>
                                    <th width="200px">Name</th>
                                    <th>Description</th>
                                    <th width="100px">Start Date</th>
                                    <th width="100px">End Date</th>
                                    <th width="30px">Players</th>
                                    <th width="200px">Location</th>
                                    <th width="180px">Actions</th>
                                </tr>
                                <?php while ($event = mysqli_fetch_array($events, MYSQLI_ASSOC)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $event['id'] ?>
                                        </td>
                                        <td>
                                            <?php echo $event['name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $event['description'] ?>
                                        </td>
                                        <td>
                                            <?php echo $event['s_date'] ?>
                                        </td>
                                        <td>
                                            <?php echo $event['e_date'] ?>
                                        </td>
                                        <td>
                                            <!-- <?php echo $event['players'] ?> -->
                                        </td>
                                        <td>
                                            <?php echo $event['location'] ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo '<button type="button" class="btn btn-outline-success btn-sm me-2 mt-5" data-bs-toggle="modal"
                                        data-bs-target="#updateEvent"
                                        data-user-id="' . $event['id'] . '">
                                        Update
                                    </button>';
                                            echo '<button type="button" class="btn btn-outline-danger btn-sm mt-5"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteEvent"
                                            data-user-id="' . $event['id'] . '">
                                            Delete
                                        </button>';
                                            ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <!-- Modal for delete-->
                            <div class="modal fade" id="deleteEvent" tabindex="-1" data-bs-backdrop="static"
                                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">Comfirm</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-danger" id="confirmDelete">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal for update-->
                            <div class="modal fade" id="updateEvent" tabindex="-1" role="dialog"
                                aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">Even Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" id="editEvent" action="updateEvent.php">
                                                <input type="text" name="name" class="form-control mb-2"
                                                    placeholder="Name" value="" required>
                                                <textarea class="form-control mb-2" name="description"
                                                    placeholder="Description"></textarea>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-2" name="s_date">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-2" name="e_date">
                                                    </div>
                                                </div>
                                                <input type="text" name="location" class="form-control mb-2"
                                                    placeholder="Location" required>
                                                <input type="hidden" name="eventId" class="form-control">

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- model for addEvent -->
                            <div class="modal fade" id="addEvent" tabindex="-1" role="dialog"
                                aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">Enter Even Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" id="editEvent" action="addEvent.php">
                                                <input type="text" name="name" class="form-control mb-2"
                                                    placeholder="Name" value="" required>
                                                <textarea class="form-control mb-2" name="description"
                                                    placeholder="Description"></textarea>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-2" name="s_date" placeholder="Start Date">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control mb-2" name="e_date" placeholder="End Date">
                                                    </div>
                                                </div>
                                                <input type="text" name="location" class="form-control mb-2"
                                                    placeholder="Location" required>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer class="text-center py-4 text-muted">
        &copy; Copyright mercus@2023
    </footer>

    <!-- script for delete -->
    <script>
        document.getElementById("deleteEvent").addEventListener("show.bs.modal", function (event) {
            // Get the button that triggered the modal
            var button = event.relatedTarget;

            // Read the user ID from the data-user-id attribute of the button
            var eventId = button.getAttribute("data-user-id");

            // Update the confirmation button's click event to handle the deletion
            document.getElementById("confirmDelete").addEventListener("click", function () {
                var url = "deleteEvent.php?id=" + eventId;
                window.location.href = url;
            });
        });
    </script>
    <!-- script for update -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const updateModal = new bootstrap.Modal(document.getElementById('updateEvent'));
            const modalTitle = document.querySelector('#updateEvent .modal-title');
            const form = document.querySelector('#editEvent');

            document.querySelectorAll('[data-bs-target="#updateEvent"]').forEach(function (button) {
                button.addEventListener('click', function () {
                    const eventId = button.getAttribute('data-user-id');
                    fetch('fetchEventData.php?id=' + eventId)
                        .then(response => response.json())
                        .then(data => {
                            modalTitle.textContent = 'Event Information for ' + data.name;
                            form.name.value = data.name;
                            form.description.value = data.description;
                            form.s_date.value = data.s_date;
                            form.e_date.value = data.e_date;
                            form.location.value = data.location;
                            form.eventId.value = eventId;
                        });
                    updateModal.show();
                });
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