-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2020 lúc 11:06 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tourdulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbinhluan` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `noidung` text NOT NULL,
  `idtour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbinhluan`, `hoten`, `noidung`, `idtour`) VALUES
(1, 'Tiêu Thần', 'Rất sang trọng, đẹp...', 1),
(2, 'Tiêu Thần', 'Sẽ trở lại...', 1),
(3, 'Tiêu Soái', 'Có chút thú dị', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `iddanhgia` int(11) NOT NULL,
  `idtour` int(11) NOT NULL,
  `sosao` int(1) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`iddanhgia`, `idtour`, `sosao`) VALUES
(1, 1, 5),
(2, 1, 4),
(3, 1, 2),
(4, 3, 5),
(5, 3, 5),
(6, 3, 5),
(7, 2, 3),
(8, 2, 2),
(9, 2, 5),
(10, 2, 4),
(11, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `idlienhe` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`idlienhe`, `hoten`, `sdt`, `email`, `noidung`) VALUES
(2, 'Test', '05642', 'test@gmail.com', 'Xin chào các  bạn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `taikhoan` varchar(20) NOT NULL,
  `matkhau` varchar(30) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`taikhoan`, `matkhau`, `hoten`, `avatar`) VALUES
('admin', 'system', 'Tiêu Thần', 'https://i1.17173cdn.com/2fhnvk/YWxqaGBf/outcms/KjVEWDbkuaCmAzu.jpg'),
('duongtam', 'system', 'Đường Tam', 'https://i.pinimg.com/474x/4a/32/dc/4a32dc43544e7e3d16c937682533cab1.jpg'),
('tieuvu', 'system', 'Tiểu Vũ', 'https://i.pinimg.com/736x/e3/7c/9f/e37c9f9bec43214c6a04e2b26c3f09a9.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourdexuat`
--

