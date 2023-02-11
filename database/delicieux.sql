-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 04:12 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delicieux`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_item_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  `checkout` tinyint(1) DEFAULT NULL,
  `ord_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_item_id`, `item_id`, `user_id`, `qty`, `checkout`, `ord_id`) VALUES
(1, 2, 1, 1, 1, 1),
(2, 15, 1, 3, 1, 1),
(3, 42, 1, 2, 1, 1),
(5, 19, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `pid` int(11) NOT NULL,
  `pname` varchar(32) NOT NULL,
  `pimage` varchar(64) NOT NULL,
  `pcost` int(11) NOT NULL,
  `pweight` int(11) NOT NULL,
  `pdescription` varchar(256) NOT NULL,
  `pcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`pid`, `pname`, `pimage`, `pcost`, `pweight`, `pdescription`, `pcategory`) VALUES
(1, 'Belgian Chocolate', 'images/cake-Belgian-Chocolate.jpg', 650, 0, 'A decadent and rich chocolate cake that hits the spot!<br>\r\nOur most popular cupcake in a cake form.', 1),
(2, 'Caramel Butterscotch', 'images/cake-Caramel-butterscotch.jpg', 600, 0, 'Vanilla pastry cream, salted caramel and butterscotch chips &ndash; classic flavors done the right way.', 1),
(3, 'Chocolate Caramel', 'images/cake-Chocolate-Caramel.jpg', 600, 0, 'Salted caramel cutting through the rich dark chocolate ganache &ndash; Finish in one go!', 1),
(4, 'Chocolate Chocolate', 'images/cake-Chocolate-Chocolate.jpg', 650, 0, 'Chocolate cake layered with chocolate ganache. Chocolate heaven?', 1),
(5, 'Chocolate Strawberry', 'images/cake-Chocolate-Strawberry.jpg', 550, 0, 'A giant version of your favourite macaron.', 1),
(6, 'Chocolate Truffle', 'images/cake-Chocolate-Truffle.jpg', 650, 0, 'All the chocolate, without the guilt and gluten. Made with honey, 70% Callebaut chocolate and nuts.', 1),
(7, 'Dark Delight', 'images/cake-Dark-Delight.jpg', 650, 0, 'A moist dark chocolate cake is elevated by salted caramel and roasted almond flakes.', 1),
(8, 'Hazelnut Crunch', 'images/cake-Hazelnut-Crunch.jpg', 700, 0, 'Hazelnut ganache hides a crispy French biscuit layer, cushioned by a chocolate sponge.', 1),
(9, 'Chocolate Brownie Cake', 'images/cake-Chocolate-Brownie-cake.jpg', 700, 0, 'Gooey brownie without the calories! Sweetened with honey and made with raw organic chocolate from Mysore and nuts.', 1),
(10, 'Mixed Fruit', 'images/cake-Mixed-fruit-cake.jpg', 500, 0, 'Try the vanilla pastry cream with fresh fruit cake for a trip down memory lane.', 1),
(11, 'Belgian Chocolate', 'images/cupcake-s-belgian-chocolate.jpg', 40, 0, 'The classic &ndash; dense, moist, with a hint of bitter.', 2),
(12, 'Chunky Chocolate', 'images/cupcake-s-chunky-chocolate.jpg', 40, 0, 'A milk chocolate cake with ganache, and caramelized nuts for crunch.', 2),
(13, 'Chocolate', 'images/cupcake-chocolate.jpg', 40, 0, 'Never let dietary restrictions ruin dessert.', 2),
(14, 'Nutella', 'images/cupcake-s-nutella.jpg', 40, 0, 'A vanilla cake with Nutella at its heart, and in its frosting.', 2),
(15, 'Oreo', 'images/cupcake-s-oreo.jpg', 40, 0, 'The familiar flavour elevated with cream cheese frosting.', 2),
(16, 'Peanut butter cup', 'images/cupcake-s-peanut-butter-cup.jpg', 40, 0, 'A brownie base, with peanut butter at the centre, and topped with chocolate chips.', 2),
(17, 'Red Love', 'images/cupcake-s-red-love.jpg', 40, 0, 'A red velvet base, with a Belgian chocolate swirl.', 2),
(18, 'Red Velvet', 'images/cupcake-s-red-velvet.jpg', 40, 0, 'The favourite, comes with cream cheese frosting.', 2),
(19, 'Vanilla', 'images/cupcake-s-vanilla.jpg', 30, 0, 'Made from the best pods, and with buttercream frosting, it&apos;s anything but vanilla.', 2),
(20, 'Opera Cake', 'images/cake-Opera-Cake.jpg', 650, 0, 'Try a slice of our layers of jaconde sponge with rich coffee buttercream and dark chocolate ganache for a caffeine kick and sugar high.', 1),
(21, 'Red Love', 'images/cake-Red-Love.jpg', 700, 0, 'Who needs a hug when you have the comfort of moist red velvet sponge with a Belgian chocolate ganache.', 1),
(22, 'Red Velvet', 'images/cake-Red-Velvet.jpg', 650, 0, 'Classic red sponge with cream cheese frosting.', 1),
(23, 'Summer Love', 'images/cake-Summer-Love.jpg', 550, 0, 'Brighten up your day with this <i>m&eacute;nage &agrave; trois</i> juicy mangoes, light pastry cream and fragrant Vanilla Genoise in our ode to romance.', 1),
(24, 'Masaba', 'images/cake-The-Masaba.jpg', 500, 0, 'Decadent chocolate ganache cake layered with a crunch of butterscotch chips in between every layer.', 1),
(25, 'Rosette', 'images/cake-The-Rosette.jpg', 450, 0, 'Get your custom cake with a magnificent floral design.', 1),
(26, 'Classic Vanilla', 'images/cake-Vanilla.jpg', 450, 0, 'The base at its best.', 1),
(27, 'Dark Chocolate', 'images/mac-dark-chocolate.jpg', 76, 0, 'A moist dark chocolate filling is elevated by salted caramel and roasted almond flakes.', 3),
(28, 'Orange', 'images/mac-orange.jpg', 76, 0, 'A light dessert made from orange extract and filled with an indulgent dark chocolate ganache to complement it.', 3),
(29, 'Passion Fruit', 'images/mac-passion-fruit.jpg', 76, 0, 'A quick and delicious exterior with a touch of exotic tropical passion fruit.', 3),
(30, 'Paan', 'images/mac-paan.jpg', 76, 0, 'An Indian flavour fused with a french delicacy. Ain\'t both cultures just amazing?', 3),
(31, 'Pistachio', 'images/mac-pistachio.jpg', 76, 0, 'Prepare yourself for a nut-TASTIC taste sensation in this pistachio flavored dessert.', 3),
(32, 'Seasalt', 'images/mac-seasalt.jpg', 76, 0, 'This contrast of light, sugary flavors and the crispness of sea salt can hit the spot.\r\nIn our opinion, desserts that involve sea salt are among the tastiest.\r\nOf course sea salt goes well with chocolate.', 3),
(33, 'Rose', 'images/mac-rose.jpg', 76, 0, 'An infused delicious dessert with the delicate floral fragrance of summer.', 3),
(34, 'Lavender', 'images/mac-lavender.jpg', 76, 0, 'Lavender macarons with a fragrant lavender buttercream filling.', 3),
(35, 'Peanut Butter', 'images/mac-peanut-butter.jpg', 76, 0, 'A chocolate-peanut butter combo filled with rich chocolate ganache.', 3),
(36, 'Vanilla Raspberry', 'images/mac-vanilla-raspberry.jpg', 76, 0, 'A raspberry infused shell with a basic vanilla filling.', 3),
(37, 'French Vanilla', 'images/mac-french-vanilla.jpg', 76, 0, 'A classic french vanilla macaron infused with natural vanilla.', 3),
(38, 'Nutella Seasalt', 'images/mac-nutella-seasalt.jpg', 76, 0, 'Everything\'s better with nutella!', 3),
(39, 'Coffee', 'images/mac-coffee.jpg', 76, 0, 'Caffeine overloaded.', 3),
(40, 'Hazelnut', 'images/mac-hazelnut.jpg', 76, 0, 'Amazingly infused with this enriched nut.', 3),
(41, 'Banana Caramel', 'images/tarts-banana-caramel.jpg', 30, 0, 'If you have a thing for bananas and caramel then you?ve landed in the right place!', 4),
(42, 'Chocolate', 'images/tarts-chocolate.jpg', 30, 0, 'Basic but delicious.', 4),
(43, 'Chocolate Caramel', 'images/tarts-chocolate-caramel.jpg', 35, 0, 'Salted caramel cutting through the rich dark chocolate ganache ? Finish in one go!', 4),
(44, 'Chocolate Orange', 'images/tarts-chocolate-orange.jpg', 30, 0, 'A light dessert made from orange extract and filled with an indulgent dark chocolate ganache to complement it.', 4),
(45, 'Lemon', 'images/tarts-lemon.jpg', 28, 0, 'Just the right amount of tart-ness and sweetness!', 4),
(46, 'Nutella', 'images/tarts-nutella.jpg', 40, 0, 'Your Favorite filling now in a tart and topped with finely chopped hazelnuts.', 4),
(47, 'Belgian Chocolate', 'images/choux-belgian-chocolate.jpg', 50, 0, 'Dense, moist, with a hint of bitter from the outside, but light and airy from the inside.', 5),
(48, 'Hazelnut', 'images/choux-hazelnut.jpg', 50, 0, 'Once you get past the rich hazelnut ganache, you\'ll discover the light and airy french choux.', 5),
(49, 'Red Velvet', 'images/choux-red-velvet.jpg', 50, 0, 'Our Bestselling cupcake in any size your want! You think of a size and we have got it...', 5),
(50, 'Caramilk', 'images/choux-caramilk.jpg', 50, 0, 'An indulgent chocolate choux topped off with a chocolate-caramel ganache.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `emailid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `emailid`) VALUES
(4, 'sarahcar28@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rpid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `user_id`, `rpid`) VALUES
(1, 1, 'order_EZFzVv93OdGj7O');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(16) NOT NULL,
  `user_lname` varchar(16) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_contact` varchar(10) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_contact`, `user_password`, `address`) VALUES
(1, 'Sarah', 'Carvalho', 'sarahcar28@gmail.com', '9867882407', 'Sarahcar@123', 'B-101,Alica,<br>KANDIVALI EAST,<br>Mumbai 400101,<br>Maharashtra'),
(2, 'Sydney', 'Carvalho', 'sydsop@hotmail.com', '9867763327', 'Pass@123', ''),
(3, 'Sarah', 'Carvalho', 'sarahcar28@gmail.com', '9867882407', 'Pass@123', ''),
(4, 'Esha', 'Shah', 'shahesha01@gmail.com', '7021561165', 'Esha@1234', ''),
(5, 'Purav', 'Desai', 'puravdesai@gmail.com', '9879879871', 'Pass@123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `fk_item` (`item_id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_order` (`ord_id`);

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`),
  ADD KEY `fk_user_order` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_item` FOREIGN KEY (`item_id`) REFERENCES `catalogue` (`pid`),
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`ord_id`) REFERENCES `orders` (`ord_id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_user_order` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
