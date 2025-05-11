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
                    <h2 class="mb-0">Add New Artwork</h2>
                </div>

                <?php
                include 'includes/msg.php';
                ?>

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">


                        <form id="addArtworkForm" action="back/handle_artworks_admin.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="artworkTitle" class="form-label">Artwork Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" id="artworkTitle" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="artistSelect" class="form-label">Artist Name<span class="text-danger">*</span></label>
                                                <input type="text" name="artist_name" class="form-control" id="artworkTitle" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="categorySelect" class="form-label">Category <span class="text-danger">*</span></label>
                                                <select class="form-select" name="category" id="categorySelect" required>
                                                    <option value="" selected disabled>Select Category</option>
                                                    <option value="painting">Painting</option>
                                                    <option value="sculpture">Sculpture</option>
                                                    <option value="photography">Photography</option>
                                                    <option value="print">Print</option>
                                                    <option value="digital">Digital Art</option>
                                                    <option value="mixed">Mixed Media</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price ($) <span class="text-danger">*</span></label>
                                                <input type="number" name="price" class="form-control" id="price" min="0" step="0.01" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="stockQuantity" class="form-label">Stock Quantity <span class="text-danger">*</span></label>
                                                <input type="number" name="quantity" class="form-control" id="stockQuantity" min="0" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="yearCreated" class="form-label">Year Created</label>
                                                <input type="number" name="year" class="form-control" id="yearCreated" min="1800" max="2023">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="width" class="form-label">Width (cm)</label>
                                                <input type="number" name="width" class="form-control" id="width" min="0" step="0.1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="height" class="form-label">Height (cm)</label>
                                                <input type="number" name="height" class="form-control" id="height" min="0" step="0.1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="materials" class="form-label">Materials</label>
                                        <input type="text" name="materials" class="form-control" id="materials" placeholder="e.g., Oil on canvas, Bronze, etc.">
                                    </div>

                                    <div class="mb-3">
                                        <!-- Tags -->
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h5 class="mb-0">Main Image <span class="text-danger">*</span></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-center align-items-center bg-light rounded p-3 mb-3" style="height: 200px;">
                                                    <div id="mainImagePreview" class="text-center">
                                                        <i class="bi bi-image fs-1 text-muted"></i>
                                                        <p class="mb-0">No image selected</p>
                                                    </div>
                                                </div>
                                                <input type="file" name="image" class="form-control" id="mainImage" accept="image/*" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="card mb-3">
                                        <div class="card-header">
                                            <h5 class="mb-0">Additional Images</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <input type="file" class="form-control mb-2" id="additionalImage1" accept="image/*">
                                                <input type="file" class="form-control mb-2" id="additionalImage2" accept="image/*">
                                                <input type="file" class="form-control" id="additionalImage3" accept="image/*">
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Publishing Options</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="statusSelect" class="form-label">Status</label>
                                                <select class="form-select" id="statusSelect">
                                                    <option value="active" selected>Active (Published)</option>
                                                    <option value="draft">Draft</option>
                                                    <option value="hidden">Hidden</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="featuredCheck" class="form-check-label">
                                                    <input type="checkbox" class="form-check-input me-2" id="featuredCheck">
                                                    Featured Artwork
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" class="btn btn-outline-secondary me-2">Cancel</button>
                                <button type="submit" name="submit" class="btn btn-primary">Add Artwork</button>
                            </div>
                        </form>


                    </div>
                </div>

            </div>


        </div>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/admin-add-artwork.js"></script>
</body>

</html>