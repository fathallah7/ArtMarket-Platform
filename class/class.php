<?php

abstract class User
{

    public $id;
    public $name;
    public $email;
    public $role = "visitor";
    public $password;

    function __construct($id = null, $name = null, $email = null, $password = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    public static function login($email, $password)
    {
        $qry = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ";
        require_once('../includes/conn.php');
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }
    }
}

// ##########################################################################
// ##########################################################################
// ##########################################################################
// ##########################################################################


class Visitor extends User
{


    public static function register($name, $email, $password, $role)
    {
        require_once('../includes/conn.php');

        $checkQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if ($checkResult->num_rows > 0) {
            return false;
        }

        $insertQuery = "INSERT INTO `users` (`name`, `email`, `password`, `role`)
                    VALUES ('$name','$email', '$password', '$role')";

        if (mysqli_query($conn, $insertQuery)) {
            return true;
        } else {
            return false;
        }
    }

    // ##########################################################################

    public function ProfileUpdate($id, $name, $email, $image)
    {
        require_once('../includes/conn.php');
        $profileUpdate = "UPDATE `users` SET
                            `name`='$name',`email`='$email',`image`='$image'
                                WHERE `id`='$id' ";
        $profileResult = mysqli_query($conn, $profileUpdate);
        return $profileResult;
    }

    // ##########################################################################

    public function ShowArtWorks()
    {
        global $conn;
        require_once('../includes/conn.php');
        $showArts = "SELECT * FROM `artworks` ORDER BY id DESC";
        $booksResult = mysqli_query($conn, $showArts);
        return $booksResult;
    }

    public function ShowArtWorksMoreDetails($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $showArts = "SELECT * FROM `artworks` WHERE `id` = '$id'";
        $booksResult = mysqli_query($conn, $showArts);
        return $booksResult;
    }

    // ##########################################################################

    public static function BuyArtWork($artwork_id)
    {
        global $conn;
        require('../includes/conn.php');
        session_start();
        if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])) {
            $_SESSION['error'] = "Login First To Buy Any Thing";
            header('Location: ../pages/artwork-detail.php');
            exit();
        }

        $user_id = $_SESSION['user_id'];
        $user_email = $_SESSION['user_email'];

        $check_query = "SELECT * FROM cart WHERE user_id = '$user_id' AND artwork_id = '$artwork_id'";
        $result = mysqli_query($conn, $check_query);

        if ($result->num_rows > 0) {
            $update_query = "UPDATE cart SET quantity = quantity + 1 WHERE user_id = '$user_id' AND artwork_id = '$artwork_id'";
            $conn->query($update_query);
        } else {
            $insert_query = "INSERT INTO cart (user_id, email, artwork_id) VALUES ('$user_id', '$user_email', '$artwork_id')";
            $conn->query($insert_query);
        }

        $_SESSION['msg'] = "An Art has been added to your cart.";
    }


    public static function Cart()
    {
        global $conn;
        require_once('../includes/conn.php');
        $user_id = $_SESSION['user_id'];
        $cart = "SELECT cart.*, artworks.title, artworks.price, artworks.main_image , artworks.artist_name
                FROM cart 
                JOIN artworks ON cart.artwork_id = artworks.id 
                WHERE cart.user_id = $user_id";
        if ($resultCart = mysqli_query($conn, $cart)) {
            return $resultCart;
        }
    }

    public static function RemoveFromCart($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `cart` WHERE `id` = $id ";
        $cartDelete = mysqli_query($conn, $delete);
        return $cartDelete;
    }

    // ##########################################################################

    public static function favorites($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $fav = "SELECT artworks.* FROM artworks 
                    JOIN favorites ON artworks.id = favorites.artwork_id 
                    WHERE favorites.user_id = $id";
        $favShow = mysqli_query($conn, $fav);
        return $favShow;
    }

    public static function RemoveFromFavorites($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `favorites` WHERE `artwork_id` = $id ";
        $favoritesDelete = mysqli_query($conn, $delete);
        return $favoritesDelete;
    }

    // ##########################################################################

    public function AddFeedback($userId, $userEmail, $feedback_type, $rating, $subject, $message)
    {
        global $conn;
        require_once('../includes/conn.php');
        $addFeedback = "INSERT INTO `feedback`(`user_id`, `email`, `feedback_type` , `rating` , `subject` , `message` )
                                VALUES ('$userId','$userEmail','$feedback_type' , '$rating' , '$subject' , '$message')";
        $addFeedbackResult = mysqli_query($conn, $addFeedback);
        return $addFeedbackResult;
    }

    public function ShowFeedback()
    {
        global $conn;
        require_once('../includes/conn.php');
        $showFeedback = "SELECT feedback.*, users.name, users.image
                            FROM feedback
                            JOIN users ON feedback.user_id = users.id
                            WHERE feedback.feedback_type = 'general'
                            ORDER BY feedback.id DESC";
        $showFeedbackResult = mysqli_query($conn, $showFeedback);
        return $showFeedbackResult;
    }

    // ##########################################################################


        public function ShowFairs()
    {
        global $conn;
        require_once('../includes/conn.php');
        $showFairs = "SELECT * FROM `fairs` ORDER BY id DESC";
        $FairsResult = mysqli_query($conn, $showFairs);
        return $FairsResult;
    }

    // ##########################################################################


    // ##########################################################################
    // ##########################################################################
    // ##########################################################################
    // ##########################################################################



}



