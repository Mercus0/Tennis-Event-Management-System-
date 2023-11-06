<?php
include('../connection/connecter.php');
$query = "SELECT id,name,email,password,gender,age,role,phone,address FROM users";
mysqli_select_db($con, 'tennis');
$users = mysqli_query($con, $query);
$usercount = mysqli_num_rows($users);
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
                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="fas fa-users"></i>
                        <span class="d-none d-lg-inline">User</span>
                    </a>
                    <a href="event.php" class="list-group-item list-group-item-action">
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
                            Manage Users
                            <span class="badge bg-danger text-white">
                                <?php echo $usercount; ?>
                            </span>
                        </h1>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Role</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            <?php while ($row = mysqli_fetch_array($users, MYSQLI_ASSOC)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['password']; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($row['gender'] == 0) {
                                            echo '<i class="fas fa-mars text-primary"></i>';
                                        } else {
                                            echo '<i class="fas fa-venus text-danger"></i>';
                                        }
                                        ?>
                                    </td>

                                    <td>
                                        <?php echo $row['age']; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($row['role'] == 0) {
                                            echo '<span class="badge bg-success border">User</span>';
                                        } elseif ($row['role'] == 1) {
                                            echo '<span class="badge bg-danger border">Admin</span>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $row['phone']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['address']; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($row['role'] == 0) {
                                            echo '<button type="button" class="btn btn-outline-success btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#updatemodel"
                                            data-user-id="' . $row['id'] . '">
                                            Update
                                        </button>';
                                            echo '<button type="button" class="btn btn-outline-danger btn-sm me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalId"
                                            data-user-id="' . $row['id'] . '">
                                            Delete
                                        </button>'; ?>
                                            <!-- Modal for delete-->
                                            <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
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
                                                            <button type="button" class="btn btn-danger"
                                                                id="confirmDelete">Yes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else {
                                            echo '<button type="button" class="btn btn-outline-success btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#updatemodel"
                                            data-user-id="' . $row['id'] . '">
                                            Update
                                        </button>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                        <!-- Modal for update-->
                        <div class="modal fade" id="updatemodel" tabindex="-1" role="dialog"
                            aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">User Information</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" id="editUser" action="userUpdate.php">
                                            <input type="text" name="name" class="form-control mb-2" placeholder="Name"
                                                value="" required>
                                            <input type="email" name="email" class="form-control mb-2"
                                                placeholder="Email" required>
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="password" name="password" class="form-control mb-2"
                                                        placeholder="Password">
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-select mb-2" name="role">
                                                        <option value="0" selected>User</option>
                                                        <option value="1">Admin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <select class="form-select mb-2" name="gender">
                                                        <option value="0" selected>Male</option>
                                                        <option value="1">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <input type="number" name="age" class="form-control mb-2"
                                                        placeholder="age" min="14" max="60" required>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" name="phone" class="form-control mb-2"
                                                        placeholder="Phone Number" required>
                                                </div>
                                            </div>
                                            <input type="text" name="address" class="form-control mb-2"
                                                placeholder="Address" required>

                                            <input type="hidden" name="userId" class="form-control">

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
            </main>
        </div>
    </div>

    <footer class="text-center py-4 text-muted">
        &copy; Copyright mercus 2023
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <!-- script for delete -->
    <script>
        document.getElementById("modalId").addEventListener("show.bs.modal", function (event) {
            // Get the button that triggered the modal
            var button = event.relatedTarget;

            // Read the user ID from the data-user-id attribute of the button
            var userId = button.getAttribute("data-user-id");

            // Update the confirmation button's click event to handle the deletion
            document.getElementById("confirmDelete").addEventListener("click", function () {
                var url = "delete.php?id=" + userId;
                window.location.href = url;
            });
        });
    </script>
    <!-- script for update -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const updateModal = new bootstrap.Modal(document.getElementById('updatemodel'));
            const modalTitle = document.querySelector('#updatemodel .modal-title');
            const form = document.querySelector('#editUser');
            document.querySelectorAll('[data-bs-target="#updatemodel"]').forEach(function (button) {
                button.addEventListener('click', function () {
                    const userId = button.getAttribute('data-user-id');
                    fetch('fetchUserData.php?id=' + userId)
                        .then(response => response.json())
                        .then(data => {
                            modalTitle.textContent = 'User Information for ' + data.name;
                            form.name.value = data.name;
                            form.email.value = data.email;
                            form.password.value = data.password;
                            form.role.value = data.role === '1' ? '1' : '0';
                            form.gender.value = data.gender == '0' ? '0' : '1';
                            form.age.value = data.age;
                            form.phone.value = data.phone;
                            form.address.value = data.address;
                            form.userId.value=userId;
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

