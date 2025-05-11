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
    include '../includes/conn.php';
    ?>

    <!-- Artists Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Meet Our Artists</h1>
                    <p class="lead">Discover talented artists from around the world and explore their unique creations.</p>
                </div>
            </div>
        </div>
    </section>




    <!-- All Artists -->
    <section class="all-artists py-5">
        <div class="container">
            <div class="section-header mb-4">
                <h2>All Artists</h2>
                <p class="text-muted">Browse our complete roster of talented artists</p>
            </div>

            <!-- Search and Filter -->
            <div class="artist-filters mb-4">
                <div class="row g-3">
                    <div class="col-md-8">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search artists by name">
                            <button class="btn btn-outline-primary" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select">
                            <option selected>Sort by</option>
                            <option>Name: A-Z</option>
                            <option>Name: Z-A</option>
                            <option>Most Popular</option>
                            <option>Recently Added</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Artists Grid -->
            <div class="row g-4">
                <?php
                $sql = "SELECT * FROM users WHERE role = 'artist'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <!-- Artist 1 -->
                    <div class="col-md-3 mb-4">
                        <div class="artist-card text-center">
                            <div class="artist-image rounded-circle">
                                <img src="../back/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" class="img-fluid rounded-circle">
                            </div>
                            <div class="artist-info mt-3">
                                <h4><?php echo $row['name']; ?></h4>
                                <a href="artist-profile.php?id_artist=<?php echo $row['id'];?>" class="btn btn-sm btn-outline-primary mt-2">View Profile</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Artists pagination" class="mt-5">
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

    <!-- Become an Artist -->
    <section class="become-artist py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2>Are You an Artist?</h2>
                    <p class="lead">Join our community of talented artists and showcase your work to art lovers around the world.</p>
                    <ul class="check-list">
                        <li><i class="bi bi-check-circle-fill me-2"></i> Reach a global audience of art collectors and enthusiasts</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i> Sell your artwork with no upfront costs</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i> Get featured in curated collections and promotions</li>
                    </ul>
                </div>
                <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                    <a href="register.php" class="btn btn-light btn-lg">Apply to Join</a>
                </div>
            </div>
        </div>
    </section>


    <?php
    include '../includes/footer.php';
    ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>