<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['add'])){
		date_default_timezone_set('Asia/Taipei');
		$news_date = date('Y/m/d H:i:s');
		$news_title = $_POST["news_title"];
		$news_content = $_POST["add_news_content"];
		$update_sql = "INSERT INTO news(news_title, news_content, news_date) VALUES ('$news_title', '$news_content', '$news_date')";
		$update_result = mysqli_query($con, $update_sql);
		header("location:test_news_view.php");
	}
?>