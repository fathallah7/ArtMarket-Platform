document.addEventListener("DOMContentLoaded", () => {
  // Elements
  const removeButtons = document.querySelectorAll(".btn-remove-favorite")
  const clearAllBtn = document.getElementById("clearAllBtn")
  const addToCartButtons = document.querySelectorAll(".add-to-cart")
  const createCollectionBtn = document.getElementById("createCollectionBtn")
  const collectionForm = document.getElementById("collectionForm")

  // Remove individual favorite
  removeButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const favoriteCard = this.closest(".favorite-card")

      // Confirm before removing
      if (confirm("Remove this artwork from your favorites?")) {
        // Add fade-out animation
        favoriteCard.style.transition = "opacity 0.3s ease"
        favoriteCard.style.opacity = "0"

        // Remove the element after animation completes
        setTimeout(() => {
          favoriteCard.closest(".col-md-3").remove()
          updateFavoriteCount()
        }, 300)
      }
    })
  })

  // Clear all favorites
  clearAllBtn.addEventListener("click", () => {
    if (confirm("Are you sure you want to clear all favorites? This action cannot be undone.")) {
      const favoriteCards = document.querySelectorAll(".favorite-card")

      // Add fade-out animation to all cards
      favoriteCards.forEach((card) => {
        card.style.transition = "opacity 0.3s ease"
        card.style.opacity = "0"
      })

      // Remove all elements after animation completes
      setTimeout(() => {
        favoriteCards.forEach((card) => {
          card.closest(".col-md-3").remove()
        })
        updateFavoriteCount()
      }, 300)
    }
  })

  // Add to cart
  addToCartButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const artworkTitle = this.closest(".favorite-card").querySelector("h4").textContent

      // Show success message
      const toast = document.createElement("div")
      toast.className = "toast-notification"
      toast.innerHTML = `
                <div class="toast-content">
                    <i class="bi bi-check-circle-fill text-success"></i>
                    <span>${artworkTitle} added to cart</span>
                </div>
            `
      document.body.appendChild(toast)

      // Show the toast
      setTimeout(() => {
        toast.classList.add("show")
      }, 100)

      // Hide and remove the toast after 3 seconds
      setTimeout(() => {
        toast.classList.remove("show")
        setTimeout(() => {
          document.body.removeChild(toast)
        }, 300)
      }, 3000)

      // Update cart count (in a real app, this would be handled by a cart service)
      const cartCount = document.querySelector(".cart-count")
      cartCount.textContent = Number.parseInt(cartCount.textContent) + 1
    })
  })

  // Create collection
  createCollectionBtn.addEventListener("click", () => {
    const collectionName = document.getElementById("collectionName").value

    if (!collectionName) {
      alert("Please enter a collection name")
      return
    }

    // In a real app, you would send this data to the server
    // For this example, we'll just show a success message
    alert(`Collection "${collectionName}" created successfully!`)

    // Close the modal
    const modalElement = document.getElementById("createCollectionModal")
    const modal = bootstrap.Modal.getInstance(modalElement)
    modal.hide()

    // Reset the form
    collectionForm.reset()
  })

  // Update favorite count
  function updateFavoriteCount() {
    const count = document.querySelectorAll(".favorite-card").length
    const countDisplay = document.querySelector(".favorites-controls h3")
    countDisplay.textContent = `Saved Artworks (${count})`

    // Show empty state if no favorites
    if (count === 0) {
      const favoritesSection = document.querySelector(".favorites-section .container")
      const emptyState = document.createElement("div")
      emptyState.className = "empty-state text-center py-5"
      emptyState.innerHTML = `
                <i class="bi bi-heart fs-1 text-muted mb-3"></i>
                <h3>No Favorites Yet</h3>
                <p class="text-muted">Start adding artworks to your favorites by clicking the heart icon on any artwork.</p>
                <a href="browse.html" class="btn btn-primary mt-3">Browse Artworks</a>
            `

      // Remove the favorites grid and pagination
      const favoritesGrid = document.querySelector(".favorites-section .row.g-4")
      const pagination = document.querySelector(".favorites-section nav")

      if (favoritesGrid) {
        favoritesGrid.remove()
      }

      if (pagination) {
        pagination.remove()
      }

      favoritesSection.appendChild(emptyState)
    }
  }

  // Add CSS for toast notifications
  const style = document.createElement("style")
  style.textContent = `
        .toast-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            padding: 12px 20px;
            z-index: 1050;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        
        .toast-notification.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        .toast-content {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .btn-remove-favorite {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: opacity 0.2s ease;
        }
        
        .favorite-image:hover .btn-remove-favorite {
            opacity: 1;
        }
    `
  document.head.appendChild(style)

  // Initialize Bootstrap Modal (if not already initialized)
  const bootstrap = window.bootstrap
})
