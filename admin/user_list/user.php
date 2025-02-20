<?php include('../sidebar.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../dist/css/nav.css">
    <link rel="stylesheet" href="../../dist/sweetalert2/sweetalert2.min.css">
</head>

<body>
    <?php include('../../include/nav.php'); ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">User List</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">User List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inlineForm">
                                    <i class="fas fa-user-plus" style="margin-right: 8px;"></i> Add User
                                </button>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="userTable" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Username</th>
                                                        <th>Role</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Data will be loaded dynamically via JavaScript -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Include Modal -->
    <?php include('modal_add.php'); ?>
    <?php include('modal_edite.php'); ?>


    <!-- Footer -->
    <?php include('../../include/footer.php'); ?>
    </div>

    <!-- JS Scripts -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="../../dist/sweetalert2/sweetalert2.min.js"></script>
    <script src="../../dist/sweetalert2/sweetalert2.js"></script>
    <script src="user.js"></script>




</body>

</html>