<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork Detail - ArtGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php
    include '../includes/header.php';
    require_once('../class/class.php');
    ?>

    <!-- Page content -->
    <div class="container py-4 animate-fade-in">
        <div class="mb-4">
            <a href="explore.php" class="btn btn-link text-decoration-none text-muted ps-0">
                <i class="bi bi-arrow-left me-2"></i> Back to Explore
            </a>

            <div class="row mt-4 g-5">
                <?php
                include '../includes/msg.php';
                ?>
                <?php
                $visitor = new Visitor();
                $rowData = $visitor->ShowArtWorksMoreDetails($_GET['art_id']);
                while ($row = mysqli_fetch_assoc($rowData)) {
                ?>
                    <!-- Artwork Images -->
                    <div class="col-md-6">
                        <div class="position-relative mb-3">
                            <div id="artworkCarousel" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../admin/back/<?php echo $row['main_image']; ?>" class="d-block w-100 rounded" alt="Abstract Harmony">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../admin/back/<?php echo $row['main_image']; ?>" class="d-block w-100 rounded" alt="Abstract Harmony">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../admin/back/<?php echo $row['main_image']; ?>" class="d-block w-100 rounded" alt="Abstract Harmony">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#artworkCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon bg-white rounded-circle p-2" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#artworkCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon bg-white rounded-circle p-2" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mb-3">
                            <div class="carousel-indicators position-relative bottom-0">
                                <button type="button" data-bs-target="#artworkCarousel" data-bs-slide-to="0" class="active bg-primary" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#artworkCarousel" data-bs-slide-to="1" class="bg-primary" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#artworkCarousel" data-bs-slide-to="2" class="bg-primary" aria-label="Slide 3"></button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center gap-2">
                            <a href="view-in-room.php" class="btn btn-outline-primary">
                                <i class="bi bi-eye me-2"></i> View In Your Room
                            </a>
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-share me-2"></i> Share
                            </button>
                        </div>
                    </div>



                    <!-- Artwork Details -->
                    <div class="col-md-6">
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h1 class="fw-bold"><?php echo $row['title']; ?></h1>
                                    <p class="text-muted fs-5">by <?php echo $row['artist_name']; ?></p>
                                </div>
                                <a href="../back/handle_favorites.php?id_fav=<?php echo $row['id']; ?>" class="btn btn-primary rounded-circle p-2" id="favoriteBtn">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>

                            <div class="d-flex flex-wrap gap-2 mt-3">
                                <span class="badge bg-light text-dark"><?php echo $row['category']; ?></span>
                                <span class="badge bg-light text-dark"><?php echo $row['materials']; ?></span>
                                <span class="badge bg-light text-dark"><?php echo $row['year_created']; ?></span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h2 class="fw-bold">$ <?php echo $row['price']; ?></h2>
                                <span class="badge border border-success text-success">In Stock</span>
                            </div>
                            <p class="text-muted small">Free shipping within the EGY</p>

                            <div class="d-grid gap-2 mt-4">
                                <a href="../back/handle_cart.php?artwork_id=<?php echo $row['id'] ?>">
                                    <button class="btn btn-primary">
                                        <i class="bi bi-cart me-2"></i> Add to Cart
                                    </button>
                                </a>
                            </div>
                        </div>

                        <hr>

                        <ul class="nav nav-tabs" id="artworkTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab">Details</button>
                            </li>
                        </ul>

                        <div class="tab-content p-3" id="artworkTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                <p class="text-muted"><?php echo $row['description']; ?></p>
                            </div>

                            <div class="tab-pane fade" id="details" role="tabpanel">
                                <div class="row g-3 mb-3">
                                    <div class="col-6">
                                        <p class="fw-medium mb-1">Medium</p>
                                        <p class="text-muted"><?php echo $row['materials']; ?></p>
                                    </div>
                                    <div class="col-6">
                                        <p class="fw-medium mb-1">Size</p>
                                        <p class="text-muted"><?php echo $row['width'] . " x " . $row['height']; ?></p>
                                    </div>
                                    <div class="col-6">
                                        <p class="fw-medium mb-1">Year</p>
                                        <p class="text-muted"><?php echo $row['year_created']; ?></p>
                                    </div>
                                    <div class="col-6">
                                        <p class="fw-medium mb-1">Category</p>
                                        <p class="text-muted"><?php echo $row['category']; ?></p>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <p class="fw-medium mb-1">Shipping</p>
                                    <p class="text-muted small">Free shipping within the US</p>
                                </div>

                                <div>
                                    <p class="fw-medium mb-1">Returns</p>
                                    <p class="text-muted small">14-day returns accepted if artwork is in original condition</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- Related Artworks -->
        <!-- <section class="mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">You May Also Like</h2>
                <a href="explore.html" class="btn btn-link text-decoration-none">
                    View More <i class="bi bi-chevron-right"></i>
                </a>
            </div>

            <div class="row g-4">
                <div class="col-sm-6 col-md-4">
                    <div class="card h-100 artwork-card">
                        <div class="artwork-image">
                            <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Serenity in Blue">
                            <button class="btn btn-light btn-sm rounded-circle favorite-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Serenity in Blue</h5>
                            <p class="card-text text-muted">Sarah Johnson</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">$1,500</span>
                                <small class="text-muted">Painting</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card h-100 artwork-card">
                        <div class="artwork-image">
                            <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Nature's Whisper">
                            <button class="btn btn-light btn-sm rounded-circle favorite-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Nature's Whisper</h5>
                            <p class="card-text text-muted">Olivia Taylor</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">$1,100</span>
                                <small class="text-muted">Painting</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card h-100 artwork-card">
                        <div class="artwork-image">
                            <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Dreamy Landscape">
                            <button class="btn btn-light btn-sm rounded-circle favorite-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Dreamy Landscape</h5>
                            <p class="card-text text-muted">Thomas Brown</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">$950</span>
                                <small class="text-muted">Painting</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </div>
    </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/artwork-detail.js"></script>
</body>

</html>