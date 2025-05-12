<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Advisor Dashboard - ArtGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php
    include 'includes/conn.php';
    ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">ArtGallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="../assets/imgs/advisor.jpeg" alt="Profile" class="rounded-circle" width="32" height="32">
                            <span class="ms-2">Art Advisor</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="back/handle_logout_admin.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar bg-white shadow-sm pt-5">
            <div class="text-center mb-4">
                <div class="avatar-container mb-3">
                    <img src="../assets/imgs/advisor.jpeg" alt="Advisor Profile" class="img-fluid rounded-circle">
                </div>
                <h5 class="mb-1">Art Advisor</h5>
                <p class="text-muted small">Art Advisor</p>
            </div>
            <ul class="nav flex-column px-3">
                <li class="nav-item">
                    <a class="nav-link active" href="advisor-dashboard.html">
                        <i class="bi bi-speedometer2 me-2"></i> Dashboard
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content p-4 bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Art Advisor Dashboard</h2>
                </div>


                <!-- Recent Requests -->
                <div class="row mb-4">
                    <div class="col-lg-12 mb-4 mb-lg-0">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Recent Client Requests</h5>
                                <a href="advisor-requests.html" class="btn btn-sm btn-outline-primary">View All</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Client</th>
                                                <th>Art Type</th>
                                                <th>Budget</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM advisor_requests";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="mb-0"><?php echo $row['name'] ?></h6>
                                                                <small class="text-muted"><?php echo $row['email'] ?></small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $row['art_types'] ?></td>
                                                    <td><?php echo $row['budget_range'] ?></td>
                                                    <td><span class="badge bg-warning text-dark">New</span></td>
                                                    <td><?php echo $row['created_at'] ?></td>
                                                    <td>
                                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo urlencode($row['email']); ?>&su=Your%20Requested%20Info&body=Hello,%20here%20is%20your%20requested%20content..." target="_blank" class="btn btn-sm btn-outline-primary">Send Email</a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/advisor-dashboard.js"></script>
</body>

</html>