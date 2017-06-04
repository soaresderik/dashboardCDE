-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Maio-2017 às 22:24
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cde_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `body`, `post_image`, `created_at`) VALUES
(1, 1, 1, 'PHP para Iniciantes', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et molestie eros. Maecenas dignissim, erat at faucibus finibus, nunc nibh finibus lacus, sed gravida leo urna at erat. Proin et efficitur dolor, eget interdum enim. Cras nec ante quis tellus gravida ornare. Duis arcu lacus, elementum quis iaculis id, mattis ut turpis. Pellentesque id dignissim dolor. Curabitur finibus facilisis pulvinar. Nullam urna arcu, malesuada a purus a, pharetra pulvinar lacus. Curabitur quis ornare felis, ut ultrices nulla.</p>\r\n\r\n<p>Fusce placerat aliquam erat, et sagittis diam accumsan vitae. In elementum vel augue sit amet bibendum. Nulla cursus elit metus. Ut auctor nisl quis bibendum tincidunt. Integer gravida nisi id urna rhoncus, nec tristique magna efficitur. Mauris non blandit ipsum, ut tempus purus. Praesent rhoncus gravida aliquam. Nulla finibus mi id fermentum fringilla. Morbi volutpat, massa eget sodales tempus, est risus elementum leo, pulvinar fermentum diam nibh a mi. Phasellus porttitor vitae mauris non elementum. Sed ut lacinia sapien. Proin a metus ullamcorper lectus ultricies euismod. Donec vitae turpis eros. Morbi at imperdiet ligula. Mauris sed rutrum lectus. Phasellus eget nulla congue, dictum dolor ac, dapibus justo.</p>\r\n', 'OS_Ubuntu.png', '2017-03-17 19:22:28'),
(2, 2, 1, 'Python From Scratch', '<p>. Cras nec ante quis tellus gravida ornare. Duis arcu lacus, elementum quis iaculis id, mattis ut turpis. Pellentesque id dignissim dolor. Curabitur finibus facilisis pulvinar. Nullam urna arcu, malesuada a purus a, pharetra pulvinar lacus. Curabitur quis ornare felis, ut ultrices nulla.</p>\r\n\r\n<p>Fusce placerat aliquam erat, et sagittis diam accumsan vitae. In elementum vel augue sit amet bibendum. Nulla cursus elit metus. Ut auctor nisl quis bibendum tincidunt. Intes elementum leo, pulvinar fermentum diam nibh a mi. Phasellus porttitor vitae mauris non elementum. Sed ut lacinia sapien. Proin a metus ullamcorper lectus ultricies euismod. Donec vitae turpis eros. Morbi at imperdiet ligula. Mauris sed rutrum lectus. Phasellus eget nulla congue, dictum dolor ac, dapibus justo.</p>\r\n', 'ci.png', '2017-03-17 19:23:23'),
(4, 2, 1, 'Programação Javascript', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'noimage.jpg', '2017-05-20 03:39:50'),
(5, 0, 0, 'NodeJS e Express', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '2017-05-20 04:51:05'),
(6, 0, 0, 'Programação Android', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lectus magna, fringilla at nisi ac, eleifend interdum erat. Mauris rhoncus laoreet nunc. Phasellus metus nibh, euismod in tortor sed, tincidunt venenatis lectus. Proin euismod imperdiet enim eu auctor. Fusce eleifend sem in nunc hendrerit, non volutpat tellus lacinia. Vestibulum a risus neque. Mauris vel fringilla nunc. Integer nec varius ligula, et commodo enim. Ut posuere nunc velit, non cursus dolor aliquam sed. Nam ultricies, diam eu ultricies ultricies, purus felis vestibulum neque, eu efficitur turpis purus a diam. Ut eget magna vel odio auctor placerat. Vestibulum eget mauris molestie, gravida libero nec, efficitur orci. Vestibulum at justo elit.</p>\r\n\r\n<p>Nam orci lacus, gravida quis lobortis sed, interdum venenatis velit. Nulla dictum massa vitae iaculis blandit. Etiam viverra, ex ut rhoncus lobortis, ex neque facilisis quam, id hendrerit ligula massa at urna. Duis at enim venenatis, molestie felis et, aliquet diam. Maecenas ac ultricies massa. Morbi eu egestas nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '', '2017-05-20 13:38:36'),
(7, 0, 0, 'Notebook da Samsung', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lectus magna, fringilla at nisi ac, eleifend interdum erat. Mauris rhoncus laoreet nunc. Phasellus metus nibh, euismod in tortor sed, tincidunt venenatis lectus. Proin euismod imperdiet enim eu auctor. Fusce eleifend sem in nunc hendrerit, non volutpat tellus lacinia. Vestibulum a risus neque. Mauris vel fringilla nunc. Integer nec varius ligula, et commodo enim. Ut posuere nunc velit, non cursus dolor.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lectus magna, fringilla at nisi ac, eleifend interdum erat. Mauris rhoncus laoreet nunc. Phasellus metus nibh, euismod in tortor sed, tincidunt venenatis lectus. Proin euismod imperdiet enim eu auctor. Fusce eleifend sem in nunc hendrerit, non volutpat tellus lacinia. Vestibulum a risus neque. Mauris vel fringilla nunc. Integer nec varius ligula, et commodo enim. Ut posuere nunc velit, non cursus dolor.</p>\r\n', '', '2017-05-20 13:40:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `criado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `password`, `criado`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '2017-05-25 20:22:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
