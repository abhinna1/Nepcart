-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2021 at 06:43 PM
-- Server version: 8.0.25
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepcart_db`
--
CREATE DATABASE IF NOT EXISTS `nepcart_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `nepcart_db`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `uID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_image` varchar(500) DEFAULT NULL,
  `product_price` int DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `product_category` varchar(50) DEFAULT NULL,
  `uID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_image`, `product_price`, `product_description`, `product_category`, `uID`) VALUES
(2, 'Samsung', 'Product_Image/7be7a94be30cb6b35d67d390e9a3351ciphone-13-family-select-2021.jpg', 140000, 'Display\r\n6.10-inch (1170x2532)\r\nProcessor\r\nApple A15 Bionic\r\nFront Camera\r\n12MP\r\nRear Camera\r\n12MP + 12MP\r\nStorage\r\n128GB\r\nOS\r\niOS 15', 'electronics', 1),
(3, 'Asus', 'Product_Image/5e271e2517df910d8fc7b1fff83c32011C13E78E-64CB-4CEC-A150-155FC01A7A8C.png', 180000, 'Asus ROG Gaming Laptop. GTX 1660 Ti. 16GB RAM. Intel i7 10th Gen gaming laptop.', 'electronics', 1),
(6, 'Keyboard', 'Product_Image/633c1d8f01df5a5db00fdef11e94f0c5RPfEI8I.jpg', 80000, 'Mechanical Keyboard with perfect switches.', 'electronics', 1),
(14, 'Jordan 1 Mocha', 'Product_Image/d6a84015caae638f6ad2de7c6c2dff37shoes1.jpg', 10000, 'Nice and comfortable Jordan shoes.', 'clothing', 20),
(15, 'HP Omen', 'Product_Image/ef566807ca859b98d3c2bcc1d78db542lap.jpg', 180000, 'HP Omen gaming laptop with high specs. RTX 2070, 16 GB RAM, i7 11th Gen. Perfect for gaming. ', 'electronics', 20),
(16, 'Printed Unisex T-Shirt', 'Product_Image/57461a527251f3bbc5ed5fc323bfa49bt_shirt.jpg', 500, 'Comfortable T-shirt for women and men.', 'clothing', 20),
(17, 'M1 Macbook Air 2020', 'Product_Image/5f9fd93dd93915daafbc1c3987a424ablap2.jpg', 156000, 'M1 Apple Macbook Air. Fast procecssing speed. Best for work and productivity.', 'electronics', 20),
(18, 'Milk printed T shirt', 'Product_Image/2b7badcfa0fcbc300994e1f282138916t_shirt_2.jpg', 1200, 'Unisex Printed  tshirt.', 'clothing', 20),
(19, 'Sheep bag', 'Product_Image/19b89f6520f2592f6c61687831e5322cwemen_bag.jpg', 600, 'Cute sheep printed bag.', 'clothing', 20),
(20, 'Tote Bag', 'Product_Image/767b4c6b988c73af2af9787fde855ec9tote_bag.jpg', 700, 'Cute tote bag with large space.', 'clothing', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uID` int NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pasword` varchar(50) NOT NULL,
  `phone_code` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uID`, `fName`, `lName`, `email`, `pasword`, `phone_code`, `phone`, `address`, `gender`) VALUES
(1, 'Ram', 'Manandhar', 'manandharabhinna@gmail.com', '123', 'Nepal (+977)', '812937419837', 'Hattigauda', 'Male'),
(10, 'Abhinna', 'Manandhar', 'aasdfasf@gmail.com', '123', 'Nepal (+977)', '812937419837', 'Hattigauda', 'Male'),
(16, 'Abhinna', 'Manandhar', 'manandha2@uni.coventry.ac.uk', '123', 'Nepal (+977)', '9869028969', 'Hattigauda', 'Male'),
(18, 'Raju', 'Bista', 'rajubista@fista.com', 'kaju123', 'Nepal (+977)', '9816273849', 'Lagan Chaur', 'Male'),
(19, 'test', 'acc', 'ahsdkjf@yahoo.com', '1234', 'Nepal (+977)', '81293741983', 'New Road', 'Male'),
(20, 'ram', 'pyari', 'rampyari69@gmail.com', '12345', 'Nepal (+977)', '3728194736', 'Hadigaun', 'Female'),
(21, 'Abhinna', 'Manandhar', 'manandharabhinnas@gmail.com', '12345', 'Nepal (+977)', '9869028969', 'Hattigauda', 'Male'),
(22, 'Abhinna', 'Manandhar', 'manandharabhinnaz@gmail.com', '12345', 'Nepal (+977)', '812937419837', 'Hattigauda', 'Male'),
(23, 'Abhinna', 'Manandhar', 'manandhfarabhinna@gmail.com', '12345', 'Nepal (+977)', '81293741983', 'Hattigauda', 'Male'),
(24, 'Abhinna', 'Manandhar', 'manandharabhinna@gmail.coms', '12345', 'Nepal (+977)', '9869028969', 'Hattigauda', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_product_id` (`product_id`),
  ADD KEY `cart_uID` (`uID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_name` (`uID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `cart_product_id` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `cart_uID` FOREIGN KEY (`uID`) REFERENCES `tbl_user` (`uID`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `fk_name` FOREIGN KEY (`uID`) REFERENCES `tbl_user` (`uID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
