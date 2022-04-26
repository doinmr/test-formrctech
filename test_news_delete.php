<?php
	session_start();

	//判斷是否登入
	if(isset($_SESSION['userid'])==FALSE){
		echo "<meta http-equiv=REFRESH CONTENT=0;url=login.php>";
	}
	if(trim($_REQUEST["deleteid"])==""){
		echo "<script>alert('請確認欲刪除之編號!');history.go(-1);</script>";
		exit;	
	}	
	require_once 'conn.php';
	$deleteid = $_REQUEST['deleteid'];
	$delete_sql = "DELETE FROM news WHERE news_id = '".$deleteid."'";
	$delete_result = mysqli_query($con, $delete_sql);
	header("location:test_news_view.php");
?>