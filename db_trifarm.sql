-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2022 lúc 09:49 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_trifarm`
--
DROP DATABASE IF EXISTS `db_trifarm`;
CREATE DATABASE `db_trifarm` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_trifarm`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_category`
--

INSERT INTO `tb_category` (`id`, `name`, `img`) VALUES
(1, 'Trái cây', 'trai_cay.png'),
(2, 'Rau củ', 'rau_cu.png'),
(3, 'Trứng', 'trung.png'),
(4, 'Gạo', 'gao.png'),
(5, 'Mì, bún khô', 'mi.png'),
(6, 'Trà', 'tra.png'),
(7, 'Cà phê', 'caphe.png'),
(8, 'Tiêu, Điều', 'tieu.png'),
(9, 'Bơ, Sữa, phô mai', 'sua.png'),
(10, 'Trái cây sấy', 'trai_cay_say.png'),
(11, 'Mứt', 'mut.png'),
(12, 'Rượu', 'ruou.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_product`
--

CREATE TABLE IF NOT EXISTS `tb_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `star` int(2) NOT NULL,
  `review` int(6) NOT NULL,
  `sold` int(6) NOT NULL,
  `unit` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `old_price` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_product`
--

INSERT INTO `tb_product` (`id`, `name`, `desc`, `img`, `price`, `location`, `star`, `review`, `sold`, `unit`, `old_price`, `id_category`) VALUES
(1, 'Xoài cát Hoà Lộc', 'Xoài cát Hòa Lộc là loại xoài đặc sản nổi tiếng của vùng đồng bằng sông Cửu Long, một trong những loại trái cây chủ lực của Tiền Giang. Xoài cát Hòa Lộc là loại trái cây đặc sản của tỉnh Tiền Giang, và là sản phẩm trái cây đầu tiên của vùng đồng bằng sông Cửu Long được cấp bảo hộ chỉ dẫn địa lý.', 'https://amthuc.weba.vn/shop/images/amthuc/product/xoaikeo.png', 18000, 'Việt Nam', 4, 100, 500, '500g~1kg', 22000, 1),
(2, 'Thanh long ruột đỏ', 'Thanh long ruột đỏ được lòng rất nhiều người bởi màu sắc bắt mắt, vị ngọt đậm đà. Hàm lượng dinh dưỡng của thanh long loại ruột đỏ nhiều gấp đôi thanh long loại ruột trắng. Thanh long ruột đỏ có vị ngọt, mọng nước, lớp thịt trắng gần vỏ chua nhẹ không đáng kể.', 'https://amthuc.weba.vn/shop/images/amthuc/product/thanhlong.png', 25000, 'Việt Nam', 4, 87, 983, '500g~1kg', 30000, 1),
(3, 'Nho xanh Phan Rang', 'Không chỉ có hương vị thơm ngon mà Nho xanh Phan Rang còn là một loại trái cây bổ dưỡng. Thường xuyên ăn nho xanh có tác dụng tăng cường sức đề kháng, chống lão hóa, hỗ trợ tim mạch, có tác dụng đào thải độc tố... hiệu quả nên rất thích hợp bồi bổ người ốm yếu hay những ai muốn giữ vóc dáng và làn da.', 'https://product.hstatic.net/1000211685/product/upload_09a775b9dc654c65afeaa3fcf20a5779.jpg', 130000, 'Việt Nam', 3, 99, 341, '500g~1kg', 150000, 1),
(4, 'Dưa gang', 'Dưa gang hay còn có tên gọi khác là dưa bở do Organic phân phối, được lựa chọn từ những trái dưa chất lượng tại các trang trại sạch, đảm bảo vệ sinh an toàn thực phẩm. Loại dưa này cho thịt quả mềm xốp, dễ gọt vỏ, thái miếng hay xay sinh tố. Để giải nhiệt mùa hè, bạn có thể dùng loại quả này để dầm đường, làm kem hay xay sinh tố đều có tác dụng rất hữu hiệu', 'https://product.hstatic.net/1000211685/product/upload_77ef96b45848432caca7f6c68a8110c9.jpg', 90000, 'Việt Nam', 5, 78, 991, '500g~1kg', 130000, 1),
(5, 'Măng cụt', 'Măng cụt với hương vị chua chua ngọt ngọt, thanh mát đầy lôi cuốn và kích thích là loại trái cây không thể bỏ qua trong mùa hè này. Không chỉ mang đến nhiều công dụng cho sức khoẻ mà còn là \"thần dược\" cho nhan sắc của phụ nữ. Măng cụt thích hợp để ăn trực tiếp, giải khát cho ngày nóng nực', 'https://cdn.tgdd.vn/Products/Images/8788/239401/bhx/mang-cut-tui-1kg-8-10-trai-202207042041380519.jpg     ', 100000, 'Việt Nam', 2, 109, 321, '500g~1kg', 150000, 1),
(6, 'Chuối', 'Loại chuối được nhiều khách hàng ưa chuộng. Chuối chứa nhiều chất dinh dưỡng như kali, chất xơ, vitamin, ... nên chuối có tác dụng tốt cho sức khoẻ như hỗ trợ giảm cân, hỗ trợ sức khoẻ tim mạch, cải thiện sức khoẻ của thận, ...Cam kết đúng khối lượng, bao bì kín đáo, an toàn và bảo đảm hợp vệ sinh.', 'https://cdn.tgdd.vn/Products/Images/8788/272140/bhx/chuoi-gia-giong-nam-my-hop-1kg-6-7-trai-202209121642568468.jpg       ', 25000, 'Việt Nam', 4, 56, 456, '500g~1kg', 40000, 1),
(7, 'Trứng gà ', 'Hộp 6 trứng gà tươi, chất lượng, trứng to. Trứng được đóng trong hộp nhựa trong giúp bảo quản và vận chuyển trứng không bị móp, bể, hư.', 'https://cdn.tgdd.vn/Products/Images/8783/226998/bhx/hop-6-trung-ga-ta-tfood-6-trung-202112271033524364.jpg       ', 18000, 'Việt Nam', 3, 98, 761, '6 quả', 25000, 3),
(8, 'Trứng cút', 'Trứng cút tròn, đều. Trứng cút thì bạn có thể luộc chín chế biến thành một số món ăn như: trứng cút hun khói, xíu mại trứng cút,..', 'https://cdn.tgdd.vn/Products/Images/8783/219097/bhx/hop-30-trung-cut-tuoi-tfood-30-trung-202112271006004018.jpg', 27000, 'Việt Nam', 4, 168, 243, '6 quả', 35000, 3),
(9, 'Trứng vịt', 'Trứng vịt 4K Farm được sản xuất ở trang trại sạch, chất lượng, nên khách hàng có thể yên tâm về sản phẩm. Hộp 10 trứng vịt 4K Farm hộp trứng to, sạch, đảm bảo tốt cho sức khoẻ cả nhà. Trứng có kích thước khoảng 60-70g/trái.', 'https://cdn.tgdd.vn/Products/Images/8783/234812/bhx/hop-10-trung-vit-xanh-4kfarm-202208201622074650.jpg', 30000, 'Việt Nam', 5, 50, 89, '6 quả', 45000, 3),
(10, 'Trứng ngỗng', 'Trứng ngỗng lành tính. Do đó, trứng ngỗng rất tốt đối với sức khỏe con người đặc biệt với các bà bầu, mẹ bầu có thể ăn vào bất kỳ thời gian nào trong thai kỳ. Không cần phải băn khoăn về tác động của chúng đối với sức khỏe của mẹ hay sự phát triển của bé.', 'https://64.media.tumblr.com/tumblr_m16akyWIXI1rnsyxno1_1280.png', 30000, 'Việt Nam', 4, 77, 401, '6 quả', 38000, 3),
(11, 'Trứng muối', 'Hộp 4 trứng vịt muối được đóng gói và bảo quản theo những tiêu chuẩn nghiêm ngặt về vệ sinh và an toàn thực phẩm, đảm bảo về chất lượng của thực phẩm, xuất xứ rõ ràng. Trứng vịt to tròn, đều. Đây là sản phẩm cỏ thể ăn liền, có thể ăn với cơm hoặc ăn không, ...', 'https://cdn.tgdd.vn/Products/Images/8783/222975/bhx/hop-4-trung-vit-muoi-tfood-4-trung-202112271027398426.jpg', 35000, 'Việt Nam', 5, 44, 671, '6 quả', 50000, 3),
(12, 'Xà lách xoong Đà Lạt', 'Rau xà lách xoong Đà Lạt có hương vị tươi mát, ngon ngọt được nhiều người tiêu dùng ưa chuộng. Trong xà lách xoong có chứa hàm lượng chất xơ cao, dinh dưỡng giúp tăng cường sức khỏe, khả năng chống oxi hóa tốt cũng như hỗ trợ chị em trong chăm sóc sắc đẹp', 'https://cdn.tgdd.vn/Products/Images/8820/271509/bhx/xa-lach-xoong-da-lat-bo-500g-202205181608274117.jpg        ', 20000, 'Việt Nam', 3, 102, 200, '300g~500g', 32000, 2),
(13, 'Rau muống Organic', 'Giá trị dinh dưỡng của Rau muống đối với sức khoẻ: Trong nhiều bữa cơm gia đình của người Việt, thường xuất hiện các món chế biến từ rau muống như: rau muống luộc, rau muống xào, rau muống làm gỏi, nấu cháo thịt rau muống. Rau muống chứa vitamin C, E, chất béo, khoáng chất như sắt, kẽm, magie.', 'https://product.hstatic.net/1000126467/product/05479276_93c5d547e9244acaa8eef1a38b426014_a4905b67a33b431a8928b58ce2b75325_master.jpg', 20000, 'Việt Nam', 4, 47, 612, '300g~500g', 27000, 2),
(14, 'Cải xanh', 'Cải bẹ xanh baby được trồng bằng kỹ thuật canh tác chuyên biệt, có thời gian thu hoạch ngắn hơn 1 nửa so với thông thường, là rau non nên có độ giòn, ngọt hơn rất nhiều. Giữ được nguyên vẹn các giá trị dinh dưỡng.', 'https://cdn.tgdd.vn/Products/Images/8820/223329/bhx/cai-be-xanh-baby-goi-300g-202205181634539404.jpg', 12000, 'Việt Nam', 5, 89, 308, '300g~500g', 20000, 2),
(15, 'Cà rốt Đà Lạt', 'Cà rốt Đà Lạt là một loại củ rất quen thuộc trong các món ăn của người Việt. Cà rốt có hàm lượng chất dinh dưỡng và vitamin A cao, được xem là nguyên liệu cần thiết cho các món ăn dặm của trẻ nhỏ, giúp trẻ sáng mắt và cung cấp nguồn chất xơ dồi dào', 'https://cdn.tgdd.vn/Products/Images/8785/271572/bhx/ca-rot-da-lat-tui-500g-2-5-cu-202205201603295625.jpg', 20000, 'Việt Nam', 5, 666, 981, '500g~1kg', 34000, 2),
(16, 'Củ cải trắng', 'Củ cải trắng trồng ở Đà Lạt là một loại rau củ vừa có thể dùng để làm thực phẩm, vừa có thể sử dụng để làm dầu hạt cải. Củ cải trắng chứa rất nhiều vitamin và khoáng chất, tốt cho cơ thể.', 'https://cdn.tgdd.vn/Products/Images/8785/271469/bhx/cu-cai-trang-tui-500g-2-5-cu-202205201700108859.jpg', 15000, 'Việt Nam', 4, 99, 200, '500g~1kg', 30000, 2),
(17, 'Trà xanh ', 'Từ những cây trà có tuổi đời hàng trăm năm do nhiều thế hệ từ xa xưa để lại hoàn toàn tự nhiên hầu như không có sự can thiệp của con người. Trà xanh có màu nước xanh óng ánh ánh vàng, phảng phất hương thơm của núi rừng Tây Bắc, vị thanh, ngọt hậu giữ lâu trong cổ họng.', 'https://cdn.tgdd.vn/Products/Images/2385/224780/bhx/tra-xanh-huu-co-vherbs-shan-tuyet-co-thu-49g-202007230825591357.jpg', 56000, 'Nhật Bản', 4, 91, 206, '200g~500g', 65000, 6),
(18, 'Cà phê nguyên hạt rang mộc The JUN Passion', 'Từ những hạt cà phê ngon nhất tại vùng đất đỏ bazan kết hợp với công thức rang xay mộc độc quyền, có thể vừa pha phin, vừa pha máy. Ngụm đầu của ly cà phê The JUN Passion có thể đọng lại vị đắng đậm cùng một chút chua thanh đặc trưng của cà phê nguyên chất trên đầu lưỡi', 'https://cdn.tgdd.vn/Products/Images/2883/207792/bhx/ca-phe-rang-xay-moc-the-jun-passion-345g-202001080955013927.jpg', 180000, 'Brazil', 4, 56, 210, '500g~1kg', 240000, 7),
(19, 'Cà phê rang xay mộc The JUN Challenge', 'Sản phẩm là sự hòa quyện giữa vị của các hạt cà phê cùng với công thức ủ độc quyền từ các chuyên gia của The JUN chính là điểm đặc biệt và khác biệt của cà phê The JUN đối với các sản phẩm cà phê khác.', 'https://cdn.tgdd.vn/Products/Images/2883/207793/bhx/ca-phe-rang-xay-moc-the-jun-challenge-345g-202001080954054227.jpg', 180000, 'Brazil', 4, 81, 150, '500g~1kg', 250000, 7),
(20, 'Bột trà xanh Matcha Natsu', 'Bột trà xanh Matcha được nhập khẩu 100% từ Nhật Bản, sản phẩm là tự nhiên và nguyên chất, không chứa bất kì hóa chất hay hương liệu nào khác', 'https://matchashop.vn/upload/images/bot-tra-xanh-matcha-natsu-1kg.jpg', 1100000, 'Nhật Bản', 3, 93, 189, '200g~500g', 135000, 6),
(21, 'Trái Cây Khô Hàn Quốc 200gr', 'Trái cây khô hỗn hợp là nguyên liệu làm bánh được sử dụng rộng rãi trong các món bánh, có mùi vị thơm ngon và giàu chất dinh dưỡng, đảm bảo vệ sinh an toàn thực phẩm.', 'https://product.hstatic.net/1000186075/product/8809319240341_9f5410dc36514bb180c1718e0a82b6bf_master.jpg', 65000, 'Hàn Quốc', 3, 41, 192, '200g', 80000, 10),
(22, 'Mít sấy', ' Mít rất giàu các vitamin nhóm B (B1, B2, B6), vitamin C rất tốt cho hệ tiêu hóa và phụ nữ mang thai. Mít chứa rất ít lượng chất béo bão hòa, cholesterol và natri giúp tăng cường hệ thống miễn dịch, tốt cho tim mạch. Đường thiên nhiên (fructose và sucrose) trong mít giúp bổ sung năng lượng cho cơ thể.', 'https://cf.shopee.vn/file/ead70e7800660bdaa19efe3455425dc7', 70000, 'Việt Nam', 3, 41, 100, '300g~500g', 88000, 10),
(23, 'Sầu Riêng Sấy Giòn', 'Sầu riêng sấy hương vị thơm ngon, bổ dưỡng, nguyên chất có vị ngọt nhẹ rất đặc trưng, béo vừa chứ không ngậy pha lẫn vào nhau tuyệt vời đến độ khó diễn tả khiến nhiều người thích đến phát nghiện, hoàn toàn không sử dụng hóa chất và phụ gia thực phẩm. Sầu riêng sấy được đóng gói tiện dụng, thuận lợi mang theo mỗi khi đi xa hay dành làm quà tặng vì nó rất lạ, ngon, mang hương vị thuần Việt', 'http://traicayhatsay.com/upload/images/sau-rieng-say-dat-biet-200g-cua-hang-trai-cay-hat-say.jpg', 220000, 'Việt Nam', 3, 22, 98, '300g~500g', 300000, 10),
(24, 'Mứt dâu', 'Loại trái cây này ích lợi cho sức khoẻ vì dồi dào chất chống ôxy hoá (giúp giữ ổn định hệ thống tim mạch), chất chống viêm (ngừa ung thư hữu hiệu), giàu vitamin C (giúp tăng sức đề kháng), magiê (giúp giữ gìn sức khoẻ xương, răng), kali (bảo vệ cơ bắp, hệ thần kinh, giảm nguy cơ huyết áp cao)', 'https://cf.shopee.vn/file/d654e572fd60f05f429dce78175d067e', 80000, 'Việt Nam', 5, 45, 89, '300g~500g', 110000, 11),
(25, 'Khoai lang vàng sấy dẻo', 'Có rất nhiều loại rau củ có thể được chế biến thành dạng chip và ăn cũng giòn như bí đỏ, cà rốt, củ cải đường, củ cải đỏ…nhưng thậm chí còn thơm ngon và giàu dinh dưỡng hơn. Một trong số đó không thể không nhắc tới khoai lang sấy giòn rất thơm ngon và hấp dẫn lắm đấy nhé, đảm bảo cả gia đình bạn sẽ thích thú cho mà xem.', 'https://vn-live-05.slatic.net/p/37a362afe413b099d7871d41eb924eca.png_525x525q80.jpg', 70000, 'Hàn Quốc', 5, 48, 100, '300g~500g', 98000, 10),
(26, 'Sữa thanh trùng', 'Được chế biến từ sữa bò tươi nguyên chất từ cao nguyên Lâm Đồng - nơi có nguồn nguyên liệu sữa tươi chất lượng cao được vắt từ những giống bò sữa tốt nhất trong điều kiện khí hậu trung bình từ 15 - 25oC và độ cao trên 1000 m.', 'https://suadalat.com/wp-content/uploads/2021/09/STTT-KD-950ml-1.jpg', 12000, 'Việt Nam', 5, 99, 249, '950ml', 18000, 9),
(27, 'Sữa chua lên men đào', 'Với thành phần chủ yếu từ sữa bò tươi nguyên chất Dalatmilk và nước cốt đào. Bổ sung vitamin C cho cơ thể, mang lại sự sảng khoái mà còn tăng cường sức đề kháng cho cơ thể của bạn với lợi khuẩn LH - BO2 (lợi khuẩn kích thích quá trình hấp thu chất dinh dưỡng cho cơ thể).', 'https://product.hstatic.net/1000282430/product/sua-chua-an-mut-dao-hu-100g_87d548dcb6884842bc2758eecd3b4f1c.jpg', 10000, 'Việt Nam', 4, 88, 300, '100g', 17000, 9),
(28, 'Phô mai Bottega Zelachi Gouda', 'Là sản phẩm phô mai có xuất xứ từ Hà Lan, được làm từ thành phần tự nhiên đến từ thương hiệu phô mai Bottega Zelachi. Phô mai Bottega Zelachi Gouda gói 100g có vị ngọt mặn, có thể dùng trực tiếp với trái cây, bánh mì, bánh crackers, kẹp với sandwich, có thể dùng để làm sốt hoặc súp.', 'http://product.hstatic.net/1000282430/product/upload_7d45246b8280481ba411fda90c468904_grande.jpg', 50000, 'Hà Lan', 4, 79, 341, '100g~500g', 63000, 9),
(29, 'Phô mai lát Anchor Cheddar', 'Sản phẩm phô mai của thương hiệu Anchor có hương vị thơm ngon, lưu giữ được hương vị tinh túy từ sữa, an toàn cho sức khoẻ của người dùng. Sản phẩm Phô mai lát Anchor Cheddar gói 200g có vị béo, mặn được làm từ 100% nguyên liệu sạch từ Ba Lan, có thể dùng để chế biến nhiều món ăn.', 'https://exclusivelyfood.co.za/wp-content/uploads/2020/03/ALFALFA-CHEDDAR-CHEESE-PKg.jpg', 75000, 'Pháp', 4, 55, 298, '100g~500g', 80000, 9),
(30, 'Gạo thơm A An ST21 ', 'Gạo thơm A An ST21 túi 5kg được thu hoạch từ giống lúa ST21 tự nhiên. Gạo A An được sản xuất trên dây chuyền hiện đại, cam kết không đấu trộn, không chất tạo mùi, mang lại sản phẩm gạo chất lượng, an toàn cho sức khoẻ người dùng', 'https://cdn.tgdd.vn/Products/Images/2513/223652/bhx/gao-thom-a-an-st21-tui-5kg-202006061602569575.jpg', 160000, 'Việt Nam', 3, 78, 178, '5kg', 178000, 4),
(31, 'Gạo lứt đỏ Vinh Hiển', 'Giống gạo được tuyển chọn từ vùng trồng gạo nổi tiếng kết hợp với công nghệ sản xuất đạt chuẩn HACCP. Gạo lứt đỏ Vinh Hiển túi 1kg thích hợp cho những người muốn ăn kiêng, giảm cân. Gạo Vinh Hiển chất lượng, an toàn, sạch và không chứa chất kích thích tăng trưởng.', 'https://cdn.tgdd.vn/Products/Images/2513/229221/bhx/gao-lut-do-vinh-hien-tui-1kg-202010171224597621.jpg', 35000, 'Việt Nam', 3, 102, 201, '1kg', 44000, 4),
(32, 'Nếp cái hoa vàng Vinh Hiển', 'Gạo có đặc tính cơm mềm dẻo, thơm ngon. Được canh tác từ nếp cái hoa vàng Bắc, mang đến chất lượng cao. Nếp cái hoa vàng Vinh Hiển túi 1kg dinh dưỡng, an toàn và dẻo. Gạo Vinh Hiển chất lượng, an toàn, sạch và không chứa chất kích thích tăng trưởng.', 'https://cdn.tgdd.vn/Products/Images/2513/227004/bhx/nep-cai-hoa-vang-vinh-hien-tui-1kg-202008150913276084.jpg', 36000, 'Việt Nam', 4, 200, 439, '1kg', 41000, 4),
(33, 'Gạo thơm Neptune ST24', 'Gạo khi nấu cho cơm mềm, dẻo nhiều, ngon miệng tạo cảm giác dễ chịu cho người ăn. Gạo thơm Neptune ST24 túi 5kg là giống lúa ST24 cao cấp của hãng Neptune, được nuôi trồng canh tác theo các quy trình nghiêm ngặt, đảm bảo chất lượng và an toàn đến tay người dùng.', 'https://cdn.tgdd.vn/Products/Images/2513/224495/bhx/gao-thom-neptune-st24-tui-5kg-202006250849282085.jpg', 159000, 'Việt Nam', 5, 189, 349, '5kg', 165000, 4),
(34, 'Gạo Lạc Việt XK51', 'Gạo Lạc Việt là hãng gạo uy tính, nổi tiếng tại thị trường gạo của Việt Nam, được rất nhiều khách hàng tin dùng chọn lựa bởi hương vị thơm ngon, dẻo mềm khó cưỡng. Gạo Lạc Việt XK51 túi 5kg với túi xách tiện dụng, hạt gạo trắng đều cho cơm dẻo, mềm thơm lừng bắt vị cho bữa ăn ngon.', 'https://cdn.tgdd.vn/Products/Images/2513/279509/bhx/gao-lac-viet-xk51-tui-5kg-202205211712336834.jpg', 120000, 'Việt Nam', 5, 99, 210, '5kg', 143000, 4),
(35, 'Rượu Soju 16.9% 360ml', 'Rượu chamisul fresh soju được biết đến là loại rượu tinh khiết nguyên liệu sạch và được lọc sạch qua than tre thông qua các phương pháp tự nhiên. Hương vị tươi mát nhưng những giọt sương được tinh chế qua than tre. Cùng với việc sử dụng than tre hoạt tính tối ưu đã được xử lý vật thể tồn lưu gây say, rượu jinro hàn quốc Chamisul Fresh làm gia tăng hương vị tinh khiết tự nhiên và mang tới một buổi sáng ngày hôm sau vẫn hoàn toàn sảng khoái. ', 'https://salt.tikicdn.com/cache/w1200/ts/product/ee/fc/96/db25bd49043d277ee8d4d731a637bbfa.jpg', 59000, 'Hàn Quốc', 4, 83, 298, '360ml', 65000, 12),
(36, 'Hạt điều vỡ rang muối', 'Hạt điều Bình Phước nổi tiếng, đặc biệt sản phẩm này là loại điều hạt to, thơm ngon. Hạt điều vỡ nhưng vẫn giữ được độ béo ngậy, thơm ngon.', 'https://salt.tikicdn.com/cache/750x750/ts/product/d2/bf/15/d265c517d28344c5adc0c0059197acbb.jpg.webp', 55000, 'Việt Nam', 3, 78, 178, '500g', 60000, 8),
(37, 'Bún khô Long Quan 500g', 'Bún khô từ lâu đã là đặc sản và là niềm tự hào của thủ đô Hà Nội và là một trong những món ăn trứ danh trên bản đồ ẩm thực thế giới', 'https://salt.tikicdn.com/cache/750x750/ts/product/99/5e/f2/0b3b92054478ffe1b5b7246a20c2e7be.png.webp', 37000, 'Việt Nam', 3, 132, 231, '250g', 40000, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
