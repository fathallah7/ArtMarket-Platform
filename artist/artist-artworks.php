<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Artworks - ArtGallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>

    </style>
</head>

<body>

    <?php
    include 'includes/header.php';
    include '../class/class.php';
    ?>



    <!-- My Artworks Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>My Artworks</h1>
                    <p class="lead">Manage your artwork portfolio</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Artwork Management -->
    <section class="artwork-management py-5">
        <div class="container">
            <!-- Artwork Controls -->
            <div class="artwork-controls mb-4">
                <div class="row align-items-center">
                    <?php
                    include 'includes/msg.php';
                    ?>
                </div>
            </div>

            <!-- Artwork Grid -->
            <div class="row g-4">
                <?php
                $publisher_id = $_SESSION['user_id'];
                $result = Artist::ShowArtWorks($publisher_id);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-3">
                        <div class="artwork-card shadow-sm rounded-4 overflow-hidden bg-white">
                            <div class="artwork-image position-relative">
                                <img src="../admin/back/<?php echo $row['main_image'] ?>" alt="Artwork" width="100px">
                                <div class="artwork-actions position-absolute top-0 end-0 p-2 d-flex gap-1">
                                    <button class="btn btn-sm btn-light rounded-circle shadow-sm" title="Edit Artwork" data-bs-toggle="modal" data-bs-target="#editArtworkModal">
                                    <a href="back/handle_upload_artist.php?id_delete=<?php echo $row['id']; ?>" class="btn btn-sm btn-light rounded-circle shadow-sm">
                                        <i class="bi bi-trash text-danger"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="artwork-info p-3">
                                <h5 class="fw-semibold mb-1"><?php echo $row['title'] ?></h5>
                                <p class="text-muted mb-1"><?php echo $row['materials'] ?></p>
                                <p class="text-dark fw-medium mb-2"><?php echo $row['width'] . " x " . $row['height'] ?></p>
                                <div class="text-end">
                                    <small class="text-muted"><?php echo $row['created_at'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Artwork pagination" class="mt-5">
                <ul class="pagination justify-content-center">
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
    </section>



    <!-- Edit Artwork Modal -->
    <div class="modal fade" id="editArtworkModal" tabindex="-1" aria-labelledby="editArtworkModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editArtworkModalLabel">Edit Artwork</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- This would be populated with the same form as the upload modal, but with pre-filled values -->
                    <p class="text-center">Loading artwork details...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="updateArtworkBtn">Update Artwork</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/artist-artworks.js"></script>
</body>

</html>