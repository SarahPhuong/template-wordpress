<?php 
	include("header.php");
?>
<body>

<div class="wrapers">
	<?php 
		include("module/mod_head.php");
	?>
	<section class="content container containers">
		<?php 
		include("module/mod_left.php");
	?>
		<div class="main-right">
			<div class="sec-sp">	
				<div class="title-sp">
					<h3 class="title-h3"> <?php post_type_archive_title(); ?></h3>
					<div class="seemore"><a href="">Xem tất cả</a></div>
				</div>
				 
			</div>
			
			
		</div>
	</section>
	<?php 
		include("footer.php");
	?>
	
	
</div>
 
</body>
</html>