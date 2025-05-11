<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artist Dashboard - ArtGallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

  <?php
  include 'includes/header.php';
  include 'includes/conn.php';
  include '../class/class.php';
  ?>

  <!-- Page content -->
  <div class="container py-4 animate-fade-in">
    <div class="mb-4">
      <h1 class="fw-bold">Artist Dashboard</h1>
      <p class="text-muted">Welcome back! Here's an overview of your artwork performance.</p>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-5">
      <div class="col-sm-6 col-lg-4">
        <div class="card h-100">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between">
              <div class="rounded-3 bg-light p-2">
                <i class="bi bi-palette text-primary fs-4"></i>
              </div>
              <span class="badge bg-light text-success">+3 this month</span>
            </div>
            <div class="mt-3">
              <h2 class="fw-bold">
                <?php
                $publisher_id = $_SESSION['user_id'];
                $result = $conn->query("SELECT COUNT(*) FROM artworks WHERE `publisher_id`= '$publisher_id' ");
                $count = $result->fetch_row()[0];
                echo "<h3 class='mb-0'>$count</h3>";
                ?>
              </h2>
              <p class="text-muted mb-0">Total Artworks</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card h-100">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between">
              <div class="rounded-3 bg-light p-2">
                <i class="bi bi-heart text-primary fs-4"></i>
              </div>
              <span class="badge bg-light text-success">+5 this week</span>
            </div>
            <div class="mt-3">
              <h2 class="fw-bold">
                <?php
                $publisher_id = $_SESSION['user_id'];
                $result = $conn->query("SELECT COUNT(*) 
                                        FROM favorites 
                                        WHERE artwork_id IN (
                                          SELECT id FROM artworks WHERE publisher_id = $publisher_id); ");
                $count = $result->fetch_row()[0];
                echo "<h3 class='mb-0'>$count</h3>";
                ?>
              </h2>
              <p class="text-muted mb-0">Favorites</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card h-100">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between">
              <div class="rounded-3 bg-light p-2">
                <i class="bi bi-cart text-primary fs-4"></i>
              </div>
              <span class="badge bg-light text-secondary">2 pending orders</span>
            </div>
            <div class="mt-3">
              <h2 class="fw-bold">
                <?php
                $publisher_id = $_SESSION['user_id'];
                $result = $conn->query("SELECT COUNT(*) FROM artworks WHERE `publisher_id`= '$publisher_id' ");
                $count = $result->fetch_row()[0];
                echo "<h3 class='mb-0'>$count</h3>";
                ?>
              </h2>
              <p class="text-muted mb-0">Sales</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="row g-4">
      <!-- Recent Artworks -->
      <div class="col-lg-8">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="fw-bold">Recent Artworks</h2>
          <a href="artist-artworks.php" class="btn btn-link text-decoration-none">
            View All <i class="bi bi-arrow-right"></i>
          </a>
        </div>

        <div class="row g-4">
          <?php
          $publisher_id = $_SESSION['user_id'];
          $result = Artist::ShowArtWorks($publisher_id);
          $count = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            if ($count >= 3) break;
            $count++;
          ?>
            <div class="col-md-4">
              <div class="card h-100">
                <div class="position-relative">
                  <img src="../admin/back/<?php echo $row['main_image']; ?>" class="card-img-top" alt="Urban Reflections">
                  <div class="position-absolute bottom-0 start-0 end-0 bg-dark bg-opacity-50 text-white p-2">
                    <div class="d-flex justify-content-between">
                      <!-- <div class="d-flex align-items-center">
                        <i class="bi bi-heart me-1"></i>
                        <span class="small">18</span>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['title']; ?></h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold"><?php echo $row['price']; ?></span>
                    <span class="badge bg-success">Active</span>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

        </div>

      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-header bg-white">
            <h5 class="card-title mb-0">Quick Actions</h5>
          </div>
          <div class="card-body">
            <div class="d-grid gap-3">
              <a href="artist-upload.php" class="btn btn-primary">
                <i class="bi bi-file-earmark-arrow-up me-2"></i> Upload New Artwork
              </a>
              <a href="artist-register-fair.php" class="btn btn-outline-primary">
                <i class="bi bi-people me-2"></i> Register for Art Fair
              </a>
            </div>
          </div>
        </div>



        <div class="card">
          <div class="card-header bg-white">
            <h5 class="card-title mb-0">Tips for Artists</h5>
          </div>
          <div class="card-body">
            <div class="d-flex mb-3">
              <i class="bi bi-arrow-up-right text-primary fs-5 me-2"></i>
              <div>
                <p class="small fw-medium mb-1">Update your profile regularly</p>
                <p class="small text-muted mb-0">Keep your bio and artist statement current.</p>
              </div>
            </div>

            <div class="d-flex mb-3">
              <i class="bi bi-arrow-up-right text-primary fs-5 me-2"></i>
              <div>
                <p class="small fw-medium mb-1">High-quality images matter</p>
                <p class="small text-muted mb-0">Use professional photos of your artwork.</p>
              </div>
            </div>

            <div class="d-flex mb-3">
              <i class="bi bi-arrow-up-right text-primary fs-5 me-2"></i>
              <div>
                <p class="small fw-medium mb-1">Engage with collectors</p>
                <p class="small text-muted mb-0">Respond promptly to inquiries about your work.</p>
              </div>
            </div>

            <a href="artist-resources.html" class="btn btn-link text-decoration-none w-100">
              View All Resources <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>