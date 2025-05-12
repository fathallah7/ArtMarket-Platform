-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 02:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art-gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artworks`
--

CREATE TABLE `artworks` (
  `id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `artist_name` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `year_created` int(11) DEFAULT NULL,
  `width` decimal(10,2) DEFAULT NULL,
  `height` decimal(10,2) DEFAULT NULL,
  `materials` varchar(255) DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artworks`
--

INSERT INTO `artworks` (`id`, `publisher_id`, `title`, `artist_name`, `category`, `price`, `quantity`, `description`, `year_created`, `width`, `height`, `materials`, `main_image`, `created_at`) VALUES
(14, 5, 'Green Gadrden', 'Hamo Art', 'painting', 250.00, 50, 'A serene piece capturing the gentle beauty of nature — lush green leaves, soft sunlight filtering through the trees, and a peaceful atmosphere that invites calm and reflection. \"Green Garden\" is a quiet celebration of life and growth.', 1985, 120.00, 60.00, 'Oil Colors', '../../admin/back/uploads/artworks/art6.jpeg', '2025-05-11 07:03:26'),
(15, 5, 'Sea Blue', 'Hamo Art', 'painting', 600.00, 30, 'This painting shows the calm and endless beauty of the ocean. Different shades of blue are used to create the depth and movement of the water. The waves are gentle, and the sky above is clear, giving a peaceful and relaxing feeling.', 1916, 100.00, 70.00, 'paper and High Quality Water', '../../admin/back/uploads/artworks/art3.jpeg', '2025-05-11 11:50:02'),
(17, 5, 'Desert', 'Hamo Art', 'digital', 20.00, 100, 'This painting captures the wide, open sky, painted in soft gradients of blue and white. Light clouds drift across the canvas, adding a sense of movement and space. The colors are bright and calm, reflecting the beauty of nature above us.', 2000, 100.00, 75.00, 'Photoshop Online', '../../admin/back/uploads/artworks/art4.jpeg', '2025-05-11 12:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `artwork_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `email`, `artwork_id`, `quantity`, `created_at`) VALUES
(25, 1, 'test@g.com', 17, 1, '2025-05-12 11:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `fairs`
--

CREATE TABLE `fairs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `fair_date` date DEFAULT NULL,
  `fair_time` time DEFAULT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fairs_artists`
--

CREATE TABLE `fairs_artists` (
  `id` int(11) NOT NULL,
  `fairs_id` int(11) DEFAULT NULL,
  `artist_id` int(11) DEFAULT NULL,
  `joined_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fairs_tickets`
--

CREATE TABLE `fairs_tickets` (
  `id` int(11) NOT NULL,
  `fairs_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ticket_code` varchar(100) DEFAULT NULL,
  `purchased_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artwork_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(1) NOT NULL DEFAULT 0,
  `feedback_type` enum('general','suggestion','question') NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `rating`, `feedback_type`, `subject`, `message`, `email`, `submitted_at`) VALUES
(7, 1, 1, 'general', 'problem', 'baaad', 'bacha2@pm.com', '2025-05-10 17:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `gift_cards`
--

CREATE TABLE `gift_cards` (
  `id` int(11) NOT NULL,
  `recipient_name` varchar(100) DEFAULT NULL,
  `recipient_email` varchar(100) DEFAULT NULL,
  `sender_name` varchar(100) DEFAULT NULL,
  `personal_message` text DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `gift_card_code` varchar(255) NOT NULL,
  `delivery_method` varchar(20) DEFAULT 'email',
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gift_cards`
--

INSERT INTO `gift_cards` (`id`, `recipient_name`, `recipient_email`, `sender_name`, `personal_message`, `amount`, `gift_card_code`, `delivery_method`, `sent_at`) VALUES
(1, 'hoby', 'khafra3.932006@gmail.com', 'abdo', 'jjjjjjjjjjjjjjjjjjj', 100.00, 'GIFT68211C72CDA96-3773', 'email', '2025-05-11 21:53:54'),
(2, 'hoby', 'khafra3.932006@gmail.com', 'abdo', 'jjjjjjjjjjjjjjjjjjj', 100.00, 'GIFT68211D2A668D4-1615', 'email', '2025-05-11 21:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `order_date`) VALUES
(1, 8, 20.00, '2025-05-11 22:51:31'),
(2, 8, 20.00, '2025-05-11 22:52:13'),
(3, 8, 290.00, '2025-05-11 22:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'uploads/profile/unknown.png',
  `work_name` varchar(100) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `image`, `work_name`, `bio`) VALUES
(0, 'Admin', 'adminTABARAK@a.com', '$2y$10$fAcjlp8dZai/bxB7x2.3zOC5xiY3Wp4SJdQ7pyxtMbewot6AgikLK', 'admin', 'uploads/profile/unknown.png', NULL, NULL),
(1, 'Abdullah Mohame', 'test@g.com', '$2y$10$Lq6FS1W5rRRkPlghMzdNG.sgPjBKsoWAMxKZkPWP1jCDpnazQnZT6', 'visitor', 'uploads/profile/boy (4).png', NULL, NULL),
(3, 'Ahmed', 'ahmed@gmail.com', '$2y$10$WqV.RP9cYFu2NCUidACJneDX1GJr9lzyYpfQ0rWQWiJOKwua12rym', 'visitor', 'uploads/profile/unknown.png', NULL, NULL),
(4, 'Mohamed', 'mohamed@gmail.com', '$2y$10$bTkC44FpuqNxByhmz.5RbujNy5IidTSOBcOF.j6I8CtZRBFX2NNxK', 'visitor', 'uploads/profile/unknown.png', NULL, NULL),
(5, 'Hamo', 'hamo@gmail.com', '$2y$10$ZKAIAthWAWzXrncSZM4A6ubyPHdWi4gbskx.Ti5bw0i5Jq/e5cOIK', 'artist', 'uploads/profile/hamo.png', 'designer', 'Designer Hhhhhh'),
(6, 'Saif ', 'abdullah@gmail.com', '$2y$10$KsD/xvXIjpTI5G9SAYqFC.7X/lliTuyloD7GFLtaR4axJVPDvB.Fu', 'artist', 'uploads/profile/unknown.png', NULL, NULL),
(7, 'Ahmed', 'khafra3.932006@gmail.com', '$2y$10$HgZc0zycalr0bG8zB5OXDeuEYr4EuED5BvGEYx36E7kjIjXWYKCSu', 'artist', 'uploads/profile/unknown.png', NULL, NULL),
(8, 'Abdoooo', 'abdullahxoff@gmail.com', '$2y$10$ikRusGttaYv1j1CJEEtKb.02yp.MSN1FCX39kZxJ.6ZikSmUe.wrq', 'visitor', 'uploads/profile/unknown.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`artwork_id`);

--
-- Indexes for table `fairs`
--
ALTER TABLE `fairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fairs_artists`
--
ALTER TABLE `fairs_artists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fairs_id` (`fairs_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `fairs_tickets`
--
ALTER TABLE `fairs_tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_code` (`ticket_code`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fk_fairs` (`fairs_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `artwork_id` (`artwork_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `gift_cards`
--
ALTER TABLE `gift_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `fairs`
--
ALTER TABLE `fairs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fairs_artists`
--
ALTER TABLE `fairs_artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fairs_tickets`
--
ALTER TABLE `fairs_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gift_cards`
--
ALTER TABLE `gift_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artworks`
--
ALTER TABLE `artworks`
  ADD CONSTRAINT `artworks_ibfk_1` FOREIGN KEY (`publisher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fairs_artists`
--
ALTER TABLE `fairs_artists`
  ADD CONSTRAINT `fairs_artists_ibfk_1` FOREIGN KEY (`fairs_id`) REFERENCES `fairs` (`id`),
  ADD CONSTRAINT `fairs_artists_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `fairs_tickets`
--
ALTER TABLE `fairs_tickets`
  ADD CONSTRAINT `fairs_tickets_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_fairs` FOREIGN KEY (`fairs_id`) REFERENCES `fairs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
