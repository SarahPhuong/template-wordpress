<header class="header">
		<div class="main-header container">
			<div class="header-top">
				<div class="header-top-left">
					<a href=""><img class="hvr-float" src="<?php bloginfo('template_directory'); ?>/img/logo.png"/></a>
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
						<li><a href="<?php echo get_post_type_archive_link("gioi-thieu") ?>">GIỚI THIỆU</a></li>
						<li><a href="">SẢN PHẨM</a>
						 <?php 
							$taxonomy="danh-muc";
							$catergory = get_terms(
								  $taxonomy,
									  array(	
									  'orderby'    => 'custom_sort',	
									  'parent'=>0,
									  'order'    => 'desc',	
									  'hide_empty' =>0	
									  )	
								  ); 	
								  echo"<pre>";
								 print_r($catergory);
								 echo"</pre>";
						 ?>
							<ul class="sub-menu">
							  <?php 
								 foreach($catergory as $cater)
								 {
								   $link=get_term_link($cater->term_id,$taxonomy);
								    ?>
									<li><a href="<?php echo $link?>"><?php echo $cater->name?></a>
									
									<?php 
										$child=get_term_children($cater->term_id ,$taxonomy);
										if($child!=NULL)
										{
										  ?>
										   <ul class="sub-sub-menu">
											<?php 
												$catergory_1 = get_terms(
												  $taxonomy,
													  array(	
													  'orderby'    => 'custom_sort',	
													  'parent'=>$cater->term_id,
													  'order'    => 'desc',	
													  'hide_empty' =>0	
													  )	
												  ); 	
												   foreach($catergory_1 as $cater_1)
													{
														 $link=get_term_link($cater_1->term_id,$taxonomy);
											?>
												<li><a href="<?php echo $link?>"><?php echo $cater_1->name?></a></li>
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
						<li><a href="<?php echo get_post_type_archive_link("du-an") ?>">DỰ ÁN</a></li>
						<li><a href="">KHÁCH HÀNG</a></li>
						<li><a href="">TIN TỨC</a></li>
						<li><a href="<?php echo get_permalink(52)?>">LIÊN HỆ</a></li>
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
						<li data-target="Carousel" data-slide-to="0" class="active"></li>
						<li data-target="Carousel" data-slide-to="1"></li>
						<li data-target="Carousel" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php bloginfo('template_directory'); ?>/img/slider.png" class="img-responsive">
						</div>
					   <div class="item">
						 <img src="<?php bloginfo('template_directory'); ?>/img/slider.png" class="img-responsive">
						</div>
					   <div class="item">
						 <img src="<?php bloginfo('template_directory'); ?>/img/slider.png" class="img-responsive">
						</div>
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
	
	