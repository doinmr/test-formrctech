<?php
	//引入config
	require_once "conn_config.php";

	//用帳密連線
	$con = new mysqli(_DB_LOCATON,_DB_ID,_DB_PASS,_DB_NAME);
	//判斷是否有值
	if ($con->connect_error){
		die('無法連上資料庫：(' . $con->connect_errno.')'.$con->connect_error);
	}
	//設定連線編碼
	$con->set_charset("utf8");

?>