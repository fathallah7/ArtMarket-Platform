document.addEventListener("DOMContentLoaded", () => {
  // Elements
  const cardDesignInputs = document.querySelectorAll(".card-design-input")
  const amountInputs = document.querySelectorAll('input[name="cardAmount"]')
  const customAmountInput = document.querySelector(".custom-amount-input input")
  const amountCustom = document.getElementById("amountCustom")
  const recipientNameInput = document.getElementById("recipientName")
  const senderNameInput = document.getElementById("senderName")
  const personalMessageInput = document.getElementById("personalMessage")
  const scheduleOptions = document.querySelectorAll('input[name="scheduleOption"]')
  const scheduleDateTimeDiv = document.querySelector(".schedule-date-time")
  const addToCartBtn = document.getElementById("addToCartBtn")

  // Preview elements
  const previewImage = document.getElementById("previewImage")
  const previewAmount = document.getElementById("previewAmount")
  const previewAmountText = document.getElementById("previewAmountText")
  const previewRecipient = document.getElementById("previewRecipient")
  const previewSender = document.getElementById("previewSender")
  const previewMessage = document.getElementById("previewMessage")

  // Update preview when card design changes
  cardDesignInputs.forEach((input) => {
    input.addEventListener("change", function () {
      if (this.checked) {
        const designName = this.nextElementSibling.querySelector(".design-name").textContent
        previewImage.src = `/placeholder.svg?height=200&width=350&text=${designName}`
      }
    })
  })

  // Update preview when amount changes
  amountInputs.forEach((input) => {
    input.addEventListener("change", function () {
      if (this.checked && this.id !== "amountCustom") {
        const amount = this.nextElementSibling.textContent
        previewAmount.textContent = amount
        previewAmountText.textContent = amount
        customAmountInput.disabled = true
      } else if (this.checked && this.id === "amountCustom") {
        customAmountInput.disabled = false
        customAmountInput.focus()
      }
    })
  })

  // Update preview when custom amount changes
  customAmountInput.addEventListener("input", function () {
    const amount = `$${this.value}`
    previewAmount.textContent = amount
    previewAmountText.textContent = amount
  })

  // Update preview when recipient name changes
  recipientNameInput.addEventListener("input", function () {
    previewRecipient.textContent = this.value || "Recipient Name"
  })

  // Update preview when sender name changes
  senderNameInput.addEventListener("input", function () {
    previewSender.textContent = this.value || "Your Name"
  })

  // Update preview when personal message changes
  personalMessageInput.addEventListener("input", function () {
    previewMessage.textContent = this.value || "Your personal message will appear here."
  })

  // Show/hide schedule date and time
  scheduleOptions.forEach((option) => {
    option.addEventListener("change", function () {
      if (this.id === "sendLater" && this.checked) {
        scheduleDateTimeDiv.style.display = "flex"
      } else {
        scheduleDateTimeDiv.style.display = "none"
      }
    })
  })

  // Add to cart button
  addToCartBtn.addEventListener("click", () => {
    // Validate form
    if (!validateForm()) {
      return
    }

    // Get selected amount
    let amount
    if (amountCustom.checked) {
      amount = `$${customAmountInput.value}`
    } else {
      const selectedAmount = document.querySelector('input[name="cardAmount"]:checked:not(#amountCustom)')
      if (selectedAmount) {
        amount = selectedAmount.nextElementSibling.textContent
      }
    }

    // Show success message
    alert(`Gift card (${amount}) added to your cart!`)

    // In a real application, you would add the gift card to the cart
    // and redirect to the cart page or show a confirmation message
  })

  // Form validation
  function validateForm() {
    let isValid = true

    // Check if recipient name is entered
    if (!recipientNameInput.value.trim()) {
      recipientNameInput.classList.add("is-invalid")
      isValid = false
    } else {
      recipientNameInput.classList.remove("is-invalid")
    }

    // Check if recipient email is entered and valid
    const recipientEmail = document.getElementById("recipientEmail")
    if (!recipientEmail.value.trim()) {
      recipientEmail.classList.add("is-invalid")
      isValid = false
    } else {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      if (!emailRegex.test(recipientEmail.value.trim())) {
        recipientEmail.classList.add("is-invalid")
        isValid = false
      } else {
        recipientEmail.classList.remove("is-invalid")
      }
    }

    // Check if sender name is entered
    if (!senderNameInput.value.trim()) {
      senderNameInput.classList.add("is-invalid")
      isValid = false
    } else {
      senderNameInput.classList.remove("is-invalid")
    }

    // Check if custom amount is entered if selected
    if (amountCustom.checked && (!customAmountInput.value || customAmountInput.value < 10)) {
      customAmountInput.classList.add("is-invalid")
      isValid = false
    } else {
      customAmountInput.classList.remove("is-invalid")
    }

    // Check if delivery date is selected if send later is selected
    const sendLater = document.getElementById("sendLater")
    const deliveryDate = document.getElementById("deliveryDate")
    const deliveryTime = document.getElementById("deliveryTime")

    if (sendLater.checked) {
      if (!deliveryDate.value) {
        deliveryDate.classList.add("is-invalid")
        isValid = false
      } else {
        deliveryDate.classList.remove("is-invalid")
      }

      if (deliveryTime.value === "Select time") {
        deliveryTime.classList.add("is-invalid")
        isValid = false
      } else {
        deliveryTime.classList.remove("is-invalid")
      }
    }

    return isValid
  }
})
