<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists - ArtGallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php
    include '../includes/header.php';
    ?>


    <!-- Feedback Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Share Your Feedback</h1>
                    <p class="lead">We value your opinion and are committed to improving your experience</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Feedback Form -->
    <section class="feedback-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <?php
                    include '../includes/msg.php';
                    ?>
                    <div class="card shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <form id="feedbackForm" action="../back/handle_feedback.php" method="post">
                                <div class="mb-4">
                                    <h4>How would you rate your overall experience?</h4>
                                    <div class="rating-stars d-flex flex-row-reverse justify-content-center">
                                        <input type="radio" name="rating" id="star5" value="5"><label for="star5"><i class="bi bi-star fs-2" data-rating="5"></i></label>
                                        <input type="radio" name="rating" id="star4" value="4"><label for="star4"><i class="bi bi-star fs-2" data-rating="4"></i></label>
                                        <input type="radio" name="rating" id="star3" value="3"><label for="star3"><i class="bi bi-star fs-2" data-rating="3"></i></label>
                                        <input type="radio" name="rating" id="star2" value="2"><label for="star2"><i class="bi bi-star fs-2" data-rating="2"></i></label>
                                        <input type="radio" name="rating" id="star1" value="1"><label for="star1"><i class="bi bi-star fs-2" data-rating="1"></i></label>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h4>What aspects of our service did you enjoy?</h4>
                                </div>

                                <div class="mb-4">
                                    <label for="feedbackType" class="form-label">What type of feedback would you like to share?</label>
                                    <select class="form-select" id="feedbackType" name="feedbackType" required>
                                        <option value="" selected disabled>Select feedback type</option>
                                        <option value="general">General Feedback</option>
                                        <option value="suggestion">Suggestion</option>
                                        <option value="question">Question</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="feedbackSubject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="feedbackSubject" name="subject" placeholder="Brief description of your feedback" required>
                                </div>

                                <div class="mb-4">
                                    <label for="feedbackMessage" class="form-label">Your Feedback</label>
                                    <textarea class="form-control" id="feedbackMessage" name="message" rows="5" placeholder="Please share your thoughts in detail..." required></textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="feedbackEmail" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="feedbackEmail" name="email" placeholder="your@email.com" required>
                                    <div class="form-text">We'll only use this to follow up on your feedback if needed.</div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit Feedback</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>What Our Customers Say</h2>
                <p class="text-muted">Read feedback from our community</p>
            </div>
            <div class="reviews-grid">
                <?php
                require_once('../class/class.php');

                $visitor = new Visitor();
                $rowData = $visitor->ShowFeedback();
                while ($row = mysqli_fetch_assoc($rowData)) {
                ?>
                    <div class="review-card">
                        <div class="review-header">
                            <img src="../back/<?php echo $row['image'] ?>" alt="User">
                            <div class="reviewer-info">
                                <h4><?php echo $row['name'] ?></h4>
                                <div class="rating">
                                    <?php
                                    $rating = $row['rating'];
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo ($i <= $rating) ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            <?php echo $row['message'] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>



    <!-- FAQ -->
    <section class="faq py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Frequently Asked Questions</h2>
                <p class="text-muted">Find answers to common questions</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How long will it take to receive a response to my feedback?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We aim to respond to all feedback within 48 hours. For urgent matters, please contact our customer service team directly.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I submit anonymous feedback?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, you can submit feedback anonymously by leaving the email field blank. However, we won't be able to follow up with you directly.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do you use customer feedback?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We use customer feedback to improve our services, enhance our website, expand our art collection, and train our team. Your input directly influences our business decisions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can I update my feedback after submitting?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    If you need to update your feedback, please contact our customer service team with your original submission details, and they'll assist you.
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

    <script>
        const stars = document.querySelectorAll('.rating-stars i');
        let selectedRating = 0;

        stars.forEach(star => {
            star.addEventListener('mouseover', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                updateStars(rating);
            });

            star.addEventListener('mouseout', () => {
                updateStars(selectedRating);
            });

            star.addEventListener('click', () => {
                selectedRating = parseInt(star.getAttribute('data-rating'));
                updateStars(selectedRating);
            });
        });

        function updateStars(rating) {
            stars.forEach(star => {
                const starRating = parseInt(star.getAttribute('data-rating'));
                if (starRating <= rating) {
                    star.classList.remove('bi-star');
                    star.classList.add('bi-star-fill', 'text-warning');
                } else {
                    star.classList.add('bi-star');
                    star.classList.remove('bi-star-fill', 'text-warning');
                }
            });
        }
    </script>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/feedback.js"></script>
</body>

</html>