<?php 
	include("header.php");

?>
<body>

<?php 
    $page_gio_hang=64;
	/*	// the query
		$args = array(
			'post_type' => 'san-pham',
			'tax_query' => array(
				array(
					'taxonomy' => 'loai-san-pham',
					'field'    => 'slug',
					'terms'    => 'bob',
				),
			),
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
				  
				?>
				<h2><?php echo $name  ?> - <?php echo $ngay_dang?> </h2>
			<?php } ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata();

			}
			
	*/		
			?>
			
			
<div class="wrapers">
	<?php 
			include("module/mod_head.php");
		?>
	<section class="content container containers">
		<?php 
			include("module/mod_left.php");
		?>
		<div class="main-right">
		   <?php 
			$taxonomy="loai-san-pham";
			$catergory = get_terms(
			  $taxonomy,
				  array(	
				  'orderby'    => 'custom_sort',	
				  'parent'=>0,
				  'order'    => 'desc',	
				  'hide_empty' =>0	
				  )	
			  ); 	
			 
			 
			 foreach($catergory as $cater)
			{
				   $link=get_term_link($cater->term_id,$taxonomy);
		   ?>
			<div class="sec-sp">	
				<div class="title-sp">
					<h3 class="title-h3"><?php echo $cater->name?></h3>
					<div class="seemore"><a href="<?php echo $link?>">Xem tất cả</a></div>
				</div>
				<ul>
					<?php 
					// the query
					$args = array(
						'post_type' => 'san-pham',
						'tax_query' => array(
							array(
								'taxonomy' => 'loai-san-pham',
								'field'    => 'slug',
								'terms'    => $cater->slug,
							),
						),
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
							  $img=do_shortcode('[types field="hinh-dai-dien-sp" id="$id" output="raw"]'); 
							  $link=get_permalink($id);
							  $gia=do_shortcode('[types field="gia" id="$id"]');
							  if($gia=="")
							  {
							    $gia=" Liên hệ";
							  }
							  else
							  {
							     $gia=number_format($gia, 0, ',', '.');
									$gia=$gia." ₫";
							  }
		
							?>
							
						<li><a href="<?php echo $link?>">
							<div class="img-sp"><img src="<?php echo $img ?>"></div>
							<h4 class="name-sp"><?php echo $name?></h4>
							<div class="price-sp">Giá bán: <span><?php echo $gia?></span></div>
						</a>
						<a href="<?php echo get_permalink($page_gio_hang)?>&task=add&id=<?php echo $id?>">Thêm vào giỏ hàng </a>
						</li>
						<?php } ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata();

						}
						?>
				
						 
						
						
				</ul>
			</div>
			<?php 
			}
			?>
		
		</div>
	</section>
	
	
	<?php 
		include("footer.php");
	?>
</div>

</body>
</html>