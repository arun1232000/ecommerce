-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2023 at 10:30 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pname` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cartid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `pid`, `pname`, `price`, `image`) VALUES
(1, 13, 'dddddddddddddff', 99, 'im.png'),
(2, 14, 'fufugiy', 99, 'Introduction To Internet Of Things.jpg'),
(3, 14, 'fufugiy', 99, 'Introduction To Internet Of Things.jpg'),
(4, 17, 'nn', 988, 'damu.jpg'),
(5, 17, 'nn', 988, 'damu.jpg'),
(6, 17, 'nn', 988, 'damu.jpg'),
(7, 17, 'nn', 988, 'damu.jpg'),
(8, 17, 'nn', 988, 'damu.jpg'),
(9, 13, 'dddddddddddddff', 99, 'im.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `category_name`) VALUES
(1, 'Electronics'),
(2, 'Grocery'),
(3, 'Fashion'),
(4, 'Beauty&Toys&More'),
(5, 'Home&Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

DROP TABLE IF EXISTS `leave_requests`;
CREATE TABLE IF NOT EXISTS `leave_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('Pending','Approved','Rejected') DEFAULT 'Pending',
  `reason` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `user_id`, `start_date`, `end_date`, `status`, `reason`) VALUES
(1, 1, '2023-10-10', '2023-10-13', 'Rejected', 'bbjbjb'),
(2, 2, '2023-10-12', '2023-10-13', 'Rejected', 'bnbn'),
(3, NULL, NULL, NULL, 'Approved', 'bnnn'),
(4, 3, '2023-10-11', '2023-10-13', 'Rejected', 'nmnmn'),
(5, 4, '2023-10-17', '2023-10-20', 'Rejected', 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(30) DEFAULT NULL,
  `status` enum('pending','completed') DEFAULT 'pending',
  `pid` int(11) DEFAULT NULL,
  `pname` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `order_status` enum('Processing','Shipped') NOT NULL DEFAULT 'Processing',
  `order_date` timestamp NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_email`, `status`, `pid`, `pname`, `price`, `image`, `order_status`, `order_date`) VALUES
(87, 'aksajaison1234@gmail.com', 'completed', 30, 'Lipstick Combo Pack ', 159, 'lipstick.jpg', 'Processing', '2023-10-27 04:07:43'),
(84, 'arunabr2000@gmail.com', 'completed', 22, 'HP Laptop', 38000, 'laptop.jpg', 'Processing', '2023-10-18 11:54:21'),
(82, 'poojanedumattom1998@gmail.com', 'completed', 30, ' Mini Lipstick Combo Pack ', 159, 'lipstick.jpg', 'Shipped', '2023-10-10 14:09:03'),
(81, 'jon@gmail.com', 'completed', 34, '8 Seater Sofa Set', 31299, 'sofa.jpg', 'Shipped', '2023-10-10 13:19:47'),
(78, 'arunabr2000@gmail.com', 'completed', 29, 'Men Face Wash', 268, 'facewash.jpg', 'Shipped', '2023-10-09 22:02:43'),
(80, 'arunabr2000@gmail.com', 'completed', 31, 'House Building Blocks', 249, 'house.jpg', 'Shipped', '2023-10-10 04:18:58'),
(85, 'aksajaison1234@gmail.com', 'completed', 46, 'Kurta  (Light Green)', 599, '.jpg', 'Processing', '2023-10-23 13:00:34'),
(86, 'aksajaison1234@gmail.com', 'completed', 40, 'OnePlus Bullets', 1499, 'buds-z2-oneplus-original-imagcg5gfpcg5ndv.jpg', 'Processing', '2023-10-23 14:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `description`, `price`, `image`, `cid`) VALUES
(35, 'OnePlus Nord Buds', 'OnePlus Nord Buds Bluetooth Headset  (Black Slate, True Wireless)', 2499, 'nord-buds-oneplus-original-imagdmxba5hjgzxd.jpg', 1),
(22, 'HP Ryzen 5', 'HP Ryzen 5 Hexa Core 5500U - (16 GB/512 GB SSD/Windows 11 Home) 15s- eq2182AU Thin and Light Laptop  (15.6 Inch, Natural Silver, 1.69 Kg, With MS Office)', 45000, 'laptop.jpg', 1),
(23, 'APPLE iPhone 14 Pro', '256 GB ROM 15.49 cm (6.1 inch) Super Retina XDR Display 48MP + 12MP + 12MP | 12MP Front Camera A16 Bionic Chip, 6 Core Processor Processor', 129000, 'iphone.jpg', 1),
(24, 'RUCHI Combo Pack', 'RUCHI Combo Pack(Turmeric Powder 250gm,Chilli Powder 100gm, Fish Masala 50gm, Meat Masala 100gm, Egg Curry Masala 50gm,Chicken Masala 100gm, Dalchini Powder 100gm) Combo  (COMBO of 7 items)', 421, 'ruch.jpg', 2),
(25, 'Kerala Banana Chips', 'Safe Products Kerala Banana Chips (Made In Coconut oil) and Jackfruit Chips and Spicy Mixture Combo (250G Each) Combo  (Banana Chips-250 gm, Jackfruit Chips-250 gm, Spicy Mixture -250 gm)', 569, 'banana.jpg', 2),
(26, 'FOGG Essence 120 ML', 'FOGG Essence 120 ML (Pack Of 2) & Delicious 120 ML (Pack Of 1) Perfume Body Spray - For Men & Women  (360 ml, Pack of 3)', 585, 'fogg.jpg', 3),
(27, 'Sneakers For Men', 'U.S. POLO ASSN.  CLARKIN Sneakers For Men  (Off White)', 1499, 'shoes.jpg', 3),
(28, 'Slim Fit Casual Shirt', 'LOUIS PHILIPPE  Men Slim Fit Solid Spread Collar Casual Shirt', 2249, 'shirt.jpg', 3),
(29, 'Men Face Wash', 'Garnier Men Acno Fight Anti-Pimple for Acne Prone Skin Face Wash  (150 g)', 268, 'facewash.jpg', 4),
(30, 'Lipstick Combo Pack ', 'BLUSHIS Non Transfer Insta Beauty Waterproof Longlast SensationaL Liquid Matte Mini Lipstick Combo Pack Of 4 Red ,Purple Maroon and Magenta Colour Shade  (Multicolor, 16 ml)', 159, 'lipstick.jpg', 4),
(31, 'House Building Blocks', 'FTAFAT Happy House Building Blocks, Learning/Educational Puzzle Toy,Best Gift for Kids  (Multicolor)', 249, 'house.jpg', 4),
(32, 'Aadujeevitham Book', 'Aadujeevitham | Goat Days | 2021 Edition  (Paperback, Malayalam, Benyamin)', 199, 'book.jpg', 4),
(33, 'SAMSUNG Inverter AC ', 'SAMSUNG Convertible 5-in-1 Cooling 2023 Model 1 Ton 3 Star Split Inverter AC with Wi-fi Connect - White  (AR12CYLZAGE/AR12CYLZAGENNA/AR12CYLZAGEXNA, Copper Condenser)', 32999, '-original-imagnpbf7gqbebbw.jpg', 5),
(49, 'BEARDO Beard Oil', 'BEARDO Godfather Lite Beard and Moustache Oil, 30 ml | Non-Sticky, Light Beard Oil for Men| Pleasant Fragrance | Ideal for daily use|Nourishes and Strengthens Beard | Provides Shine to Beard | Prevents dry and flaky beard Hair Oil  (30 ml)', 227, '30-godfather-lite-beard-and-moustache-oil-30-ml-non-sticky-light-original-imagm5ywqgduqfhg.jpg', 4),
(38, 'SONY 55 inch LED TV', 'SONY 138.8 cm (55 inch) Ultra HD (4K) LED Smart Google TV 2022 Edition  (KD-55X74K)', 52999, '-original-imagm2e6ztgrawkg.jpg', 5),
(39, 'Samsung Galaxy S21 FE', 'Samsung Galaxy S21 FE 5G with Snapdragon 888 (Olive, 128 GB)  (8 GB RAM)', 32499, '-original-imagtnqkutcyzhgq.jpg', 1),
(40, 'OnePlus Bullets', 'OnePlus Bullets Wireless Z2 with Fast Charge, 30 Hrs Battery Life, Earphones with mic Bluetooth Headset  (Magico Black, In the Ear)', 1499, 'buds-z2-oneplus-original-imagcg5gfpcg5ndv.jpg', 1),
(41, 'SAMSUNG Watch 4', 'SAMSUNG Watch 4, 44mmSuper AMOLED bluetooth calling function & body composition tracking  (Black Strap, Free Size)', 8999, '1-4-sm-r870nzkainu-android-samsung-yes-original-imagdhf2ahk7nvmf.jpg', 1),
(42, 'Chocolate Basket Gift', 'SurpriseForU Chocolate Gift | 11 Pieces Chocolate Tray Combo  (1 Tray - 1 Perk - 1 Kitkat - 3 Dairy Milk - 1 5Star - 5 Choclairs)', 289, '7-11-pieces-chocolate-trayholi-chocolate-gift-holi-gift-original-imagccgdgebuzukj.jpg', 2),
(43, 'Soan papadi 400 Gm', 'Yuvraj Food Product holi colours & Desi Ghee Soan papadi 400 Gm Gulal pack Festival combo Combo  (2)', 281, 'sweets-or-holi-colours-festival-combo-desi-.jpg', 2),
(44, 'Sunflower Oil', 'Fortune Sunlite Refined Sunflower Oil Can  (5 L)', 755, 'sunlite-refined-can-sunflower-oil-fortune-original-imafw37vp5mntzzh.jpg', 2),
(45, 'Almond Badam 500g', 'YUM YUM Premium California Almond Badam 500g Almonds  (500 g)', 475, '500-premium-california.jpg', 2),
(46, 'Kurta  (Light Green)', 'Women Printed Crepe Straight Kurta  (Light Green)', 599, '.jpg', 3),
(47, 'Bronson Analog Watch', 'Bronson Analog Watch - For Men ME3218', 15499, '-original-imagptuzqefnuxep.jpg', 3),
(48, 'Women Heels Sandal', 'Women White Heels Sandal', 699, '7-r-374-40-picktoes-white-original-imagdzgwwfzgfjxt.jpg', 3),
(50, 'Vaseline Body Lotion', 'Vaseline Healthy Bright Daily Brightening Body Lotion  (400 ml)', 261, '-original-imagdqanhz2gmebb.jpg', 4),
(51, 'Avengers Toys Set', 'UNISAFE COLLECTION Avengers Toys Set - Captain America, Ironman, Hulk, Ant Man and Thor  (Multicolor)', 289, '3-avengers-toys-set-captain-america-ironman-hulk-ant-man-and-original-imagkyxzwtmfmd7x.jpg', 4),
(52, 'fluffies 4 Teddy Bear', 'fluffies 4 Feet Red Very Cute and Soft Jumbo Teddy Bear-122cm - 122 cm  (Red)', 449, '3-feet-red-cute-teddy-hug-able-teddy-anniversary-gift-95-39-original-imag67c5brvyhcju.jpg', 4),
(53, 'file folder (Black)', 'Toss faux leather file folder  (Set Of 1, Black)', 299, 'pu-leather-professional-files-and-folders-file-folder-totam-original-imag5ux9ptfgtkt2.jpg', 4),
(54, 'Wood Book Shelf', '@Home by nilkamal Checkers Engineered Wood Open Book Shelf  (Finish Color - Classic Walnut, Knock Down)', 2499, '-original-imagqctdbry3xg3c.jpg', 5),
(55, '3D Printed Bedsheet', 'Home Garage 180 TC Cotton King 3D Printed Flat Bedsheet  (Pack of 1, White)', 499, 'fre-101-1-10177-alaficer-original-imageht9harkhggq.jpg', 5),
(56, 'SAMSUNG Refrigerator', 'SAMSUNG 256 L Frost Free Double Door 3 Star Convertible Refrigerator with Convertible, Digital Inverter with Display  (Luxe Black, RT30C3733BX/HL)', 28999, '-original-imagpqjfupz9nmy7.jpg', 5),
(57, 'Microwave Oven', 'SAMSUNG 28 L Convection & Grill Microwave Oven  (CE1041DSB3, Black)', 11990, '-original-imagt6znzcghgfkb.jpg', 5),
(58, 'boAt Bluetooth Speaker', 'boAt Stone 350 10 W Bluetooth Speaker  (Black, Mono Channel)', 1299, '-original-imageh8fwctg4fxg.jpg', 1),
(59, 'Canon EOS 3000D', 'Canon EOS 3000D DSLR Camera 1 Camera Body, 18 - 55 mm Lens  (Black)', 28990, 'canon-eos-eos-3000d-dslr-original-imaf3t5h9yuyc5zu.jpg', 1),
(60, 'Logitech Mouse', 'Logitech B175 / Optical Tracking, 12-Months Battery Life, Ambidextrous Wireless Optical Mouse  (2.4GHz Wireless, Black)', 599, 'b175-logitech-original-imag359v76rygsaf.jpg', 1),
(61, 'Ray-ban Sunglasses', 'Ray-Ban  UV Protection Aviator Sunglasses (58)  (For Men & Women, Green)', 6141, '62-0rb3026iw202762-ray-ban-original-imaf9qh3gjkw7wsf.jpg', 3),
(62, 'Laptop Backpack', 'AMERICAN TOURISTER  27.5 L Laptop Backpack Valex  (Black)', 869, '-original-imagtehhuusgzpdw.jpg', 3),
(63, 'Lace Up For Men', 'Bata  Lace Up For Men  (Black)', 2499, '-original-imagsfdvdwzhny53.jpg', 3),
(64, 'Aluminium Ladder', 'Climb High 6 Step Foldable Heavy Duty with 7 Year Warranty Anti-Skid Step Aluminium Ladder  (With Platform)', 2699, '54-ch06-120-6-climb-high-original-imagp4hhwz988wyp.jpg', 5),
(65, 'Steel Dessert Bowl', 'Dream Home Steel Dessert Bowl  (Pack of 3, Red)', 329, 'na-3-star-one-plastic-coated-microwave.jpg', 5),
(66, 'Vacuum Cleaner', 'Inalsa Homeasy WD10 Wet & Dry Vacuum Cleaner with Anti-Bacterial Cleaning  (Yellow)', 3399, '-original-imaghh9q3q7hy5sf.jpg', 5),
(67, 'HORLICKS Classic Malt', 'HORLICKS Classic Malt  (1 kg)', 482, '-original-imagp8wgpyhegypm.jpg', 2),
(68, 'Chemba Puttu Podi', 'MELAM Chemba Puttu Podi | Pack of 2 | Each 500g |  (1 kg, Pack of 2)', 105, '1-chemba-puttu-podi-pack.jpg', 2),
(69, 'Stuffed Red Chilli Pickle', 'Anand Home Style Stuffed Red Chilli Pickle  (1 kg)', 259, '-original-imagep3ksj9kymek.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(25) DEFAULT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(30) DEFAULT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `user_type`, `uid`, `full_name`, `profile_pic`, `address`, `city`, `state`, `zip`, `phone`) VALUES
('admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', 4, NULL, '', NULL, NULL, NULL, NULL, NULL),
('arun', 'arunabr2000@gmail.com', 'a10372605b860035a32286c3fa356e8e', NULL, 31, 'Arun Abraham', 'tovino.jpg', 'Rose villa, KMC road', 'Kochi', 'Kerala', '686589', '8359064508'),
('jon', 'jon@gmail.com', 'a10372605b860035a32286c3fa356e8e', NULL, 35, 'Jon Mathew', 'tovino.jpg', 'abc villa, kmc road', 'Kottayam', 'Kerala', '898985', '4524521589'),
('pooja', 'poojanedumattom1998@gmail.com', 'a10372605b860035a32286c3fa356e8e', NULL, 36, 'Pooja Devaraj', 'ananya_pandey.jpg', 'amc lane', 'kochi', 'kerala', '89898', '8359064506'),
('aksa', 'aksajaison1234@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 38, 'Aksa Jaison', 'Mrunal-Thakur-1.jpg', 'abc villa, muttathil lane', 'kochi', 'kerala', '684849', '2345677654');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
