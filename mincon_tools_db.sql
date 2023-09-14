-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 04:08 PM
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
(4, 'hammer 2', 1, '2023-09-14 07:02:47');

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
(4, 'ashu', 'ashu@gmail.com', '0987654321', 'tcs', 'india', '3', '4', '2023-09-13 10:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(4) NOT NULL,
  `product_category` tinyint(4) NOT NULL,
  `product_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`product_id`, `product_name`, `product_image`, `product_status`, `product_category`, `product_created_at`) VALUES
(2, 'Product 1', 'mincon_product_img_1.png', 1, 2, '2023-09-12 11:19:23'),
(3, 'Product 2', 'mincon_product_img_1.png', 1, 2, '2023-09-12 11:25:04'),
(4, 'Product 3', 'mincon_product_img_1.png', 1, 3, '2023-09-12 11:46:03'),
(5, 'Product 4', 'mincon_product_img_1.png', 1, 4, '2023-09-12 12:40:40'),
(6, 'Product 5', 'mincon_product_img_1.png', 1, 5, '2023-09-12 12:42:00');

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
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `blog_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
