-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2017 at 08:54 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furnituredecor`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulkorder`
--

CREATE TABLE `bulkorder` (
  `id` int(6) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sku` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `note` varchar(2000) NOT NULL,
  `user` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulkorder`
--

INSERT INTO `bulkorder` (`id`, `category`, `sku`, `qty`, `name`, `email`, `contact`, `companyname`, `city`, `pincode`, `note`, `user`, `time`) VALUES
(2, 'sofas', '10', '20', 'sunesoft', 'vijayakumard01@gmail.com', '9942881542', 'echo', 'coimbatore', '641107', 'sasadsadsadasd', '', ''),
(3, 'sofas', '10', '20', 'almore', 'vijayakumard01@gmail.com', '9942881542', 'echo', 'coimbatore', '641107', 'dsdsfsdfsdfsdf', '', ''),
(4, 'sofas', '10', '20', 'almore', 'vijayakumard01@gmail.com', '9942881542', 'echo', 'coimbatore', '641107', 'sasadasdsad', 'vijay', ''),
(5, 'sofas', '10', '20', 'almore', 'vijayakumard01@gmail.com', '9942881542', 'echo', 'coimbatore', '641107', 'sfdsdfsdfsdfsdf', 'vijay', '2017-03-10 06:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `webid` varchar(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(300) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`webid`, `user`, `name`, `path`, `price`, `qty`) VALUES
('54', 'JwO4hyQ8MkGfoj3', 'almore-2', 'admin/sofas/almore-2.jpg', '2000', '5');

-- --------------------------------------------------------

--
-- Table structure for table `categorypage`
--

CREATE TABLE `categorypage` (
  `id` varchar(3) NOT NULL,
  `path` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`) VALUES
('India'),
('USA');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `display` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `addr1` varchar(2000) NOT NULL,
  `addr2` varchar(2000) NOT NULL,
  `zip` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`display`, `email`, `pass`, `firstname`, `middlename`, `lastname`, `addr1`, `addr2`, `zip`, `city`, `state`, `phone`, `mobile`, `fax`) VALUES
('vijay', 'abc@gmail.com', '123456', 'vijay', '', 'kumard01', 'northstreet', 'pethanaicken palayam', '641107', 'coimbatore', 'tamilnadu', '0422 2653319', '9942881542', '+24563120'),
('vijay1', 'abc1@gmail.com', '123456', 'vijay', '', 'kumar', 'northstreet', 'pethanaicken palayam', '641107', 'coimbatore', 'tamilnadu', '0422 2653319', '9942881542', '+24563120'),
('vijay123', 'abc1234@gmail.com', '123456', 'vijay', '', 'kumar', 'northstreet', 'pethanaicken palayam', '639821', 'madurai', 'tamilnadu', '0422 2653319', '9942881542', '+24563120'),
('testingm', 'testm@gmail.com', '1324565m', 'demom', 'mm', 'lm', 'northstreetm', 'pethanaicken palayamm', '67891m', 'maduraim', 'tamilnadum', '0422 2653319m', '9942881542m', '+24563120m'),
('testing1', 'test1@gmail.com', '1324565', 'demo', '', 'l', 'northstreet', 'pethanaicken palayam', '632154', 'madurai', 'tamilnadu', '0422 2653319', '9942881542', '+24563120');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `email`, `question`, `answer`) VALUES
(1, 'vijay', 'vijayakumard01@gmail.com', 'sadsadsadsadasdsadsadsadsa', 'dfgfdgfdgdfgfdgfdgdgfdgfdgdfggfdgfdgfdgfdgfd'),
(2, 'vijay', 'vijayakumar_d@in.com', 'how to apply warranty clause', ''),
(3, 'sunesoft', 'vijayakumar_d@in.com', 'dsadsadsadsadadsdas', '');

-- --------------------------------------------------------

--
-- Table structure for table `featureitems`
--

CREATE TABLE `featureitems` (
  `id` int(11) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featureitems`
--

INSERT INTO `featureitems` (`id`, `path`) VALUES
(1, 'images\\Featureditems\\altus.jpg'),
(2, 'images\\Featureditems\\Chair 2117.jpg'),
(3, 'images\\Featureditems\\Coffee Table St 105.jpg'),
(4, 'images\\Featureditems\\Dining 1112.jpg'),
(5, 'images\\Featureditems\\kruz.jpg'),
(6, 'images\\Featureditems\\spine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `note` varchar(2000) NOT NULL,
  `ratings` varchar(10) NOT NULL,
  `id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `product`, `note`, `ratings`, `id`) VALUES
('LOKJYD7wZ0MhpIb', 'Dining 1113', 'The table is great! It certainly came in well packaged/well protected. It was sort of hard to actually get to the table lol But it all went together smoothly and was definitely a beautiful, solid piece. My only complaint was, somehow, the hardware bag came loose so all the pieces were scattered in the box. Turns out I was only missing (1) flat washer, which I could do without. All together, its an easy to put together and heavy piece that is absolutely beautiful! Definitely a table for 2, maybe 4 depending on how much elbow room you want. We only needed 2.', '4', '29'),
('guest123', 'Dining 1113', 'First of all, I have to say that the packaging in which the table arrived was one of the best I have seen. Very impressed with the delivery. Now, once I opened the package, no matter how simple the assembly might be, I expect to see some instructions and it was not there. So, reducing 1/2 a star. Now, while assembling, each leg of the table has 2 prefixed threads and comes with a bolt to fasten the legs to the block', '4', '29'),
('shopper1', 'Dining 1113', ' a handsome little table for 2-4 people, but the legs are NOT one piece. The top of the turned (on a lathe) leg is glued into the bottom of the rectangular piece bolted into the corner supports under the table top.\r\n\r\nAfter using the table daily for over a year and moving it around occasionally, two of the legs separated slightly from the square blocks and now the table wobbles badly. If any sideways pressure is placed on the table ', '4', '29'),
('shopper1', 'Armada High Back Office and Study chair ', 'When I purchased this chair I tripled checked that it not only would support my weight and had reviews from other purchasers that verified the claim. I am partially disabled and needed a chair that would support my weight plus sitting high enough to allow easy egress for my knees. The chair arrived and I was thrilled. It met all my requirements as well as appearing to be well made and very comfortable. That was about three months ago.\r\n', '4', '39'),
('prakash', 'Armada High Back Office and Study chair ', 'The chair is relatively easy to put together and sturdy. The only complaint so far is that arms are difficult to get on without possible stripping the screws. I eventually put the screws in first, then took them out, and them put the arms on. The arms have to be pretensions so the holes will align. And it is not clear which arm is the left and right. Basically the instruction for this part could use some words which are not present. The arms are still a bit wobbly,\r\nSo far it seems sturdy and comfortable.', '4', '39');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menuname` varchar(50) NOT NULL,
  `submenu` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menuname`, `submenu`) VALUES
(1, 'Office Chairs', '1'),
(2, 'Sofas', '0'),
(3, 'Dinning tables', '0'),
(4, 'Dinning Chairs', '0'),
(5, 'Coffee Tables', '0');

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `pono` int(11) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `user` varchar(50) NOT NULL,
  `note` varchar(200) NOT NULL,
  `date` timestamp(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`pono`, `address`, `user`, `note`, `date`) VALUES
(15, 'Name:vijaykumard01<br>Address:northstreet,pethanaicken palayam,coimbatore,tamilnadu<br>Pincode641107<br>Phone:0422 2653319Mobile:9942881542Fax:+24563120', 'vijay', '', '2017-03-15 08:10:25.000000'),
(6, 'Name:vijaykumar<br>Address:northstreet,pethanaicken palayam,coimbatore,tamilnadu<br>Pincode641107<br>Contact: Phone:0422 2653319Mobile:9942881542Fax:+24563120', 'vijay', '', '2017-02-23 11:57:12.000000'),
(8, 'Name:vijaykumard01<br>Address:northstreet,pethanaicken palayam,coimbatore,tamilnadu<br>Pincode641107<br>Contact: Phone:0422 2653319Mobile:9942881542Fax:+24563120', 'vijay', '', '2017-03-07 07:48:49.000000'),
(9, 'Name:vijaykumar<br>Address:northstreet,pethanaicken palayam,madurai,tamilnadu<br>Pincode639821<br>Contact: Phone:0422 2653319Mobile:9942881542Fax:+24563120', 'vijay123', '', '2017-03-07 08:44:26.000000'),
(10, 'Name:vijaykumar<br>Address:northstreet,pethanaicken palayam,madurai,tamilnadu<br>Pincode639821<br>Contact: Phone:0422 2653319Mobile:9942881542Fax:+24563120', 'vijay123', '', '2017-03-07 08:44:43.000000'),
(11, 'Name:vijaykumar<br>Address:northstreet,pethanaicken palayam,madurai,tamilnadu<br>Pincode639821<br>Contact: Phone:0422 2653319Mobile:9942881542Fax:+24563120', 'vijay123', '', '2017-03-07 08:46:48.000000'),
(12, 'Name:vinothkumard01<br>Address:northstreet,pethanaicken palayam,coimbatore,tamilnadu<br>Pincode641107<br>Contact: Phone:59445454Mobile:9942881542Fax:+24563120', 'vijay', '', '2017-03-08 05:58:59.000000'),
(13, 'Name:vijaykumard01<br>Address:northstreet,pethanaicken palayam,coimbatore,tamilnadu<br>Pincode641107<br>Contact: Phone:0422 2653319Mobile:9942881542Fax:+24563120', 'vijay', '', '2017-03-09 12:03:27.000000'),
(14, 'Name:vijaykumard01<br>Address:northstreet,pethanaicken palayam,coimbatore,tamilnadu<br>Pincode641107<br>Contact: Phone:0422 2653319Mobile:9942881542Fax:+24563120', 'vijay', '', '2017-03-10 10:11:12.000000');

-- --------------------------------------------------------

--
-- Table structure for table `podetails`
--

CREATE TABLE `podetails` (
  `pono` varchar(10) NOT NULL,
  `path` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `podetails`
--

INSERT INTO `podetails` (`pono`, `path`, `name`, `id`, `price`, `quantity`) VALUES
('6', 'imagessofaalmore-1.jpg', 'almore-1', '6', '2000', '2'),
('6', 'imagescoffeetablesCoffee Table St 106A.jpg', 'Coffee Table St 106A', '3', '600', '1'),
('6', 'imagescoffeetablesCoffee St 106.jpg', 'Coffee St 106', '1', '600', '3'),
('15', 'admin/sofas/Olive.jpg', 'Olive', '50', '6000.00', '1'),
('8', 'images/sofas/almore.jpg', 'almore', '5', '2000', '2'),
('8', 'admin/executivechairs/ARTRIX High Back Office and Study chair .jpg', 'ARTRIX High Back Office and Study chair ', '35', '18,808.00 ', '1'),
('9', 'admin/sofas/charlie.jpg', 'charlie', '22', '3000', '1'),
('10', 'admin/dinningchairs/Chair 1112.jpg', 'Chair 1112', '32', '600', '1'),
('11', 'admin/visitorschairs/Jazz-2 office and Study Chair.jpg', 'Jazz-2 office and Study Chair', '44', '11749.00', '1'),
('12', 'images/sofas/almore-1.jpg', 'almore-1', '6', '2000', '2'),
('13', 'images/coffeetables/Coffee St 106.jpg', 'Coffee St 106', '1', '600', '4'),
('13', 'admin/sofas/20151016_184912_801424.jpg', '20151016_184912_801424', '16', '3000', '5'),
('14', 'admin/sofas/20151210_111934.jpg', '20151210_111934', '20', '3000', '5');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `path` varchar(300) NOT NULL,
  `category` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `stock` varchar(3) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `visble` int(1) NOT NULL,
  `sucat` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `path`, `category`, `price`, `stock`, `details`, `visble`, `sucat`) VALUES
(1, 'Coffee St 106', 'admin/coffeetables/Coffee St 106.jpg', 'coffee tables', '800', '20', '*Solid wood top \r\n*Easy to assemble \r\n*Bottom shelf provides additional storage space \r\n*Metal frame \r\n*Distressed finish ', 0, ''),
(2, 'Coffee Table St 105.jpg', 'admin/coffeetables/Coffee Table St 105.jpg', 'coffee tables', '600', '20', '"The Perfect Little End Table" for finishing touches \r\nSuper-light, Hollowcore Contruction \r\nDurable wood grain finish is easy to clean \r\nFor College Dorms, Guest Rooms or Any Room! Easy to assemble - No tools required \r\nNo need to shop, delivered to your home! \r\nThis item is eligible for free replacement parts. Contact Amazon Customer Service for more information. ', 0, ''),
(3, 'Coffee Table St 106A', 'admin/coffeetables/Coffee Table St 106A.jpg', 'coffee tables', '600', '20', '"The Perfect Little End Table" for finishing touches \r\nSuper-light, Hollowcore Contruction \r\nDurable wood grain finish is easy to clean \r\nFor College Dorms, Guest Rooms or Any Room! Easy to assemble - No tools required \r\nNo need to shop, delivered to your home! \r\nThis item is eligible for free replacement parts. Contact Amazon Customer Service for more information. ', 0, ''),
(4, 'Coffee Table St 107', 'admin/coffeetables/Coffee Table St 107.jpg', 'coffee tables', '600', '20', '"The Perfect Little End Table" for finishing touches \r\nSuper-light, Hollowcore Contruction \r\nDurable wood grain finish is easy to clean \r\nFor College Dorms, Guest Rooms or Any Room! Easy to assemble - No tools required \r\nNo need to shop, delivered to your home! \r\nThis item is eligible for free replacement parts. Contact Amazon Customer Service for more information. ', 0, ''),
(5, 'almore', 'admin/sofas/almore.jpg', 'sofas', '2000', '10', 'Genuine 100% Italian Protected Leather \r\nDesigned in Italy \r\nItalian style for world-class comfort \r\nEvery model is handmade by expert craftsman ', 0, ''),
(6, 'almore-1', 'admin/sofas/almore-1.jpg', 'sofas', '2000', '10', 'Genuine 100% Italian Protected Leather \r\nDesigned in Italy \r\nItalian style for world-class comfort \r\nEvery model is handmade by expert craftsman ', 0, ''),
(14, '20131115_134119-1', 'admin/sofas/20131115_134119-1.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(20, '20151210_111934', 'admin/sofas/20151210_111934.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(16, '20151016_184912_801424', 'admin/sofas/20151016_184912_801424.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(17, 'IMG-20151128-WA0019', 'admin/sofas/IMG-20151128-WA0019.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(21, 'IMG-20160406-WA0017', 'admin/sofas/IMG-20160406-WA0017.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(22, 'charlie', 'admin/sofas/charlie.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(23, 'curvy', 'admin/sofas/curvy.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(24, 'dream', 'admin/sofas/dream.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(50, 'Olive', 'admin/sofas/Olive.jpg', 'sofas', '6000.00', '20', '', 0, ''),
(49, 'vista', 'admin/sofas/vista.jpg', 'sofas', '6000.00', '20', '', 0, ''),
(26, 'flora', 'admin/sofas/flora.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(27, 'flora-1', 'admin/sofas/flora-1.jpg', 'sofas', '3000', '20', 'Brand Bluebell\r\nDelivery Condition Knock Down\r\nSeat Lock Included Yes\r\nType Office Chair\r\nStyle Contemporary & Modern\r\nWheels Included Yes\r\nUpholstery Included Yes\r\nUpholstery Type Cushion\r\nHead Support No\r\nSuitable For Office', 0, ''),
(28, 'Dining 1112', 'admin/dinningtables/Dining 1112.jpg', 'dinning tables', '1800', '20', 'ideal for the breakfast nook or dining area \r\nTwo-tone white painted with neutral wood tone for your country home \r\nSeats up to four comfortably \r\n48"L x 30"W x 29"H \r\nSome assembly may be required. Please see product details. \r\nDining and Kitchen ', 1, ''),
(29, 'Dining 1113', 'admin/dinningtables/Dining 1113.jpg', 'dinning tables', '1800', '20', 'ideal for the breakfast nook or dining area \r\nTwo-tone white painted with neutral wood tone for your country home \r\nSeats up to four comfortably \r\n48"L x 30"W x 29"H \r\nSome assembly may be required. Please see product details. \r\nDining and Kitchen ', 0, ''),
(30, 'Dining 1380-2117', 'admin/dinningtables/Dining 1380-2117.jpg', 'dinning tables', '1800', '20', 'ideal for the breakfast nook or dining area \r\nTwo-tone white painted with neutral wood tone for your country home \r\nSeats up to four comfortably \r\n48"L x 30"W x 29"H \r\nSome assembly may be required. Please see product details. \r\nDining and Kitchen ', 0, ''),
(31, 'Dining 1381 - 2115', 'admin/dinningtables/Dining 1381 - 2115.jpg', 'dinning tables', '1800', '20', 'ideal for the breakfast nook or dining area \r\nTwo-tone white painted with neutral wood tone for your country home \r\nSeats up to four comfortably \r\n48"L x 30"W x 29"H \r\nSome assembly may be required. Please see product details. \r\nDining and Kitchen ', 0, ''),
(32, 'Chair 1112', 'admin/dinningchairs/Chair 1112.jpg', 'dinning chairs', '600', '20', 'Limited Sale! Buy Now to Save More! \r\nA perfect touch of Vintage Industrial Modern Look to your dining room or breakfast counter \r\nThe metal frame makes it very stable and the weight capacity is 300 lbs \r\nIt is easy to clean with water and the back has a humanity design \r\nDimension: (LxWxH): 18.5" x 17.32" x 33.66 ". Weight: 11 lbs for each. ', 0, ''),
(33, 'Chair 2117', 'admin/dinningchairs/Chair 2117.jpg', 'dinning chairs', '600', '20', 'Limited Sale! Buy Now to Save More! \r\nA perfect touch of Vintage Industrial Modern Look to your dining room or breakfast counter \r\nThe metal frame makes it very stable and the weight capacity is 300 lbs \r\nIt is easy to clean with water and the back has a humanity design \r\nDimension: (LxWxH): 18.5" x 17.32" x 33.66 ". Weight: 11 lbs for each. ', 0, ''),
(34, 'Chair Sc 2115', 'admin/dinningchairs/Chair Sc 2115.jpg', 'dinning chairs', '600', '20', 'Limited Sale! Buy Now to Save More! \r\nA perfect touch of Vintage Industrial Modern Look to your dining room or breakfast counter \r\nThe metal frame makes it very stable and the weight capacity is 300 lbs \r\nIt is easy to clean with water and the back has a humanity design \r\nDimension: (LxWxH): 18.5" x 17.32" x 33.66 ". Weight: 11 lbs for each. ', 0, ''),
(35, 'ARTRIX High Back Office and Study chair ', 'admin/executivechairs/ARTRIX High Back Office and Study chair .jpg', 'executive chairs', '18808.00 ', '20', 'PRODUCT NAME ARTRIX\r\nPRODUCT TYPE HIGH BACK\r\nPRODUCT CODE BB-AX-01 \r\nCATEGORY A\r\nCASTOR TREND\r\nBASE NYLON \r\nGAS LIFT CLASS IV\r\nMECHANISM SINGLE SYNCHRO\r\nUPHOLSTERY MESH & FABRIC\r\n', 0, ''),
(36, 'Bliss office and study chair ', 'admin/executivechairs/Bliss office and study chair .jpg', 'executive chairs', '18808.00 ', '20', 'PRODUCT NAME ARTRIX\r\nPRODUCT TYPE HIGH BACK\r\nPRODUCT CODE BB-AX-01 \r\nCATEGORY A\r\nCASTOR TREND\r\nBASE NYLON \r\nGAS LIFT CLASS IV\r\nMECHANISM SINGLE SYNCHRO\r\nUPHOLSTERY MESH & FABRIC\r\n', 0, ''),
(37, 'Eleganz MidBack Office and Study chair ', 'admin/executivechairs/Eleganz MidBack Office and Study chair .jpg', 'executive chairs', '18808.00 ', '20', 'PRODUCT NAME ARTRIX\r\nPRODUCT TYPE HIGH BACK\r\nPRODUCT CODE BB-AX-01 \r\nCATEGORY A\r\nCASTOR TREND\r\nBASE NYLON \r\nGAS LIFT CLASS IV\r\nMECHANISM SINGLE SYNCHRO\r\nUPHOLSTERY MESH & FABRIC\r\n', 0, ''),
(40, 'Ergonomic Office Chair Elite MB (B)', 'admin/workstationchairs/Ergonomic Office Chair Elite MB (B).jpg', 'workstation chairs', '5799.00', '20', 'Ergonomically designed chairs ensuring physical well-being and a happy mind body harmony!\r\nNon-cancellable: Order can\'t be cancelled after 48 hours\r\nProvides extra spil support\r\nColour/Finish: Fabric\r\nClass IV extra taper\r\nProduct Code: BB-EL-02 B\r\nPackaging Dimensions(inches): 28 x 26 x 11\r\nState of art seating mechanism\r\nWarranty: 1 Year\r\nAssembly Type: Self Assembly\r\nChrome Height Adjustable PU Padded 2D Armrest\r\nBrand: Bluebell\r\nAttractive looks\r\nLong lasting product', 0, ''),
(39, 'Armada High Back Office and Study chair ', 'admin/workstationchairs/Armada High Back Office and Study chair .jpg', 'workstation chairs', '7502.00', '20', 'Ergonomically designed chairs ensuring physical well-being and a happy mind body harmony!\r\nNon-cancellable: Order can\'t be cancelled after 48 hours\r\nProvides extra spil support\r\nColour/Finish: Fabric\r\nClass IV extra taper\r\nProduct Code: BB-EL-02 B\r\nPackaging Dimensions(inches): 28 x 26 x 11\r\nState of art seating mechanism\r\nWarranty: 1 Year\r\nAssembly Type: Self Assembly\r\nChrome Height Adjustable PU Padded 2D Armrest\r\nBrand: Bluebell\r\nAttractive looks\r\nLong lasting product', 0, ''),
(41, 'Globus office and study chair New Create 2', 'admin/workstationchairs/Globus office and study chair New Create 2.jpg', 'workstation chairs', '5999.00', '20', 'Ergonomically designed chairs ensuring physical well-being and a happy mind body harmony!\r\nNon-cancellable: Order can\'t be cancelled after 48 hours\r\nProvides extra spil support\r\nColour/Finish: Fabric\r\nClass IV extra taper\r\nProduct Code: BB-EL-02 B\r\nPackaging Dimensions(inches): 28 x 26 x 11\r\nState of art seating mechanism\r\nWarranty: 1 Year\r\nAssembly Type: Self Assembly\r\nChrome Height Adjustable PU Padded 2D Armrest\r\nBrand: Bluebell\r\nAttractive looks\r\nLong lasting product', 0, ''),
(42, 'Host Double-Seater Visitor Chair(Black)', 'admin/visitorschairs/Host Double-Seater Visitor Chair(Black).jpg', 'visitors chairs', '6946.00', '20', 'Product Dimensions: Length (67 inches), Width (23 inches), Height (35 inches)\r\nPrimary Material: Metal\r\nColor: Multicolour\r\nNo Assembly Required: The product is delivered in a pre-assembled state\r\nElegant and Stylish design\r\nWarranty: 7 days against manufacturing defect', 0, ''),
(43, 'Host Three-Seater Visitor Chair', 'admin/visitorschairs/Host Three-Seater Visitor Chair.jpg', 'visitors chairs', '4999.00', '20', 'Product Dimensions: Length (44 inches), Width (23 inches), Height (35 inches)\r\nPrimary Material: Metal\r\nColor: Multicolour\r\nNo Assembly Required: The product is delivered in a pre-assembled state\r\nElegant and Stylish design\r\nWarranty: 7 days against manufacturing defect ', 0, ''),
(44, 'Jazz-2 office and Study Chair', 'admin/visitorschairs/Jazz-2 office and Study Chair.jpg', 'visitors chairs', '11749.00', '20', 'Bluebell Jazz-II chair\r\n\r\nCaster:Nylon\r\nBase-Chrome\r\nMechanism :Center Tilt\r\nUpholstery:Leatherite\r\nArm Rest:Chrome Fix ', 0, ''),
(51, 'Ocean', 'admin/coffeetables/Ocean.jpg', 'coffee tables', '3000', '20', 'sdsadadadasd', 1, ''),
(54, 'almore-2', 'admin/sofas/almore-2.jpg', 'sofas', '2000', '20', '', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `recommented`
--

CREATE TABLE `recommented` (
  `id` int(11) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommented`
--

INSERT INTO `recommented` (`id`, `path`) VALUES
(7, 'images\\recommended\\Chair Sc 2115.jpg'),
(8, 'images\\recommended\\Coffee Table St 107.jpg'),
(9, 'images\\recommended\\Dining 1381 - 2115.jpg'),
(10, 'images\\recommended\\harmony.jpg'),
(11, 'images\\recommended\\matrix.jpg'),
(12, 'images\\recommended\\olive.jpg'),
(13, 'images\\recommended\\rainbow.jpg'),
(14, 'images\\recommended\\renu.jpg'),
(15, 'images\\recommended\\shine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `countries` varchar(20) NOT NULL,
  `states` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`countries`, `states`) VALUES
('India', 'Tamilnadu'),
('India', 'Kerala'),
('India', 'Karanataka'),
('India', 'Andrapradesh');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `webid` varchar(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`webid`, `user`, `name`, `path`, `price`, `qty`) VALUES
('27', '3GahLVRjJYnmMzf', 'flora-1', 'admin/sofas/flora-1.jpg', '3000', '1'),
('22', 'uXEK1QNIR5Y32Dw', 'charlie', 'admin/sofas/charlie.jpg', '3000', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulkorder`
--
ALTER TABLE `bulkorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `display` (`display`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureitems`
--
ALTER TABLE `featureitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`pono`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulkorder`
--
ALTER TABLE `bulkorder`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `pono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
