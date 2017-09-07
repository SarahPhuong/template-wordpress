<div class="sidebar-left">
			<div class="sbl-top">
				<div class="bg-sbl-top"></div>
				<div class="sbl-title">
					<h3>SẢN PHẨM</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/border-ngan.png">
				</div>
				<div class="sbl-ul">
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
								
						 ?>
							<ul class="">
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
										   <ul class="">
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
				</div>
				<div class="bg-sbl-bot"></div>
			</div>
			<div class="sbl-top sbl-top-bs">
				<div class="sbl-title sbl-titles">
					<h3>HỔ TRỢ TRỰC TUYẾN</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/border-ngan.png">
				</div>
				<div class="yh-sk">
					<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/yh.png"></a>
					<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/sk.png"></a>
				</div>
				<div class="hotlines">Hotline: 0903 369 814</div>
			</div>
			<div class="sbl-top sbl-top-bs">
				<div class="sbl-title sbl-titles">
					<h3>VIDEO</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/border-ngan.png">
				</div>
				<div class="video">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/bM7SZ5SBzyY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="sbl-top sbl-top-bs">
				<div class="sbl-title sbl-titles">
					<h3>THỐNG KÊ TRUY CẬP</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/border-ngan.png">
				</div>
				<div class="tktc">
					<ul>
						<li><a>Đang truy cập: 50</a></li>
						<li><a>Trong ngày: 509</a></li>
						<li><a>Trong tuần: 3125</a></li>
						<li><a>Lượt truy cập: 53597</a></li>
					</ul>
				</div>
			</div>
		</div>
		