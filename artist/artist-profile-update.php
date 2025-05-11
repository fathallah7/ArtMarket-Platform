<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Dashboard - ArtGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php
    include 'includes/header.php';
    include 'includes/conn.php';
    include '../class/class.php';
    ?>


    <div class="container mt-5 mb-5">
        <div class="profile-container">
            <div class="profile-header d-flex align-items-center gap-3">
                <img src="../back/<?php echo $_SESSION['user_image'] ?>" alt="Profile Picture" class="profile-img" style="width: 80px; height: 80px; border-radius: 50%;">
                <div>
                    <h5> <?php echo $_SESSION['name'] ?> </h5>
                </div>
            </div>
            <hr>



            <?php
            include '../includes/msg.php';
            ?>
            <form action="back/handle_profile_artist.php" method="post" enctype="multipart/form-data">
                <div class="mt-3">
                    <label class="form-label">Change Profile Picture</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name'] ?>">
                    </div>
                    <div class="col-md-8">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['user_email'] ?>">
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <label class="form-label">Enter Work Name</label>
                    <input type="text" name="work_name" class="form-control" value="<?php echo $_SESSION['user_work_name'] ?>">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Enter Your Bio</label>
                    <textarea  name="bio" id="" class="form-control" rows="6" placeholder="Enter Your Bio"><?php echo $_SESSION['user_bio'] ?></textarea>
                </div>

                <hr>

                <!-- Password section hidden for now -->

                <button type="submit" name="submit" class="btn btn-primary w-100">Save</button>
            </form>


        </div>
    </div>



</body>

</html>