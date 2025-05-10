document.addEventListener("DOMContentLoaded", () => {
  // Elements
  const fairApplicationModal = document.getElementById("fairApplicationModal")
  const fairNameElement = document.getElementById("fairName")
  const fairLocationElement = document.getElementById("fairLocation")
  const fairDatesElement = document.getElementById("fairDates")
  const submitApplicationBtn = document.getElementById("submitApplicationBtn")
  const artworkCheckboxes = document.querySelectorAll(".artwork-checkbox")
  const boothOptions = document.querySelectorAll('input[name="boothSize"]')

  // Set fair details when modal is opened
  fairApplicationModal.addEventListener("show.bs.modal", (event) => {
    const button = event.relatedTarget
    const fairName = button.getAttribute("data-fair")

    // Set fair name in modal
    fairNameElement.textContent = fairName

    // Set other fair details based on the fair name
    // In a real application, this would come from an API or database
    switch (fairName) {
      case "International Art Expo 2023":
        fairLocationElement.textContent = "Metropolitan Convention Center, New York"
        fairDatesElement.textContent = "October 15-20, 2023"
        break
      case "Contemporary Art Fair":
        fairLocationElement.textContent = "Grand Palais, Paris, France"
        fairDatesElement.textContent = "November 5-10, 2023"
        break
      case "Asian Art Expo":
        fairLocationElement.textContent = "Tokyo International Exhibition Center, Japan"
        fairDatesElement.textContent = "December 12-18, 2023"
        break
      case "Digital Art Summit":
        fairLocationElement.textContent = "Moscone Center, San Francisco, USA"
        fairDatesElement.textContent = "January 20-25, 2024"
        break
      default:
        fairLocationElement.textContent = "Location TBD"
        fairDatesElement.textContent = "Dates TBD"
    }
  })

  // Limit artwork selection to maximum 10
  let selectedArtworksCount = 0
  artworkCheckboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", function () {
      if (this.checked) {
        selectedArtworksCount++
        if (selectedArtworksCount > 10) {
          this.checked = false
          selectedArtworksCount--
          alert("You can select a maximum of 10 artworks.")
        }
      } else {
        selectedArtworksCount--
      }
    })
  })

  // Submit application
  submitApplicationBtn.addEventListener("click", () => {
    // Validate form
    if (!validateForm()) {
      return
    }

    // Get selected booth size
    let boothSize
    boothOptions.forEach((option) => {
      if (option.checked) {
        boothSize = option.value
      }
    })

    // Get selected artworks
    const selectedArtworks = []
    artworkCheckboxes.forEach((checkbox) => {
      if (checkbox.checked) {
        selectedArtworks.push(checkbox.value)
      }
    })

    // Get artist statement
    const artistStatement = document.getElementById("artistStatement").value

    // In a real application, you would send this data to the server
    // For this example, we'll just show a success message
    alert(`Application submitted successfully for ${fairNameElement.textContent}!`)

    // Close the modal
    const modal = bootstrap.Modal.getInstance(fairApplicationModal)
    modal.hide()
  })

  // Form validation
  function validateForm() {
    let isValid = true

    // Check if at least 5 artworks are selected
    if (selectedArtworksCount < 5) {
      alert("Please select at least 5 artworks.")
      isValid = false
    }

    // Check if artist statement is entered
    const artistStatement = document.getElementById("artistStatement")
    if (!artistStatement.value.trim()) {
      artistStatement.classList.add("is-invalid")
      isValid = false
    } else {
      artistStatement.classList.remove("is-invalid")
    }

    // Check if terms are accepted
    const termsCheck = document.getElementById("termsCheck")
    if (!termsCheck.checked) {
      alert("You must accept the terms and conditions to proceed.")
      isValid = false
    }

    return isValid
  }

  const bootstrap = window.bootstrap
})
