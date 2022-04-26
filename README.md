# test-formrctech  
奇迹科技股份有限公司 面試前測  

## 1.建立資料庫  
CREATE DATABASE 資料庫名稱;  
  
## 2.建立資料表  
DROP TABLE IF EXISTS `news`;  
CREATE TABLE IF NOT EXISTS `news` (  
  `news_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '自動編碼',  
  `news_title` varchar(100) NOT NULL COMMENT '標題',  
  `news_content` mediumtext NOT NULL COMMENT '消息內容',  
  `news_date` datetime NOT NULL COMMENT '建立時間',  
  PRIMARY KEY (`news_id`)  
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='最新公告 ';  

![1650992043971](https://user-images.githubusercontent.com/104420343/165363188-6aee1ee5-1115-4b11-a580-f67189a99fe0.jpg)  

## 3.畫面參考
公告一覽
url：test_news_view.php  
![1650996197589](https://user-images.githubusercontent.com/104420343/165364016-8ab983ad-017f-43a3-baf8-ba8ea90f33be.jpg)  
  
新增公告  
url：test_news_insert.php   
呼叫方式：POST
![1650996229317](https://user-images.githubusercontent.com/104420343/165364022-37437dd8-6f54-44fc-be93-68d2647d0165.jpg)  
![1650996268150](https://user-images.githubusercontent.com/104420343/165364026-a2953ceb-e351-4578-9b6a-56275ff40314.jpg)  
  
修改公告  
url：test_news_updatequery.php  
呼叫方式： POST 
![1650996277488](https://user-images.githubusercontent.com/104420343/165364032-04c5f37e-ed51-4aab-a3d1-ea21095c9eb7.jpg)  
![1650996333838](https://user-images.githubusercontent.com/104420343/165364035-815ce776-1ddb-4d76-88d7-c3309f30ff25.jpg)  
![1650996340190](https://user-images.githubusercontent.com/104420343/165364039-86ca5413-c0bf-43ea-803a-7d4146c5776b.jpg)  
  
刪除公告  
url：test_news_delete.php  
呼叫方式：GET   
![1650996491261](https://user-images.githubusercontent.com/104420343/165364458-85e0cb92-d6e8-43fa-acca-f630c0d2ed22.jpg)  
![1650996475685](https://user-images.githubusercontent.com/104420343/165364448-05feed4f-866d-4fe6-81d8-9d4b729dee54.jpg)  
<div align="center">
	<img src="https://user-images.githubusercontent.com/104420343/165364448-05feed4f-866d-4fe6-81d8-9d4b729dee54.jpg" alt="Editor" width="200">
</div>
  
## 4.文件說明  
├── conn.php         //資料庫連線  
├── conn_config.php         //資料庫帳密  
├── footer.php         //html結構_註腳  
├── head.php         //html結構_網頁文檔屬性、相關資訊  
├── header.php         //html結構_標頭  
├── test_news_addmodal.php         //新增用Modal  
├── test_news_delete.php         //delete語法  
├── test_news_editmodal.php         //修改用Modal  
├── test_news_insert.php         //insert語法  
├── test_news_updatequery.php         //update語法  
└── test_news_view.php         //主頁面  

