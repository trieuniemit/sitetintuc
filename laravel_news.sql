-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 08:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `desc`, `slug`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Thể thao 24h', 'Cập nhật thông tin thể thao 24/7', 'the-thao-24h', 0, '2019-07-07 14:22:12', '2019-07-24 02:23:07'),
(2, 'Bóng đá', 'Cập nhật thông tin bóng đá', 'bong-da', 0, '2019-07-07 14:22:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_01_005254_create_posts_table', 1),
(4, '2019_07_01_011321_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `desc`, `thumb`, `slug`, `views`, `content`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'Buffon và Ronaldo giúp Juventus thắng Inter', 'Ngôi sao người Bồ Đào Nha gỡ hòa 1-1 trước khi thủ thành 41 tuổi cản ba cú luân lưu trong trận đấu tại ICC tối 24/7.', 'cristiano-ronaldo.jpg', 'buffon-va-ronaldo-giup-juventus-thang-inter', 1, '<p>Trận đấu giữa Juventus v&agrave; Inter tại Nam Kinh (Trung Quốc) l&agrave; một cuộc hội ngộ th&uacute; vị giữa Antonio Conte v&agrave; Maurizio Sarri - hai HLV dẫn dắt Chelsea trong hai m&ugrave;a gần nhất. Họ đều mới nhậm chức v&agrave; đang l&agrave;m quen với đội b&oacute;ng mới tại giải ICC h&egrave; n&agrave;y. Ở trận đầu ti&ecirc;n tại ICC, Juventus thua Tottenham 2-3 trong khi Inter thua Man Utd 0-1.</p>', 1, 1, '2019-07-24 09:31:57', '2019-07-24 11:30:56'),
(9, 'Bale giúp Real thắng ngược Arsenal', 'Hai đội hòa 2-2 trong thời gian chính thức, trước khi đội bóng Tây Ban Nha thắng 3-2 ở loạt luân lưu tối 23/7.', '7726-1563964632539.jpg', 'bale-giup-real-thang-nguoc-arsenal', 0, '<p>C&uacute; lội ngược d&ograve;ng của Real Madrid được Gareth Bale khởi xướng. Giữa t&acirc;m điểm chỉ tr&iacute;ch v&agrave; quan hệ tồi tệ với Zinedine Zidane, ng&ocirc;i sao người Xứ Wales kh&ocirc;ng đ&aacute; ch&iacute;nh. Tuy nhi&ecirc;n, cựu cầu thủ Tottenham lập tức chứng tỏ gi&aacute; trị trong v&ograve;ng 10 ph&uacute;t c&oacute; mặt tr&ecirc;n s&acirc;n. Ph&uacute;t 56, Bale xuất hiện đ&uacute;ng l&uacute;c, đ&aacute; bồi cận th&agrave;nh r&uacute;t ngắn tỷ số xuống 1-2 cho Real. Ba ph&uacute;t sau, anh h&uacute;t sự ch&uacute; &yacute; của hai hậu vệ Arsenal, tạo điều kiện cho Marco Asensio s&uacute;t căng trong cấm địa, gỡ h&ograve;a 2-2.</p>', 1, 1, '2019-07-24 09:36:12', '2019-07-24 09:36:12'),
(10, 'Man Utd cho Inter bảy ngày để hoàn tất vụ mua Lukaku', 'Đội chủ sân Old Trafford muốn dứt điểm sớm thương vụ trước khi thị trường chuyển nhượng tại Anh đóng cửa.', 'GettyImages-1156443821.jpg', 'man-utd-cho-inter-bay-ngay-de-hoan-tat-vu-mua-lukaku', 1, '<p>Theo&nbsp;<em>Mirror</em>, Man Utd h&ocirc;m 23/7 th&ocirc;ng b&aacute;o cho Inter rằng CLB Italy c&oacute; bảy ng&agrave;y, t&iacute;nh đến 30/7, để chồng đủ 93 triệu USD nếu muốn chi&ecirc;u mộ Romelu Lukaku. C&aacute;c l&atilde;nh đạo Man Utd muốn thương vụ Lukaku xong sớm, để họ c&oacute; thể t&igrave;m cầu thủ thay thế trước khi thị trường chuyển nhượng tại Anh đ&oacute;ng cửa v&agrave;o ng&agrave;y 8/8.</p>', 1, 1, '2019-07-24 09:38:12', '2019-07-24 11:30:59'),
(11, 'Bayern thắng trận thứ hai liên tiếp tại ICC', 'Tiếp đà hưng phấn sau khi hạ Real Madrid, Bayern đánh bại AC Milan 1-0 hôm 23/7 tại ICC 2019.', 'GettyImages-100346170-e1550609532395.jpg', 'bayern-thang-tran-thu-hai-lien-tiep-tai-icc', 1, '<p>Bayern nắm quyền chủ động trong trận đấu tại Kansas City, nơi Milan sớm cho thấy sự thua s&uacute;t về đẳng cấp. Hầu hết pha tấn c&ocirc;ng của CLB Italy trong hiệp một&nbsp;đều kh&ocirc;ng g&acirc;y được nguy hiểm. Daniel Maldini, con trai của huyền thoại&nbsp;Paolo Maldini, cũng g&acirc;y thất vọng với một c&uacute; s&uacute;t vọt x&agrave;.&nbsp;</p>', 2, 2, '2019-07-24 09:42:02', '2019-07-24 11:31:03'),
(12, 'Griezmann chấn thương ngay trận ra mắt Barca', 'Tân binh người Pháp va chạm với Jorginho của Chelsea và bị tổn thương ở vùng gối trong trận giao hữu tại Nhật hôm 23/7.', 'Griezmann-bat-ngo-dinh-chan-thuong-trong-tran-ra-mat-Barca-1.jpg', 'griezmann-chan-thuong-ngay-tran-ra-mat-barca', 0, '<p>Giữa hiệp một trận gặp Chelsea tối 23/7, Antoine Griezmann va chạm với Jorginho v&agrave; gục xuống s&acirc;n. Ng&ocirc;i sao người Ph&aacute;p cần sự trợ gi&uacute;p của nh&acirc;n vi&ecirc;n y tế trong v&agrave;i ph&uacute;t, trước khi gắng thi đấu tiếp, rồi bị thay ra đầu hi&ecirc;p hai.</p>', 2, 2, '2019-07-24 09:44:34', '2019-07-24 09:44:34'),
(13, 'Nishino: \'Bộ ba thi đấu ở Nhật sẽ là chủ lực của tuyển Thái Lan\'', 'Ông Akira Nishino xem Chanathip, Theerathon và Thitiphan là trung tâm trong kế hoạch xây dựng đội bóng.', 'c1_1611046.jpg', 'nishino-bo-ba-thi-dau-o-nhat-se-la-chu-luc-cua-tuyen-thai-lan', 0, '<p>Thi đấu ở J-League chứng tỏ tiềm năng của ba cầu thủ đ&oacute;. T&ocirc;i chờ đợi họ sẽ l&agrave; những cầu thủ chủ lực của t&ocirc;i ở tuyển Th&aacute;i Lan&quot;, Nishino n&oacute;i với b&aacute;o ch&iacute; Th&aacute;i Lan h&ocirc;m 23/7</p>', 2, 2, '2019-07-24 09:46:55', '2019-07-24 09:46:55'),
(14, 'Khánh Hoà vô địch giải bóng đá bãi biển Quốc gia Cup Vietfootball', 'Đội chủ nhà đánh bại Đà Nẵng 3-2 trong loạt sút luân lưu, sau khi hoà 4-4 ở thời gian thi đấu chính thức và hiệp phụ, chiều 23/7.', 'kh-15639366057391260635938-crop-15639366469231694804029.jpg', 'khanh-hoa-vo-dich-giai-bong-da-bai-bien-quoc-gia-cup-vietfootball', 0, '<p>H&agrave;nh tr&igrave;nh đăng quang của Kh&aacute;nh Ho&agrave; diễn ra kịch t&iacute;nh. Họ bất ngờ thua t&acirc;n binh Gia Việt Quảng Ninh ngay trong ng&agrave;y khai mạc nhưng sau đ&oacute; li&ecirc;n tục đ&aacute;nh bại&nbsp;Olympic Gym &amp; Fitness v&agrave; Đ&agrave; Nẵng để trở th&agrave;nh đội đầu ti&ecirc;n c&oacute; v&eacute; dự chung kết. Ở trận đấu cuối c&ugrave;ng, đội chủ nh&agrave; li&ecirc;n tục bị dẫn b&agrave;n nhưng đều gỡ ho&agrave; th&agrave;nh c&ocirc;ng ở cả thời gian thi đấu ch&iacute;nh thức cũng như hiệp phụ, để rồi sau đ&oacute; gi&agrave;nh chiến thắng nghẹt thở trong loạt s&uacute;t lu&acirc;n lưu.</p>', 1, 3, '2019-07-24 09:48:48', '2019-07-24 09:48:48'),
(15, 'Sarri muốn Juventus mua thêm cầu thủ', 'Tân HLV Juventus chưa hài lòng với lực lượng hiện có, dù đội đã tậu sáu tân binh từ đầu hè.', 'sarri21-1560692412467793984771.jpg', 'sarri-muon-juventus-mua-them-cau-thu', 8, '<p>Ch&uacute;ng t&ocirc;i c&oacute; nhiều lựa chọn ở một số vị tr&iacute;, v&agrave; &iacute;t lựa chọn ở một số vị tr&iacute; kh&aacute;c. Nhưng hiện tại, Juventus c&oacute; bảy cầu thủ đang dưỡng thương v&agrave; năm người kh&aacute;c chưa trở về sau khi l&agrave;m nghĩa vụ quốc gia. V&igrave; thế, t&ocirc;i nghĩ từ giờ đến khi thị trường đ&oacute;ng cửa, CLB cần tuyển mộ th&ecirc;m. Nhưng đồng thời, ch&uacute;ng t&ocirc;i cũng phải t&iacute;nh thanh l&yacute; bớt những người thừa, v&igrave; đội đang c&oacute; qu&aacute; nhiều cầu thủ, cần gạt bớt hai hoặc ba người khi chốt danh s&aacute;ch dự Champions League&quot;, Maurizio Sarri n&oacute;i trong cuộc họp b&aacute;o tại Nam Kinh, Trung Quốc h&ocirc;m 22/7</p>', 1, 3, '2019-07-24 09:54:51', '2019-07-24 11:30:50'),
(16, 'Zidane: \'Bale từ chối thi đấu cho Real\'', 'HLV 47 tuổi phủ nhận cáo buộc cho rằng ông thiếu tôn trọng Gareth Bale.', 'bale.jpg', 'zidane-bale-tu-choi-thi-dau-cho-real', 0, '<p>Thứ nhất, t&ocirc;i kh&ocirc;ng bao giờ thiếu t&ocirc;n trọng bất kỳ ai, trong đ&oacute; c&oacute; c&aacute;c cầu thủ. T&ocirc;i lu&ocirc;n n&oacute;i rằng họ l&agrave; điều quan trọng nhất ở Real Madrid v&agrave; t&ocirc;i lu&ocirc;n ủng hộ họ&quot;, Zinedine Zidane n&oacute;i h&ocirc;m qua 22/7 trong cuộc họp b&aacute;o trước trận gặp Arsenal tại ICC 2019.&nbsp;&quot;Thứ hai, t&ocirc;i biết l&agrave; CLB đang cố gắng b&aacute;n Gareth. Thứ ba, điều quan trọng nhất, nguy&ecirc;n nh&acirc;n cậu ấy kh&ocirc;ng được v&agrave;o s&acirc;n ở trận gặp Bayern Munich vừa qua l&agrave; cậu ấy từ chối thi đấu. D&ugrave; thế n&agrave;o Gareth đang l&agrave; cầu thủ của Real. Cậu ấy sẽ tập luyện b&igrave;nh thường với đội b&oacute;ng v&agrave; ch&uacute;ng ta h&atilde;y xem điều g&igrave; sẽ xảy ra&quot;.</p>', 1, 3, '2019-07-24 09:56:59', '2019-07-24 09:56:59'),
(17, 'Zidane: \'Bale từ chối thi đấu cho Real\' 2', 'HLV 47 tuổi phủ nhận cáo buộc cho rằng ông thiếu tôn trọng Gareth Bale.', 'bale.jpg', 'zidane-bale-tu-choi-thi-dau-cho-real-2', 0, '<p>Thứ nhất, t&ocirc;i kh&ocirc;ng bao giờ thiếu t&ocirc;n trọng bất kỳ ai, trong đ&oacute; c&oacute; c&aacute;c cầu thủ. T&ocirc;i lu&ocirc;n n&oacute;i rằng họ l&agrave; điều quan trọng nhất ở Real Madrid v&agrave; t&ocirc;i lu&ocirc;n ủng hộ họ&quot;, Zinedine Zidane n&oacute;i h&ocirc;m qua 22/7 trong cuộc họp b&aacute;o trước trận gặp Arsenal tại ICC 2019.&nbsp;&quot;Thứ hai, t&ocirc;i biết l&agrave; CLB đang cố gắng b&aacute;n Gareth. Thứ ba, điều quan trọng nhất, nguy&ecirc;n nh&acirc;n cậu ấy kh&ocirc;ng được v&agrave;o s&acirc;n ở trận gặp Bayern Munich vừa qua l&agrave; cậu ấy từ chối thi đấu. D&ugrave; thế n&agrave;o Gareth đang l&agrave; cầu thủ của Real. Cậu ấy sẽ tập luyện b&igrave;nh thường với đội b&oacute;ng v&agrave; ch&uacute;ng ta h&atilde;y xem điều g&igrave; sẽ xảy ra&quot;.</p>', 1, 3, '2019-07-24 09:56:59', '2019-07-24 09:56:59'),
(18, 'Sarri muốn Juventus mua thêm cầu thủ 2', 'Tân HLV Juventus chưa hài lòng với lực lượng hiện có, dù đội đã tậu sáu tân binh từ đầu hè.', 'sarri21-1560692412467793984771.jpg', 'sarri-muon-juventus-mua-them-cau-thu-2', 0, '<p>Ch&uacute;ng t&ocirc;i c&oacute; nhiều lựa chọn ở một số vị tr&iacute;, v&agrave; &iacute;t lựa chọn ở một số vị tr&iacute; kh&aacute;c. Nhưng hiện tại, Juventus c&oacute; bảy cầu thủ đang dưỡng thương v&agrave; năm người kh&aacute;c chưa trở về sau khi l&agrave;m nghĩa vụ quốc gia. V&igrave; thế, t&ocirc;i nghĩ từ giờ đến khi thị trường đ&oacute;ng cửa, CLB cần tuyển mộ th&ecirc;m. Nhưng đồng thời, ch&uacute;ng t&ocirc;i cũng phải t&iacute;nh thanh l&yacute; bớt những người thừa, v&igrave; đội đang c&oacute; qu&aacute; nhiều cầu thủ, cần gạt bớt hai hoặc ba người khi chốt danh s&aacute;ch dự Champions League&quot;, Maurizio Sarri n&oacute;i trong cuộc họp b&aacute;o tại Nam Kinh, Trung Quốc h&ocirc;m 22/7</p>', 1, 3, '2019-07-24 09:54:51', '2019-07-24 09:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `fullname`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'trieuniemit', 'trieuniemit@gmail.com', 'Niem Trieu', '0283748234', NULL, '$2y$10$ocmodFHeYdhbmj6BJ9C4Gu8D7HN1DgiKkprxo08gNZDCq4crneyUa', NULL, '2019-07-07 14:22:12', NULL),
(2, 'huyho', 'b1.maitrongtoi@gmail.com', 'Huy Ho', '0283748234', NULL, '$2y$10$y5xeb5TDE4n4q7RfLEJoBOlURqTLNblYgnO4Ey5tGTqBUR8EQefZm', NULL, '2019-07-07 14:22:12', NULL),
(3, 'truongtran', 'truongtran@gmail.com', 'Truong Tran', '0283748234', NULL, '$2y$10$/TGTByUo8Vzk0Q2Soe/D2Ogu8GO/JgCTzIXq39igvllV5DyUxSHkG', NULL, '2019-07-07 14:22:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_index` (`category_id`),
  ADD KEY `posts_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
