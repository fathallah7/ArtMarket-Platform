document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.getElementById("loginForm")
  const emailInput = document.getElementById("email")
  const passwordInput = document.getElementById("password")
  const emailError = document.getElementById("emailError")
  const passwordError = document.getElementById("passwordError")
  const togglePassword = document.getElementById("togglePassword")
  const toggleIcon = document.getElementById("toggleIcon")
  const userTypeTabs = document.getElementById("userTypeTab")

  // Toggle password visibility
  togglePassword.addEventListener("click", () => {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
    passwordInput.setAttribute("type", type)

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
  loginForm.addEventListener("submit", (e) => {
    e.preventDefault()
    let isValid = true

    // Reset error messages
    emailError.textContent = ""
    passwordError.textContent = ""
    emailInput.classList.remove("is-invalid")
    passwordInput.classList.remove("is-invalid")

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
    }

    if (isValid) {
      // Get selected user type
      const activeTab = userTypeTabs.querySelector(".nav-link.active")
      const userType = activeTab.id.replace("-tab", "")

      // Redirect based on user type
      switch (userType) {
        case "visitor":
          window.location.href = "customer-dashboard.html"
          break
        case "artist":
          window.location.href = "artist-dashboard.html"
          break
        case "admin":
          window.location.href = "admin-dashboard.html"
          break
        case "advisor":
          window.location.href = "advisor-dashboard.html"
          break
        default:
          window.location.href = "customer-dashboard.html"
      }
    }
  })
})
