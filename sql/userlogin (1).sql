-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 08:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_all`
--

CREATE TABLE `users_all` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `access_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_all`
--

INSERT INTO `users_all` (`id`, `name`, `email`, `password`, `phone`, `user_id`, `access_token`) VALUES
(1, 'Au', 'auei@gmail.com', '12345', '0922766755', '', ''),
(2, 'nack', 'nackky@gmail.com', '1111155555', '0855546971', '', ''),
(3, 'pond', 'teerapat0829@gmail.com', '12345678', '0624316866', 'Ue5ea86966c0f46b6bad0f62a43293c88', 'eyJhbGciOiJIUzI1NiJ9.gZB8wdoQiq9iI2GztW2Stf_DmApcPPyAvceTJHIYdbd-PxJtR_Y61YkrpfD0HIgSMrdGNAKdj0qTBQQ9JVBnaaFlO5qkQBesN-EN7-9LD1MFAzinnK3QuvjHpJy1a3eeZiV0kfT0QsMxbwz-IucQn326w5Ok3vu456-Vq2hvQKU.-XhyjGRWnxHrmZjV0wuQHxeslUhj772e2uHekTz99Mw'),
(4, 'หลิน-กุลิสรา', 'nmichel99999@gmail.com', '', '0829985001', 'U24cf8c696866a48aaa1da60ed0304798', 'eyJhbGciOiJIUzI1NiJ9.nMZ5cYznp3AMMOKjmQ7GQx1v43me0tUiswdrwSyzWmtBLgNBeEX6j6sv4zeH9WDwfdDbK8ecOvYgPI9G_GTfEcEj1_GTJDsL_ImsX7lHNegHG0TFSALCt2u3tD0JAIe3uLKFJijvZ57_jloXkR7bBeil4E8NlsIqGDZHSd4IM0Q.mPiDYjG7d9tWJ-EoCBaxwcb9U96Q5EEz0queWAT_hC4'),
(6, 'FaNRong(ฟร้องค์)', 'm26.17732@gmail.com', '', '0935861951', 'U5bdf65b6d5e39a82b3103068d2067490', 'eyJhbGciOiJIUzI1NiJ9.JhoDKYBhDHcYJJ4pvhdHyoJ7RFTfb0Mgp4RuOaQC9UNAzmalbiZUsb4MnciZAVDF2nvNzM7HjxiQnnIVuG2FCHPSj9L4YxER25LpYqs5DRAg__nZTrb0xiivvjRQn2ioU4m19yZRj10YNrG7Ur3A5sZfTAgZeyWYgmE6t33_P68.5ixrcrCMq5rhitOTNtc1xlntzA2tDRfRTS7_y7O46MY'),
(7, 'ᴾᴬᴼ◡̈', 'pao42784@gmail.com', '', '0847000256', 'U40f5fb9ef9e04c5c1cc56ee2e5c7aed3', 'eyJhbGciOiJIUzI1NiJ9.GjKYKvTSCTFhbKQdGFrEhqUCAIL9DVPX3-6_kUrzDn1uf1_jTxPyfR8a5ciDRih_DnrgCtAwJNVQtkZeePSkEl65C0aeFhhDy8OTNwVK9HtEIJ3qS9lXdIJMXBx7Gcre9uuWAatsVbP5toxNRcMi02dAfigMDY1yqijP9o-Em7c.QxgsIRz_-jXwKfXjhcGaem6riP1xKQzr8gdrL_jjDA4'),
(8, 'อุ๊.', 'aujang_tingtong@hotmail.com', '', '12345678', 'U0a6ca091be45a9c880fc1d8f8922c4d2', 'eyJhbGciOiJIUzI1NiJ9.NIyZ1C0ZjoaWIHdaTokuPsuOSa5aIKmCaWDAu07Jct67rPEfE6lFs68FC8gYIYf4XNK3iU0QWO0u6kqWUHxkj14Y2Rws3n-xhMQVH8IrpNW2WOC2fbysN6PciyFBOPQLC21JVAMf0p1yYSYgpFQsq4Las0682eYTLLN0q7FJaDM.NlmL2DiRqasFyngS-DhFbeVVrUMuZNv3cqOxPwKsl7M');

-- --------------------------------------------------------

--
-- Table structure for table `user_timestamp`
--

CREATE TABLE `user_timestamp` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `time_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_timestamp`
--

INSERT INTO `user_timestamp` (`id`, `name`, `email`, `user_id`, `access_token`, `time_login`) VALUES
(21, 'pppond', 'pangpond575@gmail.com', 'Ue5ea86966c0f46b6bad0f62a43293c88', 'eyJhbGciOiJIUzI1NiJ9.gZB8wdoQiq9iI2GztW2Stf_DmApcPPyAvceTJHIYdbd-PxJtR_Y61YkrpfD0HIgSMrdGNAKdj0qTBQQ9JVBnaaFlO5qkQBesN-EN7-9LD1MFAzinnK3QuvjHpJy1a3eeZiV0kfT0QsMxbwz-IucQn326w5Ok3vu456-Vq2hvQKU.-XhyjGRWnxHrmZjV0wuQHxeslUhj772e2uHekTz99Mw', '2021-12-17 07:14:00'),
(22, 'pppond', 'pangpond575@gmail.com', 'Ue5ea86966c0f46b6bad0f62a43293c88', 'eyJhbGciOiJIUzI1NiJ9.gZB8wdoQiq9iI2GztW2Stf_DmApcPPyAvceTJHIYdbd-PxJtR_Y61YkrpfD0HIgSMrdGNAKdj0qTBQQ9JVBnaaFlO5qkQBesN-EN7-9LD1MFAzinnK3QuvjHpJy1a3eeZiV0kfT0QsMxbwz-IucQn326w5Ok3vu456-Vq2hvQKU.-XhyjGRWnxHrmZjV0wuQHxeslUhj772e2uHekTz99Mw', '2021-12-17 07:14:33'),
(23, 'pppond', 'pangpond575@gmail.com', 'Ue5ea86966c0f46b6bad0f62a43293c88', 'eyJhbGciOiJIUzI1NiJ9.gZB8wdoQiq9iI2GztW2Stf_DmApcPPyAvceTJHIYdbd-PxJtR_Y61YkrpfD0HIgSMrdGNAKdj0qTBQQ9JVBnaaFlO5qkQBesN-EN7-9LD1MFAzinnK3QuvjHpJy1a3eeZiV0kfT0QsMxbwz-IucQn326w5Ok3vu456-Vq2hvQKU.-XhyjGRWnxHrmZjV0wuQHxeslUhj772e2uHekTz99Mw', '2021-12-17 07:15:05'),
(24, 'pppond', 'pangpond575@gmail.com', 'Ue5ea86966c0f46b6bad0f62a43293c88', 'eyJhbGciOiJIUzI1NiJ9.gZB8wdoQiq9iI2GztW2Stf_DmApcPPyAvceTJHIYdbd-PxJtR_Y61YkrpfD0HIgSMrdGNAKdj0qTBQQ9JVBnaaFlO5qkQBesN-EN7-9LD1MFAzinnK3QuvjHpJy1a3eeZiV0kfT0QsMxbwz-IucQn326w5Ok3vu456-Vq2hvQKU.-XhyjGRWnxHrmZjV0wuQHxeslUhj772e2uHekTz99Mw', '2021-12-17 07:15:24'),
(25, 'pppond', 'pangpond575@gmail.com', 'Ue5ea86966c0f46b6bad0f62a43293c88', 'eyJhbGciOiJIUzI1NiJ9.gZB8wdoQiq9iI2GztW2Stf_DmApcPPyAvceTJHIYdbd-PxJtR_Y61YkrpfD0HIgSMrdGNAKdj0qTBQQ9JVBnaaFlO5qkQBesN-EN7-9LD1MFAzinnK3QuvjHpJy1a3eeZiV0kfT0QsMxbwz-IucQn326w5Ok3vu456-Vq2hvQKU.-XhyjGRWnxHrmZjV0wuQHxeslUhj772e2uHekTz99Mw', '2021-12-17 07:15:45'),
(26, 'อุ๊.', 'aujang_tingtong@hotmail.com', 'U0a6ca091be45a9c880fc1d8f8922c4d2', 'eyJhbGciOiJIUzI1NiJ9.NIyZ1C0ZjoaWIHdaTokuPsuOSa5aIKmCaWDAu07Jct67rPEfE6lFs68FC8gYIYf4XNK3iU0QWO0u6kqWUHxkj14Y2Rws3n-xhMQVH8IrpNW2WOC2fbysN6PciyFBOPQLC21JVAMf0p1yYSYgpFQsq4Las0682eYTLLN0q7FJaDM.NlmL2DiRqasFyngS-DhFbeVVrUMuZNv3cqOxPwKsl7M', '2021-12-17 07:19:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_all`
--
ALTER TABLE `users_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_timestamp`
--
ALTER TABLE `user_timestamp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_all`
--
ALTER TABLE `users_all`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_timestamp`
--
ALTER TABLE `user_timestamp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
