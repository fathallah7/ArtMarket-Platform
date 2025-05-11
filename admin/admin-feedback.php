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