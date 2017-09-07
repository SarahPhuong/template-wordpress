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
					<h3 class="title-h3"><?php echo $cater->name?></h3>
					<div class="seemore"><a href="<?php echo $link?>">Xem tất cả</a></div>
				</div>
				<ul>
					<?php 
					// the query
					//$slug=$_REQUEST["danh-muc"];
					 
					$cater = get_queried_object();					     
					$taxonomy=$cater->taxonomy;
					$tendm=$cater->name;
					$slug=$cater->slug;
					 
					$args = array(
						'post_type' => 'san-pham',
						'tax_query' => array(
							array(
								'taxonomy' => 'danh-muc',
								'field'    => 'slug',
								'terms'    => $slug,
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
						</li>
						<?php } ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata();

						}
						?>
				
						 
						
						
				</ul>
			</div>
			 
		
		</div>
	</section>
	
	
	<?php 
		include("footer.php");
	?>
</div>

</body>
</html>