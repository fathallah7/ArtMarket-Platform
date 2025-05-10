document.addEventListener("DOMContentLoaded", () => {
  // Mobile sidebar toggle
  const sidebarToggle = document.querySelector(".navbar-toggler")
  const sidebar = document.querySelector(".sidebar")

  if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("show")
    })
  }

  // Close sidebar when clicking outside on mobile
  document.addEventListener("click", (event) => {
    const isClickInsideSidebar = sidebar.contains(event.target)
    const isClickInsideToggle = sidebarToggle.contains(event.target)

    if (!isClickInsideSidebar && !isClickInsideToggle && sidebar.classList.contains("show")) {
      sidebar.classList.remove("show")
    }
  })

  // Select all checkbox functionality
  const selectAllCheckbox = document.getElementById("selectAll")
  const checkboxes = document.querySelectorAll("tbody .form-check-input")

  if (selectAllCheckbox) {
    selectAllCheckbox.addEventListener("change", () => {
      checkboxes.forEach((checkbox) => {
        checkbox.checked = selectAllCheckbox.checked
      })
    })
  }

  // Individual checkbox change event
  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", () => {
      // Check if all checkboxes are checked
      const allChecked = Array.from(checkboxes).every((c) => c.checked)
      // Update the "select all" checkbox
      if (selectAllCheckbox) {
        selectAllCheckbox.checked = allChecked
        selectAllCheckbox.indeterminate = !allChecked && Array.from(checkboxes).some((c) => c.checked)
      }
    })
  })

  // Filter functionality
  const feedbackTypeFilter = document.getElementById("feedbackType")
  const ratingFilter = document.getElementById("ratingFilter")
  const statusFilter = document.getElementById("statusFilter")
  const searchInput = document.getElementById("searchFeedback")

  // Apply filters function
  function applyFilters() {
    // In a real application, this would make an AJAX request to the server
    // with the filter parameters and update the table with the results
    console.log("Applying filters:")
    console.log("Type:", feedbackTypeFilter.value)
    console.log("Rating:", ratingFilter.value)
    console.log("Status:", statusFilter.value)
    console.log("Search:", searchInput.value)

    // For demonstration purposes, we'll just show an alert
    alert("Filters applied! In a real application, this would filter the feedback list.")
  }

  // Add event listeners to filters
  if (feedbackTypeFilter) feedbackTypeFilter.addEventListener("change", applyFilters)
  if (ratingFilter) ratingFilter.addEventListener("change", applyFilters)
  if (statusFilter) statusFilter.addEventListener("change", applyFilters)

  // Add debounce to search input
  let searchTimeout
  if (searchInput) {
    searchInput.addEventListener("input", () => {
      clearTimeout(searchTimeout)
      searchTimeout = setTimeout(applyFilters, 500)
    })
  }

  // Response form in modal
  const responseForm = document.getElementById("responseForm")
  const sendResponseBtn = document.querySelector(".modal-footer .btn-success")

  if (sendResponseBtn && responseForm) {
    sendResponseBtn.addEventListener("click", () => {
      const status = document.getElementById("responseStatus").value
      const message = document.getElementById("responseMessage").value
      const sendEmail = document.getElementById("sendEmailCheck").checked

      if (!message.trim()) {
        alert("Please enter a response message.")
        return
      }

      // In a real application, this would send the response to the server
      console.log("Sending response:")
      console.log("Status:", status)
      console.log("Message:", message)
      console.log("Send Email:", sendEmail)

      // Close the modal
      const feedbackModal = document.getElementById("feedbackModal")
      const modal = bootstrap.Modal.getInstance(feedbackModal)

      modal.hide()

      // Show success message
      alert("Response sent successfully!")
    })
  }
})
