SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

use estate;
create TABLE `addproperty` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `bathrooms` varchar(255) NOT NULL,
  `floors` varchar(255) NOT NULL,
  `garages` varchar(255) NOT NULL,
  `parking_place` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `s_r_price` varchar(255) NOT NULL,
  `air_condi` varchar(255) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `coffe_pot` varchar(255) NOT NULL,
  `c_cooling` varchar(255) NOT NULL,
  `balcony` varchar(255) NOT NULL,
  `p_friendly` varchar(255) NOT NULL,
  `barbeque` varchar(255) NOT NULL,
  `f_alarm` varchar(255) NOT NULL,
  `m_kitchen` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `microwave` varchar(255) NOT NULL,
  `o_kitchen` varchar(255) NOT NULL,
  `dryer` varchar(255) NOT NULL,
  `heating` varchar(255) NOT NULL,
  `pool` varchar(255) NOT NULL,
  `laundry` varchar(255) NOT NULL,
  `sauna` varchar(255) NOT NULL,
  `gym` varchar(255) NOT NULL,
  `elevator` varchar(255) NOT NULL,
  `d_washer` varchar(255) NOT NULL,
  `r_terrace` varchar(255) NOT NULL,
  `terrace` varchar(255) NOT NULL,
  `e_exit` varchar(255) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_3` varchar(255) NOT NULL,
  `img_4` varchar(255) NOT NULL,
  `img_5` varchar(255) NOT NULL,
  `img_6` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `neighb` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
show databases;
select * from addproperty;
INSERT INTO `addproperty` (`id`, `title`, `description`, `price`, `status`, `type`, `location`, `bedrooms`, `bathrooms`, `floors`, `garages`, `parking_place`, `area`, `size`, `s_r_price`, `air_condi`, `bed`, `coffe_pot`, `c_cooling`, `balcony`, `p_friendly`, `barbeque`, `f_alarm`, `m_kitchen`, `storage`, `microwave`, `o_kitchen`, `dryer`, `heating`, `pool`, `laundry`, `sauna`, `gym`, `elevator`, `d_washer`, `r_terrace`, `terrace`, `e_exit`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `address`, `country`, `state`, `city`, `pin`, `neighb`, `user_id`) VALUES
(29, 'A beach house at Baja California peninsula', 'Enjoy a refreshing time amidst the monumental Appalachian mountains, in a townhouse that will host the most luxurious holiday for you and your family!\r\n\r\n', '24.1M Ksh', 'Sale', 'Building', 'Japhet Nyakwara Ngara', ' 3', '4', '3', '2', '2', '232.00 m²', '232.00 m²', '24.1 Lac', 'Air conditioning', 'Bedding', 'Coffee pot', '', 'Balcony', '', '', '', '', 'Storage', 'Microwave', 'Outdoor Kitchen', '', '', 'Pool', '', '', '', '', 'Dish Washer', 'Roof terrace', '', '', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p1.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p2.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p3.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p4.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p5.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p6.jpg', 'Kilimani nairobi kenya', 'kenya', 'Nairobi', 'Kenya', '425201', 'New', '2'),
(23, 'A beach house at Baja California peninsula', 'Enjoy a refreshing time amidst the monumental Appalachian mountains, in a townhouse that will host the most luxurious holiday for you and your family!\r\n\r\n', '24.1M Ksh', 'Sale', 'Building', 'Japhet Nyakwara Ngara', ' 3', '4', '3', '2', '2', '232.00 m²', '232.00 m²', '24.1 Lac', 'Air conditioning', 'Bedding', 'Coffee pot', '', 'Balcony', '', '', '', '', 'Storage', 'Microwave', 'Outdoor Kitchen', '', '', 'Pool', '', '', '', '', 'Dish Washer', 'Roof terrace', '', '', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p1.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p2.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p3.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p4.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p5.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p6.jpg', 'Runda Nairobi Kenya', 'kenya', 'Nairobi', 'Kenya', '425201', 'New', '3'),
(24, 'A beach house at Baja California peninsula', 'Enjoy a refreshing time amidst the monumental Appalachian mountains, in a townhouse that will host the most luxurious holiday for you and your family!\r\n\r\n', '24.1M Ksh', 'Rent', 'Building', 'Japhet Nyakwara Ngara', ' 3', '4', '3', '2', '2', '232.00 m²', '232.00 m²', '24.1 Lac', 'Air conditioning', 'Bedding', 'Coffee pot', '', 'Balcony', '', '', '', '', 'Storage', 'Microwave', 'Outdoor Kitchen', '', '', 'Pool', '', '', '', '', 'Dish Washer', 'Roof terrace', '', '', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p1.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p2.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p3.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p4.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p5.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p6.jpg', 'Rongai Kajiado Kenya', 'kenya', 'Nairobi', 'Kenya', '425201', 'New', '4'),
(25, 'A beach house at Baja California peninsula', 'Enjoy a refreshing time amidst the monumental Appalachian mountains, in a townhouse that will host the most luxurious holiday for you and your family!\r\n\r\n', '24.1M Ksh', 'Rent', 'Building', 'Japhet Nyakwara Ngara', ' 3', '4', '3', '2', '2', '232.00 m²', '232.00 m²', '24.1 Lac', 'Air conditioning', 'Bedding', 'Coffee pot', '', 'Balcony', '', '', '', '', 'Storage', 'Microwave', 'Outdoor Kitchen', '', '', 'Pool', '', '', '', '', 'Dish Washer', 'Roof terrace', '', '', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p1.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p2.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p3.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p4.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p5.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p6.jpg', 'Langata Nairobi Kenya', 'kenya', 'Nairobi', 'Kenya', '425201', 'New', '5'),
(26, 'A beach house at Baja California peninsula', 'Enjoy a refreshing time amidst the monumental Appalachian mountains, in a townhouse that will host the most luxurious holiday for you and your family!\r\n\r\n', '24.1M Ksh', 'Sale', 'Building', 'Japhet Nyakwara Ngara', ' 3', '4', '3', '2', '2', '232.00 m²', '232.00 m²', '24.1 Lac', 'Air conditioning', 'Bedding', 'Coffee pot', '', 'Balcony', '', '', '', '', 'Storage', 'Microwave', 'Outdoor Kitchen', '', '', 'Pool', '', '', '', '', 'Dish Washer', 'Roof terrace', '', '', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p1.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p2.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p3.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p4.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p5.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p6.jpg', 'Karen Nairobi Kenya', 'kenya', 'Nairobi', 'Kenya', '425201', 'New', '6'),
(27, 'A beach house at Baja California peninsula', 'Enjoy a refreshing time amidst the monumental Appalachian mountains, in a townhouse that will host the most luxurious holiday for you and your family!\r\n\r\n', '24.1M Ksh', 'Rent', 'Building', 'Japhet Nyakwara Ngara', ' 3', '4', '3', '2', '2', '232.00 m²', '232.00 m²', '24.1 Lac', 'Air conditioning', 'Bedding', 'Coffee pot', '', 'Balcony', '', '', '', '', 'Storage', 'Microwave', 'Outdoor Kitchen', '', '', 'Pool', '', '', '', '', 'Dish Washer', 'Roof terrace', '', '', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p1.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p2.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p3.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p4.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p5.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p6.jpg', 'Kilimani Nairobi Kenya', 'kenya', 'Nairobi', 'Kenya', '425201', 'New', '7'),
(28, 'A beach house at Baja California peninsula', 'Enjoy a refreshing time amidst the monumental Appalachian mountains, in a townhouse that will host the most luxurious holiday for you and your family!\r\n\r\n', '24.1M Ksh', 'Sale', 'Building', 'Japhet Nyakwara Ngara', ' 3', '4', '3', '2', '2', '232.00 m²', '232.00 m²', '24.1 Lac', 'Air conditioning', 'Bedding', 'Coffee pot', '', 'Balcony', '', '', '', '', 'Storage', 'Microwave', 'Outdoor Kitchen', '', '', 'Pool', '', '', '', '', 'Dish Washer', 'Roof terrace', '', '', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p1.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p2.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p3.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p4.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p5.jpg', 'LOAD_FILE C:\Users\Jeff\Desktop\images\p6.jpg', 'Langata Nairobi Kenya', 'kenya', 'Nairobi', 'Kenya', '425201', 'New', '8');
select * from addproperty;
CREATE TABLE `a_regi` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `c_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `a_regi` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `c_pass`) VALUES
(2, 'Jeff', 'Ngara', 'jeff12@gmail.com', '+917517090229', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(3, 'Harleen', 'Jamila', 'jamila@gmail.com', '1212121212', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');
CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `mess`) VALUES
(1, 'Hamisa Bakar Taleo', 'Hamisa12@gmail.com', '07517090229', 'Nice');
CREATE TABLE `favourite` (
  `id` int(255) NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `favourite` (`id`, `property_id`, `user_id`) VALUES
(1, '24', '2'),
(2, '22', '2'),
(3, '25', '2');
CREATE TABLE `request` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `date_e` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `datea` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `request` (`id`, `name`, `email`, `phone`, `message`, `user_id`, `property_id`, `date_e`, `remark`, `datea`) VALUES
(5, 'mama mboga', 'mamambol@gmail.com', '1212121212', 'I Want to view our Home can you tell meeting time', '7', '22', '03/30/22 19.14:17', '', '');
CREATE TABLE `review` (
  `id` int(255) NOT NULL,
  `reviewa` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `datee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `review` (`id`, `reviewa`, `user_id`, `property_id`, `datee`) VALUES
(1, 'This Review fo testing', '3', '23', '02/30/22 20.09:41'),
(2, 'This Review fo testing', '2', '22', '03/01/22 11.28:09'),
(3, '', '2', '24', '01/02/22 10.19:27'),
(4, 'Nice', '2', '25', '02/02/22 10.22:42');
ALTER TABLE `addproperty`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `a_regi`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproperty`
--
ALTER TABLE `addproperty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `a_regi`
--
ALTER TABLE `a_regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


