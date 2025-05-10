<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Artwork - ArtGallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

  <?php
  include 'includes/header.php';
  ?>


  <div class="d-flex">

    <!-- Main content -->
    <div class="main-content">

      <!-- Page content -->
      <div class="container py-4 animate-fade-in">
        <div class="mb-4">
          <a href="artist-dashboard.html" class="btn btn-link text-decoration-none text-muted ps-0">
            <i class="bi bi-arrow-left me-2"></i> Back to Dashboard
          </a>

          <h1 class="fw-bold mt-3">Upload New Artwork</h1>
          <p class="text-muted">Share your latest creation with art enthusiasts around the world.</p>
        </div>

        <div class="row g-4">
          <div class="col-lg-8">
            <ul class="nav nav-tabs" id="uploadTabs" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab">Artwork Details</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="images-tab" data-bs-toggle="tab" data-bs-target="#images" type="button" role="tab">Images</button>
              </li>
            </ul>

            <form id="uploadForm">
              <div class="tab-content mt-4">
                <div class="tab-pane fade show active" id="details" role="tabpanel">
                  <div class="card">
                    <div class="card-header bg-white">
                      <h5 class="card-title mb-0">Artwork Information</h5>
                      <p class="card-text small text-muted">Provide detailed information about your artwork to help collectors find and appreciate your work.</p>
                    </div>
                    <div class="card-body">
                      <div class="mb-4">
                        <div class="row g-3">
                          <div class="col-md-6">
                            <label for="title" class="form-label">Artwork Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" required>
                          </div>
                          <div class="col-md-6">
                            <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                            <select class="form-select" id="category" required>
                              <option value="" selected disabled>Select category</option>
                              <option value="painting">Painting</option>
                              <option value="photography">Photography</option>
                              <option value="sculpture">Sculpture</option>
                              <option value="digital">Digital Art</option>
                              <option value="drawing">Drawing</option>
                              <option value="mixed-media">Mixed Media</option>
                              <option value="collage">Collage</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="mb-4">
                        <label for="medium" class="form-label">Medium <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="medium" placeholder="e.g., Oil on Canvas, Digital Print, Bronze, etc." required>
                      </div>

                      <div class="mb-4">
                        <label class="form-label">Dimensions <span class="text-danger">*</span></label>
                        <div class="row g-3">
                          <div class="col-md-4">
                            <label for="width" class="form-label small">Width (inches)</label>
                            <input type="number" class="form-control" id="width" min="0" step="0.1" required>
                          </div>
                          <div class="col-md-4">
                            <label for="height" class="form-label small">Height (inches)</label>
                            <input type="number" class="form-control" id="height" min="0" step="0.1" required>
                          </div>
                          <div class="col-md-4">
                            <label for="depth" class="form-label small">Depth (inches)</label>
                            <input type="number" class="form-control" id="depth" min="0" step="0.1" placeholder="Optional">
                          </div>
                        </div>
                      </div>

                      <div class="row g-3 mb-4">
                        <div class="col-md-6">
                          <label for="year" class="form-label">Year Created <span class="text-danger">*</span></label>
                          <input type="number" class="form-control" id="year" min="1900" max="2023" required>
                        </div>
                        <div class="col-md-6">
                          <label for="price" class="form-label">Price (USD) <span class="text-danger">*</span></label>
                          <input type="number" class="form-control" id="price" min="0" step="0.01" required>
                        </div>
                      </div>

                      <hr>

                      <div class="mb-4">
                        <label for="description" class="form-label">Artwork Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="description" rows="4" placeholder="Describe your artwork, including inspiration, techniques used, and the story behind it..." required></textarea>
                      </div>

                      <div class="mb-4">
                        <label for="keywords" class="form-label">Keywords/Tags</label>
                        <input type="text" class="form-control" id="keywords" placeholder="e.g., abstract, landscape, blue, nature (comma separated)">
                        <div class="form-text">Add keywords to help collectors find your artwork</div>
                      </div>

                      <hr>

                      <div class="mb-4">
                        <h6 class="mb-3">Selling Options</h6>
                        <div class="form-check mb-2">
                          <input class="form-check-input" type="checkbox" id="isForSale" checked>
                          <label class="form-check-label" for="isForSale">
                            This artwork is for sale
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="allowPrints">
                          <label class="form-check-label" for="allowPrints">
                            Allow prints and reproductions
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-white d-flex justify-content-between">
                      <button type="button" class="btn btn-outline-secondary" onclick="history.back()">Cancel</button>
                      <button type="button" class="btn btn-primary" onclick="switchToImagesTab()">Next: Upload Images</button>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="images" role="tabpanel">
                  <div class="card">
                    <div class="card-header bg-white">
                      <h5 class="card-title mb-0">Artwork Images</h5>
                      <p class="card-text small text-muted">Upload high-quality images of your artwork. You can upload multiple images to show different angles or details.</p>
                    </div>
                    <div class="card-body">
                      <div class="upload-area border border-2 border-dashed rounded-3 p-5 text-center mb-4">
                        <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                        <h5 class="mt-3">Drag and drop your images</h5>
                        <p class="text-muted small mb-4">or click to browse (JPG, PNG, WEBP, max 10MB each)</p>
                        <input type="file" id="artwork-images" class="d-none" accept="image/*" multiple>
                        <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('artwork-images').click()">
                          <i class="bi bi-upload me-2"></i> Select Images
                        </button>
                      </div>

                      <div id="uploaded-images" class="mb-4 d-none">
                        <h6 class="mb-3">Uploaded Images</h6>
                        <div class="row g-3" id="image-preview-container">
                          <!-- Image previews will be added here via JavaScript -->
                        </div>
                      </div>

                      <div class="bg-light rounded-3 p-3">
                        <div class="d-flex">
                          <i class="bi bi-info-circle text-primary me-2 fs-5"></i>
                          <div>
                            <h6>Image Guidelines</h6>
                            <ul class="small text-muted mb-0">
                              <li>Upload high-resolution images (at least 1500px on the longest side)</li>
                              <li>Ensure accurate color representation</li>
                              <li>Include the entire artwork in the frame</li>
                              <li>Avoid reflections, shadows, or distracting backgrounds</li>
                              <li>The first image will be used as the primary image</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-white d-flex justify-content-between">
                      <button type="button" class="btn btn-outline-secondary" onclick="switchToDetailsTab()">Back to Details</button>
                      <button type="submit" class="btn btn-primary">Submit Artwork</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-header bg-white">
                <div class="d-flex align-items-center">
                  <i class="bi bi-question-circle text-primary me-2"></i>
                  <h5 class="card-title mb-0">Tips for Success</h5>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <h6>Quality Images</h6>
                  <p class="small text-muted">High-quality images significantly increase your chances of selling. Use natural lighting and capture your artwork from multiple angles.</p>
                </div>
                <div class="mb-3">
                  <h6>Detailed Description</h6>
                  <p class="small text-muted">Tell the story behind your artwork. Include your inspiration, techniques used, and what makes this piece special.</p>
                </div>
                <div class="mb-3">
                  <h6>Accurate Dimensions</h6>
                  <p class="small text-muted">Provide precise measurements to help collectors visualize how the artwork will fit in their space.</p>
                </div>
                <div class="mb-3">
                  <h6>Relevant Keywords</h6>
                  <p class="small text-muted">Use specific keywords that accurately describe your artwork to improve discoverability in search results.</p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header bg-white">
                <h5 class="card-title mb-0">Submission Process</h5>
              </div>
              <div class="card-body">
                <div class="d-flex mb-3">
                  <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;">1</div>
                  <div>
                    <h6 class="mb-1">Submit Artwork</h6>
                    <p class="small text-muted mb-0">Complete the form with all required information.</p>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;">2</div>
                  <div>
                    <h6 class="mb-1">Review Process</h6>
                    <p class="small text-muted mb-0">Our team reviews your submission (typically within 24-48 hours).</p>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;">3</div>
                  <div>
                    <h6 class="mb-1">Publication</h6>
                    <p class="small text-muted mb-0">Once approved, your artwork will be published and visible to collectors.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle sidebar on mobile
    document.addEventListener('DOMContentLoaded', function() {
      const sidebarToggle = document.getElementById('sidebarToggle');
      const sidebar = document.querySelector('.sidebar');

      if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
          sidebar.classList.toggle('show');
        });
      }

      // Close sidebar when clicking outside on mobile
      document.addEventListener('click', function(event) {
        const isClickInsideSidebar = sidebar.contains(event.target);
        const isClickOnToggle = sidebarToggle && sidebarToggle.contains(event.target);

        if (!isClickInsideSidebar && !isClickOnToggle && sidebar.classList.contains('show')) {
          sidebar.classList.remove('show');
        }
      });

      // Handle file uploads
      const fileInput = document.getElementById('artwork-images');
      const previewContainer = document.getElementById('image-preview-container');
      const uploadedImagesSection = document.getElementById('uploaded-images');

      fileInput.addEventListener('change', function() {
        if (this.files.length > 0) {
          uploadedImagesSection.classList.remove('d-none');
          previewContainer.innerHTML = '';

          Array.from(this.files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
              const col = document.createElement('div');
              col.className = 'col-4';

              const imageContainer = document.createElement('div');
              imageContainer.className = 'position-relative border rounded overflow-hidden';
              imageContainer.style.aspectRatio = '1';

              const img = document.createElement('img');
              img.src = e.target.result;
              img.className = 'w-100 h-100 object-fit-cover';
              img.alt = 'Artwork preview';

              const removeBtn = document.createElement('button');
              removeBtn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0 m-1 rounded-circle';
              removeBtn.innerHTML = '&times;';
              removeBtn.style.width = '24px';
              removeBtn.style.height = '24px';
              removeBtn.style.padding = '0';
              removeBtn.style.lineHeight = '24px';
              removeBtn.setAttribute('type', 'button');
              removeBtn.addEventListener('click', function() {
                col.remove();
                if (previewContainer.children.length === 0) {
                  uploadedImagesSection.classList.add('d-none');
                }
              });

              if (index === 0) {
                const primaryBadge = document.createElement('div');
                primaryBadge.className = 'position-absolute bottom-0 start-0 end-0 bg-primary text-white text-center py-1 small';
                primaryBadge.textContent = 'Primary Image';
                imageContainer.appendChild(primaryBadge);
              }

              imageContainer.appendChild(img);
              imageContainer.appendChild(removeBtn);
              col.appendChild(imageContainer);
              previewContainer.appendChild(col);
            };
            reader.readAsDataURL(file);
          });
        }
      });

      // Form submission
      const uploadForm = document.getElementById('uploadForm');
      uploadForm.addEventListener('submit', function(e) {
        e.preventDefault();
        // In a real app, you would send this data to your backend
        window.location.href = 'artist-upload-success.html';
      });
    });

    // Tab navigation functions
    function switchToImagesTab() {
      const imagesTab = document.getElementById('images-tab');
      bootstrap.Tab.getOrCreateInstance(imagesTab).show();
    }

    function switchToDetailsTab() {
      const detailsTab = document.getElementById('details-tab');
      bootstrap.Tab.getOrCreateInstance(detailsTab).show();
    }
  </script>
</body>

</html>