-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 06:33 PM
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
  `blog_cat_name` varchar(100) NOT NULL,
  `blog_cat_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_category_tbl`
--

INSERT INTO `blog_category_tbl` (`blog_cat_id`, `lang_id`, `blog_cat_name`, `blog_cat_status`, `created_at`) VALUES
(3, 1, 'hammer', 1, '2023-10-05 11:49:55'),
(4, 1, 'Dril ', 1, '2023-10-07 06:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
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

INSERT INTO `blog_tbl` (`blog_id`, `blog_lang_id`, `A_name`, `category`, `image`, `title`, `b_des_mini`, `b_des_full`, `date`, `blog_status`, `created_at`) VALUES
(1, 0, 'mincon', '3', '1696506663.png', 'col-mine', 'In your specific code, it seems like you\'re trying to use count() on a variable that contains a string instead of an array. You should check the code around line 186 in your product_code.php file and make sure that you are passing the correct type of variable to count(). If you need more specific as', '<p>In your specific code, it seems like you\'re trying to use <code>count()</code> on a variable that contains a string instead of an array. You should check the code around line 186 in your <code>product_code.php</code> file and make sure that you are passing the correct type of variable to <code>count()</code>. If you need more specific assistance, please provide the relevant code around line 186, and I can help you identify the issue.In your specific code, it seems like you\'re trying to use <code>count()</code> on a variable that contains a string instead of an array. You should check the code around line 186 in your <code>product_code.php</code> file and make sure that you are passing the correct type of variable to <code>count()</code>. If you need more specific assistance, please provide the relevant code around line 186, and I can help you identify the issue.In your specific code, it seems like you\'re trying to use <code>count()</code> on a variable that contains a string instead of an array. You should check the code around line 186 in your <code>product_code.php</code> file and make sure that you are passing the correct type of variable to <code>count()</code>. If you need more specific assistance, please provide the relevant code around line 186, and I can help you identify the issue.</p>', '2023-10-06', 1, '2023-10-05 11:51:03'),
(2, 0, 'mincon', '3', '1696586051.png', 'col-mine--22', 'Google Search is a search engine provided and operated by Google. Handling more than 3.5 billion searches per day, it has a 92% share of the global search engine market. It is the most-visited website in the world. Additionally, it is the most searched and used search engine in the entire world. Wik', '<p>Google Search is a search engine provided and operated by Google. Handling more than 3.5 billion searches per day, it has a 92% share of the global search engine market. It is the most-visited website in the world. Additionally, it is the most searched and used search engine in the entire world.&nbsp;<a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Google_Search\" target=\"_blank\" rel=\"noopener\" data-ved=\"2ahUKEwi9_cOWj-GBAxXHwzgGHdHABXcQmhN6BAgqEAU\">Wikipedia</a>Google Search is a search engine provided and operated by Google. Handling more than 3.5 billion searches per day, it has a 92% share of the global search engine market. It is the most-visited website in the world. Additionally, it is the most searched and used search engine in the entire world.&nbsp;<a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Google_Search\" target=\"_blank\" rel=\"noopener\" data-ved=\"2ahUKEwi9_cOWj-GBAxXHwzgGHdHABXcQmhN6BAgqEAU\">Wikipedia</a>Google Search is a search engine provided and operated by Google. Handling more than 3.5 billion searches per day, it has a 92% share of the global search engine market. It is the most-visited website in the world. Additionally, it is the most searched and used search engine in the entire world.&nbsp;<a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Google_Search\" target=\"_blank\" rel=\"noopener\" data-ved=\"2ahUKEwi9_cOWj-GBAxXHwzgGHdHABXcQmhN6BAgqEAU\">Wikipedia</a>Google Search is a search engine provided and operated by Google. Handling more than 3.5 billion searches per day, it has a 92% share of the global search engine market. It is the most-visited website in the world. Additionally, it is the most searched and used search engine in the entire world.&nbsp;<a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Google_Search\" target=\"_blank\" rel=\"noopener\" data-ved=\"2ahUKEwi9_cOWj-GBAxXHwzgGHdHABXcQmhN6BAgqEAU\">Wikipedia</a>Google Search is a search engine provided and operated by Google. Handling more than 3.5 billion searches per day, it has a 92% share of the global search engine market. It is the most-visited website in the world. Additionally, it is the most searched and used search engine in the entire world.&nbsp;<a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Google_Search\" target=\"_blank\" rel=\"noopener\" data-ved=\"2ahUKEwi9_cOWj-GBAxXHwzgGHdHABXcQmhN6BAgqEAU\">Wikipedia</a>Google Search is a search engine provided and operated by Google. Handling more than 3.5 billion searches per day, it has a 92% share of the global search engine market. It is the most-visited website in the world. Additionally, it is the most searched and used search engine in the entire world.&nbsp;<a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Google_Search\" target=\"_blank\" rel=\"noopener\" data-ved=\"2ahUKEwi9_cOWj-GBAxXHwzgGHdHABXcQmhN6BAgqEAU\">Wikipedia</a></p>', '2023-10-06', 1, '2023-10-06 09:54:11'),
(3, 0, 'mincon', '4', '1696658839.png', 'drill col-mine', 'ed by Craterus, one of Alexander\'s leading generals. Boukephala seems to have had a more distinguished legacy than Nikaia: it was mentioned by Roman authors and appears on later manuscripts. The cities\' precise locations are unknown, but it is considered likely that Boukephala was located in the vic', '<p style=\"text-align: justify;\">ed by&nbsp;<a title=\"Craterus\" href=\"https://en.wikipedia.org/wiki/Craterus\">Craterus</a>, one of&nbsp;<a title=\"Diadochi\" href=\"https://en.wikipedia.org/wiki/Diadochi\">Alexander\'s leading generals</a>. Boukephala seems to have had a more distinguished legacy than Nikaia: it was mentioned by&nbsp;<a title=\"Latin literature\" href=\"https://en.wikipedia.org/wiki/Latin_literature\">Roman authors</a>&nbsp;and appears on later manuscripts. The cities\' precise locations are unknown, but it is considered likely that Boukephala was located in the vicinity of modern&nbsp;<a title=\"Jalalpur Sharif\" href=\"https://en.wikipedia.org/wiki/Jalalpur_Sharif\">Jalalpur</a>, Pakistan, and that Nikaia was across the river near present-day&nbsp;<a title=\"Mong, Punjab\" href=\"https://en.wikipedia.org/wiki/Mong,_Punjab\">Mong</a>.ed by&nbsp;<a title=\"Craterus\" href=\"https://en.wikipedia.org/wiki/Craterus\">Craterus</a>, one of&nbsp;<a title=\"Diadochi\" href=\"https://en.wikipedia.org/wiki/Diadochi\">Alexander\'s leading generals</a>. Boukephala seems to have had a more distinguished legacy than Nikaia: it was mentioned by&nbsp;<a title=\"Latin literature\" href=\"https://en.wikipedia.org/wiki/Latin_literature\">Roman authors</a>&nbsp;and appears on later manuscripts. The cities\' precise locations are unknown, but it is considered likely that Boukephala was located in the vicinity of modern&nbsp;<a title=\"Jalalpur Sharif\" href=\"https://en.wikipedia.org/wiki/Jalalpur_Sharif\">Jalalpur</a>, Pakistan, and that Nikaia was across the river near present-day&nbsp;<a title=\"Mong, Punjab\" href=\"https://en.wikipedia.org/wiki/Mong,_Punjab\">Mong</a>.ed by&nbsp;<a title=\"Craterus\" href=\"https://en.wikipedia.org/wiki/Craterus\">Craterus</a>, one of&nbsp;<a title=\"Diadochi\" href=\"https://en.wikipedia.org/wiki/Diadochi\">Alexander\'s leading generals</a>. Boukephala seems to have had a more distinguished legacy than Nikaia: it was mentioned by&nbsp;<a title=\"Latin literature\" href=\"https://en.wikipedia.org/wiki/Latin_literature\">Roman authors</a>&nbsp;and appears on later manuscripts. The cities\' precise locations are unknown, but it is considered likely that Boukephala was located in the vicinity of modern&nbsp;<a title=\"Jalalpur Sharif\" href=\"https://en.wikipedia.org/wiki/Jalalpur_Sharif\">Jalalpur</a>, Pakistan, and that Nikaia was across the river near present-day&nbsp;<a title=\"Mong, Punjab\" href=\"https://en.wikipedia.org/wiki/Mong,_Punjab\">Mong</a>.ed by&nbsp;<a title=\"Craterus\" href=\"https://en.wikipedia.org/wiki/Craterus\">Craterus</a>, one of&nbsp;<a title=\"Diadochi\" href=\"https://en.wikipedia.org/wiki/Diadochi\">Alexander\'s leading generals</a>. Boukephala seems to have had a more distinguished legacy than Nikaia: it was mentioned by&nbsp;<a title=\"Latin literature\" href=\"https://en.wikipedia.org/wiki/Latin_literature\">Roman authors</a>&nbsp;and appears on later manuscripts. The cities\' precise locations are unknown, but it is considered likely that Boukephala was located in the vicinity of modern&nbsp;<a title=\"Jalalpur Sharif\" href=\"https://en.wikipedia.org/wiki/Jalalpur_Sharif\">Jalalpur</a>, Pakistan, and that Nikaia was across the river near present-day&nbsp;<a title=\"Mong, Punjab\" href=\"https://en.wikipedia.org/wiki/Mong,_Punjab\">Mong</a>.ed by&nbsp;<a title=\"Craterus\" href=\"https://en.wikipedia.org/wiki/Craterus\">Craterus</a>, one of&nbsp;<a title=\"Diadochi\" href=\"https://en.wikipedia.org/wiki/Diadochi\">Alexander\'s leading generals</a>. Boukephala seems to have had a more distinguished legacy than Nikaia: it was mentioned by&nbsp;<a title=\"Latin literature\" href=\"https://en.wikipedia.org/wiki/Latin_literature\">Roman authors</a>&nbsp;and appears on later manuscripts. The cities\' precise locations are unknown, but it is considered likely that Boukephala was located in the vicinity of modern&nbsp;<a title=\"Jalalpur Sharif\" href=\"https://en.wikipedia.org/wiki/Jalalpur_Sharif\">Jalalpur</a>, Pakistan, and that Nikaia was across the river near present-day&nbsp;<a title=\"Mong, Punjab\" href=\"https://en.wikipedia.org/wiki/Mong,_Punjab\">Mong</a>.</p>', '2023-10-07', 1, '2023-10-07 06:07:19');

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

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cart_id`, `lang_id`, `p_name`, `p_img`, `p_cat_name`, `user_name`, `user_mobile`, `user_email`, `user_company_name`, `user_country_name`, `cart_created_at`, `p_status`, `created_at`) VALUES
(1, 1, 'Product_1', 'mincon_product_img_1.png', 'category_1', 'Rohan', '6260131392', 'tejpratapsahu00@gmail.com', 'IBM', 'india', '2023-10-04 06:52:51', 0, '2023-10-04 06:52:51'),
(2, 2, 'Product_1_spanish', 'mincon_product_img_1.png', 'category_1_span', 'Rohan', '6260131392', 'tejpratapsahu00@gmail.com', 'IBM', 'india', '2023-10-04 06:52:51', 0, '2023-10-04 06:52:51'),
(3, 2, 'Product_1_spanish', 'mincon_product_img_1.png', 'category_1_span', 'Rohan', '1234567890', 'tejpratapsahu00@gmail.com', 'tcs', 'india', '2023-10-04 06:56:27', 0, '2023-10-04 06:56:27'),
(4, 2, 'Product_2_spanish', 'mincon_product_img_1.png', 'category_2_span', 'Rohan', '1234567890', 'tejpratapsahu00@gmail.com', 'tcs', 'india', '2023-10-04 06:56:27', 0, '2023-10-04 06:56:27'),
(5, 2, 'Product_1_spanish', 'mincon_product_img_1.png', 'category_1_span', 'ABC Kumar', '0987654321', 'tejpratapsahu00@gmail.com', 'App', 'india', '2023-10-04 06:58:32', 0, '2023-10-04 06:58:32'),
(6, 2, 'Product_2_spanish', 'mincon_product_img_1.png', 'category_2_span', 'ABC Kumar', '0987654321', 'tejpratapsahu00@gmail.com', 'App', 'india', '2023-10-04 06:58:32', 0, '2023-10-04 06:58:32'),
(7, 2, 'Product_3_spanish', 'mincon_product_img_1.png', 'category_3_span', 'ABC Kumar', '0987654321', 'tejpratapsahu00@gmail.com', 'App', 'india', '2023-10-04 06:58:32', 0, '2023-10-04 06:58:32'),
(8, 2, 'product_1_span', 'mincon_product_img_1.png', 'category_1_span', 'ABC Kumar', '1234567890', 'tejpratapsahu00@gmail.com', 'IBM', 'india', '2023-10-09 11:18:54', 0, '2023-10-09 11:18:54'),
(9, 2, 'product_2_span', 'mincon_product_img_1.png', 'category_2_span', 'ABC Kumar', '1234567890', 'tejpratapsahu00@gmail.com', 'IBM', 'india', '2023-10-09 11:18:54', 0, '2023-10-09 11:18:54'),
(10, 2, 'product_3_span', 'mincon_product_img_1.png', 'category_3_span', 'ABC Kumar', '1234567890', 'tejpratapsahu00@gmail.com', 'IBM', 'india', '2023-10-09 11:18:54', 0, '2023-10-09 11:18:54');

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
  `lang_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language_tbl`
--

INSERT INTO `language_tbl` (`lan_id`, `lang_name`, `created_at`) VALUES
(1, 'English', '2023-09-25 07:53:20'),
(2, 'Spanish', '2023-10-02 07:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `lang_blog_tbl`
--

CREATE TABLE `lang_blog_tbl` (
  `blog_id` int(11) NOT NULL,
  `blog_name_lang_1` varchar(500) NOT NULL,
  `blog_name_lang_2` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lang_products_tbl`
--

CREATE TABLE `lang_products_tbl` (
  `product_id` int(11) NOT NULL,
  `product_name_lang_1` varchar(100) NOT NULL,
  `product_name_lang_2` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_image1` varchar(50) NOT NULL,
  `product_image2` varchar(50) NOT NULL,
  `product_image3` varchar(50) NOT NULL,
  `product_image4` varchar(50) NOT NULL,
  `product_image5` varchar(50) NOT NULL,
  `product_video_url_lang_1` varchar(100) NOT NULL,
  `product_video_url_lang_2` varchar(100) NOT NULL,
  `product_status_lang_1` tinyint(4) NOT NULL,
  `product_status_lang_2` tinyint(4) NOT NULL,
  `product_category_lang_1` tinyint(4) NOT NULL,
  `product_category_lang_2` tinyint(4) NOT NULL,
  `product_description_lang_1` text NOT NULL,
  `product_description_lang_2` text NOT NULL,
  `product_manual_lang_1` varchar(200) NOT NULL,
  `product_manual_lang_2` varchar(200) NOT NULL,
  `product_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lang_products_tbl`
--

INSERT INTO `lang_products_tbl` (`product_id`, `product_name_lang_1`, `product_name_lang_2`, `product_image`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `product_video_url_lang_1`, `product_video_url_lang_2`, `product_status_lang_1`, `product_status_lang_2`, `product_category_lang_1`, `product_category_lang_2`, `product_description_lang_1`, `product_description_lang_2`, `product_manual_lang_1`, `product_manual_lang_2`, `product_created_at`) VALUES
(1, 'product_1', 'product_1_span', 'mincon_product_img_1.png', 'mincon_about_bg3.png', '', '', '', '', 'https://www.youtube.com/watch?v=S_ixruxej9c', 'https://www.youtube.com/watch?v=ax1h-YOyPJc&t=1s', 1, 1, 1, 1, 'When a white college student named Jim Bullock and a Black college student named Joe Purdy tried to attend Memphis’s Second Presbyterian Church on Palm Sunday in 1964, it was the church’s commitment to segregation that inspired church leaders to physically block their way. Bullock and Purdy’s commitment to justice inspired them to kneel on…', 'Cuando un estudiante universitario blanco llamado Jim Bullock y un estudiante universitario negro llamado Joe Purdy intentaron asistir a la Segunda Iglesia Presbiteriana de Memphis el Domingo de Ramos de 1964, fue el compromiso de la iglesia con la segregación lo que inspiró a los líderes de la iglesia a bloquear físicamente su camino. El compromiso de Bullock y Purdy con la justicia los inspiró a arrodillarse...', 'mincon_about_bg2.png', 'mincon_about_bg3.png', '2023-10-07 18:56:00'),
(2, 'product_2', 'product_2_span', 'mincon_product_img_1.png', '', '', '', 'mincon_contact_bg2.png', '', 'https://www.youtube.com/watch?v=S_ixruxej9c', 'https://www.youtube.com/watch?v=ax1h-YOyPJc&t=1s', 1, 1, 2, 2, ' Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other \"microblogging\" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.', ' Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other \"microblogging\" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.', 'phone.svg', 'right-tic.svg', '2023-10-09 04:40:44'),
(3, 'product_3', 'product_3_span', 'mincon_product_img_1.png', '', 'mincon_about_bg3.png', '', 'mincon_contact_bg2.png', '', 'https://www.youtube.com/watch?v=ax1h-YOyPJc&t=1s', 'https://www.youtube.com/watch?v=ax1h-YOyPJc&t=1s', 1, 1, 3, 3, ' Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other \"microblogging\" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.', ' Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other \"microblogging\" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.', 'mincon_hero_bg1.png', '', '2023-10-09 04:48:02'),
(7, 'product_new', 'product_new_span', 'mincon_product_img_1.png', '', '', '', 'mincon_contact_bg1.png', '', 'https://www.youtube.com/watch?v=S_ixruxej9c', 'https://www.youtube.com/watch?v=ax1h-YOyPJc&t=1s', 1, 1, 4, 4, 'with HTML or computer programming. Previously, knowledge of such technologies as HTML and File Transfer Protocol had been required to publish content on the Web, and early Web users therefore tended to be hackers and computer enthusiasts. As of the 2010s, the majority are interactive Web 2.0 websites, allowing visitors to leave online comments, and it is this interactivity that distinguishes them from other static websites.[2] In that sense, blogging can be seen as a form of social networking service. Indeed', 'con HTML o programación informática. Anteriormente, se requería conocimiento de tecnologías como HTML y el Protocolo de transferencia de archivos para publicar contenido en la Web y, por lo tanto, los primeros usuarios de la Web tendían a ser piratas informáticos y entusiastas de la informática. A partir de la década de 2010, la mayoría son sitios web interactivos Web 2.0, que permiten a los visitantes dejar comentarios en línea, y es esta interactividad la que los distingue de otros sitios web estáticos. En ese sentido, los blogs pueden verse como una forma de servicio de red social. En efecto', 'mincon_home_bg1.png', 'mincon_hero_bg2.png', '2023-10-09 14:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_tbl`
--

CREATE TABLE `product_category_tbl` (
  `cat_id` int(11) NOT NULL,
  `category_name_lang_1` varchar(500) NOT NULL,
  `category_name_lang_2` varchar(500) NOT NULL,
  `category_description_lang_1` mediumtext NOT NULL,
  `category_description_lang_2` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category_tbl`
--

INSERT INTO `product_category_tbl` (`cat_id`, `category_name_lang_1`, `category_name_lang_2`, `category_description_lang_1`, `category_description_lang_2`, `status`, `created_at`) VALUES
(1, 'category_1', 'category_1_span', 'Do you read every post on a blog? If you\'re like me, you visit sites for a specific reason — be it the New York Times crossword puzzle or the latest gear roundup from Outside. You know what you\'re looking for when you click. That frame of mind is why blog categories help readers navigate your site.', '¿Lees todas las publicaciones de un blog? Si eres como yo, visitas sitios por una razón específica, ya sea el crucigrama del New York Times o el último resumen de artículos de Outside. Sabes lo que estás buscando cuando haces clic. Ese estado de ánimo es el motivo por el que las categorías de blogs ayudan a los lectores a navegar por su sitio.', 1, '2023-10-07 18:54:31'),
(2, 'category_2', 'category_2_span', 'Do you read every post on a blog? If you\'re like me, you visit sites for a specific reason — be it the New York Times crossword puzzle or the latest gear roundup from Outside. You know what you\'re looking for when you click. That frame of mind is why blog categories help readers navigate your site.', 'Lees todas las publicaciones de un blog? Si eres como yo, visitas sitios por una razón específica, ya sea el crucigrama del New York Times o el último resumen de artículos de Outside. Sabes lo que estás buscando cuando haces clic. Ese estado de ánimo es el motivo por el que las categorías de blogs ayudan a los lectores a navegar por su sitio.', 1, '2023-10-07 18:56:49'),
(3, 'category_3', 'category_3_span', 'Do you read every post on a blog? If you\'re like me, you visit sites for a specific reason — be it the New York Times crossword puzzle or the latest gear roundup from Outside. You know what you\'re looking for when you click. That frame of mind is why blog categories help readers navigate your site.', '¿Lees todas las publicaciones de un blog? Si eres como yo, visitas sitios por una razón específica, ya sea el crucigrama del New York Times o el último resumen de artículos de Outside. Sabes lo que estás buscando cuando haces clic. Ese estado de ánimo es el motivo por el que las categorías de blogs ayudan a los lectores a navegar por su sitio.', 1, '2023-10-07 18:57:22'),
(4, 'category_4', 'category_4_span', 'Do you read every post on a blog? If you\'re like me, you visit sites for a specific reason — be it the New York Times crossword puzzle or the latest gear roundup from Outside. You know what you\'re looking for when you click. That frame of mind is why blog categories help readers navigate your site.', '¿Lees todas las publicaciones de un blog? Si eres como yo, visitas sitios por una razón específica, ya sea el crucigrama del New York Times o el último resumen de artículos de Outside. Sabes lo que estás buscando cuando haces clic. Ese estado de ánimo es el motivo por el que las categorías de blogs ayudan a los lectores a navegar por su sitio.', 1, '2023-10-07 18:57:44'),
(5, 'category_5', 'category_5_span', 'Do you read every post on a blog? If you\'re like me, you visit sites for a specific reason — be it the New York Times crossword puzzle or the latest gear roundup from Outside. You know what you\'re looking for when you click. That frame of mind is why blog categories help readers navigate your site.', '¿Lees todas las publicaciones de un blog? Si eres como yo, visitas sitios por una razón específica, ya sea el crucigrama del New York Times o el último resumen de artículos de Outside. Sabes lo que estás buscando cuando haces clic. Ese estado de ánimo es el motivo por el que las categorías de blogs ayudan a los lectores a navegar por su sitio.', 1, '2023-10-07 18:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_specification`
--

CREATE TABLE `product_specification` (
  `s_id` int(11) NOT NULL,
  `specific_id` tinyint(4) NOT NULL,
  `product_id` int(15) NOT NULL,
  `spec_lang_1` varchar(100) NOT NULL,
  `spec_lang_2` varchar(100) NOT NULL,
  `spec_value_lang_1` varchar(60) NOT NULL,
  `spec_value_lang_2` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(11) NOT NULL,
  `product_name_lang_1` varchar(500) DEFAULT NULL,
  `product_name_lang_2` varchar(500) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_name_lang_1`, `product_name_lang_2`, `status`) VALUES
(1, 'Product_1', 'Product_1_spanish', 1),
(2, 'Product_2', 'Product_2_spanish', 1),
(3, 'Product_3', 'Product_3_spanish', 1),
(4, 'Product_4_en', 'Product_4_spanish', 1),
(5, 'Product_5', 'Product_5_spanish', 0),
(7, 'Product_6_spanish', 'Product_6_spanish', 1),
(8, 'Product_7', 'Product_7_span', 1),
(9, 'Product_8', 'Product_8_span', 1),
(10, 'Product_9_spanish', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specification_tbl`
--

CREATE TABLE `specification_tbl` (
  `spec_id` int(11) NOT NULL,
  `spec_name_lang_1` varchar(200) NOT NULL,
  `spec_name_lang_2` varchar(200) NOT NULL,
  `spec_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specification_tbl`
--

INSERT INTO `specification_tbl` (`spec_id`, `spec_name_lang_1`, `spec_name_lang_2`, `spec_status`, `created_at`) VALUES
(1, 'weight', 'weighto', 1, '2023-10-07 12:18:12'),
(4, 'length', 'lengtho', 1, '2023-10-07 12:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `spec_tbl`
--

CREATE TABLE `spec_tbl` (
  `spec_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(122, 2, 'contact', 'contact_input_product_placeholder', 'Seleccionar producto', 1, '2023-09-27 12:44:04', '2023-09-27 12:44:04'),
(123, 1, 'home', 'home_add_to_enquire', 'Add to enquire', 1, '2023-09-28 06:58:53', '2023-09-28 06:58:53'),
(124, 2, 'home', 'home_add_to_enquire', 'Añadir para consultar', 1, '2023-09-28 06:59:21', '2023-09-28 06:59:21'),
(125, 1, 'cart_details', 'cart_details_product_video_watch', 'Watch', 1, '2023-09-28 07:03:41', '2023-09-28 07:03:41'),
(126, 2, 'cart_details', 'cart_details_product_video_watch', 'Mirar', 1, '2023-09-28 07:03:59', '2023-09-28 07:03:59'),
(127, 1, 'cart_details', 'cart_details_description_name', 'Description', 1, '2023-09-28 07:13:11', '2023-09-28 07:13:11'),
(128, 2, 'cart_details', 'cart_details_description_name', 'Descripción', 1, '2023-09-28 07:13:33', '2023-09-28 07:13:33'),
(129, 1, 'cart_details', 'cart_details_specification_name', 'Specification', 1, '2023-09-28 07:15:07', '2023-09-28 07:15:07'),
(130, 2, 'cart_details', 'cart_details_specification_name', 'Especificación', 1, '2023-09-28 07:15:18', '2023-09-28 07:15:18'),
(131, 1, 'contact', 'contact_submit_button_name', 'Submit', 1, '2023-09-29 12:42:25', '2023-09-29 12:42:25'),
(132, 2, 'contact', 'contact_submit_button_name', 'Entregar', 1, '2023-09-29 12:42:46', '2023-09-29 12:42:46'),
(133, 1, 'home', 'home_content_see_more', 'See More', 1, '2023-09-29 13:41:15', '2023-09-29 13:41:15'),
(134, 2, 'home', 'home_content_see_more', 'Ver más', 1, '2023-09-29 13:41:46', '2023-09-29 13:41:46'),
(135, 1, 'cart_details', 'cart_details_related_product', 'Related Products', 1, '2023-09-29 13:48:39', '2023-09-29 13:48:39'),
(136, 2, 'cart_details', 'cart_details_related_product', 'Productos relacionados', 1, '2023-09-29 13:48:58', '2023-09-29 13:48:58');

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
-- Indexes for table `lang_blog_tbl`
--
ALTER TABLE `lang_blog_tbl`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `lang_products_tbl`
--
ALTER TABLE `lang_products_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category_tbl`
--
ALTER TABLE `product_category_tbl`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product_specification`
--
ALTER TABLE `product_specification`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `specification_tbl`
--
ALTER TABLE `specification_tbl`
  ADD PRIMARY KEY (`spec_id`);

--
-- Indexes for table `spec_tbl`
--
ALTER TABLE `spec_tbl`
  ADD PRIMARY KEY (`spec_id`);

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
  MODIFY `blog_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `lan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lang_blog_tbl`
--
ALTER TABLE `lang_blog_tbl`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lang_products_tbl`
--
ALTER TABLE `lang_products_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_category_tbl`
--
ALTER TABLE `product_category_tbl`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_specification`
--
ALTER TABLE `product_specification`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `specification_tbl`
--
ALTER TABLE `specification_tbl`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spec_tbl`
--
ALTER TABLE `spec_tbl`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tem_tbl_for_cart`
--
ALTER TABLE `tem_tbl_for_cart`
  MODIFY `cart_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ui_table`
--
ALTER TABLE `ui_table`
  MODIFY `ui_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
