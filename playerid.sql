-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-02-14 00:50:37
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
-- 資料表結構 `playerid`
--

CREATE TABLE `playerid` (
  `id` int(10) UNSIGNED NOT NULL,
  `playername` varchar(24) DEFAULT NULL,
  `playerid` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `playerid`
--

INSERT INTO `playerid` (`id`, `playername`, `playerid`) VALUES
(1, 'Nickeil Alexander-Walker', 1),
(2, 'Justin Anderson', 2),
(3, 'D.J. Augustin', 3),
(4, 'Marvin Bagley III', 4),
(5, 'DeAndre\' Bembry', 5),
(6, 'D?vis Bert?ns', 6),
(7, 'Armoni Brooks', 7),
(8, 'Charlie Brown Jr.', 8),
(9, 'Chaundee Brown Jr.', 9),
(10, 'Moses Brown', 10),
(11, 'Vernon Carey Jr.', 11),
(12, 'Jevon Carter', 12),
(13, 'Willie Cauley-Stein', 13),
(14, 'DeMarcus Cousins', 14),
(15, 'Robert Covington', 15),
(16, 'Torrey Craig', 16),
(17, 'Seth Curry', 17),
(18, 'Spencer Dinwiddie', 18),
(19, 'Donte DiVincenzo', 19),
(20, 'Jeff Dowtin', 20),
(21, 'Goran Dragi?', 21),
(22, 'Andre Drummond', 22),
(23, 'James Ennis III', 23),
(24, 'Drew Eubanks', 24),
(25, 'Bruno Fernando', 25),
(26, 'Malik Fitts', 26),
(27, 'Bryn Forbes', 27),
(28, 'Tim Frazier', 28),
(29, 'Wenyen Gabriel', 29),
(30, 'Langston Galloway', 30),
(31, 'Tyrese Haliburton', 31),
(32, 'James Harden', 32),
(33, 'Montrezl Harrell', 33),
(34, 'Josh Hart', 34),
(35, 'Juancho Hernang?mez', 35),
(36, 'Buddy Hield', 36),
(37, 'Malcolm Hill', 37),
(38, 'Aaron Holiday', 38),
(39, 'Justin Holiday', 39),
(40, 'Rodney Hood', 40),
(41, 'Danuel House Jr.', 41),
(42, 'Elijah Hughes', 42),
(43, 'Serge Ibaka', 43),
(44, 'Josh Jackson', 44),
(45, 'Justin Jackson', 45),
(46, 'Alize Johnson', 46),
(47, 'Keon Johnson', 47),
(48, 'Tyler Johnson', 48),
(49, 'Carlik Jones', 49),
(50, 'DeAndre Jordan', 50),
(51, 'Georgios Kalaitzakis', 51),
(52, 'Braxton Key', 52),
(53, 'Kevin Knox', 53),
(54, 'Luke Kornet', 54),
(55, 'Jeremy Lamb', 55),
(56, 'Romeo Langford', 56),
(57, 'Caris LeVert', 57),
(58, 'Didi Louzada', 58),
(59, 'Trey Lyles', 59),
(60, 'Kelan Martin', 60),
(61, 'Mac McClung', 61),
(62, 'CJ McCollum', 62),
(63, 'Paul Millsap', 63),
(64, 'Greg Monroe', 64),
(65, 'Juwan Morgan', 65),
(66, 'Mychal Mulder', 66),
(67, 'Larry Nance Jr.', 67),
(68, 'Semi Ojeleye', 68),
(69, 'Reggie Perry', 69),
(70, 'Kristaps Porzi??is', 70),
(71, 'Norman Powell', 71),
(72, 'Cam Reddish', 72),
(73, 'Josh Richardson', 73),
(74, 'Justin Robinson', 74),
(75, 'Rajon Rondo', 75),
(76, 'Domantas Sabonis', 76),
(77, 'Tom?? Satoransk?', 77),
(78, 'Dennis Schr?der', 78),
(79, 'Chris Silva', 79),
(80, 'Javonte Smart', 80),
(81, 'Ish Smith', 81),
(82, 'Jalen Smith', 82),
(83, 'Xavier Sneed', 83),
(84, 'Tony Snell', 84),
(85, 'Nik Stauskas', 85),
(86, 'Lance Stephenson', 86),
(87, 'Daniel Theis', 87),
(88, 'Isaiah Thomas', 88),
(89, 'Tristan Thompson', 89),
(90, 'Rayjon Tucker', 90),
(91, 'Denzel Valentine', 91),
(92, 'Brad Wanamaker', 92),
(93, 'Tremont Waters', 93),
(94, 'Derrick White', 94),
(95, 'Justise Winslow', 95),
(96, 'Moses Wright', 96),
(97, 'Thaddeus Young', 97),
(98, 'Precious Achiuwa', 98),
(99, 'Steven Adams', 99),
(100, 'Bam Adebayo', 100),
(101, 'Santi Aldama', 101),
(102, 'LaMarcus Aldridge', 102),
(103, 'Grayson Allen', 103),
(104, 'Jarrett Allen', 104),
(105, 'Jose Alvarado', 105),
(106, 'Kyle Anderson', 106),
(107, 'Giannis Antetokounmpo', 107),
(108, 'Thanasis Antetokounmpo', 108),
(109, 'Carmelo Anthony', 109),
(110, 'Cole Anthony', 110),
(111, 'OG Anunoby', 111),
(112, 'Ryan Arcidiacono', 112),
(113, 'Trevor Ariza', 113),
(114, 'Deni Avdija', 114),
(115, 'Joel Ayayi', 115),
(116, 'Deandre Ayton', 116),
(117, 'Udoka Azubuike', 117),
(118, 'LaMelo Ball', 118),
(119, 'Lonzo Ball', 119),
(120, 'Mo Bamba', 120),
(121, 'Desmond Bane', 121),
(122, 'Dalano Banton', 122),
(123, 'Cat Barber', 123),
(124, 'Harrison Barnes', 124),
(125, 'Scottie Barnes', 125),
(126, 'RJ Barrett', 126),
(127, 'Will Barton', 127),
(128, 'Charles Bassey', 128),
(129, 'Paris Bass', 129),
(130, 'Keita Bates-Diop', 130),
(131, 'Nicolas Batum', 131),
(132, 'Kent Bazemore', 132),
(133, 'Darius Bazley', 133),
(134, 'Bradley Beal', 134),
(135, 'Malik Beasley', 135),
(136, 'Jordan Bell', 136),
(137, 'Patrick Beverley', 137),
(138, 'Saddiq Bey', 138),
(139, 'Khem Birch', 139),
(140, 'Goga Bitadze', 140),
(141, 'Bismack Biyombo', 141),
(142, 'Nemanja Bjelica', 142),
(143, 'Eric Bledsoe', 143),
(144, 'Keljin Blevins', 144),
(145, 'Bogdan Bogdanovi?', 145),
(146, 'Bojan Bogdanovi?', 146),
(147, 'Bol Bol', 147),
(148, 'Leandro Bolmaro', 148),
(149, 'Isaac Bonga', 149),
(150, 'Devin Booker', 150),
(151, 'Brandon Boston Jr.', 151),
(152, 'Chris Boucher', 152),
(153, 'James Bouknight', 153),
(154, 'Avery Bradley', 154),
(155, 'Tony Bradley', 155),
(156, 'Ignas Brazdeikis', 156),
(157, 'Mikal Bridges', 157),
(158, 'Miles Bridges', 158),
(159, 'Oshae Brissett', 159),
(160, 'Malcolm Brogdon', 160),
(161, 'Dillon Brooks', 161),
(162, 'Bruce Brown', 162),
(163, 'Greg Brown III', 163),
(164, 'Jaylen Brown', 164),
(165, 'Sterling Brown', 165),
(166, 'Troy Brown Jr.', 166),
(167, 'Jalen Brunson', 167),
(168, 'Thomas Bryant', 168),
(169, 'Shaq Buchanan', 169),
(170, 'Reggie Bullock', 170),
(171, 'Trey Burke', 171),
(172, 'Alec Burks', 172),
(173, 'Jared Butler', 173),
(174, 'Jimmy Butler', 174),
(175, 'Devontae Cacok', 175),
(176, 'Kentavious Caldwell-Pope', 176),
(177, 'Facundo Campazzo', 177),
(178, 'Vlatko ?an?ar', 178),
(179, 'Devin Cannady', 179),
(180, 'Clint Capela', 180),
(181, 'Wendell Carter Jr.', 181),
(182, 'Alex Caruso', 182),
(183, 'Ahmad Caver', 183),
(184, 'Justin Champagnie', 184),
(185, 'Zylan Cheatham', 185),
(186, 'Chris Chiozza', 186),
(187, 'Josh Christopher', 187),
(188, 'Marquese Chriss', 188),
(189, 'Brandon Clarke', 189),
(190, 'Gary Clark', 190),
(191, 'Jordan Clarkson', 191),
(192, 'Nic Claxton', 192),
(193, 'Amir Coffey', 193),
(194, 'Darren Collison', 194),
(195, 'John Collins', 195),
(196, 'Zach Collins', 196),
(197, 'Mike Conley', 197),
(198, 'Pat Connaughton', 198),
(199, 'Tyler Cook', 199),
(200, 'Sharife Cooper', 200),
(201, 'Petr Cornelie', 201),
(202, 'Jae Crowder', 202),
(203, 'Jarrett Culver', 203),
(204, 'Jarron Cumberland', 204),
(205, 'Cade Cunningham', 205),
(206, 'Stephen Curry', 206),
(207, 'Anthony Davis', 207),
(208, 'Ed Davis', 208),
(209, 'Terence Davis', 209),
(210, 'Gabriel Deck', 210),
(211, 'Dewayne Dedmon', 211),
(212, 'Sam Dekker', 212),
(213, 'Javin DeLaurier', 213),
(214, 'DeMar DeRozan', 214),
(215, 'Mamadi Diakite', 215),
(216, 'Cheick Diallo', 216),
(217, 'Hamidou Diallo', 217),
(218, 'Gorgui Dieng', 218),
(219, 'Luka Don?i?', 219),
(220, 'Luguentz Dort', 220),
(221, 'Ayo Dosunmu', 221),
(222, 'Damyean Dotson', 222),
(223, 'Devon Dotson', 223),
(224, 'Sekou Doumbouya', 224),
(225, 'PJ Dozier', 225),
(226, 'Chris Duarte', 226),
(227, 'David Duke Jr.', 227),
(228, 'Kris Dunn', 228),
(229, 'Kevin Durant', 229),
(230, 'Jaime Echenique', 230),
(231, 'Anthony Edwards', 231),
(232, 'Carsen Edwards', 232),
(233, 'Kessler Edwards', 233),
(234, 'Rob Edwards', 234),
(235, 'CJ Elleby', 235),
(236, 'Wayne Ellington', 236),
(237, 'Joel Embiid', 237),
(238, 'Tacko Fall', 238),
(239, 'Derrick Favors', 239),
(240, 'Dorian Finney-Smith', 240),
(241, 'Malachi Flynn', 241),
(242, 'Aleem Ford', 242),
(243, 'Trent Forrest', 243),
(244, 'Evan Fournier', 244),
(245, 'De\'Aaron Fox', 245),
(246, 'Melvin Frazier', 246),
(247, 'Markelle Fultz', 247),
(248, 'Daniel Gafford', 248),
(249, 'Danilo Gallinari', 249),
(250, 'Darius Garland', 250),
(251, 'Marcus Garrett', 251),
(252, 'Usman Garuba', 252),
(253, 'Luka Garza', 253),
(254, 'Rudy Gay', 254),
(255, 'Paul George', 255),
(256, 'Taj Gibson', 256),
(257, 'Josh Giddey', 257),
(258, 'Shai Gilgeous-Alexander', 258),
(259, 'Anthony Gill', 259),
(260, 'Freddie Gillespie', 260),
(261, 'Rudy Gobert', 261),
(262, 'Brandon Goodwin', 262),
(263, 'Jordan Goodwin', 263),
(264, 'Aaron Gordon', 264),
(265, 'Eric Gordon', 265),
(266, 'Devonte\' Graham', 266),
(267, 'Jerami Grant', 267),
(268, 'Hassani Gravett', 268),
(269, 'Danny Green', 269),
(270, 'Draymond Green', 270),
(271, 'JaMychal Green', 271),
(272, 'Javonte Green', 272),
(273, 'Jalen Green', 273),
(274, 'Jeff Green', 274),
(275, 'Josh Green', 275),
(276, 'Blake Griffin', 276),
(277, 'Quentin Grimes', 277),
(278, 'Kyle Guy', 278),
(279, 'Rui Hachimura', 279),
(280, 'Tyler Hall', 280),
(281, 'R.J. Hampton', 281),
(282, 'Tim Hardaway Jr.', 282),
(283, 'Maurice Harkless', 283),
(284, 'Jared Harper', 284),
(285, 'Gary Harris', 285),
(286, 'Joe Harris', 286),
(287, 'Shaquille Harrison', 287),
(288, 'Tobias Harris', 288),
(289, 'Isaiah Hartenstein', 289),
(290, 'Udonis Haslem', 290),
(291, 'Sam Hauser', 291),
(292, 'Jaxson Hayes', 292),
(293, 'Killian Hayes', 293),
(294, 'Gordon Hayward', 294),
(295, 'Aaron Henry', 295),
(296, 'Willy Hernang?mez', 296),
(297, 'Tyler Herro', 297),
(298, 'Haywood Highsmith', 298),
(299, 'George Hill', 299),
(300, 'Solomon Hill', 300),
(301, 'Nate Hinton', 301),
(302, 'Jaylen Hoard', 302),
(303, 'Jrue Holiday', 303),
(304, 'Richaun Holmes', 304),
(305, 'Scotty Hopson', 305),
(306, 'Al Horford', 306),
(307, 'Talen Horton-Tucker', 307),
(308, 'Dwight Howard', 308),
(309, 'Markus Howard', 309),
(310, 'Kevin Huerter', 310),
(311, 'Jay Huff', 311),
(312, 'De\'Andre Hunter', 312),
(313, 'Feron Hunt', 313),
(314, 'Chandler Hutchison', 314),
(315, 'Bones Hyland', 315),
(316, 'Andre Iguodala', 316),
(317, 'Joe Ingles', 317),
(318, 'Brandon Ingram', 318),
(319, 'Kyrie Irving', 319),
(320, 'Wes Iwundu', 320),
(321, 'Frank Jackson', 321),
(322, 'Isaiah Jackson', 322),
(323, 'Jaren Jackson Jr.', 323),
(324, 'Reggie Jackson', 324),
(325, 'LeBron James', 325),
(326, 'DeJon Jarreau', 326),
(327, 'DaQuan Jeffries', 327),
(328, 'Ty Jerome', 328),
(329, 'Isaiah Joe', 329),
(330, 'B.J. Johnson', 330),
(331, 'Cameron Johnson', 331),
(332, 'David Johnson', 332),
(333, 'James Johnson', 333),
(334, 'Jalen Johnson', 334),
(335, 'Joe Johnson', 335),
(336, 'Keldon Johnson', 336),
(337, 'Stanley Johnson', 337),
(338, 'Nikola Joki?', 338),
(339, 'Damian Jones', 339),
(340, 'Derrick Jones Jr.', 340),
(341, 'Herbert Jones', 341),
(342, 'Jemerrio Jones', 342),
(343, 'Kai Jones', 343),
(344, 'Mason Jones', 344),
(345, 'Tre Jones', 345),
(346, 'Tyus Jones', 346),
(347, 'Cory Joseph', 347),
(348, 'Frank Kaminsky', 348),
(349, 'Enes Freedom', 349),
(350, 'Luke Kennard', 350),
(351, 'George King', 351),
(352, 'Louis King', 352),
(353, 'Corey Kispert', 353),
(354, 'Maxi Kleber', 354),
(355, 'Brandon Knight', 355),
(356, 'Nathan Knight', 356),
(357, 'John Konchar', 357),
(358, 'Furkan Korkmaz', 358),
(359, 'Vit Krejci', 359),
(360, 'Arnoldas Kulboka', 360),
(361, 'Jonathan Kuminga', 361),
(362, 'Kyle Kuzma', 362),
(363, 'Anthony Lamb', 363),
(364, 'Jock Landale', 364),
(365, 'Zach LaVine', 365),
(366, 'Jake Layman', 366),
(367, 'Damion Lee', 367),
(368, 'Saben Lee', 368),
(369, 'Alex Len', 369),
(370, 'Kira Lewis Jr.', 370),
(371, 'Scottie Lewis', 371),
(372, 'Damian Lillard', 372),
(373, 'Nassir Little', 373),
(374, 'Isaiah Livers', 374),
(375, 'Kevon Looney', 375),
(376, 'Brook Lopez', 376),
(377, 'Robin Lopez', 377),
(378, 'Kevin Love', 378),
(379, 'Kyle Lowry', 379),
(380, 'Gabriel Lundberg', 380),
(381, 'Timoth? Luwawu-Cabarrot', 381),
(382, 'Th?o Maledon', 382),
(383, 'Sandro Mamukelashvili', 383),
(384, 'Terance Mann', 384),
(385, 'Tre Mann', 385),
(386, 'Boban Marjanovi?', 386),
(387, 'Lauri Markkanen', 387),
(388, 'Naji Marshall', 388),
(389, 'Caleb Martin', 389),
(390, 'Cody Martin', 390),
(391, 'Kenyon Martin Jr.', 391),
(392, 'Garrison Mathews', 392),
(393, 'Dakota Mathias', 393),
(394, 'Wesley Matthews', 394),
(395, 'Tyrese Maxey', 395),
(396, 'Skylar Mays', 396),
(397, 'Miles McBride', 397),
(398, 'T.J. McConnell', 398),
(399, 'Jalen McDaniels', 399),
(400, 'Jaden McDaniels', 400),
(401, 'Doug McDermott', 401),
(402, 'JaVale McGee', 402),
(403, 'Cameron McGriff', 403),
(404, 'Rodney McGruder', 404),
(405, 'Alfonzo McKinnie', 405),
(406, 'JaQuori McLaughlin', 406),
(407, 'Jordan McLaughlin', 407),
(408, 'Ben McLemore', 408),
(409, 'De\'Anthony Melton', 409),
(410, 'Sam Merrill', 410),
(411, 'Chimezie Metu', 411),
(412, 'Khris Middleton', 412),
(413, 'C.J. Miles', 413),
(414, 'Patty Mills', 414),
(415, 'Shake Milton', 415),
(416, 'Davion Mitchell', 416),
(417, 'Donovan Mitchell', 417),
(418, 'Evan Mobley', 418),
(419, 'Malik Monk', 419),
(420, 'Moses Moody', 420),
(421, 'Matt Mooney', 421),
(422, 'Xavier Moon', 422),
(423, 'Ja Morant', 423),
(424, 'Jaylen Morris', 424),
(425, 'Markieff Morris', 425),
(426, 'Marcus Morris', 426),
(427, 'Monte Morris', 427),
(428, 'Emmanuel Mudiay', 428),
(429, 'Ade Murkey', 429),
(430, 'Trey Murphy III', 430),
(431, 'Dejounte Murray', 431),
(432, 'Mike Muscala', 432),
(433, 'Svi Mykhailiuk', 433),
(434, 'Abdel Nader', 434),
(435, 'RJ Nembhard Jr.', 435),
(436, 'Aaron Nesmith', 436),
(437, 'Raul Neto', 437),
(438, 'Malik Newman', 438),
(439, 'Georges Niang', 439),
(440, 'Daishen Nix', 440),
(441, 'Zeke Nnaji', 441),
(442, 'Nerlens Noel', 442),
(443, 'Jaylen Nowell', 443),
(444, 'Frank Ntilikina', 444),
(445, 'Jusuf Nurki?', 445),
(446, 'David Nwaba', 446),
(447, 'Jordan Nwora', 447),
(448, 'Chuma Okeke', 448),
(449, 'Josh Okogie', 449),
(450, 'Onyeka Okongwu', 450),
(451, 'Isaac Okoro', 451),
(452, 'KZ Okpala', 452),
(453, 'Victor Oladipo', 453),
(454, 'Cameron Oliver', 454),
(455, 'Kelly Olynyk', 455),
(456, 'Eugene Omoruyi', 456),
(457, 'Royce O\'Neale', 457),
(458, 'Miye Oni', 458),
(459, 'Cedi Osman', 459),
(460, 'Daniel Oturu', 460),
(461, 'Kelly Oubre Jr.', 461),
(462, 'Jaysean Paige', 462),
(463, 'Trayvon Palmer', 463),
(464, 'Kevin Pangos', 464),
(465, 'Jabari Parker', 465),
(466, 'Eric Paschall', 466),
(467, 'Chris Paul', 467),
(468, 'Cameron Payne', 468),
(469, 'Elfrid Payton', 469),
(470, 'Gary Payton II', 470),
(471, 'Norvel Pelle', 471),
(472, 'Jamorko Pickett', 472),
(473, 'Theo Pinson', 473),
(474, 'Mason Plumlee', 474),
(475, 'Jakob Poeltl', 475),
(476, 'Aleksej Pokusevski', 476),
(477, 'Yves Pons', 477),
(478, 'Jordan Poole', 478),
(479, 'Kevin Porter Jr.', 479),
(480, 'Michael Porter Jr.', 480),
(481, 'Otto Porter Jr.', 481),
(482, 'Bobby Portis', 482),
(483, 'Micah Potter', 483),
(484, 'Dwight Powell', 484),
(485, 'Myles Powell', 485),
(486, 'Joshua Primo', 486),
(487, 'Taurean Prince', 487),
(488, 'Payton Pritchard', 488),
(489, 'Trevelin Queen', 489),
(490, 'Neemias Queta', 490),
(491, 'Immanuel Quickley', 491),
(492, 'Jahmi\'us Ramsey', 492),
(493, 'Julius Randle', 493),
(494, 'Austin Reaves', 494),
(495, 'Davon Reed', 495),
(496, 'Paul Reed', 496),
(497, 'Naz Reid', 497),
(498, 'Nick Richards', 498),
(499, 'Austin Rivers', 499),
(500, 'Duncan Robinson', 500),
(501, 'Jeremiah Robinson-Earl', 501),
(502, 'Mitchell Robinson', 502),
(503, 'Isaiah Roby', 503),
(504, 'Derrick Rose', 504),
(505, 'Terrence Ross', 505),
(506, 'Terry Rozier', 506),
(507, 'Ricky Rubio', 507),
(508, 'D\'Angelo Russell', 508),
(509, 'Matt Ryan', 509),
(510, 'Olivier Sarr', 510),
(511, 'Jordan Schakel', 511),
(512, 'Admiral Schofield', 512),
(513, 'Tre Scott', 513),
(514, 'Jay Scrubb', 514),
(515, 'Wayne Selden', 515),
(516, 'Alperen ?eng?n', 516),
(517, 'Collin Sexton', 517),
(518, 'Landry Shamet', 518),
(519, 'Day\'Ron Sharpe', 519),
(520, 'Pascal Siakam', 520),
(521, 'Anfernee Simons', 521),
(522, 'Marko Simonovic', 522),
(523, 'Zavier Simpson', 523),
(524, 'Jericho Sims', 524),
(525, 'Deividas Sirvydis', 525),
(526, 'Marcus Smart', 526),
(527, 'Dennis Smith Jr.', 527),
(528, 'Jaden Springer', 528),
(529, 'Cassius Stanley', 529),
(530, 'Lamar Stevens', 530),
(531, 'Isaiah Stewart', 531),
(532, 'Max Strus', 532),
(533, 'Jalen Suggs', 533),
(534, 'Craig Sword', 534),
(535, 'Keifer Sykes', 535),
(536, 'Jae\'Sean Tate', 536),
(537, 'Jayson Tatum', 537),
(538, 'Terry Taylor', 538),
(539, 'Garrett Temple', 539),
(540, 'Emanuel Terry', 540),
(541, 'Tyrell Terry', 541),
(542, 'Jon Teske', 542),
(543, 'Brodric Thomas', 543),
(544, 'Cam Thomas', 544),
(545, 'Matt Thomas', 545),
(546, 'Klay Thompson', 546),
(547, 'JT Thor', 547),
(548, 'Matisse Thybulle', 548),
(549, 'Killian Tillie', 549),
(550, 'Xavier Tillman Sr.', 550),
(551, 'Isaiah Todd', 551),
(552, 'Obi Toppin', 552),
(553, 'Juan Toscano-Anderson', 553),
(554, 'Karl-Anthony Towns', 554),
(555, 'Gary Trent Jr.', 555),
(556, 'P.J. Tucker', 556),
(557, 'Myles Turner', 557),
(558, 'Jonas Valan?i?nas', 558),
(559, 'Jarred Vanderbilt', 559),
(560, 'Fred VanVleet', 560),
(561, 'Devin Vassell', 561),
(562, 'Gabe Vincent', 562),
(563, 'Nikola Vu?evi?', 563),
(564, 'Dean Wade', 564),
(565, 'Franz Wagner', 565),
(566, 'Moritz Wagner', 566),
(567, 'Ish Wainright', 567),
(568, 'Kemba Walker', 568),
(569, 'Lonnie Walker IV', 569),
(570, 'M.J. Walker', 570),
(571, 'Tyrone Wallace', 571),
(572, 'Derrick Walton', 572),
(573, 'Duane Washington Jr.', 573),
(574, 'P.J. Washington', 574),
(575, 'Yuta Watanabe', 575),
(576, 'Lindy Waters III', 576),
(577, 'Trendon Watford', 577),
(578, 'Paul Watson', 578),
(579, 'Quinndary Weatherspoon', 579),
(580, 'Russell Westbrook', 580),
(581, 'Coby White', 581),
(582, 'Hassan Whiteside', 582),
(583, 'Joe Wieskamp', 583),
(584, 'Aaron Wiggins', 584),
(585, 'Andrew Wiggins', 585),
(586, 'Lindell Wigginton', 586),
(587, 'Brandon Williams', 587),
(588, 'Grant Williams', 588),
(589, 'Kenrich Williams', 589),
(590, 'Lou Williams', 590),
(591, 'Patrick Williams', 591),
(592, 'Robert Williams', 592),
(593, 'Ziaire Williams', 593),
(594, 'D.J. Wilson', 594),
(595, 'Dylan Windler', 595),
(596, 'Cassius Winston', 596),
(597, 'Robert Woodard II', 597),
(598, 'Christian Wood', 598),
(599, 'Delon Wright', 599),
(600, 'McKinley Wright IV', 600),
(601, 'Gabe York', 601),
(602, 'Trae Young', 602),
(603, 'Omer Yurtseven', 603),
(604, 'Cody Zeller', 604),
(605, 'Ivica Zubac', 605),
(607, 'kpp', 606),
(608, 'kpp2', 607);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `playerid`
--
ALTER TABLE `playerid`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `playerid`
--
ALTER TABLE `playerid`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=610;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
