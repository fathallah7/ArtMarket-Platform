<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Cards - ArtGallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php
    include '../includes/header.php';
    ?>

    <!-- Gift Cards Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <?php
                include '../includes/msg.php';
                ?>
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Gift Cards</h1>
                    <p class="lead">The perfect gift for art lovers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gift Card Options -->
    <section class="gift-card-options py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Choose Your Gift Card</h2>
                <p class="text-muted">Select a design and amount that fits your occasion</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-8 mx-auto">
<form action="../back/send_gift_card.php" method="POST" id="giftCardForm">
    <!-- Gift Card Amount -->
    <div class="gift-card-amount mb-5">
        <h3 class="mb-4">Select an Amount</h3>
        <div class="row g-3">
            <div class="col-md-3 col-6">
                <div class="amount-option">
                    <input type="radio" name="cardAmount" id="amount1" class="amount-input" value="50" checked>
                    <label for="amount1" class="amount-label">$50</label>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="amount-option">
                    <input type="radio" name="cardAmount" id="amount2" class="amount-input" value="100">
                    <label for="amount2" class="amount-label">$100</label>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="amount-option">
                    <input type="radio" name="cardAmount" id="amount3" class="amount-input" value="250">
                    <label for="amount3" class="amount-label">$250</label>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="amount-option">
                    <input type="radio" name="cardAmount" id="amount4" class="amount-input" value="500">
                    <label for="amount4" class="amount-label">$500</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Recipient Information -->
    <div class="recipient-info mb-5">
        <h3 class="mb-4">Recipient Information</h3>

        <div class="mb-3">
            <label for="recipientName" class="form-label">Recipient's Name</label>
            <input type="text" class="form-control" name="recipientName" id="recipientName" placeholder="Enter recipient's name" required>
        </div>
        <div class="mb-3">
            <label for="recipientEmail" class="form-label">Recipient's Email</label>
            <input type="email" class="form-control" name="recipientEmail" id="recipientEmail" placeholder="Enter recipient's email" required>
        </div>
        <div class="mb-3">
            <label for="senderName" class="form-label">Your Name</label>
            <input type="text" class="form-control" name="senderName" id="senderName" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
            <label for="personalMessage" class="form-label">Personal Message (Optional)</label>
            <textarea class="form-control" name="personalMessage" id="personalMessage" rows="3" placeholder="Add a personal message..."></textarea>
        </div>
    </div>

    <!-- Delivery Options -->
    <div class="delivery-options mb-5">
        <h3 class="mb-4">Delivery Options</h3>
        <div class="card mb-3">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="deliveryOption" id="deliveryEmail" value="email" checked>
                    <label class="form-check-label" for="deliveryEmail">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-envelope fs-4 me-3"></i>
                            <div>
                                <h5 class="mb-1">Email Delivery</h5>
                                <p class="mb-0 text-muted">Send directly to recipient's email</p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="text-center mb-5">
        <button class="btn btn-primary btn-lg" type="submit" name="submit">
            <i class="bi bi-bag-plus me-2"></i> Send Gift Card
        </button>
    </div>
</form>

                </div>

            </div>
        </div>
    </section>


    <!-- Gift Card FAQs -->
    <section class="gift-card-faqs py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Frequently Asked Questions</h2>
                <p class="text-muted">Everything you need to know about our gift cards</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="giftCardFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How long are gift cards valid?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#giftCardFAQ">
                                <div class="accordion-body">
                                    Our gift cards never expire. The recipient can use it whenever they're ready to make a purchase.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can gift cards be used for any purchase?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#giftCardFAQ">
                                <div class="accordion-body">
                                    Yes, gift cards can be used for any artwork, art fair tickets, or services available on our platform, including shipping costs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I check the balance of a gift card?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#giftCardFAQ">
                                <div class="accordion-body">
                                    Yes, you can check the balance of a gift card by entering the gift card code on the "Check Balance" page or by contacting our customer service team.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What if the purchase exceeds the gift card amount?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#giftCardFAQ">
                                <div class="accordion-body">
                                    If the purchase amount exceeds the gift card balance, the recipient can pay the difference using another payment method during checkout.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can I cancel or get a refund for a gift card?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#giftCardFAQ">
                                <div class="accordion-body">
                                    Gift cards are non-refundable and cannot be exchanged for cash. However, if there's an issue with your gift card purchase, please contact our customer service team for assistance.
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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/gift-cards.js"></script>
</body>

</html>