<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists - ArtGallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
            <h1 class="fw-bold">Explore Artworks</h1>
            <p class="text-muted">Browse our curated selection of original paintings, photography, sculpture, and more.</p>
        </div>

        <div class="row">
            <!-- Filters - Desktop -->
            <div class="col-lg-3 d-none d-lg-block">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Filters</h5>
                        <form method="GET" id="filtersForm">
                            <div class="mb-4">
                                <h6 class="mb-2">Categories</h6>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="painting" id="category-painting"
                                        <?php if (in_array('painting', $_GET['category'] ?? [])) echo 'checked'; ?>>
                                    <label class="form-check-label" for="category-painting">Painting</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="photography" id="category-photography"
                                        <?php if (in_array('photography', $_GET['category'] ?? [])) echo 'checked'; ?>>
                                    <label class="form-check-label" for="category-photography">Photography</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="sculpture" id="category-sculpture"
                                        <?php if (in_array('sculpture', $_GET['category'] ?? [])) echo 'checked'; ?>>
                                    <label class="form-check-label" for="category-sculpture">Sculpture</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="digital-art" id="category-digital-art"
                                        <?php if (in_array('digital-art', $_GET['category'] ?? [])) echo 'checked'; ?>>
                                    <label class="form-check-label" for="category-digital-art">Digital Art</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="drawing" id="category-drawing"
                                        <?php if (in_array('drawing', $_GET['category'] ?? [])) echo 'checked'; ?>>
                                    <label class="form-check-label" for="category-drawing">Drawing</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="mixed-media" id="category-mixed-media"
                                        <?php if (in_array('mixed-media', $_GET['category'] ?? [])) echo 'checked'; ?>>
                                    <label class="form-check-label" for="category-mixed-media">Mixed Media</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="collage" id="category-collage"
                                        <?php if (in_array('collage', $_GET['category'] ?? [])) echo 'checked'; ?>>
                                    <label class="form-check-label" for="category-collage">Collage</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                            <br>
                            <br>
                            <button class="btn btn-outline-secondary w-100">Clear Filters</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Artwork Grid -->
            <div class="col-lg-9">
                <!-- Mobile Search and Filters -->
                <div class="d-lg-none mb-4">

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="search" id="mobileSearchInput" class="form-control border-start-0 bg-light" placeholder="Search artworks...">
                        <button class="btn btn-outline-secondary" id="mobileSearchBtn" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#filtersOffcanvas">
                            <i class="bi bi-filter"></i>
                        </button>
                    </div>


                    <div class="d-none d-lg-flex justify-content-between align-items-center mb-4">
                        <div class="input-group" style="max-width: 400px;">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="search" id="desktopSearchInput" class="form-control border-start-0 bg-light" placeholder="Search by artist, title, or keyword...">
                            <button class="btn btn-outline-secondary" id="desktopSearchBtn" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="desktopSortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-sliders me-1"></i> Sort by: Featured
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="desktopSortDropdown">
                                <li><a class="dropdown-item" href="#">Featured</a></li>
                                <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                                <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                                <li><a class="dropdown-item" href="#">Newest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Desktop Search and Sort -->
                <div class="d-none d-lg-flex justify-content-between align-items-center mb-4">

                    <form method="GET" class="input-group" style="max-width: 400px;">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="search" name="q" class="form-control border-start-0 bg-light" placeholder="Search by artist, title, or keyword..." value="<?php echo $_GET['q'] ?? ''; ?>">
                    </form>


                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="desktopSortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-sliders me-1"></i> Sort by: Featured
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="desktopSortDropdown">
                            <li><a class="dropdown-item" href="?sort=featured">Featured</a></li>
                            <li><a class="dropdown-item" href="?sort=low_to_high">Price: Low to High</a></li>
                            <li><a class="dropdown-item" href="?sort=high_to_low">Price: High to Low</a></li>
                            <li><a class="dropdown-item" href="?sort=newest">Newest</a></li>
                        </ul>

                    </div>
                </div>

                <?php
                include '../includes/msg.php';
                ?>

                <!-- Results count -->
                <p class="text-muted small mb-4">Showing 8 of 8 artworks</p>

                <!-- Artwork grid -->
                <div class="row g-4">
                    <?php
                    $visitor = new Visitor();
                    $sort = $_GET['sort'] ?? 'featured';
                    $searchQuery = $_GET['q'] ?? '';
                    $categories = $_GET['category'] ?? [];

                    $rowData = $visitor->ShowArtWorks($sort, $searchQuery, $categories);
                    while ($row = mysqli_fetch_assoc($rowData)) {
                    ?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card h-100 artwork-card" data-artwork-id="<?php echo $row['id']; ?>"
                                data-search="<?php echo strtolower($row['title'] . ' ' . $row['artist_name'] . ' ' . $row['materials']); ?>">
                                <div class="artwork-image">
                                    <img src="../admin/back/<?php echo $row['main_image']; ?>" class="card-img-top" alt="Abstract Harmony">
                                    <a href="../back/handle_favorites.php?id_fav=<?php echo $row['id']; ?>" class="btn btn-light btn-sm rounded-circle favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                    <p class="card-text text-muted"><?php echo $row['artist_name']; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-bold">$ <?php echo $row['price']; ?></span>
                                        <small class="text-muted"><?php echo $row['category']; ?></small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center text-muted small mt-1">
                                        <span><?php echo $row['materials']; ?></span>
                                        <span><?php echo $row['width'] . " x " . $row['height']; ?></span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="artwork-detail.php?art_id=<?php echo $row['id'] ?>" class="btn btn-outline-primary btn-sm w-85">View Details</a>
                                        <a href="../back/handle_cart.php?artwork_id=<?php echo $row['id'] ?>" class="btn btn-outline-success btn-sm w-85">Add To Cart</a>
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
        </div>
    </div>
    </div>
    </div>


    <?php
    include '../includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/explore.js"></script> -->
</body>

</html>