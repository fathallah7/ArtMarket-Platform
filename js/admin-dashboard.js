import { Chart } from "@/components/ui/chart"
document.addEventListener("DOMContentLoaded", () => {
  // Set current date
  const now = new Date()
  const options = { year: "numeric", month: "long", day: "numeric" }
  document.getElementById("currentDate").textContent = now.toLocaleDateString("en-US", options)

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

  // Sample chart data - in a real application, this would come from the server
  // This is just a placeholder for demonstration purposes
  const salesData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May"],
    datasets: [
      {
        label: "Sales ($)",
        data: [15200, 22800, 18500, 24200, 28100],
        backgroundColor: "rgba(218, 98, 125, 0.2)",
        borderColor: "rgba(218, 98, 125, 1)",
        borderWidth: 2,
        tension: 0.4,
      },
    ],
  }

  const userGrowthData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May"],
    datasets: [
      {
        label: "New Users",
        data: [120, 145, 98, 178, 156],
        backgroundColor: "rgba(75, 192, 192, 0.2)",
        borderColor: "rgba(75, 192, 192, 1)",
        borderWidth: 2,
        tension: 0.4,
      },
    ],
  }

  // If Chart.js is included, initialize charts
  if (typeof Chart !== "undefined") {
    // Sales Chart
    const salesChartCtx = document.getElementById("salesChart")
    if (salesChartCtx) {
      new Chart(salesChartCtx, {
        type: "line",
        data: salesData,
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: "top",
            },
          },
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      })
    }

    // User Growth Chart
    const userGrowthCtx = document.getElementById("userGrowthChart")
    if (userGrowthCtx) {
      new Chart(userGrowthCtx, {
        type: "bar",
        data: userGrowthData,
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: "top",
            },
          },
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      })
    }
  }
})
