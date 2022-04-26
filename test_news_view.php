<?php

	//公告總覽
	require("head.php");
	include("conn.php");
	
	//判斷是否點選頁數 無則為第一頁
	if(isset($_GET["page"])){ 
		$page  = $_GET["page"]; 
	} 
	else{ 
		$page=1; 
	} 	
	
	$num_rec_per_page = 10; 
	$start_from = ($page-1) * $num_rec_per_page; 
	//印出資料
	$common_sql = "SELECT * FROM news";
	
	//檢查用，顯示錯誤訊息
	$common_result = mysqli_query($con,$common_sql) or die("<meta http-equiv=REFRESH CONTENT=0;url=error_page.php>");
	//分頁用
	$page_sql = $common_sql." LIMIT $start_from, $num_rec_per_page"; 
	$page_result = mysqli_query ($con,$page_sql);
	$total_result = mysqli_query($con,$common_sql); 
	$total_records = mysqli_num_rows($total_result);  //統計總計錄數
	$total_pages = ceil($total_records / $num_rec_per_page);  //計算總頁數
	$this_url = "test_news_view.php";

?> 
<script type="text/javascript">
//li展開&選中效果
window.onload =function() 
{
	var page ="<?php echo $page;?>";
	$('#li'+page).addClass("active");
}
</script>
<div class="container-fluid">
	<h3><b>公告設定</b><a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#add_data_Modal">+新增</a></h3></h3>
	<hr class="style02">
	<div class="col-lg-12">
		<table class="table table-bordered">  
			<tr>
				<th class="col-sm-2">序號</th>
				<th class="col-sm-3">標題</th>
				<th class="col-sm-4">內容</th>
				<th class="col-sm-1">建立時間</th>				
				<th class="col-sm-2">動作</th>
			</tr>  
			<?php
			while($row = mysqli_fetch_array($page_result)){
			?>  
			<tr>
				<td><?php echo $row["news_id"];?></td>
				<td><?php echo $row["news_title"];?></td>
				<td><?php echo $row["news_content"];?></td>
				<td><?php echo date('Y/m/d H:i:s',strtotime($row["news_date"]));?></td>
				<td class="text-center">
					<button class="btn btn-sm btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['news_id']?>">更新</button>
				<?php echo "<a id='' title='刪除' class='btn btn-sm btn-danger' onclick='return window.confirm(\"即將刪除公告".$row['news_id']."!\")?window.confirm(\"刪除後將無法復原，您確定要刪除嗎\"):false;'
				href='test_news_delete.php?deleteid=". $row["news_id"] ."')'>刪除</a>";?>
				</td>
			</tr>
			<?php
				include 'test_news_editmodal.php';
			}
			?>
		</table>
	</div>
</div>
<?php 
	//引入新增視窗
	include("test_news_addmodal.php");
	
	//產出分頁
	echo "<div class=\"page\"><ul class=\"pagination\"><li><a href='".$this_url."?page=1'>"."|<"."</a></li>"; //第一頁
	for ($i=1; $i<=$total_pages; $i++) { 
		echo "<li id=\"li".$i."\"><a href='".$this_url."?page=".$i."'>".$i."</a></li>"; 
	}; 
	echo "<li><a href='".$this_url."?page=".$total_pages."'>".">|"."</a></li></div>"; //最後一頁
	
	//引入頁尾
	include("footer.php");
?>