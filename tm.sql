-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-02-14 00:51:12
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `nba`
--

-- --------------------------------------------------------

--
-- 資料表結構 `tm`
--

CREATE TABLE `tm` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` int(3) DEFAULT NULL,
  `tm` varchar(3) DEFAULT NULL,
  `tmname` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `tm`
--

INSERT INTO `tm` (`id`, `code`, `tm`, `tmname`) VALUES
(1, 101, 'ATL', '亞特蘭大老鷹'),
(2, 102, 'BOS', '波士頓賽爾蒂克'),
(3, 103, 'BRK', '布魯克林籃網'),
(4, 104, 'CHI', '芝加哥公牛'),
(5, 105, 'CHO', '夏洛特黃蜂'),
(6, 106, 'CLE', '克里夫蘭騎士'),
(7, 107, 'DAL', '達拉斯小牛'),
(8, 108, 'DEN', '丹佛金塊'),
(9, 109, 'DET', '底特律活塞'),
(10, 110, 'GSW', '金洲勇士'),
(11, 111, 'HOU', '休士頓籃網'),
(12, 112, 'IND', '印第安那溜馬'),
(13, 113, 'LAC', '洛杉磯快艇'),
(14, 114, 'LAL', '洛杉磯湖人'),
(15, 115, 'MEM', '曼菲斯灰熊'),
(16, 116, 'MIA', '邁阿密熱火'),
(17, 117, 'MIL', '密爾瓦基公鹿'),
(18, 118, 'MIN', '明尼蘇達灰狼'),
(19, 119, 'NOP', '紐澳良鵜鶘'),
(20, 120, 'NYK', '紐約尼克'),
(21, 121, 'OKC', '奧克拉荷馬雷霆'),
(22, 122, 'ORL', '奧蘭多魔術'),
(23, 123, 'PHI', '費城76人'),
(24, 124, 'PHO', '鳳凰城太陽'),
(25, 125, 'POR', '波特蘭拓荒者'),
(26, 126, 'SAC', '沙加緬度國王'),
(27, 127, 'SAS', '聖安東尼奧馬刺'),
(28, 128, 'TOR', '多倫多暴龍'),
(29, 129, 'UTA', '猶他爵士'),
(30, 130, 'WAS', '華盛頓巫師');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `tm`
--
ALTER TABLE `tm`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tm`
--
ALTER TABLE `tm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
