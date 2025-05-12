<?php
session_start();
?>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
   <div class="container">
      <a class="navbar-brand" href="../pages/index.php">ArtGallery</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav me-auto">
            <li class="nav-item">
               <a class="nav-link" href="admin-dashboard.php">Home</a>
            </li>
         </ul>
         <ul class="navbar-nav">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                  <img src="../assets/imgs/admin.png" alt="Profile" class="rounded-circle" width="32" height="32">
                  <span class="ms-2">Administrator</span>
               </a>
               <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="admin-dashboard.php">Dashboard</a></li>
                  <li><a class="dropdown-item" href="admin-profile.php">Profile</a></li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="back/handle_logout_admin.php">Logout</a></li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
</nav>

<!-- Sidebar -->
<div class="sidebar bg-white shadow-sm pt-5">
   <div class="text-center mb-4">
      <div class="avatar-container mb-3">
         <img src="../assets/imgs/admin.png" alt="Admin Profile" class="img-fluid rounded-circle">
      </div>
      <h5 class="mb-1">Admin User</h5>
      <p class="text-muted small">System Administrator</p>
   </div>
   <ul class="nav flex-column px-3">
      <li class="nav-item">
         <a class="nav-link" href="admin-dashboard.php">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link " href="admin-add-artwork.php">
            <i class="fa-solid fa-square-plus"></i> Add Artwork
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link " href="admin-artwork.php">
            <i class="fa-solid fa-images"></i> Artworks
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link " href="admin-add-fairs.php">
            <i class="fa-solid fa-plus"></i> Add Fairs
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link " href="admin-fairs.php">
            <i class="fa-solid fa-calendar-week"></i> Fairs
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="admin-feedback.php">
            <i class="fa-solid fa-message"></i> Feedback
            <span class="badge bg-danger rounded-pill ms-2">12</span>
         </a>
      </li>
   </ul>
</div>