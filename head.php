<!--bootstrap&css引用檔-->
<?php 	

	//session開始				
	session_start();
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	//20210620add
	/*header('X-Content-Type-Options: nosniff');
	header("Content-Security-Policy: default-src *");
	header("Strict-Transport-Security:max-age=63072000");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header("Referrer-Policy: no-referrer");
	header("X-Frame-Options: SAMEORIGIN");
	header("Permissions-Policy: geolocation=(self 'https://example.com'), microphone=()");*/
	//end
	$userid = $_SESSION['userid'];
	$manage_class = $_SESSION["manage_class"];
	$manage_level = $_SESSION["level"];
	
	//判斷是否有登入(有無session)，如果沒有，回到登入頁面
	if(isset($_SESSION['userid'])==FALSE){
		header('Location: login.php');
	}
	if(isset($_SESSION['level'])==FALSE){
		header('Location: index.php');
	}	
	if(isset($_SESSION['manage_class'])==FALSE){
		header('Location: index.php');
	}
	if(isset($_SESSION['level'])==FALSE||$_SESSION['level']==2 ||$_SESSION['level']==3||$_SESSION['level']==4){
		header('Location: index.php');
	}
	//獲取ip位置
	function GetIP()
	{
		if(!empty($_SERVER["HTTP_CLIENT_IP"])){
		$ip = $_SERVER["HTTP_CLIENT_IP"];
		}
		elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		}
		elseif(!empty($_SERVER["REMOTE_ADDR"])){
		$ip = $_SERVER["REMOTE_ADDR"];
		}
		else{
		$ip = "無法取得IP位址！";
		}
		return $ip;
	}
	$ip = GetIP();
	/*		
	$remoteip = explode('.', $_SERVER['REMOTE_ADDR']);
	if (($remoteip[0] === '140') && ($remoteip[1] === '120')) {
		$_SESSION['level'] = $ip;
	}
	else{
		echo "<script>alert('後台功能僅限校內IP使用!');</script>";
		echo "<meta http-equiv=REFRESH CONTENT=0;url=index.php>";
		exit;
	}		
		*/	
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="Dashboard" name="author">
	<meta content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" name="keyword">
	<title>教學計畫申請系統</title>	
	<!-- 網站icon -->
	<!-- 網站icon -->
	<link rel="Shortcut Icon" type="image/x-icon" href="assets/img/logo.ico"/>	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<!--table--->	
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
	<!--external css-->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!--Font Awesome 4.7-->
	<link href="assets/css/zabuto_calendar.css" rel="stylesheet" type="text/css">
	<link href="assets/js/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css">
	<link href="assets/lineicons/style.css" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-responsive.css" rel="stylesheet">
	<script src="assets/js/chart-master/Chart.js"></script><!--圖表-->
	<link hrel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.css"/>
	<!-- 時間選擇器 -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery.datetimepicker.full.min.js"></script>
	<!-- 文字編輯器 -->
	<script src="FileUpload/ckeditor/ckeditor.js"></script>
	<script src="FileUpload/ckfinder/ckfinder.js"></script> 
	<section id="container">
		<!--引入主選單-->
		<?php require("header.php");?>
		<section id="main-content">
			<section class="wrapper">
				<div class="row">
					<div class="col-lg-12 main-chart">
						<div class="container-fluid">
