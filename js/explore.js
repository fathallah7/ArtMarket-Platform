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

  // Price range slider functionality
  const priceRange = document.getElementById("priceRange")
  const minPrice = document.getElementById("minPrice")
  const maxPrice = document.getElementById("maxPrice")

  if (priceRange) {
    priceRange.addEventListener("input", function () {
      const value = this.value
      minPrice.textContent = `$0`
      maxPrice.textContent = `$${value}`
    })
  }

  // Mobile price range slider
  const mobilePriceRange = document.getElementById("mobilePriceRange")
  const mobileMinPrice = document.getElementById("mobileMinPrice")
  const mobileMaxPrice = document.getElementById("mobileMaxPrice")

  if (mobilePriceRange) {
    mobilePriceRange.addEventListener("input", function () {
      const value = this.value
      mobileMinPrice.textContent = `$0`
      mobileMaxPrice.textContent = `$${value}`
    })
  }

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

  // Filter functionality
  const categoryCheckboxes = document.querySelectorAll('input[type="checkbox"][id^="category-"]')
  const artworkCards = document.querySelectorAll(".artwork-card")

  categoryCheckboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", filterArtworks)
  })

  function filterArtworks() {
    const selectedCategories = Array.from(categoryCheckboxes)
      .filter((checkbox) => checkbox.checked)
      .map((checkbox) => checkbox.value)

    // If no categories selected, show all
    if (selectedCategories.length === 0) {
      artworkCards.forEach((card) => {
        card.closest(".col-sm-6").style.display = "block"
      })
      return
    }

    // Filter based on selected categories
    artworkCards.forEach((card) => {
      const category = card.querySelector(".text-muted").textContent.toLowerCase()
      const shouldShow = selectedCategories.some((cat) => category.includes(cat.toLowerCase()))

      card.closest(".col-sm-6").style.display = shouldShow ? "block" : "none"
    })
  }
})
