-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 02:30 PM
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
-- Database: `dreamyrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcontent`
--

CREATE TABLE `aboutcontent` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content1` varchar(1000) NOT NULL,
  `content2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutcontent`
--

INSERT INTO `aboutcontent` (`id`, `title`, `content1`, `content2`) VALUES
(1, 'Welcome to Dreamy rental', 'At Dreamy Rental, we are dedicated to helping you find your perfect rental home with ease and confidence. Our platform connects renters with a wide variety of properties, offering something for every lifestyle and budget. From cozy apartments to spacious houses  and shops, we make the search simple with user-friendly tools and verified listings.', 'Our team works closely with property owners to ensure a seamless rental process. We’re committed to delivering a trustworthy experience, where both renters and landlords feel supported every step of the way.');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `email`, `password`, `cpassword`, `contact`, `gender`, `photo`, `dob`) VALUES
(1, 'admin', 'admin123@gmail.com', 'admin123', 'admin123', '9876543210', 'male', 'profile for youtube.jpg', '2002-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `depositeamt` varchar(100) NOT NULL,
  `bookingdate` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `pname`, `pprice`, `paddress`, `depositeamt`, `bookingdate`, `user_email`) VALUES
(1, 'Valley Top villa', '100000', 'Nagarkot', '30000', '2024-10-07', 'swochhanda@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `message`) VALUES
(1, 'swochhanda', 'swochhanda14@gmail.com', '9863422162', 'hello dear, how are you doing.'),
(2, 'luniva', 'luniva14@gmail.com', '9876543210', 'hello sir'),
(3, 'sudha', 'sudha14@gmail.com', '9876543321', 'I am sudha karki.'),
(4, 'Bikash manandhar', 'bikash@gmail.com', '9860335583', 'Lets play game'),
(5, 'Sanam', 'sanamshrestha@gmail.com', '999999999', 'K gardai xau '),
(7, 'Aayushma', 'aayushmakc@gmail.com', '987777770', 'I am at work.'),
(8, 'ram', 'ram@gmail.com', '98786545', 'Hello dear'),
(9, 'Hari', 'hari@gmail.com', '9876543210', 'I want to rent a room for 1 week.'),
(10, 'surya', 'surya@gmail.com', '656565', 'dsfgdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `bimage` varchar(100) NOT NULL,
  `rating` tinyint(10) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`, `bimage`, `rating`, `profile`) VALUES
