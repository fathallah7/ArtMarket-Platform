<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Profile - ArtGallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>


    <?php
    include '../includes/header.php';
    include '../includes/conn.php';
    ?>

    <!-- Artist Profile Header -->
    <section class="artist-profile-header">
        <div class="container">
            <div class="row align-items-center">
                <?php
                $artist_id = $_GET['id_artist'];
                $sql = "SELECT * FROM users WHERE id = '$artist_id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="col-md-3 text-center">
                    <img src="../back/<?php echo $row['image']; ?>" alt="Elena Rodriguez" class="img-fluid rounded-circle artist-profile-image">
                </div>
                <div class="col-md-9">
                    <h1><?php echo $row['name']; ?></h1>
                    <p class="text-muted"><?php echo $row['work_name']; ?></p>
                    <div class="artist-stats d-flex flex-wrap gap-4 mb-3">
                        <div>
                            <small class="text-muted">Artworks</small>
                            <p class="mb-0 fw-bold"> <?php
                                                        $publisher_id = $_SESSION['user_id'];
                                                        $result = $conn->query("SELECT COUNT(*) FROM artworks WHERE `publisher_id`= '$artist_id' ");
                                                        $count = $result->fetch_row()[0];
                                                        echo "<h3 class='mb-0'>$count</h3>";
                                                        ?></p>
                        </div>
                        <div>
                            <small class="text-muted">Exhibitions</small>
                            <p class="mb-0 fw-bold">12</p>
                        </div>

                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-share me-2"></i> Share
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-envelope me-2"></i> Contact
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artist Tabs -->
    <section class="artist-tabs">
        <div class="container">
            <ul class="nav nav-tabs" id="artistTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="artworks-tab" data-bs-toggle="tab" data-bs-target="#artworks" type="button" role="tab" aria-controls="artworks" aria-selected="true">Artworks</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="exhibitions-tab" data-bs-toggle="tab" data-bs-target="#exhibitions" type="button" role="tab" aria-controls="exhibitions" aria-selected="false">Exhibitions</button>
                </li>
            </ul>
            <div class="tab-content py-4" id="artistTabsContent">
                <!-- Artworks Tab -->
                <div class="tab-pane fade show active" id="artworks" role="tabpanel" aria-labelledby="artworks-tab">

                    <div class="artwork-filters mb-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search artworks">
                                    <button class="btn btn-outline-primary" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Filter by Medium</option>
                                    <option>Acrylic</option>
                                    <option>Oil</option>
                                    <option>Mixed Media</option>
                                    <option>Watercolor</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Sort by</option>
                                    <option>Newest</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                    <option>Most Popular</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Artwork 1 -->
                    <div class="row g-4">
                        <?php
                        $publisher_id = $_SESSION['user_id'];
                        $sql = "SELECT * FROM artworks WHERE publisher_id = '$artist_id'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="artbox">
                                    <div class="artbox-image">
                                        <img src="../admin/back/<?php echo $row['main_image']; ?>" alt="Artwork Image" class="img-fluid rounded">
                                        <div class="artbox-actions">
                                            <button class="action-btn" title="Add to Favorites">
                                                <i class="bi bi-heart"></i>
                                            </button>
                                            <button class="action-btn" title="Preview">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="artbox-details">
                                        <h4 class="artbox-title"><?php echo $row['title']; ?></h4>
                                        <p class="artbox-price">$ <?php echo $row['price']; ?></p>
                                        <div class="d-flex justify-content-between">
                                            <a href="../pages/artwork-detail.php?art_id=<?php echo $row['id'] ?>" class="btn btn-outline-primary btn-sm rounded-pill">Details</a>
                                            <a href="../back/handle_cart.php?artwork_id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm rounded-pill">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php
                        }
                        ?>

                        <!-- More artworks would be added here -->
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center mt-5">
                        <button class="btn btn-outline-primary">Load More Artworks</button>
                    </div>
                </div>

                <!-- About Tab -->
                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>Biography</h3>
                            <p>
                                <?php
                                echo !empty($row['bio']) ? $row['bio'] : "This artist has not added a biography yet.";
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="artist-sidebar">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h4>Contact Information</h4>
                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <i class="bi bi-envelope me-2"></i>
                                                <a href="mailto:elena@example.com" class="text-decoration-none">elena@example.com</a>
                                            </li>
                                            <li class="mb-2">
                                                <i class="bi bi-globe me-2"></i>
                                                <a href="https://www.elenarodriguez.com" target="_blank" class="text-decoration-none">www.elenarodriguez.com</a>
                                            </li>
                                            <li>
                                                <i class="bi bi-geo-alt me-2"></i> Barcelona, Spain
                                            </li>
                                        </ul>
                                        <div class="social-links mt-3">
                                            <a href="#" class="me-2 text-decoration-none"><i class="bi bi-instagram"></i></a>
                                            <a href="#" class="me-2 text-decoration-none"><i class="bi bi-facebook"></i></a>
                                            <a href="#" class="me-2 text-decoration-none"><i class="bi bi-twitter"></i></a>
                                            <a href="#" class="text-decoration-none"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4>Representation</h4>
                                        <p class="fw-bold mb-1">Galería Moderna</p>
                                        <p class="mb-3">Barcelona, Spain</p>

                                        <p class="fw-bold mb-1">Contemporary Arts Gallery</p>
                                        <p class="mb-3">London, UK</p>

                                        <p class="fw-bold mb-1">New Visions Art Space</p>
                                        <p>New York, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exhibitions Tab -->
                <div class="tab-pane fade" id="exhibitions" role="tabpanel" aria-labelledby="exhibitions-tab">
                    <h3>Exhibition History</h3>
                    <div class="timeline">
                        <!-- Solo Exhibitions -->
                        <div class="mb-4">
                            <div class="timeline-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="timeline-date">2023</p>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="timeline-content">
                                            <h5>"Emotional Landscapes"</h5>
                                            <p>Galería Moderna, Barcelona, Spain</p>
                                            <p>A collection of 24 new works exploring the connection between natural environments and human emotions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="timeline-date">2021</p>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="timeline-content">
                                            <h5>"Vibrant Memories"</h5>
                                            <p>Contemporary Arts Gallery, London, UK</p>
                                            <p>An exploration of memory through color and abstract forms, featuring 18 paintings created over two years.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="timeline-date">2019</p>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="timeline-content">
                                            <h5>"Urban Reflections"</h5>
                                            <p>New Visions Art Space, New York, USA</p>
                                            <p>A series inspired by city life and architectural elements, presented in collaboration with the Urban Arts Initiative.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <?php
    include '../includes/footer.php';
    ?>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/artist-profile.js"></script>
</body>

</html>