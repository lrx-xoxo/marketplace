-- Database: 'marketplace'
-- -----------------------------------------------------------
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
`username` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'password');
-- -----------------------------------------------------------
-- Table structure for table `users`
--
CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
`username` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'daisydd', 'daisydd@gmail.com', '1234');
-- -----------------------------------------------------------
--
-- Table structure for table `products`
--
CREATE TABLE IF NOT EXISTS `products` (
`id` int(22) NOT NULL,
`name` varchar(22) NOT NULL,
`price` double NOT NULL,
`quantity` int(22) NOT NULL,
`cat` varchar(22) NOT NULL,
`details` varchar(500) NOT NULL,
`image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products`(`id`, `name`, `price`, `quantity`, `cat`, `details`, `image`) VALUES
(1, 'Blue T-shirt', 40, 10, 'Top', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','t-shirt-men.jpeg');

-- -----------------------------------------------------------
-- Table structure for table `orders`
--
CREATE TABLE IF NOT EXISTS `orders` (
`id` int(22) NOT NULL,
`productID` int(22) NOT NULL,
`firstname` varchar(100) NOT NULL,
`lastname` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`address` varchar(100) NOT NULL,
`total_price` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `orders` (`id`,`productID`,`firstname`,`lastname`,`email`,`address`,`total_price`) VALUES
(1, 17, 'Bar', 'Foo', 'some@some.com', '394 West St', 200.00);
--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

 --
 -- Indexes for table `products`
 --
 ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `orders`
  --
  ALTER TABLE `orders`
   ADD PRIMARY KEY (`id`);


  --
  -- AUTO_INCREMENT for table `admin_users`
  --
  ALTER TABLE `admin`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

  --
  -- AUTO_INCREMENT for table `users`
  --
  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

  --
  -- AUTO_INCREMENT for table `products`
  --
  ALTER TABLE `products`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

  --
  -- AUTO_INCREMENT for table `orders`
  --
  ALTER TABLE `orders`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;
