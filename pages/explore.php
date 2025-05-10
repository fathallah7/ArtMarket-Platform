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
                        <div class="mb-4">
                            <h6 class="mb-2">Categories</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="painting" id="category-painting">
                                <label class="form-check-label" for="category-painting">Painting</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="photography" id="category-photography">
                                <label class="form-check-label" for="category-photography">Photography</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="sculpture" id="category-sculpture">
                                <label class="form-check-label" for="category-sculpture">Sculpture</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="digital-art" id="category-digital-art">
                                <label class="form-check-label" for="category-digital-art">Digital Art</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="drawing" id="category-drawing">
                                <label class="form-check-label" for="category-drawing">Drawing</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="mixed-media" id="category-mixed-media">
                                <label class="form-check-label" for="category-mixed-media">Mixed Media</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="collage" id="category-collage">
                                <label class="form-check-label" for="category-collage">Collage</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="mb-2">Price Range</h6>
                            <label for="priceRange" class="form-label">$0 - $5000</label>
                            <input type="range" class="form-range" min="0" max="5000" step="100" id="priceRange">
                            <div class="d-flex justify-content-between">
                                <span id="minPrice">$0</span>
                                <span id="maxPrice">$5000</span>
                            </div>
                        </div>

                        <button class="btn btn-outline-secondary w-100">Clear Filters</button>
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
                        <input type="search" class="form-control border-start-0 bg-light" placeholder="Search artworks...">
                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#filtersOffcanvas">
                            <i class="bi bi-filter"></i>
                        </button>
                    </div>

                    <div class="dropdown mb-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-sliders me-1"></i> Sort
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                            <li><a class="dropdown-item" href="#">Featured</a></li>
                            <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                            <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                            <li><a class="dropdown-item" href="#">Newest</a></li>
                        </ul>
                    </div>

                    <!-- Mobile Filters Offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="filtersOffcanvas" aria-labelledby="filtersOffcanvasLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="filtersOffcanvasLabel">Filters</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mb-4">
                                <h6 class="mb-2">Categories</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="painting" id="mobile-category-painting">
                                    <label class="form-check-label" for="mobile-category-painting">Painting</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="photography" id="mobile-category-photography">
                                    <label class="form-check-label" for="mobile-category-photography">Photography</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="sculpture" id="mobile-category-sculpture">
                                    <label class="form-check-label" for="mobile-category-sculpture">Sculpture</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="digital-art" id="mobile-category-digital-art">
                                    <label class="form-check-label" for="mobile-category-digital-art">Digital Art</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="drawing" id="mobile-category-drawing">
                                    <label class="form-check-label" for="mobile-category-drawing">Drawing</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="mixed-media" id="mobile-category-mixed-media">
                                    <label class="form-check-label" for="mobile-category-mixed-media">Mixed Media</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="collage" id="mobile-category-collage">
                                    <label class="form-check-label" for="mobile-category-collage">Collage</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6 class="mb-2">Price Range</h6>
                                <label for="mobilePriceRange" class="form-label">$0 - $5000</label>
                                <input type="range" class="form-range" min="0" max="5000" step="100" id="mobilePriceRange">
                                <div class="d-flex justify-content-between">
                                    <span id="mobileMinPrice">$0</span>
                                    <span id="mobileMaxPrice">$5000</span>
                                </div>
                            </div>

                            <button class="btn btn-outline-secondary w-100 mb-3">Clear Filters</button>
                            <button class="btn btn-primary w-100" data-bs-dismiss="offcanvas">Apply Filters</button>
                        </div>
                    </div>
                </div>

                <!-- Desktop Search and Sort -->
                <div class="d-none d-lg-flex justify-content-between align-items-center mb-4">
                    <div class="input-group" style="max-width: 400px;">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="search" class="form-control border-start-0 bg-light" placeholder="Search by artist, title, or keyword...">
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

                <?php
                include '../includes/msg.php';
                ?>

                <!-- Results count -->
                <p class="text-muted small mb-4">Showing 8 of 8 artworks</p>

                <!-- Artwork grid -->
                <div class="row g-4">
                    <?php
                    $visitor = new Visitor();
                    $rowData = $visitor->ShowArtWorks();
                    while ($row = mysqli_fetch_assoc($rowData)) {
                    ?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card h-100 artwork-card" data-artwork-id="<?php echo $row['id']; ?>">
                                <div class="artwork-image">
                                    <img src="../admin/back/<?php echo $row['main_image']; ?>" class="card-img-top" alt="Abstract Harmony">
                                    <button class="btn btn-light btn-sm rounded-circle favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                    <p class="card-text text-muted"><?php echo $row['artist_name']; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-bold">$ <?php echo $row['price']; ?></span>
                                        <small class="text-muted">Painting</small>
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

    <script>
        document.querySelectorAll('.favorite-btn').forEach(button => {
            button.addEventListener('click', function() {
                const artworkId = this.closest('.card').getAttribute('data-artwork-id'); // الحصول على معرف العمل الفني
                const userId = <?php echo $_SESSION['user_id']; ?>; // المستخدم الحالي

                // إرسال طلب إلى الخادم لإضافة العمل الفني إلى المفضلة
                fetch('../back/handle_favorites.php', {
                        method: 'POST',
                        body: JSON.stringify({
                            artworkId,
                            userId
                        }),
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // تغيير أيقونة القلب إذا تمت إضافته للمفضلة
                            this.querySelector('i').classList.toggle('bi-heart-fill'); // تغيير أيقونة القلب
                        } else {
                            alert('حدث خطأ. الرجاء المحاولة مرة أخرى.');
                        }
                    });
            });
        });
    </script>

    <?php
    include '../includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/explore.js"></script> -->
</body>

</html>