document.addEventListener("DOMContentLoaded", () => {
  // Toggle sidebar on mobile
  const sidebarToggle = document.getElementById("sidebarToggle")
  const sidebar = document.querySelector(".sidebar")

  if (sidebarToggle) {
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("show")
    })
  }

  // Close sidebar when clicking outside on mobile
  document.addEventListener("click", (event) => {
    const isClickInsideSidebar = sidebar.contains(event.target)
    const isClickOnToggle = sidebarToggle && sidebarToggle.contains(event.target)

    if (!isClickInsideSidebar && !isClickOnToggle && sidebar.classList.contains("show")) {
      sidebar.classList.remove("show")
    }
  })

  // Toggle favorite button
  const favoriteBtn = document.getElementById("favoriteBtn")

  if (favoriteBtn) {
    favoriteBtn.addEventListener("click", function () {
      const icon = this.querySelector("i")

      if (icon.classList.contains("bi-heart")) {
        icon.classList.remove("bi-heart")
        icon.classList.add("bi-heart-fill")
      } else {
        icon.classList.remove("bi-heart-fill")
        icon.classList.add("bi-heart")
      }
    })
  }

  // Related artworks favorite buttons
  const relatedFavoriteButtons = document.querySelectorAll(".favorite-btn")

  relatedFavoriteButtons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault()
      const icon = this.querySelector("i")

      if (icon.classList.contains("bi-heart")) {
        icon.classList.remove("bi-heart")
        icon.classList.add("bi-heart-fill")
        this.classList.remove("btn-light")
        this.classList.add("btn-primary")
      } else {
        icon.classList.remove("bi-heart-fill")
        icon.classList.add("bi-heart")
        this.classList.remove("btn-primary")
        this.classList.add("btn-light")
      }
    })
  })
})
