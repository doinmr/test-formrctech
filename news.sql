-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2022 at 01:35 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2019application`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '自動編碼',
  `news_title` varchar(100) NOT NULL COMMENT '標題',
  `news_content` mediumtext NOT NULL COMMENT '消息內容',
  `news_date` datetime NOT NULL COMMENT '建立時間',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='最新公告 ';

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_content`, `news_date`) VALUES
(4, '2019教學計畫徵件＆系統操作說明會200', '<p>123</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2019教學計畫徵件＆系統操作說明會訂於108年3月14、20日中午12：10-13：30在綜合教學大樓102翻轉教室舉行，本次說明會介紹的計畫類別包含：總整課程、問題導向學習(PBL)、數位教學課程(開放式課程、翻轉教室及磨課師)、教師成長社群及教師傳習團隊等5種計畫。為簡化作業流程，今年度計畫採線上申請(受理至108年4月8日17：00止)，說明會當日詳述操作步驟。歡迎師長與助理報名參加，提供午膳。</p>\r\n\r\n<p>報名：<a href=\"https://psfcost.nchu.edu.tw/registration/?ACTID=1832\">第一場3月14日</a>&nbsp;</p>\r\n\r\n<p>報名：<a href=\"https://psfcost.nchu.edu.tw/registration/?ACTID=1833\">第二場3月20日</a></p>\r\n\r\n<p>助理報名請務於報名資料&quot;職稱&quot;欄位填寫指派出席的老師姓名(例：楊OO老師助理)，以加快審核速度。</p>\r\n\r\n<p>附件:<a href=\"https://cdtl.nchu.edu.tw/all_upload_file/news/data/%E6%B5%B7%E5%A0%B1_%E5%BE%B5%E4%BB%B6%E8%AA%AA%E6%98%8E%E6%9C%83_A4.pdf\">海報_徵件說明會_A4.pdf </a></p>\r\n', '2019-04-17 09:16:58'),
(5, ' 【新進教師】107-2學期「教師傳習團隊計畫」受理申請至5月13日止', '<p>依據「國立中興大學教師傳習制度實施辦法」第四條規定，申請條件如下：</p>\r\n\r\n<p>一、本校新進專任教師，擔任專任教師之教學<span class=\"marker\">總年資未滿三年者<strong>「應」</strong>參加</span>。<strong>&rarr;105年8月1日以後報到教師請記得申請。</strong></p>\r\n\r\n<p>二、本校專任教師，有需求者，經中心審核通過或邀約，亦得參與。</p>\r\n\r\n<p>補充：專任教師包含專案教師。計畫申請通過後需執行1年。專案教師若聘期未達1年，不適用本計畫。</p>\r\n\r\n<p>**************************************************************************************</p>\r\n\r\n<p><strong>三年內新進教師(學習者Mentee)申請步驟說明：</strong></p>\r\n\r\n<p><strong>(一)先找傳授者(Mentor)：傳授者名單(<a href=\"http://cdtl.nchu.edu.tw/teacherMentors.php\">點選</a>)</strong>，傳授者不限系上教師，可跨系所、學院，從中選一名熱血教師邀請擔任傳授者。</p>\r\n\r\n<p><strong>(二)線上提出申請：</strong>確認傳授者名單後，請至<strong>教學計畫申請系統(<a href=\"https://cdtl.nchu.edu.tw/2019application/index.php\">請點選</a>)申請。</strong>首次登入系統之傳授者與學習者請先註冊。<strong>107-2學期受理申請至108年5月13日止</strong></p>\r\n\r\n<p><strong>(三)等候申請結果：</strong>審查結果由系統發信通知Mentor與Mentee。每隊補助乙萬元，109年1月31日前結束活動。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>附件：<a href=\"http://cdtl.nchu.edu.tw/all_upload_file/news/data/107-2%E9%80%9A%E7%9F%A5%E5%8F%97%E7%90%86%E6%95%99%E5%B8%AB%E5%82%B3%E7%BF%92%E5%9C%98%E9%9A%8A%E7%94%B3%E8%AB%8B%E8%87%B35%E6%9C%8813%E6%97%A5.pdf\">107-2通知受理教師傳習團隊申請至5月13日.pdf</a></p>\r\n', '2019-05-02 14:09:47'),
(6, '107-2 校院級課程優良TA申請至108年6月28日止', '<p style=\"text-align:center\"><strong>108</strong><strong>學年度第</strong><strong>1</strong><strong>學期</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>校級通識課程及院級</strong><strong> (</strong><strong>含跨院</strong><strong>) </strong><strong>學士班基礎學科教學助理</strong><strong> (TA) </strong><strong>申請說明</strong></p>\r\n\r\n<ul>\r\n	<li>教育部已於108年2月1日實施大專校院聘用教學助理全面納保，教學助理以勞僱聘任，本校依「教學助理制度實施要點」辦理(<a href=\"https://cdtl.nchu.edu.tw/all_upload_file/law/6/%E5%9C%8B%E7%AB%8B%E4%B8%AD%E8%88%88%E5%A4%A7%E5%AD%B8%E6%95%99%E5%AD%B8%E5%8A%A9%E7%90%86%E5%88%B6%E5%BA%A6%E5%AF%A6%E6%96%BD%E8%A6%81%E9%BB%9E_1071226.pdf\"><em>附件一</em></a>)。</li>\r\n	<li>開課單位應於聘期開始前完成教學助理聘任流程，系統相關操作說明請見教發中心網頁-<a href=\"https://cdtl.nchu.edu.tw/ta.php\">學生公費與獎助學金教學助理</a>專區。</li>\r\n	<li>108學年度第1學期校院級課程修課人數之計算，同課程以107學年度為計算值，新課程以107學年度校院級課程平均修課人數為計算值，計算開課單位補助金額。</li>\r\n	<li><strong>審核及經費補助</strong>：校級通識課程及院級(含跨院)學士班基礎學科之TA申請案審核及經費補助由TA審查委員會依當學期經費核定，各開課單位應訂定TA補助標準，包含工作時數及每月薪資，並執行及報支經費。</li>\r\n	<li><strong>申請時程：</strong>即日起受理學院、學系或授課教師申請至<span style=\"color:#FF0000\"><strong>108</strong><strong>年</strong><strong>6</strong><strong>月</strong><strong>27</strong><strong>日</strong><strong>(</strong><strong>四</strong><strong>)</strong></span><strong><span style=\"color:#FF0000\">止</span>。</strong></li>\r\n	<li><strong>申請方式</strong>：\r\n	<ol>\r\n		<li>院級 (含跨院) 學士班基礎學科可申請A、B、C其中一類TA，並填寫TA協助教學計畫及TA人選，其協助事項應符合所選類別內容。申請表如<em>附件二</em>，申請資料請送教發中心 (行政大樓2樓)。</li>\r\n		<li>校級大一英文課程 (開課單位：語言中心) 授課教師可依課程屬性及規畫，勾選申請A、B其中一類TA，並填寫TA協助教學計畫及TA人選，其協助事項應符合所選類別內容。申請表如<em>附件三</em>，申請資料請於期限內送語言中心 (萬年樓5樓508室)。</li>\r\n		<li>校級通識課程 (開課單位：通識教育中心) 授課教師可依課程屬性及規畫，勾選申請A、B、C其中一類TA，並填寫TA協助教學計畫及TA人選，其協助事項應符合所選類別內容。申請表如<em>附件四</em>，申請表及相關說明請至<a href=\"http://cah.nchu.edu.tw/news_detail.php?ns_id=1211\">通識中心網頁</a>下載，申請資料請於期限內送通識教育中心 (綜合大樓6樓)。</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>受補助課程須配合</strong>：\r\n	<ol>\r\n		<li>請修課學生於學期第15-16週期間登入教務系統填寫TA服務意見調查。</li>\r\n		<li>授課教師於學期第17-18週期間登入教務系統填寫TA服務意見調查。</li>\r\n		<li>課程TA於學期第17-18週期間登入教務系統填寫自評表。</li>\r\n		<li>鼓勵TA參加教發中心所舉辦之TA研習活動，其結果將作為評量TA表現及選拔優良TA參考。遴選優良TA初審標準之一：須符合學期間至少參與2場教發中心所認可之研習活動。</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>注意事項：</strong>課程申請TA通過與否及助學金核發標準 (由各開課單位訂定) 須待「校院級課程教學助理審查委員會」審核後始得確定，提醒授課教師務必針對申請該科目之TA說明相關權益，在課程未確認是否補助前，勿提前承諾給予補助。</li>\r\n</ul>', '2019-06-13 16:15:10'),
(7, '2019教學計畫徵件＆系統操作說明會', '<p>2019教學計畫徵件＆系統操作說明會訂於108年3月14、20日中午12：10-13：30在綜合教學大樓102翻轉教室舉行，本次說明會介紹的計畫類別包含：總整課程、問題導向學習(PBL)、數位教學課程(開放式課程、翻轉教室及磨課師)、教師成長社群及教師傳習團隊等5種計畫。為簡化作業流程，今年度計畫採線上申請(受理至108年4月8日17：00止)，說明會當日詳述操作步驟。歡迎師長與助理報名參加，提供午膳。</p>\r\n\r\n<p>報名：<a href=\"https://psfcost.nchu.edu.tw/registration/?ACTID=1832\">第一場3月14日</a>&nbsp;</p>\r\n\r\n<p>報名：<a href=\"https://psfcost.nchu.edu.tw/registration/?ACTID=1833\">第二場3月20日</a></p>\r\n\r\n<p>助理報名請務於報名資料&quot;職稱&quot;欄位填寫指派出席的老師姓名(例：楊OO老師助理)，以加快審核速度。</p>\r\n\r\n<p>附件:<a href=\"https://cdtl.nchu.edu.tw/all_upload_file/news/data/%E6%B5%B7%E5%A0%B1_%E5%BE%B5%E4%BB%B6%E8%AA%AA%E6%98%8E%E6%9C%83_A4.pdf\">海報_徵件說明會_A4.pdf </a></p>', '2019-09-11 11:30:05'),
(9, '108年度教學計畫成果暨109年度徵件說明會', '<p>老師好，<br />\r\n<br />\r\n108年度創新教學課程計畫成果短片業已完成拍攝，包括總整課程、問題導向學習(PBL)計畫、數位教學課程(磨課師、翻轉教學、開放式課程)、教師成長社群、教師團習等，皆已上傳至本校興學堂影音網，歡迎各位老師撥冗觀看。興學堂影片網址 <a href=\"https://cdtl.video.nchu.edu.tw/km/1274\">https://cdtl.video.nchu.edu.tw/km/1274</a><br />\r\n<br />\r\n108年度教學計畫成果分享會訂於3月26日於綜大101教室舉辦，屆時將安排各得獎教師分享教學經驗，同時亦將辦理109年度教學計畫徵件說明會，歡迎有意願申請之教師報名參加。<br />\r\n報名連結如下 <a href=\"https://psfcost.nchu.edu.tw/registration/?ACTID=2422\">https://psfcost.nchu.edu.tw/registration/?ACTID=2422</a><br />\r\n<br />\r\n108年度成果分享會暨109年度徵件說明會<br />\r\n報名網址：<a href=\"https://psfcost.nchu.edu.tw/registration/?ACTID=2422\">https://psfcost.nchu.edu.tw/registration/?ACTID=2422</a><br />\r\n日期時間：109年3月26日上午10:00 ~ 下午4:00<br />\r\n活動地點：綜合教學大樓101翻轉教室<br />\r\n另外，109年度徵件說明會將採實體與線上直播等2種方式同時進行，可先至iLearning，加入課程「109年度教學計畫徵件說明會」，以便3/26進入線上直播室。</p>\r\n', '2020-03-25 10:19:10'),
(10, '123456', 'test123789', '2022-04-27 01:15:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
