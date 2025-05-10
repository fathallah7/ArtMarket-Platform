document.addEventListener("DOMContentLoaded", () => {
  // Elements
  const feedbackForm = document.getElementById("feedbackForm")
  const ratingStars = document.querySelectorAll(".rating-stars i")
  const ratingValue = document.getElementById("ratingValue")
  const successModalElement = document.getElementById("successModal")
  const successModal = new bootstrap.Modal(successModalElement)

  // Initialize rating stars
  ratingStars.forEach((star) => {
    star.addEventListener("mouseover", function () {
      const rating = Number.parseInt(this.getAttribute("data-rating"))
      highlightStars(rating)
    })

    star.addEventListener("mouseout", () => {
      const currentRating = Number.parseInt(ratingValue.value)
      highlightStars(currentRating)
    })

    star.addEventListener("click", function () {
      const rating = Number.parseInt(this.getAttribute("data-rating"))
      ratingValue.value = rating
      highlightStars(rating)
    })
  })

  // Form submission
  feedbackForm.addEventListener("submit", (e) => {
    e.preventDefault()

    // Validate form
    if (!validateForm()) {
      return
    }

    // In a real application, you would send the form data to the server
    // For this example, we'll just show the success modal
    setTimeout(() => {
      successModal.show()
      feedbackForm.reset()
      highlightStars(0)
    }, 1000)
  })

  // Functions
  function highlightStars(rating) {
    ratingStars.forEach((star) => {
      const starRating = Number.parseInt(star.getAttribute("data-rating"))
      if (starRating <= rating) {
        star.classList.remove("bi-star")
        star.classList.add("bi-star-fill")
        star.classList.add("text-warning")
      } else {
        star.classList.remove("bi-star-fill")
        star.classList.remove("text-warning")
        star.classList.add("bi-star")
      }
    })
  }

  function validateForm() {
    let isValid = true

    // Check if rating is selected
    if (ratingValue.value === "0") {
      alert("Please select a rating")
      isValid = false
    }

    // Check if feedback type is selected
    const feedbackType = document.getElementById("feedbackType")
    if (feedbackType.value === "") {
      feedbackType.classList.add("is-invalid")
      isValid = false
    } else {
      feedbackType.classList.remove("is-invalid")
    }

    // Check if subject is entered
    const subject = document.getElementById("feedbackSubject")
    if (subject.value.trim() === "") {
      subject.classList.add("is-invalid")
      isValid = false
    } else {
      subject.classList.remove("is-invalid")
    }

    // Check if message is entered
    const message = document.getElementById("feedbackMessage")
    if (message.value.trim() === "") {
      message.classList.add("is-invalid")
      isValid = false
    } else {
      message.classList.remove("is-invalid")
    }

    // Check if email is valid (if provided)
    const email = document.getElementById("feedbackEmail")
    if (email.value.trim() !== "") {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      if (!emailRegex.test(email.value.trim())) {
        email.classList.add("is-invalid")
        isValid = false
      } else {
        email.classList.remove("is-invalid")
      }
    }

    return isValid
  }
})
