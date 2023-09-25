-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 09:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mincon_tools_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_category_tbl`
--

CREATE TABLE `blog_category_tbl` (
  `blog_cat_id` int(11) NOT NULL,
  `blog_cat_name` varchar(50) NOT NULL,
  `blog_cat_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_category_tbl`
--

INSERT INTO `blog_category_tbl` (`blog_cat_id`, `blog_cat_name`, `blog_cat_status`, `created_at`) VALUES
(3, 'hammer 3', 1, '2023-09-14 07:02:43'),
(4, 'hammer 2', 1, '2023-09-14 07:02:47'),
(5, 'hammer ', 1, '2023-09-15 11:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `blog_id` int(11) NOT NULL,
  `A_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `b_des_mini` text NOT NULL,
  `b_des_full` text NOT NULL,
  `date` date NOT NULL,
  `blog_status` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`blog_id`, `A_name`, `category`, `image`, `title`, `b_des_mini`, `b_des_full`, `date`, `blog_status`, `created_at`) VALUES
(1, 'mincon', '3', '1694675472.png', 'col-mine', 'kjdnajksdnjsndks', 'c sdjcjsndncsjkcnskc', '2023-08-30', 1, '2023-09-14 07:11:12'),
(2, 'mincon', '4', '1694686226.png', 'heading 32', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis fugit reprehenderit commodi doloremque cupiditate nisi culpa, quae reiciendis perspiciatis possimus eaque repellat dolores, rem non? Alias minus totam pariatur repudiandae voluptas fugiat eaque necessitatibus amet debitis. Beatae qui ', '<div>\r\n<h1 style=\"text-align: center;\"><strong>Lorem ipsum</strong></h1>\r\n<div style=\"text-align: justify;\">&nbsp;dolor sit amet consectetur adipisicing elit. Vitae quia, consectetur deserunt soluta blanditiis eos. Esse illum, incidunt beatae quo fuga amet itaque quos iste aliquam praesentium consequuntur facere. Eveniet dicta autem dolorem, perferendis reiciendis, sunt obcaecati incidunt eaque quis soluta deserunt. Dolorem ab nam, incidunt hic similique doloremque deserunt laborum, ut placeat minus error fuga, dicta quia labore modi. Alias doloremque debitis tenetur ex saepe optio possimus quo iste quam exercitationem obcaecati non voluptatem eos at, tempora, laudantium, sed facilis aut labore suscipit eius aperiam! Molestias, possimus sequi</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div>&nbsp;</div>\r\n</div>', '2023-09-15', 1, '2023-09-14 10:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cart_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_img` varchar(60) NOT NULL,
  `p_cat_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_mobile` varchar(15) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_company_name` varchar(60) NOT NULL,
  `user_country_name` varchar(50) NOT NULL,
  `cart_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `p_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cart_id`, `p_name`, `p_img`, `p_cat_name`, `user_name`, `user_mobile`, `user_email`, `user_company_name`, `user_country_name`, `cart_created_at`, `p_status`, `created_at`) VALUES
(21, 'Product 2', 'mincon_product_img_1.png', 'Category 1', 'Tejpratap Sahu', '1234567890', 'tejpratapsahu00@gmail.com', 'App', 'india', '2023-09-22 07:23:53', 0, '2023-09-22 07:23:53'),
(22, 'Product_9', 'mincon_product_img_1.png', 'Category 1', 'Tejpratap Sahu', '1234567890', 'tejpratapsahu00@gmail.com', 'App', 'india', '2023-09-22 07:23:57', 0, '2023-09-22 07:23:57'),
(23, 'Product_10', 'mincon_about_bg3.png', 'Category 1', 'Tejpratap Sahu', '1234567890', 'tejpratapsahu00@gmail.com', 'App', 'india', '2023-09-22 07:24:02', 0, '2023-09-22 07:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` text NOT NULL,
  `cat_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cat_id`, `cat_name`, `cat_description`, `cat_status`, `created_at`) VALUES
