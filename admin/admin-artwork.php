<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ArtGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>


    <div class="d-flex">

        <?php
        include 'includes/header.php';
        include 'includes/conn.php';
        ?>


        <!-- Main Content -->
        <div class="main-content p-4 bg-light">
            <div class="container-fluid">


                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Artworks</h2>
                        <a href="admin-artworks.html" class="btn btn-sm btn-outline-primary">View All Artworks</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Artwork</th>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Price $</th>
                                        <th>Quantity</th>
                                        <th>Width x Hight</th>
                                        <th>Matirials</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM artworks";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="back/<?php  echo $row['main_image'] ?>" class="me-2" alt="Artwork" width="50px">
                                                    <div><?php  echo $row['title'] ?></div>
                                                </div>
                                            </td>
                                            <td><?php  echo $row['id'] ?></td>
                                            <td><?php  echo $row['category'] ?></td>
                                            <td><?php  echo $row['price'] . " $"?></td>
                                            <td><?php  echo $row['quantity'] ?></td>
                                            <td><?php  echo $row['width'] . ' x ' . $row['height'] ?></td>
                                            <td><span class="badge bg-success"><?php  echo $row['materials'] ?></span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                        Actions
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="admin-edit-artwork.html">Edit</a></li>
                                                        <li><a class="dropdown-item text-danger" href="back/handle_artworks_admin.php?id_delete=<?php echo $row['id']; ?>">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




            </div>
        </div>


        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/admin-add-artwork.js"></script>
</body>

</html>