(1, 'luniva karanjeet', 'Best platform for room renting', 'property-3.jpg', 5, 'luniva.jpg'),
(2, 'Swochhanda karanjeet', 'Very good! but it need some improvement', 'property-1.jpg', 4, '272989961_480783170088144_2871726468886977893_n.jpg'),
(3, 'sagar', 'Very nice I like it', 'property-3.jpg', 5, 'profile for youtube.jpg'),
(4, 'surya', 'good', 'hall-img-4.webp', 4, '272989961_480783170088144_2871726468886977893_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `city`, `state`) VALUES
(1, 'kathmandu', 'bagmati_province'),
(2, 'Sindhuli', 'bagmati_province'),
(3, 'Bhaktapur', 'bagmati_province'),
(4, 'Lalitpur', 'bagmati_province'),
(5, 'shankharapur', 'bagmati_province'),
(7, 'Chabahil', 'bagmati_province');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `depositeamt` varchar(100) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `offertype` varchar(100) NOT NULL,
  `propertytype` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `furnishedstatus` varchar(100) NOT NULL,
  `BHK` varchar(300) NOT NULL,
  `bedroom` varchar(100) NOT NULL,
  `bathroom` varchar(100) NOT NULL,
  `balcony` varchar(100) NOT NULL,
  `kitchen` varchar(50) NOT NULL,
  `hall` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `totalfloor` varchar(100) NOT NULL,
  `floorroom` varchar(100) NOT NULL,
  `loan` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `extra` varchar(100) NOT NULL,
  `img1` varchar(400) NOT NULL,
  `img2` varchar(400) NOT NULL,
  `img3` varchar(400) NOT NULL,
  `img4` varchar(400) NOT NULL,
  `img5` varchar(400) NOT NULL,
  `Bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `pname`, `pprice`, `depositeamt`, `paddress`, `offertype`, `propertytype`, `status`, `furnishedstatus`, `BHK`, `bedroom`, `bathroom`, `balcony`, `kitchen`, `hall`, `area`, `age`, `totalfloor`, `floorroom`, `loan`, `description`, `extra`, `img1`, `img2`, `img3`, `img4`, `img5`, `Bdate`) VALUES
(1, 'Shankharapur top villa', '10000', '$$2000', 'Shankharapur ', 'rent', 'house', 'ready to move', 'furnished', '1', '4', '2', '1', '1', '1', '1430', '2y', '4', '2', 'available', 'Best place to visit with you friends and family.', 'water_supply,power_backup,parking_area,gym', 'property-1.jpg', 'property-1.jpg', 'hall-img-3.webp', 'bathroom-img-4.jpg', 'bathroom-img-6.jpg', '2024-10-07'),
(2, 'Valley Top villa', '100000', '$$30000', 'Nagarkot', 'sale', 'flat', 'ready to move', 'furnished', '1', '2', '1', '1', '1', '1', '1350', '2y', '2', '1', 'available', 'best 1 night stay villa', 'water_supply,power_backup,parking_area', 'house-img-1.webp', 'house-img-1.webp', 'bathroom-img-3.webp', 'hall-img-5.webp', 'hall-img-6.webp', '2024-10-07'),
(3, 'Pacific Panorama', '100000', '$10000', 'Nuwakot', 'rent', 'shop', 'ready to move', 'furnished', '2', '4', '2', '2', '1', '1', '2000', '2', '4', '3', 'available', 'best affordable villa', 'play_ground,garden,water_supply,power_backup,parking_area,market_area', 'property-2.jpg', 'property-2.jpg', 'hall-img-3.webp', 'hall-img-6.webp', 'hall-img-4.webp', '2024-10-07'),
(4, 'Hamro Ghar', '15000', '2000', 'Shankharapur ', 'rent', 'house', 'ready to move', 'semi-furnished', '1', '3', '1', '1', '1', '1', '1875', '2', '2', '2', 'available', 'you can enjoy your home stay with your family and friends.', 'play_ground,garden,water_supply,power_backup,parking_area', 'property-3.jpg', 'bathroom-img-1.webp', 'hall-img-4.webp', 'hall-img-2.webp', 'hall-img-6.webp', '2024-10-09'),
(5, 'Rose Cottage', '200000', '10000', 'Bhaktapur', 'sale', 'house', 'ready to move', 'furnished', '2', '4', '2', '2', '1', '1', '2500', '10', '4', '3', 'available', 'Affordable price home.', 'play_ground,garden,water_supply,power_backup,parking_area', 'house-img-2.webp', 'hall-img-6.webp', 'hall-img-5.webp', 'bathroom-img-2.webp', 'bathroom-img-4.jpg', '2024-10-10'),
(6, 'River side villa', '200000', '10000', 'Pokhara', 'sale', 'house', 'ready to move', 'semi-furnished', '2', '4', '2', '2', '1', '', '2500', '5y', '3', '2', 'not available', 'A riverside villa is an elegant, serene retreat typically located along the banks of a river, offering stunning views of the water and surrounding nature. The villa often features large windows or glass doors to maximize natural light and provide panoramic vistas. The exterior design might blend natural materials like wood, stone, or brick to harmonize with the environment, with spacious outdoor terraces or balconies ideal for relaxation or hosting gatherings.\r\n\r\n', 'security_guard,play_ground,garden,water_supply,power_backup,parking_area,gym', 'property-5.jpg', 'property-5.jpg', 'kitchen-img-3.webp', 'bathroom-img-3.webp', 'hall-img-6.webp', '2024-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `contact`, `password`, `cpassword`, `gender`, `dob`, `photo`) VALUES
(1, 'swochhanda', 'swochhanda@gmail.com', '9863422162', '123456', '123456', 'male', '2003-09-12', 'avatar-4.jpg'),
(2, 'Noname', 'swocxanda35@gmail.com', '9876543210', '12345', '12345', 'male', '2000-07-09', 'CamScanner 10-19-2022 14.09.jpg'),
(3, 'luniva', 'luniva@gmail.com', '9860335583', '1234', '1234', 'female', '1997-02-20', 'luniva.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutcontent`
--
ALTER TABLE `aboutcontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
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
-- AUTO_INCREMENT for table `aboutcontent`
--
ALTER TABLE `aboutcontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
