<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Art Advisor - ArtGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        .main-content {
            max-width: 1800px;
            margin: 0 auto;
        }
    </style>
</head>

<body>


    <?php
    include '../includes/header.php';
    require_once('../class/class.php');
    ?>

    <div class="main-content container">


        <div class="d-flex">


            <!-- Main content -->
            <div class="main-content">


                <!-- Page content -->
                <div class="container py-4 animate-fade-in">
                    <?php
                    include '../includes/msg.php';
                    ?>
                    <div class="mb-4">
                        <h1 class="fw-bold">Request an Art Advisor</h1>
                        <p class="text-muted">Get personalized recommendations from our expert art advisors to find the perfect artwork for your space.</p>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4">Tell us about your art preferences</h3>
                            <form id="advisorRequestForm" method="POST" action="../back/submit_request.php">

                                <div class="mb-4">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your full name">
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email address">
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">What type of art are you interested in?</label>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="artTypes[]" value="paintings" id="paintings">
                                                <label class="form-check-label" for="paintings">Paintings</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="artTypes[]" value="sculptures" id="sculptures">
                                                <label class="form-check-label" for="sculptures">Sculptures</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="artTypes[]" value="photography" id="photography">
                                                <label class="form-check-label" for="photography">Photography</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="artTypes[]" value="prints" id="prints">
                                                <label class="form-check-label" for="prints">Prints</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="artTypes[]" value="digital" id="digital">
                                                <label class="form-check-label" for="digital">Digital Art</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="artTypes[]" value="mixed" id="mixed">
                                                <label class="form-check-label" for="mixed">Mixed Media</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="budget" class="form-label">What is your budget range?</label>
                                    <select class="form-select" id="budget" name="budget" required>
                                        <option value="" selected disabled>Select your budget range</option>
                                        <option value="under-500">Under $500</option>
                                        <option value="500-1000">$500 - $1,000</option>
                                        <option value="1000-5000">$1,000 - $5,000</option>
                                        <option value="5000-10000">$5,000 - $10,000</option>
                                        <option value="10000-plus">$10,000+</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="space" class="form-label">Where will you display the artwork?</label>
                                    <select class="form-select" id="space" name="space" required>
                                        <option value="" selected disabled>Select space type</option>
                                        <option value="home-living">Home - Living Room</option>
                                        <option value="home-bedroom">Home - Bedroom</option>
                                        <option value="home-dining">Home - Dining Room</option>
                                        <option value="office-private">Office - Private Office</option>
                                        <option value="office-common">Office - Common Area</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="spaceDescription" class="form-label">Describe your space (colors, style, dimensions)</label>
                                    <textarea class="form-control" id="spaceDescription" name="spaceDescription" rows="3" placeholder="Please describe the space where you plan to display the artwork..."></textarea>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Terms Modal -->
        <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Art Advisory Service Terms</h6>
                        <p>By using our Art Advisory Service, you agree to the following terms:</p>
                        <ol>
                            <li>The Art Advisory Service is provided free of charge for initial consultations.</li>
                            <li>Our advisors will contact you within 48 business hours of your submission.</li>
                            <li>Any photos you upload will only be used for the purpose of providing recommendations.</li>
                            <li>You are under no obligation to purchase any artwork recommended by our advisors.</li>
                            <li>Personal information provided will be handled in accordance with our Privacy Policy.</li>
                        </ol>
                        <p>For more information, please contact our customer service team.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php
    include '../includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/customer-request-advisor.js"></script>
</body>

</html>