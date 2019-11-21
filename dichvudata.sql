-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2019 lúc 05:56 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dichvudata`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `view` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `createdate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `item`
--

INSERT INTO `item` (`id`, `type_id`, `user_id`, `name`, `price`, `image`, `place`, `description`, `view`, `status`, `createdate`) VALUES
(1, 1, 1, 'Máy lạnh Panasonic Inverter cũ 1140', '5,000,000đ', 'thumb_1571018621_may-lanh-panasonic-inverter-cu-1140.jpg', 'Hà Nội', '<strong><a href=\"https://thanhlyhangcu.vn/may-lanh-panasonic-inverter-cu-1140/\"><span style=\"color:#2980b9;\">M&aacute;y điều h&ograve;a Panasonic Inverter</span></a>&nbsp;</strong>được đ&aacute;nh gi&aacute; l&agrave; mang kiểu d&aacute;ng đẳng cấp v&agrave; tinh tế từ mọi chi tiết, đẹp ở mọi g&oacute;c nh&igrave;n. Ph&ograve;ng ngủ hay ph&ograve;ng l&agrave;m việc của bạn sẽ trở n&ecirc;n sang trọng hơn v&agrave; tạo cảm gi&aacute;c dễ chịu, th&iacute;ch th&uacute; khi bước v&agrave;o ph&ograve;ng. Mặt nạ c&oacute; thiết kế dạng phẳng rất dễ lau ch&ugrave;i khi vệ sinh m&aacute;y.<br>', 1000, 0, 1573402580),
(2, 1, 2, 'Máy lạnh Daikin 2 ngựa cũ 1135', '6,500,000đ', 'thumb_1570178218_may-lanh-daikin-inverter-thanh-ly-2-ngua.jpg', 'Hà Nội', '<span style=\"font-size:16px;\">Đặc điểm nổi bật của <a href=\"https://thanhlyhangcu.vn/may-lanh-daikin-inverter-thanh-ly-2-ngua/\"><strong>m&aacute;y lạnh Daikin&nbsp;2 ngựa thanh l&yacute;</strong></a></span><br>Tiết kiệm điện tối ưu cho gia đ&igrave;nh với sự kết hợp giữa c&ocirc;ng nghệ&nbsp;Inverter&nbsp;v&agrave;&nbsp;Econo, tiết kiệm 60%&nbsp;điện năng so với th&ocirc;ng thường .<br>Luồng gi&oacute; thoải m&aacute;i Coanda&nbsp;tạo cảm gi&aacute;c thư gi&atilde;n cho người sử dụng.<br>L&agrave;m lạnh nhanh&nbsp;tức th&igrave; sau khi khởi động m&aacute;y.<br>Cảm biến mắt thần th&ocirc;ng minh Intelligent Eye&nbsp;tự động tăng 2 độ C khi kh&ocirc;ng c&oacute; người trong ph&ograve;ng để tiết kiệm điện.<br>Phin lọc khử m&ugrave;i x&uacute;c t&aacute;c quang&nbsp;Apatit Titan&nbsp;kh&aacute;ng khuẩn, khử m&ugrave;i hiệu quả.<br>Bảo h&agrave;nh 4 th&aacute;ng với c&aacute;c d&ograve;ng m&aacute;y lạnh<br>Tặng k&egrave;m ống đồng theo m&aacute;y<br>Vận chuyển miễn ph&iacute; đến tận nh&agrave;<br>', 0, 0, 1573402580),
(3, 1, 3, 'Tủ lạnh Inverter Aqua 1126', '6,500,000đ', '1562744753_tu-lanh-panasonic-inverter-1000.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/tu-lanh-inverter-aqua-1126/\"><span style=\"color:#8e44ad;\">Tủ lạnh Inverter Aqua</span></a></strong></em></u>&nbsp;c&oacute; thiết kế hiện đại với 4 cửa c&ugrave;ng c&aacute;c ngăn bảo quản ri&ecirc;ng biệt gi&uacute;p gia đ&igrave;nh bạn ph&acirc;n loại thực phẩm để bảo quản được tốt hơn, tr&aacute;nh lẫn m&ugrave;i v&agrave; sức chứa sẽ được nhiều hơn. Tủ lạnh ngăn đ&aacute; nằm dưới được thiết kế dạng k&eacute;o trượt rất tiện lợi cho bạn lấy c&aacute;c loại thực phẩm được đặt s&acirc;u b&ecirc;n trong.<br>', 300, 0, 1573402580),
(4, 1, 4, 'Máy lạnh LG 1 ngựa cũ 1126', '2,800,000đ', 'thumb_1569053294_may-lanh-LG-1-ngua-thanh-ly-gia-tot.jpg', 'Hà Nội', '<strong><a href=\"https://thanhlyhangcu.vn/may-lanh-LG-1-ngua-thanh-ly-gia-tot/\"><span style=\"color:#f39c12;\">M&aacute;y lạnh LG&nbsp; thanh l&yacute;</span></a>- An to&agrave;n, tiết kiệm năng lượng v&agrave; t&uacute;i tiền</strong><br>Sau khi đạt nhiệt độ c&agrave;i đặt, bộ điều khiển biến tầng inverter sẽ biến thi&ecirc;n d&ograve;ng điện xoay chiều (AC) th&agrave;nh d&ograve;ng điện một chiều (DC) tiết kiệm được khoảng 30% điện năng ti&ecirc;u thụ<br>Nhờ chuyển động nhẹ nh&agrave;ng,&nbsp;m&aacute;y n&eacute;n kh&iacute;&nbsp;l&agrave;m giảm ma s&aacute;t v&agrave; độ rung đồng thời loại bỏ t&igrave;nh trạng r&ograve; rỉ m&ocirc;i chất lạnh trong suốt qu&aacute; tr&igrave;nh n&eacute;n.<br>&nbsp;Hoạt động &ecirc;m&nbsp;với d&agrave;n lạnh v&agrave; d&agrave;n n&oacute;ng: c&oacute; thể giảm độ ồn từ 3 đến 9 dB(A) dưới mức c&agrave;i đặt thấp nhất<br>Bảo h&agrave;nh 6 th&aacute;ng với c&aacute;c d&ograve;ng m&aacute;y lạnh<br>&nbsp;Qu&yacute; kh&aacute;ch c&oacute; nhu cầu mua b&aacute;n thanh l&yacute;<u><em><strong> m&aacute;y lạnh cũ</strong></em></u> c&aacute;c loại. Vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i theo th&ocirc;ng tin dưới đ&acirc;y để nhận được b&aacute;o gi&aacute;<a href=\"https://thanhlyhangcu.vn/may-lanh-dieu-hoa-cu/\" target=\"_blank\">&nbsp;<b>thanh L&yacute; m&aacute;y Lạnh, điều h&ograve;a&nbsp;gi&aacute; tốt</b></a><br>', 0, 0, 1573402580),
(5, 1, 5, 'Máy sấy Electrolux 1125', '4,500,000đ', 'thumb_1569036782_may-say-electrolux.jpg', 'Hà Nội', '<br>C&ocirc;ng <u><em><strong><a href=\"https://thanhlyhangcu.vn/may-say-electrolux/\"><span style=\"color:#2ecc71;\">nghệ m&aacute;y&nbsp;sấy&nbsp;Electrolux</span></a></strong></em></u>&nbsp; th&ocirc;ng hơi hiện đại, sấy kh&ocirc; nhanh ch&oacute;ng, tiết kiệm chi ph&iacute;.<br>Cảm biến th&ocirc;ng minh Smart Sensor tự động c&acirc;n chỉnh khối lượng sấy, đưa ra thời gian sấy ph&ugrave; hợp.<br>Sấy đảo chiều gi&uacute;p quần &aacute;o kh&ocirc; đều v&agrave; chống rối hiệu quả.<br>Lồng sấy chống gỉ bền bỉ với thời gian.<br>M&aacute;y sấy quần &aacute;o n&agrave;y c&oacute; thể chồng ngược l&ecirc;n m&aacute;y giặt để tiết kiệm kh&ocirc;ng gian.<br>', 150, 0, 1573402580),
(6, 1, 1, 'Máy lạnh đứng aikibi 1122', '12,000,000đ', 'thumb_1568618842_may-lanh-dung-aikibi-1-122.jpg', 'TP.Hồ Chí Minh', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/thanh-ly-do-dien-lanh/\"><span style=\"color:#1abc9c;\">M&aacute;y lạnh đứng aikibi </span></a></strong></em></u>đ&atilde; c&oacute; mặt tại thị trường Việt Nam hơn&nbsp;15 năm nay.<strong>Aikibi</strong> l&agrave; thương hiệu<em><strong> m&aacute;y điều h&ograve;a, m&aacute;y lạnh</strong></em>&nbsp;đ&atilde; được c&aacute;c đối t&aacute;c lớn tin tưởng sử dụng như:&nbsp;Hệ thống Thế giới di động, Điện m&aacute;y xanh, B&aacute;ch h&oacute;a xanh, FPT shop, The Coffee House, C&agrave; ph&ecirc; Kh&aacute;nh Casa,..v&agrave; rất nhiều c&aacute;c c&ocirc;ng tr&igrave;nh nh&agrave; nước, bệnh viện, trường học, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, nh&agrave; xưởng&hellip;kh&aacute;c tr&ecirc;n cả nước đ&atilde; v&agrave; đang tin d&ugrave;ng.<br>', 0, 0, 1573402580),
(7, 1, 2, 'Máy lạnh AIkibi 2HP 1121', '7,500,000đ', 'thumb_1568616838_may-lanh-aikibi-2hp-1121.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/may-lanh-aikibi-2hp-1121/\"><span style=\"color:#f39c12;\">M&aacute;y lạnh AIkibi 2HP </span></a></strong></em></u>tạo ion l&agrave;m sach kh&ocirc;ng kh&iacute;.., chế độ l&agrave;m lạnh nhanh, m&aacute;y lạnh mới c&oacute; chế độ tối ưu 30% điện năng khi vận h&agrave;nh.&nbsp;<br>', 0, 0, 1573402580),
(8, 1, 3, 'Máy lạnh Toshiba cũ 1113', '2,900,000đ', 'thumb_1567952620_may-lanh-toshiba-cu-1113.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/may-lanh-toshiba-cu-1113/\">M&aacute;y lạnh Toshiba cũ</a></strong></em></u> chắc chắn sẽ l&agrave;m h&agrave;i l&ograve;ng người ti&ecirc;u d&ugrave;ng kh&oacute; t&iacute;nh khi đang muốn t&igrave;m cho m&igrave;nh một chiếc <u><em><strong>m&aacute;y lạnh</strong></em></u>&nbsp;, <u><em><strong>điều h&ograve;a</strong></em></u> gi&uacute;p&nbsp;kh&aacute;ng khuẩn khử m&ugrave;i, m&agrave; c&ograve;n nổi bật với thiết kế. D&ograve;ng <em><strong>m&aacute;y lạnh của Toshibia</strong></em>, m&aacute;y chạy cực &ecirc;m v&agrave; ổn định, chắc chắn sẽ l&agrave; sự lựa chọn đ&aacute;ng c&acirc;n nhắc của bạn.<br>', 0, 0, 1573402580),
(9, 1, 4, 'Máy lạnh tủ đứng LG cũ 1112', '15,000,000đ', 'thumb_1567852676_may-lanh-tu-dung-lg-cu-1112.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/may-lanh-tu-dung-lg-cu-1112/\"><span style=\"color:#c0392b;\">M&aacute;y lạnh tủ đứng LG cũ </span></a></strong></em></u>c&oacute; hệ thống&nbsp;&nbsp;lọc kh&iacute; PLASMA&nbsp;&nbsp;gi&uacute;p loại bỏ bụi bẩn, c&aacute;c chất g&acirc;y &ocirc; nhiễm v&agrave; m&ugrave;i h&ocirc;i, ngăn ngừa c&aacute;c bệnh dị ứng. Khi m&aacute;y kh&ocirc;ng hoạt động, hệ thống n&agrave;y cũng c&oacute; thể được sử dung như một bộ xử l&yacute; kh&ocirc;ng kh&iacute; th&ocirc;ng thường.<br>', 500, 0, 1573402580),
(10, 1, 5, 'Tủ lạnh Panasonic Inverter 1111', '3,800,000đ', 'thumb_1562744753_tu-lanh-panasonic-inverter-995.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/tu-lanh-panasonic-inverter-995/\"><span style=\"color:#8e44ad;\">&nbsp;Tủ lạnh Panasonic Inverter</span></a></strong></em></u> Ngăn đ&aacute; ph&iacute;a tr&ecirc;n - 2 cửa<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(11, 1, 1, 'Tủ mát Alaska cũ 1110', '3,900,000đ', 'thumb_1567850436_tu-mat-alaska-cu-1110-1.jpg', 'TP.Hồ Chí Minh', '<em><strong><a href=\"https://thanhlyhangcu.vn/tu-mat-chinh-hang/\"><span style=\"color:#f39c12;\">Tủ m&aacute;t Alaska cũ</span></a></strong></em> l&agrave;m bằng k&iacute;nh chịu lực 2 lớp h&uacute;t ch&acirc;n kh&ocirc;ng, th&acirc;n tủ được l&agrave;m bằng th&eacute;p cao cấp chống gỉ đảm bảo độ an to&agrave;n nhất cho gia đ&igrave;nh bạn khi sử dụng.&nbsp;&nbsp;<br>', 0, 0, 1573402580),
(12, 1, 2, 'Điều Hòa Tủ Đứng Heavy 5HP cũ 1079', '19,500,000đ', 'thumb_1566881360_dieu-hoa-tu-dung-heavy-5hp-cu-1079.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/dieu-hoa-tu-dung-heavy-5hp-cu-1079/\"><span style=\"color:#8e44ad;\">&nbsp;Điều H&ograve;a Tủ Đứng Heavy 5HP</span></a></strong></em></u> cũ với thiết kế h&agrave;i h&ograve;a v&agrave; gọn nhẹ. Sử dụng nguồn điện 3 pha, 380-415V, 50 Hz.<br>Thiết lập chế độ hoạt động tự động trong 24 giờ<br>Luồng gi&oacute; thổi xa v&agrave; rộng<br>Thiết kế vỏ chống gỉ, panel dễ d&agrave;ng l&agrave;m sạch<br>Đ&egrave;n LED hiển thị c&aacute;c chức năng hoạt động<br>Chức năng tự chẩn đo&aacute;n sự cố v&agrave; bảo vệ<br>Vận h&agrave;nh tĩnh lặng : để tạo ra sự thoải m&aacute;i tối đa, d&ograve;ng m&aacute;y PS vận h&agrave;nh cực &ecirc;m nhờ v&agrave;o thiết kế ống gi&oacute; v&agrave; độ ồn thấp thế hệ mới.<br>', 0, 0, 1573402580),
(13, 1, 3, 'Tủ lạnh Sanyo 180 lít gia đình 1071', '1,900,000đ', 'thumb_1566371425_tu-lanh-sanyo-110-lit-cu-thanh-ly-gia-re.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/tu-lanh-sanyo-110-lit-cu-thanh-ly-gia-re/\"><span style=\"color:#e74c3c;\">Tủ lạnh Sanyo 180 l&iacute;t gia đ&igrave;nh</span></a> </strong></em></u>lạnh hiệu Sanyo c&ograve;n đẹp y như mới, tủ dung t&iacute;ch 180 l&iacute;t, kh&aacute;ch trước sử dụng kỹ n&ecirc;n c&ograve;n rất mới, b&ecirc;n trong m&agrave;u trắng, b&ecirc;n ngo&agrave;i kh&ocirc;ng trầy xướt, c&oacute; ngăn l&agrave;m đ&aacute; vi&ecirc;n, đầy đủ phụ kiện b&ecirc;n trong, Tủ c&ograve;n mới 95%, m&agrave;u x&aacute;m, l&agrave;m lạnh nhanh, &iacute;t hao đi&ecirc;n. Tủ c&oacute; dung t&iacute;ch vừa phải ph&ugrave; hợp cho gia đ&igrave;nh 5-8 th&agrave;nh vi&ecirc;n, l&agrave;m đ&aacute; nhanh. Ngo&agrave;i ra ch&uacute;ng t&ocirc;i c&ograve;n thanh l&yacute; <a href=\"https://thanhlyhangcu.vn/dien-gia-dung/\"><span style=\"color:#3498db;\"><u><em><strong>điện gia dụng cũ</strong></em></u></span></a> v&agrave; <u><em><strong><a href=\"https://thanhlyhangcu.vn/thanh-ly-tu-dong-cu/\"><span style=\"color:#27ae60;\">thanh l&yacute; tủ đ&ocirc;ng cũ</span></a></strong></em></u> nếu anh chị em n&agrave;o c&oacute; nhu cầu mua th&ecirc;m điện gia dụng v&agrave; tủ đ&ocirc;ng cũ th&igrave; li&ecirc;n hệ ngay <em><strong>1800.7248</strong></em> bấm ph&iacute;m 1 để mua h&agrave;ng nh&eacute; !&nbsp;&nbsp;<br>', 0, 0, 1573402580),
(14, 1, 4, 'Máy giặt 10kg sam sung cũ 1067', '3,500,000đ', 'thumb_1566354640_may-say-10kg-sam-sung-cu-1067-1.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/may-giat-10kg-sam-sung-cu-1067/\"><span style=\"color:#8e44ad;\">M&aacute;y giặt&nbsp;10kg sam sung cũ</span></a></strong></em></u> xuất khẩu từ h&agrave;n quốc&nbsp;c&oacute; được chứng nhận BAF chất g&acirc;y dị ứng loại bỏ Tiện &iacute;ch giặt ủi C&acirc;n bằng 4 giai đoạn &amp; c&acirc;n bằng chất lỏng Nước lạnh v&agrave; nước n&oacute;ng kết hợp Rửa / Khử nước rửa sạch Ti&ecirc;u chuẩn / Mạnh / Mạnh Chức năng giặt&nbsp;ti&ecirc;u chuẩn,&nbsp;&nbsp;<br>', 450, 0, 1573402580),
(15, 1, 5, 'Tủ đông Alaska 2 ngăn đông mát thanh lý giá tốt', '2,900,000đ', 'thumb_1566184879_tu-dong-alaska-2-ngan-dong-mat-thanh-ly-gia-tot-1.jpg', 'Hà Nội', '<strong>Tủ đ&ocirc;ng Alaska&nbsp;2 ngăn đ&ocirc;ng m&aacute;t&nbsp;&nbsp;</strong>&nbsp;l&agrave; sự chọn lựa tốt cho bạn với thiết kế&nbsp;<em>2 ngăn gồm 1 ngăn đ&ocirc;ng v&agrave; 1 ngăn m&aacute;t</em>&nbsp;rất tiện lợi v&agrave; đ&aacute;p ứng tốt nhu cầu trữ đ&ocirc;ng thực phẩm cho c&aacute;c cửa h&agrave;ng b&aacute;ch h&oacute;a, si&ecirc;u thị, nh&agrave; h&agrave;ng hay qu&aacute;n ăn.<br>H&agrave;ng xuất xứ r&otilde; r&agrave;ng, dễ kiểm tra th&ocirc;ng tin<br>Bảo h&agrave;nh 3 th&aacute;ng với c&aacute;c d&ograve;ng tủ đ&ocirc;ng m&aacute;t<br>Tặng k&egrave;m ống đồng theo m&aacute;y<br>Vận chuyển miễn ph&iacute; đến tận nh&agrave;<br>', 0, 0, 1573402580),
(16, 1, 1, 'Máy in đa năng HP LaserJet Pro 1049', '3,500,000đ', 'thumb_1565583534_may-in-da-nang-hp-laserjet-pro-1049-1.jpg', 'TP.Hồ Chí Minh', '&nbsp;<br>', 0, 0, 1573402580),
(17, 1, 2, 'Hộp Chống Ồn Máy Xay Sinh Tố JTC 1.048', '4,500,000đ', 'thumb_1565579299_hop-chong-on-may-xay-sinh-to-jtc-1-048.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/hop-chong-on-may-xay-sinh-to-jtc-1-048/\">Hộp Chống Ồn M&aacute;y Xay Sinh Tố JTC&nbsp;</a></strong></em></u> l&agrave;m giảm tiếng ồn của m&aacute;y xay&nbsp;<br />  Gi&uacute;p cho việc xay của bạn trở n&ecirc;n thoải m&aacute;i,v&ocirc; tư v&agrave; dễ d&agrave;ng.&nbsp;<br>', 0, 0, 1573402580),
(18, 1, 3, 'Máy xay sinh tố Vitamix 1047', '12,500,000đ', 'thumb_1565575277_may-xay-sinh-to-vitamix-1047.jpg', 'Hà Nội', '<u><em><strong><a href=\"https://thanhlyhangcu.vn/may-xay-sinh-to-vitamix-1047/\">M&aacute;y xay sinh tố Vitamix&nbsp;</a></strong></em></u>l&agrave; d&ograve;ng m&aacute;y xay chuy&ecirc;n nghiệp d&agrave;nh cho c&aacute;c qu&aacute;n c&agrave; ph&ecirc; c&ocirc;ng suất lớn,&nbsp;c&oacute; thiết kế hiện đại, thuộc thương hiệu nổi tiếng của Mỹ. M&aacute;y chuy&ecirc;n d&agrave;nh cho thức uống đ&aacute; b&agrave;o với 6 chế độ lập tr&igrave;nh trước v&agrave; chức năng tự động ngắt an to&agrave;n.<br>', 200, 0, 1573402580),
(19, 1, 4, 'Máy lạnh Sharp inverter thanh lý 1 ngựa', '4,500,000đ', 'thumb_1565510246_may-lanh-sharp-inverter-thanh-ly-1-ngua.jpg', 'Hà Nội', '<span style=\"font-size:16px;\">Đặc điểm nổi bật của <a href=\"https://thanhlyhangcu.vn/may-lanh-sharp-inverter-thanh-ly-1-ngua/\"><strong>m&aacute;y lạnh Sharp 1 HP thanh l&yacute;</strong></a></span><br>C&ocirc;ng nghệ l&agrave;m lạnh J-Tech Inverter hoạt động &ecirc;m &aacute;i, ổn định, l&agrave;m lạnh s&acirc;u.<br>C&ocirc;ng nghệ Powerful Jet cho hơi lạnh tức th&igrave; ngay khi khởi động m&aacute;y.<br>Chế độ Gentle Cool Air tr&aacute;nh hơi lạnh thổi trực tiếp v&agrave;o người d&ugrave;ng.<br>Chế độ Baby Sleep nhẹ nh&agrave;ng y&ecirc;n tĩnh gi&uacute;p b&eacute; ngủ ngon.<br>L&agrave;m lạnh s&acirc;u hơn với gas R32 v&agrave; nhiệt độ xuống tới 14 độ C.<br>C&ocirc;ng nghệ inverter tiết kiệm 40% điện năng<br>Bảo h&agrave;nh 4 th&aacute;ng với c&aacute;c d&ograve;ng m&aacute;y lạnh<br>Tặng k&egrave;m ống đồng theo m&aacute;y<br>Vận chuyển miễn ph&iacute; đến tận nh&agrave;<br>', 0, 0, 1573402580),
(20, 1, 5, 'Tủ lạnh Aqua 205 lít 1045', '3,900,000đ', 'thumb_1567848468_tu-lanh-aqua-143-lit-1045-1.jpg', 'Hà Nội', '<strong><u><em><a href=\"https://thanhlyhangcu.vn/tu-lanh-aqua-143-lit-1045/\">&nbsp;Tủ lạnh Aqua 205 l&iacute;t </a></em></u></strong>được thiết kế nhỏ gọn, cửa phẳng mới, hiện đại. Kh&ocirc;ng đ&oacute;ng tuyết, ngăn đ&aacute; tr&ecirc;n. Khay bằng k&iacute;nh chịu lực cứng c&aacute;p v&agrave; sang trọng gi&uacute;p bạn trữ nhiều thực phẩm nặng.<br>', 0, 0, 1573402580),
(21, 1, 1, 'Tivi Plasma Samsung 60 inche 1.001', '12,000,000đ', 'thumb_1562830617_tivi-plasma-samsung-60-inche-1001-1.jpg', 'TP.Hồ Chí Minh', '<a href=\"https://thanhlyhangcu.vn/tivi-plasma-samsung-60-inche-1-001/\">Tivi Plasma Samsung 60 inche</a> độ ph&acirc;n giải cao&nbsp;full HD&nbsp;1920 x 1080 c&oacute;&nbsp;c&ocirc;ng nghệ&nbsp;PurColor&nbsp;mang đến dải m&agrave;u rộng cho ra m&agrave;u sắc sống động, mạnh mẽ.&nbsp;<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(22, 1, 2, 'Máy Điều hòa Mitsubishi  997', '3,500,000đ', 'thumb_1562814309_may-dieu-hoa-mitsubishi-997.jpg', 'Hà Nội', '<span style=\"line-height:22.5pt\"><u><em><strong><a href=\"https://thanhlyhangcu.vn/may-dieu-hoa-mitsubishi-997/\" target=\"_blank\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"></span></span></span></a></strong></em></u><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"><u><em><strong><a href=\"https://thanhlyhangcu.vn/may-dieu-hoa-mitsubishi-997/\" target=\"_blank\">M&aacute;y Điều h&ograve;a Mitsubishi gi&aacute; rẻ </a></strong></em></u>thanh l&yacute;, tối ưu 70% chi ph&iacute; khi mua h&agrave;ng mới, Sản phẩm c&ograve;n mới 85% - 98%. Nhiều mẫu m&atilde;, k&iacute;ch cỡ v&agrave; số lượng, tối ưu 60% chi ph&iacute; khi mua mới.</span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(23, 1, 3, 'Tivi LED Toshiba 32 inch 996', '2,200,000đ', 'thumb_1562745936_tivi-led-toshiba-32-inch-996.jpg', 'Hà Nội', '<a href=\"https://thanhlyhangcu.vn/tivi-led-toshiba-32-inch-996/\">Tivi LED Toshiba 32 inch</a> mang trong m&igrave;nh thiết kế truyền thống của d&ograve;ng&nbsp;1300, với loa được đặt ở mặt ph&iacute;a trước hướng trực tiếp đến người d&ugrave;ng gi&uacute;p mang đến &acirc;m thanh mạnh mẽ, đồng thời phần ch&acirc;n đế nhỏ m&agrave; vững chắc của tivi gi&uacute;p cho tivi kh&ocirc;ng bị &ldquo;ph&ocirc;&rdquo;.<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(24, 1, 4, 'MÁY LẠNH MITSUBISHI 1HP 977', '2,400,000đ', 'thumb_1561804316_may-lanh-mitsubishi-1hp-977.jpg', 'Hà Nội', '<br>', 0, 0, 1573402580),
(25, 1, 5, 'Tủ mát ướp rượu 962', '1,500,000đ', 'thumb_1569404371_tu-mat-uop-ruou-962.jpg', 'Hà Nội', '<br>', 0, 0, 1573402580),
(26, 1, 1, 'Máy giặt Toshiba 960', '3,100,000đ', 'thumb_1569224687_may-giat-toshiba-960.jpg', 'TP.Hồ Chí Minh', 'T&iacute;nh năng : Th&ugrave;ng giặt bằng th&eacute;p kh&ocirc;ng gỉ, m&agrave;n h&igrave;nh hiển thị LCD: Hiển thị thời gian + chệ độ giặt, chức năng vắt cực kh&ocirc;: Luồng kh&iacute; v&ograve;ng cung, chức năng an to&agrave;n cho trẻ em, chức năng hẹn giờ 9/6 giờ, bộ lọc xơ vải tự điều khiển, m&acirc;m giặt kh&aacute;ng khuẩn Hybrib<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(27, 1, 2, 'Tủ lạnh Electrolux 959', '1,600,000đ', 'thumb_1561193770_tu-lanh-electrolux-959.jpg', 'Hà Nội', '<span style=\"line-height:22.5pt\"><strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Mua h&agrave;ng gi&aacute; tốt, bảo h&agrave;nh l&acirc;u d&agrave;i tại thanhlyhangcu.vn</span></span></span></strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(28, 1, 3, 'Máy lọc nước nóng cao cấp 955', '1,500,000đ', 'thumb_1560933651_may-loc-nuoc-nong-lanh-cao-cap-955.jpg', 'Hà Nội', '<span style=\"line-height:22.5pt\"><strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Mua h&agrave;ng gi&aacute; tốt, bảo h&agrave;nh l&acirc;u d&agrave;i tại thanhlyhangcu.vn</span></span></span></strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(29, 1, 4, 'TỦ ĐÔNG INOX NHÀ HÀNG 918', '13,000,000đ', 'thumb_1560135613_tu-dong-inox-alaska-918.jpg', 'Hà Nội', 'Tủ đ&ocirc;ng inox nh&agrave; h&agrave;ng 918 l&agrave; một trong những d&ograve;ng tủ đ&ocirc;ng c&ocirc;ng nghiệp. L&agrave;m từ th&eacute;p kh&ocirc;ng gỉ bền chắc. Chức năng 2 trong 1: tủ b&agrave;n thớt v&agrave; tủ đ&ocirc;ng. Thiết kế sang trọng, đẹp mắt. Th&iacute;ch hợp sử dụng trong ph&ograve;ng bếp kh&aacute;ch sạn, nh&agrave; h&agrave;ng&hellip;<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(30, 1, 5, 'MÁY LỌC NƯỚC UỐNG 905', '4,500,000đ', 'thumb_1559812479_may-loc-nuoc-uong-nong-lanh-905.jpg', 'Hà Nội', 'L&agrave; sản phẩm được ưa chuộng nhất hiện nay, dễ sử dụng, lắp r&aacute;p đơn giản kh&ocirc;ng cầu kỳ, m&aacute;y lọc nước uống n&oacute;ng lạnh trực tiếp vỏ được l&agrave;m bằng inox 304 n&ecirc;n kh&ocirc;ng bị gỉ s&eacute;t, bền với thời gian, sạch gọn với mọi kh&ocirc;ng gian, dễ bảo tr&igrave;, dễ d&agrave;ng lắp r&aacute;p trong qu&aacute; tr&igrave;nh sử dụng&hellip;<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(31, 1, 1, 'TỦ LẠNH CÔNG NGHIỆP 4 CÁNH 878', '13,000,000đ', 'thumb_1559615187_tu-lanh-cong-nghiep-4-canh-878.jpg', 'TP.Hồ Chí Minh', 'Tủ lạnh c&ocirc;ng nghiệp 4 c&aacute;nh&nbsp;l&agrave; một trong những sản phẩm được sử dụng phổ biến hiện nay ở c&aacute;c nh&agrave; h&agrave;ng, qu&aacute;n ăn v&agrave; doanh nghiệp. Bạn đang c&oacute; nhu cầu sử dụng vật dụng n&agrave;y? Thế nhưng bạn chưa biết g&igrave; về n&oacute;? Những th&ocirc;ng tin dưới đ&acirc;y sẽ gi&uacute;p bạn hiểu kỹ hơn về sản phẩm gi&uacute;p cho việc lựa chọn dễ d&agrave;ng hơn.<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(32, 1, 2, 'Máy Giặt Lồng Đứng 871', '2,800,000đ', 'thumb_1560585300_may-giat-long-dung-871.jpg', 'Hà Nội', 'Thương hiệu: LG<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(33, 1, 3, 'Tủ lạnh alaska 870', '1,600,000đ', 'thumb_1560591349_tu-lanh-alaska-870.jpg', 'Hà Nội', '<br>Vận h&agrave;nh &ecirc;m &aacute;i, ổn định với c&ocirc;ng nghệ J-Tech Inverter.<br>Bộ lọc Nano Ag+Cu gi&uacute;p kh&ocirc;ng kh&iacute; trong&nbsp;tủ lạnh&nbsp;kh&ocirc;ng bị b&aacute;m m&ugrave;i do thực phẩm, nấm mốc g&acirc;y ra.<br>N&acirc;ng cao hiệu quả tiết kiệm năng lượng với chế độ Extra Eco.<br>Ướp lạnh nhanh ch&oacute;ng với ngăn giữ tươi linh hoạt.<br>Khay chứa l&agrave;m từ k&iacute;nh chịu lực an to&agrave;n v&agrave; bền bỉ.<br>', 0, 0, 1573402580),
(34, 1, 4, 'Máy Thái thịt Sirman 865', '4,500,000đ', 'thumb_1559011976_may-thai-thit-sirman-865.jpg', 'Hà Nội', 'M&aacute;y th&aacute;i l&aacute;t thịt&nbsp;l&agrave; thiết bị sơ chế nhanh ch&oacute;ng, hỗ trợ, gi&uacute;p &iacute;ch rất lớn cho c&ocirc;ng việ bếp nh&agrave; h&agrave;ng. Với nguy&ecirc;n l&yacute; hoạt động đơn giản, ph&ugrave; hợp với nhiều nhu cầu v&agrave; mục đ&iacute;ch sử dụng kh&aacute;c nhau, sản phẩm n&agrave;y đang dần trở th&agrave;nh thiết bị th&acirc;n quen v&agrave; l&agrave; người bạn đồng h&agrave;nh với c&aacute;c đơn vị dịch vụ ăn uống.<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(35, 1, 5, 'Dàn nhạc sống 851', '45,000,000đ', 'thumb_1558434172_dan-nhac-song-851.jpg', 'Hà Nội', '<span style=\"line-height:22.5pt\"><strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Mua h&agrave;ng gi&aacute; tốt, bảo h&agrave;nh l&acirc;u d&agrave;i tại thanhlyhangcu.vn</span></span></span></strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(36, 1, 1, 'Máy nóng lạnh nước uống alaska 814', '1,900,000đ', 'thumb_1560589493_may-nong-lanh-nuoc-uong-alaska-814.jpg', 'TP.Hồ Chí Minh', '<br />  - Tiện dụng, dễ d&ugrave;ng với 2 v&ograve;i ri&ecirc;ng biệt n&oacute;ng, lạnh.<br />  - L&agrave;m lạnh bằng chip điện tử v&agrave; vi mạch<br />  - C&oacute; khoang chứa khử tr&ugrave;ng<br />  - Chức năng khử m&ugrave;i<br />  - C&oacute; thể lọc trực tiếp từ m&aacute;y uống ngay.<br />  - Với m&agrave;u sắc v&agrave; hoa văn trang nh&atilde;, sản phẩm dễ d&agrave;ng kết hợp h&agrave;i h&ograve;a với mọi kh&ocirc;ng gian nội thất ph&ograve;ng kh&aacute;ch, văn ph&ograve;ng hay cửa h&agrave;ng sang trọng.<br>   <p style=\"margin:0in; margin-bottom:.0001pt\"><span style=\"line-height:22.5pt\"><strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Mua h&agrave;ng gi&aacute; tốt, bảo h&agrave;nh l&acirc;u d&agrave;i tại thanhlyhangcu.vn</span></span></span></strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"></span></span></span></span></p>   <br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>   <p style=\"margin:0in; margin-bottom:.0001pt\"><span style=\"line-height:22.5pt\"><strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:#2980b9\">C&ocirc;ng ty TNHH SX-TM-DV Vạn Th&agrave;nh Hưng</span></span></span></strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"></span></span></span></span></p>     <h2 style=\"margin:0in; margin-bottom:.0001pt; line-height:22.5pt\"><strong><span style=\"font-size:10.5pt\"><span condensed=\"\" roboto=\"\" style=\"font-family:\"><span style=\"color:#2980b9\"><span style=\"text-transform:uppercase\">TƯ VẤN MUA H&Agrave;NG: 0974.289.878</span></span></span></span></strong> <span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"><br />    Địa chỉ: E12/25N, đường Thới H&ograve;a, ấp 5, x&atilde; Vĩnh Lộc A, B&igrave;nh Ch&aacute;nh, TPHCM (<a href=\"https://goo.gl/maps/EqVkyuUybMr\">https://goo.gl/maps/EqVkyuUybMr</a>)<br />    Website: </span></span></span><strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"><span style=\"font-weight:normal\"><a href=\"https://thanhlyhangcu.vn/\">https://thanhlyhangcu.vn/</a></span></span></span></span></strong><span style=\"font-size:20.5pt\"><span condensed=\"\" roboto=\"\" style=\"font-family:\"><span style=\"color:#0e4da2\"><span style=\"text-transform:uppercase\"><span style=\"font-weight:normal\"></span></span></span></span></span></h2>    <br>', 0, 0, 1573402580),
(37, 1, 2, 'Tủ mát đựng bánh kem 781', '12,000,000đ', 'thumb_1557193507_tu-mat-dung-banh-kem-781.jpg', 'Hà Nội', 'Trong c&aacute;c tiệm b&aacute;nh ngọt, tủ m&aacute;t đựng b&aacute;nh kem l&agrave; một vật dụng kh&ocirc;ng thể thiếu. Đ&acirc;y l&agrave; phương tiện để người thợ l&agrave;m b&aacute;nh trưng b&agrave;y sản phẩm của m&igrave;nh đồng thời cũng l&agrave; thiết bị tuyệt vời hỗ trợ gi&uacute;p bảo quản b&aacute;nh được tốt hơn v&agrave; l&acirc;u hơn.<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(38, 1, 3, 'Bộ đèn led rọi ray mắt trâu 12w', '1,000,000đ', 'thumb_1554978624_bo-den-led-roi-ray-mat-trau-12w.jpg', 'Hà Nội', 'Ng&agrave;y nay, việc thay thế đ&egrave;n led rọi ray để chiếu s&aacute;ng thay thế cho c&aacute;c thiết bị th&ocirc;ng thường kh&aacute;c được rất nhiều người ưa chuộng, nằm trong mẫu thiết kế n&agrave;y phải kể đến<strong>&nbsp;bộ đ&egrave;n led rọi ray mắt tr&acirc;u 12w</strong>, đ&acirc;y l&agrave; mẫu sản phẩm mang lại hiệu quả sử dụng cao v&agrave; được nhiều kh&aacute;ch h&agrave;ng tin d&ugrave;ng.<br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(39, 1, 4, 'BỘ CAMERA QUAN SÁT GIÁ RẺ', '2,500,000đ', 'thumb_1554971068_bo-camera-quan-sat-gia-re.jpg', 'Hà Nội', '<span style=\"text-autospace:none\"><span lang=\"VI\" style=\"font-size:10.5pt\"><span style=\"background:white\"><span style=\"line-height:115%\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#1d2129\"></span></span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(40, 1, 5, 'MÁY CAMERA QUAN SÁT', '2,500,000đ', 'thumb_1554969417_may-camera-quan-sat.jpg', 'Hà Nội', '<span style=\"line-height:22.5pt\"><strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Mua h&agrave;ng gi&aacute; tốt, bảo h&agrave;nh l&acirc;u d&agrave;i tại thanhlyhangcu.vn</span></span></span></strong><span style=\"font-size:10.5pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\"></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">1 đổi 1 nếu sản phẩm lỗi</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng nhanh trong v&ograve;ng 24h</span></span></span></span></span><br><span style=\"line-height:normal\"><span style=\"tab-stops:list .5in\"><span style=\"font-size:10.0pt\"><span style=\"font-family:Symbol\"></span></span><span style=\"font-size:10.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:black\">Giao h&agrave;ng tận nh&agrave;, kiểm tra đạt y&ecirc;u cầu mới thanh to&aacute;n</span></span></span></span></span><br>', 0, 0, 1573402580),
(41, 2, 1, 'Salon bàn ghế gỗ đỏ 1055', '17,000,000đ', '1569815399_full.jpg&width=350.jpg', 'Hà Nội', '    T&igrave;nh trang: mới 95%&nbsp;<br>    Chất liệu: Gỗ đỏ tay 8&nbsp;<br>    Bao gồm: 6 m&oacute;n 2 ghế đ&ocirc;n,&nbsp;1 ghế d&agrave;i, 2 ghế đơn v&agrave; 1 b&agrave;n&nbsp;<br>    Vơi đặc trưng l&agrave; thớ gỗ d&agrave;y v&agrave; mịn, với đặc t&iacute;nh chống mối , mọt tự nhi&ecirc;n được xử l&yacute; để chống cong v&ecirc;nh, m&agrave;u sắc v&agrave; v&acirc;n gỗ đẹp G&otilde; đỏ l&agrave; loại gỗ được đ&aacute;nh gi&aacute; cao trong việc chế tạo v&agrave; sử dụng l&agrave;m đồ nội thất, mỹ nghệ, &hellip;<br>   <span style=\"color:#c0392b;\"><strong>Bộ b&agrave;n ghế gỗ g&otilde; đỏ tay 8</strong></span>&nbsp;m&agrave; <b>Đồ cũ tuấn hưng</b>&nbsp;thanh l&yacute; lại&nbsp;bảo đảm đ&uacute;ng <strong>gỗ đỏ 100%</strong>, gỗ được lựa chọn v&agrave; xử l&yacute; kỹ trước khi sản xuất nhằm đảm bảo sản phẩm c&oacute; độ bền cao v&agrave; đạt chất lượng tốt nhất độ bền tr&ecirc;n 30 năm.&nbsp;<br>    Ngo&agrave;i ra, ch&uacute;ng t&ocirc;i c&ograve;n c&oacute; rất nhiều c&aacute;c loại<em><strong> b&agrave;n ghế gỗ </strong></em>đa dạng với k&iacute;ch thước v&agrave; gi&aacute; cả kh&aacute;c nhau cho qu&yacute; kh&aacute;ch lựa chọn, h&atilde;y c&ugrave;ng đến <em><strong>đồ cũ tuấn hưng</strong></em> để chi&ecirc;m ngưỡng kh&ocirc;ng chỉ b&agrave;n ghế m&agrave; c&oacute; cả c&aacute;c tủ, sập, b&igrave;nh phong, tượng đồ<a href=\"https://thanhlyhangcu.vn/thanh-ly-do-go-cu-co-xua/\" target=\"_blank\"> <span style=\"color:#f39c12;\"><strong>gỗ cũ gỗ xưa cao cấp thanh l&yacute; gi&aacute; rẻ</strong></span></a>.<br>', 0, 0, 1573402580),
(42, 2, 2, 'Bộ bàn ghế gia đình xưa 1041', '20,000,000đ', '1565427167_full.jpg&width=350.jpg', 'Hà Nội', '    Chất liệu: B&agrave;n gỗ đỏ&nbsp;<br>   Ghế cẩm lai&nbsp;&nbsp;<br>   T&igrave;nh trạng: mới 90%&nbsp;<br>    Phong c&aacute;ch cổ xưa qu&yacute; hiếm&nbsp;&nbsp;<br>', 0, 0, 1573402580),
(43, 2, 3, 'Tủ mát ướp rượu 962', '10,000,000đ', '1562057472_full.jpg&width=350.jpg', 'Hà Nội', '', 0, 0, 1573402580),
(44, 2, 4, 'CHẬU RỬA CHÉN  ', '850,000đ', '1552371149_full.jpg&width=350.jpg', 'Hà Nội', '', 0, 0, 1573402580),
(45, 2, 5, 'THANH LÝ TỦ THẦN TÀI  ', '1,500,000đ', '1552370964_full.jpg&width=350.jpg', 'Hà Nội', '   B&agrave;i vị thần t&agrave;i chạm 25x35<br>', 0, 0, 1573402580),
(46, 2, 1, 'Salon gỗ gia đình thanh lý', 'Liên hệ', '1542268064_full.jpg&width=350.jpg', 'TP.Hồ Chí Minh', '', 0, 0, 1573402580),
(47, 2, 2, 'Bán bộ Sơn Thủy gỗ Trắc', 'Liên hệ', '1527503366_full.jpg&width=350.jpg', 'Hà Nội', '', 0, 0, 1573402580),
(48, 2, 3, 'thanh lý giường gỗ đẹp giá rẻ', 'Liên hệ', '1525924534_full.jpg&width=350.jpg', 'Hà Nội', '', 0, 0, 1573402580),
(49, 2, 4, 'Giường gỗ đẹp thanh lý ', 'Liên hệ', '1525924365_full.jpg&width=350.jpg', 'Hà Nội', '', 0, 0, 1573402580),
(50, 2, 5, 'salon gổ cẩm lai thanh lý ', '18,000,000đ', '1521279243_full.jpg&width=350.jpg', 'Hà Nội', '', 0, 0, 1573402580),
(51, 2, 1, 'Thanh lý chén đĩa số lượng nhiều', 'Liên hệ', '1517806423_full.jpg&width=350.jpg', 'TP.Hồ Chí Minh', '', 0, 0, 1573402580),
(52, 2, 2, 'thanh lý salon nhựa giả mây giá rẻ', 'Liên hệ', '1506760513_full.jpg&width=350.jpg', 'Hà Nội', '', 0, 0, 1573402580),
(53, 2, 3, 'giường gỗ giá rẻ thanh lý', 'Liên hệ', '1494063667_full.jpg&width=350.jpg', 'Hà Nội', '', 0, 0, 1573402580),
(54, 2, 4, 'Thanh lý bàn ghế theo phong cách cổ', 'Liên hệ', '1458032548_full.jpg&width=350.jpg', 'Hà Nội', '', 0, 0, 1573402580);

--
-- Bẫy `item`
--
DELIMITER $$
CREATE TRIGGER `ngaytao` BEFORE INSERT ON `item` FOR EACH ROW BEGIN
  SET NEW.createdate = UNIX_TIMESTAMP();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_item`
--

CREATE TABLE `type_item` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `type_item`
--

INSERT INTO `type_item` (`id`, `name`) VALUES
(1, 'Đồ điện gia dụng'),
(2, 'Đồ nội thất'),
(3, 'Đồ văn phòng'),
(4, 'Đồ dùng học tập'),
(5, 'Thiết bị điện tử');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `permission` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `createdate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `phone`, `permission`, `status`, `createdate`) VALUES
(1, 'Văn Hậu                       ', 'e10adc3949ba59abbe56e057f20f883e', 'quanly@gmail.com', '907844687', 1, 0, 1573403916),
(2, 'Văn Hậu                  ', 'e10adc3949ba59abbe56e057f20f883e', 'nguoidung@gmail.com', '908085777', 0, 0, 1573403916),
(3, 'Mr. Nguyễn Văn Ba                      ', '123456', 'nhdminh@apac.ko.com', '90377337', 0, 0, 1573403916),
(4, 'Ms. Trịnh Thị Hoài Giang               ', '123456', 'tnlco@hcm.vnn.vn', '903608690', 0, 0, 1573403916),
(5, 'Ms. Vũ Ngọc Trâm                       ', '123456', 'tsm238@hcm.vnn.vn', '939243674', 0, 0, 1573403916),
(6, 'Mr. Nguyễn Đức Nguyên                  ', '123456', 'truongminhhuy@hcm.vnn.vn', '987982924', 0, 0, 1573403916),
(7, 'Mr. Đỗ Ngọc Thanh                     ', '123456', 'wavelotus@yahoo.com', '933559995', 0, 0, 1573403916),
(8, 'Ms. Trần Thị Thanh Hương               ', '123456', 'Artglass@hcm.vnn.vn', '915757575', 0, 0, 1573403916),
(9, 'Ms. Nguyễn Thị Lan                     ', '123456', 'annie@hcm.vnn.vn', '903900229', 0, 0, 1573403916),
(10, 'Ms. Trần Thị Nga                      ', '123456', 'kalanta@petronas.com.my', '90337184', 0, 0, 1573403916),
(11, 'Ms. Nguyễn Thị Kim Dung                ', '123456', 'vilube@hcm.vnn.vn', '989611561', 0, 0, 1573403916),
(12, 'Mr. Nguyễn Chí Phúc                    ', '123456', 'hanadang@goldsunvn.com', '903704821', 0, 0, 1573403916),
(13, 'Ms. Võ Thị Ngọc Trân                   ', '123456', 'Artglass@hcm.vnn.vn', '982996544', 0, 0, 1573403916),
(14, 'Mr. Lưu Đình Khoa                   ', '123456', 'vivudt@hcm.fpt.vn', '903006968', 0, 0, 1573403916),
(15, 'Ms. Đào Thị Tuyết Nhung              ', '123456', 'pnco@hcm.vnn.vn', '913145852', 0, 0, 1573403916),
(16, 'Mr. Bùi Văn Nhổn                      ', '123456', 'sales@itsolution2b.com', '937879918', 0, 0, 1573403916),
(17, 'Mr. Lê Hữu Duy                        ', '123456', 'haquockhanh@fpt.vn', '903937177', 0, 0, 1573403916),
(18, 'Ms. Hà Thị Vân Diệp                    ', '123456', 'hacongthai77@yahoo.com', '909451621', 0, 0, 1573403916),
(19, 'Ms. Hoàng Thị Hiền                    ', '123456', 'tantrao@hcm.vnn.vn', '932755980', 0, 0, 1573403916),
(20, 'Mr. Trịnh Khắc Tĩnh                    ', '123456', 'dalena@hcm.fpt.vn', '972603314', 0, 0, 1573403916),
(21, 'Mr. Đỗ Bùi Hưng                        ', '123456', 'manh-khoi.pham@metro.com.vn', '903780931', 0, 0, 1573403916),
(22, 'Ms. Đỗ Bùi Hồng Duyên                  ', '123456', 'ttnghia@hcm.vnn.vn', '913111144', 0, 0, 1573403916),
(23, 'Ms. Đặng Thị Thuận Hải               ', '123456', 'hychi-adv@hcm.fpt.vn', '919236777', 0, 0, 1573403916),
(24, 'Mr. Trần Kim Long                    ', '123456', 'NQ_JOY@yahoo.com', '903397407', 0, 0, 1573403916),
(25, 'Ms. Trần Thị Xuân Thảo                 ', '123456', 'printshop@saigonnet.vn', '1699906827', 0, 0, 1573403916),
(26, 'Ms. Nguyễn Thị Lan Anh                ', '123456', 'ngoisaonho@hcm.fpt.vn', '903008720', 0, 0, 1573403916),
(27, 'Ms. Phạm Thị Ngọc Dung               ', '123456', 'phusoco@hcm.vnn.vn', '919393998', 0, 0, 1573403916),
(28, 'Mr. Trần Tuấn Dũng                     ', '123456', 'phi-nga@hcm.fpt.vn', '908835789', 0, 0, 1573403916),
(29, 'Bà Đặng Thị Kim Liên                  ', '123456', 'lvtruong@cinet.vnnews.com', '903926683', 0, 0, 1573403916),
(30, 'Mr Nguyễn Văn Hên                    ', '123456', 'qh-quang@hotmail.com', '90382554', 0, 0, 1573403916),
(31, 'Ms. Võ Thị Thoa                        ', '123456', 'kha.ngo@sonyericsson.com', '908817626', 0, 0, 1573403916),
(32, 'Mr. Phạm Thế Anh                      ', '123456', 'kimngocho@tatacopeanuts.com', '913712111', 0, 0, 1573403916),
(33, 'Mr. Lê Nguyên Diệm                    ', '123456', 'tinnhanco@hcm.fpt.vn', '913961234', 0, 0, 1573403916),
(34, 'Ms. Lê Thị Cường                      ', '123456', 'tinphatco@fptnet.com.vn', '91380003', 0, 0, 1573403916),
(35, 'Mr. Trần Thị Minh Phụng              ', '123456', 'hoatonvn@yahoo.com', '977688399', 0, 0, 1573403916),
(36, 'Ms. Lê Thị Kim Phượng                  ', '123456', 'gicolor@hcm.vnn.vn', '91853299', 0, 0, 1573403916),
(37, 'Ms. Trần Mỹ Thu                        ', '123456', 'vietphone@hcm.vnn.vn', '91805813', 0, 0, 1573403916),
(38, 'Mr. Tiêu Văn Minh                      ', '123456', 'a-b.interiodeco@hcm.vnn.vn', '913763143', 0, 0, 1573403916),
(39, 'Mr. Phan Hòa Bình                     ', '123456', 'nguyen_thang@colpal.com', '913876000', 0, 0, 1573403916),
(40, 'Mr. Trần Thiện Thanh Bình              ', '123456', 'ipesco@hcm.vnn.vn', '919074174', 0, 0, 1573403916),
(41, 'Mr. Võ Quyết Thắng                    ', '123456', 'nxdhuy@tcmcompany.com', '94689778', 0, 0, 1573403916),
(42, 'Mr. Nguyễn Nhơn Tuấn                   ', '123456', 'kienliemco@hcm.fpt.vn', '903921616', 0, 0, 1573403916),
(43, 'Ms. Nguyễn Thị Hà Hương              ', '123456', 'Pham-Son@hcm.vnn.vn', '91850518', 0, 0, 1573403916),
(44, 'Mr. Lê Xuân Diễm                       ', '123456', 'tnco@hcm.fpt.vn', '91388818', 0, 0, 1573403916),
(45, 'Ms. Hoàng Dương Minh Đức              ', '123456', 'hai-au@hcm.fpt.vn', '979644701', 0, 0, 1573403916),
(46, 'Mr. Nguyễn Thanh Hiền                 ', '123456', 'bang@saosang.com', '98367187', 0, 0, 1573403916),
(47, 'Mr. Trần Anh Hùng                    ', '123456', 'nhatloi@hcm.fpt.vn', '903909890', 0, 0, 1573403916),
(48, 'Ms. Đinh Thị Quỳnh Nga                 ', '123456', 'sangtaotre@hcm.vnn.vn', '91960997', 0, 0, 1573403916),
(49, 'Mr. Nguyễn Tuấn Anh                    ', '123456', 'info@songmay.net', '1694456222', 0, 0, 1573403916),
(50, 'Mr. Trần Hiệp Hòa                    ', '123456', 'songhanhad@hcm.fpt.vn', '913727007', 0, 0, 1573403916),
(51, 'Mr. Trần Hiệp Hòa                      ', '123456', 'sanhu@hcm.fpt.vn', '913727007', 0, 0, 1573403916),
(52, 'Mr. Komatsu Susumu                    ', '123456', 'Artglass@hcm.vnn.vn', '81905399427', 0, 0, 1573403916),
(53, 'Ms. Trương Thị Bình                   ', '123456', 't.q.m.co@hcm.vnn.vn', '904602811', 0, 0, 1573403916),
(54, 'Ms. Nguyễn Thị Hồng Nhung              ', '123456', 'tkcompany@hcm.vnn.vn', '975558716', 0, 0, 1573403916),
(55, 'Mr. Nguyễn Sơn Việt                    ', '123456', 'hoadinhngo2003@yahoo.com', '903694711', 0, 0, 1573403916),
(56, 'Ms. Võ Thị Ngọc Quyên                  ', '123456', 'hungphat.co@hcm.fpt.vn', '909534560', 0, 0, 1573403916),
(57, 'Ms. Phạm Thị Hồng Nga                 ', '123456', 'daiphuccantho@hcm.vnn.vn', '918542903', 0, 0, 1573403916),
(58, 'Ms. Nguyễn Thị Cẩm Bình               ', '123456', 'mc_co@hcm.vnn.vn', '933230999', 0, 0, 1573403916),
(59, 'Mr. Trần Văn Bình                      ', '123456', 'mkp@hcm.vnn.vn', '958559296', 0, 0, 1573403916),
(60, 'Mr. Bành Đức Duy                       ', '123456', 'tvmt@hcm.vnn.vn', '989041416', 0, 0, 1573403916),
(61, 'Mr. Trần Quang Tuấn                  ', '123456', 'hangocsonnt@hcm.vnn.vn', '16694521', 0, 0, 1573403916),
(62, 'Ms. Trần Thị Ngọc Trâm                ', '123456', 'nhonco@msn.com', '986260499', 0, 0, 1573403916),
(63, 'Mr. Trần Đình Hội                     ', '123456', 'vts@hcm.fpt.vn', '633717763', 0, 0, 1573403916),
(64, 'Mr. Nguyễn Hoàng Anh                  ', '123456', 'info@vipcomnet.com', '957681362', 0, 0, 1573403916),
(65, 'Mr. Nguyễn Trần Tuấn Anh              ', '123456', 'donaco2@hcm.vnn.vn', '909586807', 0, 0, 1573403916),
(66, 'Mr. Nguyễn Mỳ                         ', '123456', 'apcompany@hcm.fpt.vn', '903770637', 0, 0, 1573403916),
(67, 'Mr. Nguyễn Bá Điệp                     ', '123456', 'tuan.phung@luatviet.com', '908733247', 0, 0, 1573403916),
(68, 'Mr. Lê Tấn Lộc                         ', '123456', 'info@ypvn.com', '9098580', 0, 0, 1573403916),
(69, 'Ms. Phạm Thị Huyền                    ', '123456', 'vongxeptho@hcm.vnn.vn', '909591859', 0, 0, 1573403916),
(70, 'Mr. Cao Nhật Thiên                    ', '123456', 'centrepoint@hcm.vnn.vn', '937090369', 0, 0, 1573403916),
(71, 'Ms. Nguyễn Thùy Linh                 ', '123456', 'Artglass@hcm.vnn.vn', '988325121', 0, 0, 1573403916),
(72, 'Ms. Nguyễn Thị Minh Thủy               ', '123456', 'tiencd@hcm.vnn.vn', '90833485', 0, 0, 1573403916),
(73, 'Ms. Phan Thị Quyên                     ', '123456', 'hungminh@hcm.fpt.vn', '908519667', 0, 0, 1573403916),
(74, 'Ms. Phạm Thị Lệ Mai                   ', '123456', 'airquocthai@hcm.vnn.vn', '90301607', 0, 0, 1573403916),
(75, 'Mr. Lý Hoàng Dũng                      ', '123456', 'brian20302003@yahoo.com', '9036504', 0, 0, 1573403916),
(76, 'Ms. Trần Ngọc Ánh                     ', '123456', 'dophuvinh@hcm.vnn.vn', '955062000', 0, 0, 1573403916),
(77, 'Ms. Nguyễn Thị Thủy Tiên               ', '123456', 'v-contractor@hcm.vnn.vn', '903055878', 0, 0, 1573403916),
(78, 'Mr. Lâm Đạo Thảo                       ', '123456', 'danghanhtuan@yahoo.com', '908040159', 0, 0, 1573403916),
(79, 'Mr. Nguyễn Thanh Triều               ', '123456', 'ngocvancompany@hcm.fpt.vn', '903354059', 0, 0, 1573403916),
(80, 'Ms. Trần Thị Thanh Nga                 ', '123456', 'quanghuynh@vn.hsbc.com', '903917270', 0, 0, 1573403916),
(81, 'Ms. Nguyễn Thị Ngọc Tâm               ', '123456', 'orient@hcm.vnn.vn', '909254302', 0, 0, 1573403916),
(82, 'Mr. Đặng Hữu Liêm                    ', '123456', 'tan.aac@hcm.fpt.vn', '903743047', 0, 0, 1573403916),
(83, 'Mr. Võ Đình Luân                     ', '123456', 'btchinh@hcm.vnn.vn', '938111516', 0, 0, 1573403916),
(84, 'Ms. Nguyễn Thị Ngọc Anh                ', '123456', 'quan@sutrixmedia.com', '983979242', 0, 0, 1573403916),
(85, 'Ms. Ao Kim Thanh                      ', '123456', 'hntscbranch@hcm.vnn.vn', '907839206', 0, 0, 1573403916),
(86, 'Mr. Bảo Quốc                          ', '123456', 'gfk.du@fmail.vnn.vn', '914078631', 0, 0, 1573403916),
(87, 'Mr. Bùi Minh Tâm                       ', '123456', 'cuong.nguyen@hcm.vnn.vn', '909222426', 0, 0, 1573403916),
(88, 'Ms. Bùi Thị Hoa                      ', '123456', 'nguyen_thang@colpal.com', '88600554', 0, 0, 1573403916),
(89, 'Ms. Bùi Thị Phương Thảo               ', '123456', 'dophuvinh@hcm.vnn.vn', '908590071', 0, 0, 1573403916),
(90, 'Mr. Bùi Trung Hậu                    ', '123456', 'danghanhtuan@yahoo.com', '76945238', 0, 0, 1573403916),
(91, 'Mr. Bùi Xuân Tuấn Hải                ', '123456', 'anhhoa@hcm.fpt.vn', '88.204.205', 0, 0, 1573403916),
(92, 'Ms. Cao Miên                         ', '123456', 'nhonhuu@hcm.vnn.vn', '983720792', 0, 0, 1573403916),
(93, 'Mr. Đàm Ngọc Thanh                   ', '123456', 'cbam_son@hcm.vnn.vn', '903937725', 0, 0, 1573403916),
(94, 'Mr. Đặng Quốc Phong                 ', '123456', 'Artglass@hcm.vnn.vn', '903327072', 0, 0, 1573403916),
(95, 'Mr. Đặng Thái Bảo                      ', '123456', 'Artglass@hcm.vnn.vn', '902914762', 0, 0, 1573403916),
(96, 'Ms. Đặng Thị Kim Loan                  ', '123456', 'Artglass@hcm.vnn.vn', '938111516', 0, 0, 1573403916),
(97, 'Ms. Đặng Thị Kim Oanh                 ', '123456', 'anh@itfvn.com', '938111516', 0, 0, 1573403916),
(98, 'Ms. Đặng Thị Phương Dung               ', '123456', 'pxbach@hcm.vnn.vn', '905385308', 0, 0, 1573403916),
(99, 'Ms. Đào Kim Hà                       ', '123456', 'phancong@hcm.fpt.vn', '988420019', 0, 0, 1573403916),
(100, 'Ms. Đào Thị Huyền                    ', '123456', 'robeduc@hcm.vnn.vn', '987158564', 0, 0, 1573403916),
(101, 'Mr. Đào Trí Hùng                  ', '123456', 'trung_dung@hcm.vnn.vn', '908300496', 0, 0, 1573403916),
(102, 'Ms. Đinh Hồng Nhạn Uyên              ', '123456', 'aseanci@saigonnet.vn', '908559463', 0, 0, 1573403916),
(103, 'Mr. Đinh Quốc Tân                      ', '123456', 'lanpl@hcm.vnn.vn', '907171189', 0, 0, 1573403916),
(104, 'Ms. Đinh Quỳnh Nga                     ', '123456', 'nmaidloi@yahoo.com', '987502330', 0, 0, 1573403916),
(105, 'Ms. Đinh Thị Kim Ngân                ', '123456', 'nxl@hcm.vnn.vn', '913778210', 0, 0, 1573403916),
(106, 'Ms. Đỗ Bảo Trúc                       ', '123456', 'cqc@hcm.fpt.vn', '908416055', 0, 0, 1573403916),
(107, 'Ms. Đỗ Thị Trang Thư                  ', '123456', 'Artglass@hcm.vnn.vn', '988993799', 0, 0, 1573403916),
(108, 'Mr. Đỗ Tiến Thành                      ', '123456', 'gierepofficehcmc@hcm.vnn.vn', '938762223', 0, 0, 1573403916),
(109, 'Mr. Đỗ Trí Đức                         ', '123456', 'thanh-ngoc@hcm.vnn.vn', '909210637', 0, 0, 1573403916),
(110, 'Mr. Đoàn Thanh Liêm                   ', '123456', 'tiags@hcm.vnn.vn', '903889495', 0, 0, 1573403916),
(111, 'Ms. Đoàn Thị Bích Hồng                 ', '123456', 'dinhchanh123@hcm.vnn.vn', '919118539', 0, 0, 1573403916),
(112, 'Ms. Đoàn Thị Phương Thảo               ', '123456', 'vinh.chi.nguyen@holcim.com', '936038237', 0, 0, 1573403916),
(113, 'Ms. Đoàn Thị Ngọc Tịnh               ', '123456', 'maystar@hcm.vnn.vn', '938796137', 0, 0, 1573403916),
(114, 'Mr. Đồng Phúc Thông                   ', '123456', 'giao-yen@hcm.vnn.vn', '903688355', 0, 0, 1573403916),
(115, 'Ms. Dư Huyền Vy                       ', '123456', '3asg@saigonnet.vn', '905373761', 0, 0, 1573403916),
(116, 'Ms. Dương Xuân Chinh                   ', '123456', 'nhattuongyao@hcm.vnn.vn', '907333094', 0, 0, 1573403916),
(117, 'Ms. Hà Bích Phượng                  ', '123456', 'linhdao@mail.com', '903705850', 0, 0, 1573403916),
(118, 'Ms. Lê Bích Thủy                       ', '123456', 'minhbinhduong@fptnet.com.vn', '903986298', 0, 0, 1573403916),
(119, 'Mr. Lê Doãn Quốc Hoàn                 ', '123456', 'dungton@hcm.vnn.vn', '914040201', 0, 0, 1573403916),
(120, 'Ms. Lê Thanh Mỹ                    ', '123456', 'nguyenduonghuynh@hcm.vnn.vn', '962520079', 0, 0, 1573403916),
(121, 'Ms. Lê Thị Thái                       ', '123456', 'leanhkiet@mail.com', '983770593', 0, 0, 1573403916),
(122, 'Mr. Nguyễn Văn Hùng                ', '123456', 'ttnhlac@hcm.vnn.vn', '903024530', 0, 0, 1573403916),
(123, 'Mr. Lê Minh Tiến                      ', '123456', 'Artglass@hcm.vnn.vn', '913655191', 0, 0, 1573403916),
(124, 'Ms. Lê Thị Nghính                ', '123456', 'buss7979@yahoo.com', '38322755', 0, 0, 1573403916),
(125, 'Ms. Nguyễn Thị Ngọc Anh              ', '123456', 'wind@bdvn.vnd.net', '918748050', 0, 0, 1573403916),
(126, 'Ms. Nguyễn Ngọc Quyên             ', '123456', 'savidecor@fmail.vnn.vn', '913974999', 0, 0, 1573403916);

--
-- Bẫy `user`
--
DELIMITER $$
CREATE TRIGGER `ngaytaouser` BEFORE INSERT ON `user` FOR EACH ROW BEGIN
  SET NEW.createdate = UNIX_TIMESTAMP();
END
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `type_item`
--
ALTER TABLE `type_item`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `type_item`
--
ALTER TABLE `type_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_item` (`id`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
