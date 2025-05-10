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
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=400&width=600" alt="International Art Expo" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <div class="featured-fair-content ps-lg-4 mt-4 mt-lg-0">
                        <div class="badge bg-primary mb-2">Featured Event</div>
                        <h2>International Art Expo 2023</h2>
                        <p class="lead">The world's premier art fair showcasing contemporary and modern art from leading galleries</p>
                        <div class="fair-details mt-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-calendar-event me-2"></i>
                                <span>October 15-20, 2023</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-geo-alt me-2"></i>
                                <span>Metropolitan Convention Center, New York</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-ticket-perforated me-2"></i>
                                <span>Tickets from $25</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="fair-detail.html" class="btn btn-primary me-2">Learn More</a>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ticketModal">Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Fairs -->
    <section class="upcoming-fairs py-5 bg-light">
        <div class="container">
            <div class="section-header mb-5">
                <h2>Upcoming Art Fairs</h2>
                <p class="text-muted">Plan your visit to these exciting art events</p>
            </div>
            <div class="row g-4">
                <!-- Fair 1 -->
                <div class="col-md-4">
                    <div class="fair-card">
                        <div class="fair-image">
                            <img src="/placeholder.svg?height=250&width=400" alt="Contemporary Art Fair" class="img-fluid rounded">
                            <div class="fair-date">
                                <span class="month">Nov</span>
                                <span class="day">5-10</span>
                            </div>
                        </div>
                        <div class="fair-info mt-3">
                            <h3>Contemporary Art Fair</h3>
                            <p class="location"><i class="bi bi-geo-alt me-2"></i>Paris, France</p>
                            <p class="description">Discover emerging artists and new trends in contemporary art at this prestigious fair.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-success">Tickets Available</span>
                                <a href="fair-detail.html" class="btn btn-sm btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fair 2 -->
                <div class="col-md-4">
                    <div class="fair-card">
                        <div class="fair-image">
                            <img src="/placeholder.svg?height=250&width=400" alt="Asian Art Expo" class="img-fluid rounded">
                            <div class="fair-date">
                                <span class="month">Dec</span>
                                <span class="day">12-18</span>
                            </div>
                        </div>
                        <div class="fair-info mt-3">
                            <h3>Asian Art Expo</h3>
                            <p class="location"><i class="bi bi-geo-alt me-2"></i>Tokyo, Japan</p>
                            <p class="description">A celebration of traditional and contemporary Asian art from across the continent.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-warning text-dark">Selling Fast</span>
                                <a href="fair-detail.html" class="btn btn-sm btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fair 3 -->
                <div class="col-md-4">
                    <div class="fair-card">
                        <div class="fair-image">
                            <img src="/placeholder.svg?height=250&width=400" alt="Digital Art Summit" class="img-fluid rounded">
                            <div class="fair-date">
                                <span class="month">Jan</span>
                                <span class="day">20-25</span>
                            </div>
                        </div>
                        <div class="fair-info mt-3">
                            <h3>Digital Art Summit</h3>
                            <p class="location"><i class="bi bi-geo-alt me-2"></i>San Francisco, USA</p>
                            <p class="description">Explore the intersection of art and technology with digital artists from around the world.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-info">Early Bird</span>
                                <a href="fair-detail.html" class="btn btn-sm btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="all-fairs.html" class="btn btn-primary">View All Art Fairs</a>
            </div>
        </div>
    </section>

    <!-- Virtual Exhibitions -->
    <section class="virtual-exhibitions py-5">
        <div class="container">
            <div class="section-header mb-5">
                <h2>Virtual Exhibitions</h2>
                <p class="text-muted">Experience art from anywhere in the world</p>
            </div>
            <div class="row g-4">
                <!-- Exhibition 1 -->
                <div class="col-md-6">
                    <div class="exhibition-card">
                        <div class="exhibition-image position-relative">
                            <img src="/placeholder.svg?height=350&width=600" alt="Modern Masters" class="img-fluid rounded">
                            <div class="exhibition-overlay">
                                <a href="#" class="btn btn-light">Enter Exhibition</a>
                            </div>
                        </div>
                        <div class="exhibition-info mt-3">
                            <h3>Modern Masters: A Retrospective</h3>
                            <p class="curator">Curated by Elizabeth Chen</p>
                            <p class="description">A virtual journey through the evolution of modern art, featuring works from the 20th century's most influential artists.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Exhibition 2 -->
                <div class="col-md-6">
                    <div class="exhibition-card">
                        <div class="exhibition-image position-relative">
                            <img src="/placeholder.svg?height=350&width=600" alt="Nature Reimagined" class="img-fluid rounded">
                            <div class="exhibition-overlay">
                                <a href="#" class="btn btn-light">Enter Exhibition</a>
                            </div>
                        </div>
                        <div class="exhibition-info mt-3">
                            <h3>Nature Reimagined</h3>
                            <p class="curator">Curated by James Wilson</p>
                            <p class="description">Explore how contemporary artists interpret and represent the natural world in this immersive virtual exhibition.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Art Fair Calendar -->
    <section class="fair-calendar py-5 bg-light">
        <div class="container">
            <div class="section-header mb-5">
                <h2>Art Fair Calendar</h2>
                <p class="text-muted">Plan your art fair visits for the year</p>
            </div>
            <div class="calendar-controls mb-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <button class="btn btn-outline-primary active">All</button>
                            <button class="btn btn-outline-primary">Contemporary</button>
                            <button class="btn btn-outline-primary">Modern</button>
                            <button class="btn btn-outline-primary">Digital</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end mt-3 mt-md-0">
                            <select class="form-select w-auto">
                                <option selected>All Locations</option>
                                <option>North America</option>
                                <option>Europe</option>
                                <option>Asia</option>
                                <option>Australia</option>
                                <option>Africa</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="calendar-table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Dates</th>
                                <th>Location</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>International Art Expo</td>
                                <td>Oct 15-20, 2023</td>
                                <td>New York, USA</td>
                                <td>Contemporary</td>
                                <td><span class="badge bg-success">Open</span></td>
                                <td><a href="fair-detail.html" class="btn btn-sm btn-outline-primary">Details</a></td>
                            </tr>
                            <tr>
                                <td>Contemporary Art Fair</td>
                                <td>Nov 5-10, 2023</td>
                                <td>Paris, France</td>
                                <td>Contemporary</td>
                                <td><span class="badge bg-success">Open</span></td>
                                <td><a href="fair-detail.html" class="btn btn-sm btn-outline-primary">Details</a></td>
                            </tr>
                            <tr>
                                <td>Asian Art Expo</td>
                                <td>Dec 12-18, 2023</td>
                                <td>Tokyo, Japan</td>
                                <td>Traditional/Contemporary</td>
                                <td><span class="badge bg-warning text-dark">Selling Fast</span></td>
                                <td><a href="fair-detail.html" class="btn btn-sm btn-outline-primary">Details</a></td>
                            </tr>
                            <tr>
                                <td>Digital Art Summit</td>
                                <td>Jan 20-25, 2024</td>
                                <td>San Francisco, USA</td>
                                <td>Digital</td>
                                <td><span class="badge bg-info">Early Bird</span></td>
                                <td><a href="fair-detail.html" class="btn btn-sm btn-outline-primary">Details</a></td>
                            </tr>
                            <tr>
                                <td>Modern Art Biennale</td>
                                <td>Feb 8-20, 2024</td>
                                <td>Berlin, Germany</td>
                                <td>Modern</td>
                                <td><span class="badge bg-secondary">Coming Soon</span></td>
                                <td><a href="fair-detail.html" class="btn btn-sm btn-outline-primary">Details</a></td>
                            </tr>
                            <tr>
                                <td>Sculpture & Installation Fair</td>
                                <td>Mar 15-22, 2024</td>
                                <td>London, UK</td>
                                <td>Sculpture</td>
                                <td><span class="badge bg-secondary">Coming Soon</span></td>
                                <td><a href="fair-detail.html" class="btn btn-sm btn-outline-primary">Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="calendar-download text-center mt-4">
                <a href="#" class="btn btn-outline-primary">
                    <i class="bi bi-calendar-plus me-2"></i> Add to Calendar
                </a>
                <a href="#" class="btn btn-outline-primary ms-2">
                    <i class="bi bi-download me-2"></i> Download Calendar (PDF)
                </a>
            </div>
        </div>
    </section>

    <!-- For Artists -->
    <section class="for-artists py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>For Artists & Galleries</h2>
                    <p class="lead">Showcase your work at prestigious art fairs around the world</p>
                    <p>Join our network of artists and galleries to gain access to exclusive exhibition opportunities. We connect talented artists with the right audiences through our curated art fairs and exhibitions.</p>
                    <div class="mt-4">
                        <a href="artist-register-fair.html" class="btn btn-primary me-2">Register for Art Fairs</a>
                        <a href="artist-resources.html" class="btn btn-outline-primary">Artist Resources</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=400&width=600" alt="Artist Exhibition" class="img-fluid rounded mt-4 mt-lg-0">
                </div>
            </div>
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
                        <li><a href="art-fairs.html">Art Fairs</a></li>
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

    <!-- Ticket Modal -->
    <div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ticketModalLabel">Buy Tickets - International Art Expo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="ticketForm">
                        <div class="mb-3">
                            <label for="ticketType" class="form-label">Ticket Type</label>
                            <select class="form-select" id="ticketType" required>
                                <option value="" selected disabled>Select ticket type</option>
                                <option value="general">General Admission - $25</option>
                                <option value="vip">VIP Access - $75</option>
                                <option value="preview">Preview Day - $50</option>
                                <option value="student">Student/Senior - $15</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ticketQuantity" class="form-label">Quantity</label>
                            <select class="form-select" id="ticketQuantity" required>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="visitDate" class="form-label">Visit Date</label>
                            <select class="form-select" id="visitDate" required>
                                <option value="" selected disabled>Select date</option>
                                <option value="oct15">October 15, 2023</option>
                                <option value="oct16">October 16, 2023</option>
                                <option value="oct17">October 17, 2023</option>
                                <option value="oct18">October 18, 2023</option>
                                <option value="oct19">October 19, 2023</option>
                                <option value="oct20">October 20, 2023</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="guidedTour">
                                <label class="form-check-label" for="guidedTour">
                                    Add Guided Tour (+$15)
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="catalogCheck">
                                <label class="form-check-label" for="catalogCheck">
                                    Add Exhibition Catalog (+$30)
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="proceedToCheckoutBtn">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/art-fairs.js"></script>
</body>
</html>
