<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ArtGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>


    <div class="d-flex">

        <?php
        include 'includes/header.php';
        include 'includes/conn.php';
        ?>



        <!-- Main Content -->
        <div class="main-content p-4 bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Admin Dashboard</h2>
                    <div>
                        <span class="text-muted me-2">Today:</span>
                        <span id="currentDate">May 7, 2023</span>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-1">Total Artworks</h6>
                                        <?php
                                        $result = $conn->query("SELECT COUNT(*) FROM artworks ");
                                        $count = $result->fetch_row()[0];
                                        echo "<h3 class='mb-0'>$count</h3>";
                                        ?>
                                    </div>
                                    <div class="bg-primary bg-opacity-10 p-3 rounded">
                                        <i style="color: white;" class="fa-solid fa-newspaper"></i>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="badge bg-success">+24 this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-1">Total Artists</h6>
                                        <?php
                                        $result = $conn->query("SELECT COUNT(*) FROM users WHERE `role`= 'artist' ");
                                        $count = $result->fetch_row()[0];
                                        echo "<h3 class='mb-0'>$count</h3>";
                                        ?>
                                    </div>
                                    <div class="bg-success bg-opacity-10 p-3 rounded">
                                        <i class="bi bi-person-badge text-success fs-4"></i>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="badge bg-success">+5 this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-1">Total Customers</h6>
                                        <?php
                                        $result = $conn->query("SELECT COUNT(*) FROM users WHERE `role`= 'visitor' ");
                                        $count = $result->fetch_row()[0];
                                        echo "<h3 class='mb-0'>$count</h3>";
                                        ?>
                                    </div>
                                    <div class="bg-info bg-opacity-10 p-3 rounded">
                                        <i class="bi bi-people text-info fs-4"></i>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="badge bg-success">+128 this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <?php
                                        $qry = "SELECT SUM(total_amount) AS total_revenue FROM orders";
                                        $result = mysqli_query($conn, $qry);
                                        $totalRevenue = 0;
                                        if ($result && mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $totalRevenue = $row['total_revenue'];
                                        }
                                        ?>
                                        <div>
                                            <h6 class="text-muted mb-1">Total Revenue</h6>
                                            <h3 class="mb-0">$<?php echo number_format($totalRevenue); ?></h3>
                                        </div>

                                    </div>
                                    <div class="bg-warning bg-opacity-10 p-3 rounded">
                                        <i class="bi bi-currency-dollar text-warning fs-4"></i>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="badge bg-success">+18% this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders & Feedback -->
                <div class="row mb-4">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Recent Orders</h5>
                                <a href="admin-orders.html" class="btn btn-sm btn-outline-primary">View All</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer ID</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM orders";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td>#ORD-<?php echo $row['id'] ?></td>
                                                    <td>USER-<?php echo $row['user_id'] ?></td>
                                                    <td>$ <?php echo $row['total_amount'] ?></td>
                                                    <td><span class="badge bg-warning text-dark">Processing</span></td>
                                                    <td><?php echo $row['order_date'] ?></td>
                                                    <td>
                                                        <a href="admin-order-detail.html" class="btn btn-sm btn-outline-primary">View</a>
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
                    <div class="col-lg-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Recent Feedback</h5>
                                <a href="admin-feedback.php" class="btn btn-sm btn-outline-primary">View All</a>
                            </div>
                            <div class="card-body">
                                <?php
                                require_once('../class/class.php');
                                $admin = new Admin();
                                $rowData = $admin->ShowFeedback();
                                $count = 0;
                                while ($row = mysqli_fetch_assoc($rowData)) {
                                    if ($count >= 3) break;
                                    $count++;
                                ?>
                                    <div class="feedback-item mb-3 pb-3 border-bottom">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div class="d-flex align-items-center">
                                                <img src="../back/<?php echo $row['image'] ?>" class="rounded-circle me-2" alt="User" width="35px">
                                                <div>
                                                    <h6 class="mb-0"><?php echo $row['name'] ?></h6>
                                                    <small class="text-muted"><?php echo $row['submitted_at'] ?></small>
                                                </div>
                                            </div>
                                            <div class="text-warning">
                                                <?php
                                                $rating = $row['rating'];
                                                for ($i = 1; $i <= 5; $i++) {
                                                    echo ($i <= $rating) ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <p class="mb-0"><?php echo $row['message'] ?></p>
                                    </div>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/admin-dashboard.js"></script>
</body>

</html>