(2, 'Category 1', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-12 07:10:33'),
(3, 'Category 2', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-12 08:39:29'),
(4, 'Category 3', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-12 10:49:31'),
(5, 'category 4', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-12 12:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_ticket_tbl`
--

CREATE TABLE `confirm_ticket_tbl` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `contact_product_category` varchar(40) NOT NULL,
  `contact_product` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `name`, `email`, `mobile`, `company_name`, `country`, `contact_product_category`, `contact_product`, `created_at`) VALUES
(1, 'Rohan', 'rohan@gmail.com', '1234567890', 'App', 'india', '2', '3', '2023-09-13 10:21:59'),
(3, 'Bhoj', 'bhoj@gmail.com', '0987654321', 'App', 'india', '4', '5', '2023-09-13 10:41:06'),
(4, 'ashu', 'ashu@gmail.com', '0987654321', 'tcs', 'india', '3', '4', '2023-09-13 10:42:13'),
(5, 'category 5', 'abc@gmail.com', '0987654321', 'tcs', 'india', '2', '2', '2023-09-15 11:59:29'),
(6, 'ABC Kumar', 'abc@gmail.com', '9644477950', 'amazon', 'india', '2', '9', '2023-09-22 07:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `enquire_tbl`
--

CREATE TABLE `enquire_tbl` (
  `en_id` int(11) NOT NULL,
  `en_product_name` varchar(50) NOT NULL,
  `en_product_cat_name` varchar(50) NOT NULL,
  `en_product_image` varchar(50) NOT NULL,
  `en_user_name` varchar(50) NOT NULL,
  `en_user_mobile` varchar(15) NOT NULL,
  `en_user_email` varchar(40) NOT NULL,
  `en_user_company` varchar(50) NOT NULL,
  `en_user_country` varchar(50) NOT NULL,
  `en_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_image1` varchar(50) NOT NULL,
  `product_image2` varchar(50) NOT NULL,
  `product_image3` varchar(50) NOT NULL,
  `product_image4` varchar(50) NOT NULL,
  `product_image5` varchar(50) NOT NULL,
  `product_video_url` varchar(100) NOT NULL,
  `en_weight` varchar(50) NOT NULL,
  `en_length` varchar(50) NOT NULL,
  `en_air_consumption` varchar(50) NOT NULL,
  `en_strokes_x_mins` varchar(50) NOT NULL,
  `en_rod_size` varchar(50) NOT NULL,
  `spn_weight` varchar(50) NOT NULL,
  `spn_length` varchar(50) NOT NULL,
  `spn_air_consumption` varchar(50) NOT NULL,
  `spn_strokes_x_mins` varchar(50) NOT NULL,
  `spn_rod_size` varchar(50) NOT NULL,
  `product_status` tinyint(4) NOT NULL,
  `product_category` tinyint(4) NOT NULL,
  `product_description` text NOT NULL,
  `product_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`product_id`, `product_name`, `product_image`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `product_video_url`, `en_weight`, `en_length`, `en_air_consumption`, `en_strokes_x_mins`, `en_rod_size`, `spn_weight`, `spn_length`, `spn_air_consumption`, `spn_strokes_x_mins`, `spn_rod_size`, `product_status`, `product_category`, `product_description`, `product_created_at`) VALUES
(2, 'Product 1', 'mincon_product_img_1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, '', '2023-09-12 11:19:23'),
(3, 'Product 2', 'mincon_product_img_1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, '', '2023-09-12 11:25:04'),
(4, 'Product 3', 'mincon_product_img_1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 3, '', '2023-09-12 11:46:03'),
(5, 'Product 4', 'mincon_product_img_1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 4, '', '2023-09-12 12:40:40'),
(6, 'Product 5', 'mincon_product_img_1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 5, '', '2023-09-12 12:42:00'),
(8, 'Product_7', 'mincon_product_img_1.png', 'mincon_about_bg2.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 3, '', '2023-09-19 16:30:24'),
(9, 'Product_9', 'mincon_product_img_1.png', 'mincon_contact_bg2.png', 'mincon_about_bg2.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, 'dsdlkddsldcdcds', '2023-09-19 17:28:37'),
(10, 'Product_10', 'mincon_about_bg3.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, 'psum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur ', '2023-09-19 18:19:14'),
(11, 'Product_11', 'mincon_about_bg2.png', 'mincon_about_bg3.png', 'mincon_contact_bg1.png', 'mincon_hero_bg1.png', 'mincon_hero_bg2.png', 'mincon_home_bg1.png', 'https://www.youtube.com/watch?v=ax1h-YOyPJc', '100kg', '19.5mm', '18.33 l/s', '23mm x 14mm', '2650', '300kg', '21.8mm', '40.33 l/s', '53mm x 10mm', '500', 1, 2, 'psum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur a', '2023-09-19 18:35:15'),
(12, 'Product_13', 'mincon_product_img_1.png', '', '', '', '', '', 'https://www.youtube.com/watch?v=lp6OMS-6sd0', '300kg', '20.8mm', '90.5 l/s', '300mm X 200mm', '2000', '200kg', '32.6mm', '65.7 l/s', '233mm X 432mm', '4000', 1, 3, 'It looks like there aren\'t many great matches for your search\r\nTry using words that might appear on the page that you’re looking for. For example, \'cake recipes\' instead of \'how to make a cake\'.\r\nNeed help? Take a look at other tips for searching on Google\r\nIt looks like there aren\'t many great matches for your search\r\nTry using words that might appear on the page that you’re looking for. For example, \'cake recipes\' instead of \'how to make a cake\'.\r\nNeed help? Take a look at other tips for searching on Google', '2023-09-22 13:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_specification`
--

CREATE TABLE `product_specification` (
  `s_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `s_name` varchar(60) NOT NULL,
  `s_value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_specification`
--

INSERT INTO `product_specification` (`s_id`, `product_name`, `s_name`, `s_value`) VALUES
(1, 'Product 1', 'Weight', '100kg'),
(2, 'Product 2', 'length', '130mm');

-- --------------------------------------------------------

--
-- Table structure for table `tem_tbl_for_cart`
--

CREATE TABLE `tem_tbl_for_cart` (
  `cart_product_id` int(11) NOT NULL,
  `cart_product_name` varchar(50) NOT NULL,
  `cart_product_image` varchar(60) NOT NULL,
  `cart_product_cat_name` varchar(50) NOT NULL,
  `mac_id` varchar(50) NOT NULL,
  `cart_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `status`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '1234567890', '12345', 1, '2023-09-12 10:39:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_category_tbl`
--
ALTER TABLE `blog_category_tbl`
  ADD PRIMARY KEY (`blog_cat_id`);

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `confirm_ticket_tbl`
--
ALTER TABLE `confirm_ticket_tbl`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquire_tbl`
--
ALTER TABLE `enquire_tbl`
  ADD PRIMARY KEY (`en_id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_specification`
--
ALTER TABLE `product_specification`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tem_tbl_for_cart`
--
ALTER TABLE `tem_tbl_for_cart`
  ADD PRIMARY KEY (`cart_product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_category_tbl`
--
ALTER TABLE `blog_category_tbl`
  MODIFY `blog_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `confirm_ticket_tbl`
--
ALTER TABLE `confirm_ticket_tbl`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquire_tbl`
--
ALTER TABLE `enquire_tbl`
  MODIFY `en_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_specification`
--
ALTER TABLE `product_specification`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tem_tbl_for_cart`
--
ALTER TABLE `tem_tbl_for_cart`
  MODIFY `cart_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
