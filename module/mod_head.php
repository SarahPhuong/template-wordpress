<header class="header">
		<div class="main-header container">
			<div class="header-top">
				<div class="header-top-left">
					<a href="<?php echo home_url();?>"><img class="hvr-float" src="<?php bloginfo('template_directory'); ?>/img/logo.png"/></a>
				</div>
				<div class="header-top-right">
					<h1 class="h1-tct">CÔNG TY TNHH SẢN XUẤT-THƯƠNG MẠI-CƠ KHÍ-DỊCH VỤ NAM NGUYÊN</h1>
					<div class="dc-ct">Đ/C :36/3I đường TTH07 –KP3- phường Tân Thới Hiệp- Q12 -TP HCM</div>
					<div class="dt-ct">ĐT : 0903 369 814</div>
					<div class="header-top-bot">
						<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/slogan.png"/></a></br>
						<img src="<?php bloginfo('template_directory'); ?>/img/border-ngan.png">
					</div>
				</div>
				
			</div>
			<div class="header-bots tr_pc">
				<div class="header-bot-menus ">
					<ul>
						<li><a href="<?php echo home_url();?>">TRANG CHỦ</a></li>
						<li><a href="<?php echo get_post_type_archive_link("gioi-thieu");?>">GIỚI THIỆU</a></li>
						<li><a href="<?php echo get_post_type_archive_link("san-pham");?>">SẢN PHẨM</a>
							
							
							<ul class="sub-menu">
							 <?php 
							      $taxonomy="danh-muc";
								  $catergory = get_terms(
								  $taxonomy,
									  array(	
									  'orderby'    => 'custom_sort',									  	
									  'parent'=>0,
									  'order'    => 'desc',	
									  'hide_empty' => 0	
									  )	
								  ); 	
								 
								
								 foreach($catergory as $cater)
								 {
								    $name=$cater->name;
								    $tem_child=get_term_children( $cater->term_id, $taxonomy );
									$link=get_term_link( $cater->term_id, $taxonomy);	
						?>
								<li><a href="<?php echo $link?>"><?php echo $name ?></a>
									<?php 
										if($tem_child!=Null)
										{
										  $catergory1 = get_terms(
										  $taxonomy,
											  array(	
											  'orderby'    => 'custom_sort',									  	
											  'parent'=>$cater->term_id,
											  'order'    => 'desc',	
											  'hide_empty' => 0	
											  )	
										  ); 	
										  ?>
										  <ul class="sub-sub-menu">
 									        <?php 
												foreach($catergory1 as $term_list)
												{
												 $link=get_term_link( $term_list->slug, $taxonomy);	
												  ?>
												  <li><a href="<?php echo $link?>"><?php echo $term_list->name ?></a>
												  <?php 
												}
											?>
										  
										  </ul>
										  <?php 
										}
									?>
								
								</li>
								<?php 
								 }
								?>
								 
							</ul>
						</li>
						<li><a href="<?php echo get_post_type_archive_link("du-an");?>">DỰ ÁN</a></li>
						<li><a href="<?php echo get_post_type_archive_link("khach-hang");?>">KHÁCH HÀNG</a></li>
						<li><a href="<?php echo get_post_type_archive_link("tin-tuc");?>">TIN TỨC</a>
						  	<ul class="sub-menu">
						<?php 
							      $taxonomy="nhom-tin";
								  $catergory = get_terms(
								  $taxonomy,
									  array(	
									  'orderby'    => 'custom_sort',									  	
									  'parent'=>0,
									  'order'    => 'desc',	
									  'hide_empty' => 0	
									  )	
								  ); 	
								 
								 foreach($catergory as $cater)
								 {
								    $link=get_term_link($cater->term_id,$taxonomy);
								   ?>
								   	<li><a href="<?php echo $link?>"><?php echo $cater->name?></a></li>
								   <?php 
								 }
						?>
							</ul>
						</li>
						<li><a href="<?php echo get_permalink(61); ?>">LIÊN HỆ</a></li>
					</ul>
				</div>
				<div class="header-bot-search">
					<form action="">
					  <input type="text" placeholder="Tìm kiếm" name=""></input>
					  <button><span class="glyphicon glyphicon-search"></span></button>
					</form>
				</div>
			</div>
			<div id="page" class="tr_mobile d_mneu_mobile">
				<div class="header1">
					<a href="#menu"></a>
					<div class="header-bot-search">
					<form action="">
					  <input type="text" placeholder="Tìm kiếm" name=""></input>
					  <button><span class="glyphicon glyphicon-search"></span></button>
					</form>
				</div>
				</div>
				<nav id="menu">
					<ul>
						<li><a href="">Trang chủ</a></li>
						<li><a href="">Giới thiệu</a></li>
						<li><a href="">Sản phẩm</a>
							<ul>
								<li><a href="">SẢN PHẨM 1</a></li>
								<li><a href="">SẢN PHẨM 2</a></li>
							</ul>
						</li>
						<li><a href="">Liên hệ</a></li>
					</ul>
				</nav>
				
			</div>
		</div>
	</header>
	<section class="container slider">
			<div id="Carousel" class="carousel carousel-fade slide"><!-- carousel-fade -->
					
					
					
					<ol class="carousel-indicators">
					<?php 
						$args = array(
						'post_type' => 'banner'
						 
					);
					
					$the_query = new WP_Query( $args ); ?>

					<?php 
					if ( $the_query->have_posts() )
					{
				         $dem=-1;
						  while ( $the_query->have_posts() )
							{
							  $the_query->the_post(); 
							  $name=$the_query->post->post_title;
							  $id=$the_query->post->ID;
							  $ngay_dang=$the_query->post->post_date;
							  $dem++;
							  ?>
							   <li data-target="Carousel" data-slide-to="<?php echo $dem?>" 
							   <?php if($dem==0) echo ' class="active"' ?>
							  ></li>
							   <?php 	
							}	
					}			
					
					?>
						 
					
					</ol>

					<div class="carousel-inner">
						<?php 
						$args = array(
						'post_type' => 'banner'
						 
					);
					
					$the_query = new WP_Query( $args ); ?>

					<?php 
					if ( $the_query->have_posts() )
					{
				         $dem=-1;
						  while ( $the_query->have_posts() )
							{
							  $the_query->the_post(); 
							  $name=$the_query->post->post_title;
							  $id=$the_query->post->ID;
							  $ngay_dang=$the_query->post->post_date;
							  $dem++;
							  $img=do_shortcode('[types field="hinh-banner" id="$id" output="raw"]'); 
			
							  
							  ?>
							  <div class="item <?php if($dem==0) echo 'active'?>">
									<img src="<?php echo $img ?>" class="img-responsive">
							</div>
							   <?php 	
							}	
					}			
					
					?>
					
						 
					</div>

					<a class="left carousel-control" href="#Carousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#Carousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
			</div>
			<div class="bg-carou"></div>
	</section>
	