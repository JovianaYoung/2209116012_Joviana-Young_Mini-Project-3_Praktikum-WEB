-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 04:25 PM
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
-- Database: `joviweb3`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(39, '::1', 1),
(47, '::1', 1),
(51, '::1', 3),
(53, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(8) NOT NULL,
  `p_category_id` int(10) NOT NULL,
  `p_material_id` int(10) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_description` varchar(120) NOT NULL,
  `product_price` decimal(7,2) NOT NULL,
  `product_discount` int(4) NOT NULL,
  `product_image1` text NOT NULL,
  `product_image2` text NOT NULL,
  `product_image3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_category_id`, `p_material_id`, `product_title`, `product_description`, `product_price`, `product_discount`, `product_image1`, `product_image2`, `product_image3`) VALUES
(12, 4, 1, 'Tempat Tidur kayu', 'Rasakan kenyamanan tak tertandingi dan malam yang tenang dengan koleksi tempat tidur kami yang luar biasa.', 200.83, 0, 'kasurkayu1a.JPG', 'kasurkayu1aa.JPG', 'kasurkayu1aaa.JPG'),
(13, 4, 1, 'Tempat Tidur kayu', 'Rasakan kenyamanan tak tertandingi dan malam yang tenang dengan koleksi tempat tidur kami yang luar biasa.', 700.00, 0, 'kasurkayu2a.JPG', 'kasurkayu2aa.JPG', 'kasurkayu2aaa.WEBP'),
(14, 4, 1, 'Tempat Tidur kayu', 'Rasakan kenyamanan tak tertandingi dan malam yang tenang dengan koleksi tempat tidur kami yang luar biasa.', 600.00, 0, 'kasurkayu3a.JPG', 'kasurkayu3aa.JPG', 'kasurkayu3aaa.JPG'),
(15, 4, 1, 'Tempat Tidur kayu', 'Rasakan kenyamanan tak tertandingi dan malam yang tenang dengan koleksi tempat tidur kami yang luar biasa.', 780.00, 0, 'kasurkayu4a.WEBP', 'kasurkayu4a.WEBP', 'kasurkayu4a.WEBP'),
(16, 2, 1, 'Kursi Kayu', 'Dibuat dengan cermat dengan memperhatikan detail yang menawarkan perpaduan sempurna antara fungsionalitas dan bentuknya.', 120.00, 0, 'kursikayu1a.JPG', 'kursikayu1aa.JPG', 'kursikayu1aaa.JPG'),
(17, 2, 1, 'Kursi Kayu', 'Dibuat dengan cermat dengan memperhatikan detail yang menawarkan perpaduan sempurna antara fungsionalitas dan bentuknya.', 95.00, 0, 'kursikayu2a.JPG', 'kursikayu2aa.JPG', 'kursikayu2aaa.JPG'),
(18, 2, 1, 'Kursi Kayu', 'Dibuat dengan cermat dengan memperhatikan detail yang menawarkan perpaduan sempurna antara fungsionalitas dan bentuknya.', 100.00, 0, 'kursikayu3a.JPEG', 'kursikayu3aa.JPEG', 'kursikayu3aaa.JPEG'),
(19, 3, 1, 'Sofa Kayu', 'Tinggikan rumah Anda dengan bagian tengah yang mewujudkan kecanggihan dan kenyamanan.', 100.00, 0, 'sofakayu1a.JPG', 'sofakayu1aa.JPG', 'sofakayu1aaa.JPG'),
(20, 3, 1, 'Sofa Kayu', 'Tinggikan rumah Anda dengan bagian tengah yang mewujudkan kecanggihan dan kenyamanan.', 300.00, 0, 'sofakayu2a.WEBP', 'sofakayu2aa.WEBP', 'sofakayu2aaa.WEBP'),
(21, 1, 1, 'Meja Kayu', 'Tinggikan rumah Anda dengan dekorasi yang memadukan fungsionalitas dan daya tarik estetika.', 95.00, 0, 'mejakayu1a.JPG', 'mejakayu1aa.JPG', 'mejakayu1aaa.JPG'),
(22, 1, 1, 'Meja Kayu', 'Tinggikan rumah Anda dengan dekorasi yang memadukan fungsionalitas dan daya tarik estetika.', 180.00, 0, 'mejakayu2a.JPG', 'mejakayu2aa.JPG', 'mejakayu2aaa.JPG'),
(23, 1, 1, 'Meja Kayu', 'Tinggikan rumah Anda dengan dekorasi yang memadukan fungsionalitas dan daya tarik estetika.', 155.00, 0, 'mejakayu3a.JPG', 'mejakayu3aa.JPG', 'mejakayu3aaa.JPG'),
(24, 4, 3, 'Tempat Tidur Logam', 'Rasakan kenyamanan tak tertandingi dan malam yang tenang dengan koleksi tempat tidur kami yang luar biasa.', 450.00, 0, 'kasurlogam1a.JPG', 'kasurlogam1aa.JPG', 'kasurlogam1aaa.JPG'),
(25, 2, 3, 'Kursi Logam', 'Dibuat dengan cermat dengan memperhatikan detail yang menawarkan perpaduan sempurna antara fungsionalitas dan bentuknya.', 65.00, 0, 'kursilogam1a.JPG', 'kursilogam1aa.JPG', 'kursilogam1aaa.JPG'),
(26, 2, 3, 'Kursi Logam', 'Dibuat dengan cermat dengan memperhatikan detail yang menawarkan perpaduan sempurna antara fungsionalitas dan bentuknya.', 70.00, 0, 'kursilogam2a.WEBP', 'kursilogam2aa.WEBP', 'kursilogam2aaa.WEBP'),
(27, 2, 3, 'Kursi Logam', 'Dibuat dengan cermat dengan memperhatikan detail yang menawarkan perpaduan sempurna antara fungsionalitas dan bentuknya.', 80.00, 0, 'kursilogam3a.JPG', 'kursilogam3aa.JPG', 'kursilogam3aaa.JPG'),
(28, 1, 3, 'Meja Logam', 'Tinggikan rumah Anda dengan dekorasi yang memadukan fungsionalitas dan daya tarik estetika.', 145.00, 0, 'mejalogam1a.JPG', 'mejalogam1aa.JPG', 'mejalogam1aaa.JPG'),
(29, 1, 3, 'Meja Logam', 'Tinggikan rumah Anda dengan dekorasi yang memadukan fungsionalitas dan daya tarik estetika.', 120.00, 0, 'mejalogam2a.WEBP', 'mejalogam2aa.WEBP', 'mejalogam2aaa.WEBP'),
(30, 4, 5, 'Tempat Tidur Kulit', 'Rasakan kenyamanan tak tertandingi dan malam yang tenang dengan koleksi tempat tidur kami yang luar biasa.', 200.00, 0, 'kasurkulit1a.WEBP', 'kasurkulit1aa.WEBP', 'kasurkulit1aaa.WEBP'),
(31, 1, 5, 'Meja Kulit', 'Tinggikan rumah Anda dengan dekorasi yang memadukan fungsionalitas dan daya tarik estetika.', 130.00, 0, 'mejakulit1a.JPG', 'mejakulit1aa.JPG', 'mejakulit1aaa.JPG'),
(32, 3, 5, 'Sofa Kulit', 'Tinggikan rumah Anda dengan bagian tengah yang mewujudkan kecanggihan dan kenyamanan.', 200.00, 0, 'sofakulit1a.JPG', 'sofakulit1aa.JPG', 'sofakulit1aaa.JPG'),
(33, 3, 5, 'Sofa Kulit', 'Tinggikan rumah Anda dengan bagian tengah yang mewujudkan kecanggihan dan kenyamanan.', 180.00, 0, 'sofakulit2a.WEBP', 'sofakulit2aa.WEBP', 'sofakulit2aaa.WEBP'),
(34, 3, 5, 'Sofa Kulit', 'Tinggikan rumah Anda dengan bagian tengah yang mewujudkan kecanggihan dan kenyamanan.', 260.00, 0, 'sofakulit3a.JPG', 'sofakulit3aa.JPG', 'sofakulit3aaa.JPG'),
(35, 1, 3, 'Meja Logam', 'Tinggikan rumah Anda dengan dekorasi yang memadukan fungsionalitas dan daya tarik estetika.', 95.00, 0, 'mejalogam3a.WEBP', 'mejalogam3aa.WEBP', 'mejalogam3aaa.WEBP'),
(39, 4, 5, 'Tempat Tidur Kulit', 'Rasakan kenyamanan tak tertandingi dan malam yang tenang dengan koleksi tempat tidur kami yang luar biasa.', 300.00, 0, 'kasurkulit2a.WEBP', 'kasurkulit2aa.WEBP', 'kasurkulit2aaa.WEBP'),
(40, 1, 3, 'Meja Logam', 'Tinggikan rumah Anda dengan dekorasi yang memadukan fungsionalitas dan daya tarik estetika.', 130.00, 0, 'jovimeja1.WEBP', 'jovimeja2.WEBP', 'jovimeja3.JPG'),
(53, 7, 3, 'Kursi Logam', 'Dibuat dengan cermat dengan memperhatikan detail, kursi kami menawarkan perpaduan sempurna antara fungsionalitas dan keanggunan.', 65.00, 25, 'kursilogam41.WEBP', 'kursilogam42.WEBP', 'kursilogam43.WEBP');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_category_id` int(10) NOT NULL,
  `p_category_title` varchar(50) NOT NULL,
  `p_category_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_category_id`, `p_category_title`, `p_category_desc`) VALUES
