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

    <!-- Cart Section -->
    <section class="cart-section">
        <div class="container">
            <div class="section-header mb-4">
                <?php
                include '../includes/msg.php';
                ?>
                <h1>Your Shopping Cart</h1>
                <p class="text-muted">Review your items before checkout</p>
            </div>

            <div class="row">
                <!-- Cart Items -->
                <div class="col-lg-8">
                    <div class="cart-items">
                        <!-- Cart Item 1 -->

                        <?php
                        $result = Visitor::Cart();
                        $total = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $subtotal = $row['price'] * $row['quantity'];
                            $total += $subtotal;
                        ?>
                            <div class="cart-item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="../admin/back/<?php echo $row['main_image'] ?>" alt="Colorful Abstraction" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-6">
                                        <h4><?php echo $row['title'] ?></h4>
                                        <p class="text-muted">by <?php echo $row['artist_name'] ?></p>
                                        <div class="item-details">
                                            <p class="item-info">Price: $<?php echo number_format($row['price'], 2) ?></p>
                                            <p class="item-info">Quantity: <?php echo $row['quantity'] ?></p>
                                        </div>
                                        <div class="item-actions mt-2">
                                            <a href="#" class="text-decoration-none me-3">
                                                <i class="bi bi-heart me-1"></i> Save for Later
                                            </a>
                                            <a href="../back/handle_cart.php?id_del=<?php echo $row['id'] ?>" class="text-decoration-none text-danger">
                                                <i class="bi bi-trash me-1"></i> Remove
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <p class="item-price fw-bold">$ <?php echo number_format($subtotal, 2) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                    <!-- Continue Shopping -->
                    <div class="continue-shopping mt-4">
                        <a href="explore.php" class="btn btn-outline-primary">
                            <i class="bi bi-arrow-left me-2"></i> Continue Shopping
                        </a>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="order-summary">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Order Summary</h3>
                            </div>
                            <div class="card-body">
                                <div class="summary-item d-flex justify-content-between mb-2">
                                    <span>Subtotal</span>
                                    <span><?php echo number_format($total, 2) ?></span>
                                </div>
                                <div class="summary-item d-flex justify-content-between mb-2">
                                    <span>Shipping</span>
                                    <span class="text-success">Free</span>
                                </div>
                                <div class="summary-item d-flex justify-content-between mb-2">
                                    <span>Tax</span>
                                    <span class="text-success">Free</span>
                                </div>
                                <hr>
                                <div class="summary-total d-flex justify-content-between mb-3">
                                    <span class="fw-bold">Total</span>
                                    <span class="fw-bold"><?php echo number_format($total, 2) ?></span>
                                </div>

                                <!-- Promo Code -->
                                <div class="promo-code mb-3">
                                    <label for="promoCode" class="form-label">Promo Code</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="promoCode" placeholder="Enter code">
                                        <button class="btn btn-outline-primary" type="button">Apply</button>
                                    </div>
                                </div>

                                <!-- Checkout Button -->
                                <div class="d-grid">
                                    <form action="../back/handle_checkout.php" method="post">
                                        <input type="hidden" name="total" value="<?php echo $total; ?>">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-lg">Proceed to Checkout</button>
                                        </div>
                                    </form>

                                </div>

                                <!-- Payment Options -->
                                <div class="payment-options mt-3 text-center">
                                    <p class="text-muted small mb-2">Secure Checkout</p>
                                    <div class="d-flex justify-content-center gap-3">
                                        <i class="bi bi-credit-card"></i>
                                        <i class="bi bi-paypal"></i>
                                        <i class="bi bi-apple"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Policy -->
                        <div class="shipping-policy mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Shipping & Returns</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Free shipping worldwide</li>
                                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Arrives in 5-7 business days</li>
                                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> 14-day return policy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Need Help -->
                        <div class="need-help mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Need Help?</h5>
                                    <p class="mb-2">Our art advisors are here to assist you with your purchase.</p>
                                    <a href="#" class="btn btn-outline-primary">Contact Us</a>
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
    <script src="js/cart.js"></script>
</body>

</html>