-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 03:39 PM
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
-- Database: `razan-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `product_price`, `product_quantity`, `username`) VALUES
(1, 'Strawberry', 2, 5, 'osama'),
(2, 'Carrot', 2, 4, 'osama'),
(4, 'Strawberry', 2, 1, 'razan');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_desc`, `product_image`, `product_price`) VALUES
(1, 'Red Velvet Cake', 'Red velvet cake is known for its vibrant red color and rich flavor. It features a hint of cocoa flavor, balanced with a slight tanginess from buttermilk or vinegar, and comes topped with cream cheese frosting', 'https://ediblebloglive.wpengine.com/wp-content/uploads/2023/05/Red-Velvet-CAke-min.jpg', 3),
(2, 'Strawberry Cake', 'Strawberry cake features the sweet and luscious flavor of fresh strawberries. It typically features diced strawberries in between the layers of cake, with a light and fluffy strawberry frosting.', 'https://ediblebloglive.wpengine.com/wp-content/uploads/2023/05/Strawberry-Cake-min.jpg', 2),
(3, 'Vanilla Cake', 'Vanilla cake uses vanilla as the primary flavoring agent. It can be enjoyed in various forms, including layer cakes, sheet cakes, cupcakes, and as a base for other desserts such as trifles or cake pops.', 'https://ediblebloglive.wpengine.com/wp-content/uploads/2023/05/Vanilla-Cake-min.jpg', 2),
(4, 'Chocolate Cake', 'The main ingredients in a chocolate cake typically include flour, sugar, eggs, butter or oil, and, of course, chocolate or cocoa powder', 'https://ediblebloglive.wpengine.com/wp-content/uploads/2023/05/Chocolate-Cake-min.jpg', 3),
(5, 'Carrot Cake', 'Carrot cake incorporates grated carrots in the batter, giving the cake natural sweetness and a tender texture. It features a slightly spiced taste from cinnamon and nutmeg and comes topped with a creamy cream cheese frosting.', 'https://ediblebloglive.wpengine.com/wp-content/uploads/2023/05/Carrot-Cake-min.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'osama', '123'),
(2, 'razan', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
