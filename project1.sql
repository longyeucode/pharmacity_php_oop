-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2023 lúc 08:02 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `FK_id_position` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `name`, `photo`, `address`, `phonenumber`, `email`, `password`, `FK_id_position`) VALUES
(7, 'Admin', 'photo_user/1699600167.jpg', 'Thành Phố Cam Ranh', '0927553664', 'admin@gmail.com', 'thienha10', 1),
(20, 'An Phạm', 'photo_user_new/366024047_4220322088192793_647148246656448150_n.jpg', 'khu phố 1, phường Tân Chánh Hiệp, quận 12, thành phố Hồ Chí Minh', '0927553664', 'Anpnb79@gmail.com', 'thienha10', NULL),
(24, 'Hào sus', 'photo_user/1700040179.jpg', 'Đồng nai', '0927553664', 'haoxaomitom@gmail.com', 'hao123', NULL),
(25, 'Nguyễn Phúc', 'photo_user/1701253642.png', 'số nhà 01 làng quý', '0888203318', 'nguyenphuclong25122004@gmail.com', '25122004', NULL),
(26, 'An Phạm', 'photo_user_new/407279836_870509957781639_2487934270402383048_n.jpg', 'khu phố 1, phường Tân Chánh Hiệp, quận 12, thành phố Hồ Chí Minh', '0927553664', 'anhippo792004@gmail.com', 'an123', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `sum` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id_brand`, `brand_name`) VALUES
(1, 'Pharmacity'),
(2, 'Phano Pharmacy'),
(3, 'Phúc An Khang Pharmacy'),
(4, 'ECO Phamaceuticals'),
(5, 'Mỹ Châu Pharmacy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Thuốc'),
(2, 'Thực phẩm chức năng'),
(3, 'Dụng cụ cá nhân'),
(4, 'Dụng cụ y tế'),
(5, 'Đồ cho em bé'),
(6, 'Đồ cho người già');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `FK_id_product` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `content`, `date`, `FK_id_product`) VALUES
(18, 'An Phạm', 'sản phẩm tốt\r\n', '2023-12-05', 92),
(19, 'An Phạm', 'cũng tạm đc', '2023-12-05', 92);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_news`, `name`, `description`, `date`, `photo`) VALUES
(3, 'Bộ Y tế: COVID-19 và các bệnh có nguy cơ lây nhiễm khác tiếp tục diễn biến phức tạp', 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B, đồng thời ban hành hướng dẫn việc áp dụng các biện pháp phòng, chống dịch COVID-19 phù', '2023-10-31', 'photo_news/news1.jpeg'),
(4, 'Ban Chỉ h222 đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B', 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B, đồng thời ban hành hướng dẫn việc áp dụng các biện pháp phòng, chống dịch COVID-19 phù', '2023-10-31', 'photo_product/12.jpg'),
(5, 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B', 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B, đồng thời ban hành hướng dẫn việc áp dụng các biện pháp phòng, chống dịch COVID-19 phù', '2023-10-31', 'photo_news/news1.jpeg'),
(6, 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B', 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B, đồng thời ban hành hướng dẫn việc áp dụng các biện pháp phòng, chống dịch COVID-19 phù', '2023-10-31', 'photo_news/news1.jpeg'),
(7, 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B', 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B, đồng thời ban hành hướng dẫn việc áp dụng các biện pháp phòng, chống dịch COVID-19 phù', '2023-10-31', 'photo_news/news1.jpeg'),
(8, 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B', 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B, đồng thời ban hành hướng dẫn việc áp dụng các biện pháp phòng, chống dịch COVID-19 phù', '2023-10-31', 'photo_news/news1.jpeg'),
(9, 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B', 'Ban Chỉ đạo Quốc gia phòng, chống dịch COVID-19 thống nhất chuyển bệnh COVID-19 từ bệnh truyền nhiễm nhóm A sang bệnh truyền nhiễm nhóm B, đồng thời ban hành hướng dẫn việc áp dụng các biện pháp phòng, chống dịch COVID-19 phù', '2023-10-31', 'photo_news/news1.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `FK_id_brand` int(100) DEFAULT NULL,
  `FK_id_category` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `photo`, `price`, `description`, `FK_id_brand`, `FK_id_category`) VALUES
(92, 'Sửa tắm Phạm Ngọc Bảo An trong trắng 200ml', 'photo_product/P15553_1_l.webp', '123.123', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 3),
(93, 'Sữa tắm clear a men cao cấp tắm phát sạch luôn', 'photo_product/P03377_3.jpg', '12.000', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 3),
(94, 'xà bông xmen cao cấp ', 'photo_product/P07594_1_l.webp', '10.000', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 3),
(95, 'bàn chải đánh răng cao cấp', 'photo_product/P01953_1_l.webp', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 3),
(96, 'Nước muối sinh lý Natricohydric', 'photo_product/P10766_1_l.webp', '12.2131', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 3),
(97, 'Bao cao su Durex siêu mỏng', 'photo_product/P20099_1_l.webp', '124.2140', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 3),
(98, 'Kem đánh rắng cao cấp', 'photo_product/P15979_1.jpg', '12.2131', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 3),
(99, 'Dầu gió cao cấp siêu ấm', 'photo_product/P17866_1_l.webp', '12.2131', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 3),
(100, 'Thuốc 111', 'photo_product/z4942234373960_8b2e5bd5b4fae3ef8936b25fb746e56b.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 1),
(101, 'thuốc 112', 'photo_product/z4942234380280_7e6e1832a99e75c77469b647cdc29080.jpg', '124.2140', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 1),
(102, 'thuốc 113', 'photo_product/z4942234400942_d7319b594d8596b4483fe5074af2bc8c.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 1),
(103, 'thuốc 114', 'photo_product/z4942234411182_a2a6e9c405064cf6e7bb8db79e2d7fe7.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 1),
(104, 'thuốc 115', 'photo_product/z4942234411183_6096cb8db7a4c11420155d5e587ce326.jpg', '12.2131', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 1),
(105, 'thuốc 116', 'photo_product/z4942234411186_a1e606a7d1d305480726d56c11a6139a.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 1),
(106, 'thuốc 117', 'photo_product/z4942234411187_37d18bf443723dc1c34e0c630378563d.jpg', '124.2140', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 1),
(107, 'thuốc 118', 'photo_product/z4942234411188_155f07389a05f6cc3a5dce29106caba6.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 1),
(108, 'thuốc 119', 'photo_product/z4942234420589_14c832458cddd1a1164e5f803051d661.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 1),
(109, 'thực phẩm chức năng 1', 'photo_product/anh1.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(110, 'thực phẩm chức năng 2', 'photo_product/anh2.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(111, 'thực phẩm chức năng 3', 'photo_product/anh3.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(112, 'thực phẩm chức năng 4', 'photo_product/anh4.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(113, 'thực phẩm chức năng 5', 'photo_product/anh5.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(114, 'thực phẩm chức năng 6', 'photo_product/anh6.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(115, 'thực phẩm chức năng 7', 'photo_product/anh7.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(116, 'thực phẩm chức năng 8', 'photo_product/anh8.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(117, 'thực phẩm chức năng 9', 'photo_product/anh9.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(118, 'thực phẩm chức năng 10', 'photo_product/anh10.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 2),
(119, 'dụng cụ y tế 1', 'photo_product/anh1.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 4),
(120, 'dụng cụ y tế 2', 'photo_product/anh2.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 4),
(121, 'dụng cụ y tế 3', 'photo_product/anh4.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 4),
(122, 'dụng cụ y tế 4', 'photo_product/anh5.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 4),
(123, 'dụng cụ y tế 5', 'photo_product/anh6.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 4),
(124, 'dụng cụ y tế 6', 'photo_product/anh8.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 4),
(125, 'dụng cụ y tế 8', 'photo_product/anh10.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 4),
(126, 'đồ cho trẻ em 1', 'photo_product/bangcanhan.webp', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 5),
(127, 'đồ cho trẻ em 2', 'photo_product/daugoichotreem.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 5),
(128, 'đồ cho trẻ em 3', 'photo_product/keongam.webp', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 5),
(130, 'đồ cho trẻ em 4', 'photo_product/lauluoichotreemm.webp', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 5),
(131, 'đồ cho trẻ em 5', 'photo_product/miendanhasot.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 5),
(132, 'đồ cho trẻ em 6', 'photo_product/nuocruatay.webp', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 5),
(133, 'đồ cho trẻ em 7', 'photo_product/nuocxucmieng.webp', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 5),
(134, 'đồ cho người già 1', 'photo_product/hoathuyetnhatnhat.webp', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 6),
(135, 'đồ cho người già 2', 'photo_product/panadol.jpg', 'đồ cho người già 1', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 6),
(136, 'đồ cho người già 2', 'photo_product/thuốc ăn ngon ngủ ngon.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 6),
(137, 'đồ cho người già 3', 'photo_product/thuốc bổ mắt.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 6),
(138, 'đồ cho người già 4', 'photo_product/thuốc bổ não.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 6),
(140, 'đồ cho người già 5', 'photo_product/thuốc bổ xung canxi.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 6),
(141, 'đồ cho người già 6', 'photo_product/thuốc làm sạch đại tràng.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 6),
(142, 'đồ cho người già 7', 'photo_product/thuốc trị huyết áp.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 6),
(143, 'đồ cho người già 8', 'photo_product/thuốc xương khớp jex.jpg', '122.222', 'Sữa tắm trắng da tinh chất sữa bò E100 nhẹ nhàng làm sạch da và se khít lỗ chân lông, cung cấp dưỡng chất tuyệt vời giúp nuôi dưỡng làn da ẩm mịn tự nhiên mà không gây nhờn rít. Sản phẩm mang lại cho bạn làn da khỏe mạnh, trắ', 1, 6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_position` (`FK_id_position`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_product` (`FK_id_product`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Chỉ mục cho bảng `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_brand` (`FK_id_brand`),
  ADD KEY `FK_id_category` (`FK_id_category`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`FK_id_position`) REFERENCES `position` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`FK_id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`FK_id_brand`) REFERENCES `brand` (`id_brand`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`FK_id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
