<?php
session_start();
include '../includes/conn.php';
?>

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">ArtGallery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="explore.php">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="collections.php">Collections</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artists.php">Artists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="art-fairs.php">Art Fairs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gift-cards.php">Gift Card</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customer-request-advisor.php">Art Advisor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                </li>
            </ul>


            <?php if (isset($_SESSION['user']) && $_SESSION['user_role'] == 'visitor'): ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-icon position-relative" href="favorites.php">
                            <i class="bi bi-heart"></i>
                        </a>
                    </li>
                    <?php
                    $user_id = $_SESSION['user_id'];
                    $sql = "SELECT COUNT(*) as total FROM cart WHERE user_id = $user_id";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $cartCount = $row['total'];
                    ?>
                    <li class="nav-item">
                        <a class="nav-link nav-icon position-relative" href="cart.php">
                            <i class="bi bi-bag"></i>
                            <span class="cart-count"><?= $cartCount ?></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="../back/<?php echo $_SESSION['user_image'] ?>" alt="Profile" class="rounded-circle" width="32" height="32">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="customer-dashboard.php">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../back/handle_logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>


            <?php else: ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-primary me-2" href="login.php"> Login
                            <i class='bx bx-user'></i>
                        </a>
                        <a href="register.php" class="btn btn-primary">Register</a>
                    </li>
                </ul>
            <?php endif; ?>
            <?php ; ?>


        </div>
    </div>
</nav>