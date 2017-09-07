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
				   <?php 
					the_post();
					
				   ?>
					<h3 class="title-h3"><?php the_title();?></h3>
			 	</div>
				<div class="gioi_thieu">
				    
				   <?php 
					 the_content();
				   ?>
				 
				 
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