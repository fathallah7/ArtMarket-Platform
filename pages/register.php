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
                                <i class="bi bi-person-plus text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h2 class="h3 mb-2">Create an Account</h2>
                            <p class="text-muted">Join our community of art enthusiasts</p>
                        </div>

                        <ul class="nav nav-pills nav-justified mb-4" id="userTypeTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="visitor-tab" data-bs-toggle="pill" data-bs-target="#visitor" type="button" role="tab" aria-controls="visitor" aria-selected="true">Visitor</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="artist-tab" data-bs-toggle="pill" data-bs-target="#artist" type="button" role="tab" aria-controls="artist" aria-selected="false">Artist</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="userTypeTabContent">
                            <div class="tab-pane fade show active" id="visitor" role="tabpanel" aria-labelledby="visitor-tab">
                                <p class="text-muted small mb-4">Register as a visitor to browse, purchase, and collect artwork.</p>


                                <form id="visitorRegisterForm" action="../back/handle_register.php" method="post">
                                    <input type="hidden" name="role" value="visitor">
                                    <div class="mb-3">
                                        <label for="visitorName" class="form-label">Full Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input type="text" name="name" class="form-control" id="visitorName" placeholder="John Doe" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="visitorEmail" class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input type="email" name="email" class="form-control" id="visitorEmail" placeholder="your@email.com" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="visitorPassword" class="form-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                            <input type="password" name="password" class="form-control" id="visitorPassword" placeholder="••••••••" required>
                                            <button class="btn btn-outline-secondary toggle-password" type="button">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
                                    </div>
                                </form>

                            </div>
                            <div class="tab-pane fade" id="artist" role="tabpanel" aria-labelledby="artist-tab">
                                <p class="text-muted small mb-4">Register as an artist to showcase and sell your artwork to a global audience.</p>



                                <form id="artistRegisterForm" action="../back/handle_register.php" method="post" >
                                    <input type="hidden" name="role" value="artist">
                                    <div class="mb-3">
                                        <label for="artistName" class="form-label">Full Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input type="text" name="name" class="form-control" id="artistName" placeholder="John Doe" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="artistEmail" class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input type="email" name="email" class="form-control" id="artistEmail" placeholder="your@email.com" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="artistPassword" class="form-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                            <input type="password" name="password" class="form-control" id="artistPassword" placeholder="••••••••" required>
                                            <button class="btn btn-outline-secondary toggle-password" type="button">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <p class="mb-0">Already have an account? <a href="login.php" class="text-decoration-none">Sign In</a></p>
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
    <script src="js/register.js"></script>
</body>

</html>