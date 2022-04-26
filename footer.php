					</div>		
				</div><!--row -->
			</section>
		</section>
	<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery-1.8.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script class="include" src="assets/js/jquery.dcjqaccordion.2.7.js" type="text/javascript"></script><!--函式庫--> 
	<script src="assets/js/jquery.scrollTo.min.js"></script><!--獲取畫面高度-->
	<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script><!--滾動條--> 
	<script src="assets/js/common-scripts.js"></script>
	<!--回到最上方按鈕-->
	<div class="box" id="box">
		<div class="box-in"></div>
	</div>
	<!--回到頂部-->
	<script>
	var timer = null;
		box.onclick = function() {
		cancelAnimationFrame(timer);
		var startTime = +new Date();
		var b = document.body.scrollTop || document.documentElement.scrollTop;
		var d = 500;
		var c = b;
		timer = requestAnimationFrame(function func() {
		var t = d - Math.max(0, startTime - (+new Date()) + d);
		document.documentElement.scrollTop = document.body.scrollTop = t * (-c) / d + b;
		timer = requestAnimationFrame(func);
		if (t == d) {
			cancelAnimationFrame(timer);
		}
		});
	} 
	</script> 
</body>
</html>