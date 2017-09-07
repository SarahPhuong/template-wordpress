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
					<h3 class="title-h3">HÀM CĂNG BẢN</h3>
					<div class="seemore"><a href="">Xem tất cả</a></div>
				</div>
				LẤY Link Home : echo home_url(); <br/>
				Lấy đường dẫn template_custom_post_type: get_post_type_archive_link("slug-post-type");
				Lấy đường dẫn taxonomy: get_term_link("slug-taxonmy","tên-taxonomy"); <br/>
				Lấy danh sách taxonmy  <br/>
				$category=get_terms( <br/>
							$taxonomy, //tên của taxonomy <br/>
							array(	 <br/>
							'orderby'    => 'custom_sort',	//kểu sắp xếp tien	 <br/>							  	
							'parent'=>$cater->term_id,// cha của taxonomy hiện tại <br/>
							'order'    => 'desc',	// sắp xếp theo <br/>
							'hide_empty' => 0	// lấy bao nhiêu tin - 0 tất cả <br/>
							)	
				 ); 	
				 foreach($category as $cater)
				{
				   In ra cater->name; ( In tên danh mục );
				}
				
				/***********/ <br/>
				<h3>Lấy bài viết</h3>
			<?php 			  
			$args = array( 
				'post_type' => 'gioi-thieu',
				'posts_per_page' => 10,
				'post_status' => 'publish'
			
			);
			// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
					
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						echo '<li>' . get_the_title() . '</li>';
					}
					 
					
					wp_reset_postdata();
				} 
	?>
			 
			</div>
		
		
		</div>
	</section>
	<?php 
		include("footer.php");
	?>
	
	
</div>
 
</body>
</html>