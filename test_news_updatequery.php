<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$news_id = $_POST['news_id'];
		$news_title = $_POST['news_title'];
		$news_content = $_POST['news_content'];
		$update_sql = "UPDATE news SET news_title= '$news_title', news_content= '$news_content' WHERE news_id='".$news_id ."'";  
		$result = mysqli_query($con, $update_sql); 
		header("location:test_news_view.php");
	}
?>