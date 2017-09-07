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
					<h3 class="title-h3">Giới thiệu</h3>
			 	</div>
				<div class="gi_thieu">
				  <li>
					  <img src="<?php bloginfo('template_directory'); ?>/img/logo.png"/>
					  Tên bài viêt
					  Tóm tác
				 </li>
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