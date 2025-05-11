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
    require_once('../class/class.php')
    ?>

    <!-- Art Fairs Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Art Fairs & Exhibitions</h1>
                    <p class="lead">Discover upcoming art events around the world</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Fair -->
    <section class="featured-fair py-5">

        <?php
        include '../includes/msg.php';
        ?>

        <div class="container">
            <?php
            $visitor = new Visitor();
            $rowData = $visitor->ShowFairs();
            while ($row = mysqli_fetch_assoc($rowData)) {
                $fairId = $row['id']; 
            ?>
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <img src="../admin/back/<?php echo $row['image'] ?>" alt="International Art Expo" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-fair-content ps-lg-4 mt-4 mt-lg-0">
                            <div class="badge bg-primary mb-2">Featured Event</div>
                            <h2><?php echo $row['title'] ?></h2>
                            <p class="lead"><?php echo $row['description'] ?></p>
                            <div class="fair-details mt-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-calendar-event me-2"></i>
                                    <span><?php echo $row['fair_date'] ?></span>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-geo-alt me-2"></i>
                                    <span><?php echo $row['location'] ?></span>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-ticket-perforated me-2"></i>
                                    <span>Tickets from $ <?php echo $row['price'] ?></span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-outline-primary" onclick="toggleForm('form-<?php echo $fairId ?>')">Buy Tickets</button>
                            </div>
                            <!-- Hidden Purchase Form -->
                            <div id="form-<?php echo $fairId ?>" style="display: none;" class="mt-4 border-top pt-3">
                                <form action="../back/handle_ticket_purchase.php" method="POST">
                                    <input type="hidden" name="fairs_id" value="<?php echo $fairId ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>"> <!-- Replace with session user_id -->                                    
                                    <button type="submit" name="submit" class="btn btn-success">Confirm Purchase</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>



            <br>
            <br>

        </div>
    </section>


    <!-- Newsletter -->
    <section class="newsletter py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Stay Updated on Art Fairs</h2>
                    <p>Subscribe to our newsletter to receive updates on upcoming art fairs, exclusive previews, and special offers.</p>
                    <div class="input-group mt-4">
                        <input type="email" class="form-control" placeholder="Your Email Address">
                        <button class="btn btn-light" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include '../includes/footer.php';
    ?>


    <script>
        function toggleForm(id) {
            var form = document.getElementById(id);
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
    </script>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/art-fairs.js"></script>
</body>

</html>