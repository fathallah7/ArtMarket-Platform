<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists - ArtGallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
</head>

<body>

    <?php
    include '../includes/header.php';
    include '../includes/msg.php';
    require_once('../class/class.php');
    ?>

    <!-- Hero Section -->
    <section class="hero bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Discover Unique Artworks</h1>
                    <p class="lead mb-4">Explore our curated collection of original paintings, photography, sculpture, and more from talented artists around the world.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="explore.html" class="btn btn-primary">Explore Gallery</a>
                        <a href="customer-request-advisor.html" class="btn btn-outline-primary">Get Personalized Recommendations</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="../assets/imgs/shop2.jpg" alt="Art Gallery" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                    <i class="bi bi-palette text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="h5 mb-0">Browse Artworks</h3>
                                    <p class="text-muted small mb-0">Explore our curated collection</p>
                                </div>
                            </div>
                            <a href="explore.html" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                    <i class="bi bi-lightning-charge text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="h5 mb-0">Art Advisor</h3>
                                    <p class="text-muted small mb-0">Get personalized recommendations</p>
                                </div>
                            </div>
                            <a href="customer-request-advisor.html" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                    <i class="bi bi-eye text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="h5 mb-0">View In Your Room</h3>
                                    <p class="text-muted small mb-0">Visualize art in your space</p>
                                </div>
                            </div>
                            <a href="view-in-room.html" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Featured Artworks -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h3 mb-0">Featured Artworks</h2>
                <a href="explore.php" class="btn btn-link text-decoration-none">
                    View All
                    <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
            <div class="row g-4">
                <?php
                $visitor = new Visitor();
                $rowData = $visitor->ShowArtWorks();
                $count = 0;
                while ($row = mysqli_fetch_assoc($rowData)) {
                    if ($count >= 4) break;
                    $count++;
                ?>
                    <!-- Artwork 1 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card artwork-card h-100 border-0 shadow-sm">
                            <div class="artwork-image">
                                <img src="../admin/back/<?php echo $row['main_image'] ?>" class="card-img-top" alt="Abstract Harmony">
                                <div class="artwork-actions">
                                    <button class="btn-favorite" title="Add to favorites">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <h4 class="card-title h6 mb-1"><?php echo $row['title'] ?></h4>
                                <p class="artist small text-muted mb-1">by <?php echo $row['artist_name'] ?></p>
                                <p class="price mb-2">$ <?php echo $row['price'] ?></p>
                                <span class="badge bg-light text-dark"><?php echo $row['category'] ?></span>
                            </div>
                            <div class="card-footer bg-white p-3 pt-0 border-0">
                                <a href="artwork-detail.html?id=1" class="btn btn-outline-primary btn-sm w-100">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>





    <!-- Collections -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center" id="collectionsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="collections-tab" data-bs-toggle="tab" data-bs-target="#collections-content" type="button" role="tab" aria-controls="collections-content" aria-selected="true">Collections</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fairs-tab" data-bs-toggle="tab" data-bs-target="#fairs-content" type="button" role="tab" aria-controls="fairs-content" aria-selected="false">Upcoming Fairs</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="collectionsTabContent">
                <!-- Collections Tab -->
                <div class="tab-pane fade show active" id="collections-content" role="tabpanel" aria-labelledby="collections-tab">
                    <div class="row g-4">
                        <!-- Collection 1 -->
                        <div class="col-md-4">
                            <div class="card collection-card border-0 shadow-sm">
                                <div class="collection-image">
                                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Summer Inspirations">
                                </div>
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h5 mb-0">Summer Inspirations</h3>
                                        <span class="text-muted small">24 artworks</span>
                                    </div>
                                    <p class="card-text small text-muted mb-2">Vibrant artworks inspired by summer landscapes</p>
                                    <a href="collections.html?id=1" class="btn btn-link text-primary p-0">
                                        View Collection
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Collection 2 -->
                        <div class="col-md-4">
                            <div class="card collection-card border-0 shadow-sm">
                                <div class="collection-image">
                                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Modern Abstracts">
                                </div>
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h5 mb-0">Modern Abstracts</h3>
                                        <span class="text-muted small">18 artworks</span>
                                    </div>
                                    <p class="card-text small text-muted mb-2">Contemporary abstract expressions</p>
                                    <a href="collections.html?id=2" class="btn btn-link text-primary p-0">
                                        View Collection
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Collection 3 -->
                        <div class="col-md-4">
                            <div class="card collection-card border-0 shadow-sm">
                                <div class="collection-image">
                                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Urban Photography">
                                </div>
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h5 mb-0">Urban Photography</h3>
                                        <span class="text-muted small">32 artworks</span>
                                    </div>
                                    <p class="card-text small text-muted mb-2">Capturing the essence of city life</p>
                                    <a href="collections.html?id=3" class="btn btn-link text-primary p-0">
                                        View Collection
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fairs Tab -->
                <div class="tab-pane fade" id="fairs-content" role="tabpanel" aria-labelledby="fairs-tab">
                    <div class="row g-4">
                        <!-- Fair 1 -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://via.placeholder.com/300x150" class="img-fluid rounded-start h-100 object-fit-cover" alt="International Art Expo">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2">International Art Expo</h3>
                                            <p class="card-text small text-muted mb-1">
                                                <i class="bi bi-geo-alt me-1"></i> New York, NY
                                            </p>
                                            <p class="card-text small text-muted mb-3">
                                                <i class="bi bi-calendar me-1"></i> June 15-20, 2023
                                            </p>
                                            <a href="art-fairs.html?id=1" class="btn btn-outline-primary btn-sm">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fair 2 -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://via.placeholder.com/300x150" class="img-fluid rounded-start h-100 object-fit-cover" alt="Contemporary Art Fair">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2">Contemporary Art Fair</h3>
                                            <p class="card-text small text-muted mb-1">
                                                <i class="bi bi-geo-alt me-1"></i> London, UK
                                            </p>
                                            <p class="card-text small text-muted mb-3">
                                                <i class="bi bi-calendar me-1"></i> July 8-12, 2023
                                            </p>
                                            <a href="art-fairs.html?id=2" class="btn btn-outline-primary btn-sm">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="art-fairs.html" class="btn btn-outline-primary">
                            View All Art Fairs
                            <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Art Advisor CTA -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="h3 mb-3">Need Help Finding Art?</h2>
                            <p class="mb-4">Get personalized recommendations from our art advisors. Complete a quick questionnaire, and we'll help you find the perfect artwork for your space.</p>
                            <a href="customer-request-advisor.html" class="btn btn-primary">
                                Request Art Advisor
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                        <div class="col-lg-4 text-center mt-4 mt-lg-0">
                            <img src="assets/imgs/shop.jpeg" alt="Art Advisor" class="img-fluid rounded-circle" style="max-width: 192px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include '../includes/footer.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>