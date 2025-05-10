document.addEventListener("DOMContentLoaded", () => {
  const advisorRequestForm = document.getElementById("advisorRequestForm")

  if (advisorRequestForm) {
    advisorRequestForm.addEventListener("submit", (e) => {
      e.preventDefault()

      // Validate form
      if (!validateForm()) {
        return
      }

      // Collect form data
      const formData = collectFormData()

      // In a real application, you would send this data to the server
      console.log("Form data submitted:", formData)

      // Show success modal
      const successModal = new bootstrap.Modal(document.getElementById("successModal"))
      successModal.show()

      // Reset form
      advisorRequestForm.reset()
    })
  }

  function validateForm() {
    let isValid = true

    // Check required fields
    const requiredFields = ["budget", "space", "contactPreference"]
    requiredFields.forEach((field) => {
      const element = document.getElementById(field)
      if (!element.value) {
        element.classList.add("is-invalid")
        isValid = false
      } else {
        element.classList.remove("is-invalid")
      }
    })

    // Check terms checkbox
    const termsCheck = document.getElementById("termsCheck")
    if (!termsCheck.checked) {
      termsCheck.classList.add("is-invalid")
      isValid = false
    } else {
      termsCheck.classList.remove("is-invalid")
    }

    // Check if at least one art type is selected
    const artTypes = ["paintings", "sculptures", "photography", "prints", "digital", "mixed"]
    let artTypeSelected = false
    artTypes.forEach((type) => {
      if (document.getElementById(type).checked) {
        artTypeSelected = true
      }
    })

    if (!artTypeSelected) {
      artTypes.forEach((type) => {
        document.getElementById(type).classList.add("is-invalid")
      })
      isValid = false
    } else {
      artTypes.forEach((type) => {
        document.getElementById(type).classList.remove("is-invalid")
      })
    }

    return isValid
  }

  function collectFormData() {
    const formData = {
      artTypes: [],
      artStyles: [],
      budget: document.getElementById("budget").value,
      space: document.getElementById("space").value,
      spaceDescription: document.getElementById("spaceDescription").value,
      additionalInfo: document.getElementById("additionalInfo").value,
      contactPreference: document.getElementById("contactPreference").value,
    }

    // Collect art types
    const artTypes = ["paintings", "sculptures", "photography", "prints", "digital", "mixed"]
    artTypes.forEach((type) => {
      if (document.getElementById(type).checked) {
        formData.artTypes.push(type)
      }
    })

    // Collect art styles
    const artStyles = ["abstract", "contemporary", "impressionist", "minimalist", "realism", "pop"]
    artStyles.forEach((style) => {
      if (document.getElementById(style).checked) {
        formData.artStyles.push(style)
      }
    })

    // In a real application, you would handle file uploads differently
    const spacePhotos = document.getElementById("spacePhotos").files
    formData.hasPhotos = spacePhotos.length > 0

    return formData
  }

  // Add event listeners to remove validation styling on input
  const formInputs = document.querySelectorAll("input, select, textarea")
  formInputs.forEach((input) => {
    input.addEventListener("input", function () {
      this.classList.remove("is-invalid")
    })
  })
})
