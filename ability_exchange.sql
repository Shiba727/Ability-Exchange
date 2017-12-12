-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-06-07 16:12:50
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ability exchange`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `article_Id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `subjectName` varchar(20) NOT NULL,
  `expectedplace` varchar(20) NOT NULL,
  `expectedTime` varchar(20) NOT NULL,
  `descofUser` varchar(50) NOT NULL,
  `descofOthers` varchar(50) NOT NULL,
  `remark` text NOT NULL,
  `clicks` int(11) NOT NULL,
  `Timestampe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `article`
--

INSERT INTO `article` (`article_Id`, `id`, `title`, `subjectName`, `expectedplace`, `expectedTime`, `descofUser`, `descofOthers`, `remark`, `clicks`, `Timestampe`) VALUES
(1, 2, '[英文口語換健身]', '健身', '捷運綠線都可以', '平日晚上，周末只有上午', '英文TOEIC 980，應外系畢，有多次教學經驗，可以教你生活會話', '希望你能教我使用健身房的一些器材', '本身是World Gym的會員，希望你也是，這樣可以在同間健身房練習。', 12, '2017-05-08'),
(2, 1, '[廣東話/英文換JAVA]', 'JAVA', '捷運藍線都可以', '六日上午', '本身是香港人，可以教你怎麼聽懂廣東話，港片的台詞也都可以', '資工本科系最好，有教學經驗', '之前學過幾個月的Java，最近想再找機會加強，純粹興趣。\r\n只要你對Java有一定程度了解，可以回答我一些關於Java的程式邏輯問題。', 22, '2017-05-16'),
(3, 3, '[自助旅行技巧換統計(SPSS)]', '統計(excel)', '捷運紅線都可以', '平日晚上', '曾單獨自助歐洲半年/杭州/柬埔寨/香港/印尼，也曾帶朋友自助沖繩/新加坡', '徵求有SPSS使用經驗，並熟習電腦操作與統計學的強者。', '統計回歸分析', 24, '2017-05-17'),
(4, 2, '[網頁設計換日文/桌球]', '日文/桌球', '捷運中和線都可以', '平日下午', '本身是美術系出身，從使用Photoshop的視覺設計到html,css的切版', '有日文教學經驗', '本身大學有修過日文，但是只有基礎，想要再進修。', 34, '2017-05-23'),
(5, 2, '韓文換php', 'php', 'coffeshop', '2 p.m', 'I have........................', 'I hope .......................', '我曾經當過韓文家教。', 56, '2017-05-28'),
(9, 4, '[攝影換游泳/足球/畫畫]', '游泳/足球/畫畫', '週五晚上', '公館', '得過攝影大獎', '很會游泳或畫畫或踢足球', '風景/人物/街拍都有拍過，也對相機有一定了解，可幫忙挑適合的相機', 0, '2017-06-07'),
(10, 4, '[烘焙/日式料理換法文]', '法文', '周三下午', '頂溪', '從國中接觸烘焙到現在大概7年，大部分西式甜點都會做，也會一些中式甜點', '可以糾正我的法文發音，有教學經驗佳', '之前有在烹飪教室擔任教學過，所以如果是烘焙新手也可以教較基礎的甜點。\r\n法文主要以口說為主', 0, '2017-06-07'),
(11, 2, '[化妝技巧換深蹲/健身]', '深蹲/健身', '周五 六晚上', '捷運綠線的world gym', '曾多次幫人畫過舞台妝，無教學經驗', '熟悉相關健身器材的使用方式，可以教我安全地使用', '曾多次幫人畫過舞台妝，無教學經驗，初學者也可以幫忙挑選合適的化妝品', 0, '2017-06-07'),
(12, 3, '[英文履歷/書信編輯換行銷實務分享]', '行銷實務分享', '周五 六晚上', '西門 / 忠孝新生', '曾留美一年，TOEFL110(2015.4.6)', '在業界已有3年以上經歷', '本身專長為英文寫作，有多次家教經驗。\r\n最近轉職，工作上需要多了解行銷相關實務。', 0, '2017-06-07');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `gender` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `name`, `username`, `password`, `email`, `tel`, `gender`) VALUES
(1, '管理者', 'admin', 'team9', 'e123456@gamil.com', '091234567', '女'),
(2, 'Tester', 'b123', '12345', 'b123@gmail.com', '0998765432', '男'),
(3, 'The other', 'b234', '12345', 'b234@gmail.com', '0923456789', '女'),
(4, 'janice', 'janice77', 'j12345', 'a332@gmail.com', '0987', '女');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `guest_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `context` text NOT NULL,
  `created_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`guest_id`, `article_id`, `name`, `contact`, `context`, `created_time`) VALUES
(44, 1, '管理者', 'css_test', 'css', '2017-06-07 05:04:05'),
(46, 12, 'Tester', 'b123@gmail.com', '詳細請寄信聯絡', '2017-06-07 10:11:19'),
(47, 12, 'Tester', '', '怎麼還沒聯絡?', '2017-06-07 10:11:43');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_Id`),
  ADD KEY `member_Id` (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MemberAccount` (`username`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`guest_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `article_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `member` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
