-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 12:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_db`
--

CREATE TABLE `content_db` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_db`
--

INSERT INTO `content_db` (`id`, `title`, `content`) VALUES
(1, 'Q1. What is an operating system?', 'The operating system is a software program that facilitates computer hardware to communicate and operate with the computer software. It is the most important part of a computer system without it computer is just like a box.'),
(2, 'Q2. What is the main purpose of an operating system?', 'There are two main purposes of an operating system:\r\n\r\nIt is designed to make sure that a computer system performs well by managing its computational activities.\r\nIt provides an environment for the development and execution of programs.'),
(3, 'Q3. What are the different operating systems?', 'a. Batched operating systems\r\nb. Distributed operating systems\r\nc. Timesharing operating systems\r\nd. Multi-programmed operating systems\r\ne. Real-time operating systems'),
(4, 'Q4. What is kernel?', 'Kernel is the core and most important part of a computer operating system which provides basic services for all parts of the OS.'),
(5, 'Q5.  What is monolithic kernel?', 'A monolithic kernel is a kernel which includes all operating system code is in single executable image.'),
(6, 'Q6. What do you mean by a process?', 'An executing program is known as process. There are two types of processes:\r\n\r\na. Operating System Processes\r\nb. User Processes'),
(7, 'Q7. What are the different states of a process?', 'A list of different states of process:\r\n\r\na. New Process\r\nb. Running Process\r\nc. Waiting Process\r\nd. Ready Process\r\ne. Terminated Process'),
(8, 'Q8. What is the difference between micro kernel and macro kernel?', 'a. Micro kernel: micro kernel is the kernel which runs minimal performance affecting services for operating system. In micro kernel operating system all other operations are performed by processor.\r\n\r\nb. Macro Kernel: Macro Kernel is a combination of micro and monolithic kernel.'),
(9, 'Q9. What is the use of paging in operating system?', 'Paging is used to solve the external fragmentation problem in operating system. This technique ensures that the data you need is available as quickly as possible'),
(10, 'Q10. What is the concept of demand paging?', 'Demand paging specifies that if an area of memory is not currently being used, it is swapped to disk to make room for an application\'s need.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_db`
--
ALTER TABLE `content_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content_db`
--
ALTER TABLE `content_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
