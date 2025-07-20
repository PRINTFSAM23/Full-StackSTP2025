-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2025 at 12:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `florifydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `order_amount` int(11) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `order_status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_description` varchar(500) DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `product_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_type`) VALUES
(7, 'Bedazzled Orchids & Roses Vase Arrangement', 1299, 'Showcasing stunning blue hand sprayed roses and enchanting blue orchids this arrangement captivates with its unique beauty. Accentuated by lush green ping pong leaves and delicate blue hand sprayed gypsy flowers it exudes a sense of serenity and sophistication. Presented in a sleek transparent glass vase this mesmerising floral display is perfect for making a grand statement whether as a gift or a centrepiece. A truly dazzling way to celebrate special moments with grace and style.', './../product_img/birthday_flowers_pic_1.webp', 'Birthday'),
(8, 'Paradise On Earth Carnations Flower Bouquet', 749, 'Handpicked baby pink carnations to let the special someone know how much you miss them. Show your emotions with carnations, beautifully arranged in bouquet style and sprinkled with White Gypsophila Gypsy Fillers. These beautiful flowers will make the receiver feel happy and special.', './../product_img/birthday_flowers_pic_2.webp', 'Birthday'),
(9, 'Royal Bloom Arrangement', 3599, 'Elevate their Eid festivities with a floral arrangement that speaks of grace and celebration. A stunning medley of roses in soft pastels and vibrant hues pairs beautifully with delicate carnations creating an exquisite blend of colour and charm. The arrangement is further enhanced with purple limonium and lush green fillers adding depth and elegance. Resting on a golden round base this creation makes a striking statement and is simply perfect for gifting or as a festive centrepiece.', './../product_img/royal-bloom-arrangement_1.webp', 'Birthday'),
(10, 'Elegant Vibe Red Roses Bouquet', 749, 'An extravagant display of bold red roses wrapped in luxurious Non-Woven paper. The colour contrast gives the bouquet a sophisticated look and enhances its beauty. Sprinkled with Green Murraya Leaf Filler,this love-infused bunch looks simply magical.', './../product_img/elegant-vibe-red-roses-bouquet_1.webp', 'Birthday'),
(11, 'Spring Time Roses Birthday Arrangement', 3499, 'Celebrate a special birthday with a vibrant and elegant floral display. This stunning arrangement features a delightful mix of peach dark pink aqua pink and yellow roses symbolising joy love and warmth. Complemented by purple shaded eustomas and delicate purple daisies it creates a charming burst of colour. Beautifully arranged in a rustic brown wooden crate it exudes natural elegance. A golden Happy Birthday topper adds the perfect celebratory touch making this exquisite floral gift a heartfelt', './../product_img/spring-time-roses-birthday-arrangement_1.webp', 'Birthday'),
(12, 'Pastel Floral Birthday Ensemble', 1049, 'Delight someone special on their birthday with this charming floral arrangement where soft baby pink carnations meet elegant aqua pink roses and a pop of purple daisy. Nestled in lush green fillers and wrapped in delicate pink non woven paper this bouquet radiates warmth and affection. Presented in a sleek glass vase its the perfect gesture to brighten their day and leave a lasting impression. Whether for a close friend or a loved one this thoughtful gift speaks volumes with its graceful colours', './../product_img/pastel-floral-birthday-ensemble_3.webp', 'Birthday'),
(13, 'Happy Times Carnations Flower Bouquet', 799, 'A vibrant bunch of yellow and pink carnations to brighten up someones day. No matter the occasion, this beautiful bunch will surely delight the receiver and make them feel extra special.', './../product_img/happy-times-carnations-bouquet_1.jpg', 'Birthday'),
(14, ' EXFNP13175  Click to Open expanded view  Graceful', 1749, 'Graceful and refined this exquisite arrangement of white roses and blue orchids radiates timeless beauty. Accented with delicate gypsophila and fresh ping pong leaf fillers it brings together a harmonious blend of soft colours and gentle textures. The serene whites and tranquil blues evoke purity peace and heartfelt emotions making it the perfect birthday gift for someone special. Whether for a milestone celebration or a thoughtful gesture this floral ensemble speaks volumes with its elegance an', './../product_img/graceful-orchid-and-rose-bithday-bouquet_1.webp', 'Birthday'),
(16, 'Anniversary Roses & Fridge Magnet Love', 699, 'Celebrate love and togetherness with this enchanting bouquet of red roses paired with two personalized fridge magnets that say Happy Anniversary. The magnets printed with your favourite images add a personal touch to this thoughtful gift. Perfect for your partner spouse or a special couple this gift beautifully combines the timeless elegance of roses with heartfelt personalization. Its an unforgettable way to mark the anniversary and create lasting memories.', './../product_img/sweet-anniversary-roses_1.webp', 'Anniversary'),
(17, 'Love For Pastel Carnations Flower Bouquet', 949, 'Handpicked baby pink carnations to let the special someone know how much you miss them. Show your emotions with carnations, beautifully arranged in bouquet style and sprinkled with White Gypsophila Gypsy Fillers. These beautiful flowers will make the receiver feel happy and special.', './../product_img/love-for-pastel-carnations-bouquet_1.webp', 'Anniversary'),
(18, 'Royal Affair Couple Bloom Ensemble', 2199, 'Bold and breathtaking this stunning arrangement of radiant red roses and velvety carnations celebrates the deep passion and love of your anniversary. Accented with delicate white gypsophila and fresh green ping pong leaf fillers the vibrant blooms are elegantly presented in a charming duo of boy and girl resin pots. The playful planters perfectly complement the romantic florals creating a whimsical yet sophisticated statement. This unique pairing is an unforgettable gift blending romance fun and', './../product_img/crimson-love-anniversary-twin-pots-gift_1.webp', 'Anniversary'),
(19, 'Promise of Forever Rose Bouquet', 1349, 'This Karwa Chauth gift a bouquet that tells your love story. Radiant red roses capture the intensity of your emotions while soft aqua pink blooms mirror tender moments shared. Wrapped in an elegant sheet personalized with your names it transforms into a cherished keepsake a reminder of your unique bond and promises made under the moonlit sky. A heartfelt way to celebrate love thats destined forever.', './../product_img/promise-of-forever-rose-bouquet_1.webp', 'Anniversary'),
(20, 'Red Rose Easel Arrangement', 1599, 'A graceful blend of romance and artistry this stunning arrangement features lush red roses paired with delicate white gypsophila and fresh green ping pong leaf fillers. Presented on a charming MDF easel stand it creates a striking visual statement perfect for celebrating your anniversary. The classic beauty of the roses combined with the creative display makes this arrangement more than just a bouquet its a heartfelt expression of love and appreciation. Ideal for gifting dÃ©cor or adding eleganc', './../product_img/red-rose-anniversary-easel-arrangement_1.webp', 'Anniversary'),
(21, 'Rouge Majesty', 2999, 'A rich and luxuriant ensemble featuring red roses and red anthurium flowers is truly a class apart. It reimagines love and weaves it with floral perfection, elevating every celebration that it is a part of. You do not need a reason to gift this to your special ones because its alluring crimson aesthetics does all the talking. Surprise your loved one with it to unlock unbounded happiness.', './../product_img/rouge-majesty_1.webp', 'Anniversary'),
(22, 'Timeless Love Red Roses Bouquet', 749, 'Fall in love with this classic bouquet of red roses wrapped in red paper. Sprinkled with White Gypsophila Gypsy Fillers, this love-infused bunch looks simply magical. Let your special someone know how much you love them with the help of this spellbinding bouquet.', './../product_img/timeless-love-red-roses-bouquet_1.webp', 'Anniversary'),
(23, 'Mixed Brilliance Gerbera Flower Bouquet', 499, 'This burst of floral joy captures the essence of all celebrations. A vibrant waltz of colourful gerberas will take their breath away. The flowers are arranged skillfully by talented florists to ensure a perfect look at all times.', './../product_img/mixed-brilliance-gerbera-blossoms_1.webp', 'Anniversary'),
(24, 'Carnation Cascade in Gold', 1549, 'Celebrate elegance with our charming bouquet featuring delicate carnations, beautifully housed in a golden round metal base. Ideal for anyone, this bouquet exudes sophistication and grace. Its unique blend of flowers and luxurious presentation sets it apart, making it a truly memorable gift.', './../product_img/carnation-cascade-in-gold_1.webp', 'Events'),
(25, 'Rose and Orchid Oasis', 1099, 'Elevate any space with our enchanting bouquet featuring roses and purple orchids, housed in a charming jute potli bag. Perfect for nature enthusiasts or those who appreciate unique presentations, this bouquet blends elegance with rustic charm. Ideal for gifting on birthdays, anniversaries, or as a gesture of appreciation, its distinctive composition and eco-friendly packaging make it a standout choice.', './../product_img/rose-and-orchid-oasis_1.webp', 'Events'),
(26, 'Graceful Whisper of White Blooms', 1749, 'A serene blend of white Asiatic lilies and roses, this bouquet encapsulates purity and elegance. An ideal gift for a loved one, it symbolises the innocence and timeless beauty of the recipient. Perfect for occasions celebrating love, this arrangement promises to bring tranquillity and grace into the life of someone special, creating a lasting impression through the delicate charm of white blooms.', './../product_img/graceful-whisper-of-white-blooms_1.webp', 'Events'),
(27, 'Whispers of Love Rose Arrangement', 1449, 'A serene blend of white Asiatic lilies and roses, this bouquet encapsulates purity and elegance. An ideal gift for a loved one, it symbolises the innocence and timeless beauty of the recipient. Perfect for occasions celebrating love, this arrangement promises to bring tranquillity and grace into the life of someone special, creating a lasting impression through the delicate charm of white blooms.', './../product_img/whispers-of-valentine-roses_1.webp', 'Events');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `phoneNo` bigint(20) DEFAULT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Name`, `email_id`, `password`, `phoneNo`, `role`) VALUES
(6, 'Soumya Gupta', 'somugupta00@gmail.com', 'pankauri123@', 8874370897, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
