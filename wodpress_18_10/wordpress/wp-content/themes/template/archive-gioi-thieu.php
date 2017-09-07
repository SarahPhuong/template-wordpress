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
				<div class="gioi_thieu">
				   <?php 
		
					$args = array(
						'post_type' => 'gioi-thieu',
						 
					);
		
		
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() )
			{
		?>
			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() )
				{
				  $the_query->the_post(); 
				  $name=$the_query->post->post_title;
				  $id=$the_query->post->ID;
				  $ngay_dang=$the_query->post->post_date;
				  $link=get_permalink($id);
				  $post_excerpt=$the_query->post->post_excerpt;
				?>
				   <li>
					 <a href="<?php echo $link?>">
					 <img src="<?php bloginfo('template_directory'); ?>/img/logo.png"/></a>
					  <h3><a href="<?php echo $link ?>"><?php echo $name?> </a></h3>
					   <?php echo $post_excerpt?>
					  <div class="clear"></div>
				 </li>
				<?php } ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata();

				}
				

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