<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Add Event</title>
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
                <h2 class="mb-0">Add New Event</h2>
            </div>

            <?php include 'includes/msg.php'; ?>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form action="back/handle_add_fairs.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Event Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="description" rows="5" required></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="event_date" class="form-label">Fair Date <span class="text-danger">*</span></label>
                                            <input type="date" name="fair_date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="location" class="form-label">Location <span class="text-danger">*</span></label>
                                            <input type="text" name="location" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Ticket Price ($) <span class="text-danger">*</span></label>
                                    <input type="number" name="price" class="form-control" step="0.01" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">Event Image <span class="text-danger">*</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-center align-items-center bg-light rounded p-3 mb-3" style="height: 200px;">
                                                <div id="mainImagePreview" class="text-center">
                                                    <i class="bi bi-image fs-1 text-muted"></i>
                                                    <p class="mb-0">No image selected</p>
                                                </div>
                                            </div>
                                            <input type="file" name="image" class="form-control" accept="image/*" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="admin-events.php" class="btn btn-outline-secondary me-2">Cancel</a>
                            <button type="submit" name="submit" class="btn btn-primary">Add Event</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
