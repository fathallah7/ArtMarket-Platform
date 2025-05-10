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

    <!-- Favorites Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Your Favorites</h1>
                    <p class="lead">Artworks you've saved for later</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Favorites Content -->
    <section class="favorites-section py-5">
        <div class="container">
            <!-- Favorites Controls -->
            <div class="favorites-controls mb-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="mb-md-0">Saved Artworks </h3>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end gap-2">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort By
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                                    <li><a class="dropdown-item" href="#">Date Added (Newest)</a></li>
                                    <li><a class="dropdown-item" href="#">Date Added (Oldest)</a></li>
                                    <li><a class="dropdown-item" href="#">Price (High to Low)</a></li>
                                    <li><a class="dropdown-item" href="#">Price (Low to High)</a></li>
                                    <li><a class="dropdown-item" href="#">Artist Name</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Filter
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                                    <li><a class="dropdown-item" href="#">All Artworks</a></li>
                                    <li><a class="dropdown-item" href="#">Paintings</a></li>
                                    <li><a class="dropdown-item" href="#">Photography</a></li>
                                    <li><a class="dropdown-item" href="#">Sculpture</a></li>
                                    <li><a class="dropdown-item" href="#">Digital Art</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-outline-danger" id="clearAllBtn">
                                Clear All
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Favorites Grid -->
            <?php 
            include '../includes/msg.php';
            ?>
            <div class="row g-4">
                <?php
                $user_id = $_SESSION['user_id'];
                $rowData = Visitor::favorites($user_id);
                while ($row = mysqli_fetch_assoc($rowData)) {
                ?>
                    <!-- Favorite Item 1 -->
                    <div class="col-md-3">
                        <div class="favorite-card">
                            <div class="favorite-image position-relative">
                                <img src="../admin/back/<?php echo $row['main_image']; ?>" alt="Abstract Painting" class="img-fluid rounded">
                                <br>
                                <br>
                                <a href="../back/handle_favorites.php?id_del=<?php echo $row['id'] ?>">
                                    <button class="btn-remove-favorite" title="Remove from Favorites">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="favorite-info mt-3">
                                <h4><?php echo $row['title']; ?></h4>
                                <!-- <p class="artist">by <?php echo $row['artist_name']; ?></p> -->
                                <p class="price">$ <?php echo $row['price']; ?></p>
                                <div class="d-flex justify-content-between">
                                    <a href="artwork-detail.php?art_id=<?php echo $row['id'] ?>" class="btn btn-sm btn-outline-primary">View Details</a>
                                    <a href="../back/handle_cart.php?artwork_id=<?php echo $row['id'] ?>">
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Favorites pagination" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
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

    <!-- Create Collection Modal -->
    <div class="modal fade" id="createCollectionModal" tabindex="-1" aria-labelledby="createCollectionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCollectionModalLabel">Create New Collection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="collectionForm">
                        <div class="mb-3">
                            <label for="collectionName" class="form-label">Collection Name</label>
                            <input type="text" class="form-control" id="collectionName" placeholder="e.g., Living Room Art, Abstract Favorites" required>
                        </div>
                        <div class="mb-3">
                            <label for="collectionDescription" class="form-label">Description (Optional)</label>
                            <textarea class="form-control" id="collectionDescription" rows="3" placeholder="Describe your collection..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Privacy</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="collectionPrivacy" id="privacyPublic" value="public" checked>
                                <label class="form-check-label" for="privacyPublic">
                                    Public (Anyone can view)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="collectionPrivacy" id="privacyPrivate" value="private">
                                <label class="form-check-label" for="privacyPrivate">
                                    Private (Only you can view)
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="createCollectionBtn">Create Collection</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/favorites.js"></script>
</body>

</html>