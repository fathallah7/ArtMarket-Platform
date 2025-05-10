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

  // Toggle favorite on artwork cards
  const favoriteButtons = document.querySelectorAll(".favorite-btn")

  favoriteButtons.forEach((button) => {
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
