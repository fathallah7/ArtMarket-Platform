document.addEventListener("DOMContentLoaded", () => {
  // Elements
  const roomPreview = document.getElementById("roomPreview")
  const artworkOverlay = document.getElementById("artworkOverlay")
  const selectedArtwork = document.getElementById("selectedArtwork")
  const sizeSlider = document.getElementById("sizeSlider")
  const uploadRoomBtn = document.getElementById("uploadRoomBtn")
  const rotateLeftBtn = document.getElementById("rotateLeftBtn")
  const rotateRightBtn = document.getElementById("rotateRightBtn")
  const resetBtn = document.getElementById("resetBtn")
  const roomTemplates = document.querySelectorAll(".room-template")
  const colorSwatches = document.querySelectorAll(".color-swatch")
  const uploadModalElement = document.getElementById("uploadModal") // Get the modal element
  const uploadModal = new bootstrap.Modal(uploadModalElement) // Initialize Bootstrap Modal
  const roomPhotoUpload = document.getElementById("roomPhotoUpload")
  const uploadPreview = document.getElementById("uploadPreview")
  const confirmUploadBtn = document.getElementById("confirmUploadBtn")
  const tryInRoomBtns = document.querySelectorAll(".try-in-room")
  const addToCartBtn = document.getElementById("addToCartBtn")
  const saveToFavoritesBtn = document.getElementById("saveToFavoritesBtn")

  // Variables
  let rotation = 0
  let scale = 1
  let isDragging = false
  let startX, startY
  let translateX = 0
  let translateY = 0

  // Initialize artwork position
  positionArtwork()

  // Event Listeners
  sizeSlider.addEventListener("input", function () {
    scale = this.value / 100
    positionArtwork()
  })

  rotateLeftBtn.addEventListener("click", () => {
    rotation -= 5
    positionArtwork()
  })

  rotateRightBtn.addEventListener("click", () => {
    rotation += 5
    positionArtwork()
  })

  resetBtn.addEventListener("click", () => {
    rotation = 0
    scale = 1
    translateX = 0
    translateY = 0
    sizeSlider.value = 100
    positionArtwork()
  })

  uploadRoomBtn.addEventListener("click", () => {
    uploadModal.show()
  })

  roomPhotoUpload.addEventListener("change", (e) => {
    if (e.target.files && e.target.files[0]) {
      const reader = new FileReader()
      reader.onload = (e) => {
        uploadPreview.src = e.target.result
        uploadPreview.parentElement.classList.remove("d-none")
      }
      reader.readAsDataURL(e.target.files[0])
    }
  })

  confirmUploadBtn.addEventListener("click", () => {
    if (uploadPreview.src) {
      roomPreview.src = uploadPreview.src
      uploadModal.hide()
    }
  })

  // Room templates
  roomTemplates.forEach((template) => {
    template.addEventListener("click", function () {
      const room = this.getAttribute("data-room")
      // In a real app, you would have actual room images
      roomPreview.src = `/placeholder.svg?height=600&width=800&text=${room}`
    })
  })

  // Wall color swatches
  colorSwatches.forEach((swatch) => {
    swatch.addEventListener("click", function () {
      const color = this.getAttribute("data-color")
      // In a real app, you would change the wall color
      console.log(`Wall color changed to ${color}`)
    })
  })

  // Try in room buttons
  tryInRoomBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const artworkCard = this.closest(".artwork-card")
      const artworkImg = artworkCard.querySelector(".artwork-image img")
      const artworkTitle = artworkCard.querySelector("h4").textContent

      // Update the selected artwork
      selectedArtwork.src = artworkImg.src
      document.getElementById("artworkThumbnail").src = artworkImg.src
      document.querySelector(".selected-artwork-details h4").textContent = artworkTitle

      // Scroll to the room preview
      document.querySelector(".room-preview-container").scrollIntoView({ behavior: "smooth" })
    })
  })

  // Make artwork draggable
  artworkOverlay.addEventListener("mousedown", startDrag)
  document.addEventListener("mousemove", drag)
  document.addEventListener("mouseup", endDrag)

  // Touch support for mobile
  artworkOverlay.addEventListener("touchstart", startDragTouch)
  document.addEventListener("touchmove", dragTouch)
  document.addEventListener("touchend", endDrag)

  // Add to cart button
  addToCartBtn.addEventListener("click", () => {
    alert("Artwork added to cart!")
    // In a real app, you would add the artwork to the cart
  })

  // Save to favorites button
  saveToFavoritesBtn.addEventListener("click", () => {
    alert("Artwork saved to favorites!")
    // In a real app, you would save the artwork to favorites
  })

  // Functions
  function positionArtwork() {
    artworkOverlay.style.transform = `translate(${translateX}px, ${translateY}px) rotate(${rotation}deg) scale(${scale})`
  }

  function startDrag(e) {
    isDragging = true
    startX = e.clientX - translateX
    startY = e.clientY - translateY
    artworkOverlay.style.cursor = "grabbing"
  }

  function drag(e) {
    if (!isDragging) return
    e.preventDefault()
    translateX = e.clientX - startX
    translateY = e.clientY - startY
    positionArtwork()
  }

  function startDragTouch(e) {
    isDragging = true
    startX = e.touches[0].clientX - translateX
    startY = e.touches[0].clientY - translateY
  }

  function dragTouch(e) {
    if (!isDragging) return
    translateX = e.touches[0].clientX - startX
    translateY = e.touches[0].clientY - startY
    positionArtwork()
  }

  function endDrag() {
    isDragging = false
    artworkOverlay.style.cursor = "grab"
  }
})
