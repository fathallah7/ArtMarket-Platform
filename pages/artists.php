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



<!-- Artist Categories -->
<section class="artist-categories py-5 bg-light">
    <div class="container">
        <div class="section-header mb-5">
            <h2>Browse by Medium</h2>
            <p class="text-muted">Explore artists by their primary medium</p>
        </div>
        <div class="row g-4">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="medium-card text-center">
                    <div class="medium-icon mb-3">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h5>Painters</h5>
                    <p class="text-muted small">124 Artists</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="medium-card text-center">
                    <div class="medium-icon mb-3">
                        <i class="bi bi-camera"></i>
                    </div>
                    <h5>Photographers</h5>
                    <p class="text-muted small">86 Artists</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="medium-card text-center">
                    <div class="medium-icon mb-3">
                        <i class="bi bi-brush"></i>
                    </div>
                    <h5>Sculptors</h5>
                    <p class="text-muted small">52 Artists</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="medium-card text-center">
                    <div class="medium-icon mb-3">
                        <i class="bi bi-pencil"></i>
                    </div>
                    <h5>Illustrators</h5>
                    <p class="text-muted small">78 Artists</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="medium-card text-center">
                    <div class="medium-icon mb-3">
                        <i class="bi bi-pc-display"></i>
                    </div>
                    <h5>Digital Artists</h5>
                    <p class="text-muted small">64 Artists</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="medium-card text-center">
                    <div class="medium-icon mb-3">
                        <i class="bi bi-scissors"></i>
                    </div>
                    <h5>Mixed Media</h5>
                    <p class="text-muted small">42 Artists</p>
                    <a href="#" class="stretched-link"></a>
                </div>
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
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search artists by name">
                        <button class="btn btn-outline-primary" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Filter by Medium</option>
                        <option>Painting</option>
                        <option>Photography</option>
                        <option>Sculpture</option>
                        <option>Digital Art</option>
                        <option>Mixed Media</option>
                    </select>
                </div>
                <div class="col-md-3">
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
            <!-- Artist 1 -->
            <div class="col-md-3">
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="../assets/imgs/shop.jpeg" alt="Elena Rodriguez" class="img-fluid rounded-circle">
                    </div>
                    <div class="artist-info text-center mt-3">
                        <h4>Elena Rodriguez</h4>
                        <p class="text-muted">Contemporary Painter</p>
                        <a href="artist-profile.html" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            
            <!-- Artist 2 -->
            <div class="col-md-3">
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="../assets/imgs/shop.jpeg" alt="David Williams" class="img-fluid rounded-circle">
                    </div>
                    <div class="artist-info text-center mt-3">
                        <h4>David Williams</h4>
                        <p class="text-muted">Sculptor</p>
                        <a href="artist-profile.html" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            
            <!-- Artist 3 -->
            <div class="col-md-3">
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="../assets/imgs/shop.jpeg" alt="Michael Chen" class="img-fluid rounded-circle">
                    </div>
                    <div class="artist-info text-center mt-3">
                        <h4>Michael Chen</h4>
                        <p class="text-muted">Landscape Painter</p>
                        <a href="artist-profile.html" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            
            <!-- Artist 4 -->
            <div class="col-md-3">
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="../assets/imgs/shop.jpeg" alt="Sophia Lee" class="img-fluid rounded-circle">
                    </div>
                    <div class="artist-info text-center mt-3">
                        <h4>Sophia Lee</h4>
                        <p class="text-muted">Illustrator</p>
                        <a href="artist-profile.html" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            
            <!-- Artist 5 -->
            <div class="col-md-3">
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="../assets/imgs/shop.jpeg" alt="James Wilson" class="img-fluid rounded-circle">
                    </div>
                    <div class="artist-info text-center mt-3">
                        <h4>James Wilson</h4>
                        <p class="text-muted">Photographer</p>
                        <a href="artist-profile.html" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            
            <!-- Artist 6 -->
            <div class="col-md-3">
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="../assets/imgs/shop.jpeg" alt="Olivia Martinez" class="img-fluid rounded-circle">
                    </div>
                    <div class="artist-info text-center mt-3">
                        <h4>Olivia Martinez</h4>
                        <p class="text-muted">Digital Artist</p>
                        <a href="artist-profile.html" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            
            <!-- Artist 7 -->
            <div class="col-md-3">
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="../assets/imgs/shop.jpeg" alt="Robert Kim" class="img-fluid rounded-circle">
                    </div>
                    <div class="artist-info text-center mt-3">
                        <h4>Robert Kim</h4>
                        <p class="text-muted">Abstract Artist</p>
                        <a href="artist-profile.html" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            
            <!-- Artist 8 -->
            <div class="col-md-3">
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="../assets/imgs/shop.jpeg" alt="Emma Thompson" class="img-fluid rounded-circle">
                    </div>
                    <div class="artist-info text-center mt-3">
                        <h4>Emma Thompson</h4>
                        <p class="text-muted">Mixed Media Artist</p>
                        <a href="artist-profile.html" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
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
                <a href="register.html" class="btn btn-light btn-lg">Apply to Join</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h3>ArtGallery</h3>
                <p>Discover, buy, and sell art online. Connect with artists and art lovers from around the world.</p>
                <div class="social-icons mt-3">
                    <a href="#" class="me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="me-2"><i class="bi bi-pinterest"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <h5>Explore</h5>
                <ul class="footer-links">
                    <li><a href="browse.html">Browse Art</a></li>
                    <li><a href="collections.html">Collections</a></li>
                    <li><a href="artists.html">Artists</a></li>
                    <li><a href="fairs.html">Art Fairs</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4">
                <h5>Services</h5>
                <ul class="footer-links">
                    <li><a href="advisor.html">Art Advisor</a></li>
                    <li><a href="gift-cards.html">Gift Cards</a></li>
                    <li><a href="referral.html">Referral Program</a></li>
                    <li><a href="feedback.html">Feedback</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4">
                <h5>Support</h5>
                <ul class="footer-links">
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="shipping.html">Shipping</a></li>
                    <li><a href="returns.html">Returns</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="copyright text-center">
                    <p>&copy; 2023 ArtGallery. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
