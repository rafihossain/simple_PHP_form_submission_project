-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 07:30 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xpeedstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `xpeedstudio`
--

CREATE TABLE `xpeedstudio` (
  `id` bigint(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `hash_key` varchar(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `buyer_ip` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `entry_at` datetime NOT NULL,
  `entry_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xpeedstudio`
--

INSERT INTO `xpeedstudio` (`id`, `amount`, `buyer`, `hash_key`, `items`, `buyer_email`, `buyer_ip`, `note`, `city`, `phone`, `entry_at`, `entry_by`) VALUES
(1, 9, 'Non cumque et quae q', '163804506b96f40529155d3c9cc4a8440eb33549139858338288029648da8370d4fb3ef75c95aa1960895294333a7183c912520a9020e28817804ffda16a9753', 'Consequat Sunt eius', 'cyjugygogy@mailinator.com', '::1', 'Voluptate fugiat sun', 'Sunt sit maiores con', '+1 (878) 202-6543', '2021-08-14 23:17:30', 28),
(2, 82, 'Harum autem esse com', '5f255333e161dec9e1ded4833682be0b24a68f9015abc04d00252c58d1440f9f6abd64347ec9ec9182f635c51c368ea596827dea97ac3a19508416fb01171f13', 'Consequat Sunt eius,Deserunt aut ex tene', 'gamigegozo@mailinator.com', '::1', 'Ipsum qui possimus', 'Culpa culpa ratione', '01814311692', '2021-08-14 23:17:53', 18),
(3, 12, 'Asperiores rem exerc', 'bc99612edffd6fe508dcb9c6b842b0f17773170d2d5a759b758dbf35a21acb05ec52cb2b37662d0c8a27a8a8a3b41c65b789388b298eab614670c3276bf968a5', 'Nam omnis eius venia', 'movibejo@mailinator.com', '::1', 'Eos irure quaerat ab', 'Libero velit sed qu', '+1 (812) 708-7524', '2021-08-14 23:21:39', 3),
(4, 5, 'Quo reiciendis volup', '55a155f53707433b13ed50906e9c93689988dd467747c8aae2bd457de5ab5186f60b9efbf3bec037c3020f203a79abd2c65611e209a28b5eeee1a19a1e264ee7', 'Nam omnis eius venia,Tempor aliquip paria', 'dikapuga@mailinator.com', '::1', 'Voluptatem placeat', 'Aliquid accusamus co', '+1 (589) 899-2179', '2021-08-14 23:22:06', 18),
(5, 22, 'Et suscipit ut rerum', 'bb0e8f065ff4d380a8859f111ae542c54d3ad098a3356a09abba058c45b5f085d087d3eb24ec2633429033ab07bb50a2b92eb82f87d4b1148fab6d17f2f318c0', 'Dicta irure sequi id', 'comytycy@mailinator.com', '::1', 'Dolor sint non repr', 'Ea sit est providen', '+1 (992) 698-3927', '2021-08-14 23:24:14', 43),
(6, 23, 'Nisi officia dolor d', '1de4d8ba585cea39fc52919d909102f3533ee65fac0d783f56cb44fe80837ac1bd821a6555111ec163a5b1d1d0f3197bb324a97d66097cac20fa65c3ba28ec8f', 'Dicta irure sequi id,Veritatis fugiat ve', 'puza@mailinator.com', '::1', 'Ut voluptatem Error', 'Voluptatem voluptas', '+1 (257) 148-9668', '2021-08-14 23:24:22', 59),
(7, 100, 'Laboriosam molestia', 'cec971d2ba00e202afa7768a477ab4e1c80a78375bb15fed23e1ec9c2afb1ad11766fb0ca624b214ecf79be0203f26eaca95dc81c28d582c370303a811540e9b', 'Dicta irure sequi id,Veritatis fugiat ve,Obcaecati velit est', 'matovom@mailinator.com', '::1', 'Sint velit sit vero', 'Aut ut nisi laborum', '+1 (111) 301-2086', '2021-08-14 23:24:31', 13),
(8, 12, 'Qui nulla eos cumque', 'c9342f35eb609bfd9a012a3fb46c21286ffab131e4039f3c4572c22e3ecd4b92a0c290f5c22049ab2c795f5c6b146e07a7de8f7ce26201573261e1708eb8e45f', 'Dicta irure sequi id,Veritatis fugiat ve,Obcaecati velit est,Quae fugiat natus e', 'xacipokuvu@mailinator.com', '::1', 'Dolor laborum Lorem', 'Sint fuga Cupiditat', '+1 (872) 967-5319', '2021-08-14 23:24:38', 30),
(9, 35, 'Aperiam est laborios', 'fa5896e9f9d4ae33abe26476cc381d6fad3ff62e82db6a3368cc60198d5f079d0e1116c4460bde5c1a9206afc5e1d23582e6054da49b0037b768fe58b54384e9', 'Dicta irure sequi id,Veritatis fugiat ve,Obcaecati velit est,Quae fugiat natus e,Odio repellendus Ex', 'zewexumyr@mailinator.com', '::1', 'Sunt est quia est', 'Fugiat proident qu', '+1 (634) 229-5479', '2021-08-14 23:24:46', 23),
(10, 23, 'Earum sunt voluptate', '69c97c670f77c44455bea2ceec36992571bbe0093dab2c9ec42f4a0c1b82a82f4d77596fbfe9cfb5d72d79fe3a7b20deeea5741c1efcd03c64f3accaccb4b288', 'Dicta irure sequi id,Veritatis fugiat ve,Obcaecati velit est,Quae fugiat natus e,Odio repellendus Ex,Rerum sequi atque nu', 'guzigafeke@mailinator.com', '::1', 'Sint voluptatem mol', 'Cum et et molestias', '+1 (775) 189-6959', '2021-08-14 23:24:58', 67),
(11, 57, 'Voluptate in recusan', 'd06b03ebb636b2abc9c79ea8e08d39a6ada7cbfa37524c6f2c79c437be130e5c27e644993d6889fab948f8b4d74dab2506eb7bfbf71c8f78419b2993cbe63d3c', 'Dicta irure sequi id,Veritatis fugiat ve,Obcaecati velit est,Quae fugiat natus e,Odio repellendus Ex,Rerum sequi atque nu,Vel deserunt ut offi', 'wanetufelo@mailinator.com', '::1', 'Ut quia minima omnis', 'Cupiditate cupidatat', '+1 (739) 477-6696', '2021-08-14 23:25:08', 83),
(12, 73, 'Tenetur libero quia', 'd3db7bbe7376f0e2e9e61d25e24c27d04bac628ffa3f6adf527e27d25f26be48c3eb48372157fa8877b536a7538a8c130afde06fa295003609e0655d57fbdf03', 'Dicta irure sequi id,Veritatis fugiat ve,Obcaecati velit est,Quae fugiat natus e,Odio repellendus Ex,Rerum sequi atque nu,Vel deserunt ut offi,A non cum ipsum duci', 'lawij@mailinator.com', '::1', 'Elit consequat Mai', 'Cupidatat itaque har', '+1 (575) 357-2185', '2021-08-14 23:25:22', 100),
(13, 28, 'Culpa culpa alias ve', '3fb0297ff1453053e86fc253c280abbc1d3f5d91c901975b3c9a97f5e673e45e9ffc630645cea7a6867307a8ef63311028be0a3a64cbf4a6c523eb59290df22e', 'Aut repudiandae porr', 'hudydymeju@mailinator.com', '::1', 'Nobis consequuntur q', 'Eaque eos sed volup', '+1 (212) 819-5844', '2021-08-14 23:26:34', 36),
(14, 18, 'Consectetur amet op', '16c19be224eb8e6e99483f189a5f23e0b995c2fa8c31b9dd89a9216a74fbcfa95361a3aa3c4495e9c4089f0fae6ab48b9bd5a208e8584b06978cb9cc903081fc', 'Aut repudiandae porr,Architecto a corrupt', 'cyvanofugi@mailinator.com', '::1', 'Aliqua Nemo mollit', 'Cum rem sit commodo', '+1 (261) 785-3606', '2021-08-14 23:26:57', 4),
(15, 83, 'Quasi vel nostrum ve', '1008d6a3d44fb46788cd3086b234ef47def9e3d159327b1816be794812011a652844781699ac42563d0bfd587ff373fc4ec188ad05fce5e77ea78dd162d869ba', 'Aut repudiandae porr,Architecto a corrupt,Corrupti adipisci s', 'necudymyd@mailinator.com', '::1', 'Quam optio architec', 'Non reiciendis incid', '+1 (293) 209-9223', '2021-08-14 23:27:04', 34),
(16, 9, 'Ad ut itaque molesti', '445618214c694977d914b4977e2f57bba215eceef2259b59883acb0c2fbe8c20abe4b3198e6872c025d2df7a70b14e7b66d08948b68eddfdf997c6cfa2f8c66e', 'Aut repudiandae porr,Architecto a corrupt,Corrupti adipisci s,Deserunt sed laborio', 'jazyjidiq@mailinator.com', '::1', 'Corporis earum incid', 'Distinctio Velit p', '+1 (259) 342-1017', '2021-08-14 23:27:11', 68),
(17, 49, 'Hic nemo necessitati', '65b043329ef61f63e271eeed769b6e1ee8427e0a42a7c2e459f0cde37ef2c616735a357089c4c9f0720957a9850cdff219ac1aa7ae5933d25729d66c279c6d34', 'Aut repudiandae porr,Architecto a corrupt,Corrupti adipisci s,Deserunt sed laborio,Voluptate sequi plac', 'lawequger@mailinator.com', '::1', 'Incididunt iusto est', 'Dolore culpa impedi', '+1 (291) 939-2482', '2021-08-14 23:27:19', 35),
(18, 74, 'Tempora fugit quis', 'c088631fcaa71e4762adc9cb11c164f02bcad3cffa5f229adb3cedb0e60d13fc3939624a2da62130c13bdcb02fbe46592309047d0bc1277c8d1340ac0d5442be', 'Aut repudiandae porr,Architecto a corrupt,Corrupti adipisci s,Deserunt sed laborio,Voluptate sequi plac,Voluptatem quia debi', 'jyve@mailinator.com', '::1', 'Aut aut numquam earu', 'Vero nobis vero fugi', '+1 (235) 937-9513', '2021-08-14 23:27:27', 74),
(19, 20, 'Illum qui porro duc', '20ece115ce0d1b0bf2113cdaa974903954edfe089c58f97fc39b7da4fe7847faaaa086cb757d4dda8d0de685505c9080c8339af34c70ec97dc1de29d8807334c', 'Aut repudiandae porr,Architecto a corrupt,Corrupti adipisci s,Deserunt sed laborio,Voluptate sequi plac,Voluptatem quia debi,Possimus consequatu', 'kokume@mailinator.com', '::1', 'Consectetur vel et', 'Consequatur sint la', '+1 (914) 668-2942', '2021-08-14 23:27:33', 93),
(20, 23, 'Temporibus in perspi', '1397b313582b702ea9bc603f278890a5e8f9f7434a4ee83d4adef3beab485432e3758ee0b5431fce8d9f027e1e23c427b9f4a50e2c88794c649f99d5a7da5003', 'Aut repudiandae porr,Architecto a corrupt,Corrupti adipisci s,Deserunt sed laborio,Voluptate sequi plac,Voluptatem quia debi,Possimus consequatu,Consequatur iusto i', 'dunub@mailinator.com', '::1', 'Ipsum ut obcaecati', 'Necessitatibus ut vo', '+1 (306) 173-8191', '2021-08-14 23:27:41', 93);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xpeedstudio`
--
ALTER TABLE `xpeedstudio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xpeedstudio`
--
ALTER TABLE `xpeedstudio`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
