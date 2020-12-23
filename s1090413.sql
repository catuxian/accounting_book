-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-23 13:10:47
-- 伺服器版本： 10.4.17-MariaDB
-- PHP 版本： 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1090413`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account_items`
--

CREATE TABLE `account_items` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '流水號',
  `item` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '品項名稱',
  `payment` int(24) UNSIGNED NOT NULL COMMENT '價格',
  `type` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '類別',
  `date` date NOT NULL DEFAULT current_timestamp() COMMENT '購買時間',
  `user` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '使用者'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account_items`
--
ALTER TABLE `account_items`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account_items`
--
ALTER TABLE `account_items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
