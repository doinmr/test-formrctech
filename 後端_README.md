# test-formrctech
奇迹科技股份有限公司 面試前測
//
1.建立資料庫
CREATE DATABASE 資料庫名稱;

2.建立資料表
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '自動編碼',
  `news_title` varchar(100) NOT NULL COMMENT '標題',
  `news_content` mediumtext NOT NULL COMMENT '消息內容',
  `news_date` datetime NOT NULL COMMENT '建立時間',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='最新公告 ';
//
