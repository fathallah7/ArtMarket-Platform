<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View In Room</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php
    include '../includes/header.php';
    ?>


    <!-- View In Room Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>View Art In Your Room</h1>
                    <p class="lead">Visualize how artwork will look in your space before you buy</p>
                </div>
            </div>
        </div>
    </section>

    <!-- View In Room Tool -->
    <section class="view-in-room-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-preview-container">
                        <div class="room-preview">
                            <img src="/placeholder.svg?height=600&width=800" alt="Room Preview" class="img-fluid rounded" id="roomPreview">
                            <div class="artwork-overlay" id="artworkOverlay">
                                <img src="/placeholder.svg?height=300&width=300" alt="Selected Artwork" id="selectedArtwork">
                            </div>
                        </div>
                        <div class="room-controls mt-3">
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary" id="uploadRoomBtn">
                                    <i class="bi bi-upload me-2"></i> Upload Your Room
                                </button>
                                <div class="btn-group">
                                    <button class="btn btn-outline-secondary" id="rotateLeftBtn">
                                        <i class="bi bi-arrow-counterclockwise"></i>
                                    </button>
                                    <button class="btn btn-outline-secondary" id="rotateRightBtn">
                                        <i class="bi bi-arrow-clockwise"></i>
                                    </button>
                                </div>
                                <button class="btn btn-outline-secondary" id="resetBtn">
                                    <i class="bi bi-arrow-repeat me-2"></i> Reset
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Room Templates -->
                    <div class="room-templates mt-4">
                        <h4>Or Choose a Room Template</h4>
                        <div class="row g-3 mt-2">
                            <div class="col-md-3">
                                <div class="room-template" data-room="living-room">
                                    <img src="/placeholder.svg?height=150&width=150" alt="Living Room" class="img-fluid rounded">
                                    <p class="mt-2 text-center">Living Room</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="room-template" data-room="bedroom">
                                    <img src="/placeholder.svg?height=150&width=150" alt="Bedroom" class="img-fluid rounded">
                                    <p class="mt-2 text-center">Bedroom</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="room-template" data-room="dining-room">
                                    <img src="/placeholder.svg?height=150&width=150" alt="Dining Room" class="img-fluid rounded">
                                    <p class="mt-2 text-center">Dining Room</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="room-template" data-room="office">
                                    <img src="/placeholder.svg?height=150&width=150" alt="Office" class="img-fluid rounded">
                                    <p class="mt-2 text-center">Office</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Selected Artwork -->
                    <div class="selected-artwork-container">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Selected Artwork</h3>
                            </div>
                            <div class="card-body">
                                <div class="selected-artwork-details">
                                    <img src="/placeholder.svg?height=200&width=200" alt="Colorful Abstraction" class="img-fluid rounded mb-3" id="artworkThumbnail">
                                    <h4>Colorful Abstraction</h4>
                                    <p class="text-muted">by Sarah Johnson</p>
                                    <div class="artwork-specs">
                                        <p><strong>Medium:</strong> Acrylic on Canvas</p>
                                        <p><strong>Size:</strong> 36 × 48 in (91.4 × 121.9 cm)</p>
                                        <p><strong>Price:</strong> $1,200</p>
                                    </div>
                                    <div class="artwork-actions mt-3">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" id="addToCartBtn">
                                                <i class="bi bi-bag-plus me-2"></i> Add to Cart
                                            </button>
                                            <button class="btn btn-outline-primary" id="saveToFavoritesBtn">
                                                <i class="bi bi-heart me-2"></i> Save to Favorites
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Size Controls -->
                    <div class="size-controls mt-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Adjust Size</h4>
                            </div>
                            <div class="card-body">
                                <label for="sizeSlider" class="form-label">Artwork Size</label>
                                <input type="range" class="form-range" min="50" max="150" value="100" id="sizeSlider">
                                <div class="d-flex justify-content-between">
                                    <span>Small</span>
                                    <span>Medium</span>
                                    <span>Large</span>
                                </div>
                                
                                <div class="mt-3">
                                    <label class="form-label">Wall Color</label>
                                    <div class="d-flex gap-2">
                                        <button class="color-swatch bg-white" data-color="white"></button>
                                        <button class="color-swatch bg-light" data-color="light"></button>
                                        <button class="color-swatch bg-secondary" data-color="gray"></button>
                                        <button class="color-swatch bg-dark" data-color="dark"></button>
                                        <button class="color-swatch bg-primary" data-color="blue"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>How It Works</h2>
                <p class="text-muted">Visualize art in your space in three easy steps</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="step-card text-center">
                        <div class="step-icon mb-3">
                            <i class="bi bi-image fs-1"></i>
                        </div>
                        <h3>1. Select Artwork</h3>
                        <p>Choose any artwork from our gallery that you'd like to visualize in your space.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-card text-center">
                        <div class="step-icon mb-3">
                            <i class="bi bi-camera fs-1"></i>
                        </div>
                        <h3>2. Upload or Choose Room</h3>
                        <p>Upload a photo of your room or select from our room templates.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-card text-center">
                        <div class="step-icon mb-3">
                            <i class="bi bi-arrows-move fs-1"></i>
                        </div>
                        <h3>3. Adjust and Visualize</h3>
                        <p>Resize and position the artwork to see how it looks in your space.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recently Viewed -->
    <section class="recently-viewed py-5">
        <div class="container">
            <div class="section-header mb-4">
                <h2>Recently Viewed Artworks</h2>
                <p class="text-muted">Try visualizing these in your space</p>
            </div>
            <div class="row g-4">
                <!-- Artwork 1 -->
                <div class="col-md-3">
                    <div class="artwork-card">
                        <div class="artwork-image">
                            <img src="/placeholder.svg?height=300&width=300" alt="Abstract Painting" class="img-fluid rounded">
                            <div class="artwork-actions">
                                <button class="btn-favorite" title="Add to Favorites">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <button class="btn-preview" title="View in Room">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="artwork-info mt-3">
                            <h4>Vibrant Dreams</h4>
                            <p class="artist">by Sarah Johnson</p>
                            <p class="price">$950</p>
                            <div class="d-flex justify-content-between">
                                <a href="artwork-detail.html" class="btn btn-sm btn-outline-primary">View Details</a>
                                <button class="btn btn-sm btn-primary try-in-room">Try in Room</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artwork 2 -->
                <div class="col-md-3">
                    <div class="artwork-card">
                        <div class="artwork-image">
                            <img src="/placeholder.svg?height=300&width=300" alt="Landscape Painting" class="img-fluid rounded">
                            <div class="artwork-actions">
                                <button class="btn-favorite" title="Add to Favorites">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <button class="btn-preview" title="View in Room">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="artwork-info mt-3">
                            <h4>Autumn Valley</h4>
                            <p class="artist">by Michael Chen</p>
                            <p class="price">$1,050</p>
                            <div class="d-flex justify-content-between">
                                <a href="artwork-detail.html" class="btn btn-sm btn-outline-primary">View Details</a>
                                <button class="btn btn-sm btn-primary try-in-room">Try in Room</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artwork 3 -->
                <div class="col-md-3">
                    <div class="artwork-card">
                        <div class="artwork-image">
                            <img src="/placeholder.svg?height=300&width=300" alt="Photography" class="img-fluid rounded">
                            <div class="artwork-actions">
                                <button class="btn-favorite" title="Add to Favorites">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <button class="btn-preview" title="View in Room">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="artwork-info mt-3">
                            <h4>City Lights</h4>
                            <p class="artist">by James Wilson</p>
                            <p class="price">$780</p>
                            <div class="d-flex justify-content-between">
                                <a href="artwork-detail.html" class="btn btn-sm btn-outline-primary">View Details</a>
                                <button class="btn btn-sm btn-primary try-in-room">Try in Room</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artwork 4 -->
                <div class="col-md-3">
                    <div class="artwork-card">
                        <div class="artwork-image">
                            <img src="/placeholder.svg?height=300&width=300" alt="Abstract Painting" class="img-fluid rounded">
                            <div class="artwork-actions">
                                <button class="btn-favorite" title="Add to Favorites">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <button class="btn-preview" title="View in Room">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="artwork-info mt-3">
                            <h4>Color Symphony</h4>
                            <p class="artist">by Elena Rodriguez</p>
                            <p class="price">$1,300</p>
                            <div class="d-flex justify-content-between">
                                <a href="artwork-detail.html" class="btn btn-sm btn-outline-primary">View Details</a>
                                <button class="btn btn-sm btn-primary try-in-room">Try in Room</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- File Upload Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload Room Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="roomPhotoUpload" class="form-label">Select a photo of your room</label>
                        <input class="form-control" type="file" id="roomPhotoUpload" accept="image/*">
                    </div>
                    <div class="upload-preview d-none">
                        <img src="/placeholder.svg" alt="Room Preview" class="img-fluid rounded" id="uploadPreview">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmUploadBtn">Use This Photo</button>
                </div>
            </div>
        </div>
    </div>

        <?php
    include '../includes/header.php';
    ?>
    

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/view-in-room.js"></script>
</body>
</html>
