 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog modal-lg">  
           <div class="modal-content">  
			<form method="POST" action="test_news_insert.php">
                <div class="modal-header">  
					<h3 class="modal-title">公告設定</h3>
                </div>  
				<div class="modal-body">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="form-group">
							<label>標題：</label><br>
							<input type="text" class="form-control" name="news_title" id="news_title" maxlength="30">
							<label>內容：</label>
							<textarea class="form-control" name="add_news_content" id="add_news_content" rows="20" maxlength="600"></textarea>
							<hr>
						</div>
					</div>
				</div>
				</div>
				<div style="clear:both;"></div>
                <div class="modal-footer">  
					<button name="add" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> 新增</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div> 
			</form>
           </div>  
      </div>  
 </div>	  
 <!--文字編輯器-->
<script>
	CKEDITOR.replace('news_content');
	CKEDITOR.replace('add_news_content');
</script>
