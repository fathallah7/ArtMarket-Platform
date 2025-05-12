<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Art Fairs - ArtGallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php
    include 'includes/header.php';
    include 'includes/conn.php';
    ?>


    <!-- Register for Art Fairs Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Register for Art Fairs</h1>
                    <p class="lead">Showcase your artwork at prestigious art fairs around the world</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Fairs -->
    <section class="upcoming-fairs py-5">
        <div class="container">
            <?php
            include 'includes/msg.php';
            ?>
            <div class="section-header mb-5">
                <h2>Upcoming Art Fairs</h2>
                <p class="text-muted">Apply to participate in these upcoming events</p>
            </div>

            <div class="row g-4">
                <?php
                $sql = "SELECT * FROM fairs";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <!-- Fair 1 -->
                    <div class="col-md-6">
                        <div class="fair-application-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="../admin/back/<?php echo $row['image'] ?>" alt="International Art Expo" class="img-fluid rounded">
                                        </div>
                                        <div class="col-md-8">
                                            <h3><?php echo $row['title'] ?></h3>
                                            <div class="fair-details mt-2">
                                                <div class="d-flex align-items-center mb-1">
                                                    <i class="bi bi-calendar-event me-2"></i>
                                                    <span><?php echo $row['fair_date'] ?></span>
                                                </div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <i class="bi bi-geo-alt me-2"></i>
                                                    <span><?php echo $row['location'] ?></span>
                                                </div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <i class="bi bi-tag me-2"></i>
                                                    <span>Contemporary, Modern</span>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <a href="back/handle_fairs_register_artist.php?id_reg=<?php echo $row['id'] ?>" class="btn btn-primary">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Fair pagination" class="mt-5">
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


    <?php
    include '../includes/footer.php';
    ?>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/artist-register-fair.js"></script>
</body>

</html>