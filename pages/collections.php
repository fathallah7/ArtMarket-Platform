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


<!-- Collections Hero -->
<section class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Curated Collections</h1>
                <p class="lead">Discover thoughtfully curated collections of artwork selected by our expert curators.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Collections -->
<section class="featured-collections py-5">
    <div class="container">
        <div class="section-header mb-5">
            <h2>This Week's Highlights</h2>
            <p class="text-muted">Our curators' latest selections</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="featured-collection-card">
                    <div class="collection-image">
                        <img src="/placeholder.svg?height=400&width=600" alt="Abstract Expressions" class="img-fluid rounded">
                        <div class="collection-overlay">
                            <h3>Abstract Expressions</h3>
                            <p>Explore the world of abstract art with these bold and expressive pieces.</p>
                            <a href="#" class="btn btn-light">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="featured-collection-card">
                    <div class="collection-image">
                        <img src="/placeholder.svg?height=400&width=600" alt="Nature Inspired" class="img-fluid rounded">
                        <div class="collection-overlay">
                            <h3>Nature Inspired</h3>
                            <p>Artworks that capture the beauty and essence of the natural world.</p>
                            <a href="#" class="btn btn-light">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Collection Categories -->
<section class="collection-categories py-5 bg-light">
    <div class="container">
        <div class="section-header mb-5">
            <h2>Browse by Theme</h2>
            <p class="text-muted">Explore collections organized by theme and style</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 col-lg-3">
                <div class="category-card text-center">
                    <div class="category-icon mb-3">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h4>Abstract</h4>
                    <p>Non-representational forms and expressions</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Collections</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="category-card text-center">
                    <div class="category-icon mb-3">
                        <i class="bi bi-tree"></i>
                    </div>
                    <h4>Landscape</h4>
                    <p>Natural scenery and outdoor beauty</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Collections</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="category-card text-center">
                    <div class="category-icon mb-3">
                        <i class="bi bi-person"></i>
                    </div>
                    <h4>Portrait</h4>
                    <p>Artistic representations of people</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Collections</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="category-card text-center">
                    <div class="category-icon mb-3">
                        <i class="bi bi-camera"></i>
                    </div>
                    <h4>Photography</h4>
                    <p>Captured moments and perspectives</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Collections</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="category-card text-center">
                    <div class="category-icon mb-3">
                        <i class="bi bi-building"></i>
                    </div>
                    <h4>Urban</h4>
                    <p>City life and architectural elements</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Collections</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="category-card text-center">
                    <div class="category-icon mb-3">
                        <i class="bi bi-flower1"></i>
                    </div>
                    <h4>Still Life</h4>
                    <p>Arrangements of objects and elements</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Collections</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="category-card text-center">
                    <div class="category-icon mb-3">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h4>Cultural</h4>
                    <p>Art inspired by diverse cultural traditions</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Collections</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="category-card text-center">
                    <div class="category-icon mb-3">
                        <i class="bi bi-stars"></i>
                    </div>
                    <h4>Surrealism</h4>
                    <p>Dreamlike and imaginative expressions</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Collections</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- All Collections -->
<section class="all-collections py-5">
    <div class="container">
        <div class="section-header mb-5">
            <h2>All Collections</h2>
            <p class="text-muted">Browse our complete range of curated collections</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="collection-card">
                    <div class="collection-image">
                        <img src="/placeholder.svg?height=300&width=400" alt="Abstract Expressions" class="img-fluid rounded">
                    </div>
                    <div class="collection-info mt-3">
                        <h3>Abstract Expressions</h3>
                        <p>Explore the world of abstract art with these bold and expressive pieces.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">24 artworks</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="collection-card">
                    <div class="collection-image">
                        <img src="/placeholder.svg?height=300&width=400" alt="Nature Inspired" class="img-fluid rounded">
                    </div>
                    <div class="collection-info mt-3">
                        <h3>Nature Inspired</h3>
                        <p>Artworks that capture the beauty and essence of the natural world.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">18 artworks</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="collection-card">
                    <div class="collection-image">
                        <img src="/placeholder.svg?height=300&width=400" alt="Contemporary Photography" class="img-fluid rounded">
                    </div>
                    <div class="collection-info mt-3">
                        <h3>Contemporary Photography</h3>
                        <p>Stunning photographs that capture moments and emotions in unique ways.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">32 artworks</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="collection-card">
                    <div class="collection-image">
                        <img src="/placeholder.svg?height=300&width=400" alt="Urban Landscapes" class="img-fluid rounded">
                    </div>
                    <div class="collection-info mt-3">
                        <h3>Urban Landscapes</h3>
                        <p>Cityscapes and architectural wonders from around the world.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">15 artworks</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="collection-card">
                    <div class="collection-image">
                        <img src="/placeholder.svg?height=300&width=400" alt="Minimalist Art" class="img-fluid rounded">
                    </div>
                    <div class="collection-info mt-3">
                        <h3>Minimalist Art</h3>
                        <p>Simple yet powerful expressions with minimal elements and colors.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">20 artworks</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="collection-card">
                    <div class="collection-image">
                        <img src="/placeholder.svg?height=300&width=400" alt="Pop Art" class="img-fluid rounded">
                    </div>
                    <div class="collection-info mt-3">
                        <h3>Pop Art</h3>
                        <p>Bold, colorful works inspired by popular culture and everyday objects.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">16 artworks</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Collections pagination" class="mt-5">
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

<!-- Newsletter -->
<section class="newsletter py-5 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2>Stay Updated with New Collections</h2>
                <p>Subscribe to our newsletter to receive updates on new collections, featured artists, and special offers.</p>
                <div class="input-group mt-4">
                    <input type="email" class="form-control" placeholder="Your Email Address">
                    <button class="btn btn-light" type="button">Subscribe</button>
                </div>
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
