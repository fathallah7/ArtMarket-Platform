document.addEventListener("DOMContentLoaded", () => {
  const registerForm = document.getElementById("registerForm")
  const nameInput = document.getElementById("name")
  const emailInput = document.getElementById("email")
  const passwordInput = document.getElementById("password")
  const confirmPasswordInput = document.getElementById("confirmPassword")
  const nameError = document.getElementById("nameError")
  const emailError = document.getElementById("emailError")
  const passwordError = document.getElementById("passwordError")
  const confirmPasswordError = document.getElementById("confirmPasswordError")
  const togglePassword = document.getElementById("togglePassword")
  const toggleIcon = document.getElementById("toggleIcon")

  // Toggle password visibility
  togglePassword.addEventListener("click", () => {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
    passwordInput.setAttribute("type", type)
    confirmPasswordInput.setAttribute("type", type)

    // Toggle eye icon
    if (type === "text") {
      toggleIcon.classList.remove("bi-eye")
      toggleIcon.classList.add("bi-eye-slash")
    } else {
      toggleIcon.classList.remove("bi-eye-slash")
      toggleIcon.classList.add("bi-eye")
    }
  })

  // Form validation and submission
  registerForm.addEventListener("submit", (e) => {
    e.preventDefault()
    let isValid = true

    // Reset error messages
    nameError.textContent = ""
    emailError.textContent = ""
    passwordError.textContent = ""
    confirmPasswordError.textContent = ""
    nameInput.classList.remove("is-invalid")
    emailInput.classList.remove("is-invalid")
    passwordInput.classList.remove("is-invalid")
    confirmPasswordInput.classList.remove("is-invalid")

    // Validate name
    if (!nameInput.value) {
      nameInput.classList.add("is-invalid")
      nameError.textContent = "Name is required"
      isValid = false
    }

    // Validate email
    if (!emailInput.value) {
      emailInput.classList.add("is-invalid")
      emailError.textContent = "Email is required"
      isValid = false
    } else if (!/\S+@\S+\.\S+/.test(emailInput.value)) {
      emailInput.classList.add("is-invalid")
      emailError.textContent = "Email is invalid"
      isValid = false
    }

    // Validate password
    if (!passwordInput.value) {
      passwordInput.classList.add("is-invalid")
      passwordError.textContent = "Password is required"
      isValid = false
    } else if (passwordInput.value.length < 8) {
      passwordInput.classList.add("is-invalid")
      passwordError.textContent = "Password must be at least 8 characters"
      isValid = false
    }

    // Validate confirm password
    if (!confirmPasswordInput.value) {
      confirmPasswordInput.classList.add("is-invalid")
      confirmPasswordError.textContent = "Please confirm your password"
      isValid = false
    } else if (passwordInput.value !== confirmPasswordInput.value) {
      confirmPasswordInput.classList.add("is-invalid")
      confirmPasswordError.textContent = "Passwords do not match"
      isValid = false
    }

    if (isValid) {
      // In a real app, you would register with a backend
      // For demo purposes, redirect to login
      window.location.href = "login.html"
    }
  })
})
