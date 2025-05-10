document.addEventListener("DOMContentLoaded", () => {
  // Mobile sidebar toggle
  const sidebarToggle = document.querySelector(".navbar-toggler")
  const sidebar = document.querySelector(".sidebar")

  if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("show")
    })
  }

  // Close sidebar when clicking outside on mobile
  document.addEventListener("click", (event) => {
    const isClickInsideSidebar = sidebar.contains(event.target)
    const isClickInsideToggle = sidebarToggle.contains(event.target)

    if (!isClickInsideSidebar && !isClickInsideToggle && sidebar.classList.contains("show")) {
      sidebar.classList.remove("show")
    }
  })

  // Image preview functionality
  const mainImage = document.getElementById("mainImage")
  const mainImagePreview = document.getElementById("mainImagePreview")

  if (mainImage && mainImagePreview) {
    mainImage.addEventListener("change", function () {
      const file = this.files[0]
      if (file) {
        const reader = new FileReader()
        reader.onload = (e) => {
          mainImagePreview.innerHTML = `<img src="${e.target.result}" class="img-fluid" style="max-height: 180px;" alt="Artwork Preview">`
        }
        reader.readAsDataURL(file)
      } else {
        mainImagePreview.innerHTML = `
                    <i class="bi bi-image fs-1 text-muted"></i>
                    <p class="mb-0">No image selected</p>
                `
      }
    })
  }

  // Form submission
  const addArtworkForm = document.getElementById("addArtworkForm")

  if (addArtworkForm) {
    addArtworkForm.addEventListener("submit", (e) => {
      e.preventDefault()

      // Validate form
      if (!validateForm()) {
        return
      }

      // Collect form data
      const formData = collectFormData()

      // In a real application, you would send this data to the server
      console.log("Form data submitted:", formData)

      // Show success message
      showSuccessMessage()
    })
  }

  function validateForm() {
    let isValid = true

    // Check required fields
    const requiredFields = [
      "artworkTitle",
      "artistSelect",
      "categorySelect",
      "price",
      "stockQuantity",
      "description",
      "mainImage",
    ]
    requiredFields.forEach((field) => {
      const element = document.getElementById(field)
      if (!element.value) {
        element.classList.add("is-invalid")
        isValid = false
      } else {
        element.classList.remove("is-invalid")
      }
    })

    return isValid
  }

  function collectFormData() {
    const formData = {
      title: document.getElementById("artworkTitle").value,
      artist: document.getElementById("artistSelect").value,
      category: document.getElementById("categorySelect").value,
      price: document.getElementById("price").value,
      stockQuantity: document.getElementById("stockQuantity").value,
      description: document.getElementById("description").value,
      yearCreated: document.getElementById("yearCreated").value,
      dimensions: {
        width: document.getElementById("width").value,
        height: document.getElementById("height").value,
      },
      materials: document.getElementById("materials").value,
      styles: [],
      status: document.getElementById("statusSelect").value,
      featured: document.getElementById("featuredCheck").checked,
    }

    // Collect style tags
    const styleTags = ["abstract", "contemporary", "impressionist", "minimalist", "realism", "pop"]
    styleTags.forEach((style) => {
      if (document.getElementById(`${style}Check`).checked) {
        formData.styles.push(style)
      }
    })

    // In a real application, you would handle file uploads differently
    const mainImageFile = document.getElementById("mainImage").files[0]
    formData.hasMainImage = !!mainImageFile

    return formData
  }

  function showSuccessMessage() {
    // Create a success alert
    const alertDiv = document.createElement("div")
    alertDiv.className = "alert alert-success alert-dismissible fade show"
    alertDiv.role = "alert"
    alertDiv.innerHTML = `
            <strong>Success!</strong> The artwork has been added successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `

    // Insert the alert before the form
    addArtworkForm.parentNode.insertBefore(alertDiv, addArtworkForm)

    // Reset the form
    addArtworkForm.reset()

    // Reset the main image preview
    mainImagePreview.innerHTML = `
            <i class="bi bi-image fs-1 text-muted"></i>
            <p class="mb-0">No image selected</p>
        `

    // Scroll to the top of the form
    window.scrollTo({
      top: alertDiv.offsetTop - 100,
      behavior: "smooth",
    })

    // Automatically dismiss the alert after 5 seconds
    setTimeout(() => {
      const bsAlert = new bootstrap.Alert(alertDiv)
      bsAlert.close()
    }, 5000)
  }

  // Add event listeners to remove validation styling on input
  const formInputs = document.querySelectorAll("input, select, textarea")
  formInputs.forEach((input) => {
    input.addEventListener("input", function () {
      this.classList.remove("is-invalid")
    })
  })

  // Initialize Bootstrap Alert (if Bootstrap is not globally available)
  const alertList = document.querySelectorAll(".alert")
  alertList.forEach((alert) => {
    new bootstrap.Alert(alert)
  })
})
