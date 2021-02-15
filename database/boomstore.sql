-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 01:28 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boomstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Women\'s Clothing', 'womens-clothing', '2018-08-14 01:46:01', '2018-08-14 01:46:01'),
(2, 'Men\'s Clothing', 'mens-clothing', '2018-08-14 01:46:15', '2018-08-14 01:46:15'),
(3, 'Phone and Tablets', 'phone-and-tablets', '2018-08-14 01:46:35', '2018-08-14 01:46:35'),
(4, 'Computers', 'computers', '2018-08-14 01:47:01', '2018-08-14 01:47:01'),
(5, 'Electronics', 'electronics', '2018-08-14 01:47:37', '2018-08-14 01:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `product_name`, `description`, `photo`, `price`, `quantity`, `category_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 'Fernanda Bell Sleeve Dress- Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman.jpg', 6, 40, 1, 4, '2018-08-14 03:25:25', '2018-08-14 03:25:25'),
(2, 'Floral Off Shoulder Midi Dress- Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman1.jpg', 7, 40, 1, 5, '2018-08-14 03:25:25', '2018-08-14 03:25:25'),
(3, 'Lisa Cape Dress - Wine', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman2.jpg', 8, 40, 1, 6, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(4, 'Hayley Midi Dress- Navy', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman3.jpg', 4, 40, 1, 7, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(5, 'Nena Peplum Dress - Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman4.jpg', 6, 40, 1, 8, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(6, 'Lisa Cape Dress - Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman5.jpg', 2, 40, 1, 9, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(7, 'Tumi midi dress- black/white', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman6.jpg', 5, 40, 1, 9, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(8, 'Bose midi dress-Wine', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman7.jpg', 7, 40, 1, 4, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(9, 'Paloma Maxi Wrap Dress - Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman8.jpg', 7, 40, 1, 5, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(10, 'Zena Wrap Maxi - Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman9.jpg', 7, 40, 1, 6, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(11, 'Adriana Cold Shoulder Dress - Multicolour', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman10.jpg', 6, 40, 1, 7, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(12, 'Olivia pocket Dress- Purple', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman11.jpg', 5, 40, 1, 8, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(13, 'Ameera Off Shoulder Frill Dress- Teal green', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman12.jpg', 6, 40, 1, 9, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(14, 'Floral Illusion Dress- Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman13.jpg', 6, 40, 1, 4, '2018-08-14 03:25:26', '2018-08-14 03:25:26'),
(15, 'Merisa Wrap Maxi - Multicolour', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman14.jpg', 7, 40, 1, 5, '2018-08-14 03:25:27', '2018-08-14 03:25:27'),
(16, 'Nena Peplum Top- Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman15.jpg', 8, 40, 1, 6, '2018-08-14 03:25:27', '2018-08-14 03:25:27'),
(17, 'Lisa Cape Dress - White', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman16.jpg', 6, 40, 1, 7, '2018-08-14 03:25:27', '2018-08-14 03:25:27'),
(18, 'Hayley Midi Dress - Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman17.jpg', 6, 40, 1, 8, '2018-08-14 03:25:27', '2018-08-14 03:25:27'),
(19, 'Bose midi dress-Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman18.jpg', 6, 40, 1, 9, '2018-08-14 03:25:27', '2018-08-14 03:25:27'),
(20, 'Kendra Bell Sleeve Dress- Royal blue', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman1.jpg', 7, 40, 1, 4, '2018-08-14 03:25:27', '2018-08-14 03:25:27'),
(21, 'Hannah Cold Shoulder Dress- Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman.jpg', 6, 40, 1, 5, '2018-08-14 03:25:27', '2018-08-14 03:25:27'),
(22, 'Simi V-neck Cold Shoulder Dress- Navy Blue', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman2.jpg', 5, 40, 1, 6, '2018-08-14 03:25:27', '2018-08-14 03:25:27'),
(23, 'Tessy Bardot Cold Shoulder Top- Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman4.jpg', 6, 40, 1, 7, '2018-08-14 03:25:27', '2018-08-14 03:25:27'),
(24, 'Zack Dotted Casual Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man.jpg', 6, 40, 2, 10, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(25, 'Dotted Pattern Long Sleeve Shir', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man1.jpg', 7, 40, 2, 11, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(26, 'Contrast Spread Collar Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man2.jpg', 8, 40, 2, 12, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(27, 'Terry V Front Pattern Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man3.jpg', 4, 40, 2, 14, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(28, 'Ashish Patterned Spread Collar Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man4.jpg', 6, 40, 2, 10, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(29, 'Jay Spread Collar Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man5.jpg', 2, 40, 2, 11, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(30, 'Mason Patterned Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man6.jpg', 5, 40, 2, 12, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(31, 'Bob Plain Formal Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man7.jpg', 7, 40, 2, 14, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(32, 'Damien Plain Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man8.jpg', 7, 40, 2, 10, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(33, 'Men&#039;s Checkered Shirts', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man.jpg', 7, 40, 2, 11, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(34, 'Men&#039;s Zayden Pin-Down Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man1.jpg', 6, 40, 2, 12, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(35, 'Leo  Men\'s Zayden Pin-Down Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man1.jpg', 5, 40, 2, 14, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(36, 'Men&#039;s Delan Patterned Body Fit Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man2.jpg', 6, 40, 2, 10, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(37, 'Nichiha Pin-Down Contrast Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man3.jpg', 6, 40, 2, 11, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(38, 'Jack Lace Patterned Long Sleeve Shirt - White', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man4.jpg', 7, 40, 2, 12, '2018-08-14 03:25:37', '2018-08-14 03:25:37'),
(39, 'Bachan Dot Pattern Long Sleeve Shrt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man5.jpg', 8, 40, 2, 14, '2018-08-14 03:25:38', '2018-08-14 03:25:38'),
(56, '40-Inch SFLED40EL Full HD LED TV', '40-Inch SFLED40EL Full HD LED TV', 'tv.jpg', 26, 40, 5, 22, '2018-08-14 03:26:00', '2018-08-14 03:26:00'),
(57, 'Scanfrost  40-Inch SFLED40EL Full HD LED TV', 'Scanfrost  40-Inch SFLED40EL Full HD LED TV', 'tv2.jpg', 55, 40, 5, 23, '2018-08-14 03:26:00', '2018-08-14 03:26:00'),
(58, '40&quot; Digital FHDTV', '40&quot; Digital FHDTV', 'tv.jpg', 55, 40, 5, 24, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(59, 'Startimes  40\" Digital FHDTV', 'Startimes  40\" Digital FHDTV', 'tv1.jpg', 26, 40, 5, 25, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(60, 'Hisense  40-Inch Full HD LED Television With USB Video HX40M2160F', 'Hisense  40-Inch Full HD LED Television With USB Video HX40M2160F', 'tv3.jpg', 26, 40, 5, 22, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(61, '40&quot; LC40LE265M AQUOS LED TV - Black', '40&quot; LC40LE265M AQUOS LED TV - Black', 'tv4.jpg', 17, 40, 5, 23, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(62, 'Sharp  40\" LC40LE265M AQUOS LED TV - Black', 'Sharp  40\" LC40LE265M AQUOS LED TV - Black', 'tv5.jpg', 35, 40, 5, 24, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(63, '39 inch LN5100 Full HD LED TV', '39 inch LN5100 Full HD LED TV', 'tv6.jpg', 36, 40, 5, 25, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(64, '40&quot; Digital HD LED TV UA40J5000AKXSJ - Black', '40&quot; Digital HD LED TV UA40J5000AKXSJ - Black', 'tv7.jpg', 17, 40, 5, 22, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(65, 'Samsung  40\" Digital HD LED TV UA40J5000AKXSJ - Black', 'Samsung  40\" Digital HD LED TV UA40J5000AKXSJ - Black', 'tv8.jpg', 21, 40, 5, 23, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(66, '40 inch 40BLE4420BF/ 4421BF Full HD LED TV', '40 inch 40BLE4420BF/ 4421BF Full HD LED TV', 'tv.jpg', 40, 40, 5, 24, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(67, 'Beko   40 inch 40BLE4420BF/ 4421BF Full HD LED TV', 'Beko   40 inch 40BLE4420BF/ 4421BF Full HD LED TV', 'tv1.jpg', 153, 40, 5, 25, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(68, '49-Inch Full HD LED Television With USB Video HISTV49M2160F', '49-Inch Full HD LED Television With USB Video HISTV49M2160F', 'tv2.jpg', 28, 40, 5, 22, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(69, 'Hisense  49-Inch Full HD LED Television With USB Video HISTV49M2160F', 'Hisense  49-Inch Full HD LED Television With USB Video HISTV49M2160F', 'tv3.jpg', 48, 40, 5, 23, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(70, 'LG  43-Inch Full HD Digital LED TV - 43LH500T+ Free Wall Bracket', 'LG  43-Inch Full HD Digital LED TV - 43LH500T+ Free Wall Bracket', 'tv5.jpg', 42, 40, 5, 24, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(71, 'Beko   40-inch 40BLE6420BL Full HD LED TV', 'Beko   40-inch 40BLE6420BL Full HD LED TV', 'tv4.jpg', 65, 40, 5, 25, '2018-08-14 03:26:01', '2018-08-14 03:26:01'),
(72, 'Pavilion x360 11-k103na N7H44EA#ABU Intel Celeron', 'X3 - Black (4 Inch, 3G, 4GB Rom, 512 MB Ram)', 'laptop.jpg', 26, 40, 4, 26, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(73, 'Hp-14 Intel Celeron Dualcore-1.6GHz (4GB,500GB HDD) 14 Inch Windows 10 Laptop', 'Innjoo  X3 - Black (4 Inch, 3G, 4GB Rom, 512 MB Ram)', 'laptop1.jpg', 55, 40, 4, 27, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(74, 'MacBook Pro - 15.4&quot; Display - Intel Core i7 - 16GB Memory - 256GB Flash Storage', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'laptop2.jpg', 55, 40, 4, 28, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(75, '250 G4 Intel Celeron Dual Core-1.6GHz', 'BAM 4&quot; 3G Dual SIM Smart Phone - Black + Android Marshmallow + Free Leather Flip Case Cover', 'laptop3.jpg', 26, 40, 4, 32, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(76, 'HP 250 G4 Intel Celeron 1.6GHz', 'iMose  BAM 4\" 3G Dual SIM Smart Phone - Black + Android Marshmallow + Free Leather Flip Case Cover', 'laptop4.jpg', 26, 40, 4, 26, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(77, 'Pavilion X2 Intel Atom', 'Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'laptop5.jpg', 17, 40, 4, 27, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(78, 'G4 AMD Dual Core-1.4GHz ', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'laptop.jpg', 35, 40, 4, 28, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(79, 'X453SA Intel celeron dualcore-2.16Ghz ', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'laptop1.jpg', 36, 40, 4, 32, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(80, 'Aspire ES 14 Intel Celeron Quad Core', 'One Touch Popstar - Gold + FREE 8GB Memory Card', 'laptop2.jpg', 17, 40, 4, 26, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(81, 'Intel Celeron Dual Core-1.7ghz', 'Alcatel  One Touch Popstar - Gold + FREE 8GB Memory Card', 'laptop3.jpg', 21, 40, 4, 27, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(82, 'Intel celeron quad core 1.6Ghz', 'A101 - 4G Smartphone 5.0 inch Android 6.0 MT6737 1.3GHz Quad Core 1GB+8GB EU Plug - White', 'laptop4.jpg', 40, 40, 4, 28, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(83, 'Stream 11 Intel celeron 2gb Ram', 'UHANS  A101 - 4G Smartphone 5.0 inch Android 6.0 MT6737 1.3GHz Quad Core 1GB+8GB EU Plug - White', 'laptop5.jpg', 153, 40, 4, 32, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(84, 'Pavilion x2 10- k000nia Detachable Touch PC ', 'SHIPPED FROM OVERSEAS', 'laptop3.jpg', 28, 40, 4, 26, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(85, 'Ideapad 300-14IBR Intel celeron-1.6ghz ', 'Upscale UHANS H5000 4G 1.25GHz Quad-core 3GB + 32GB Dual Camera Smartphone', 'laptop4.jpg', 48, 40, 4, 27, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(86, 'Lenovo  Ideapad 300-14IBR Intel celeron-1.6ghz', 'UHANS  Upscale UHANS H5000 4G 1.25GHz Quad-core 3GB + 32GB Dual Camera Smartphone', 'laptop2.jpg', 42, 40, 4, 28, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(87, 'Lenovo  Ideapad 300-14IBR Intel celeron-1.6ghz', 'A8 PLUS - 3G Tablet/Smartphone (6.0 inch Android 5.1 MTK6580 Quad Core 1GB/8GB) EU Plug - Rose Gold', 'laptop1.jpg', 65, 40, 4, 32, '2018-08-14 03:26:12', '2018-08-14 03:26:12'),
(88, 'Innjoo  Fire2 Plus', 'X3 - Black (4 Inch, 3G, 4GB Rom, 512 MB Ram)', 'phone.jpg', 26, 40, 3, 16, '2018-08-14 03:47:53', '2018-08-14 03:47:53'),
(89, 'Innjoo  Fire2 Plus', 'Innjoo  X3 - Black (4 Inch, 3G, 4GB Rom, 512 MB Ram)', 'phone1.jpg', 55, 40, 3, 17, '2018-08-14 03:47:53', '2018-08-14 03:47:53'),
(90, 'Alcatel  Pop Star', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'phone2.jpg', 55, 40, 3, 18, '2018-08-14 03:47:53', '2018-08-14 03:47:53'),
(91, 'Gionee  M6- Champagne (64GB)', 'BAM 4&quot; 3G Dual SIM Smart Phone - Black + Android Marshmallow + Free Leather Flip Case Cover', 'phone3.jpg', 26, 40, 3, 19, '2018-08-14 03:47:53', '2018-08-14 03:47:53'),
(92, 'Gionee  P8w - Black', 'iMose  BAM 4\" 3G Dual SIM Smart Phone - Black + Android Marshmallow + Free Leather Flip Case Cover', 'phone4.jpg', 26, 40, 3, 16, '2018-08-14 03:47:53', '2018-08-14 03:47:53'),
(93, 'Tecno  W2 - Grey', 'Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'phone5.png', 17, 40, 3, 17, '2018-08-14 03:47:53', '2018-08-14 03:47:53'),
(94, 'Innjoo  Halo X - Grey', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'phone6.jpg', 35, 40, 3, 18, '2018-08-14 03:47:53', '2018-08-14 03:47:53'),
(95, 'Gionee  M5- Gold', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'phone7.png', 36, 40, 3, 19, '2018-08-14 03:47:53', '2018-08-14 03:47:53'),
(96, 'Tecno W3', 'One Touch Popstar - Gold + FREE 8GB Memory Card', 'phone8.png', 17, 40, 3, 16, '2018-08-14 03:47:54', '2018-08-14 03:47:54'),
(97, 'Tecno  Tecno W3', 'Alcatel  One Touch Popstar - Gold + FREE 8GB Memory Card', 'phone1.jpg', 21, 40, 3, 17, '2018-08-14 03:47:54', '2018-08-14 03:47:54'),
(98, 'Phantom 6 - Gold', 'A101 - 4G Smartphone 5.0 inch Android 6.0 MT6737 1.3GHz Quad Core 1GB+8GB EU Plug - White', 'phone2.jpg', 40, 40, 3, 18, '2018-08-14 03:47:54', '2018-08-14 03:47:54'),
(99, 'Tecno  Y2 - Blue', 'UHANS  A101 - 4G Smartphone 5.0 inch Android 6.0 MT6737 1.3GHz Quad Core 1GB+8GB EU Plug - White', 'phone3.jpg', 153, 40, 3, 19, '2018-08-14 03:47:54', '2018-08-14 03:47:54'),
(100, '1409 - Dark Blue', 'SHIPPED FROM OVERSEAS', 'phone4.jpg', 28, 40, 3, 16, '2018-08-14 03:47:54', '2018-08-14 03:47:54'),
(101, 'L8 Lite - Black', 'Upscale UHANS H5000 4G 1.25GHz Quad-core 3GB + 32GB Dual Camera Smartphone', 'phone5.png', 48, 40, 3, 17, '2018-08-14 03:47:54', '2018-08-14 03:47:54'),
(102, 'Tecno  L8 Lite - Black', 'UHANS  Upscale UHANS H5000 4G 1.25GHz Quad-core 3GB + 32GB Dual Camera Smartphone', 'phone6.jpg', 42, 40, 3, 18, '2018-08-14 03:47:54', '2018-08-14 03:47:54'),
(103, 'Alcatel  One Touch Popstar', 'A8 PLUS - 3G Tablet/Smartphone (6.0 inch Android 5.1 MTK6580 Quad Core 1GB/8GB) EU Plug - Rose Gold', 'phone7.png', 65, 40, 3, 19, '2018-08-14 03:47:54', '2018-08-14 03:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_02_06_194238_create_users_table', 1),
(3, '2017_03_17_104645_create_items_table', 1),
(4, '2017_03_17_174357_create_categories_table', 1),
(5, '2017_03_17_181219_create_tags_table', 1),
(6, '2017_03_17_200312_create_accounts_table', 1),
(7, '2017_03_19_191837_create_coupons_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `address`, `city`, `state`, `role_id`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ajiferuke Oluwatomiwa', 'admin@admin.com', '$2y$10$DIM9foVzP.RkS3YNaqzmlu9/R1HxUCKP0iPV.RAY.0MSinohYeI2W', 'admin', '', '', '', 0, 0, 'u58czH9tHa5PkEuyrsCllKD6EvAa7fBrGMnnvcdlWlygQw55Tim7KO56DSVn', '2018-08-14 00:45:06', '2018-08-14 00:45:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
