<div class="modal fade" id="update_modal<?php echo $row['news_id']?>" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form method="POST" action="test_news_updatequery.php">
				<div class="modal-header">
					<h3 class="modal-title">公告設定</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<div class="form-group">
							<input type="hidden" name="news_id" value="<?php echo $row['news_id']?>"/>
							<label>標題：</label><br>
							<input type="text" class="form-control" name="news_title" id="news_title" maxlength="30" value="<?php echo $row["news_title"];?>">
							<label>內容：</label>
							<textarea class="form-control" name="news_content" id="news_content" rows="20" maxlength="600"><?php echo $row["news_content"];?></textarea>
							<hr>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>更新</button>
					<button class="btn btn-default" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> 取消</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>