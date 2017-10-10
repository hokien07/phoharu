-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2017 at 05:01 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoHaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tieude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlhinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_tintuc`, `tieude`, `urlhinh`, `mota`, `id_user`) VALUES
(58, 'Thá»±c Ä‘Æ¡n Ä‘áº§u tuáº§n to&agrave;n m&oacute;n ngon, láº¡ Ä‘áº£m báº£o cáº£ nh&agrave; ai cÅ©ng m&ecirc;', '1507528396-15075283947398-thumbnail.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;Trá»©ng háº¥p má»m má»‹n, c&aacute; ba sa máº·n m&agrave;, Ä‘áº­m vá»‹ hay canh rau dá»n ngá»t m&aacute;t Ä‘á»u l&agrave; nhá»¯ng...&lt;/span&gt;', 1),
(59, 'Ná»¯ cá»­ nh&acirc;n trÆ°á»ng luáº­t chia sáº» m&acirc;m cÆ¡m chá»‰ 20.000 - 30.000 Ä‘á»“ng g&acirc;y sá»‘t', '1507527109-150752708028261-thumbnail.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;Tháº­t kh&ocirc;ng thá»ƒ tin nhá»¯ng m&acirc;m cÆ¡m c&oacute; Ä‘áº§y Ä‘á»§ thá»‹t, c&aacute;, rau tháº¿ n&agrave;y láº¡i c&oacute; gi&aacute; ráº» Ä‘áº¿n...&lt;/span&gt;', 1),
(60, 'Báº­t m&iacute; c&aacute;ch l&agrave;m báº¯p rang bÆ¡ vá»‹ caramel chanh láº¡ miá»‡ng, ngon kh&ocirc;ng tÆ°á»Ÿng', 'videoicon.png', '&lt;span class=&quot;news-sapo&quot;&gt;Kh&ocirc;ng pháº£i tá»‘n tiá»n ra ngo&agrave;i mua báº¯p rang bÆ¡ Ä‘&acirc;u. Táº¡i sao báº¡n kh&ocirc;ng l&agrave;m má»™t &acirc;u báº¯p rang...&lt;/span&gt;', 1),
(61, 'Nhá»¯ng máº¹o nh&agrave; báº¿p tuyá»‡t vá»i vá»›i t&uacute;i zip kh&ocirc;ng pháº£i ai cÅ©ng biáº¿t', '1507463155-150657792729980-meo-tui-zip.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;Chiáº¿c t&uacute;i zip xuáº¥t hiá»‡n á»Ÿ kháº¯p má»i nÆ¡i, nhÆ°ng n&oacute; c&oacute; nhiá»u c&ocirc;ng dá»¥ng báº¥t ngá» trong nh&agrave; báº¿p...&lt;/span&gt;', 1),
(62, 'Thá»±c Ä‘Æ¡n ngon miá»‡ng, hao cÆ¡m chá»‰ hÆ¡n  60.000 Ä‘á»“ng', '1507391851-150739168347638-thumbnail.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;Nh&igrave;n m&acirc;m cÆ¡m gá»n g&agrave;ng, Ä‘áº¹p máº¯t, láº¡i thÆ¡m ngon háº¥p dáº«n tháº¿ n&agrave;y th&igrave; ai m&agrave; cháº³ng m&ecirc;.&lt;/span&gt;', 1),
(63, 'M&oacute;n Äƒn hot nháº¥t tuáº§n: M&acirc;m cá»— bay &amp;#34;Ä‘á»™c v&agrave; láº¡&amp;#34; khiáº¿n chá»‹ em khen kh&ocirc;ng...', '1507388671-150738821830307-thumbnail.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;Ngo&agrave;i m&acirc;m cá»— Ä‘Æ°á»£c trang tr&iacute; Ä‘á»™c Ä‘&aacute;o, kh&ocirc;ng Ä‘á»¥ng h&agrave;ng th&igrave; tuáº§n n&agrave;y c&ograve;n c&oacute; ráº¥t nhiá»u m&oacute;n Äƒn...&lt;/span&gt;', 1),
(64, 'B&aacute;nh sá»¯a chi&ecirc;n gi&ograve;n thÆ¡m, b&eacute;o ngáº­y ngon m&ecirc; máº©n', 'videoicon.png', '&lt;span class=&quot;news-sapo&quot;&gt;B&aacute;nh sá»¯a chi&ecirc;n vá»›i lá»›p vá» ngo&agrave;i gi&ograve;n rá»¥m, b&ecirc;n trong b&eacute;o ngáº­y, thÆ¡m phá»©c ai Äƒn cÅ©ng th&iacute;ch m&ecirc;.&lt;/span&gt;', 1),
(65, 'Canh thá»‹t g&agrave; náº¥u náº¥m hÆ°Æ¡ng ngá»t thanh, bá»• dÆ°á»¡ng cho ng&agrave;y thu m&aacute;t máº»', '1507390978-150739088287183-thumbnail.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;Canh thá»‹t g&agrave; náº¥u náº¥m hÆ°Æ¡ng ngá»t má»m, bá»• dÆ°á»¡ng háº¥p dáº«n báº¥t cá»© ai Ä‘Æ°á»£c thÆ°á»Ÿng thá»©c m&oacute;n canh...&lt;/span&gt;', 1),
(66, 'Muá»‘n loáº¡i bá» Ä‘á»™c tá»‘ trong thá»‹t, h&atilde;y l&agrave;m theo nhá»¯ng c&aacute;ch sau Ä‘&acirc;y', '1507298163-thumbnail.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;Viá»‡c x&aacute;c Ä‘á»‹nh thá»‹t c&oacute; tá»“n dÆ° thuá»‘c an tháº§n hay kh&ocirc;ng náº¿u báº±ng máº¯t thÆ°á»ng ráº¥t kh&oacute; ph&aacute;t hiá»‡n....&lt;/span&gt;', 1),
(67, 'C&aacute;ch l&agrave;m ch&egrave; bÆ°á»Ÿi tráº¯ng gi&ograve;n, thÆ¡m b&ugrave;i Ä‘&atilde;i cáº£ nh&agrave; dá»‹p cuá»‘i tuáº§n', '1507298834-150729870363552-thumbnail.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;HÆ°Æ¡ng vá»‹ thÆ¡m ngon b&ugrave;i b&ugrave;i cá»§a Ä‘áº­u xanh, gi&ograve;n sá»±t cá»§a c&ugrave;i bÆ°á»Ÿi c&ocirc;ng th&ecirc;m m&ugrave;i thÆ¡m tá»« nÆ°á»›c...&lt;/span&gt;', 1),
(68, 'Tr&ograve;n máº¯t trÆ°á»›c nhá»¯ng tuyá»‡t t&aacute;c tr&ecirc;n ly c&agrave; ph&ecirc; cá»§a &ldquo;so&aacute;i ca&rdquo; H&agrave;n Quá»‘c', '1507297295-150667268792798-coffee01---copy.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;Báº¡n nghÄ© váº½ h&igrave;nh tr&ecirc;n ly c&agrave; ph&ecirc; Ä‘Æ¡n giáº£n chá»‰ l&agrave; Ä‘á»• v&aacute;ng sá»¯a th&agrave;nh h&igrave;nh nhá»¯ng chiáº¿c l&aacute;,...&lt;/span&gt;', 1),
(69, '&amp;#34;Ph&aacute;t cuá»“ng&amp;#34; vá»›i m&oacute;n tr&agrave;ng heo trá»™n chua cay', '1507295988-thumbnail.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;Tr&agrave;ng heo gi&ograve;n gi&ograve;n trá»™n h&agrave;nh t&acirc;y quyá»‡n láº«n vá»›i m&ugrave;i thÆ¡m cá»§a rau rÄƒm v&agrave; cay cay cá»§a á»›t...&lt;/span&gt;', 1),
(70, 'T&ocirc;m chi&ecirc;n sá»‘t trá»©ng muá»‘i gi&ograve;n gi&ograve;n, máº±n máº·n Ä‘Æ°a cÆ¡m v&ocirc; c&ugrave;ng', 'videoicon.png', '&lt;span class=&quot;news-sapo&quot;&gt;M&oacute;n t&ocirc;m chi&ecirc;n trá»©ng muá»‘i gi&ograve;n ngon, b&eacute;o ngáº­y láº¡i dá»… l&agrave;m Ä‘áº£m cáº£ nh&agrave; sáº½ th&iacute;ch m&ecirc;!&lt;/span&gt;', 1),
(71, 'Ch&agrave;ng kh&ocirc;ng c&ograve;n &ldquo;báº¥t lá»±c&rdquo; nhá» nhá»¯ng m&oacute;n ngon tá»« 6 loáº¡i c&aacute; n&agrave;y', '1507290791-thumbnail.jpg', '&lt;span class=&quot;news-sapo&quot;&gt;C&aacute;c b&agrave; vá»£ c&oacute; chá»“ng gáº·p pháº£i c&aacute;c váº¥n Ä‘á» vá» sinh l&yacute; h&atilde;y nhanh tay bá» t&uacute;i c&ocirc;ng thá»©c...&lt;/span&gt;', 1),
(72, '', '', '', 1),
(73, '', '', '', 1),
(74, '                      C&agrave; ph&ecirc; Phin Sá»¯a Ä&aacute; Ä‘áº­m Ä‘&agrave; ngon &ldquo;qu&ecirc;n sáº§u&rdquo; gi&aacute; 29.000Ä‘&lt;span class=&quot;icon-new&quot;&gt;&lt;/span&gt;                ', '1507518720-j.jpg', '', 1),
(75, '                      &ldquo;B&oacute;c tráº§n&rdquo; nhá»¯ng Ä‘á»‹a danh ná»•i tiáº¿ng kh&ocirc;ng Ä‘áº¹p nhÆ° lá»i Ä‘á»“n&lt;span class=&quot;icon-new&quot;&gt;&lt;/span&gt;                ', '1507526919-150752691761130-thumbnail.jpg', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
