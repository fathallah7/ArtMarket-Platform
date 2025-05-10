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
            <div class="section-header mb-5">
                <h2>Upcoming Art Fairs</h2>
                <p class="text-muted">Apply to participate in these upcoming events</p>
            </div>
            
            <div class="fair-filters mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search fairs...">
                            <button class="btn btn-outline-primary" type="button">Search</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end mt-3 mt-md-0">
                            <select class="form-select w-auto me-2">
                                <option selected>All Locations</option>
                                <option>North America</option>
                                <option>Europe</option>
                                <option>Asia</option>
                                <option>Australia</option>
                                <option>Africa</option>
                            </select>
                            <select class="form-select w-auto">
                                <option selected>All Categories</option>
                                <option>Contemporary</option>
                                <option>Modern</option>
                                <option>Digital</option>
                                <option>Photography</option>
                                <option>Sculpture</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Fair 1 -->
                <div class="col-md-6">
                    <div class="fair-application-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/placeholder.svg?height=150&width=150" alt="International Art Expo" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>International Art Expo 2023</h3>
                                        <div class="fair-details mt-2">
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-calendar-event me-2"></i>
                                                <span>October 15-20, 2023</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-geo-alt me-2"></i>
                                                <span>Metropolitan Convention Center, New York</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-tag me-2"></i>
                                                <span>Contemporary, Modern</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-clock me-2"></i>
                                                <span class="text-danger">Application Deadline: August 15, 2023</span>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fairApplicationModal" data-fair="International Art Expo 2023">Apply Now</a>
                                            <a href="fair-detail.html" class="btn btn-outline-primary ms-2">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fair 2 -->
                <div class="col-md-6">
                    <div class="fair-application-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/placeholder.svg?height=150&width=150" alt="Contemporary Art Fair" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Contemporary Art Fair</h3>
                                        <div class="fair-details mt-2">
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-calendar-event me-2"></i>
                                                <span>November 5-10, 2023</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-geo-alt me-2"></i>
                                                <span>Grand Palais, Paris, France</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-tag me-2"></i>
                                                <span>Contemporary</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-clock me-2"></i>
                                                <span class="text-danger">Application Deadline: September 1, 2023</span>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fairApplicationModal" data-fair="Contemporary Art Fair">Apply Now</a>
                                            <a href="fair-detail.html" class="btn btn-outline-primary ms-2">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fair 3 -->
                <div class="col-md-6">
                    <div class="fair-application-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/placeholder.svg?height=150&width=150" alt="Asian Art Expo" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Asian Art Expo</h3>
                                        <div class="fair-details mt-2">
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-calendar-event me-2"></i>
                                                <span>December 12-18, 2023</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-geo-alt me-2"></i>
                                                <span>Tokyo International Exhibition Center, Japan</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-tag me-2"></i>
                                                <span>Traditional, Contemporary</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-clock me-2"></i>
                                                <span class="text-danger">Application Deadline: October 5, 2023</span>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fairApplicationModal" data-fair="Asian Art Expo">Apply Now</a>
                                            <a href="fair-detail.html" class="btn btn-outline-primary ms-2">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fair 4 -->
                <div class="col-md-6">
                    <div class="fair-application-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/placeholder.svg?height=150&width=150" alt="Digital Art Summit" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Digital Art Summit</h3>
                                        <div class="fair-details mt-2">
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-calendar-event me-2"></i>
                                                <span>January 20-25, 2024</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-geo-alt me-2"></i>
                                                <span>Moscone Center, San Francisco, USA</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-tag me-2"></i>
                                                <span>Digital, NFT, New Media</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-clock me-2"></i>
                                                <span class="text-danger">Application Deadline: November 15, 2023</span>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fairApplicationModal" data-fair="Digital Art Summit">Apply Now</a>
                                            <a href="fair-detail.html" class="btn btn-outline-primary ms-2">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- My Applications -->
    <section class="my-applications py-5 bg-light">
        <div class="container">
            <div class="section-header mb-5">
                <h2>My Applications</h2>
                <p class="text-muted">Track the status of your art fair applications</p>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Fair Name</th>
                            <th>Location</th>
                            <th>Dates</th>
                            <th>Application Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Spring Art Festival</td>
                            <td>Chicago, USA</td>
                            <td>May 10-15, 2023</td>
                            <td>February 20, 2023</td>
                            <td><span class="badge bg-success">Accepted</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>European Fine Art Fair</td>
                            <td>Amsterdam, Netherlands</td>
                            <td>June 5-12, 2023</td>
                            <td>March 10, 2023</td>
                            <td><span class="badge bg-warning text-dark">Under Review</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Summer Art Exhibition</td>
                            <td>London, UK</td>
                            <td>July 20-30, 2023</td>
                            <td>April 5, 2023</td>
                            <td><span class="badge bg-danger">Rejected</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Feedback</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Application Tips -->
    <section class="application-tips py-5">
        <div class="container">
            <div class="section-header mb-5">
                <h2>Application Tips</h2>
                <p class="text-muted">Increase your chances of being selected</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tip-card">
                        <div class="tip-icon mb-3">
                            <i class="bi bi-image fs-1"></i>
                        </div>
                        <h3>High-Quality Images</h3>
                        <p>Submit professional, high-resolution images of your artwork. Ensure proper lighting and framing to showcase your work at its best.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tip-card">
                        <div class="tip-icon mb-3">
                            <i class="bi bi-file-text fs-1"></i>
                        </div>
                        <h3>Strong Artist Statement</h3>
                        <p>Craft a compelling artist statement that clearly articulates your vision, process, and the themes explored in your work.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tip-card">
                        <div class="tip-icon mb-3">
                            <i class="bi bi-calendar-check fs-1"></i>
                        </div>
                        <h3>Apply Early</h3>
                        <p>Submit your application well before the deadline. Early applications often receive more thorough consideration from selection committees.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="artist-resources.html" class="btn btn-primary">View More Resources</a>
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

    <!-- Fair Application Modal -->
    <div class="modal fade" id="fairApplicationModal" tabindex="-1" aria-labelledby="fairApplicationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fairApplicationModalLabel">Apply for Art Fair</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="fairApplicationForm">
                        <div class="mb-4">
                            <h5>Fair Information</h5>
                            <p id="fairName" class="mb-1">International Art Expo 2023</p>
                            <p id="fairLocation" class="mb-1 text-muted">Metropolitan Convention Center, New York</p>
                            <p id="fairDates" class="mb-0 text-muted">October 15-20, 2023</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Booth Options</h5>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="booth-option">
                                        <input type="radio" name="boothSize" id="boothSmall" class="booth-input" value="small" checked>
                                        <label for="boothSmall" class="booth-label">
                                            <h6>Small Booth</h6>
                                            <p class="mb-1">10' x 10' (100 sq ft)</p>
                                            <p class="price mb-0">$2,500</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="booth-option">
                                        <input type="radio" name="boothSize" id="boothMedium" class="booth-input" value="medium">
                                        <label for="boothMedium" class="booth-label">
                                            <h6>Medium Booth</h6>
                                            <p class="mb-1">10' x 20' (200 sq ft)</p>
                                            <p class="price mb-0">$4,500</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="booth-option">
                                        <input type="radio" name="boothSize" id="boothLarge" class="booth-input" value="large">
                                        <label for="boothLarge" class="booth-label">
                                            <h6>Large Booth</h6>
                                            <p class="mb-1">20' x 20' (400 sq ft)</p>
                                            <p class="price mb-0">$8,000</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Artwork Selection</h5>
                            <p class="text-muted mb-3">Select artworks from your portfolio to include in your application (minimum 5, maximum 10)</p>
                            <div class="row g-3" id="artworkSelection">
                                <!-- Artwork checkboxes will be populated dynamically -->
                                <div class="col-md-3">
                                    <div class="artwork-selection-item">
                                        <input type="checkbox" id="artwork1" name="selectedArtworks[]" value="1" class="artwork-checkbox">
                                        <label for="artwork1" class="artwork-label">
                                            <img src="/placeholder.svg?height=100&width=100" alt="Artwork 1" class="img-fluid rounded">
                                            <span class="artwork-title">Abstract Composition</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="artwork-selection-item">
                                        <input type="checkbox" id="artwork2" name="selectedArtworks[]" value="2" class="artwork-checkbox">
                                        <label for="artwork2" class="artwork-label">
                                            <img src="/placeholder.svg?height=100&width=100" alt="Artwork 2" class="img-fluid rounded">
                                            <span class="artwork-title">Urban Landscape</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="artwork-selection-item">
                                        <input type="checkbox" id="artwork3" name="selectedArtworks[]" value="3" class="artwork-checkbox">
                                        <label for="artwork3" class="artwork-label">
                                            <img src="/placeholder.svg?height=100&width=100" alt="Artwork 3" class="img-fluid rounded">
                                            <span class="artwork-title">Portrait Study</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="artwork-selection-item">
                                        <input type="checkbox" id="artwork4" name="selectedArtworks[]" value="4" class="artwork-checkbox">
                                        <label for="artwork4" class="artwork-label">
                                            <img src="/placeholder.svg?height=100&width=100" alt="Artwork 4" class="img-fluid rounded">
                                            <span class="artwork-title">Nature Series #1</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="artwork-selection-item">
                                        <input type="checkbox" id="artwork5" name="selectedArtworks[]" value="5" class="artwork-checkbox">
                                        <label for="artwork5" class="artwork-label">
                                            <img src="/placeholder.svg?height=100&width=100" alt="Artwork 5" class="img-fluid rounded">
                                            <span class="artwork-title">Geometric Forms</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="artwork-selection-item">
                                        <input type="checkbox" id="artwork6" name="selectedArtworks[]" value="6" class="artwork-checkbox">
                                        <label for="artwork6" class="artwork-label">
                                            <img src="/placeholder.svg?height=100&width=100" alt="Artwork 6" class="img-fluid rounded">
                                            <span class="artwork-title">Color Study</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Artist Statement</h5>
                            <div class="mb-3">
                                <label for="artistStatement" class="form-label">Describe your artistic approach and the work you plan to exhibit</label>
                                <textarea class="form-control" id="artistStatement" rows="4" placeholder="Enter your artist statement..."></textarea>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Additional Information</h5>
                            <div class="mb-3">
                                <label for="exhibitionHistory" class="form-label">Previous Exhibition Experience</label>
                                <textarea class="form-control" id="exhibitionHistory" rows="3" placeholder="List your previous exhibition experience..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="specialRequirements" class="form-label">Special Requirements (Optional)</label>
                                <textarea class="form-control" id="specialRequirements" rows="2" placeholder="Any special requirements for your booth..."></textarea>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Terms & Conditions</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="termsCheck" required>
                                <label class="form-check-label" for="termsCheck">
                                    I have read and agree to the <a href="#" target="_blank">Terms and Conditions</a> for participating in this art fair.
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="submitApplicationBtn">Submit Application</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/artist-register-fair.js"></script>
</body>
</html>