(1, 'Meja', 'Bagi Anda yang mencari meja makan untuk berkumpul bersama orang-orang tercinta atau meja kopi serbaguna untuk ruang tamu, koleksi kami menawarkan berbagai pilihan yang sesuai dengan kebutuhan Anda.'),
(2, 'Kursi', 'Temukan kursi impian Anda yang menyempurnakan dekorasi rumah dan memberikan kenyamanan selama bertahun-tahun. Pilih dari koleksi kursi terbaik kami yang tersedia dalam berbagai gaya dan desain.'),
(3, 'Sofa', 'Sofa kami menawarkan tempat duduk yang luas dan empuk untuk kenyamanan optimal, baik Anda sedang menjamu tamu atau menikmati malam yang tenang.'),
(4, 'Tempat Tidur', 'Rasakan sensasi tidur yang nyenyak dengan kasur premium kami yang terbuat dari bahan terbaik. Rangka tempat tidur yang modern dan minimalis akan menambah sentuhan kecanggihan pada dekorasi kamar Anda.'),
(7, 'PROMO', 'Jangan lewatkan Promo Spesial kami! Dapatkan furnitur stylish dan nyaman dengan harga terbaik. Tingkatkan gaya hidup Anda dengan produk obral kami yang berkualitas tinggi dan terjangkau.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product_material`
--

CREATE TABLE `product_material` (
  `p_material_id` int(10) NOT NULL,
  `p_material_title` varchar(50) NOT NULL,
  `p_material_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_material`
--

INSERT INTO `product_material` (`p_material_id`, `p_material_title`, `p_material_desc`) VALUES
(1, 'Kayu', 'Hadirkan nuansa hangat dan alami di ruang keluarga Anda dengan koleksi furnitur kayu kami yang menawan. Rasakan keindahan dan kualitas furnitur kayu yang tahan lama dan ramah lingkungan.'),
(3, 'Logam', 'Furnitur logam kami tahan lama, fungsional, mudah dibersihkan, dan tampil modern. Dapatkan paduan gaya dan kepraktisan untuk rumah Anda.'),
(5, 'Kulit', 'Percantik rumah Anda dengan keanggunan abadi furnitur kulit kami. Rasakan tingkat kenyamanan dan kualitas terbaik yang tak tertandingi.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `surname`, `address`, `phone_number`) VALUES
(1, 'joviana', 'jovianayoung8376@gmail.com', '$2y$10$yAANzpIp53gheyVv/inCBu6OxHxpXbI24bQ5zV3s8T2cEbbJlU1lC', 'young', 'Jl. M yamin, Gg. Pelayaran, Samarinda', '082154321211');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_category_id`);

--
-- Indexes for table `product_material`
--
ALTER TABLE `product_material`
  ADD PRIMARY KEY (`p_material_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_material`
--
ALTER TABLE `product_material`
  MODIFY `p_material_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