CREATE TABLE `tourdexuat` (
  `idtour` int(11) NOT NULL,
  `hinhanhdattrung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tourdexuat`
--

INSERT INTO `tourdexuat` (`idtour`, `hinhanhdattrung`) VALUES
(3, 'https://vcdn-dulich.vnecdn.net/2017/09/08/12-9724-1504865082.jpg'),
(4, 'https://tinviettravel.com.vn/uploads/tours/2019_10/mui-ca-mau.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourdulich`
--

CREATE TABLE `tourdulich` (
  `idtour` int(11) NOT NULL,
  `tentour` varchar(50) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `thoigian` varchar(11) NOT NULL,
  `mota` text NOT NULL,
  `hinhanh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tourdulich`
--

INSERT INTO `tourdulich` (`idtour`, `tentour`, `luotxem`, `thoigian`, `mota`, `hinhanh`) VALUES
(1, 'TOUR Bình Phước', 100, '26/11/2020', 'Chuyện nấu ăn dường như là \"địa ngục\" đối với rất nhiều người, và các tình trạng như nấu lúc sống lúc chín, thịt cháy, rau héo nát, đứt tay... hoàn toàn có thể xảy ra. Thế nhưng, bạn có từng nghĩ, nếu \"học lỏm\" được các mẹo vặt nấu ăn đơn giản từ chính các đầu bếp nhà hàng thì sẽ thế nào không?\r\n\r\nCác mẹo vặt ấy có ngay ở đây rồi, hãy thử áp dụng ngay thôi!\r\n\r\n1. Cách nướng thịt nhanh, chín đều và ngon hơn\r\nAi hay nướng thịt chắc chắn từng gặp tình trạng miếng thịt bị sống ở giữa nếu chưa nướng kỹ. Để tránh tình trạng này, hãy áp dụng cách dưới đây.\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 1.\r\n2. Cắt bánh kem không bị dính dao\r\nCắt bánh bằng dao mà bị dính nhiều kem hay bánh thì vữa lãng phí, vừa khó rửa dao mà còn dễ làm vấy bẩn ra những đồ vật khác. Thế nên, đừng quên làm việc sau khi dùng dao cắt bánh.\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 3.\r\n3. Hạn chế tai nạn khi sử dụng dao nấu ăn\r\nSử dụng dao trong quá trình nấu ăn sẽ khó tránh khỏi tình trạng trơn do dính nước, tuột tay gây đứt tay. Để hạn chế tình trạng này, các bạn hãy buộc một vài sợi nịt (chun) ở chuôi dao.\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 5.\r\n4. Cách chiên xúc xích chín đều và ngon hơn\r\nChỉ cần làm thêm thao tác này trước khi nướng xúc xích, chiếc xúc xích của chúng ta sẽ ngon hơn rất nhiều đó!\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 7.\r\n5. Kiểm tra xem trứng còn tươi không\r\nCách kiểm tra trứng này có thể xác định chính xác hơn, giúp bạn tìm ra những quả trứng tươi nhất để nấu ăn.\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 9.\r\n6. Bảo quản bánh kem\r\nKhi ăn bánh kem, bánh sinh nhật không hết, chúng ta thường để trong tủ lạnh để bảo quản. Điều đó khiến cho bề mặt bánh bị cắt ra rất nhanh khô. Các bạn hãy lấy một lát bánh mì gối \"chặn\" lại rồi dùng tăm cố định, phần bánh kem sẽ không bị khô nữa.\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 11.\r\n7. Căn số phút luộc trứng để có độ chín như ý\r\nHọc lỏm ngay bí quyết luộc trứng này thì muốn ăn trứng lòng đào cỡ nào cũng được nhé!\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 13.\r\n8. Cách giữ rau tươi lâu\r\nChỉ nhờ một miếng giấy bạc cũng giúp rau tươi lâu hơn một cách dễ dàng.\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 15.\r\n9. Học cách nướng thịt xông khói hoàn hảo\r\nNguyên tắc hoàn hảo để nướng thịt xông khói ngon nhất chính là đây.\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 17.\r\n10. Cách hâm nóng pizza \"chuẩn\"\r\nPizza hâm lại thường dễ bị khô và kém ngon so với lúc mới ra lò. Hãy làm cách này thì pizza dù có hâm lại vẫn cứ ngon như mới này.\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 19.\r\n11. Cắt bít tết thế nào mới chuẩn?\r\nĂn bít tết sang chảnh đúng chuẩn nhà hàng thì phải biết cách cắt đúng bạn nhé!\r\n\r\n11 mẹo vặt hữu ích được học lỏm từ các đầu bếp nhà hàng - Ảnh 21.\r\n', 'https://i.imgur.com/G4aP34A.jpg'),
(2, 'TOUR Đà Nẵng', 1000, '11/12/2020', '<h2>Khi chế biến mướp, nhiều người thường gặp t&igrave;nh trạng th&acirc;m đen, khiến m&oacute;n mướp x&agrave;o hay canh mướp tr&ocirc;ng thiếu ngon mắt. L&iacute; do l&agrave; v&igrave; đ&atilde; bỏ qu&ecirc;n một bước rất quan trọng.</h2>\r\n\r\n<p><strong>Nguy&ecirc;n liệu:</strong></p>\r\n\r\n<p>- 2 quả mướp</p>\r\n\r\n<p>- Muối</p>\r\n\r\n<p>- Giấm trắng</p>\r\n\r\n<p>- 200g thịt b&ograve;</p>\r\n\r\n<p>- 2 c&acirc;y h&agrave;nh l&aacute;</p>\r\n\r\n<p>- Tỏi băm, h&agrave;nh t&iacute;m băm</p>\r\n\r\n<p>- Lưu &yacute; khi chọn mướp: Bạn n&ecirc;n chọn quả c&ograve;n tươi c&oacute; m&agrave;u xanh l&aacute; c&acirc;y, những quả hơi ngả v&agrave;ng hoặc xanh đậm c&oacute; thể đ&atilde; gi&agrave;. Bạn cũng c&oacute; thể d&ugrave;ng tay bấm nhẹ, nếu thấy mướp gi&ograve;n mềm l&agrave; được.</p>\r\n\r\n<p><strong>C&aacute;ch l&agrave;m:</strong></p>\r\n\r\n<p>- Sau khi gọt vỏ v&agrave; rửa sạch mướp, th&aacute;i th&agrave;nh c&aacute;c miếng vừa ăn. Lấy một b&aacute;t nước sạch, bỏ th&ecirc;m muối v&agrave;o h&ograve;a tan, sau đ&oacute; cho mướp v&agrave;o ng&acirc;m khoảng 5 ph&uacute;t. Đ&acirc;y ch&iacute;nh l&agrave; c&aacute;ch quan trọng để ngăn chặn qu&aacute; tr&igrave;nh bị th&acirc;m đen của mướp.</p>\r\n\r\n<p><img alt=\"Xào mướp cứ mãi bị thâm đen vì bỏ qua bước đơn giản này - 1\" src=\"https://cdn.24h.com.vn/upload/4-2020/images/2020-11-13/1605242655-2e69a258256cd7b1ec5e6a4efea69531.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>&nbsp;Bước ng&acirc;m mướp với muối rất quan trọng để ngăn chặn qu&aacute; tr&igrave;nh bị th&acirc;m hoặc đen của quả mướp.</p>\r\n\r\n<p>- Ướp thịt b&ograve; với nửa muỗng nước tương, 1 muỗng dầu h&agrave;o, nửa muỗng đường, 1 phần h&agrave;nh tỏi băm v&agrave; một &iacute;t dầu m&egrave;. Ướp thịt b&ograve; với dầu m&egrave; vừa l&agrave;m cho thịt khi x&agrave;o sẽ mềm ngon m&agrave; c&ograve;n c&oacute; hương thơm hấp dẫn nữa đấy.</p>\r\n\r\n<p>- L&agrave;m n&oacute;ng chảo, cho dầu ăn v&agrave;o v&agrave; phi 1 phần h&agrave;nh tỏi băm cho thơm. Cho thịt b&ograve; v&agrave;o x&agrave;o, đảo đều tay với lửa lớn đến khi thịt b&ograve; t&aacute;i th&igrave; x&uacute;c ra đĩa để ri&ecirc;ng.</p>\r\n\r\n<p>- Th&ecirc;m 1 th&igrave;a dầu v&agrave;o chảo, phi thơm số h&agrave;nh tỏi băm c&ograve;n lại. Cho mướp v&agrave;o x&agrave;o, n&ecirc;m th&ecirc;m 1 th&igrave;a hạt n&ecirc;m, 1 th&igrave;a ti&ecirc;u hạt.</p>\r\n\r\n<p>- Khi mướp gần ch&iacute;n th&igrave; cho thịt b&ograve; đ&atilde; x&agrave;o sơ v&agrave;o x&agrave;o chung. N&ecirc;m nếm lại v&agrave; cho 1 muỗng dầu h&agrave;o. Khi ch&iacute;n th&igrave; cho h&agrave;nh l&aacute; v&agrave;o trộn đều rồi tắt bếp.</p>\r\n\r\n<p><img alt=\"Xào mướp cứ mãi bị thâm đen vì bỏ qua bước đơn giản này - 2\" src=\"https://cdn.24h.com.vn/upload/4-2020/images/2020-11-13/1605242655-384ba0886df759934a32c3ec4fb4943e.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Mướp x&agrave;o thịt b&ograve; thơm ngon, đủ chất.</p>\r\n\r\n<p>- V&igrave; mướp v&agrave; thịt b&ograve; đều đ&atilde; gần ch&iacute;n n&ecirc;n kh&ocirc;ng cần x&agrave;o th&ecirc;m qu&aacute; l&acirc;u, mướp sẽ bị n&aacute;t v&agrave; thịt b&ograve; sẽ dai.</p>\r\n\r\n<p>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</p>\r\n', 'https://divui.com/blog/wp-content/uploads/2018/10/111111.jpg'),
(3, 'TOUR Hà Nội', 50, '10/10/2014', '<h2>D&ugrave; l&agrave; khoai lang hay bất kỳ loại củ n&agrave;o đi chăng nữa, nếu kh&ocirc;ng muốn rơi v&agrave;o cảnh mua phải đồ hư, hỏng, thối, chắc chắn chị em n&agrave;o cũng cần biết th&ecirc;m một số mẹo vặt.</h2>\r\n\r\n<p>Khoai lang tuy ngon nhưng khi mua nhiều người kh&ocirc;ng biết c&aacute;ch chọn. Khoai thường được chất th&agrave;nh &ldquo;n&uacute;i&rdquo;, khiến nhiều người hoang mang kh&ocirc;ng biết n&ecirc;n chọn củ n&agrave;o cho ngon n&ecirc;n đ&agrave;nh mua đại. Tr&ecirc;n thực tế c&oacute; một số mẹo để chọn mua khoai lang, chị em c&oacute; thể tham khảo sau đ&acirc;y.</p>\r\n\r\n<p><img alt=\"Chọn mua khoai lang chuẩn ngon, chỉ cần nhìn vào 4 đặc điểm này - 1\" src=\"https://cdn.24h.com.vn/upload/4-2020/images/2020-11-09/Chon-mua-khoai-lang-chuan-ngon-chi-can-nhin-vao-4-dac-diem-nay-1-1604902389-797-width936height624.jpeg\" style=\"width:660px\" /></p>\r\n\r\n<p>Khoai lang tuy ngon nhưng khi mua nhiều người kh&ocirc;ng biết c&aacute;ch chọn.</p>\r\n\r\n<p><strong>K&iacute;ch thước</strong></p>\r\n\r\n<p>Khoai lang c&oacute; nhiều h&igrave;nh dạng kh&aacute;c nhau, khi mua n&ecirc;n chọn khoai c&oacute; th&acirc;n thon, d&agrave;y ở giữa v&agrave; hai đầu nhọn. Khoai như vậy sẽ dễ ch&iacute;n, chất dinh dưỡng v&agrave; m&ugrave;i vị cũng cao hơn hẳn. Nếu nh&igrave;n thấy khoai c&oacute; h&igrave;nh d&aacute;ng kh&aacute;c th&igrave; kh&ocirc;ng n&ecirc;n chọn, phần lớn nguy&ecirc;n nh&acirc;n l&agrave; khoai thiếu chất dinh dưỡng, dễ c&oacute; nhiều s&acirc;u bệnh b&ecirc;n trong.</p>\r\n\r\n<p><strong>Lớp vỏ</strong></p>\r\n\r\n<p>Khi chọn khoai, ch&uacute;ng ta n&ecirc;n chọn những củ c&oacute; bề mặt nhẵn, kh&ocirc;ng bị trầy xước, m&agrave;u sắc s&aacute;ng. Khoai c&agrave;ng đẹp mắt, trơn nhẵn th&igrave; h&agrave;m lượng tinh bột c&agrave;ng cao, vị rất ngon. Nếu thấy lớp vỏ khoai b&ecirc;n ngo&agrave;i bị rỗ, kh&ocirc;ng đều m&agrave;u, c&oacute; vết s&acirc;u, đốm đen, c&oacute; nghĩa l&agrave; khoai để qu&aacute; l&acirc;u, kh&ocirc;ng c&ograve;n tươi.</p>\r\n\r\n<p>Khoai lang c&oacute; đốm n&acirc;u, đen c&oacute; thể đ&atilde; bị biến chất, khi gặp những củ khoai lang như vậy d&ugrave; b&aacute;n rẻ đến đ&acirc;u ch&uacute;ng ta cũng kh&ocirc;ng n&ecirc;n mua. Thậm ch&iacute; ăn v&agrave;o rất dễ khiến cho cơ thể kh&oacute; chịu.</p>\r\n\r\n<p>Nếu lớp vỏ c&oacute; bị trầy xước nhẹ, n&ecirc;n ăn c&agrave;ng sớm c&agrave;ng tốt, kh&ocirc;ng bảo quản l&acirc;u ng&agrave;y được. Nếu c&oacute; vết cắt ngang tr&ecirc;n bề mặt khoai c&agrave;ng kh&ocirc;ng n&ecirc;n mua, n&oacute; rất dễ bị nhiễm khuẩn, trong thời gian ngắn sẽ xuất hiện nấm mốc, thối rữa.</p>\r\n\r\n<p>Ngo&agrave;i ra, nếu gặp những củ khoai lang đ&atilde; nảy mầm cũng kh&ocirc;ng n&ecirc;n mua. Khi khoai lang mọc mầm, n&oacute; sẽ tự ti&ecirc;u hao chất dinh dưỡng, tuy vẫn ăn được nhưng m&ugrave;i vị v&agrave; dinh dưỡng k&eacute;m hơn rất nhiều.</p>\r\n\r\n<p><strong>Ngửi m&ugrave;i</strong></p>\r\n\r\n<p>Khoai lang tươi c&oacute; m&ugrave;i thơm nhẹ, c&ograve;n khoai lang hư sẽ c&oacute; m&ugrave;i kh&eacute;t, mốc, thối.</p>\r\n\r\n<p><strong>Sờ nắn</strong></p>\r\n\r\n<p>B&oacute;p mạnh v&agrave;o củ khoai, nếu thấy n&oacute; cứng th&igrave; n&ecirc;n mua, c&ograve;n ngược lại nếu mềm, nhăn nheo, tuyệt đối kh&ocirc;ng n&ecirc;n mua. Bạn c&oacute; thể d&ugrave;ng m&oacute;ng tay m&oacute;c một t&iacute; ở 2 đầu, nếu thấy c&oacute; mủ trắng chảy ra, chứng tỏ khoai đặc biệt tươi.</p>\r\n', 'https://s3-ap-southeast-1.amazonaws.com/mytour-static-file/upload_images/Image/Location/20_7_2016/7/cam-nang-du-lich-ha-noi-mytour-1.jpg'),
(4, 'a', 0, '05/12/2020', 'ahihi', 'https://tinviettravel.com.vn/uploads/tours/2019_10/mui-ca-mau.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbinhluan`),
  ADD KEY `idtour` (`idtour`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`iddanhgia`),
  ADD KEY `idtour` (`idtour`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`idlienhe`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`taikhoan`);

--
-- Chỉ mục cho bảng `tourdexuat`
--
ALTER TABLE `tourdexuat`
  ADD PRIMARY KEY (`idtour`),
  ADD KEY `idtour` (`idtour`);

--
-- Chỉ mục cho bảng `tourdulich`
--
ALTER TABLE `tourdulich`
  ADD PRIMARY KEY (`idtour`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbinhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `iddanhgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `idlienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tourdulich`
--
ALTER TABLE `tourdulich`
  MODIFY `idtour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idtour`) REFERENCES `tourdulich` (`idtour`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`idtour`) REFERENCES `tourdulich` (`idtour`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tourdexuat`
--
ALTER TABLE `tourdexuat`
  ADD CONSTRAINT `tourdexuat_ibfk_1` FOREIGN KEY (`idtour`) REFERENCES `tourdulich` (`idtour`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