class Artist extends User
{


    // ##########################################################################

    public static function register($name, $email, $password, $role)
    {
        global $conn;
        require_once('../includes/conn.php');

        $checkQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if ($checkResult->num_rows > 0) {
            return false;
        }

        $insertQuery = "INSERT INTO `users` (`name`, `email`, `password`, `role`)
                    VALUES ('$name','$email', '$password', '$role' , '$bio')";

        if (mysqli_query($conn, $insertQuery)) {
            return true;
        } else {
            return false;
        }
    }

    public function ProfileUpdate($id, $name, $email, $image, $work_name, $bio)
    {
        global $conn;
        require_once('../includes/conn.php');
        $profileUpdate = "UPDATE `users` SET
                            `name`='$name',`email`='$email',`image`='$image' , `work_name` = '$work_name' , `bio` = '$bio' 
                                WHERE `id`='$id' ";
        $profileResult = mysqli_query($conn, $profileUpdate);
        return $profileResult;
    }


    // ##########################################################################

    public function AddArtwork($publisherId, $title, $name, $category, $price, $quantity, $description, $year, $width, $height, $materials, $mainImage)
    {
        global $conn;
        require_once('../includes/conn.php');
        $addArtwork = "INSERT INTO `artworks` (`publisher_id`, `title`, `artist_name`, `category`, `price`, `quantity`, `description`, `year_created`, `width`, `height`, `materials`, `main_image`)
                        VALUES ('$publisherId', '$title', '$name', '$category', '$price', '$quantity', '$description', '$year', '$width', '$height', '$materials', '$mainImage')";

        $addArtworkResult = mysqli_query($conn, $addArtwork);
        return $addArtworkResult;
    }

    public function DeleteArtWork($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `artworks` WHERE `id` = $id ";
        $artworkDelete = mysqli_query($conn, $delete);
        return $artworkDelete;
    }

    public static function ShowArtWorks($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $showArts = "SELECT * FROM artworks WHERE publisher_id = $id ORDER BY id DESC ";
        $showArtskResult = mysqli_query($conn, $showArts);
        return $showArtskResult;
    }



    // ##########################################################################



    public function FairsReg($fair_id, $artist_id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $fairsReg = "INSERT INTO `fairs_artists`(`fairs_id`, `artist_id` )
                                VALUES ('$fair_id','$artist_id')";
        $fairsRegResult = mysqli_query($conn, $fairsReg);
        return $fairsRegResult;
    }





}



// ##########################################################################
// ##########################################################################
// ##########################################################################
// ##########################################################################



class Admin extends User
{


    public function AddArtwork($publisherId, $title, $artistId, $category, $price, $quantity, $description, $year, $width, $height, $materials, $mainImage)
    {
        global $conn;
        require_once('../includes/conn.php');
        $addArtwork = "INSERT INTO `artworks` (`publisher_id`, `title`, `artist_name`, `category`, `price`, `quantity`, `description`, `year_created`, `width`, `height`, `materials`, `main_image`)
                        VALUES ('$publisherId', '$title', '$artistId', '$category', '$price', '$quantity', '$description', '$year', '$width', '$height', '$materials', '$mainImage')";

        $addArtworkResult = mysqli_query($conn, $addArtwork);
        return $addArtworkResult;
    }


    public function DeleteArtWork($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `artworks` WHERE `id` = $id ";
        $artworkDelete = mysqli_query($conn, $delete);
        return $artworkDelete;
    }


    // ##########################################################################

    public function ShowFeedback()
    {
        global $conn;
        require_once('../includes/conn.php');
        $showFeedback = "SELECT feedback.*, users.name, users.image
                            FROM feedback
                            JOIN users ON feedback.user_id = users.id
                            ORDER BY feedback.id DESC";
        $showFeedbackResult = mysqli_query($conn, $showFeedback);
        return $showFeedbackResult;
    }

    public function DeleteFeedback($id)
    {
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `feedback` WHERE `id` = $id ";
        $feedbackDelete = mysqli_query($conn, $delete);
        return $feedbackDelete;
    }

    // ##########################################################################


    public function createFairs($title, $desc, $date, $location, $price, $image)
    {
        global $conn;
        require_once('../includes/conn.php');

        $query = "INSERT INTO fairs (title, description, fair_date, location, price, image)
                    VALUES ('$title', '$desc', '$date', '$location', '$price', '$image')";

        $result = mysqli_query($conn, $query);
        return $result;
    }

    public function DeleteFairs($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `fairs` WHERE `id` = $id ";
        $FairDelete = mysqli_query($conn, $delete);
        return $FairDelete;
    }

    public function DeleteFairsTeckets($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `fairs_tickets` WHERE `id` = $id ";
        $FairDeleteTec = mysqli_query($conn, $delete);
        return $FairDeleteTec;
    }

    public function DeleteFairsArtists($id)
    {
        global $conn;
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `fairs_artists` WHERE `id` = $id ";
        $FairDeleteArt = mysqli_query($conn, $delete);
        return $FairDeleteArt;
    }

        // ##########################################################################





}