<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ArtGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <div class="d-flex">

        <?php
        include 'includes/header.php';
        ?>


        <!-- Main Content -->
        <div class="main-content p-4 bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Feedback Management</h2>
                </div>

                <?php
                include 'includes/msg.php';
                ?>

                <!-- Filters -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3 mb-md-0">
                                <label for="feedbackType" class="form-label">Feedback Type</label>
                                <select class="form-select" id="feedbackType">
                                    <option value="all" selected>All Types</option>
                                    <option value="review">Product Reviews</option>
                                    <option value="service">Service Feedback</option>
                                    <option value="website">Website Feedback</option>
                                    <option value="advisor">Art Advisor Feedback</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3 mb-md-0">
                                <label for="ratingFilter" class="form-label">Rating</label>
                                <select class="form-select" id="ratingFilter">
                                    <option value="all" selected>All Ratings</option>
                                    <option value="5">5 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="2">2 Stars</option>
                                    <option value="1">1 Star</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3 mb-md-0">
                                <label for="statusFilter" class="form-label">Status</label>
                                <select class="form-select" id="statusFilter">
                                    <option value="all" selected>All Status</option>
                                    <option value="new">New</option>
                                    <option value="read">Read</option>
                                    <option value="responded">Responded</option>
                                    <option value="resolved">Resolved</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="searchFeedback" class="form-label">Search</label>
                                <input type="text" class="form-control" id="searchFeedback" placeholder="Search feedback...">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feedback List -->
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">All Feedback</h5>
                        <div>
                            <button class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-download me-1"></i> Export
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>

                                        <th>ID</th>
                                        <th>Customer</th>
                                        <th>Type</th>
                                        <th>Rating</th>
                                        <th>Feedback</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once('../class/class.php');
                                    $admin = new Admin();
                                    $rowData = $admin->ShowFeedback();
                                    while ($row = mysqli_fetch_assoc($rowData)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <b><?php echo $row['id'] ?></b>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../back/<?php echo $row['image'] ?>" class="rounded-circle me-2" alt="User" width="40px">
                                                    <div>
                                                        <h6 class="mb-0"><?php echo $row['name'] ?></h6>
                                                        <small class="text-muted"><?php echo $row['email'] ?></small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info"><?php echo $row['feedback_type'] ?></span></td>
                                            <td>
                                                <div class="text-warning">
                                                    <?php
                                                    $rating = $row['rating'];
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        echo ($i <= $rating) ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
                                                    }
                                                    ?>
                                                </div>
                                            </td>
                                            <td><?php echo $row['message'] ?></td>
                                            <td><?php echo $row['submitted_at'] ?></td>
                                            <td><span class="badge bg-danger">New</span></td>
                                            <td>
                                                <a href="back/handle_feedback_admin.php?id_del=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <nav aria-label="Feedback pagination">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/admin-feedback.js"></script>
</body>

</html>