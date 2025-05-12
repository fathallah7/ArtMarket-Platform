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


    <?php
    $search = isset($_GET['search']) ? trim($_GET['search']) : '';
    $sort = isset($_GET['sort']) ? $_GET['sort'] : '';

    $sql = "SELECT * FROM users WHERE role = 'artist'";

    if (!empty($search)) {
        $sql .= " AND name LIKE '%" . mysqli_real_escape_string($conn, $search) . "%'";
    }

    switch ($sort) {
        case 'az':
            $sql .= " ORDER BY name ASC";
            break;
        case 'za':
            $sql .= " ORDER BY name DESC";
            break;
        default:
            $sql .= " ORDER BY name ASC";
            break;
    }

    $result = mysqli_query($conn, $sql);
    ?>



<!-- All Artists -->
    <section class="all-artists py-5">
        <div class="container">
            <div class="section-header mb-4">
                <h2>All Artists</h2>
                <p class="text-muted">Browse our complete roster of talented artists</p>
            </div>

            <!-- Search and Filter -->
            <form method="GET" action="">
                <div class="artist-filters mb-4">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search artists by name" value="<?php echo htmlspecialchars($search); ?>">
                                <button class="btn btn-outline-primary" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" name="sort" onchange="this.form.submit()">
                                <option value="">Sort by</option>
                                <option value="az" <?php if ($sort == 'az') echo 'selected'; ?>>Name: A-Z</option>
                                <option value="za" <?php if ($sort == 'za') echo 'selected'; ?>>Name: Z-A</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Artists Grid -->
            <div class="row g-4">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="col-md-3 mb-4">
                            <div class="artist-card text-center">
                                <div class="artist-image rounded-circle">
                                    <img src="../back/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" class="img-fluid rounded-circle">
                                </div>
                                <div class="artist-info mt-3">
                                    <h4><?php echo $row['name']; ?></h4>
                                    <a href="artist-profile.php?id_artist=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-primary mt-2">View Profile</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p class='text-center'>No artists found.</p>";
                }
                ?>
            </div>

            <nav aria-label="Artists pagination" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
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