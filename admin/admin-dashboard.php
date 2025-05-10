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
                                        <i class="bi bi-image text-primary fs-4"></i>
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
                                        $result = $conn->query("SELECT COUNT(*) FROM users WHERE `role`= 'artists' ");
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
                                        <h6 class="text-muted mb-1">Total Revenue</h6>
                                        <h3 class="mb-0">$248,950</h3>
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
                                                <th>Customer</th>
                                                <th>Artwork</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#ORD-7845</td>
                                                <td>Michael Brown</td>
                                                <td>Abstract Composition #42</td>
                                                <td>$2,800</td>
                                                <td><span class="badge bg-warning text-dark">Processing</span></td>
                                                <td>May 7, 2023</td>
                                                <td>
                                                    <a href="admin-order-detail.html" class="btn btn-sm btn-outline-primary">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#ORD-7844</td>
                                                <td>Emily Wilson</td>
                                                <td>Coastal Sunset</td>
                                                <td>$1,500</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>May 6, 2023</td>
                                                <td>
                                                    <a href="admin-order-detail.html" class="btn btn-sm btn-outline-primary">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#ORD-7843</td>
                                                <td>David Chen</td>
                                                <td>Urban Landscape</td>
                                                <td>$950</td>
                                                <td><span class="badge bg-info">Shipped</span></td>
                                                <td>May 5, 2023</td>
                                                <td>
                                                    <a href="admin-order-detail.html" class="btn btn-sm btn-outline-primary">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#ORD-7842</td>
                                                <td>Sarah Miller</td>
                                                <td>Bronze Sculpture #8</td>
                                                <td>$4,200</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>May 4, 2023</td>
                                                <td>
                                                    <a href="admin-order-detail.html" class="btn btn-sm btn-outline-primary">View</a>
                                                    class="btn btn-sm btn-outline-primary">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#ORD-7841</td>
                                                <td>James Taylor</td>
                                                <td>Minimalist Portrait</td>
                                                <td>$1,850</td>
                                                <td><span class="badge bg-danger">Cancelled</span></td>
                                                <td>May 3, 2023</td>
                                                <td>
                                                    <a href="admin-order-detail.html" class="btn btn-sm btn-outline-primary">View</a>
                                                </td>
                                            </tr>
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

                <!-- Top Selling Artworks -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Top Selling Artworks</h5>
                        <a href="admin-artworks.html" class="btn btn-sm btn-outline-primary">View All Artworks</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Artwork</th>
                                        <th>Artist</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Sales</th>
                                        <th>Revenue</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/50" class="me-2" alt="Artwork">
                                                <div>Abstract Composition #42</div>
                                            </div>
                                        </td>
                                        <td>Alex Rivera</td>
                                        <td>Painting</td>
                                        <td>$2,800</td>
                                        <td>24</td>
                                        <td>$67,200</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="admin-edit-artwork.html">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">View Sales</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Deactivate</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/50" class="me-2" alt="Artwork">
                                                <div>Coastal Sunset</div>
                                            </div>
                                        </td>
                                        <td>Maria Johnson</td>
                                        <td>Painting</td>
                                        <td>$1,500</td>
                                        <td>18</td>
                                        <td>$27,000</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="admin-edit-artwork.html">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">View Sales</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Deactivate</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/50" class="me-2" alt="Artwork">
                                                <div>Bronze Sculpture #8</div>
                                            </div>
                                        </td>
                                        <td>Thomas Wright</td>
                                        <td>Sculpture</td>
                                        <td>$4,200</td>
                                        <td>12</td>
                                        <td>$50,400</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="admin-edit-artwork.html">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">View Sales</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Deactivate</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/50" class="me-2" alt="Artwork">
                                                <div>Urban Landscape</div>
                                            </div>
                                        </td>
                                        <td>Jennifer Lee</td>
                                        <td>Photography</td>
                                        <td>$950</td>
                                        <td>32</td>
                                        <td>$30,400</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="admin-edit-artwork.html">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">View Sales</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Deactivate</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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