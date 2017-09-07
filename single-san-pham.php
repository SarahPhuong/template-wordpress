<?php 
	include("header.php");
?>
<body>

<?php 
	 
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
		    	<div class="sec-sp">	
					<div class="title-sp">
						<h3 class="title-h3">
						<?php the_post(); ?>
						<?php the_title();?></h3>
					</div>
					<div class="tr_content">
					    <?php 
							the_content();
						?>
					</div>
					<div class="thong_tin_them">
					
						<?php 
						    $id=$post->ID;
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
							  echo $img."<br/>";
							  echo $gia;
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