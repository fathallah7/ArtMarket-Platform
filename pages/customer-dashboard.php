<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard - ArtGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php
    include '../includes/header.php';
    ?>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar bg-white border-end">
            <div class="d-flex flex-column align-items-center p-3 border-bottom">
                <a href="customer-dashboard.html" class="d-flex align-items-center mb-3 text-decoration-none">
                </a>
                <div class="text-center mb-3">
                    <div class="avatar-container mb-2">
                        <img src="../back/<?php echo $_SESSION['user_image'] ?>" alt="User" class="rounded-circle" width="64" height="64">
                    </div>
                    <p class="mb-0 fw-medium"><?php echo $_SESSION['name'] ?></p>
                    <small class="text-muted"><?php echo $_SESSION['user_role'] ?></small>
                </div>
            </div>
            <ul class="nav flex-column p-3">
                <li class="nav-item mb-2">
                    <a href="customer-dashboard.html" class="nav-link active">
                        <i class="bi bi-house-door me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="gift-cards.php" class="nav-link">
                        <i class="bi bi-gift me-2"></i> Gift Cards
                    </a>
                </li>
                <li class="nav-item mt-auto">
                    <a href="../back/handle_logout.php" class="nav-link text-danger">
                        <i class="bi bi-box-arrow-right me-2"></i> Log Out
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="main-content">



            <!-- Page content -->
            <div class="container py-4 animate-fade-in">
                <div class="mb-4">
                    <h1 class="fw-bold">Customer Dashboard</h1>
                    <p class="text-muted">Welcome back! Here's an overview of your art journey.</p>
                </div>

                <section class="mb-5">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body p-4 p-md-5">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h2 class="display-6 fw-bold">Discover Unique Artworks</h2>
                                    <p class="lead">Explore our curated collection of original paintings, photography, sculpture, and more from talented artists around the world.</p>
                                    <div class="d-flex flex-wrap gap-2 mt-4">
                                        <a href="explore.html" class="btn btn-light">
                                            Explore Gallery <i class="bi bi-arrow-right ms-2"></i>
                                        </a>
                                        <a href="customer-request-advisor.html" class="btn btn-outline-light">
                                            Get Personalized Recommendations
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container mt-5 mb-5">
                    <div class="profile-container">
                        <div class="profile-header d-flex align-items-center gap-3">
                            <img src="../back/<?php echo $_SESSION['user_image'] ?>" alt="Profile Picture" class="profile-img" style="width: 80px; height: 80px; border-radius: 50%;">
                            <div>
                                <h5> <?php echo $_SESSION['name'] ?> </h5>
                            </div>
                        </div>
                        <hr>



                        <?php
                        include '../includes/msg.php';
                        ?>
                        <form action="../back/handle_profile.php" method="post" enctype="multipart/form-data">
                            <div class="mt-3">
                                <label class="form-label">Change Profile Picture</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name'] ?>">
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['user_email'] ?>">
                                </div>
                            </div>
                            <hr>

                            <!-- Password section hidden for now -->

                            <button type="submit" name="submit" class="btn btn-primary w-100">Save</button>
                        </form>


                    </div>
                </div>


                <section>
                    <div class="card bg-light">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h2 class="fw-bold">Need Help Finding Art?</h2>
                                    <p class="text-muted">Get personalized recommendations from our art advisors. Complete a quick questionnaire, and we'll help you find the perfect artwork for your space.</p>
                                    <a href="customer-request-advisor.html" class="btn btn-primary">
                                        Request Art Advisor <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <img src="https://via.placeholder.com/192" alt="Art Advisor" class="img-fluid rounded-circle" style="max-width: 192px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>