-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 08:17 AM
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
  `lang_id` tinyint(4) NOT NULL,
  `blog_cat_name` varchar(50) NOT NULL,
  `blog_cat_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_category_tbl`
--

INSERT INTO `blog_category_tbl` (`blog_cat_id`, `lang_id`, `blog_cat_name`, `blog_cat_status`, `created_at`) VALUES
(1, 1, 'hammer', 1, '2023-09-26 09:48:49'),
(2, 2, 'hammer', 1, '2023-09-26 09:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `s_no` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `blog_lang_id` tinyint(4) NOT NULL,
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

INSERT INTO `blog_tbl` (`s_no`, `blog_id`, `blog_lang_id`, `A_name`, `category`, `image`, `title`, `b_des_mini`, `b_des_full`, `date`, `blog_status`, `created_at`) VALUES
(1, 1, 1, 'mincon', '1', '1695722885.png', 'col-mine', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt', '<h1 style=\"text-align: center;\">Heading</h1>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"blob:http://localhost/f2d3ef23-98a9-434f-a6fc-f4d3eb556c7d\" alt=\"\" width=\"653\" height=\"206\"></p>\r\n<p style=\"text-align: justify;\">blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.</p>', '2023-09-26', 1, '2023-09-26 10:08:05'),
(2, 1, 2, 'mincon', '2', '1695723129.png', 'col-mine', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit', '<h1 style=\"text-align: center;\"><strong>Heading</strong></h1>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"blob:http://localhost/84a1a830-58ef-45bc-8ebe-c607d34a2145\" alt=\"\" width=\"962\" height=\"348\"></p>\r\n<p style=\"text-align: justify;\">&nbsp;integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.</p>', '2023-09-26', 1, '2023-09-26 10:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cart_id` int(11) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `cat_id` int(11) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` text NOT NULL,
  `cat_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cat_id`, `lang_id`, `cat_name`, `cat_description`, `cat_status`, `created_at`) VALUES
(1, 1, 'category 1', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:42:23'),
(2, 2, 'category 1', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:42:36'),
(3, 1, 'category 2', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:42:49'),
(4, 2, 'category 2', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:43:25'),
(5, 1, 'category 3', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:56:46'),
(6, 2, 'category 3', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:56:55'),
(7, 1, 'category 4', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:57:09'),
(8, 2, 'category 4', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:57:24'),
(9, 1, 'category 5', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:57:33'),
(10, 2, 'category 5', 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', 1, '2023-09-26 06:57:42');

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
-- Table structure for table `language_tbl`
--

CREATE TABLE `language_tbl` (
  `lan_id` int(11) NOT NULL,
  `en_lan` tinyint(4) NOT NULL DEFAULT 1,
  `span_lan` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language_tbl`
--

INSERT INTO `language_tbl` (`lan_id`, `en_lan`, `span_lan`, `created_at`) VALUES
(1, 1, 2, '2023-09-25 07:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `s_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
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

INSERT INTO `products_tbl` (`s_no`, `product_id`, `lang_id`, `product_name`, `product_image`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `product_video_url`, `en_weight`, `en_length`, `en_air_consumption`, `en_strokes_x_mins`, `en_rod_size`, `spn_weight`, `spn_length`, `spn_air_consumption`, `spn_strokes_x_mins`, `spn_rod_size`, `product_status`, `product_category`, `product_description`, `product_created_at`) VALUES
(1, 1, 1, 'Product_1', 'mincon_product_bg1.png', 'mincon_about_bg3.png', '', '', '', '', 'https://www.youtube.com/watch?v=lp6OMS-6sd0', '', '', '', '', '', '', '', '', '', '', 1, 1, 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', '2023-09-26 07:29:46'),
(2, 1, 2, 'Product_1', 'mincon_product_img_1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.', '2023-09-26 07:31:46'),
(3, 0, 1, 'Product_2', 'mincon_contact_bg2.png', '', '', '', '', '', 'https://www.youtube.com/watch?v=7Xy32lLmqIc', '', '', '', '', '', '', '', '', '', '', 1, 3, 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras qua', '2023-09-26 12:07:00'),
(4, 0, 2, 'Product_2', 'mincon_home_bg1.png', 'mincon_about_bg2.png', 'mincon_contact_bg2.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 4, 'Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras qua', '2023-09-26 12:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `product_specification`
--

CREATE TABLE `product_specification` (
  `s_id` int(11) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `s_name` varchar(60) NOT NULL,
  `s_value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_specification`
--

INSERT INTO `product_specification` (`s_id`, `lang_id`, `product_name`, `s_name`, `s_value`) VALUES
(1, 1, 'Product_1', 'Weight', '100kg'),
(2, 2, 'Product_1', 'Weight', '100 lb');

-- --------------------------------------------------------

--
-- Table structure for table `tem_tbl_for_cart`
--

CREATE TABLE `tem_tbl_for_cart` (
  `cart_product_id` int(11) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `cart_product_name` varchar(50) NOT NULL,
  `cart_product_image` varchar(60) NOT NULL,
  `cart_product_cat_name` varchar(50) NOT NULL,
  `mac_id` varchar(50) NOT NULL,
  `cart_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ui_table`
--

CREATE TABLE `ui_table` (
  `ui_id` int(11) NOT NULL,
  `lang_id` tinyint(4) NOT NULL DEFAULT 1,
  `type` varchar(20) NOT NULL,
  `content_id` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ui_table`
--

INSERT INTO `ui_table` (`ui_id`, `lang_id`, `type`, `content_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'home', 'home_hero_content', 'Building Progress, Mining Success', 1, '2023-09-27 06:00:16', '2023-09-27 06:00:16'),
(2, 2, 'home', 'home_hero_content', 'Construyendo progreso, éxito minero\n', 1, '2023-09-27 06:00:22', '2023-09-27 06:00:22'),
(3, 1, 'home', 'home_hero_sub_content', 'Your Partner in Tools for Mining and Construction Excellence.\"\n\n', 1, '2023-09-27 06:02:04', '2023-09-27 06:02:04'),
(4, 2, 'home', 'home_hero_sub_content', 'Su socio en herramientas para la excelencia en minería y construcción\n', 1, '2023-09-27 06:03:49', '2023-09-27 06:03:49'),
(5, 1, 'home', 'home_hero_btn', 'Explore our Products', 1, '2023-09-27 06:04:46', '2023-09-27 06:04:46'),
(6, 2, 'home', 'home_hero_btn', 'Explora nuestros productos', 1, '2023-09-27 06:04:57', '2023-09-27 06:04:57'),
(7, 1, 'header', 'header_link_home', 'Home', 1, '2023-09-27 06:47:34', '2023-09-27 06:47:34'),
(8, 2, 'header', 'header_link_home', 'Hogar\r\n', 1, '2023-09-27 06:47:43', '2023-09-27 06:47:43'),
(9, 1, 'header', 'header_link_about', 'About Us', 1, '2023-09-27 06:57:37', '2023-09-27 06:57:37'),
(10, 2, 'header', 'header_link_about', 'Sobre nosotros', 1, '2023-09-27 06:58:01', '2023-09-27 06:58:01'),
(11, 1, 'header', 'header_link_product', 'Products', 1, '2023-09-27 08:48:52', '2023-09-27 08:48:52'),
(12, 2, 'header', 'header_link_product', 'Productos', 1, '2023-09-27 08:49:04', '2023-09-27 08:49:04'),
(13, 1, 'header', 'header_link_blog', 'Blogs', 1, '2023-09-27 08:49:38', '2023-09-27 08:49:38'),
(14, 2, 'header', 'header_link_blog', 'Blogs', 1, '2023-09-27 08:50:11', '2023-09-27 08:50:11'),
(15, 1, 'header', 'header_link_contact', 'Contact', 1, '2023-09-27 08:51:04', '2023-09-27 08:51:04'),
(16, 2, 'header', 'header_link_contact', 'Contacto', 1, '2023-09-27 08:51:14', '2023-09-27 08:51:14'),
(17, 1, 'header', 'header_link_language', 'Language', 1, '2023-09-27 08:53:41', '2023-09-27 08:53:41'),
(18, 2, 'header', 'header_link_language', 'Idioma', 1, '2023-09-27 08:53:52', '2023-09-27 08:53:52'),
(19, 1, 'footer', 'footer_heading_h2', 'Our Products', 1, '2023-09-27 08:57:43', '2023-09-27 08:57:43'),
(20, 2, 'footer', 'footer_heading_h2', 'Nuestros productos', 1, '2023-09-27 08:58:01', '2023-09-27 08:58:01'),
(21, 1, 'footer', 'footer_link_head', 'Quick Links', 1, '2023-09-27 09:00:07', '2023-09-27 09:00:07'),
(22, 2, 'footer', 'footer_link_head', 'enlaces rápidos', 1, '2023-09-27 09:00:32', '2023-09-27 09:00:32'),
(23, 1, 'footer', 'footer_link_home', 'Home', 1, '2023-09-27 09:04:24', '2023-09-27 09:04:24'),
(24, 2, 'footer', 'footer_link_home', 'Hogar', 1, '2023-09-27 09:04:52', '2023-09-27 09:04:52'),
(25, 1, 'footer', 'footer_link_about', 'About Us', 1, '2023-09-27 09:06:12', '2023-09-27 09:06:12'),
(26, 2, 'footer', 'footer_link_about', 'Sobre nosotros', 1, '2023-09-27 09:06:41', '2023-09-27 09:06:41'),
(27, 1, 'footer', 'footer_link_product', 'Products', 1, '2023-09-27 09:07:12', '2023-09-27 09:07:12'),
(28, 2, 'footer', 'footer_link_product', 'Productos', 1, '2023-09-27 09:07:38', '2023-09-27 09:07:38'),
(29, 1, 'footer', 'footer_link_blog', 'Blogs', 1, '2023-09-27 09:08:49', '2023-09-27 09:08:49'),
(30, 2, 'footer', 'footer_link_blog', 'BLogs', 1, '2023-09-27 09:08:55', '2023-09-27 09:08:55'),
(31, 1, 'footer', 'footer_link_contact', 'Contact', 1, '2023-09-27 09:10:48', '2023-09-27 09:10:48'),
(32, 2, 'footer', 'footer_link_contact', 'Contacto', 1, '2023-09-27 09:11:24', '2023-09-27 09:11:24'),
(33, 1, 'footer', 'footer_privacy_content', 'Privacy Policy', 1, '2023-09-27 09:32:33', '2023-09-27 09:32:33'),
(34, 2, 'footer', 'footer_privacy_content', 'política de privacidad', 1, '2023-09-27 09:32:52', '2023-09-27 09:32:52'),
(35, 1, 'footer', 'footer_terms_content', 'Terms and Conditions', 1, '2023-09-27 09:34:52', '2023-09-27 09:34:52'),
(36, 2, 'footer', 'footer_terms_content', 'Términos y condiciones', 1, '2023-09-27 09:35:13', '2023-09-27 09:35:13'),
(37, 1, 'footer', 'footer_end_copyright_content', 'Copyright reserved by <span class=\"fw-bold\">Mincon Tools </span>| Designed and managed by <a class=\"text-reset fw-bold\" href=\"https://digitalshakha.in/\">Digitalshakha</a>', 1, '2023-09-27 09:41:14', '2023-09-27 09:41:14'),
(38, 2, 'footer', 'footer_end_copyright_content', 'Copyright reservado por <span class=\"fw-bold\">Mincon Tools </span>| Diseñado y administrado por <a class=\"text-reset fw-bold\" href=\"https://digitalshakha.in/\">Digitalshakha</a>', 1, '2023-09-27 09:42:56', '2023-09-27 09:42:56'),
(39, 1, 'about', 'about_hero_main_heading', 'About Us', 1, '2023-09-27 09:49:08', '2023-09-27 09:49:08'),
(40, 2, 'about', 'about_hero_main_heading', 'Sobre nosotros', 1, '2023-09-27 09:49:42', '2023-09-27 09:49:42'),
(41, 1, 'about', 'about_hero_nav_heading', '<span><a href=\"./index.php\">Home</a></span><< About us', 1, '2023-09-27 09:54:44', '2023-09-27 09:54:44'),
(42, 2, 'about', 'about_hero_nav_heading', '<span><a href=\"./index.php\">Hogar</a></span><< Sobre nosotros', 1, '2023-09-27 09:55:21', '2023-09-27 09:55:21'),
(43, 1, 'about', 'about_heading', 'About Mincon Tools\r\n', 1, '2023-09-27 09:58:27', '2023-09-27 09:58:27'),
(44, 2, 'about', 'about_heading', 'Acerca de Mincon Tools', 1, '2023-09-27 09:58:51', '2023-09-27 09:58:51'),
(45, 1, 'about', 'about_sub_heading', 'Welcome to Mincon Tools - Your Partner in Precision Drilling Solutions', 1, '2023-09-27 09:59:43', '2023-09-27 09:59:43'),
(46, 2, 'about', 'about_sub_heading', 'Bienvenido a Mincon Tools: su socio en soluciones de perforación de precisión', 1, '2023-09-27 10:00:05', '2023-09-27 10:00:05'),
(47, 1, 'about', 'about_description_1', 'At Mincon Tools LLC, we have a legacy of being a trusted provider of top-notch tools for numerous years. We are excited to take our commitment a step further by directly engaging with our customers and sharing the resulting savings with them. We recognize the significance of equipping professionals with the right tools, enabling them to carry out their tasks safely and efficiently. Our team of experts dedicates themselves to crafting and producing innovative mining tools that embody reliability and cost-effectiveness.', 1, '2023-09-27 10:00:53', '2023-09-27 10:00:53'),
(48, 2, 'about', 'about_description_1', 'En Mincon Tools LLC, tenemos el legado de ser un proveedor confiable de herramientas de primer nivel durante muchos años. Estamos entusiasmados de llevar nuestro compromiso un paso más allá al interactuar directamente con nuestros clientes y compartir con ellos los ahorros resultantes. Reconocemos la importancia de equipar a los profesionales con las herramientas adecuadas, que les permitan realizar sus tareas de forma segura y eficiente. Nuestro equipo de expertos se dedica a diseñar y producir herramientas de minería innovadoras que incorporan confiabilidad y rentabilidad.', 1, '2023-09-27 10:01:21', '2023-09-27 10:01:21'),
(49, 1, 'about', 'about_description_2', 'In an industry where established competitors flaunt feature-rich websites, we acknowledge that our website might be in its early stages. However, our products are a testament to our dedication. Our focus has been set on creating mining tools of unparalleled quality and longevity. Our diligent team has poured their efforts into developing pioneering solutions that impeccably address the requirements of contemporary mining professionals. While we are actively working on enhancing our online presence, rest assured that our commitment to upholding quality and ensuring customer satisfaction remains steadfast.', 1, '2023-09-27 10:02:37', '2023-09-27 10:02:37'),
(50, 2, 'about', 'about_description_2', 'En una industria donde los competidores establecidos hacen alarde de sitios web con muchas funciones, reconocemos que nuestro sitio web podría estar en sus primeras etapas. Sin embargo, nuestros productos son un testimonio de nuestra dedicación. Nuestro enfoque se ha puesto en crear herramientas de minería de calidad y longevidad incomparables. Nuestro diligente equipo ha dedicado sus esfuerzos a desarrollar soluciones pioneras que abordan de manera impecable los requisitos de los profesionales de la minería contemporáneos. Si bien trabajamos activamente para mejorar nuestra presencia en línea, tenga la seguridad de que nuestro compromiso de mantener la calidad y garantizar la satisfacción del cliente sigue siendo firme.', 1, '2023-09-27 10:03:24', '2023-09-27 10:03:24'),
(51, 1, 'about', 'about_btn1', 'Contact Us Now', 1, '2023-09-27 10:16:05', '2023-09-27 10:16:05'),
(52, 2, 'about', 'about_btn1', 'Contacta con nosotros ahora', 1, '2023-09-27 10:16:24', '2023-09-27 10:16:24'),
(53, 1, 'about', 'about_3_heading', 'Our Promise to You', 1, '2023-09-27 10:19:43', '2023-09-27 10:19:43'),
(54, 2, 'about', 'about_3_heading', 'Nuestra promesa para usted', 1, '2023-09-27 10:19:59', '2023-09-27 10:19:59'),
(55, 1, 'about', 'about_3_description', 'If you seek mining tools that stand head and shoulders above the rest, Mincon Tools LLC is your answer. Our products speak volumes about the excellence we bring to the table. Whether you\'re a mining veteran or a newcomer to the field, our offerings are designed to exceed your expectations. We have tirelessly pursued innovation to cater to the evolving demands of the industry, and our commitment to enhancing your experience remains unwavering.', 1, '2023-09-27 10:20:38', '2023-09-27 10:20:38'),
(56, 2, 'about', 'about_3_description', 'Si busca herramientas de minería que sobresalgan del resto, Mincon Tools LLC es su respuesta. Nuestros productos dicen mucho sobre la excelencia que aportamos. Ya sea usted un veterano de la minería o un recién llegado al campo, nuestras ofertas están diseñadas para superar sus expectativas. Hemos buscado incansablemente la innovación para satisfacer las demandas cambiantes de la industria y nuestro compromiso de mejorar su experiencia sigue siendo inquebrantable.', 1, '2023-09-27 10:21:01', '2023-09-27 10:21:01'),
(57, 1, 'about', 'about_heading_choose_content_heading', 'Why Choose Mincon Tools', 1, '2023-09-27 11:00:35', '2023-09-27 11:00:35'),
(58, 2, 'about', 'about_heading_choose_content_heading', '¿Por qué elegir Mincon Tools', 1, '2023-09-27 11:01:01', '2023-09-27 11:01:01'),
(59, 1, 'about', 'about_heading_choose_sub_heading_1', 'Quality Assurance', 1, '2023-09-27 11:03:17', '2023-09-27 11:03:17'),
(60, 2, 'about', 'about_heading_choose_sub_heading_1', 'Seguro de calidad', 1, '2023-09-27 11:03:44', '2023-09-27 11:03:44'),
(61, 1, 'about', 'about_heading_choose_sub_heading_2', 'Innovation at Heart', 1, '2023-09-27 11:04:41', '2023-09-27 11:04:41'),
(62, 2, 'about', 'about_heading_choose_sub_heading_2', 'Innovación en el corazón', 1, '2023-09-27 11:04:53', '2023-09-27 11:04:53'),
(63, 1, 'about', 'about_heading_choose_sub_heading_3', 'Cost-Effective Excellence', 1, '2023-09-27 11:06:18', '2023-09-27 11:06:18'),
(64, 2, 'about', 'about_heading_choose_sub_heading_3', 'Excelencia rentable', 1, '2023-09-27 11:06:49', '2023-09-27 11:06:49'),
(65, 1, 'about', 'about_heading_choose_sub_heading_4', 'Customer-Centric Focus', 1, '2023-09-27 11:07:20', '2023-09-27 11:07:20'),
(66, 2, 'about', 'about_heading_choose_sub_heading_4', 'Enfoque centrado en el cliente', 1, '2023-09-27 11:07:54', '2023-09-27 11:07:54'),
(67, 1, 'about', 'about_heading_choose_sub_heading_5', 'Steadfast Dedication', 1, '2023-09-27 11:08:17', '2023-09-27 11:08:17'),
(68, 2, 'about', 'about_heading_choose_sub_heading_5', 'Dedicación firme', 1, '2023-09-27 11:08:45', '2023-09-27 11:08:45'),
(69, 1, 'about', 'about_heading_choose_description_1', 'Our tools are crafted with precision, durability, and performance in mind. Each tool is a testament to our commitment to quality', 1, '2023-09-27 11:14:56', '2023-09-27 11:14:56'),
(70, 2, 'about', 'about_heading_choose_description_1', 'Nuestras herramientas están diseñadas teniendo en cuenta la precisión, la durabilidad y el rendimiento. Cada herramienta es un testimonio de nuestro compromiso con la calidad.', 1, '2023-09-27 11:15:26', '2023-09-27 11:15:26'),
(71, 1, 'about', 'about_heading_choose_description_2', 'We continuously challenge the status quo to equip you with tools that outpace industry norms', 1, '2023-09-27 11:16:37', '2023-09-27 11:16:37'),
(72, 2, 'about', 'about_heading_choose_description_2', 'Desafiamos continuamente el status quo para equiparlo con herramientas que superen las normas de la industria.', 1, '2023-09-27 11:17:05', '2023-09-27 11:17:05'),
(73, 1, 'about', 'about_heading_choose_description_3', 'Recognizing your investment\'s worth, we engineer tools that not only ensure reliability but also offer exceptional value for your investment', 1, '2023-09-27 11:17:46', '2023-09-27 11:17:46'),
(74, 2, 'about', 'about_heading_choose_description_3', 'Reconociendo el valor de su inversión, diseñamos herramientas que no solo garantizan la confiabilidad sino que también ofrecen un valor excepcional para su inversión.', 1, '2023-09-27 11:18:10', '2023-09-27 11:18:10'),
(75, 1, 'about', 'about_heading_choose_description_4', 'You\'re our core concern. Your satisfaction fuels our endeavors, and we stand by your side at every juncture', 1, '2023-09-27 11:18:54', '2023-09-27 11:18:54'),
(76, 2, 'about', 'about_heading_choose_description_4', 'Eres nuestra principal preocupación. Su satisfacción impulsa nuestros esfuerzos y estamos a su lado en todo momento.', 1, '2023-09-27 11:19:14', '2023-09-27 11:19:14'),
(77, 1, 'about', 'about_heading_choose_description_5', 'Amidst our evolving online presence, our dedication to furnishing impactful tools remains constant, promising you tools that truly matter', 1, '2023-09-27 11:19:57', '2023-09-27 11:19:57'),
(78, 2, 'about', 'about_heading_choose_description_5', 'En medio de nuestra presencia en línea en evolución, nuestra dedicación a proporcionar herramientas impactantes permanece constante, prometiéndole herramientas que realmente importan.', 1, '2023-09-27 11:20:16', '2023-09-27 11:20:16'),
(79, 1, 'about', 'about_sky_content_heading', 'Elevating Mining and <br> Construction Excellence <br> Through Innovative Tools', 1, '2023-09-27 11:35:13', '2023-09-27 11:35:13'),
(80, 2, 'about', 'about_sky_content_heading', 'Elevando la minería y <br> Excelencia en la construcción <br> A través de herramientas innovadoras', 1, '2023-09-27 11:37:49', '2023-09-27 11:37:49'),
(81, 1, 'about', 'about_end_text_content', 'Mincon Tools: Where Compromise Has No Place. Join forces with Mincon Tools LLC to secure the tools that drive your success in mining and construction. Explore our product spectrum, embrace innovation, and witness the metamorphosis of your mining operations', 1, '2023-09-27 11:42:13', '2023-09-27 11:42:13'),
(82, 2, 'about', 'about_end_text_content', 'Mincon Tools: donde el compromiso no tiene cabida. Una fuerzas con Mincon Tools LLC para asegurar las herramientas que impulsarán su éxito en la minería y la construcción. Explore nuestra gama de productos, adopte la innovación y sea testigo de la metamorfosis de sus operaciones mineras', 1, '2023-09-27 11:42:31', '2023-09-27 11:42:31'),
(83, 1, 'product', 'product_hero_heading', 'Products', 1, '2023-09-27 11:46:50', '2023-09-27 11:46:50'),
(84, 2, 'product', 'product_hero_heading', 'Productos', 1, '2023-09-27 11:47:11', '2023-09-27 11:47:11'),
(85, 1, 'product', 'product_hero_sub_heading', ' <span><a href=\"./index.php\">Home</a></span><< Products', 1, '2023-09-27 11:49:30', '2023-09-27 11:49:30'),
(86, 2, 'product', 'product_hero_sub_heading', '<span><a href=\"./index.php\">Hogar</a></span>\n            << Productos', 1, '2023-09-27 11:49:46', '2023-09-27 11:49:46'),
(87, 1, 'blog', 'blog_category_name', 'Categories', 1, '2023-09-27 12:03:46', '2023-09-27 12:03:46'),
(88, 2, 'blog', 'blog_category_name', 'Categorías', 1, '2023-09-27 12:04:13', '2023-09-27 12:04:13'),
(89, 1, 'blog', 'blog_recent_post', 'Recent Posts', 1, '2023-09-27 12:05:51', '2023-09-27 12:05:51'),
(90, 2, 'blog', 'blog_recent_post', 'Mensajes recientes', 1, '2023-09-27 12:06:11', '2023-09-27 12:06:11'),
(91, 1, 'blog', 'blog_heading', 'Our Blog', 1, '2023-09-27 12:09:01', '2023-09-27 12:09:01'),
(92, 2, 'blog', 'blog_heading', 'Nuestro blog', 1, '2023-09-27 12:09:24', '2023-09-27 12:09:24'),
(93, 1, 'blog', 'blog_search_placeholder', 'Search', 1, '2023-09-27 12:11:29', '2023-09-27 12:11:29'),
(94, 2, 'blog', 'blog_search_placeholder', 'Buscar', 1, '2023-09-27 12:11:46', '2023-09-27 12:11:46'),
(95, 1, 'contact', 'contact_hero_heading', 'Contact', 1, '2023-09-27 12:16:58', '2023-09-27 12:16:58'),
(96, 2, 'contact', 'contact_hero_heading', 'Contacto', 1, '2023-09-27 12:17:22', '2023-09-27 12:17:22'),
(97, 1, 'contact', 'contact_hero_sub_heading', '<span><a href=\"./index.php\">Home</a></span><< Contact', 1, '2023-09-27 12:18:59', '2023-09-27 12:18:59'),
(98, 2, 'contact', 'contact_hero_sub_heading', '<span><a href=\"./index.php\">Hogar</a></span><< contacto', 1, '2023-09-27 12:19:50', '2023-09-27 12:19:50'),
(99, 1, 'contact', 'contact_phone', 'Phone Number', 1, '2023-09-27 12:22:03', '2023-09-27 12:22:03'),
(100, 2, 'contact', 'contact_phone', 'Número de teléfono', 1, '2023-09-27 12:22:17', '2023-09-27 12:22:17'),
(101, 1, 'contact', 'contact_email', 'Email Address', 1, '2023-09-27 12:23:03', '2023-09-27 12:23:03'),
(102, 2, 'contact', 'contact_email', 'Dirección de correo electrónico', 1, '2023-09-27 12:23:19', '2023-09-27 12:23:19'),
(103, 1, 'contact', 'contact_address', 'Office Address', 1, '2023-09-27 12:23:46', '2023-09-27 12:23:46'),
(104, 2, 'contact', 'contact_address', 'Dirección de la oficina', 1, '2023-09-27 12:24:04', '2023-09-27 12:24:04'),
(105, 1, 'contact', 'contact_contact_us_name', 'Contact Us', 1, '2023-09-27 12:27:11', '2023-09-27 12:27:11'),
(106, 2, 'contact', 'contact_contact_us_name', 'Contacta con nosotros', 1, '2023-09-27 12:27:47', '2023-09-27 12:27:47'),
(107, 1, 'contact', 'contact_us_sub_description', 'Feel Free to reach out to us', 1, '2023-09-27 12:28:51', '2023-09-27 12:28:51'),
(108, 2, 'contact', 'contact_us_sub_description', 'Siéntase libre de llegar a nosotros', 1, '2023-09-27 12:31:08', '2023-09-27 12:31:08'),
(109, 1, 'contact', 'contact_input_name_placeholder', 'Name', 1, '2023-09-27 12:37:37', '2023-09-27 12:37:37'),
(110, 2, 'contact', 'contact_input_name_placeholder', 'Nombre', 1, '2023-09-27 12:38:04', '2023-09-27 12:38:04'),
(111, 1, 'contact', 'contact_input_email_placeholder', 'Email Address', 1, '2023-09-27 12:39:09', '2023-09-27 12:39:09'),
(112, 2, 'contact', 'contact_input_email_placeholder', 'Dirección de correo electrónico', 1, '2023-09-27 12:39:33', '2023-09-27 12:39:33'),
(113, 1, 'contact', 'contact_input_phone_placeholder', 'Contact Number', 1, '2023-09-27 12:40:26', '2023-09-27 12:40:26'),
(114, 2, 'contact', 'contact_input_phone_placeholder', 'Número de contacto', 1, '2023-09-27 12:40:36', '2023-09-27 12:40:36'),
(115, 1, 'contact', 'contact_input_company_placeholder', 'Company Name', 1, '2023-09-27 12:41:07', '2023-09-27 12:41:07'),
(116, 2, 'contact', 'contact_input_company_placeholder', 'nombre de empresa', 1, '2023-09-27 12:41:41', '2023-09-27 12:41:41'),
(117, 1, 'contact', 'contact_input_country_placeholder', 'Country Name', 1, '2023-09-27 12:42:06', '2023-09-27 12:42:06'),
(118, 2, 'contact', 'contact_input_country_placeholder', 'Nombre del país', 1, '2023-09-27 12:42:32', '2023-09-27 12:42:32'),
(119, 1, 'contact', 'contact_input_category_placeholder', 'Select Category', 1, '2023-09-27 12:43:03', '2023-09-27 12:43:03'),
(120, 2, 'contact', 'contact_input_category_placeholder', 'selecciona una categoría', 1, '2023-09-27 12:43:19', '2023-09-27 12:43:19'),
(121, 1, 'contact', 'contact_input_product_placeholder', 'Select Product', 1, '2023-09-27 12:43:43', '2023-09-27 12:43:43'),
(122, 2, 'contact', 'contact_input_product_placeholder', 'Seleccionar producto', 1, '2023-09-27 12:44:04', '2023-09-27 12:44:04');

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
  ADD PRIMARY KEY (`s_no`);

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
-- Indexes for table `language_tbl`
--
ALTER TABLE `language_tbl`
  ADD PRIMARY KEY (`lan_id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`s_no`);

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
-- Indexes for table `ui_table`
--
ALTER TABLE `ui_table`
  ADD PRIMARY KEY (`ui_id`);

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
  MODIFY `blog_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `language_tbl`
--
ALTER TABLE `language_tbl`
  MODIFY `lan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_specification`
--
ALTER TABLE `product_specification`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tem_tbl_for_cart`
--
ALTER TABLE `tem_tbl_for_cart`
  MODIFY `cart_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ui_table`
--
ALTER TABLE `ui_table`
  MODIFY `ui_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
