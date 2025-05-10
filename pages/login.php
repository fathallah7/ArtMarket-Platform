<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ArtGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center min-vh-100 align-items-center py-5">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card auth-card border-0 shadow-lg animate-fade-in">
                    <div class="card-body p-4 p-md-5">
                        <div class="text-center mb-4">
                            <div class="mb-4">
                                <i class="bi bi-box-arrow-in-right text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h2 class="h3 mb-2">Welcome to ArtGallery</h2>
                            <p class="text-muted">Sign in to your account to continue</p>
                        </div>
                        
                        <?php 
                        session_start();
                        include '../includes/msg.php'; 
                        ?>

                        <form id="loginForm" action="../back/handle_login.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="your@email.com" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="••••••••" required>
                                    <button class="btn btn-outline-secondary toggle-password" type="button">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="text-decoration-none small">Forgot password?</a>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </form>
                        <div class="text-center mt-4">
                            <p class="mb-0">Don't have an account? <a href="register.php" class="text-decoration-none">Register</a></p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="index.php" class="text-decoration-none">
                        <i class="bi bi-arrow-left me-1"></i> Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>