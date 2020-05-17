-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 05:13 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silivent`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `shortDesc` varchar(500) NOT NULL,
  `longDesc` longtext NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `verivied` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama`, `image`, `shortDesc`, `longDesc`, `kategori`, `creator`, `institusi`, `creator_id`, `verivied`) VALUES
(4, 'Makan Kerupuk', 'monitortor.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id ipsum eget justo mattis lacinia. Vestibulum hendrerit nunc sed erat volutpat, ut molestie felis semper. Sed enim odio, venenatis non nisi sit amet, sodales semper massa. Nulla fermentum dolor ac diam fringilla bibendum vel in nisl. Quisque risus orci, consectetur in malesuada eu, dictum nec mi. \r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id ipsum eget justo mattis lacinia. Vestibulum hendrerit nunc sed erat volutpat, ut molestie felis semper. Sed enim odio, venenatis non nisi sit amet, sodales semper massa. Nulla fermentum dolor ac diam fringilla bibendum vel in nisl. Quisque risus orci, consectetur in malesuada eu, dictum nec mi. Phasellus nec ligula nec velit gravida sollicitudin. Nulla facilisi. Etiam sapien arcu, consequat vitae viverra in, euismod et mauris. Donec id interdum felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac maximus justo, id lobortis tortor. Curabitur eu metus nec ligula mollis eleifend a at justo. Duis tellus felis, eleifend ut bibendum id, fringilla consequat justo. Curabitur bibendum egestas magna at convallis.\r\n\r\nCras eu justo eget diam sodales luctus quis non eros. Nullam vel consectetur arcu. Sed varius velit varius, elementum eros ut, mattis justo. Nullam commodo libero purus, eu dignissim risus sagittis quis. Aenean mollis elit in varius gravida. Donec nisl felis, hendrerit at urna semper, tincidunt ullamcorper ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas interdum lacus at mauris pharetra, id tempus dolor porttitor. Donec vulputate nibh lectus. Nam lectus augue, hendrerit sed nisl id, luctus finibus velit. Vestibulum malesuada ultricies sapien, a ullamcorper leo euismod a. Ut ut accumsan mauris. Integer placerat, nulla nec vulputate cursus, elit mauris posuere ex, sit amet mollis justo neque eget magna. Cras faucibus venenatis sem sit amet ullamcorper. Curabitur ultrices, risus scelerisque rhoncus tincidunt, mi eros lacinia metus, et porta nisi ligula ac dui. Aenean ornare erat gravida neque bibendum rhoncus vel vel odio.\r\n\r\nDonec sollicitudin tellus nibh, id gravida ligula tempor eu. Nulla vehicula dignissim ex in tincidunt. In hac habitasse platea dictumst. Donec egestas lacus purus, nec mattis tortor dapibus porta. Sed venenatis, lacus vitae posuere varius, lectus erat faucibus purus, ut dictum arcu ligula at leo. Mauris faucibus eu ipsum a fringilla. Cras suscipit massa sed mi aliquet, in rutrum lacus blandit. Curabitur ullamcorper sed justo eu ullamcorper. Sed nisi risus, egestas vitae justo sed, commodo imperdiet eros. Proin tortor mauris, ullamcorper non velit at, imperdiet bibendum velit. Etiam non tincidunt massa. Aenean a iaculis risus. Aenean bibendum augue sed arcu gravida tempor. Sed consequat ipsum diam, sit amet facilisis quam sollicitudin quis. Proin finibus leo ligula, id venenatis lectus hendrerit id. Proin vehicula enim justo, et egestas tortor vehicula vitae.\r\n\r\nQuisque rutrum, sem ut efficitur vestibulum, tellus elit semper ex, a consectetur erat velit consectetur enim. Mauris quis metus quam. Ut sed pulvinar ligula, et vestibulum lectus. Vestibulum ultrices fringilla facilisis. Aenean posuere mauris a maximus laoreet. Praesent pretium metus condimentum lobortis mollis. Donec suscipit sapien felis, ac aliquam nisl tempus vel. Cras faucibus, magna tristique faucibus dignissim, tortor quam mattis lacus, vitae fringilla odio lectus suscipit purus. Proin interdum rutrum libero, at eleifend justo gravida a. Nulla varius, enim dapibus malesuada blandit, tellus nisi vestibulum urna, ut rhoncus erat enim vitae sapien.\r\n\r\nVivamus et convallis leo, eu vehicula dolor. Mauris molestie massa et sollicitudin mattis. Etiam pretium, diam et hendrerit auctor, lectus metus commodo ex, pellentesque eleifend tellus sapien sed lorem. Sed fermentum imperdiet nibh. Suspendisse feugiat, ante et scelerisque laoreet, ex dui dapibus velit, non posuere leo neque eu sem. Curabitur maximus pulvinar scelerisque. Pellentesque ultricies arcu quis neque varius, vel pulvinar erat tempor. Pellentesque ac justo sapien. Nam vitae rhoncus justo. Praesent venenatis interdum mi, eget ornare risus malesuada non. Suspendisse interdum placerat quam, in tristique lorem varius non. Nam ut massa semper, rhoncus lorem non, euismod massa. Nunc lacus eros, tempor id iaculis vulputate, elementum vel metus. Pellentesque sapien ex, lacinia id velit non, placerat maximus nibh. Phasellus a laoreet urna. In dictum dictum arcu, quis pharetra nisl dapibus vitae.', 'Informatika', 'Althof Rafaela Romadhona', 'BEM KM IPB', 5, 1),
(6, 'Goyang Dombret', 'hdd.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id ipsum eget justo mattis lacinia. Vestibulum hendrerit nunc sed erat volutpat, ut molestie felis semper. Sed enim odio, venenatis non nisi sit amet, sodales semper massa. Nulla fermentum dolor ac diam fringilla bibendum vel in nisl. Quisque risus orci, consectetur in malesuada eu, dictum nec mi.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id ipsum eget justo mattis lacinia. Vestibulum hendrerit nunc sed erat volutpat, ut molestie felis semper. Sed enim odio, venenatis non nisi sit amet, sodales semper massa. Nulla fermentum dolor ac diam fringilla bibendum vel in nisl. Quisque risus orci, consectetur in malesuada eu, dictum nec mi. Phasellus nec ligula nec velit gravida sollicitudin. Nulla facilisi. Etiam sapien arcu, consequat vitae viverra in, euismod et mauris. Donec id interdum felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac maximus justo, id lobortis tortor. Curabitur eu metus nec ligula mollis eleifend a at justo. Duis tellus felis, eleifend ut bibendum id, fringilla consequat justo. Curabitur bibendum egestas magna at convallis.\r\n\r\nCras eu justo eget diam sodales luctus quis non eros. Nullam vel consectetur arcu. Sed varius velit varius, elementum eros ut, mattis justo. Nullam commodo libero purus, eu dignissim risus sagittis quis. Aenean mollis elit in varius gravida. Donec nisl felis, hendrerit at urna semper, tincidunt ullamcorper ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas interdum lacus at mauris pharetra, id tempus dolor porttitor. Donec vulputate nibh lectus. Nam lectus augue, hendrerit sed nisl id, luctus finibus velit. Vestibulum malesuada ultricies sapien, a ullamcorper leo euismod a. Ut ut accumsan mauris. Integer placerat, nulla nec vulputate cursus, elit mauris posuere ex, sit amet mollis justo neque eget magna. Cras faucibus venenatis sem sit amet ullamcorper. Curabitur ultrices, risus scelerisque rhoncus tincidunt, mi eros lacinia metus, et porta nisi ligula ac dui. Aenean ornare erat gravida neque bibendum rhoncus vel vel odio.\r\n\r\nDonec sollicitudin tellus nibh, id gravida ligula tempor eu. Nulla vehicula dignissim ex in tincidunt. In hac habitasse platea dictumst. Donec egestas lacus purus, nec mattis tortor dapibus porta. Sed venenatis, lacus vitae posuere varius, lectus erat faucibus purus, ut dictum arcu ligula at leo. Mauris faucibus eu ipsum a fringilla. Cras suscipit massa sed mi aliquet, in rutrum lacus blandit. Curabitur ullamcorper sed justo eu ullamcorper. Sed nisi risus, egestas vitae justo sed, commodo imperdiet eros. Proin tortor mauris, ullamcorper non velit at, imperdiet bibendum velit. Etiam non tincidunt massa. Aenean a iaculis risus. Aenean bibendum augue sed arcu gravida tempor. Sed consequat ipsum diam, sit amet facilisis quam sollicitudin quis. Proin finibus leo ligula, id venenatis lectus hendrerit id. Proin vehicula enim justo, et egestas tortor vehicula vitae.\r\n\r\nQuisque rutrum, sem ut efficitur vestibulum, tellus elit semper ex, a consectetur erat velit consectetur enim. Mauris quis metus quam. Ut sed pulvinar ligula, et vestibulum lectus. Vestibulum ultrices fringilla facilisis. Aenean posuere mauris a maximus laoreet. Praesent pretium metus condimentum lobortis mollis. Donec suscipit sapien felis, ac aliquam nisl tempus vel. Cras faucibus, magna tristique faucibus dignissim, tortor quam mattis lacus, vitae fringilla odio lectus suscipit purus. Proin interdum rutrum libero, at eleifend justo gravida a. Nulla varius, enim dapibus malesuada blandit, tellus nisi vestibulum urna, ut rhoncus erat enim vitae sapien.\r\n\r\nVivamus et convallis leo, eu vehicula dolor. Mauris molestie massa et sollicitudin mattis. Etiam pretium, diam et hendrerit auctor, lectus metus commodo ex, pellentesque eleifend tellus sapien sed lorem. Sed fermentum imperdiet nibh. Suspendisse feugiat, ante et scelerisque laoreet, ex dui dapibus velit, non posuere leo neque eu sem. Curabitur maximus pulvinar scelerisque. Pellentesque ultricies arcu quis neque varius, vel pulvinar erat tempor. Pellentesque ac justo sapien. Nam vitae rhoncus justo. Praesent venenatis interdum mi, eget ornare risus malesuada non. Suspendisse interdum placerat quam, in tristique lorem varius non. Nam ut massa semper, rhoncus lorem non, euismod massa. Nunc lacus eros, tempor id iaculis vulputate, elementum vel metus. Pellentesque sapien ex, lacinia id velit non, placerat maximus nibh. Phasellus a laoreet urna. In dictum dictum arcu, quis pharetra nisl dapibus vitae.', 'Fotografi', 'Althof Rafaela Romadhona', 'BEM KM IPB', 5, 1),
(9, 'Lomba Mengerami Telur', 'Keyboard.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id ipsum eget justo mattis lacinia. Vestibulum hendrerit nunc sed erat volutpat, ut molestie felis semper. Sed enim odio, venenatis non nisi sit amet, sodales semper massa. Nulla fermentum dolor ac diam fringilla bibendum vel in nisl.', 'The summer of his high school freshman year, Hodaka runs away from his remote island home to Tokyo, and quickly finds himself pushed to his financial and personal limits. The weather is unusually gloomy and rainy every day, as if to suggest his future. He lives his days in isolation, but finally finds work as a writer for a mysterious occult magazine. Then one day, Hodaka meets Hina on a busy street corner. This bright and strong-willed girl possesses a strange and wonderful ability the power to stop the rain and clear the sky.\r\n\r\nA lonely little boy named Sousuke lives with his mother by the sea, flashing messages across the water to his fathers boat. One day, amid the detritus brought in with the tide, he stumbles upon a little goldfish. Delighted by this strange new friend, he takes her home and names her Ponyo. Sousuke comes to learn, however, that Ponyo is no ordinary fish. A visit from a strange man brings with it fantastical happenings that lead Sousuke and Ponyo on an enlightening adventure. In Gake no Ue no Ponyo, magic and reality clash around Ponyo and Sousuke, testing their resolve. Despite the trials they face, Ponyo and Sousuke form a strong friendship. They meet many interesting characters, and learn just as many lessons from them.\r\n\r\n', 'Seni dan Budaya', 'Althof Rafaela Romadhona', 'BEM KM IPB', 5, 0),
(10, 'Gemastik', 'Tapir0.png', 'Dalam video itu, Angah mengaku belum mendapat informasi dari pihak publisher yang dihubungi oleh Syakir. Untuk itu, Angah meminta para penyanyi menulis \"Cover\" untuk judul video yang diunggah ke Youtube, karena ia merasa belum dihubungi. Meski demikian, ia bangga bila penyanyi mencantumkan \"Cover\" ketika lagu itu dibawakan ulang.', 'Tak sulit untuk meneropong makna lagu â€œAisyah Istri Rasulullahâ€. Lagu ini seakan ingin membawa para pendengarnya menjelajahi romansa kisah cinta Nabi Muhammad dengan istri ketiganya itu. Dikemas dengan irama yang sendu, dan dipadu aransemen yang sederhana, lagu â€œAisyah Istri Rasulullahâ€ ini cukup gampang diterima telinga. Liriknya yang sederhana dan terkesan mudah dipahami, juga menjadi nilai tambah yang membuat lagu ini mudah dimengerti pendengar. Lagu ini berusaha memotret betapa romantisnya kisah cinta Nabi dengan sang istri, Aisyah. Hal yang jarang diketahui umum, khususnya generasi muda muslim saat ini.', 'E-Sport', 'Alvin Ferdiansyah Putri', 'Himalkom', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `bio` longtext DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL, 
  `instansi` varchar(50) DEFAULT NULL, 
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
